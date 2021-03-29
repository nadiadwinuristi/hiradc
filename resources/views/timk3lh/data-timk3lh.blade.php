
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
            <h1 class="m-0">TIM K3LH</h1>
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
          <a href="{{route ('create-timk3lh')}}" class="btn btn-success"> Tambah data <i class="fas fa-plus-square"></i></a>
           </div>
           </div>
           <div class="card-body">
           <table class="table table-bordered">
           <tr>
           <th>#</th>
           <th>Unit Kerja</th>
           <th>Koordinator</th>
           <th>Email Kordinator</th>
           <th>Ketua</th>
           <th>Email Ketua</th>
           <th>Aksi</th>
           </tr>
           <tr>
           @foreach ($dttimk3lh as $item)
           <tr>
           <td>{{$loop->iteration }}</td>
           <td>{{ $item->unit_kerja}}</td>
           <td>{{ $item->koordinator}}</td>
           <td>{{ $item->email_koordinator}}</td>
           <td>{{ $item->ketua}}</td>
           <td>{{ $item->email_ketua}}</td>
           <td>
           <a href="{{url ('edit-timk3lh', $item->id) }}"><i class="fas fa-edit"></i></a> | <a href="{{url ('delete-timk3lh', $item->id) }}"><i class="fas fa-trash-alt" style="color:red"></i> </a>
           </td>
           </tr>
           @endforeach
           </table>
           </div>
           <div class="card-footer">
           {{$dttimk3lh->links()}}
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
