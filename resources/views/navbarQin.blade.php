<!DOCTYPE html>
<html lang="en">
<head>
  <title>Starbucks Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <!-- Logo -->
  <a class="navbar-brand" href="https://www.starbucks.co.id/">
    <img src="starbucks-logo.png"
    height="50px">
    </a>

  <!-- top navbar -->
  <div class="container">
    <div class="row">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="https://www.starbucks.co.id/">Dashboard</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="https://www.starbucks.co.id/about-us">About Us</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="https://www.starbucks.co.id/menu" id="navbardrop" data-toggle="dropdown">
        Menu
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="https://www.starbucks.co.id/menu/beverage-list">Beverages</a>
        <a class="dropdown-item" href="https://www.starbucks.co.id/menu/food-list">Food</a>
        <a class="dropdown-item" href="https://www.starbucks.co.id/menu/merchandise/seasonal">Merchandise</a>
    </div>
    </div>
    </li>

    <!-- search navbar -->
    <div class="row">
        <form class="form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>

    </div>
  </ul>
</nav>

<!-- isi -->
<div>
  <img src="starbucks-photo.png" width="100%">
  <img src="starbucks-photo2.png" width="100%">
  <img src="starbucks-photo3.png" width="100%">
  <img src="starbucks-photo4.png" width="100%">
</div>

<!-- bottom navbar -->
<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-bottom">
    <a class="navbar-brand" href="https://www.instagram.com/starbucksindonesia/">
        <img src="instagram-logo.png"
        height="25px">
    </a>
    <a class="navbar-brand" href="https://twitter.com/SbuxIndonesia">
        <img src="twitter-logo.png"
        height="25px">
    </a>
  </nav>

</body>
</html>
