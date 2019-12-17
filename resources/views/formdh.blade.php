@extends('layouts.logged')
@section('content')
<style>
  #daftarbtn{
    color: white;
    margin: auto;
  }
  table{
    left: 100%;
  }
  #tab1{
    background-image: url(images/bglogin.jpg);
  }
  #tab2{
    background-color: white;
  }
  #daftarhs{
    color: white;
  }
  
</style>

<div class="container-fluid mt-2 ml-3 mt-5">
<table border="2" width="1300px" height="600px" id="tab1">
    <tr align="center">
      <!-- <td width="100px">
      </td>
        <td width="600px">
            <div class="text-center text-md-left mt-5">
            <p><h1> Syarat dan Ketentuan<br>
            <p><h5> 1. Bangunan harus memiliki sertifikat tanah
            <p><h5> 2. Bersedia menyediakan keperluan tambahan
            <p><h5> 3. Layak Huni
            <p><h5> 4. Memberikan Harga yang terjangkau
            <p><h5> 5. Menyertakan KTP Pemilik Homestay
            <p><h5> 6. Mempunyai izin berdirinya bangunan
            <p><h5> 6. Mempunyai izin berdirinya bangunan
            <p><h5> 6. Mempunyai izin berdirinya bangunan
            <p><h5> 6. Mempunyai izin berdirinya bangunan
            </div>
        </td> -->
        <td width="600px">
        <div class="mt-5 ">
        <div class="font-weight-bold"><h2 align="center" id="daftarhs">Daftar Homestay</div></div>
            <table border="2" width="550px" id="tab2">
              <tr>
                <td>
            <form action="/homestay/kirim" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="container">
            <div class="mt-2 ml-3 mr-3">
            
            <div class="mt-3">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNamaPemilik">Nama Pemilik</label>
                  <input type="text" class="form-control form-control-sm"  name="homestay_pemilik">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNumber">No. Telephone</label>
                  <input type="tel" class="form-control form-control-sm"  name="homestay_telepon">
                </div>
              </div>
              <div class="form-group">
                <label for="inputNamaHomestay">Nama Homestay</label>
                <input type="text" class="form-control form-control-sm"  name="homestay_nama">
              </div>
              <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control form-control-sm"  placeholder="jalan, Desa, Kecamatan" name="homestay_alamat">
              </div>
              <div class="form-group">
                <label for="inputJumlahKamar">Jumlah Kamar</label>
                <input type="number" class="form-control form-control-sm"  name="homestay_jumlah_kamar">
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputHargaTerendah">Harga Terendah</label>
                <input type="number" class="form-control form-control-sm"  name="homestay_harga_terendah">
              </div>
              <div class="form-group col-md-6">
                <label for="inputHargaTertinggi">Harga Tertinggi</label>
                <input type="number" class="form-control form-control-sm"  name="homestay_harga_tertinggi">
              </div>
              </div>
                <div class="form-group">
                <label for="homestay_kota">Kabupaten</label>
                  <select  class="form-control form-control-sm" name="homestay_kota">
                    <option selected>Yogyakarta</option>
                    <option>Sleman</option>
                    <option>Bantul</option>
                    <option>Gunungkidul</option>
                    <option>Kulon Progo</option>
                  </select>
                </div>
              <div class="form-group">
              <label for="inputFoto">Foto Homestay</label>
                <input type="file" class="form-control-file"  name="homestay_foto">
              </div>
              </div>
            </div>
            <div class="form-group" id="daftarbtn">
            <a href="/afterjelajahi"><button type="submit" class="btn font-weight-bold btn-primary col-md-10 ml-5" id="daftarbtn" >&nbsp Daftar</button></a>
            </div>
            </form>
                </td>
              </tr>
            </table>
            </div>
        </td>
    </tr>
</table>
</div>
</body>
</html>