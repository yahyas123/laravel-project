@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-4xl font-bold text-gray-900 mb-4">
        Selamat Datang di Proyek Ini!
    </h1>
    
    <p class="text-lg text-gray-700 leading-relaxed mb-6">
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, eum libero. Saepe excepturi aut atque? Saepe dolor officia, minus laboriosam corporis nobis quod delectus excepturi, voluptates dolorem, rem nisi accusamus.
    </p>

    <div>
        <a href="{{ route('program.index') }}" 
           class="bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">
            Cek Halaman Program
        </a>
    </div>
@endsection