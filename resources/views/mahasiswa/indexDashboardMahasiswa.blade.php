<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css-mahasiswa/styleDashboardMahasiswa.css" />

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Roboto Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <!-- Navbar Start -->
    <nav class="navbar-start">
      <div class="logo-header">
        <a class="logo-silet">
          <img src="../Assets/silet_logo.png" alt="logo" />
        </a>
        <div class="logo-text">
          <span> <p>SI-LET</p> </span>
          <p class="logo-subtitle">
            Sistem Informasi & Laporan Edukasi Terintegrasi
          </p>
        </div>
      </div>
      <div>
        <a href="#profile" class="navbar-home">Dashboard</a>
      </div>
      <div>
        <a class="user-logo"
          ><img src="../assets/user.png" alt="user-logo"
        /></a>
        <a href="#" class="menu-button" type="button"
          ><img src="../assets/menu-bar.png" alt="menu-button"
        /></a>
      </div>
    </nav>

    <div class="profile-container">
      <div class="user-profile">
        <img src="../assets/user.png" alt="profile-user" />
      </div>
      <div class="user-details">
        <span class="nama"><p>Xaviera Putri</p></span>
        <p>24060214442432</p>
        <p>S1 Teknik Kimia</p>
        <span class="email"><p>xaviera@gmail.com</p></span>
      </div>
    </div>
    <div class="fitur-dashboard">
      <div class="registrasi-container">
        <h3>Registrasi</h3> 
      </div>
      <div class="akademik-container">
        <h3>Akademik</h3> 
      </div>
      <div class="jadwalkuliah-container">
        <h3>Jadwal Kuliah</h3> 
      </div>
    </div>
    <!-- Navbar End -->
    <nav></nav>
  </body>
</html>
