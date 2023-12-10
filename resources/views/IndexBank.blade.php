@extends('masterBank')
@section('judulhalaman', 'Bank')

@section('konten')
	<br><a href="/bank/tambah" class="btn btn-primary"> + Tambah Bank Baru</a>
	<br><br>

	<table class="table">
        <thead class="thead-light">
		<tr>
            <th>Kode Bank</th>
			<th>Merk Bank</th>
			<th>Jumlah Bank</th>
			<th>Tersedia</th>
            <th>Opsi<th>
		</tr>
        </thead>
		@foreach($bank as $b)
		<tr>
            <td>{{ $b->KodeBank }}</td>
			<td>{{ $b->MerkBank }}</td>
			<td>{{ $b->JumlahBank }}</td>
			<td>{{ $b->Tersedia }}</td>
			<td>
				<a href="/bank/edit/{{ $b->KodeBank }}" class="btn btn-warning">Edit</a>
				|
				<a href="/bank/hapus/{{ $b->KodeBank }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    <!-- metode untuk membuat pagination
    {{ $bank->links() }}

@endsection
