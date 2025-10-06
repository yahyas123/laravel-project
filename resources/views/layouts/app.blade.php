<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Y4y4')</title>
    <style>
        body { font-family: sans-serif; margin: 0; }
        nav { background-color: #f0f0f0; padding: 1rem; border-bottom: 1px solid #ddd; }
        nav a { margin-right: 15px; text-decoration: none; color: #333; font-weight: bold; }
        main { padding: 2rem; }
        footer { background-color: #333; color: white; text-align: center; padding: 1rem; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>

    <nav>
        <a href="/home">Home</a>
        <a href="/about">About</a>
        <a href="/program">Program</a>
        <a href="/ourteam">Our Team</a>
        <a href="/contact">Contact Us</a>
    </nav>

    <main>
        @yield('content')
    </main>
    
    <footer>
        <p>&copy; 2025 - yYyY</p>
    </footer>

</body>
</html>
