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
<style>
   form{
      position: absolute;
      width: 500px;
      margin-top:0%;
      margin-left:20%;
      background-color: white;
    }
    #btndaftar{
      width: 470px;
      background-color: #286aad;
      color: white;
    }

</style>
<div class="container">
<div class="mt-5">
    <div class="container">
        <div class="mt-5">
        @foreach($homestay as $p)
                <form action="/homestay/update" method="post"> 
                {{ csrf_field() }}
                <div class="container">
                <div class="mt-5">
                <div><h1 align="center">Edit Homestay</div></div>
                <div class="mt-5">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputNamaPemilik">Nama Pemilik</label>
                    <input type="text" class="form-control"  name="homestay_pemilik" value="{{ $p->homestay_pemilik}}">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputNumber">No. Telephone</label>
                    <input type="tel" class="form-control"  name="homestay_telepon" value="{{ $p->homestay_telepon}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNamaHomestay">Nama Homestay</label>
                    <input type="text" class="form-control"  name="homestay_nama" value="{{ $p->homestay_nama}}">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" class="form-control"  value="{{ $p->homestay_alamat}}" name="homestay_alamat">
                </div>
                <div class="form-group">
                    <label for="inputNamaHomestay">Jumlah Kamar</label>
                    <input type="number" class="form-control"  name="homestay_jumlah_kamar" value="{{ $p->homestay_jumlah_kamar}}">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputHargaTertinggi">Harga Tertinggi</label>
                    <input type="number" class="form-control"  name="homestay_harga_tertinggi" value="{{ $p->homestay_harga_tertinggi}}">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputHargaTerendah">Harga Terendah</label>
                    <input type="number" class="form-control"  name="homestay_harga_terendah" value="{{ $p->homestay_harga_terendah}}">
                    </div>
                </div>
                
                    <div class="form-group ">
                    <label for="homestay_kota">Kabupaten</label>
                    <select  class="form-control" name="homestay_kota">
                        <option selected>Yogyakarta</option>
                        <option>Sleman</option>
                        <option>Bantul</option>
                        <option>Gunungkidul</option>
                        <option>Kulon Progo</option>
                    </select>
                    </div>
                <div class="form-group col-md-12">
                <label for="inputFoto">Foto Homestay</label>
                    <input type="file" class="form-control-file"  name="homestay_foto">
                </div>
                </div>
                </div>
                <div class="form-group">
                <button type="submit" class="btn font-weight-bold" >&nbsp Perbarui</button>
                </div>
                </form>
	        @endforeach  
        </div>
    </div>
    </div>
    </div>
</body>
</html>
@endsection