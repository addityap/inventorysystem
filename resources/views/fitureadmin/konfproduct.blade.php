
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
            <h1 class="m-0">KONFIRMASI PRODUCT MASUK</h1>
            <hr>
          </div><!-- /.col -->
        </div><!-- /.row -->
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
                 <th>KODE PRODUCT</th>
                 <th>NAMA PRODUCT</th>
                 <th>KATEGORI PRODUCT</th>
                 <th>QUANTITY PRODUCT</th>
                 <th>STATUS</th>
                 <th>Created At</th>
                 <th></th>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    @foreach ($product as $p)
                 <td>{{$i++}}</td>
                 <td>{{$p->kodeproduct}}</td>
                 <td>{{$p->namaproduct}}</td>
                 <td>{{$p->kategoriproduct}}</td>
                 <td>{{$p->quantityproduct}}</td>
                 <td> 
                  @if($p->status_id == "1")
                  <span class="badge bg-warning text-dark">{{$p->status->statuspr}}</span>
                  @elseif($p->status_id != "1")
                  <span class="badge bg-success text-dark">{{$p->status->statuspr}}</span>
                  @endif
                </td>
                 <td>{{$p->created_at}}</td>
                 <td>
                  <a href="/approved/{{$p->id}}" class="nav-link">
                    <i class="fas  fa-check-circle nav-icon"></i>
                </a>

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
