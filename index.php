<?php
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Daily Journal</title>
  <link rel="icon" type="image/png" href="img/halo.jpg"/>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    .jumbotron-custom {
      background: linear-gradient(45deg,rgb(216, 217, 221),rgb(74, 73, 75));
      color: black;
      padding-top: 8rem;
    }
    </style>

<body id="home">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">My Daily Journal</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-right" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
          <li class="nav-item"><a class="nav-link" href="#Gallery">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#article">Article</a></li>
          <li class="nav-item"><a class="nav-link" href="#Schedule">Schedule</a></li>
          <li class="nav-item"><a class="nav-link btn btn-success text-success" href="login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Jumbotron -->
  <section class="jumbotron jumbotron-custom text-white text-center ">
    <!----logo---->
    <img src="img/halo.jpg" alt="logo" width="150" class="rounded-circle" />
    <!----akhir logo-->
    <h1 class="display-4 text-black">REVER</h1>
    <p class="lead text-black">This daily journal is  notes about the rever</p>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#000" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,208C384,203,480,149,576,154.7C672,160,768,224,864,224C960,224,1056,160,1152,149.3C1248,139,1344,181,1392,202.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
    </svg>
 
  </section>
  <!-- About -->
  <section class="my-5 py-5 md-4">
    <div class="container text-center">
      <h2>About</h2>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A dolore omnis odit. Adipisci libero velit aliquid laudantium, molestias doloribus quos soluta rem eius laboriosam non cum cupiditate reiciendis sit omnis.</p>
        </div>
        <div class="col-md-4">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet eligendi odit voluptas, quasi quae unde, nobis perferendis, sint ut odio officiis voluptates a vel neque non! Exercitationem perspiciatis mollitia ipsam?</p>
        </div>
      </div>
    </div>
  </section>

                                                      <!-- Gallery -->
  <!-- Gallery Section -->
<section class="bg-black text-white py-5">
    <div class="container text-center">
        <h1 class="mb-5">Gallery</h1>
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="img/3.jpg" class="card-img-top img-fluid" alt="Gambar 1" style="max-height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">ReveR</h3>
                        <p class="card-text">Design By ...</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="img/2.jpg" class="card-img-top img-fluid" alt="Gambar 2" style="max-height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">ReveR</h3>
                        <p class="card-text">Design By @raffel_sabdi</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="img/4.jpg" class="card-img-top img-fluid" alt="Gambar 3" style="max-height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">ReveR</h3>
                        <p class="card-text">Design By ...</p>
                    </div>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="img/5.jpg" class="card-img-top img-fluid" alt="Gambar 4" style="max-height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h3 class="card-title">ReveR</h3>
                        <p class="card-text">Design By @raffel_sabdi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



                                              <!-- Biodata /About Me-->
  <section id="about" class="bg-white text-black">
    <div class="container py-5">
      <div class="row">
        <div class="col-md-4 text-center">
          <img src="img/7.jpg" alt="Profile Picture" class="rounded-circle img-fluid" style="width: 350px; height: 350px;">
        </div>
        <div class="col-md-8">
          <h1>About Me</h1>
          <p>Hallo! nama saya  <strong>Abintara</strong>, saya adalah seorang <strong>Mahasiswa Teknik Informatika</strong> di <strong>Universitas Dian Nuswantoro</strong>, Semarang.</p>
          <h4>Personal Information</h4>
          <ul class="list-group">
            <li class="list-group-item"><strong>Full Name:</strong> Nadzar Wahyu Bintara Aji</li>
            <li class="list-group-item"><strong>Date of Birth:</strong> 1 maret 2305</li>
            <li class="list-group-item"><strong>Email:</strong> <a href="mailto:[Email Anda]">rever@gmail.com</a></li>
            <li class="list-group-item"><strong>Phone:</strong> 08223891999</li>
            <li class="list-group-item"><strong>Hobbies:</strong> Menyelam di bawah sadar</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

                                                   <!-- Article -->
  <section id="article" class="text-center p-5 bg-black text-white">
  <div class="container">
    <h1 class="my-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql);
      while ($row = $hasil->fetch_assoc()): ?>
      <div class="col">
        <div class="card h-100">
          <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="Gambar" style="max-width: 100%; max-height: 200px; object-fit: cover;">
          <div class="card-body">
            <h5 class="card-title"><?= $row["judul"] ?></h5>
            <p class="card-text"><?= $row["isi"] ?></p>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary"><?= $row["tanggal"] ?></small>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>


  <section id="Schedule">
  <div class="container py-5">
        <h1 class="text-center mb-4">Schedule</h1>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Hari</th>
                    <th>Mata Pelajaran</th>
                    <th>Jam</th>
                    <th>Ruangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Senin</td>
                    <td>LOGIF</td>
                    <td>09.30-11.30 </td>
                    <td>H.4.11</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>RPL</td>
                    <td> 12.30-14.00</td>
                    <td>H.5.12</td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>PKN </td>
                    <td>10.30-12.00 </td>
                    <td>H.7 </td>
                </tr>
                <tr>
                    <td>-</td>
                    <td> WEB</td>
                    <td>12.30-14.00</td>
                    <td> D.2.7</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>Basis Data (Teori)</td>                  
                    <td>14.10-15.30</td>
                    <td>H.5.14</td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>Basis Data (Praktek)</td>                  
                    <td>12.30-14.00</td>
                    <td>H.3.4</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>Sistem Operasi</td>                 
                    <td>09.30-12.00</td>
                    <td>h.4.9</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>PROBSTAT</td>                    
                    <td>12.30-14.10</td>
                    <td>H.4.12</td>
                </tr>
            </tbody>
        </table>
    </div>
    </section>

<!--awal gallery--->
    <section id="Gallery" class="text-center p-5 bg-dark">
  <div class="container">
    <h5 class="fw-bold display-4 pb-3 text-white">Album Gallery</h5>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        $sql = "SELECT * FROM gallery ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);
        $isActive = true; // Untuk menentukan slide pertama aktif
        while ($row = $hasil->fetch_assoc()) {
        ?>
          <div class="carousel-item <?php if ($isActive) { echo 'active'; $isActive = false; } ?>">
          <div class="d-flex justify-content-center">
          <img src="img/<?= $row["gambar"] ?>" class="img-fluid" style="max-height: 400px;" alt="Gambar Gallery">
        </div>
            <div class="carousel-caption d-none d-md-block">
              <h5><?= $row["judul"] ?></h5>
              <p><?= $row["tanggal"] ?></p>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
      <!-- Kontrol navigasi carousel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>


  <footer class="text-center p-3 bg-black">
    <p class="text-white"></b> Created by <strong>Nadzar Wahyu 2024</strong></p>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
