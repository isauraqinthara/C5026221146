@extends('masterChat')
@section('judulhalaman', 'Chat')

@section('konten')
	<br><a href="/chat/TambahChat" class="btn btn-primary"> + Tambah Chat Baru</a>
	<br><br>

	<table class="table">
        <thead class="thead-light">
		<tr>
            <th>id</th>
			<th>pesan</th>
            <th>opsi</th>
		</tr>
        </thead>
		@foreach($chat as $c)
		<tr>
            <td>{{ $c->id }}</td>
			<td>{{ $c->pesan }}
            @if ($c->pesan = ':))')
                '1.png'
            @elseif ($c->pesan = ':3')
                '2.png'
            @elseif ($c->pesan = ':P')
                '3.png'
            @elseif ($c->pesan = ':C')
                '4.png'
            @elseif ($c->pesan = ';)')
                '5.png'
            @endif
            </td>
			<td>
                <a href="/chat/ViewChat/{{ $c->id }}" class="btn btn-success">View</a>
				|
				<a href="/chat/edit/{{ $c->id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/chat/hapus/{{ $c->id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <!-- metode untuk membuat pagination
    {{ $chat->links() }}

@endsection
