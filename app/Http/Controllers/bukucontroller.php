<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class bukucontroller extends Controller
{
    public function index()
    {
    	// mengambil data dari table buku
    	$buku = DB::table('buku')->get();
 
    	// mengirim data buku ke view index
    	return view('index',['buku' => $buku]);
 
    }
    public function tambah()
    {
     
        // memanggil view tambah
        return view('tambah');
     
    }
    public function store(Request $request)
    {
        // insert data ke table buku
        DB::table('buku')->insert([
            'id' => $request->id,
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'pengarang' => $request->pengarang,

        ]);
        // alihkan halaman ke halaman buku
        return redirect('/buku');
     
    }
    public function hapus($id)
    {
        // menghapus data buku berdasarkan id yang dipilih
        DB::table('buku')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman buku
        return redirect('/buku');
    }
}
