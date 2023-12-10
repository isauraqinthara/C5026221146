@extends('masterBank')

@section('judulhalaman','Bank')

@section('konten')

	<h3>Data Bank</h3>

	<a href="/bank"> Kembali</a>

	<br/>
	<br/>

        <form action="/bank/StoreBank" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <form>
        <div class="form-group row">
            <label for="MerkBank" class="col-sm-2 col-form-label">Merk Bank</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="MerkBank" required="required" name="MerkBank">
            </div>
        </div>
        <div class="form-group row">
            <label for="JumlahBank" class="col-sm-2 col-form-label">Jumlah Bank</label>
            <div class="col-sm-10">
                <input type="number"  class="form-control" id="JumlahBank" required="required" name="JumlahBank">
            </div>
        </div>
        <div class="form-group row">
            <label for="Tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Tersedia" required="required" name="Tersedia">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
</div>
</div>
@endsection
