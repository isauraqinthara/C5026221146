<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('judulhalaman')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Nunito&family=Poppins:wght@400;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Logo -->
  <a class="navbar-brand" href="#">
    <img src="Q.png"
    height="50px">
    </a>

  <!-- top navbar -->
  <div class="container">
    <div class="row">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="https://github.com/isauraqinthara/C5026221146">5026221146 Isaura Qinthara Heriswan</a>
    </li>
    {{-- <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li> --}}

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Database
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{url('/pegawai')}}">Pegawai</a>
        <a class="dropdown-item" href="{{url('/KeranjangBelanja')}}">Keranjang Belanja</a>
        <a class="dropdown-item" href="{{url('/bank')}}">Bank</a>
    </div>
    </div>
    </li>

    <!-- search navbar -->
    <div class="row">
        <form class="form-inline" action="/bank/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Bank"
            value="{{ old("cari", isset($cari) ? $cari : '') }}"> <!-- menampilan secara otomatis apa yang dicari -->
            <button class="btn btn-info" type="submit">Cari</button>
        </form>
      </div>
    </div>

    </div>
  </ul>
</nav>

<div class="container">

    @yield('konten')

    @include('footer')
</div>

</body>
</html>
