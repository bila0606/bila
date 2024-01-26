<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

@include('include.head')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('include.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   @include('include.header')
    <!-- /.content-header -->
    <div class="content">
        <div class="card card-info card-outline">
      
      <div class="card-header">
        <h3>Create Data Siswa</h3>
</div>
    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
      
      <div class="card-body">
          <form action="{{ route('update-beranda', $beranda->id) }}"method="post">

            {{csrf_field()}}
            <div class="form-group">
              <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="form-group">
              <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
            </div>
            <div class="form-group">
              <input type="text" id="address" name="address" class="form-control" placeholder="Berapa lama anda tidur dimalam hari?">
            </div>
            <div class="form-group">
              <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Pukul berapa anda biasanya bangun pagi?">
            </div>
            <div class="form-group">
              <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Apakah anda sarapan setiap pagi?">
            </div>
            <div class="form-group">
              <input type="text" id="usia" name="usia" class="form-control" placeholder="Berapa banyak dalam sehari anda meminum air putih?">
            </div>
            <div class="form-group">
              <input type="text" id="pendidikan" name="pendidikan" class="form-control" placeholder="Bagaimana posisi duduk anda saat mengikuti pembelajaran?">
            </div>
            <div class="form-group">
              <input type="text" id="siswa" name="siswa" class="form-control" placeholder="Anda lebih nyaman belajar dalam suasana kelas yang seperti apa?">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-danger">Ubah data</button>
            </div>
          </form>
        </div>
        </div>
        
    </div>
    <!-- /.content -->
  </div>
  

@include('include.script')
</body>
</html>
