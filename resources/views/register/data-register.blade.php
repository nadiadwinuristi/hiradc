
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
@include('template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
@include('template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">REGISTER</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="card card-info card outline">
        <div class="card-header">
          <div class="card-tools">
          <a href="{{route ('create-register')}}" class="btn btn-success"> Tambah data <i class="fas fa-plus-square"></i></a>
           </div>
           </div>
           <div class="card-body">
           <table class="table table-bordered">
           <tr>
           <th>#</th>
           <th>Unit Kerja</th>
           <th>kegiatan</th>
           <th>Lokasi</th>
           <th>Kondisi</th>
           <th>Threat</th>
           <th>Pengedalian</th>
           <th>Kemungkinan</th>
           <th>Konsekuensi</th>
           <th>Tingkat Resiko</th>
           <th>Status Regulasi</th>
           <th>Aspek Lingkungan</th>
           <th>Peluang</th>
           <th>Resiko</th>
           <th>Resiko Ditoleransi</th>
           <th>Cakupan Resiko</th>
           <th>Status Program</th>
           <th>Program</th>
           </tr>
           
           @foreach ($dtregister as $item)
           <tr>
           <td>{{$loop->iteration }}</td>
           <td>{{$item->unit_kerja}}</td>
           <td>{{$item->kegiatan->kegiatan}}</td>
           <td>{{ $item->lokasi}}</td>
           <td>{{ $item->kondisi->kondisi}}</td>
           <td>{{$item->threat->threat}}</td>
           <td>{{$item->pengendalian}}</td>
           <td>{{$item->kemungkinan->kemungkinan_id}}</td>
           <td>{{$item->konsekuensi->konsekuensi_id}}</td>
           <td>{{$item->tingkat_resiko}}</td>
           <td>{{$item->status_regulasi}}</td>
           <td>{{$item->aspek_lingkungan}}</td>
           <td>{{$item->peluang}}</td>
           <td>{{$item->resiko}}</td>
           <td>{{$item->resiko_ditoleransi}}</td>
           <td>{{$item->cakupan_resiko}}</td>
           <td>{{$item->status_Program}}</td>
           <td>{{$item->program}}</td>
           <td>
           <a href="{{url ('edit-register',$item->id) }}"><i class="fas fa-edit"></i></a> | <a href="{{url ('delete-register', $item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i> </a>
           </td>
           </tr>
           @endforeach
           </table>
           </div>
           <div class="card-footer">
           {{$dtregister->links()}}
           </div>
           <div>
             
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
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('template.script')
@include('sweetalert::alert')


</body>
</html>
