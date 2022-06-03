
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
       <h3>CREATE KONSEKUENSI</h3>
       </div>
           <div class="card-body">
           <form action="{{route ('simpan-konsekuensi')}}" method="post">
          {{ csrf_field() }}
          <select class="form-control select2" style="width: 100%;" name="kategori_id" id="kategori_id">
          <option disabled value>Pilih Kategori</option>
          @foreach ($kgr as $item)
          <option value="{{ $item->id }}">{{$item->kategori}}</option>
          @endforeach 
          </select>
          </div>
          <div class="form-group">
           <input type="text" id="nilai" name="nilai" class="form-control" placeholder="nilai" >
           </div>
           <div class="form-group">
           <input type="text" id="konsekuensi" name="konsekuensi" class="form-control" placeholder="konsekuensi">
           </div>
           <div class="form-group">
           <input type="text" id="financial" name="financial" class="form-control" placeholder="financial">
           <div class="form-group">
           <input type="text" id="objective" name="objective" class="form-control" placeholder="objective" >
           </div>
           <div class="form-group">
           <input type="text" id="legal" name="legal" class="form-control" placeholder="legal" >
           </div>
           <div class="form-group">
           <input type="text" id="biaya" name="biaya" class="form-control" placeholder="biaya" >
           </div>
           <div class="form-group">
           <input type="text" id="reputasi" name="reputasi" class="form-control" placeholder="reputasi">
           </div>
           <div class="form-group">
           <input type="text" id="cakupan" name="cakupan" class="form-control" placeholder="cakupan" >
           </div>
           <div class="form-group">
           <input type="text" id="lama_pemulihan" name="lama_pemulihan" class="form-control" placeholder="lama pemulihan" >
           </div>
           <div class="form-group">
           <input type="text" id="lama_penyimpangan" name="lama_penyimpangan" class="form-control" placeholder="lama penyimpangan">
           </div>
           <div class="form-group">
           <input type="text" id="product_image" name="product_image" class="form-control" placeholder="product image" >
           </div>
           <div class="form-group">
           <input type="text" id="dampak_sosial" name="dampak_sosial" class="form-control" placeholder="dampak_sosial">
           </div>
          
           <div class="form-group">
           <button type="submit" class="btn btn-success">Simpan Data</button>
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
