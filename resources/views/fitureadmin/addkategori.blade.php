
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
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          {{-- isi conten disini --}}
          <div class="card w-50">
              <div class="card-body">
              <form action="{{route('storecate')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="qproduct">CATEGORY</label>
                    @include('productalert.alert')
                    <input type="text" class="form-control" id="category" name="category" autocomplete="1">
                </div>
                <div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
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
