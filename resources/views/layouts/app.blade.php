<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Focka')</title>
    @vite('resources/css/app.css') {{-- Tailwind CSS --}}
</head>

<body class="bg-white text-gray-800">

    <!-- Navbar -->
    <header class="absolute w-full">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Logo di Kiri -->
            <div class="text-xl font-bold text-purple-600">Focka</div>

            <!-- Menu di Kanan -->
            <nav class="flex justify-center items-center space-x-6">
                <ul class="flex items-center space-x-6 list-none">
                    <li class="nav-item flex items-center">
                        <a href="{{ Route('home') }}" class="text-black hover:text-purple-300 transition">Home</a>
                    </li>
                    <li class="nav-item flex items-center">
                        <a href="{{ Route('about') }}" class="text-black hover:text-purple-300 transition">About Us</a>
                    </li>
                    <li class="nav-item flex items-center">
                        <a href="{{ Route('course') }}" class="text-black hover:text-purple-300 transition">Courses</a>
                    </li>
                    <li class="nav-item flex items-center">
                        <a href="{{ Route('contact') }}" class="text-black hover:text-purple-400 transition">Contact Us</a>
                    </li>
                    <!-- Tombol Sign In -->
                    <li class="nav-item flex items-center">
                        <a href="{{ Route('register') }}">
                            <button class="bg-purple-500 text-white px-4 py-2 rounded-full hover:bg-purple-600 transition">
                                Sign Up
                            </button>
                        </a>
                    </li>
                    <!-- Tombol Login -->
                    <li class="nav-item flex items-center">
                        <a href="{{ Route('login') }}">
                            <button class="border border-purple-500 text-purple-500 px-4 py-2 rounded-full hover:bg-purple-600 hover:text-white transition">
                                Login
                            </button>
                        </a>
                    </li>
                </ul>
            </nav>            
        </div>
    </header>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content') {{-- Section untuk konten halaman --}}
    </main>

    <!-- Footer -->
    <footer class="bg-purple-500 text-white py-8 mt-8">
        <div class="container mx-auto text-center">
            <p>Focka All Right Reserved, 2022</p>
        </div>
    </footer>

</body>

</html>
