GAJADI DIPAKE

@extends('masterChat')
@section('JudulHalaman', 'Chat')
@section('konten')
    <h3>Chat</h3>
    <a href="/chat" class="btn btn-info"> Kembali</a>

    <br />
    <div class="container shadow p-3 mt-2">
        <div class="row">
            <div class="col-6">
                <img src="" alt="">
            </div>
            <div class="col-6">
                @foreach ($chat as $c)
                    {{ csrf_field() }}
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">id</div>
                        <div class="col-sm-9">: {{ $c->id }}</div>
                    </div>
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">pesan</div>
                        <div class="col-sm-9">: {{ $c->pesan }}</div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
