@extends('layouts.app')

@section('title', 'Home - Gradify')

@section('content')
    <!-- Hero Section -->
    <section class="py-16 min-h-screen flex items-center" 
    style="background-image: linear-gradient(to right,rgba(103, 102, 219, 0.9),rgba(255, 219, 238, 0.5)), url('{{ asset('images/Group 327.png') }}'); 
    background-size: cover; 
    background-position: center;">
    <div class="container mx-auto flex flex-col md:flex-row items-center">
        <!-- Text Content -->
        <div class="text-center md:text-left md:w-1/2">
            <h1 class="text-5xl md:text-6xl font-bold text-gray-800 leading-tight">
                The <span class="text-white">Smart Choice</span> For Future
            </h1>
            <p class="mt-6 text-gray-600 text-lg">
                Elearn is a global training provider based across the UK that specialises in accredited and bespoke training courses. We crush the...
            </p>
            <div class="w-[400px] h-[50px] relative bg-white rounded-full shadow-md mt-4">
                <!-- Placeholder Text -->
                <div class="absolute left-12 top-1/2 transform -translate-y-1/2 text-[#0f335e] text-sm font-medium font-['Roboto']">
                    Search anything
                </div>
                
                <!-- Continue Button -->
                <div class="w-[100px] h-[40px] absolute right-2 top-1/2 transform -translate-y-1/2">
                    <div class="w-full h-full bg-[#4D2C5E] rounded-full flex items-center justify-center">
                        <button class="text-white text-sm font-medium font-['Roboto']">Continue</button>
                    </div>
                </div>
            </div>                 
        </div>

        <!-- Image -->
        <div class="mt-12 md:mt-0 md:w-1/2 flex justify-center">
            <img src={{ asset('images/book.png') }} alt="Learning Illustration" class="w-[400px] h-auto">
        </div>        
    </div>
