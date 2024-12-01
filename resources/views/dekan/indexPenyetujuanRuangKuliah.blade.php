@extends('layout')

@section('konten')
    <div class="p-4">
        <a class="text-gray-600" href="/dashboard-dekan">
            ← Back
        </a>
    </div>
    <div class="flex justify-center">
        <div class="bg-[#8281C5] p-8 rounded-lg w-3/4">
            <h2 class="text-center text-xl font-bold mb-6">
                Penyetujuan Ruangan Perkuliahan
            </h2>
            <div class="space-y-4">
                @foreach($ruangans as $ruangan)
                    <div class="bg-gray-200 p-4 rounded-lg flex justify-between items-center">
                        <div>
                            <p class="font-semibold">
                                {{ $ruangan->fungsi }} <!-- Nama Fungsi Ruangan -->
                            </p>
                            <p class="text-sm">
                                {{ $ruangan->kapasitas }} Kapasitas
                            </p>
                        </div>
                        <div class="flex items-center space-x-4">
                            <span class="bg-gray-400 text-white px-2 py-1 rounded">
                                {{ $ruangan->noruang }} <!-- Kode Ruangan -->
                            </span>
                            <form action="{{ route('ruangan.approve', $ruangan->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="fas fa-check text-xl text-gray-600"></button>
                            </form>

                            <form action="{{ route('ruangan.reject', $ruangan->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="fas fa-times text-xl text-gray-600"></button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
