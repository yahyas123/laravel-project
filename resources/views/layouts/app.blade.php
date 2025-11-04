<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Y4y4')</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">

    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            
            <div>
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600 hover:text-blue-800">
                    Y4y4
                </a>
            </div>
            
            <div class="flex space-x-6">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 font-medium">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 font-medium">About</a>
                <a href="{{ route('program.index') }}" class="text-gray-700 hover:text-blue-600 font-medium">Program</a>
                <a href="{{ route('ourteam') }}" class="text-gray-700 hover:text-blue-600 font-medium">Our Team</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-600 font-medium">Contact Us</a>
            </div>
        </nav>
    </header>

    <main class="container mx-auto p-6 mt-8">
        <div class="bg-white p-8 rounded-lg shadow-lg min-h-[60vh]">
            @yield('content')
        </div>
    </main>
    
    <footer class="bg-gray-800 text-gray-300 p-8 mt-12">
        <div class="container mx-auto text-center text-sm">
            <p>Dibuat pake ☕ (dan sedikit pusing) - &copy; 2025 yYyY</p>
        </div>
    </footer>

</body>
</html>