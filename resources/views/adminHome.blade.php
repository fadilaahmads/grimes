@extends('layouts.app')

@section('content')
<style>
    #tdfirst{
        padding: 0px 0px;
    }
    .centered {
        position: absolute;
        top: 40%;
        left: 5%;
        color: black;
    }
    #jelajah{
      width: 300px;
      background-color: #286aad;
      color: white;
    }
    #try1{
        color: white;
        position: absolute;
        top: 48%;
        
    }
    #try2{
        position: absolute;
        top: 50%;
        left: 26%;
    }
    .navbar{
        height: 70px;
    }
    .trkota{
        top: 20%;
    }
    #gh{
      color: #1f274e;
    }
    #dftrhomestay{
      background-color: #286aad;
      color: white;
    }
    .tblhomestay{
  
    }
    #tdhmsty{
      padding: 200px 280px;
      background-color: grey;
    }
</style>
<div class="container-fluid">
  <table border="0">
  <div class="mt-5">
  <tr style="height:700px" align="center">
    <td colspan="5" id="tdfirst">
        <div class="centered">
        <h1><p align="left"> Selamat Datang </h1>
             <h3><p align="left"> Semangat Bekerja, Semoga Lelahmu menjadi Lillah <br></h>
        <div class="mt-3">
        <p align="left"><a href="/verivAdmin"><button type="button" class="btn btn-lg" id="jelajah">Verifikasi Homestay Masuk</button></a>
        </div> 
        </div>
  </div>
  </div>
@endsection
