<!DOCTYPE html>
<html>
<head>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>

</head>
<body class="bg-white">
  <header class="bg-[#9BC0C0] p-0.5 flex justify-between items-center">
    <div class="flex items-center">
      <img alt="SI-LET Logo" class="h-24 w-24 mr-2" src="assets/silet_logo.png" />
      <div>
        <h1 class="text-xl font-bold">SI-LET</h1>
        <p class="text-sm">Sistem Informasi &amp; Laporan Edukasi Terintegrasi</p>
      </div>
    </div>
    <div class="flex items-center space-x-4 mr-7">
      <img class="w-12 h-12" src="assets/user.png" alt="userlogo">
      <div class="relative">
        <img class="w-14 h-14 cursor-pointer" src="assets/menu-bar.png" alt="menubar" onclick="toggleDropdown()">
        <!-- Dropdown Menu -->
        <div id="dropdown" class="hidden absolute right-0 mt-2 w-32 bg-white border border-gray-200 rounded-md shadow-lg">
          <a href="/dashboard-akademik" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
          <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
        </div>
      </div>
    </div>
  </header>

  <div class="p-4">
    <a class="text-gray-600 text-sm" href="/dashboard-akademik">← Back</a>
  </div>
  <div class="flex justify-center">
    <div class="bg-[#8281C5] p-8 rounded-lg shadow-lg w-7/12">
      <h2 class="text-center text-2xl font-bold text-black mb-8">Penentuan Ruangan Perkuliahan</h2>
      
      <div class="relative mt-8 mx-60 p-4 bg-gray-300 rounded-lg shadow-inner mb-10">
        <h3 class="text-lg font-bold text-center mb-2">Blok Gedung</h3>
        <!-- Dropdown for selecting Blok Gedung -->
        <select id="blokGedungFilter" onchange="filterBlokGedung()" class="p-2 border rounded-md ml-14">
          <option value="">-- Pilih Blok Gedung --</option>
          <option value="A">Blok A</option>
          <option value="B">Blok B</option>
          <option value="C">Blok C</option>
          <option value="D">Blok D</option>
          <option value="E">Blok E</option>
        </select>
      </div>

      <div class="flex justify-center space-x-8">
        <div class="container mx-auto p-4 bg-gray-100 rounded-lg shadow-md">
          <h1 class="text-2xl font-bold text-center mb-6">Manajemen Ruang</h1>

          <div class="grid grid-cols-8 gap-4 bg-gray-200 p-4 rounded-t-lg font-bold text-center">
            <div>No Ruang</div>
            <div>Blok Gedung</div>
            <div>Lantai</div>
            <div>Fungsi</div>
            <div>Kapasitas</div>
            <div>Prodi</div>
            <div>Status</div>
            <div>Aksi</div>
          </div>

          <!-- Table Content -->
          <div class="bg-white">
            @foreach ($data as $item)
              <div class="grid grid-cols-8 gap-4 p-4 border-b ruangan-row" data-blok="{{ $item->blokgedung }}">
                <div class="text-center">{{ $item->noruang }}</div>
                <div class="text-center">{{ $item->blokgedung }}</div>
                <div class="text-center">{{ $item->lantai }}</div>
                <div class="text-center">{{ $item->fungsi }}</div>
                <div class="text-center">{{ $item->kapasitas }}</div>
                <div class="text-center" id="prodi-{{ $item->noruang }}">{{ $item->prodi }}</div>
                <div class="text-center">{{ $item->status }}</div>
                <div class="text-center">
                  <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-200"
                    onclick="openJurusanForm('{{ $item->noruang }}')">Pilih Jurusan</button>
                </div>
              </div>
            @endforeach
          </div>
        </div>

        <script>
          // Function to handle the dropdown filter
          function filterBlokGedung() {
            var selectedBlok = $("#blokGedungFilter").val();

            $(".ruangan-row").each(function() {
              var blokGedung = $(this).data("blok");

              // Show or hide the row based on selected Blok Gedung
              if (!selectedBlok || blokGedung === selectedBlok) {
                $(this).show();
              } else {
                $(this).hide();
              }
            });
          }

          // Handle Jurusan selection
          function openJurusanForm(noruang) {
            var jurusanFormHtml = `
              <div id="jurusanForm" class="absolute top-0 left-0 w-full h-full bg-gray-600 bg-opacity-50 flex justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-md">
                  <h3 class="text-xl font-bold mb-4">Pilih Jurusan</h3>
                  <select id="jurusanSelect" class="p-2 border rounded-md mb-4">
                    <option value="">-- Pilih Jurusan --</option>
                    <option value="Informatika">Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Elektronika">Elektronika</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                  </select>
                  <button onclick="updateProdi('${noruang}')" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Update</button>
                  <button onclick="closeJurusanForm()" class="ml-2 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Cancel</button>
                </div>
              </div>
            `;
            $("body").append(jurusanFormHtml);
          }

          // Close Jurusan selection form
          function closeJurusanForm() {
            $("#jurusanForm").remove();
          }

          // Function to update Prodi
          function updateProdi(noruang) {
            var selectedJurusan = $("#jurusanSelect").val();

            if (!selectedJurusan) {
              alert("Please select a Jurusan");
              return;
            }

            // Perform the AJAX request to update the Prodi
            $.ajax({
              url: '/update-prodi/' + noruang,
              type: 'POST',
              data: {
                _token : '{{ csrf_token() }}',
                prodi: selectedJurusan
              },
              success: function(response) {
                console.log(response);
                if (response.message === "Prodi updated successfully!") {
                  // Update the Prodi in the table
                  $("#prodi-" + noruang).text(selectedJurusan);
                  closeJurusanForm();
                } else {
                  alert("Error updating Prodi");
                }
              },
              error: function() {
                alert("Error updating Prodi");
              }
            });
          }
        </script>
      </div>
    </div>
  </div>
</body>
</html>
