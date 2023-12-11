@extends('masterChat')

@section('judulhalaman', 'Tambah Chat')

@section('konten')

    <h3>Chat</h3>

    <a href="/chat"> Kembali</a>

    <br />
    <br />

    <form action="/chat/StoreChat" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="pesan" required="required" name="pesan">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>

@endsection
