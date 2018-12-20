<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi SMP</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>SI</b>SMP</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- Tasks: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
         <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="image/admin.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Admin</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="image/admin.png" class="img-circle" alt="User Image">

                  <p>
                    Alexander Pierce - Web Developer
                    <small>Member since Nov. 2012</small>
                  </p>
                </li>
              <!-- Menu Body -->
              <li class="user-body pdg">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <li class="header">Distribusi Kelas</li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Kesiswaan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="#"><i class="fa fa-circle-o"></i>Penerimaan Peserta Didik Baru</a>
           <ul class="treeview-menu">
            <li ><a href="ppdbujian.php"><i class="fa fa-circle-o text-red"></i> PPDB Ujian</a></li>
            <li ><a href="ppdbneg.php"><i class="fa fa-circle-o text-red"></i> PPDB UN</a></li>
          </ul>
        </li>

        <li ><a href="#"><i class="fa fa-circle-o"></i>Daftar  Ulang</a>
         <ul class="treeview-menu">
          <li ><a href="daftarulang.php"><i class="fa fa-circle-o text-red"></i> Peserta Didik Baru</a></li>
          <li ><a href="daftarkenaikan.php"><i class="fa fa-circle-o text-red"></i> Kenaikan Kelas</a></li>
        </ul>
      </li>
          <li ><a href="#"><i class="fa fa-circle-o"></i> Distribusi Kelas </a>
          <ul class="treeview-menu">
          <li ><a href="distribusi.php"><i class="fa fa-circle-o text-red"></i> Kelas Reguler </a></li>
          <li ><a href="distribusi2.php"><i class="fa fa-circle-o text-red"></i> Kelas Tambahan </a></li>
          <li ><a href="klinikun.html"><i class="fa fa-circle-o text-red"></i> Klinik UN </a></li>
          </ul>          
          <li ><a href="#"><i class="fa fa-circle-o"></i> Mutasi Siswa </a>
          <ul class="treeview-menu">
          <li ><a href="masuk.php"><i class="fa fa-circle-o text-red"></i> Mutasi Masuk</a></li>
          <li ><a href="keluar.php"><i class="fa fa-circle-o text-red"></i> Mutasi Keluar</a></li>
        </ul>
          </li>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Kurikulum</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="#"><i class="fa fa-circle-o"></i> Jadwal </a>
        <ul class="treeview-menu">
          <li><a href="mapel.php"><i class="fa fa-circle-o"></i> Manajemen Mata Pelajaran</a></li>
          <li ><a href="harirentang.php"><i class="fa fa-circle-o"></i> Manajemen Hari & Jam</a></li>
          <li><a href="jadwalmapel.php"><i class="fa fa-circle-o"></i> Jadwal Mapel</a></li>
          <li><a href="jadwalguru.php"><i class="fa fa-circle-o"></i> Jadwal Piket Guru</a></li>
          <li><a href="jadwaltambahan.php"><i class="fa fa-circle-o"></i> Jadwal Tambahan</a></li>
        </ul>
          </li>
          
          <li ><a href="#"><i class="fa fa-circle-o"></i> Penilaian</a></li>
        <ul class="treeview-menu">
          <li><a href="nilaisiswa.php"><i class="fa fa-circle-o"></i> Nilai Siswa</a></li>
          <li ><a href="kategorinilai.php"><i class="fa fa-circle-o"></i> Kategori Nilai</a></li>
          <li><a href="jenisnilaiakhir.php"><i class="fa fa-circle-o"></i> Jenis Nilai Akhir</a></li>
          <li><a href="deskripsinilai.php"><i class="fa fa-circle-o"></i> Deskripsi Nilai</a></li>
          <li><a href="rapor.php"><i class="fa fa-circle-o"></i> Rapor</a></li>
        </ul>
          </li>
        </ul>
      </li>

      <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Kepegawaian</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li ><a href="Datapegawai.php"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>

        <li ><a href="presensipegawai.php"><i class="fa fa-circle-o"></i> Presensi Pegawai</a></li>
        <li><a href="jadwalmengajar.php"><i class="fa fa-circle-o"></i>Jadwal Mengajar</a></li>

      </ul>
    </li>
       
      <li class="treeview">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Non akademik</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li class="active treeview"><a href="#"><i class="fa fa-circle-o"></i> Ekstrakurikuler</a>
          <ul class="treeview-menu">
            <li class="active"><a href="pendaftaran.php"><i class="fa fa-circle-o text-red"></i>Pendaftaran</a></li>
            <li><a href="jadwal.php"><i class="fa fa-circle-o text-red"></i> Jadwal Ekstrakurikuler</a></li>
            <li><a href="presensi.php"><i class="fa fa-circle-o text-red"></i> Presensi</a></li>
            <li><a href="nilai.php"><i class="fa fa-circle-o text-red"></i> Nilai</a></li>
            <li><a href="pembayaran.php"><i class="fa fa-circle-o text-red"></i> Pendanaan</a></li>
          </ul>
        </li>

        <li><a href="#"><i class="fa fa-circle-o"></i> Bimbingan Konseling</a>
        <ul class="treeview-menu">
          <li ><a href="keterlambatan.php"><i class="fa fa-circle-o text-red"></i> Keterlambatan & Jam</a></li>
          <li ><a href="absensi_harian.php"><i class="fa fa-circle-o text-red"></i> Perizinan</a></li>
          <li><a href="pelanggaran.php"><i class="fa fa-circle-o text-red"></i> Pelanggaran</a></li>
          <li><a href="prestasi.php"><i class="fa fa-circle-o text-red"></i> Prestasi</a></li>
        </ul>
  </li>  
