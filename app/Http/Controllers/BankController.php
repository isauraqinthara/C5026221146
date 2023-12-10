<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BankController extends Controller
{
	public function IndexBank()
	{
    	// mengambil data dari table bank
		//$bank = DB::table('bank')->get();
        $bank = DB::table('bank')->paginate(15); //agar tersortir 15 halaman

    	// mengirim data bank ke view IndexBank
		return view('IndexBank',['bank' => $bank]);

	}

	// method untuk menampilkan view form TambahBank bank
	public function TambahBank()
	{

		// memanggil view TambahBank
		return view('TambahBank');

	}

	// method untuk insert data ke table bank
	public function StoreBank(Request $request)
	{
		// insert data ke table bank
		DB::table('bank')->insert([
			'MerkBank' => $request->MerkBank,
			'JumlahBank' => $request->JumlahBank,
			'Tersedia' => $request->Tersedia
        ]);
		// alihkan halaman ke halaman bank
		return redirect('/bank');

	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table bank sesuai pencarian data
		$bank = DB::table('bank')
		->where('MerkBank','like',"%".$cari."%")
		->paginate();

    		// mengirim data bank ke view IndexBank
		return view('IndexBank',['bank' => $bank, 'cari' => $cari]);

	}

    //method untuk melihat data Bank
    public function ViewBank($KodeBank)
    {
        // mengambil data bank berdasarkan id yang dipilih
        $baju = DB::table('bank')->where('KodeBank',$KodeBank)->get();
        // passing data bank yang didapat ke view ViewBank.blade.php
        return view('bank/ViewBank',['bank'=> $bank]);
    }

	// method untuk EditBank data bank
	public function EditBank($KodeBank)
	{
		// mengambil data bank berdasarkan id yang dipilih
		$bank = DB::table('bank')->where('KodeBank',$KodeBank)->get();
		// passing data bank yang didapat ke view EditBank.blade.php
		return view('EditBank',['bank' => $bank]);

	}

	// update data bank
	public function update(Request $request)
	{
		// update data bank
		DB::table('bank')->where('KodeBank',$request->KodeBank)->update([
			'MerkBank' => $request->MerkBank,
			'JumlahBank' => $request->JumlahBank,
			'Tersedia' => $request->Tersedia
		]);
		// alihkan halaman ke halaman bank
		return redirect('/bank');
	}

	// method untuk hapus data bank
	public function hapus($KodeBank)
	{
		// menghapus data bank berdasarkan KodeBank yang dipilih
		DB::table('bank')->where('KodeBank',$KodeBank)->delete();

		// alihkan halaman ke halaman bank
		return redirect('/bank');
	}
}
