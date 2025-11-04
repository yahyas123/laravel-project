@extends('layouts.app')

@section('title', 'Tim Kita')

@section('content')
    <h1 class="text-4xl font-bold text-gray-900 mb-4 text-center">
        Kenalan Sama Tim Kita!
    </h1>
    
    <p class="text-lg text-gray-700 leading-relaxed mb-10 text-center">
        Ini dia orang-orang di balik layar proyek tugas ini.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <div class="text-center p-4">
            <div class="w-32 h-32 rounded-full bg-gray-300 mx-auto mb-4 flex items-center justify-center text-gray-500 shadow-md">
                [Ceritanya Foto]
            </div>
            <h3 class="text-2xl font-semibold text-gray-900">John Doe</h3>
            <p class="text-md text-blue-600 font-medium">Ketua Kelompok (Yang Ngatur)</p>
        </div>

        <div class="text-center p-4">
            <div class="w-32 h-32 rounded-full bg-gray-300 mx-auto mb-4 flex items-center justify-center text-gray-500 shadow-md">
                [Ceritanya Foto]
            </div>
            <h3 class="text-2xl font-semibold text-gray-900">Jane Doe</h3>
            <p class="text-md text-blue-600 font-medium">Bagian Koding (Yang Pusing)</p>
        </div>

        <div class="text-center p-4">
            <div class="w-32 h-32 rounded-full bg-gray-300 mx-auto mb-4 flex items-center justify-center text-gray-500 shadow-md">
                [Ceritanya Foto]
            </div>
            <h3 class="text-2xl font-semibold text-gray-900">Sugiono</h3>
            <p class="text-md text-blue-600 font-medium">Bagian Laporan (Yang Ngetik)</p>
        </div>

    </div>
@endsection