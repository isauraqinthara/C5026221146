<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
    function convertTextToEmoticon($text)
    {
    $emoticons = [
        ':))' => '1.png',
        ':C' => '4.png',
        ':3' => '2.png',
        ';)' => '5.png',
        ':P' => '3.png',
    ];

    // Loop untuk mengganti emotikon dengan gambar
    foreach ($emoticons as $emoticon => $image) {
        $text = str_replace($emoticon, '<img src="/path/to/emoticons/' . $image . '" alt="' . $emoticon . '">', $text);
    }

    return $text;
    }


	public function IndexChat()
    {
    // mengambil data dari table chat
    //$chat = DB::table('chat')->get();
    $chat = DB::table('chat')->paginate(15); // agar tersortir 15 halaman

    // mengirim data chat ke view Indexchat
    return view('IndexChat', ['chat' => $chat]);
    }


	// method untuk menampilkan view form TambahChat chat
	public function TambahChat()
	{

		// memanggil view TambahChat
		return view('TambahChat');

	}

	// method untuk insert data ke table chat
	public function StoreChat(Request $request)
	{
		// insert data ke table chat
		DB::table('chat')->insert([
			'pesan' => $request->pesan,
        ]);
		// alihkan halaman ke halaman chat
		return redirect('/chat');

	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table chat sesuai pencarian data
		$chat = DB::table('chat')
		->where('pesan','like',"%".$cari."%")
		->paginate();

    		// mengirim data chat ke view IndexChat
		return view('IndexChat',['chat' => $chat, 'cari' => $cari]);

	}

    //method untuk melihat data chat
    public function ViewChat($id)
    {
    // mengambil data chat berdasarkan id yang dipilih
    $chat = DB::table('chat')->where('id', $id)->get();
    // passing data chat yang didapat ke view ViewChat.blade.php
    return view('chat.ViewChat', ['chat' => $chat]);
    }

	// method untuk EditChat data chat
    public function EditChat($id)
    {
    // mengambil data chat berdasarkan id yang dipilih
    $chat = DB::table('chat')->where('id', $id)->get();
    // passing data chat yang didapat ke view EditChat.blade.php
    return view('EditChat', ['chat' => $chat]);
    }


	// update data chat
	public function update(Request $request)
	{
		// update data chat
		DB::table('chat')->where('id',$request->id)->update([
			'pesan' => $request->pesan,
		]);
		// alihkan halaman ke halaman chat
		return redirect('/chat');
	}

	// method untuk hapus data chat
	public function hapus($id)
	{
		// menghapus data chat berdasarkan id yang dipilih
		DB::table('chat')->where('id',$id)->delete();

		// alihkan halaman ke halaman chat
		return redirect('/chat');
	}
}
