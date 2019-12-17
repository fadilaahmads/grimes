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
  #daftarbtn{
    background-color: blue;
    color: white;
  }
  table{
    left: 100%;
  }
</style>

<div class="container-fluid mt-2 ml-5">
<table border="0" width="1490px" height="500px">
    <tr align="center">
      <td width="100px">
      </td>
        <td width="700px">
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
        </td>
        <td width="600px">
            <table border="0" width="600px">
              <tr>
                <td>
            <form action="/homestay/kirim" method="post" enctype="multipart/form-data"> 
            {{ csrf_field() }}
            <div class="container">
            <div class="mt-2">
            <div><h2 align="center">Daftar Homestay</div></div>
            <div class="mt-3">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNamaPemilik">Nama Pemilik</label>
                  <input type="text" class="form-control"  name="homestay_pemilik">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputNumber">No. Telephone</label>
                  <input type="tel" class="form-control"  name="homestay_telepon">
                </div>
              </div>
              <div class="form-group">
                <label for="inputNamaHomestay">Nama Homestay</label>
                <input type="text" class="form-control"  name="homestay_nama">
              </div>
              <div class="form-group">
                <label for="inputDeskripsiHomestay">Deskripsi Homestay</label>
                <input type="text" class="form-control"  name="deskripsi">
              </div>
              <div class="form-group">
                <label for="inputAlamat">Alamat</label>
                <input type="text" class="form-control"  placeholder="jalan, Desa, Kecamatan" name="homestay_alamat">
              </div>
              <div class="form-group">
                <label for="inputJumlahKamar">Jumlah Kamar</label>
                <input type="number" class="form-control"  name="homestay_jumlah_kamar">
              </div>
              <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputHargaTerendah">Harga Terendah</label>
                <input type="number" class="form-control"  name="homestay_harga_terendah">
              </div>
              <div class="form-group col-md-6">
                <label for="inputHargaTertinggi">Harga Tertinggi</label>
                <input type="number" class="form-control"  name="homestay_harga_tertinggi">
              </div>
              </div>
                <div class="form-group">
                <label for="homestay_kota">Kabupaten</label>
                  <select  class="form-control" name="homestay_kota">
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
            <button type="submit" class="btn font-weight-bold" >&nbsp Daftar</button>
            </div>
            </form>
                </td>
              </tr>
            </table>
        </td>
    </tr>
</table>
</div>
</body>
</html>