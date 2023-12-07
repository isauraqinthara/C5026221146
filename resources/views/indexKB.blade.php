@extends('master3')
@section('Keranjang Belanja')

@section('konten')

	<br><a href="/KeranjangBelanja/beli" class="btn btn-primary">Beli</a>
	<br><br>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($KeranjangBelanja as $kb)
		<tr>
			<td>{{ $kb->ID }}</td>
			<td>{{ $kb->KodeBarang }}</td>
			<td>{{ $kb->Jumlah }}</td>
			<td>{{ number_format($kb->Harga,2,',','.')}}</td>
            <td>{{ number_format($kb->Jumlah * $kb->Harga,2,',','.')}}</td>
			<td>

				<a href="/KeranjangBelanja/batal/{{ $kb->ID }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
