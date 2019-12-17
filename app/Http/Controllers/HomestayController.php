<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use app\Gambar;

class HomestayController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$homestay = DB::table('homestay')->paginate();
 
    	// mengirim data pegawai ke view index
    	return view('tabel1',['homestay' => $homestay]);
 
    }
    public function tambah(){
        return view('tambah');
    }
    // method untuk insert data ke table homestay
    public function kirim(Request $request)
    {

        $file = $request->file('homestay_foto');

            //File Name
            $nama_file = $file->getClientOriginalName();

            //Display File Extension
            $file->getClientOriginalExtension();

            //Display File Real Path
            $file->getRealPath();

            //Display File Size
            $file->getSize();

            //Display File Mime Type
            $file->getMimeType();

            //Move Uploaded File
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());

        // insert data ke table homestay
        DB::table('homestay')->insert([
            'homestay_nama' => $request->homestay_nama,
            'homestay_alamat' => $request->homestay_alamat,
            'homestay_kota' => $request->homestay_kota,
            'homestay_pemilik' => $request->homestay_pemilik,
            'homestay_jumlah_kamar' => $request->homestay_jumlah_kamar,
            'homestay_harga_tertinggi' => $request->homestay_harga_tertinggi,
            'homestay_harga_terendah' =>$request->homestay_harga_terendah,
            'homestay_telepon' => $request->homestay_telepon,
            'homestay_foto' => $nama_file,
            
            'verif' => "0",
            'dibuat_oleh' => Auth::user()->id
            ]);

        // alihkan halaman ke halaman homestay
        return redirect('/tunnguVerif');
        
        
 
    }
    // method untuk edit data homestay
    public function edit($id)
    {
        // mengambil data homestay berdasarkan id yang dipilih
        $homestay = DB::table('homestay')->where('homestay_id',$id)->get();
        // passing data homestay yang didapat ke view edithomestay.blade.php
        return view('edithomestay',['homestay' => $homestay]);
 
    }
    // update data homestay
    public function update(Request $request)
    {
	    // update data homestay
        DB::table('homestay')->where('homestay_id',$request->id)->update([
            'homestay_nama' => $request->homestay_nama,
            'homestay_alamat' => $request->homestay_alamat,
            'homestay_kota' => $request->homestay_kota,
            'homestay_pemilik' => $request->homestay_pemilik,
            'homestay_jumlah_kamar' => $request->homestay_jumlah_kamar,
            'homestay_harga_tertinggi' => $request->homestay_harga_tertinggi,
            'homestay_harga_terendah' =>$request->homestay_harga_terendah,
            'homestay_telepon' => $request->homestay_telepon,
            'homestay_foto' => $request->homestay_foto
        ]);
        // alihkan halaman ke halaman homestay
        return redirect('/tabel1');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('homestay')->where('homestay_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/tabel1');
    }
    
    ///////////////////////////////////////////////////////////////////////////////////////

    public function index1()
    {
        $verif = 0;
    	// mengambil data dari table pegawai
    	$homestay = DB::table('homestay')->where('verif',$verif)->get();
 
    	// mengirim data pegawai ke view index
    	return view('verivAdmin',['homestay' => $homestay]);
 
    }

    // method untuk edit data homestay
    public function edit1($id)
    {
        // mengambil data homestay berdasarkan id yang dipilih
        $homestay = DB::table('homestay')->where('homestay_id',$id)->get();
        // passing data homestay yang didapat ke view edithomestay.blade.php
        return view('edithomestay',['homestay' => $homestay]);
 
    }
    // update data homestay
    public function update1(Request $request)
    {
	    // update data homestay
        DB::table('homestay')->where('homestay_id',$request->id)->update([
            'homestay_nama' => $request->homestay_nama,
            'homestay_alamat' => $request->homestay_alamat,
            'homestay_kota' => $request->homestay_kota,
            'homestay_pemilik' => $request->homestay_pemilik,
            'homestay_jumlah_kamar' => $request->homestay_jumlah_kamar,
            'homestay_harga_tertinggi' => $request->homestay_harga_tertinggi,
            'homestay_harga_terendah' =>$request->homestay_harga_terendah,
            'homestay_telepon' => $request->homestay_telepon,
            'homestay_foto' => $request->homestay_foto
        ]);
        // alihkan halaman ke halaman homestay
        return redirect('/verivAdmin');
    }
    // method untuk hapus data pegawai
    public function hapus1($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('homestay')->where('homestay_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/verivAdmin');
    }
    public function verifikasi($id){
        // menghapus data homestay berdasarkan id yang dipilih
        DB::table('homestay')->where('homestay_id',$id)->update([
            'verif' => "1"
        ]);           
        // alihkan halaman ke halaman homestay
        return redirect('/verivAdmin');
       }
    public function jelajahi(){
        {
            $verifikasi = "1";
            // mengambil data dari table pegawai
            $homestay = DB::table('homestay')->where('verif',$verifikasi)->get();
     
            // mengirim data pegawai ke view index
            return view('jelajahi',['homestay' => $homestay]);    
        }
    }
    public function cari(Request $request)
	{
        $verifikasi="Diterima";
		// menangkap data pencarian
		$cari = $request->cari;
 
    	// mengambil data dari table homestay sesuai pencarian data
		$hasil = DB::table('homestay')
        ->where('homestay_nama','LIKE',"%".$cari."%")
        ->paginate(10);
 
    		// mengirim data homestay ke view index
        //return view('hasilCari',['hasil' => $hasil]);
        return view('hasilCari', compact('hasil', 'cari'));
 
    }

    public function detailHomestay($id)
    {
        
        $homestay = DB::table('homestay')->where('homestay_id',$id)->get();
        // passing data homestay yang didapat ke view edithomestay.blade.php
        return view('detailHomestay',['homestay' => $homestay]);
 
    }
    
    


}
