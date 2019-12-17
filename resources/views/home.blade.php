@extends('layouts.logged')
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
@section('content')
<style>
    #tdfooter{
  width: 1270px;
  height: 300px;
  background-color: #2e446e;
  color: rgb(226, 226, 226);
}
    #menukaki{
      color: #317ecc;
    }
    #tdfirst{
        padding: 0px 0px;
    }
    .centered {
        position: absolute;
        top: 40%;
        left: 5%;
        color: white;
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
        padding: 10px 10px;
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
      padding: 200px 250px;
      background-image: url(images/bgdaftar.jpg);
      color: white;
    }
</style>
       <div class="container-fluid">
    <table border="0">
      <div class="mt-5">
        <tr style="height:700px" align="center">
          <td colspan="5" id="tdfirst">
            <img src="images/gambar1.jpg" width="95%" height="70%" >
              <div class="centered">
                 <h1><p align="left"> Bingung cari tempat menginap yang murah ? <br></h1>
                 <h4><p align="left"> Keliling kota nyari penginapan tapi hasilnya nihil <br>
                                      Kami ada untuk anda <br>
                 <big id="try1"><p align="left"> Griya Homestay</big><div id="try2">, solusi terbaik untuk dompet tipismu </div><br></p>
                 <div class="mt-3">
                  <p align="left"><a href="/homestay/jelajahi"><button type="button" class="btn btn-lg" id="jelajah">Jelajahi</button></a>
                 </div> 
                 </div>
          </td>
       </tr>
  <tr style="height:200px" >
    <td colspan="5"><h1><p align="center"> Temukan Homestay di Kota Tujuanmu </td>
  </tr>
  <tr style="height:400px" align="center" class="trkota"  valign="top" border="2">

    <td align="right">
        <input type="image" src="images/gk.jpg" alt="Submit" width="230" height="230">
    </td>
    <td>
        <input type="image" src="images/sleman.jpg" alt="Submit" width="230" height="230">
    </td>
    <td>
        <input type="image" src="images/jogja.jpg" alt="Submit" width="230" height="230">
    </td>
    <td>
        <input type="image" src="images/bantul.jpg" alt="Submit" width="230" height="230">
    </td>
    <td align="left">
        <input type="image" src="images/kulonprogo.jpg" alt="Submit" width="230" height="230">
    </td>
  </tr>
  
  <tr style="height:700px" align="center" id="trdaftarhomestay">
    <td colspan="5" id="tdhomestay">
    <table class="tblhomestay">
    <tr >
    <td id="tdhmsty" align="center">
        <h1><p> Punya Rumah tapi banyak kamar yang Kosong ? <br></h1>
        <h2><p> Bingung mau diapain ? <br>
        <h3><p> Langsung aja daftarin rumah kamu disini. <br>
        <div class="mt-3">
        <p align="center"><a href="/formdh"><button type="button" class="btn btn-lg" id="dftrhomestay">Daftar Sekarang</button></a>
        </div> 
        </div>
    </td></tr></table>
    </td>
  </tr>
  <tr style="height: 400px" align="center">
    <td colspan="5">
      <table border="0" id="tdfooter">
      <tr height="300px" >
        <td  width="20%"> 
        <div class="text-center text-md-left ml-3">
          <p><h2 id="menukaki"> Tim Penyusun
          <p><h6> Hitwasana Adhyatma
          <p><h6> Farhan Ramadhan
          <p><h6> Fadila Ahmad Sya'bani
          <p><h6> Radias Mahes Ghrasta
          <p><h6> <br>
        </td>
        <td width="20%">
        <div class="text-center text-md-left">
          <p><h2 id="menukaki"> Dikembangkan dengan :
          <p><h6> Bootstrap
          <p><h6> Visual Studio Code
          <p><h6> Google Chrome 
          <p><h6> My SQL
          <p><h6> Apache
        <div class="text-center text-md-left">
        </td>
        <td width="20%"> 
        </td>
        <td width="20%"> 
        </td>
        <td width="20%"> 
        </td>
       </tr>
       <tr>
        <td colspan="5" align="center" id="menukaki"><h5> Supported by Tuhan Yang Maha Esa
        </td>
       </tr>
      </table>
    </td>
  </tr>
  </div>
  </table>
  </div>
  </div>
  </table>
  </div>
@endsection
