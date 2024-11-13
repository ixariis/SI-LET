<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
  <title>Penentuan Ruangan Perkuliahan</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
            <a href="/dashboard-akademik" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
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
  
  <main class="p-4">
    <a class="text-gray-600 text-sm mb-4 inline-block" href="/dashboard-akademik">← Back</a>       
    <div class="bg-[#8281C5] p-5 rounded-lg w-3/4 mx-auto">
      <h3 class="text-center text-xl font-bold text-black mb-6">Penentuan Ruangan Perkuliahan</h3>
      <div class="space-y-4">

        <!-- First row -->
        <div class="flex justify-between items-center bg-gray-200 p-4 rounded-lg">
          <div class="relative w-52 ml-10">
            <button onclick="toggleJurusanDropdown(this)" class="bg-gray-400 p-4 rounded-lg text-center w-full font-semibold">
              Pilih Jurusan
            </button>
            <div class="jurusan-dropdown hidden absolute z-10 mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Informatika</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kimia</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Matematika</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Biologi</a>
            </div>
          </div>
          <div class="relative w-1/3">
            <button onclick="toggleRoomDropdown(this)" class="bg-gray-400 p-4 rounded-lg text-center w-full font-semibold">
              Pilih ruang kelas
            </button>
            <div class="room-dropdown hidden absolute z-10 mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 101</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 102</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 103</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 104</a>
            </div>
          </div>
          <div class="bg-gray-400 p-4 rounded-lg text-center w-52 -ml-52">
            <p class="font-thin">Ruang Kelas Terpilih ---</p>
          </div>
        </div>

        <!-- Repeat this block for each row -->
        <!-- Second row example -->
        <div class="flex justify-between items-center bg-gray-200 p-4 rounded-lg">
          <div class="relative w-52 ml-10">
            <button onclick="toggleJurusanDropdown(this)" class="bg-gray-400 p-4 rounded-lg text-center w-full font-semibold">
              Pilih Jurusan
            </button>
            <div class="jurusan-dropdown hidden absolute z-10 mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Informatika</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kimia</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Matematika</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Biologi</a>
            </div>
          </div>
          <div class="relative w-1/3">
            <button onclick="toggleRoomDropdown(this)" class="bg-gray-400 p-4 rounded-lg text-center w-full font-semibold">
              Pilih ruang kelas
            </button>
            <div class="room-dropdown hidden absolute z-10 mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 201</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 202</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 203</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 204</a>
            </div>
          </div>
          <div class="bg-gray-400 p-4 rounded-lg text-center w-52 -ml-52">
            <p class="font-thin">Ruang Kelas Terpilih ---</p>
          </div>
        </div>

        <div class="flex justify-between items-center bg-gray-200 p-4 rounded-lg">
            <div class="relative w-52 ml-10">
              <button onclick="toggleJurusanDropdown(this)" class="bg-gray-400 p-4 rounded-lg text-center w-full font-semibold">
                Pilih Jurusan
              </button>
              <div class="jurusan-dropdown hidden absolute z-10 mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Informatika</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kimia</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Matematika</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Biologi</a>
              </div>
            </div>
            <div class="relative w-1/3">
              <button onclick="toggleRoomDropdown(this)" class="bg-gray-400 p-4 rounded-lg text-center w-full font-semibold">
                Pilih ruang kelas
              </button>
              <div class="room-dropdown hidden absolute z-10 mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 201</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 202</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 203</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 204</a>
              </div>
            </div>
            <div class="bg-gray-400 p-4 rounded-lg text-center w-52 -ml-52">
              <p class="font-thin">Ruang Kelas Terpilih ---</p>
            </div>
        </div>
        
        <div class="flex justify-between items-center bg-gray-200 p-4 rounded-lg">
            <div class="relative w-52 ml-10">
              <button onclick="toggleJurusanDropdown(this)" class="bg-gray-400 p-4 rounded-lg text-center w-full font-semibold">
                Pilih Jurusan
              </button>
              <div class="jurusan-dropdown hidden absolute z-10 mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Informatika</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kimia</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Matematika</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Biologi</a>
              </div>
            </div>
            <div class="relative w-1/3">
              <button onclick="toggleRoomDropdown(this)" class="bg-gray-400 p-4 rounded-lg text-center w-full font-semibold">
                Pilih ruang kelas
              </button>
              <div class="room-dropdown hidden absolute z-10 mt-2 w-full bg-white border border-gray-200 rounded-md shadow-lg">
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 101</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 102</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 103</a>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Ruang 104</a>
              </div>
            </div>
            <div class="bg-gray-400 p-4 rounded-lg text-center w-52 -ml-52">
              <p class="font-thin">Ruang Kelas Terpilih ---</p>
            </div>
          </div>    
        

        
      </div>
    </div>
  </main>

  <script>
    function toggleDropdown() {
      const dropdown = document.getElementById("dropdown");
      dropdown.classList.toggle("hidden");
    }

    function toggleJurusanDropdown(button) {
      // Close all other dropdowns
      document.querySelectorAll('.jurusan-dropdown').forEach(dropdown => {
        if (dropdown !== button.nextElementSibling) {
          dropdown.classList.add('hidden');
        }
      });
      
      // Toggle the dropdown next to the button
      button.nextElementSibling.classList.toggle('hidden');
    }

    function toggleRoomDropdown(button) {
      // Close all other dropdowns
      document.querySelectorAll('.room-dropdown').forEach(dropdown => {
        if (dropdown !== button.nextElementSibling) {
          dropdown.classList.add('hidden');
        }
      });
      
      // Toggle the dropdown next to the button
      button.nextElementSibling.classList.toggle('hidden');
    }

    // Close dropdown if clicking outside
    window.onclick = function(event) {
      const dropdowns = document.querySelectorAll('.jurusan-dropdown, .room-dropdown');
      dropdowns.forEach(dropdown => {
        if (!event.target.closest('.relative')) {
          dropdown.classList.add("hidden");
        }
      });
    }
  </script>
</body>
</html>