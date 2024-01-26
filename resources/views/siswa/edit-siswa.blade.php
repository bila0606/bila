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
          <form action="{{ route('update-siswa', $siswa->id) }}"method="post">

            {{csrf_field()}}
            <div class="form-group">
              <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Masukan Nama Lengkap">
            </div>
            <div class="form-group">
              <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
            </div>
            <div class="form-group">
              <input type="text" id="negara_kota_wilayah" name="negara_kota_wilayah" class="form-control" placeholder="Negara/Kota/Wilayah">
            </div>
            <div class="form-group">
              <input type="text" id="usia" name="usia" class="form-control" placeholder="Usia">
            </div>
            <div class="form-group">
              <input type="text" id="bahasa" name="bahasa" class="form-control" placeholder="Bahasa Yang Digunakan">
            </div>
            <div class="form-group">
              <input type="text" id="pendidikan" name="pendidikan" class="form-control" placeholder="Pendidikan">
            </div>
            <div class="form-group">
              <input type="text" id="status" name="status" class="form-control" placeholder="Status">
            </div>
            <div class="form-group">
              <input type="text" id="ras_suku_warganegara" name="ras_suku_warganegara" class="form-control" placeholder="Ras/Suku/Warga Negara">
            </div>
            <div class="form-group">
              <input type="text" id="penghasilan" name="penghasilan" class="form-control" placeholder="Penghasilan">
            </div>
            <div class="form-group">
              <input type="text" id="hobi" name="hobi" class="form-control" placeholder="Hobi">
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
