<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="font-roboto bg-gray-100">
  <header class="bg-[9BC0C0] p-0.5 flex justify-between items-center">
    <div class="flex items-center">
     <img alt="SI-LET Logo" class=" h-24 w-24 mr-2" src="assets/silet_logo.png" />
     <div>
      <h1 class="text-xl font-bold">
       SI-LET
      </h1>
      <p class="text-sm">
       Sistem Informasi &amp; Laporan Edukasi Terintegrasi
      </p>
     </div>
    </div> 
    <div class="flex items-center space-x-4 mr-7">
     <img class= "w-12 h-12" src="assets/user.png" alt="userlogo">
     <div class="relative">
      <img 
        class="w-14 h-14 cursor-pointer" 
        src="assets/menu-bar.png" 
        alt="menubar" 
        onclick="toggleDropdown()"
      >
      <!-- Dropdown Menu -->
      <div id="dropdown" class="hidden absolute right-0 mt-2 w-32 bg-white border border-gray-200 rounded-md shadow-lg">
        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
      </div>
    </div>
  
    <script>
      function toggleDropdown() {
        const dropdown = document.getElementById("dropdown");
        dropdown.classList.toggle("hidden");
      }
  
      // Menutup dropdown jika pengguna mengklik di luar elemen dropdown
      window.onclick = function(event) {
        const dropdown = document.getElementById("dropdown");
        if (!event.target.closest('img')) { // Pastikan tidak mengklik icon menu bar
          dropdown.classList.add('hidden'); // Tutup dropdown
        }
      }
    </script>
     </a>
    </div>
   </header>
  <main class="p-8">
  <h2 class="text-3xl font-bold text-center mb-8">
    Dashboard
  </h2>
   <div class="bg-white p-4 rounded-lg shadow-lg flex justify-between items-center mb-8">
    <div class="flex items-center space-x-4">
     <div class="h-16 w-16 rounded-full border-2 border-gray-300 flex items-center justify-center  mr-5 ml-16">
      <i class="fas fa-user text-4xl text-gray-500">
      </i>
     </div>
     <div class="ml-10" >
      <h3 class="text-xl font-bold">
       Wally West
      </h3>
      <p>
       2406021442432
      </p>
      <p>
       S1 Sastra Inggris
      </p>
      <p>
       kachaawww@gmail.com
      </p>
     </div>
    </div>
    <div class="flex space-x-4 mr-9">
     <div class="bg-gray-200 p-4 rounded-lg text-center">
      <h4 class="text-lg font-bold">
       Aktif
      </h4>
      <p>
       Status Mahasiswa
      </p>
     </div>
     <div class="bg-gray-200 p-4 rounded-lg text-center">
      <h4 class="text-lg font-bold">
       3.1
      </h4>
      <p>
       IP Kumulatif
      </p>
     </div>
     <div class="bg-gray-200 p-4 rounded-lg text-center">
      <h4 class="text-lg font-bold">
       14
      </h4>
      <p>
       SKS
      </p>
     </div>
     <div class="bg-gray-200 p-4 rounded-lg text-center">
      <h4 class="text-lg font-bold">
       130
      </h4>
      <p>
       Total SKS
      </p>
     </div>
     <div class="bg-gray-200 p-4 rounded-lg text-center">
      <h4 class="text-lg font-bold">
       5
      </h4>
      <p>
       Semester
      </p>
     </div>
     <div class="bg-gray-200 p-4 rounded-lg text-center">
      <h4 class="text-lg font-bold">
       3.98
      </h4>
      <p>
       IP Semester
      </p>
     </div>
    </div>
   </div>
   <a href="{{ route('mahasiswa.registrasi') }}">
   <div class="grid grid-cols-3 gap-8">
    <div class="bg-green-200 p-6 rounded-lg text-center shadow-lg">
     <h3 class="text-xl font-bold">
      Registrasi
     </h3>
    </div>
  </a>
    <a href="{{ route('mahasiswa.akademik')  }}">
    <div class="bg-[#9bc0a5] p-6 rounded-lg text-center shadow-lg">
     <h3 class="text-xl font-bold">
      Akademik
     </h3>
    </div>
  </a>
  <a href="{{ route('mahasiswa.jadwalkuliah') }}">
    <div class="bg-yellow-200 p-6 rounded-lg text-center shadow-lg">
     <h3 class="text-xl font-bold">
      Jadwal Kuliah
     </h3>
    </div>
  </a>
   </div>
  </main>
 </body>
</html>
