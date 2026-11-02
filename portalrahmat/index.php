<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .carousel-item img {
            height: 500px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">ART MOMENTS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</Canvas></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            BLOG
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            PORTFOLIO
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Carousel -->
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/WhatsApp Image 2026-03-09 at 11.12.43 (1).jpeg" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/WhatsApp Image 2026-03-09 at 11.12.43 (2).jpeg" class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/WhatsApp Image 2026-03-09 at 11.12.43.jpeg" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- Grid 3 Column -->
<div class="container mt-5">
  <div class="row">
    
    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="images/grid1.jpg" class="card-img-top" alt="Berita 1">
        <div class="card-body">
          <h5 class="card-title">Judul Berita 1</h5>
          <p class="card-text">Ringkasan singkat berita pertama ditampilkan di sini.</p>
          <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="images/grid2.jpg" class="card-img-top" alt="Berita 2">
        <div class="card-body">
          <h5 class="card-title">Judul Berita 2</h5>
          <p class="card-text">Ringkasan singkat berita kedua ditampilkan di sini.</p>
          <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="card">
        <img src="images/grid3.jpg" class="card-img-top" alt="Berita 3">
        <div class="card-body">
          <h5 class="card-title">Judul Berita 3</h5>
          <p class="card-text">Ringkasan singkat berita ketiga ditampilkan di sini.</p>
          <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Grid 3 Column -->
<ul class="nav flex-column">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">kategori</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">politik</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">olahraga</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" href="#">terkini</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>