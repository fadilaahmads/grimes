



@extends('layouts.app')
@section('content')
<!doctype html>
<head>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Edit Homestay</title>
  </head>
</head>
<body>
<div class='card-body justify-content-center'>
    @foreach($homestay as $homesta)
    
        <img class="card-img" style="width: 50%" src="/uploads/{{ $homestay->homestay_foto}}">
    
    <h3 class='card-header text-uppercase text-center'>{{ $homesta->homestay_nama }}</h3>
    <hr>
        <h5>
            {{ $homesta->homestay_alamat }}
        </h5>
        <h5>
            <strong>Kamar Tersedia: </strong>
            {{ $homesta->homestay_jumlah_kamar}}
        </h5>
        <h5>
            <strong>Tarif: </strong>{{ $homesta->homestay_harga_terendah}} - {{ $homesta->homestay_harga_tertinggi}}
        </h5>
    @endforeach
</div>
</body>
</html>
@endsection