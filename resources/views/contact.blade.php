@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    <h1 class="text-4xl font-bold text-gray-900 mb-4">
        Kontak Kita
    </h1>
    
    <p class="text-lg text-gray-700 leading-relaxed mb-8">
        Punya pertanyaan, atau mau ngasih nilai A? 
        Bisa isi form di bawah ini ya.
    </p>

    <form action="#" method="POST" class="space-y-6 max-w-lg mx-auto">
        <div>
            <label for="name" class="block text-lg font-medium text-gray-800">Nama Kamu</label>
            <input type="text" id="name" name="name" placeholder="Nama..."
                   class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="email" class="block text-lg font-medium text-gray-800">Email</label>
            <input type="email" id="email" name="email" placeholder="email@kamu.com"
                   class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label for="message" class="block text-lg font-medium text-gray-800">Pesan</label>
            <textarea id="message" name="message" rows="5" placeholder="Isi pesannya di sini..."
                      class="mt-2 block w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
        </div>

        <div>
            <button type="submit"
                    class="w-full bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-300 ease-in-out">
                Kirim
            </button>
        </div>
    </form>
@endsection