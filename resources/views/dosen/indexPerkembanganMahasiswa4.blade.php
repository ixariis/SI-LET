<html>
 <head>
  <title>
   Status Perkembangan Mahasiswa
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
   <a class="text-sm text-gray-600" href="/perkembanganmahasiswa-dosen3">
    ← Back
   </a>
   <h2 class="text-2xl font-bold mt-4">
    STATUS PERKEMBANGAN MAHASISWA
   </h2>
   <div class="flex justify-between items-center mt-4">
    <div>
     <label class="block text-sm font-medium text-gray-700 mr-5" for="angkatan">
      Angkatan
     </label>
     <select class="mt-1 block w-full pl-3 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md" id="angkatan" name="angkatan">
      <option>
       2024
      </option>
     </select>
    </div>
    <div class="w-full flex justify-center mt-4">
        <div class="text-center">
          <p class="text-lg font-semibold">
            Budi Hartanto
          </p>
          <p class="text-sm text-gray-600">
            24060123456789
          </p>
        </div>
    </div>      
   </div>
   <div class="mt-4">
    <div class="bg-[9BC0C0] p-2 flex justify-between items-center">
     <span>
      Semester - 1 | Tahun ajaran 2023/2024 Ganjil
     </span>
     <i class="fas fa-plus">
     </i>
    </div>
    <div class="bg-[9BC0C0]s p-2 flex justify-between items-center mt-2">
     <span>
      Semester - 2 | Tahun ajaran 2023/2024 Genap
     </span>
     <i class="fas fa-minus">
     </i>
    </div>
    <table class="min-w-full mt-2 bg-white border border-gray-300">
     <thead>
      <tr class="bg-gray-200">
       <th class="border border-gray-300 px-4 py-2">
        No.
       </th>
       <th class="border border-gray-300 px-4 py-2">
        Mata Kuliah
       </th>
       <th class="border border-gray-300 px-4 py-2">
        SKS
       </th>
       <th class="border border-gray-300 px-4 py-2">
        Nilai Huruf
       </th>
       <th class="border border-gray-300 px-4 py-2">
        Nilai Angka
       </th>
       <th class="border border-gray-300 px-4 py-2">
        Bobot
       </th>
       <th class="border border-gray-300 px-4 py-2">
        SKS Bobot
       </th>
      </tr>
     </thead>
     <tbody>
      <tr>
       <td class="border border-gray-300 px-4 py-2">
        1
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 px-4 py-2">
        2
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 px-4 py-2">
        3
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 px-4 py-2">
        4
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 px-4 py-2">
        5
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 px-4 py-2">
        6
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 px-4 py-2">
        7
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 px-4 py-2">
        8
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 px-4 py-2" colspan="6">
        Total
       </td>
       <td class="border border-gray-300 px-4 py-2">
       </td>
      </tr>
     </tbody>
    </table>
   </div>
  </div>
 </body>
</html>
