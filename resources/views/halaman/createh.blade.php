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

    <!-- Main content -->
    <div class="content">
        <div class="card card-info card-outline">
      
      <div class="card-body">
          <form action="">
            {{csrf_field()}}
            <div class="form-group">
              <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama">
            </div>
            <div class="form-group">
              <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
            </div>
            <div class="form-group">
              <input type="text" id="address" name="address" class="form-control" placeholder="Masukan Address">
            </div>
            <div class="form-group">
              <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukan Alamat">
            </div>
            <div class="form-group">
              <input type="text" id="kelas" name="kelas" class="form-control" placeholder="Masukan Kelas">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-danger">Save</button>
              
            </div>
          </form>
        </div>
        </div>
        
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('include.script')
</body>
</html>
