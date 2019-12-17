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

</div>
    <div class="container">
        <div class="row">
          <div class="col-10">
                <h1 class="mt-3 font-weight-bold">Data Homestay</h1>
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
      <th scope="col">Verifikasi</th>
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
          <a href="/homestay/edit/{{ $p->homestay_id }}">Edit</a>
          
          <a href="/homestay/hapus/{{ $p->homestay_id }}">Hapus</a>
        </td>
        <td>
          <a href="/homestay/terima/{{ $p->homestay_id }}">Terima</a>
          
          
        </td>
    </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><a href=/homestay/jelajahi>Homestay Terverifikasi</a></td>
    </tr>
    
  </thead>
</table>
</body>
</html>
@endsection