<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Sistem Piket UKM Kristen</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    {{-- Navbar --}}
    <header style="background-color: #1e3a8a; color: white; padding: 15px;">
        <h2 style="margin: 0;">Sistem Piket UKM Kristen</h2>
        <nav>
            <a href="{{ route('dashboard') }}" style="color:white; margin-right:15px;">Dashboard</a>
            <a href="{{ route('jadwalPiket') }}" style="color:white; margin-right:15px;">Jadwal</a>
            <a href="{{ route('profile') }}" style="color:white; margin-right:15px;">Profil</a>
            <a href="{{ route('logout') }}" style="color:white;">Logout</a>
        </nav>
    </header>

    {{-- Konten utama --}}
    <main style="padding: 20px;">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer style="background-color: #1e3a8a; color: white; text-align:center; padding:10px; margin-top:30px;">
        <p>&copy; UKM Kristen Universitas Jember.</p>
    </footer>
</body>
</html>
