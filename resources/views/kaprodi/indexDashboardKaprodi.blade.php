@extends('layout')

@section('konten')
<main class="p-8">
  <h2 class="text-3xl font-bold text-center mb-8">
    Dashboard
  </h2>
 <div class="flex justify-center mb-8">
  <div class="border rounded-lg p-6 w-96 text-center">
   <i class="fas fa-user-circle text-6xl mb-4">
   </i>
   <h3 class="font-bold text-xl">
    Bruce Wayne
   </h3>
   <p>
    566646453345
   </p>
   <p>
    Fakultas Sains dan Matematika
   </p>
   <p>
    akubetmen@dekan.co.id
   </p>
  </div>
 </div>
 <div class="flex justify-center space-x-8">
  <a href="{{ route('kaprodi.penyusunanjadwalkuliah2') }}">
    <div class="bg-green-200  p-6 w-80 rounded-lg text-center shadow-lg">
      <p class=" text-xl text-center font-bold">
       Penyusunan Jadwal Kuliah
      </p>
     </div>
  </a>
  <a href="/verifikasiIRS-kaprodi">
    <div class="bg-[#9bc0a5] rounded-lg p-6 w-80 text-center shadow-lg">
      <p class="text-xl text-center font-bold">
       Verifikasi IRS
      </p>
     </div>
  </a>
 </div>
</main>
@endsection