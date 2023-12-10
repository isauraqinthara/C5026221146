@extends('masterBank')

@section('judulhalaman','Bank')

@section('konten')
	<h3>Edit Bank</h3>

	<a href="/bank"> Kembali</a>

	<br/>
	<br/>

	@foreach($bank as $b)

    <form action="/bank/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group row">
            <label for="MerkBank" class="col-sm-2 col-form-label">Merk Bank</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" required="required" name="MerkBank" value="{{ $b->MerkBank }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="JumlahBank" class="col-sm-2 col-form-label">Jumlah Bank</label>
            <div class="col-sm-10">
                <input type="number"  class="form-control" id="JumlahBank" required="required" name="JumlahBank" value="{{ $b->JumlahBank }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="Tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="umur" required="required" name="Tersedia" value="{{ $b->Tersedia }}">
            </div>
        </div>
        <input type="hidden" name="KodeBank" value="{{ $b->KodeBank }}"> <br/>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

@endsection
