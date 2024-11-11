<html>
 <head>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="font-roboto">
  <div class="min-h-screen bg-gray-100">
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
    <a class="text-gray-600 text-sm mb-4 inline-block" href="dashboard-kaprodi">
     ← Back
    </a>
    <div class="bg-white p-6 border border-gray-300">
     <h2 class="text-center text-lg font-bold mb-4">
      PENYUSUNAN JADWAL KULIAH
     </h2>
     <form>
      <div class="grid grid-cols-2 gap-4 mb-4">
       <label class="flex items-center">
        <span class="w-1/3">
         Matakuliah (Kelas):
        </span>
        <select class="w-2/3 border border-gray-300 p-2">
         <option>
          --Pilih Mata Kuliah--
         </option>
        </select>
       </label>
       <label class="flex items-center">
        <span class="w-1/3">
         Koordinator Mata Kuliah:
        </span>
        <select class="w-2/3 border border-gray-300 p-2">
         <option>
          --Pilih Koordinator Mata Kuliah--
         </option>
        </select>
       </label>
       <label class="flex items-center">
        <span class="w-1/3">
         Penanggung Jawab:
        </span>
        <select class="w-2/3 border border-gray-300 p-2">
         <option>
          --Pilih Penanggung Jawab--
         </option>
        </select>
       </label>
       <label class="flex items-center">
        <span class="w-1/3">
         Dosen Pengampu:
        </span>
        <select class="w-2/3 border border-gray-300 p-2">
         <option>
          --Pilih Dosen Pengampu--
         </option>
        </select>
       </label>
       <label class="flex items-center">
        <span class="w-1/3">
         Hari:
        </span>
        <select class="w-2/3 border border-gray-300 p-2">
         <option>
          --Hari--
         </option>
        </select>
       </label>
       <label class="flex items-center">
        <span class="w-1/3">
         SKS:
        </span>
        <select class="w-1/3 border border-gray-300 p-2">
         <option>
          --
         </option>
        </select>
       </label>
       <label class="flex items-center">
        <span class="w-1/3">
         Jam Mulai:
        </span>
        <select class="w-1/3 border border-gray-300 p-2">
         <option>
          --
         </option>
        </select>
       </label>
       <label class="flex items-center">
        <span class="w-1/3">
         Jam Berakhir:
        </span>
        <select class="w-1/3 border border-gray-300 p-2">
         <option>
          --
         </option>
        </select>
       </label>
       <label class="flex items-center">
        <span class="w-1/3">
         Ruang:
        </span>
        <select class="w-1/3 border border-gray-300 p-2">
         <option>
          --
         </option>
        </select>
       </label>
       <label class="flex items-center">
        <span class="w-1/3">
         Semester:
        </span>
        <select class="w-1/3 border border-gray-300 p-2">
         <option>
          --
         </option>
        </select>
       </label>
      </div>
      <div class="text-right">
       <a class="bg-green-500 text-white px-4 py-2 rounded" href="/penyusunanjadwalkuliah-kaprodi2">
            Next
       </a>
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>
