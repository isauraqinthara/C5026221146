@extends('master3')

@section('judulhalaman','Keranjang Belanja')

@section('konten')

	<h3>Keranjang Belanja</h3>

	<a href="/KeranjangBelanja"> Kembali</a>

	<br/>
	<br/>


        <div class="row">


            <div class="col-8">
                <form action="/KeranjangBelanja/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-9">
                <textarea type="number" class="form-control" id="Harga" name="Harga"></textarea>
                </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

</div>
</div>
@endsection
