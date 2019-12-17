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
    <link rel="stylesheet" href="{{asset('css/welcome2style.css')}}">
    <title>Griya Homestay</title>
  </head>
<body>
<style>
  .centered {
        position: absolute;
        top: 40%;
        left: 5%;
        color: white;}
</style>
    <!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffffff;">
  <a class="navbar-brand font-weight-bold ml-4" href="#"><big id="gh">Griya Homestay</big></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto mr-5">
      <li class="nav-item active mr-3">
        <a class="nav-link" a href="/tabel1">Verifikasi</a>
      </li>
      
      <li class="nav-item active ml-3 mr-3">
        <a class="nav-link" href="{{ url('/formsignup') }}">Log Out</a>
      </li>
    </ul>
  </div>
  </nav> 

  <!-- Menu 1 -->

  <div class="container-fluid">
  <table border="0">
  <div class="mt-5">
  <tr style="height:700px" align="center">
    <td colspan="5" id="tdfirst">
        <img src="images/gambar1.jpg" width="97%" height="70%" >
        <div class="centered">
             <h1><p align="left"> Selamat Datang </h1>
             <h3><p align="left"> Semangat Bekerja, Semoga Lelahmu menjadi Lillah <br></h>
        </div>
    </td>
  </tr>
</body>
</html>