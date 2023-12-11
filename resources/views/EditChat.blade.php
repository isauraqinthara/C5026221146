@extends('masterChat')

@section('judulhalaman','Chat')

@section('konten')
	<h3>Edit Chat</h3>

	<a href="/chat"> Kembali</a>

	<br/>
	<br/>

	@foreach($chat as $c)

    <form action="/chat/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
		<div class="form-group row">
            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
            <div class="col-sm-10">

                <input type="pesan" class="form-control" required="required" name="pesan" value="{{ $c->pesan }}">
            </div><br><br>

        <input type="hidden" name="id" value="{{ $c->id }}"> <br/>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

@endsection
