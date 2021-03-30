
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
            <h1 class="m-0">Starter Page</h1>
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
      <div class="class header">
       <h3>EDIT ISTILAH</h3>
       </div>
           <div class="card-body">
           <form action="{{url ('update-istilah',$ist->id)}}" method="post">
          {{ csrf_field() }}

          <select class="form-control select2" style="width: 100%;" name="kategori_id" id="kategori_id">
          <option disabled value>Pilih Kategori</option>
          <option value="{{$ist->kategori_id}}">{{$ist->kategori->kategori}}</option>
          @foreach ($ktg as $item)
          <option value="{{ $item->id }}">{{$item->kategori}}</option>
          
          @endforeach 
          </select>
          <div class="form-group">
           <input type="text" id="kode" name="kode" class="form-control" placeholder="Kode" value="{{ $ist->kode }}">
           <div class="form-group">
           <input type="text" id="istilah" name="istilah" class="form-control" placeholder="Istilah" value="{{ $ist->istilah }}">
           </div>
           <div class="form-group">
           <button type="submit" class="btn btn-primary">Ubah data</button>
           </div>
           </form>
           </div>
           </div>
            </div>
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
    @include('template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('template.script')
</body>
</html>
