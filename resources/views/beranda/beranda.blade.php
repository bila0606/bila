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
    <table class="table table-bordered">
    <!-- <div class="card-body"> -->
    <!-- <div class="card card-primary card-outline"> -->
        <div class="card-header">
        <h3>Answer Project Semangat</h3>
</div>
    </table>
    <!-- Main content -->
    <div class="content">
    <div class="container-fluid">
     <div class="row"> 
    <div class="col-lg-12">
    <!-- <div class="card-body"> -->
        <div class="card card-info card-outline">
            <div class="card-header">
                <a href="{{route('create-beranda')}}" class="btn btn-primary">Tambah data</a>
            </div>
            <div class="card-body">
            <!-- <table id="example2" class="table table-bordered table-hover"> -->
                <table class="table table-bordered">
                <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
                    <tr>
                    </thead>
                        <?php $no = 1 ?>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Jam Tidur</th>
                        <th>Jam Bangun</th>
                        <th>Sarapan Pagi</th>
                        <th>Meminum Air Putih</th>
                        <th>Posisi Duduk Pembelajaran</th>
                        <th>Suasana Kelas</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach($beranda as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{$item->nama_lengkap}}</td>
                        <td>{{$item->jenis_kelamin}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->Kelas}}</td>
                        <td>{{$item->usia}}</td>
                        <td>{{$item->pendidikan}}</td>
                        <td>{{$item->siswa}}</td>
                        <td>
                        <a class="btn btn-info btn-sm" href="{{ url('edit-beranda',$item->id) }}"><i class="fas fa-pencil-alt"></i>Edit</a>
                          <a class="btn btn-danger btn-sm" href="{{ url('delete-beranda',$item->id) }}"><i class="fas fa-trash"></i>Delete</a>
                        <!-- <a class="btn btn-danger" href="{{ url('delete-beranda',$item->id) }}"><i class=fa fa-trash-alt>delete</i></a>
                        <a class="btn btn-primary" href="{{ url('edit-beranda',$item->id) }}"><i class=fa fa-trash-alt>edit</i></a> -->
                        </td>
                    </tr>
                    @endforeach
                </table>
        </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">

@include('include.script')
</body>
</html>
