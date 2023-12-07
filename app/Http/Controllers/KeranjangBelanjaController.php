<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KeranjangBelanjaController extends Controller
{
	public function indexKB()
	{
    	// mengambil data dari table KeranjangBelanja
		//$KeranjangBelanja = DB::table('KeranjangBelanja')->get();
        $KeranjangBelanja = DB::table('KeranjangBelanja')->paginate(15); //agar tersortir 15 halaman

    	// mengirim data KeranjangBelanja ke view indexKB
		return view('indexKB',['KeranjangBelanja' => $KeranjangBelanja]);

	}

	// method untuk menampilkan view form beli KeranjangBelanja
	public function beli()
	{

		// memanggil view beli
		return view('beli');

	}

	// method untuk insert data ke table KeranjangBelanja
	public function store(Request $request)
	{
		// insert data ke table KeranjangBelanja
		DB::table('KeranjangBelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);
		// alihkan halaman ke halaman KeranjangBelanja
		return redirect('/KeranjangBelanja');

	}

	// method untuk hapus data KeranjangBelanja
	public function batal($ID)
	{
		// menghapus data KeranjangBelanja berdasarkan id yang dipilih
		DB::table('KeranjangBelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman KeranjangBelanja
		return redirect('/KeranjangBelanja');
	}
}
