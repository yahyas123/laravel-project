@extends('layouts.app')

@if($slug)
    @section('title', 'Program: ' . Str::title($slug))
@else
    @section('title', 'Program')
@endif


@section('content')
    
    @if($slug)
        <h1 class="text-4xl font-bold text-gray-900 mb-4">
            Detail Program: {{ Str::title($slug) }}
        </h1>
        
        <p class="text-lg text-gray-700 leading-relaxed mb-8">
            Ini detail untuk program {{ $slug }}. 
            Ceritanya di sini ada penjelasan panjang lebar tentang programnya. 
            Tapi ini cuma dummy page, jadi ya gini aja.
        </p>
        
        <a href="{{ route('program.index') }}" 
           class="inline-block bg-gray-200 text-gray-800 font-semibold py-2 px-5 rounded-lg hover:bg-gray-300 transition duration-300 ease-in-out">
            &larr; Balik ke Daftar Program
        </a>
    
    @else
        <h1 class="text-4xl font-bold text-gray-900 mb-4">
            Program-Program (Dummy)
        </h1>
        
        <p class="text-lg text-gray-700 leading-relaxed mb-8">
            Ini daftar program yang (ceritanya) kami tawarkan:
        </p>
        
        <div class="space-y-4">
            
            <a href="{{ route('program.detail', ['slug' => 'pelatihan-kerja']) }}" 
               class="block p-6 bg-blue-50 border border-blue-200 rounded-lg hover:bg-blue-100 transition duration-300">
                <h3 class="text-2xl font-semibold text-blue-800">Pelatihan Kerja</h3>
                <p class="text-gray-700 mt-2">Ini program Pelatihan Kerja, isinya ya... pelatihan kerja.</p>
            </a>
            
            <a href="{{ route('program.detail', ['slug' => 'magang-industri']) }}" 
               class="block p-6 bg-blue-50 border border-blue-200 rounded-lg hover:bg-blue-100 transition duration-300">
                <h3 class="text-2xl font-semibold text-blue-800">Magang Industri</h3>
                <p class="text-gray-700 mt-2">Ini program Magang Industri, buat yang mau kerja praktik.</p>
            </a>
            
            <a href="{{ route('program.detail', ['slug' => 'sertifikasi-online']) }}" 
               class="block p-6 bg-blue-50 border border-blue-200 rounded-lg hover:bg-blue-100 transition duration-300">
                <h3 class="text-2xl font-semibold text-blue-800">Sertifikasi Online</h3>
                <p class="text-gray-700 mt-2">Ini program Sertifikasi Online, biar dapet sertifikat.</p>
            </a>
            
        </div>
    @endif

@endsection