</section>

    <!-- To-Do List Section -->
    <section class="py-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 flex justify-center md:justify-start">
                <img src="{{ asset('images/globe.png') }}" alt="Globe" class="w-[400px] h-auto">
            </div>
            <div class="md:w-1/2 text-center md:text-right mt-8 md:mt-0">
                <!--CountDown-->
                <h2 class="text-2xl md:text-2xl font-bold text-gray-800 leading-tight text-center">
                    Countdown SNBT 2025
                </h2>
                <div class="mt-4 bg-purple-200 rounded-lg flex items-center p-4">
                    <div class="w-1/4 h-16 flex items-center justify-center rounded-md">
                        <img src="{{ asset('images/calender.png') }}" alt="Calendar" class="w-[100px] h-auto">
                    </div>
                    <div class="flex-1 flex items-center">
                        <div class="flex flex-col justify-center">
                            <p class="text-lg font-semibold text-gray-800 mr-5">UTBK</p>
                            <p class="text-sm text-gray-600">2025.04.05</p>
                        </div>
                    </div>                               
                    <div class="text-right">
                        <p class="text-lg font-bold text-gray-800">D-240</p>
                    </div>
                </div> 
                <div class="mt-4 bg-pink-200 rounded-lg flex items-center p-4">
                    <div class="flex-1 flex items-center justify-center">
                        <p class="text-lg font-normal text-gray-500 font-sans text-center">
                            "Success is the sum of small efforts, repeated day in and day out." — Robert Collier
                        </p>
                    </div>
                </div>              
                <div class="my-8"></div>
                <div class="mt-4 bg-purple-100 rounded-lg p-4">
                    <div class="rounded-lg p-4">
                        <div class="flex items-center mb-4">
                            <input type="checkbox" id="task1" name="task" class="mr-2">
                            <label for="task1" class="text-lg font-semibold text-gray-800">Mengerjakan Penalaran Umum</label>
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Today at 10.00 AM</p>
                        
                        <div class="flex items-center mb-4">
                            <input type="checkbox" id="task2" name="task" class="mr-2">
                            <label for="task2" class="text-lg font-semibold text-gray-800">Mengerjakan Penalaran Matematika</label>
                        </div>
                        <p class="text-sm text-gray-600 mb-4">Today at 11.00 AM</p>
                        
                        <div class="flex items-center">
                            <input type="checkbox" id="task3" name="task" class="mr-2">
                            <label for="task3" class="text-lg font-semibold text-gray-800">Mengerjakan Literasi Bahasa Indonesia</label>
                        </div>
                        <p class="text-sm text-gray-600">Today at 13.00 AM</p>
                    </div>
                </div>                             
            </div>
        </div>
    </section>    

    <!-- Categories Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6"> 
                <div class="bg-white shadow-md rounded-lg overflow-hidden w-[250px] h-[260px]">
                    <div class="bg-gradient-to-t from-purple-400 to-pink-400 h-[160px] w-full flex justify-center items-center"> <!-- Linear gradient -->
                        <img src={{ asset('images/PU.png') }} alt="Course Image" class="rounded-lg w-[160px] h-[160px] object-cover">
                    </div>
                    <div class="p-4 text-center font-['Roboto']">
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">PU</h3>
                        <p class="text-sm text-gray-600">Penalaran Umum</p>
                    </div>
                </div>              
            <div class="bg-white shadow-md rounded-lg overflow-hidden w-[250px] h-[260px]">
                <div class="bg-gradient-to-t from-blue-300 to-green-300 h-[160px] w-full flex justify-center items-center"> 
                    <img src={{ asset('images/PM.png') }} alt="Course Image" class="rounded-t-lg w-[160px] h-[160px] object-cover">
                </div>
                <div class="p-4 text-center font-['Roboto']">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">PM</h3>
                    <p class="text-sm text-gray-600 mb-2">Penalaran Matematika</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden w-[250px] h-[260px]">
                <div class="bg-gradient-to-t from-yellow-100 to-orange-300 h-[160px] w-full flex justify-center items-center"> 
                    <img src={{ asset('images/PK.png') }} alt="Course Image" class="rounded-t-lg w-[160px] h-[160px] object-cover">
                </div>
                <div class="p-4 text-center font-['Roboto']">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">PK</h3>
                    <p class="text-sm text-gray-600 mb-2">Pengetahuan Kuantitatif</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden w-[250px] h-[260px]">
                <div class="bg-gradient-to-t from-blue-100 to-blue-800 h-[160px] w-full flex justify-center items-center"> 
                    <img src={{ asset('images/PPU.png') }} alt="Course Image" class="rounded-t-lg w-[160px] h-[120px] object-cover">
                </div>
                <div class="p-4 text-center font-['Roboto']">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">PPU</h3>
                    <p class="text-sm text-gray-600 mb-2">Pengetahuan dan Pemahaman Umum</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden w-[250px] h-[260px]">
                <div class="bg-gradient-to-t from-blue-400 to-green-700 h-[160px] w-full flex justify-center items-center"> 
                    <img src={{ asset('images/PBM.png') }} alt="Course Image" class="rounded-t-lg w-[140px] h-[140px] object-cover">
                </div>
                <div class="p-4 text-center font-['Roboto']">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">PBM</h3>
                    <p class="text-sm text-gray-600 mb-2">Pemahaman Bacaan dan Menulis</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden w-[250px] h-[260px]">
                <div class="bg-gradient-to-t from-pink-500 to-yellow-200 h-[160px] w-full flex justify-center items-center"> 
                    <img src={{ asset('images/LBIN.png') }} alt="Course Image" class="rounded-t-lg w-[160px] h-[160px] object-cover">
                </div>
                <div class="p-4 text-center font-['Roboto']">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">LBIND</h3>
                    <p class="text-sm text-gray-600 mb-2">Literasi Bahasa Indonesia</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden w-[250px] h-[260px]">
                <div class="bg-gradient-to-t from-blue-700 to-yellow-200 h-[160px] w-full flex justify-center items-center"> 
                    <img src={{ asset('images/LBING.png') }} alt="Course Image" class="rounded-t-lg w-[140px] h-[140px] object-cover">
                </div>
                <div class="p-4 text-center font-['Roboto']">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">LBING</h3>
                    <p class="text-sm text-gray-600 mb-2">Literasi Bahasa Inggris</p>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden w-[250px] h-[260px]">
                <div class="bg-gradient-to-t from-blue-950 to-purple-400 h-[160px] w-full flex justify-center items-center"> 
                    <img src={{ asset('images/UMUM.png') }} alt="Course Image" class="rounded-t-lg w-[140px] h-[140px] object-cover">
                </div>
                <div class="p-4 text-center font-['Roboto']">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">UMUM</h3>
                    <p class="text-sm text-gray-600 mb-2">Materi Umum</p>
                </div>
            </div>
        </div>
    </section>
    
    <div class="fixed bottom-6 right-6">
        <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-4 rounded-full shadow-lg flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
            Komunitas
        </button>
    </div>    

    <!-- Section: Next Lessons -->
