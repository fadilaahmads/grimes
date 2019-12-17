<!DOCTYPE html>
<html>
<head>
	<title>Edit Homestay</title>
</head>
<body>
 
	
	<h3>Edit Homestay</h3>
 
	<a href="/homestay"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($homestay as $p)
	<form action="/homestay/update" method="post">
		{{ csrf_field() }}
		<table>
        <input type="hidden" name="id" value="{{ $p->homestay_id }}">
                <tr>
                    <td>Nama Homestay :</td>
                    <td><input type="text" name="homestay_nama" required="required" value="{{ $p->homestay_nama }}"></td>
                </tr>
                <tr>
                    <td>Alamat : </td>
                    <td><textarea name="homestay_alamat" required="required" >{{ $p->homestay_alamat }}</textarea></td>
                </tr>
                <tr>
                    <td>Kota : </td>
                    <td><input type="text" name="homestay_kota" required="required" value="{{ $p->homestay_kota }}"></td>
                </tr>
                <tr>
                    <td>Pemilik</td>
                    <td><input type="text" name="homestay_pemilik" required="required" value="{{ $p->homestay_pemilik }}"></td>
                </tr>
                <tr>
                    <td>Jumlah Kamar : </td>
                    <td><input type="number" name="homestay_jumlah_kamar" required="required" value="{{ $p->homestay_jumlah_kamar }}"></td>
                </tr>
                <tr>
                    <td>Harga Tertinggi : </td>
                    <td><input type="number" name="homestay_harga_tertinggi" required="required" value="{{ $p->homestay_harga_tertinggi }}"></td>
                </tr>
                <tr>
                    <td>Harga Terendah : </td>
                    <td><input type="number" name="homestay_harga_terendah" required="required" value="{{ $p->homestay_harga_terendah }}"></td>
                </tr>
                <tr>
                    <td>Nomor Telepon</td>
                    <td><input type="tel" name="homestay_telepon" required="required" value="{{ $p->homestay_telepon }}"></td>
                </tr>
                <tr>
                    <td>Foto : </td>
                    <td><input type="file" name="homestay_foto" required="required" value="{{ $p->homestay_foto }}"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
	</form>
	@endforeach
		
 
</body>
</html