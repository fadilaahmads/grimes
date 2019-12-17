@extends('layouts.app')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Griya Homestay</title>
  </head>
<body>

<style>
    tr, th {
        padding: 10px 10px;
    }
</style>

<!-- </div>
    <div class="container">
        <div class="row">
          <div class="col-10">
                <h1 class="mt-3 font-weight-bold">Homestay yang Tersedia</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>     
      <th scope="col">Nama Homestay</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kota</th>
      <th scope="col">Pemilik</th>
      <th scope="col">Jumlah Kamar</th>
      <th scope="col">Harga Tertinggi</th>
      <th scope="col">Harga Terendah</th>
      <th scope="col">Nomor Telepon</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
    @foreach($homestay as $p)
	  <tr>
        <td>{{ $p->homestay_nama }}</td>
        <td>{{ $p->homestay_alamat }}</td>
        <td>{{ $p->homestay_kota }}</td>
        <td>{{ $p->homestay_pemilik }}</td>
        <td>{{ $p->homestay_jumlah_kamar}}</td>
        <td>{{ $p->homestay_harga_tertinggi}}</td>
        <td>{{ $p->homestay_harga_terendah}}</td>
        <td>{{ $p->homestay_telepon}}</td>
        <td>{{ $p->homestay_foto}}</td>
        <td>
          <a href="/homestay/pesan/{{ $p->homestay_id }}">Pesan</a>         
        </td>
    </tr>
    @endforeach
  </thead>
</table> -->

@foreach($homestay as $p)
<div class="container">
    
    <table borde="2" width="1000px" height="300px" align="center">
      <tr>
        <td width="30%">
          <img src="{{ url('/uploads/'.$p->homestay_foto) }}" class="card-img-top" alt="..." width="300px">
        </td>
        <td width="5%">
        </td>
        <td width="35%">
            <h5 class="card-title">{{ $p->homestay_nama }}</h5>
            <p class="card-text">Alamat: {{ $p->homestay_alamat }}</strong></p>
                <hr>
                <p class="card-text">
                Kamar Tersedia: {{ $p->homestay_jumlah_kamar}}
            </p>

            <p class="card-text">
                Harga Mulai: Rp{{ $p->homestay_harga_terendah}} - Rp{{ $p->homestay_harga_tertinggi}}
            </p>

            <strong>Untuk Pemesanan Hubungi: {{ $p->homestay_telepon}}</strong>
        </td>
        <!-- <td width="35%">
          <a href="/detailHomestay/{id}" class="btn btn-primary">Pesan Sekarang</a>
        </td>
      </tr> -->
    </table>
</div>
@endforeach

<!-- @foreach($homestay as $p)
<div class="card mt-3" style="max-width: 750px">

    <div class="row no-gutters p-2">

        <div class="col-4 mr-3">
            @if($p->homestay_foto)
            <img class="card-img" src="{{ url('/uploads/'.$p->homestay_foto) }}">
            @endif
        </div>

        <div class="col-7">
            
                <h5 class="card-title" style="color: #9a1750">
                    <strong>{{ $p->homestay_nama }}</strong>
                </h5>
            </a>
            <p class="card-text">{{ $p->homestay_alamat }}</strong></p>
            
        </div>

    </div>

</div>
@endforeach -->
</body>
</html>
@endsection