<section class="py-16 bg-white">
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">Welcome back, ready for your next lesson?</h2>
            <a href="#" class="text-purple-500 hover:text-purple-600 transition font-semibold">View History</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src={{ asset('images/lesson.png') }} alt="Lesson 1" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-gray-700">AWS Certified Solutions Architect</h3>
                    <div class="mt-4">
                        <div class="bg-gray-200 rounded-full h-2 w-full">
                            <div class="bg-purple-300 h-2 rounded-full" style="width: 60%;"></div>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Lesson 5 of 7</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src={{ asset('images/lesson.png') }} alt="Lesson 2" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-gray-700">AWS Certified Solutions Architect</h3>
                    <div class="mt-4">
                        <div class="bg-gray-200 rounded-full h-2 w-full">
                            <div class="bg-purple-300 h-2 rounded-full" style="width: 60%;"></div>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Lesson 5 of 7</p>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src={{ asset('images/lesson.png') }} alt="Lesson 3" class="w-full h-40 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-gray-700">AWS Certified Solutions Architect</h3>
                    <div class="mt-4">
                        <div class="bg-gray-200 rounded-full h-2 w-full">
                            <div class="bg-purple-300 h-2 rounded-full" style="width: 60%;"></div>
                        </div>
                        <p class="text-sm text-gray-600 mt-2">Lesson 5 of 7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!-- Info Universitas Section -->
 <section class="py-16">
    <div class="container mx-auto">
        <div class="flex flex-col justify-center items-center mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-1">Info Universitas</h2>
            <p class="text-sm text-gray-600 mt-4">Cari Tahu Universitas impianmu!!</p>
        </div>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-x-6 gap-y-6">
            <div class="w-[150px] h-[140px] relative bg-white rounded-[10px] shadow">
                <!-- Gradient Background -->
                <div class="absolute inset-x-0 bottom-0 h-[80px] bg-gradient-to-b from-white to-[#a92f4b] rounded-b-[10px] z-0"></div>
                <!-- Gambar -->
                <img class="w-[80px] h-[90px] mx-auto mt-2 relative z-10" src="{{ asset('images/undip.png') }}" alt="Logo Undip" />
                <!-- Teks -->
                <div class="absolute inset-x-0 bottom-0 text-center text-white text-xs font-semibold font-['Roboto'] leading-[14px] pb-2 z-10">
                    Universitas Diponegoro
                </div>
            </div>
            <div class="w-[150px] h-[140px] relative bg-white rounded-[10px] shadow">
                <div class="absolute inset-x-0 bottom-0 h-[80px] bg-gradient-to-b from-white to-blue-400 rounded-b-[10px] z-0"></div>
                <img class="w-[90px] h-[90px] mx-auto mt-2 relative z-10" src="{{ asset('images/UB.png') }}" alt="Logo UB" />
                <div class="absolute inset-x-0 bottom-0 text-center text-white text-xs font-semibold font-['Roboto'] leading-[14px] pb-2 z-10">
                    Universitas Brawijaya
                </div>
            </div>
            <div class="w-[150px] h-[140px] relative bg-white rounded-[10px] shadow">
                <div class="absolute inset-x-0 bottom-0 h-[80px] bg-gradient-to-b from-white to-yellow-400 rounded-b-[10px] z-0"></div>
                <img class="w-[90px] h-[90px] mx-auto mt-2 relative z-10" src="{{ asset('images/UI.png') }}" alt="Logo UI" />
                <div class="absolute inset-x-0 bottom-0 text-center text-white text-xs font-semibold font-['Roboto'] leading-[14px] pb-2 z-10">
                    Universitas Indonesia
                </div>
            </div>
            <div class="w-[150px] h-[140px] relative bg-white rounded-[10px] shadow">
                <div class="absolute inset-x-0 bottom-0 h-[80px] bg-gradient-to-b from-white to-orange-400 rounded-b-[10px] z-0"></div>
                <img class="w-[90px] h-[90px] mx-auto mt-2 relative z-10" src="{{ asset('images/UGM.png') }}" alt="Logo UGM" />
                <div class="absolute inset-x-0 bottom-0 text-center text-white text-xs font-semibold font-['Roboto'] leading-[14px] pb-2 z-10">
                    Universitas Gajah Mada
                </div>
            </div>
            <div class="w-[150px] h-[140px] relative bg-white rounded-[10px] shadow">
                <div class="absolute inset-x-0 bottom-0 h-[80px] bg-gradient-to-b from-white to-green-500 rounded-b-[10px] z-0"></div>
                <img class="w-[90px] h-[90px] mx-auto mt-2 relative z-10" src="{{ asset('images/UNHAS.png') }}" alt="Logo UNHAS" />
                <div class="absolute inset-x-0 bottom-0 text-center text-white text-xs font-semibold font-['Roboto'] leading-[14px] pb-2 z-10">
                    Universitas Hasanudin
                </div>
            </div>
            <div class="w-[150px] h-[140px] relative bg-white rounded-[10px] shadow">
                <div class="absolute inset-x-0 bottom-0 h-[80px] bg-gradient-to-b from-white to-purple-300 rounded-b-[10px] z-0"></div>
                <img class="w-[90px] h-[90px] mx-auto mt-2 relative z-10" src="{{ asset('images/UNAIR.png') }}" alt="Logo UNAIR" />
                <div class="absolute inset-x-0 bottom-0 text-center text-white text-xs font-semibold font-['Roboto'] leading-[14px] pb-2 z-10">
                    Universitas Airlangga
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20">
    <div class="container mx-auto relative">
        <div class="bg-gradient-to-r from-[#66c7f4] to-[#39a5d6] py-8 px-8 flex items-center justify-between rounded-md shadow-lg relative max-w-5xl mx-auto z-10">
            <div class="flex items-center space-x-4 text-white max-w-lg">
                <img class="w-20 h-20 rounded-full" src="https://roboguru-forum-cdn.ruangguru.com/image/9a73701a-ce24-42e5-9bf4-a329fcd0c7dc.png" alt="Icon Konsultan" />
                <div>
                    <p class="text-sm font-medium">Masih punya pertanyaan?</p>
                    <h2 class="text-lg font-bold">Tanyakan via chat ke Konsultan Pendidikan</h2>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 right-0 w-full overflow-hidden z-[-1]">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" class="w-full">
                    <path fill="rgba(255, 255, 255, 0.5)" d="M0,256L48,245.3C96,235,192,213,288,192C384,171,480,149,576,144C672,139,768,149,864,160C960,171,1056,181,1152,192C1248,203,1344,213,1392,218.7L1440,224L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
                </svg>
            </div>
            <a href="https://wa.me/085742668675" class="flex items-center bg-white text-[#39a5d6] font-semibold py-2 px-4 rounded-full shadow hover:bg-gray-100 transition" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 8c0-2.21-1.79-4-4-4H9c-2.21 0-4 1.79-4 4v8c0 1.33 1.34 2 2 2h1v3l3-3h4c1.66 0 3-1.34 3-3V8z" />
                </svg>
                Chat Konsultan
            </a>
        </div>
    </div>
