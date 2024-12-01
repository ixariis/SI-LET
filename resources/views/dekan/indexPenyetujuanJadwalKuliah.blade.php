<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>
   Penyetujuan Jadwal Kuliah
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-gray-100">
    <header class="bg-[#9BC0C0] p-0.5 flex justify-between items-center">
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
             <a href="/dashboard-dekan" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
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
   <a class="text-gray-600 text-sm" href="/dashboard-dekan">
    ← Back
   </a>
  </div>
  <div class="max-w-4xl mx-auto bg-[9BC0A5] p-6 rounded-lg">
   <h2 class="text-center text-xl font-bold mb-6">
    Penyetujuan Jadwal Kuliah
   </h2>
   <div class="space-y-4">
    <div class="bg-white p-4 rounded-lg shadow flex justify-between items-center border-2">
     <div>
      <h3 class="font-bold">
       Struktur Data A
      </h3>
      <p>
       Senin, 07.00 - 10.20 WIB
      </p>
     </div>
     <div class="flex items-center space-x-2">
      <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded">
       Cek jadwal
      </button>
      <i class="fas fa-check text-xl text-gray-700"></i>
      <i class="fas fa-times text-xl text-gray-700"></i>
      </i>
     </div>
    </div>
    <div class="bg-white p-4 rounded-lg shadow flex justify-between items-center border-2">
     <div>
      <h3 class="font-bold">
       Sistem Informasi B
      </h3>
      <p>
       Senin, 07.00 - 10.20 WIB
      </p>
     </div>
     <div class="flex items-center space-x-2">
      <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded">
       Cek jadwal
      </button>
      <i class="fas fa-check text-xl text-gray-700"></i>
      <i class="fas fa-times text-xl text-gray-700"></i>
     </div>
    </div>
    <div class="bg-white p-4 rounded-lg shadow flex justify-between items-center border-2">
     <div>
      <h3 class="font-bold">
       Logika Informatika A
      </h3>
      <p>
       Senin, 13.00 - 14.40 WIB
      </p>
     </div>
     <div class="flex items-center space-x-2">
      <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded">
       Cek jadwal
      </button>
      <i class="fas fa-check text-xl text-gray-700"></i>
      <i class="fas fa-times text-xl text-gray-700"></i>
      </i>
     </div>
    </div>
    <div class="bg-white p-4 rounded-lg shadow flex justify-between items-center border-2">
        <div>
         <h3 class="font-bold">
          Logika Informatika C
         </h3>
         <p>
          Kamis, 13.00 - 14.40 WIB
         </p>
        </div>
        <div class="flex items-center space-x-2">
         <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded">
          Cek jadwal
         </button>
         <i class="fas fa-check text-xl text-gray-700"></i>
         <i class="fas fa-times text-xl text-gray-700"></i>
         </i>
        </div>
       </div>
   </div>
  </div>
 </body>
</html>
