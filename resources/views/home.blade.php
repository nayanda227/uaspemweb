@extends('layouts.app')

@section('title', 'Home - Focka')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-100 py-16">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <div class="text-center md:text-left md:w-1/2">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight">
                    The <span class="text-orange-500">Smart Choice</span> For Future
                </h1>
                <p class="mt-4 text-gray-600">Elearn is a global training provider based across the UK that specialises in accredited and bespoke training courses. We crush the...</p>
                <div class="mt-6 flex items-center space-x-4">
                    <input 
                        type="text" 
                        placeholder="Search anything" 
                        class="border border-gray-300 px-4 py-2 w-full md:w-80 text-sm rounded focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <button 
                        class="bg-purple-500 text-white px-6 py-2 text-sm rounded-full hover:bg-purple-600 transition">
                        Continue
                    </button>
                </div>           
            </div>
            <div class="mt-8 md:mt-0 md:w-1/2 flex justify-center">
                <img src={{ asset('images/ilustration.png') }} alt="Learning Illustration" class="w-full max-w-md">
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Materi Belajar UTBK/SNBT</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach (['Penalaran Umum', 'Pengetahuan Kuantitattif', 'Pengetahuan dan Penalaran Umum ', 'Pemahaman Bacaan dan Menulis', 'Literasi dalam Bahasa Indonesia', 'Literasi dalam Bahasa Inggris','Penalaran Matematika'] as $category)
                <div class="bg-white shadow-md p-4 rounded-lg text-center">
                    <div class="text-orange-500 text-4xl mb-4">📚</div>
                    <h3 class="font-semibold text-gray-700">{{ $category }}</h3>
                    <p class="text-gray-500">38 Courses</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-800">What Students Say</h2>
            <p class="text-gray-600 mt-4">Lorem Ipsum is simply dummy text of the printing.</p>
            <div class="flex flex-wrap justify-center gap-8 mt-8">
                <div class="max-w-md bg-white shadow-md p-4 rounded-lg">
                    <p class="text-gray-600">"Teachings of the great explore of truth, the master-builder of human happiness."</p>
                    <h4 class="mt-4 text-gray-800 font-semibold">Finlay Kirk</h4>
                </div>
                <div class="max-w-md bg-white shadow-md p-4 rounded-lg">
                    <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                    <h4 class="mt-4 text-gray-800 font-semibold">Danette P. Caranetes</h4>
                </div>
                <div class="max-w-md bg-white shadow-md p-4 rounded-lg">
                    <p class="text-gray-600">"There are many variations of passages of Lorem Ipsum available."</p>
                    <h4 class="mt-4 text-gray-800 font-semibold">Clara R. Altman</h4>
                </div>
            </div>
        </div>
    </section>    
@endsection
