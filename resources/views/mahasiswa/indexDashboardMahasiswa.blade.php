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
      <!-- Informasi User -->
      <div class="user-profile">
        <img src="../Assets/user.png" alt="profile-user" />
      </div>
      <div class="user-details">
        <p class="nama">Wally West</p>
        <p>2406021442432</p>
        <p>S1 Sastra Inggris</p>
        <p>kachaawww@gmail.com</p>
      </div>
    
      <!-- Bagian Status di atas Info Tambahan -->
      <div class="status-cards-container">
        <!-- Status Mahasiswa, IP Kumulatif, SKS -->
        <div class="status-cards">
          <div class="status-card">
            <p class="title">Aktif</p>
            <p class="subtitle">Status Mahasiswa</p>
          </div>
          <div class="status-card">
            <p class="title">3.1</p>
            <p class="subtitle">IP Kumulatif</p>
          </div>
          <div class="status-card">
            <p class="title">14</p>
            <p class="subtitle">SKS</p>
          </div>
        </div>
    
        <!-- Info Tambahan: Total SKS, Semester, IP Semester -->
        <div class="infotambahan-container">
          <div class="infotambahan">
            <p>Total SKS</p>
            <p class="sks">130</p>
          </div>
          <div class="infotambahan">
            <p>Semester</p>
            <p class="smt">5</p>
          </div>
          <div class="infotambahan">
            <p>IP Semester</p>
            <p class="ips">3.98</p>
          </div>
        </div>
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
