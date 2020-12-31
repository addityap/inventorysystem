
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
            <h1 class="m-0">INVENTORY - PRODUCT MASUK</h1>
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
              <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#formtambah">
                TAMBAH PRODUCT
              </button>
              @include('productalert.alert')
              <div class="table-responsive">
                <table class="table">
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
                  <a href="/edit/{{$p->id}}" class="badge bg-primary bg-gradient">Edit</a>

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
  {{-- MODAL --}}
  <div class="modal fade" id="formtambah" tabindex="-1" aria-labelledby="jmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jmodal">Keterangan Product</h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('storedata')}}">
                  @csrf
                    <div class="form-group">
                        <label for="nama">NAMA PRODUCT</label>
                        <input type="text" class="form-control" id="namaproduct" name="namaproduct" required="1" autocomplete="0">
                    </div>
                    <div class="form-group">
                        <label for="catproduct">KATEGORI PRODUCT</label>
                        <select class="form-control" id="catproduct" name="catproduct">
                          {{-- looping disini --}}
                          @foreach ($kategori as $catw)
                        <option value="{{$catw->kategori}}">{{$catw->kategori}}</option>
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="qproduct">QUANTITY PRODUCT</label>
                        <input type="number" class="form-control" id="qproduct" name="qproduct" required="1" autocomplete="0">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
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