</section>

  <!-- Testimonials Section -->
<section class="bg-gray-50 py-16">
    <div class="container mx-auto text-center">
        <h2 class="text-2xl font-bold text-gray-800">What Student's Say</h2>
        <div class="relative mt-8">
            <!-- Scrollable container for testimonials -->
            <div class="overflow-x-auto flex gap-8 pb-4">
                <!-- Testimonial Box -->
                <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                    <p class="text-gray-600">"Teachings of the great explore of truth, the master-builder of human happiness."</p>
                    <div class="absolute bottom-4 left-4 flex items-center gap-4">
                        <img src="https://i.pinimg.com/736x/9c/d6/92/9cd692e6c8c5d962da3bc9968871bf4d.jpg" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="text-gray-800 font-semibold">Theo</h4>
                            <p class="text-sm text-gray-500">Universitas Indonesia - Teknik Informatika</p>
                        </div>
                    </div>
                </div>
                <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                    <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                    <div class="absolute bottom-4 left-4 flex items-center gap-4">
                        <img src="https://i.pinimg.com/736x/66/9a/d5/669ad54362468eddf89b272da2e10330.jpg" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="text-gray-800 font-semibold">Mark Darius</h4>
                            <p class="text-sm text-gray-500">Universitas Indonesia - Teknik Mesin</p>
                        </div>
                    </div>
                </div>
                <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                    <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                    <div class="absolute bottom-4 left-4 flex items-center gap-4">
                        <img src="https://i.pinimg.com/736x/5a/7f/80/5a7f80b6370e19396acbbe165bc74673.jpg" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="text-gray-800 font-semibold">Johan Andreas</h4>
                            <p class="text-sm text-gray-500">Universitas Indonesia - Hukum</p>
                        </div>
                    </div>
                </div>
                <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                    <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                    <div class="absolute bottom-4 left-4 flex items-center gap-4">
                        <img src="https://i.pinimg.com/736x/ff/63/54/ff6354f56cf04b46a3d61ea05ce4d3d8.jpg" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="text-gray-800 font-semibold">Hendrian Sutama</h4>
                            <p class="text-sm text-gray-500">ITB - Teknik Lingkungan</p>
                        </div>
                    </div>
                </div>
                <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                    <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                    <div class="absolute bottom-4 left-4 flex items-center gap-4">
                        <img src="https://i.pinimg.com/736x/cc/99/8d/cc998d623349f4c4f3579ced8aab7b27.jpg" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="text-gray-800 font-semibold">Jeanna Syawalia</h4>
                            <p class="text-sm text-gray-500">Universitas Indonesia - Administrasi Bisnis</p>
                        </div>
                    </div>
                </div>
                <div class="w-[416px] h-[255px] bg-white shadow-md p-4 rounded-lg flex-shrink-0 relative">
                    <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                    <div class="absolute bottom-4 left-4 flex items-center gap-4">
                        <img src="https://i.pinimg.com/736x/a5/34/d0/a534d08e8c5a6cd97203b34cd66b7d85.jpg" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="text-gray-800 font-semibold">Jovan</h4>
                            <p class="text-sm text-gray-500">Universitas Indonesia - Manajemen</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scrollbar -->
            <div class="absolute top-0 right-0 h-full w-12 bg-gradient-to-l from-gray-100"></div>
        </div>
    </div>
</section>
@endsection

<script>
    let testimonialsContainer = document.querySelector('.overflow-x-auto');
    let scrollAmount = 0;

    function autoScroll() {
        if (scrollAmount < testimonialsContainer.scrollWidth - testimonialsContainer.clientWidth) {
            scrollAmount += 2;
            testimonialsContainer.scrollTo(scrollAmount, 0);
        } else {
            scrollAmount = 0;
        }
    }

    setInterval(autoScroll, 30); // Adjust the speed of scrolling by changing the interval
</script>
