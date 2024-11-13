<html>
 <head>
  <title>
   Verifikasi IRS
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
        }
  </style>
 </head>
 <body class="bg-gray-100">
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
             <a href="/dashboard-kaprodi" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
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
  <div class="p-4">
   <a class="text-gray-600 text-sm" href="/dashboard-kaprodi">
    ← Back
   </a>
   <h2 class="text-2xl font-semibold mt-4">
    Verifikasi IRS
   </h2>
   <div class="border-t mt-2 pt-4">
    <div class="flex space-x-4">
     <div>
      <label class="block text-gray-700" for="angkatan">
       Angkatan
      </label>
      <select class="border border-gray-300 rounded p-2" id="angkatan">
       <option>
        -Pilih Angkatan-
       </option>
       <option>
        2024
       </option>
      </select>
     </div>
     <div>
      <label class="block text-gray-700" for="kelas">
       Kelas
      </label>
      <select class="border border-gray-300 rounded p-2" id="kelas">
       <option>
        -Pilih Kelas-
       </option>
       <option>
        A
       </option>
      </select>
      <a href="verifikasiIRS-kaprodi2">
        <button class="fas fa-search ml-5">
        </button>
      </a>
     </div>
    </div>
    <p class="text-gray-500 text-center mt-8">
     ~ Pilih angkatan dan kelas terlebih dahulu ~
    </p>
   </div>
  </div>
 </body>
</html>