</ul>
      
      
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <center style="color:grey;">Hasil Pembagian Kelas<br></center>
        <center><small>Tahun Ajaran 2016-2017 Kurikulum 2013</small></center> </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php">Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
        <div class="tab-pane" id="kelas">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="dataTables_length" id="example1_length">
                                <label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                  <option value="10">10</option>
                                  <option value="25">25</option>
                                  <option value="50">50</option>
                                  <option value="100">100</option>
                                </select> entries
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter">
                              <label>Search:<input type="search" class="form-control input-sm text-right" placeholder="" aria-controls="example1">
                              </label>
                            </div>
                          </div>
                        </div>

                        <!-- <div class="box-header" style="background-color:   #94b8b8">
                    <h3 class="box-title" style="color : white">Pendaftar Kelas Tari</h3>
                  </div>

                        
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No Absen</th>
                          <th style="width: 1%">NIS</th>
                          <th style="width: 10%">Nama Siswa</th>
                          <th style="width: 10%">Jenis Kelamin</th>
                          <th style="width: 10%">Kelas</th>
                          <th style="width: 10%">Jenis Kelas</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                         <tr>
                          <td>3</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                           <tr>
                          <td>5</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                           <tr>
                          <td>7</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                           <tr>
                          <td>9</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>12523036</td>
                          <td>Nadiyaa</td>
                          <td>Perempuan</td>
                          <td>7A</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubaha">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                      </tbody>
                      </table>
 -->
                      
                     
                     

                      <div class="ln_solid"></div>
                      <div class="box-header" style="background-color:   #94b8b8">
                    <h3 class="box-title" style="color : white">Pendaftar Kelas Basket</h3>
                  </div>
                      
                      <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">No</th>
                          <th style="width: 1%">NIS</th>
                          <th style="width: 10%">Nama Siswa</th>
                          <th style="width: 10%">Jenis Kelamin</th>
                          <th style="width: 10%">Kelas</th>
                          <th style="width: 10%">Jenis Kelas</th>
                          <th style="width: 10%"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#ubahd">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content2" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                         <tr>
                          <td>3</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content2" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content2" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                           <tr>
                          <td>5</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content2" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content2" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                           <tr>
                          <td>7</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content2" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content2" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                           <tr>
                          <td>9</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content2" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>13523062</td>
                          <td>Nadya Indi</td>
                          <td>Perempuan</td>
                          <td>7B</td>
                          <td>Jam Belajar Tambahan</td>
                          <td>
                            <button type="submit" class="btn btn-primary" href="#tab_content2" data-toggle="tab">Ubah</button>
                          <button type="button" class="btn btn-danger" href="#tab_content2" data-toggle="tab"> Hapus</button>
                          </td>
                      </tbody>
                      </table>
              </div>

              
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="jscolor.js"></script>
</body>
</html>