<?php
class Akademik extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('M_data');
    $this->load->view('penilaian/penilaian_header');
    $this->load->view('penilaian/penilaian_footer');   
  }

  function kaldik(){
    $kaldik = $this->M_data->getkaldik('2017-01-01', '2017-12-31');
        //echo $this->db->last_query();
        //print_r($kaldik);
    foreach ($kaldik as $rowkaldik) {
      $awal = strtotime($rowkaldik->tgl_awal);
      $akhir = strtotime($rowkaldik->tgl_akhir);
      $tgl = $awal;
      $i = 0;
      while ($tgl <= $akhir) {
        $libur[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->nama_kaldik;
        $simbol[date('Y', $tgl)][ltrim(date('m', $tgl), "0")][ltrim(date('d', $tgl), "0")] = $rowkaldik->simbol_kaldik;
        $tgl = $tgl + (60 * 60 * 24);
        $i++;
        if ($i>1000) { break; }
      }
    }
        //print_r($libur);
        //print_r($simbol);
    $data['libur'] = $libur;
    $data['simbol'] = $simbol;
    $data['kaldik'] = $kaldik;
    $this->load->view('KBM/kaldik', $data);
  }
  function tambah_kaldik(){
    $arrdata = array(
      'nama_kaldik'=>$this->input->post("nama_kaldik"),
      //'simbol_kaldik'=>$this->input->post("simbol_kaldik"),
      'tgl_awal'=>$this->input->post("tgl_awal"),
      'tgl_akhir'=>$this->input->post("tgl_akhir")
    );

    $config['upload_path']          = './assets/simbol/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('simbol_kaldik'))
    {
        $arrdata['simbol_kaldik'] = "";  
    }
    else
    {
        $arrdata['simbol_kaldik'] = $this->upload->data('file_name'); 
    }
    
    $this->M_data->tambahdata($arrdata, 'kaldik');
    redirect('akademik/kaldik');
  }
  function hapus_kaldik($id){
    $this->load->model('M_data');
    $where= array('id_kaldik'=>$id);
    $table= 'kaldik';
    $this->M_data->hapusdata($where,$table);
    redirect('akademik/kaldik');
  }
  public function form_edit_kaldik(){
    $this->load->model('M_data');
    $data['a']=$this->M_data->selectKaldik($this->uri->segment(3));
    $this->load->view('penilaian/edit/edit_kaldik',$data);
  }
  public function ubah_kaldik(){

    $this->load->model('M_data');
    //$id_kaldik=$this->input->post('id');
    $nama_kaldik=$this->input->post('nama_kaldik');
    //$simbol_kaldik=$this->input->post('simbol_kaldik');
    $tgl_awal=$this->input->post('tgl_awal');
    $tgl_akhir=$this->input->post('tgl_akhir');

    $data= array(
        'nama_kaldik'=>$nama_kaldik,
        //'simbol_kaldik'=>$simbol_kaldik,
        'tgl_awal'=>$tgl_awal,
        'tgl_akhir'=>$tgl_akhir
    );

    $config['upload_path']          = './assets/simbol/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 10000;
    $config['max_width']            = 10240;
    $config['max_height']           = 7680;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('simbol_kaldik'))
    {
        //$data['simbol_kaldik'] = "";  
    }
    else
    {
        $data['simbol_kaldik'] = $this->upload->data('file_name'); 
    }

    $this->M_data->editkaldik($data,$this->uri->segment(3));
    //$this->load->view('penilaian/kategorinilai');     
    //echo $this->db->last_query();
    redirect('akademik/kaldik');
  }
  function kurikulum(){
    $this->load->view('KBM/kurikulum');
  }
  function presensi(){
    $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;
    $id_kelas_reguler_berjalan = @$this->uri->segment(3);
    $data['kelas_reguler'] = $this->M_data->getkelasreguler(array('id_tahun_ajaran'=>$id_tahun_ajaran));
    //$data['kelas_reguler_berjalan'] = $this->M_data->getKelas()->result();
    $data['kelas_reguler_berjalan'] = $this->M_data->getKelasRegulerBerjalan($id_tahun_ajaran)->result();
    if ($id_kelas_reguler_berjalan == "") { $id_kelas_reguler_berjalan = @$data['kelas_reguler_berjalan'][0]->id_kelas_reguler_berjalan; }
    $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;
    $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
    $data['siswaperkelas'] = $siswaperkelas;

    $bln = date('m');
    $thn = date('Y');
    if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
    if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
    //$id_kelas_reguler_berjalan = '1';
    $data['bln'] = $bln;
    $data['thn'] = $thn;
    $data['id_kelas_reguler_berjalan'] = $id_kelas_reguler_berjalan;

    $this->load->model('tahunajaran_model');
    $datsemester = $this->tahunajaran_model->Getsemester();

    foreach ($siswaperkelas as $rowsiswa) {

      //for($i=1;$i<=date('t');$i++) {
      for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
        //echo $rowpeg->NIP."<br/>";
        //$datpresensi = $this->presensi_pegawai_model->getpresensi(date('Y-m-').substr($i+100, 1, 2), $rowpeg->NIP);
        $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
        //echo $this->db->last_query()."<br/>";
        if ($datpresensi) {
          //echo $rowpeg->NIP."===<br/>";
          $data['datpresensi'][$rowsiswa->nisn][$i] = $datpresensi->status_kehadiran;
          //$data['datwaktu'][$rowpeg->NIP][$i] = $datpresensi->Waktu_presensi;
        }
      }

      for ($i=1;$i<=12;$i++) {
        
        $data['datpresensibulan'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        $data['datpresensibulan'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
        $data['datpresensibulan'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
        $data['datpresensibulan'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensibulan($i, $thn, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
      }

      for ($i=1;$i<=2;$i++) {
        
        $data['datpresensisemester'][$rowsiswa->nisn][$i]['H'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'H', $id_kelas_reguler_berjalan)->jml;
        //echo $this->db->last_query();
        $data['datpresensisemester'][$rowsiswa->nisn][$i]['S'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'S', $id_kelas_reguler_berjalan)->jml;
        $data['datpresensisemester'][$rowsiswa->nisn][$i]['I'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'I', $id_kelas_reguler_berjalan)->jml;
        $data['datpresensisemester'][$rowsiswa->nisn][$i]['A'] = @$this->M_data->getpresensisemester($datsemester[$i-1]->tanggal_mulai, $datsemester[$i-1]->tanggal_selesai, $rowsiswa->nisn, 'A', $id_kelas_reguler_berjalan)->jml;
      }

    }
    $this->load->view('KBM/presensisiswa',$data);

  }

  public function simpanpresensi(){
    $this->load->model('M_data');
    $bln = date('m');
    $thn = date('Y');
    if (@$this->uri->segment(5) != "") { $bln = $this->uri->segment(5); }
    if (@$this->uri->segment(4) != "") { $thn = $this->uri->segment(4); }
    $id_kelas_reguler_berjalan=$this->input->post('id_kelas_reguler_berjalan');
    $id_tahun_ajaran = $this->M_data->getsetting()->id_tahun_ajaran;

    $siswaperkelas = $this->M_data->getSiswaKelas($id_kelas_reguler_berjalan, $id_tahun_ajaran);
    $siswaperkelas = $siswaperkelas;
    foreach ($siswaperkelas as $rowsiswa) {
      //for($i=1;$i<=date('t');$i++) {
      for($i=1;$i<=cal_days_in_month(CAL_GREGORIAN, $bln, $thn);$i++) {
        if($this->input->post("presensi_".$rowsiswa->nisn."_".$i) != "") {
          
           $datpresensi = $this->M_data->getpresensihari($thn.'-'.$bln.'-'.substr($i+100, 1, 2), $rowsiswa->nisn, $id_kelas_reguler_berjalan);
          if ($datpresensi) {
            $arrdata = array(
              'tanggal'=>($thn.'-'.$bln.'-'.substr($i+100, 1, 2)),
              'status_kehadiran'=>$this->input->post("presensi_".$rowsiswa->nisn."_".$i),
              'NISN'=>$rowsiswa->nisn,
              'kelas_berjalan_id'=>$id_kelas_reguler_berjalan
            );

            $this->M_data->editpresensi($arrdata, $datpresensi->id_presensi);
          } else {
            $arrdata = array(
              'tanggal'=>($thn.'-'.$bln.'-'.substr($i+100, 1, 2)),
              'status_kehadiran'=>$this->input->post("presensi_".$rowsiswa->nisn."_".$i),
              'NISN'=>$rowsiswa->nisn,
              'kelas_berjalan_id'=>$id_kelas_reguler_berjalan
            );
            $this->M_data->tambahdata($arrdata, 'presensi_siswa');
          }
        }
      }
    }
    
    redirect('akademik/presensi');

}

  function tambah_kurikulum(){
    $fileName = $this->input->post('file', TRUE);

    $config['upload_path'] = './assets/kurikulum/'; 
    $config['file_name'] = $fileName;
    $config['allowed_types'] = 'doc|docx|pdf';
    $config['max_size'] = 10000;

    $this->load->library('upload', $config);
    $this->upload->initialize($config); 

    if (!$this->upload->do_upload('file')) {
      $error = array('error' => $this->upload->display_errors());
      $this->session->set_flashdata('msg','Ada kesalah dalam upload'); 
      redirect('Akademik/kurikulum'); 
    } else {
      $media = $this->upload->data();
      $inputFileName = 'assets/file/'.$media['file_name'];
    }
  }
}
?>