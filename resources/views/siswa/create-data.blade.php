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
        <h3>Psikografis Siswa</h3>
</div>
    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
      
      <div class="card-body">
          <form action="{{ route('simpan-siswa') }}"method="post">

            {{csrf_field()}}
            <div class="form-group">
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="form-group">
              <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
            </div>
            <div class="form-group">
              <input type="text" id="address" name="address" class="form-control" placeholder="Penderitaan atau masalah apa yang anda alami?">
            </div>
            <div class="form-group">
              <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Apa yang anda inginkan untuk terjadi di hidup anda saat ini?">
            </div>
            <div class="form-group">
              <input type="text" id="Kelas" name="Kelas" class="form-control" placeholder="Apa pertanyaan terbesar yang anda miliki?">
            </div>
            <div class="form-group">
              <input type="text" id="nama1" name="nama1" class="form-control" placeholder="Bagaimana perasaan anda saat ini? Apa yang selalu anda Khawatirkan?">
            </div>
            <div class="form-group">
              <input type="text" id="nama2" name="nama2" class="form-control" placeholder="Bagaimana gaya hidup anda?">
            </div>
            <div class="form-group">
              <input type="text" id="nama3" name="nama3" class="form-control" placeholder="Hobi">
            </div>
            <div class="form-group">
              <input type="text" id="nama4" name="nama4" class="form-control" placeholder="Media sosial dan tempat nongkrong yang sering anda gunakan dan kunjungi?">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-danger">Save</button>
              <a class="btn btn-danger" href="{{ route('data-siswa') }}">Back</a>
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
