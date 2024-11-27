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
            <nav class="flex space-x-6 items-center">
                <a href="#" class="text-black hover:text-purple-300 transition">Home</a>
                <a href="#" class="text-black hover:text-purple-300 transition">About Us</a>
                <a href="#" class="text-black hover:text-purple-300 transition">Courses</a>
                <a href="#" class="text-black hover:text-purple-300 transition">Contact Us</a>
                <button class="bg-purple-500 text-white px-4 py-2 rounded-full hover:bg-purple-600 transition">
                    Sign In
                </button>
                <button
                    class="border border-purple-600 text-purple-600 px-4 py-2 rounded-full hover:bg-purple-600 hover:text-white transition">
                    Login
                </button>
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
