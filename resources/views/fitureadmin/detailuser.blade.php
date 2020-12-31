
<!DOCTYPE html>
<html lang="en">
<head>
<title>Inventory</title>
@include('layouts.header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include('layouts.nav')
  <!-- Main Sidebar Container -->
        @include('layouts.side')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <h1 class="ml-2">INVENTORY - PENGGUNA AKTIF</h1>
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          {{-- isi conten disini --}}
            
          <div class="card mr-4">
              <div class="card-body ">
                  <h5 class="card-title">{{$user->name}}</h5> <br>
                  
                  <p class="text-secondary">{{$user->email}}</p>
                  <p class="card-text">{{$user->desc}}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Main Footer -->
@include('layouts.foot')
</div>
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
@include('layouts.script')
</body>
</html>
