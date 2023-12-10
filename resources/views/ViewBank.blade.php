GAPAKE VIEW

@extends('masterBank')
@section('JudulHalaman', 'Bank')
@section('konten')
    <h3>Data Bank</h3>
    <a href="/bank" class="btn btn-info"> Kembali</a>

    <br />
    <div class="container shadow p-3 mt-2">
        <div class="row">
            <div class="col-6">
                <img src="" alt="">
            </div>
            <div class="col-6">
                @foreach ($bank as $b)
                    {{ csrf_field() }}
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Kode Bank</div>
                        <div class="col-sm-9">: {{ $b->KodeBank }}</div>
                    </div>
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Merk Bank</div>
                        <div class="col-sm-9">: {{ $b->MerkBank }}</div>
                    </div>
                    <div class="py-2 row">
                        <div class="col-sm-3 font-weight-bold ">Jumlah Bank</div>
                        <div class="col-sm-9">: {{ $b->JumlahBank }}</div>
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="/bank" class="btn btn-primary w-25 ">OK</a>
                    </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
