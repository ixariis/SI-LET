<html>
 <head>
  <title>
   SI-LET
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
 </head>
 <body class="bg-white">
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
        </div>
       </header>
  <div class="p-4">
   <a class="text-gray-600" href="/dashboard-dekan">
    ← Back
   </a>
  </div>
  <div class="flex justify-center">
   <div class="bg-[8281C5] p-8 rounded-lg w-3/4">
    <h2 class="text-center text-xl font-bold mb-6">
     Penyetujuan Gedung untuk Ruangan Perkuliahan
    </h2>
    <div class="space-y-4">
     <div class="bg-gray-200 p-4 rounded-lg flex justify-between items-center">
      <div>
       <p class="font-semibold">
        Struktur Data
       </p>
       <p class="text-sm">
        07.00 - 10.20 WIB
       </p>
      </div>
      <div class="flex items-center space-x-4">
       <span class="bg-gray-400 text-white px-2 py-1 rounded">
        Gedung A
       </span>
       <a class="fas fa-check text-xl text-gray-600" href=""></a>
       <a class="fas fa-times text-xl text-gray-600" href=""></a>
      </div>
     </div>
     <div class="bg-gray-200 p-4 rounded-lg flex justify-between items-center">
      <div>
       <p class="font-semibold">
        Pembelajaran Mesin
       </p>
       <p class="text-sm">
        13.00 - 15.30 WIB
       </p>
      </div>
      <div class="flex items-center space-x-4">
       <span class="bg-gray-400 text-white px-2 py-1 rounded">
        Gedung B
       </span>
       <i class="fas fa-check text-xl text-gray-600">
       </i>
       <i class="fas fa-times text-xl text-gray-600">
       </i>
      </div>
     </div>
     <div class="bg-gray-200 p-4 rounded-lg flex justify-between items-center">
      <div>
       <p class="font-semibold">
        Sistem Informasi
       </p>
       <p class="text-sm">
        9.40 - 12.20 WIB
       </p>
      </div>
      <div class="flex items-center space-x-4">
       <span class="bg-gray-400 text-white px-2 py-1 rounded">
        Gedung E
       </span>
       <i class="fas fa-check text-xl text-gray-600">
       </i>
       <i class="fas fa-times text-xl text-gray-600">
       </i>
      </div>
     </div>
     <div class="bg-gray-200 p-4 rounded-lg flex justify-between items-center">
        <div>
         <p class="font-semibold">
          Struktur Data
         </p>
         <p class="text-sm">
          13.00 - 16.20 WIB
         </p>
        </div>
        <div class="flex items-center space-x-4">
         <span class="bg-gray-400 text-white px-2 py-1 rounded">
          Gedung D 
         </span>
         <i class="fas fa-check text-xl text-gray-600">
         </i>
         <i class="fas fa-times text-xl text-gray-600">
         </i>
        </div>
       </div>
    </div>
   </div>
  </div>
 </body>
</html>
