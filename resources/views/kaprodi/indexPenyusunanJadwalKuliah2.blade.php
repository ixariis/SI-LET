<html>
 <head>
  <title>
   SI-LET - Penyusunan Jadwal Kuliah
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
   <a class="text-gray-600 text-sm mb-4 inline-block" href="/penyusunanjadwalkuliah-kaprodi">
    ← Back
   </a>
   <h2 class="text-xl font-bold mt-4">
    PENYUSUNAN JADWAL KULIAH
   </h2>
   <div class="mt-4">
    <label class="block text-lg" for="mata-kuliah">
     Nama Mata Kuliah :
    </label>
    <select class="border border-gray-300 p-2 w-80 mt-2" id="mata-kuliah">
     <option>
      --Pilih Mata Kuliah--
     </option>
    </select>
   </div>
   <div class="mt-6">
    <h3 class="text-center text-lg font-bold">
     Keamanan Jaringan Informasi
    </h3>
    <p class="text-center">
     (semester 5)
    </p>
    <div class="overflow-x-auto mt-4">
     <table class="min-w-full border-collapse border border-gray-400">
      <thead>
       <tr>
        <th class="border border-gray-400 p-2">
         Semester
        </th>
        <th class="border border-gray-400 p-2">
         2022
        </th>
        <th class="border border-gray-400 p-2">
         2023
        </th>
        <th class="border border-gray-400 p-2">
         2024
        </th>
        <th class="border border-gray-400 p-2">
         Persetujuan
        </th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <td class="border border-gray-400 p-2">
         Total Mahasiswa
        </td>
        <td class="border border-gray-400 p-2">
         156
        </td>
        <td class="border border-gray-400 p-2">
         180
        </td>
        <td class="border border-gray-400 p-2">
         245
        </td>
        <td class="border border-gray-400 p-2">
        </td>
       </tr>
       <tr>
        <td class="border border-gray-400 p-2">
         Sudah Ambil
        </td>
        <td class="border border-gray-400 p-2">
         -
        </td>
        <td class="border border-gray-400 p-2">
         -
        </td>
        <td class="border border-gray-400 p-2">
         -
        </td>
        <td class="border border-gray-400 p-2">
        </td>
       </tr>
       <tr>
        <td class="border border-gray-400 p-2">
         Belum Ambil
        </td>
        <td class="border border-gray-400 p-2">
         156
        </td>
        <td class="border border-gray-400 p-2">
         180
        </td>
        <td class="border border-gray-400 p-2">
         245
        </td>
        <td class="border border-gray-400 p-2">
        </td>
       </tr>
       <tr>
        <td class="border border-gray-400 p-2">
         Total Ajuan
        </td>
        <td class="border border-gray-400 p-2">
         Wajib
        </td>
        <td class="border border-gray-400 p-2">
         80
        </td>
        <td class="border border-gray-400 p-2">
        </td>
        <td class="border border-gray-200 p-2 flex justify-center">
         <button class="bg-red-500 text-white px-2 py-1 rounded">
          Tolak
         </button>
         <button class="bg-green-500 text-white px-2 py-1 rounded ml-2">
          Setuju
         </button>
        </td>
       </tr>
      </tbody>
     </table>
    </div>
    <p class="text-red-500 text-sm mt-2">
     *Dianjurkan memprioritaskan Mahasiswa yang mengambil Mata Kuliah Wajib di Semesternya
    </p>
   </div>
   <div class="flex justify-center mt-6" >
    <a class="bg-green-500 text-white px-4 py-2 rounded" href="/penyusunanjadwalkuliah-kaprodi3">
     Simpan dan Kirim
    </a>
   </div>
  </div>
 </body>
</html>
