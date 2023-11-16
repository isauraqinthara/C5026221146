@extends('master')

@section('judulhalaman', 'Kontak')

@section('judul')
<div class="jumbotron">
    Ini Halaman Home
</div>
@endsection

@section('konten')
<h3>Isi Halaman Home</h3>

@endsection


  <table class="table table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      @for ($i=1; $i<6; $i++)
          <tr>
            <tr>
                <td>No</td>
                <td>:</td>
                <td>{{ $i }}</td>
              </tr>
          </tr>
      @endfor
    </tbody>
  </table>

  @endsection
