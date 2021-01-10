<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    @include('layouts.header')
</head>
<body>
  <div class="container mt-4">
    <div class="card mb-3" style="max-width:1080px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{asset ('img/'.$laporan->img_path)}}" width="330" style="margin-top: 30px; margin-left:10px;">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">{{$laporan->namaproduct}}</h5>
              <p class="card-text"><small class="text-muted">Quantity Product : {{$laporan->quantityproduct}}</small></p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p>
              @if($laporan->kategoriproduct == "Kemasan Rusak")
                 <span class="badge bg-warning text-dark">{{$laporan->kategoriproduct}}</span>
                 @elseif($laporan->kategoriproduct != "Kemasan Rusak")
                 <span class="badge bg-danger text-dark">{{$laporan->kategoriproduct}}</span>
                  @endif
              </p>
              <p class="card-text"><small class="text-muted">Created At {{$laporan->created_at}}</small></p>
              <hr>
            </div>
          </div>
        </div>
      </div>
  </div>
  <script type="text/javascript">
    window.print();
    </script>
</body>
</html>