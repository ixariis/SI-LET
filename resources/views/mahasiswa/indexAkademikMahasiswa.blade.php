<html>
 <head>
  <title>
   SI-LET Akademik
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
 </head>
 <body class="font-roboto">
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
               <a href="/dashboard-mahasiswa" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
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
   <a class="text-sm" href="/dashboard-mahasiswa">
    ← Back
   </a>
   <h2 class="text-center text-2xl font-bold mt-4">
    AKADEMIK
   </h2>
   <div class="mt-8">
    <div class="bg-[9BC0C0] p-4 rounded-md">
     <h3 class="text-lg font-bold">
      PERKULIAHAN
     </h3>
    </div>
    <div class="grid grid-cols-4 gap-4 mt-4">
    
        <a class="bg-gray-200 p-4 border rounded-md flex items-center justify-center" href="{{ route('mahasiswa.lihatIRS') }}">
            IRS
        </a>
        <a class="bg-gray-200 p-4 border rounded-md flex items-center justify-center" href="{{ route('mahasiswa.buatIRS') }}">
            Buat IRS
        </a>
        <a class="bg-gray-200 p-4 border rounded-md flex items-center justify-center" href="{{ route('mahasiswa.lihatKHS') }}">
            KHS
        </a>
        <a class="bg-gray-200 p-4 border rounded-md flex items-center justify-center">
            Transkrip
        </a>
    
    </div>
    
   </div>
  </div>
 </body>
</html>
