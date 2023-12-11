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
            </tr>
        </thead>
        @foreach($chat as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>
                    @php
                        $words = explode(' ', $c->pesan);
                    @endphp

                    @foreach($words as $word)
                        @switch($word)
                            @case(':))')
                                <img src="{{ asset('/pictures/1.png') }}" alt=":))">
                                @break
                            @case(':3')
                                <img src="{{ asset('/pictures/2.png') }}" alt=":3">
                                @break
                            @case(':P')
                                <img src="{{ asset('/pictures/3.png') }}" alt=":P">
                                @break
                            @case(':C')
                                <img src="{{ asset('/pictures/4.png') }}" alt=":C">
                                @break
                            @case(';)')
                                <img src="{{ asset('/pictures/5.png') }}" alt=";)">
                                @break
                            @default
                                {{ $word }}
                        @endswitch
                    @endforeach
                </td>
            </tr>
        @endforeach
    </table>

    <!-- metode untuk membuat pagination -->
    {{ $chat->links() }}

@endsection
