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
          <div class="col-sm-8">
            
        </div><!-- /.col -->
    </div><!-- /.row -->
    <h1 class="m-0 text-center">LAPORAN MASUK</h1>
    <hr>
      </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card w-100">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                    @include('productalert.alert')
                  <thead>
                 <th>No</th>
                 <th>NAMA PRODUCT</th>
                 <th>QUANTITY PRODUCT</th>
                 <th>KATEGORI PRODUCT</th>
                 <th>IMAGE</th>
                 <th>Created At</th>
                 <th>Action</th>
                 <th></th>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    @foreach ($laporan as $data)
                 <td>{{$i++}}</td>
                 <td>{{$data->namaproduct}}</td>
                 <td>{{$data->quantityproduct}}</td>
                 <td>
                 @if($data->kategoriproduct == "Kemasan Rusak")
                 <span class="badge bg-warning text-dark">{{$data->kategoriproduct}}</span>
                 @elseif($data->kategoriproduct != "Kemasan Rusak")
                 <span class="badge bg-danger text-dark">{{$data->kategoriproduct}}</span>
                  @endif
                 </td>
                 <td>
                    <img src="{{asset ('img/'.$data->img_path)}}" width="50"></td>
                 <td>{{$data->created_at}}</td>
                 <td>
                    <a href="/cetakdata/{{$data->id}}" target="_blank" class="nav-link">
                        <i class="fas  fa-print nav-icon"></i>
                    </a>
                 </td>

                 </td>
                 </tbody> 
                 @endforeach
                </table>
              </div>
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
