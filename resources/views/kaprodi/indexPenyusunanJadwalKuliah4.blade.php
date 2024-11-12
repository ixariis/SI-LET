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
  <main class="p-4">
   <a class="text-gray-600 text-lg mb-4 inline-block" href="/penyusunanjadwalkuliah-kaprodi3">
    ← Back
   </a>
   <h2 class="text-2xl font-bold mb-4">
    PENYUSUNAN JADWAL KULIAH
   </h2>
   <div class="overflow-x-auto">
    <table class="min-w-full border-collapse border border-gray-300">
     <thead>
      <tr>
       <th class="border border-gray-300 p-2">
       </th>
       <th class="border border-gray-300 p-2">
        Sunday 07/10
        <br/>
        0 task(s)
       </th>
       <th class="border border-gray-300 p-2">
        Monday 07/11
        <br/>
        0 task(s)
       </th>
       <th class="border border-gray-300 p-2">
        Tuesday 07/12
        <br/>
        0 task(s)
       </th>
       <th class="border border-gray-300 p-2">
        Wednesday 07/13
        <br/>
        0 task(s)
       </th>
       <th class="border border-gray-300 p-2">
        Thursday 07/14
        <br/>
        0 task(s)
       </th>
       <th class="border border-gray-300 p-2">
        Friday 07/15
        <br/>
        0 task(s)
       </th>
       <th class="border border-gray-300 p-2">
        Saturday 07/16
        <br/>
        0 task(s)
       </th>
      </tr>
     </thead>
     <tbody>
      <tr>
       <td class="border border-gray-300 p-2">
        6:00 AM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        7:00 AM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        8:00 AM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-blue-400 text-white p-2">
        08:00 AM - 02:00 PM
        <br/>
        Andy Porter
        <br/>
        Pack &amp; Move
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-red-500 text-white p-2">
        08:00 AM - 12:00 PM
        <br/>
        James May
        <br/>
        Move
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        9:00 AM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-pink-400 text-white p-2">
        07:00 AM - 12:00 PM
        <br/>
        Shawn Trite
        <br/>
        Pack &amp; Move
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-blue-500 text-white p-2">
        08:00 AM - 11:00 AM
        <br/>
        Phil Matthew
        <br/>
        Move
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        10:00 AM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-blue-200 text-white p-2">
        08:50 AM - 02:00 PM
        <br/>
        Paul James
        <br/>
        Moving
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-green-500 text-white p-2">
        08:00 AM - 04:00 PM
        <br/>
        Jessica Franco
        <br/>
        Move
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        11:00 AM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        12:00 PM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        1:00 PM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        2:00 PM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        3:00 PM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        4:00 PM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-purple-400 text-white p-2">
        09:00 AM - 06:00 PM
        <br/>
        James Toland
        <br/>
        Pack &amp; Move
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-blue-400 text-white p-2">
        09:00 AM - 04:00 PM
        <br/>
        Niles Miller
        <br/>
        Storage
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        5:00 PM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        6:00 PM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-red-400 text-white p-2">
        10:00 AM - 03:00 PM
        <br/>
        Peter Smith
        <br/>
        Move
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        7:00 PM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
      <tr>
       <td class="border border-gray-300 p-2">
        8:00 PM
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2 bg-red-400 text-white p-2">
        10:00 AM - 03:00 PM
        <br/>
        Norman Bates
        <br/>
        Storage
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
       <td class="border border-gray-300 p-2">
       </td>
      </tr>
     </tbody>
    </table>
   </div>
  </main>
 </body>
</html>
