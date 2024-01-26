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
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>6</h3>

                <p>Project</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ url('beranda') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>8</h3>

                <p>Psikografis Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ url('data-siswa') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-8">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>9</h3>

                <p>Demografis Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{ ('data-siswa2') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
          @include('include.script')
</body>
</html>