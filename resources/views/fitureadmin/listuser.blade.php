
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
            <div class="col-sm-8"> 
            <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#formtambah">
                TAMBAH USER
              </button>
            </div>          {{-- isi conten disini --}}
          @foreach ($users as $us)
          <div class="col-sm-6">   
          <div class="card mr-4">
              <div class="card-body ">
                  <h5 class="card-title">{{$us->name}}</h5> <br>
                  <span class="text-secondary">{{$us->level}}</span>
                  <p class="card-text">{{$us->email}}</p>
                  <p class="card-text">{{Str::limit($us->desc, 70)}}</p>
                  <a href="/detailuser/{{$us->id}}" class="badge bg-primary text-dark " type="button">Details</a>
                </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
   {{-- MODAL --}}
   <div class="modal fade" id="formtambah" tabindex="-1" aria-labelledby="jmodal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jmodal">DATA USER</h5>
                
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('storeuser')}}">
                  @csrf
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" class="form-control" id="nama" name="nama" required="1" autocomplete="0">
                    </div>
                    <div class="form-group">
                        <label for="level">Level</label>
                        <select class="form-control" id="level" name="level">
                          {{-- looping disini --}}
                        <option value="pengguna">Pengguna</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required="1" autocomplete="0">
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi</label>
                        <textarea class="form-control" name="desc" id="desc" autocomplete="0" placeholder="Deskripsi singkat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required="1" autocomplete="0">
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
