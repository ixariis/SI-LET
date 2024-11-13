<html>
 <head>
  <title>
   SI-LET - Status Perkembangan Mahasiswa
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
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
                <a href="/dashboard-dosen" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
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
   <a class="text-gray-600 text-sm" href="/dashboard-dosen">
    ← Back
   </a>
   <h2 class="mt-4 text-2xl font-bold">
    STATUS PERKEMBANGAN MAHASISWA
   </h2>
   <div class="mt-4">
    <label class="block text-sm font-medium text-gray-700" for="angkatan">
     Angkatan
    </label>
    <select class="mt-1 block w-1/4 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="angkatan" name="angkatan">
     <option>
      Pilih angkatan
     </option>
     <option>
      2019
     </option>
     <option>
        2020
     </option>
     <option>
        2021
     </option>
     <option>
        2022
     </option>
    </select>
   </div>
   <div class="mt-20 text-center text-gray-500">
    ~ Pilih angkatan terlebih dahulu ~
   </div>
  </div>
 </body>
</html>