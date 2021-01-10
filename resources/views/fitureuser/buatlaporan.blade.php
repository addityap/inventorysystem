
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
        <h1 class="m-0 text-center">PEMBUATAN LAPORAN</h1>
        @include('productalert.alert')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <button type="button" class="btn btn-dark ml-auto" data-toggle="modal" data-target="#formtambah">
            Buat Laporan
          </button>
          {{-- isi conten disini --}}

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
                <form method="post" action="{{route('storelaporan')}}" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                        <label for="nama">NAMA PRODUCT</label>
                        <select class="form-control" id="namaproduct" name="namaproduct">
                          @foreach ($product as $item)
                          <option value="{{$item->namaproduct}}">{{$item->namaproduct}}</option> 
                          @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="catproduct">KATEGORI PRODUCT</label>
                        <select class="form-control" id="catproduct" name="catproduct">
                          {{-- looping disini --}}
                        <option value="Kemasan Rusak">KEMASAN RUSAK</option>
                        <option value="KADALUARSA">KADALUARSA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="qproduct">QUANTITY PRODUCT</label>
                        <input type="number" class="form-control" id="qproduct" name="qproduct" required="1" autocomplete="0">
                    </div>
                    <div class="form-group">
                      <label for="gambar">Image File</label>
                      <input type="file" class="form-control-file" id="gambar" name="gambar">
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
