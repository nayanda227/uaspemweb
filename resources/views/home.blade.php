@extends('layouts.app')

@section('title', 'Home - Focka')

@section('content')
    <!-- Hero Section -->
    <section class="bg-blue-100 py-16 min-h-screen flex items-center"
        style="background-image: url('{{ asset('images/Group 327.png') }}'); background-size: cover; background-position: center; background-blend-mode: overlay; background-color: rgba(59, 130, 246, 0.2);">
        <div class="container mx-auto flex flex-col md:flex-row items-center">
            <!-- Text Content -->
            <div class="text-center md:text-left md:w-1/2">
                <h1 class="text-5xl md:text-6xl font-bold text-gray-800 leading-tight">
                    The <span class="text-orange-500">Smart Choice</span> For Future
                </h1>
                <p class="mt-6 text-gray-600 text-lg">
                    Elearn is a global training provider based across the UK that specialises in accredited and bespoke
                    training courses. We crush the...
                </p>
                <div class="mt-8 flex items-center space-x-4">
                    <input type="text" placeholder="Search anything"
                        class="border border-gray-300 px-6 py-3 w-full md:w-96 text-base rounded-full focus:ring-purple-500">
                    <button
                        class="bg-purple-500 text-white px-6 py-3 text-base rounded-full hover:bg-purple-600 transition">
                        Continue
                    </button>
                </div>
            </div>

            <!-- Image -->
            <div class="mt-12 md:mt-0 md:w-1/2 flex justify-center">
                <img src={{ asset('images/ilustration.png') }} alt="Learning Illustration" class="w-full max-w-2xl">
            </div>
        </div>
    </section>

    <!-- To-Do List Section -->
    <section>
        <div class="container mx-auto pt-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg border border-gray-200 p-4">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Design few mobile screens</h3>
                    <p class="text-sm text-gray-500">Dropbox mobile app</p>
                    <div class="mt-4">
                        <div class="text-xs text-gray-500 mb-1">Progress</div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-red-500 h-2 rounded-full" style="width: 30%;"></div>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">3/10</p>
                    </div>
                    <p class="text-xs text-gray-400 mt-4">26 Aug 2022</p>
                    <div class="flex items-center justify-between text-gray-400 mt-4">
                        <span class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v10a2 2 0 01-2 2h-6l-4 4m0-4v-4m0 4H7a2 2 0 01-2-2V4a2 2 0 012-2h8a2 2 0 012 2v4" />
                            </svg>
                            <span>6</span>
                        </span>
                        <span class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16.5 10.5L7.5 21m9-10.5L7.5 3m0 18l9-9m-9 0l9-9" />
                            </svg>
                            <span>4</span>
                        </span>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="bg-white shadow-md rounded-lg border border-gray-200 p-4">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Create brand guideline</h3>
                    <p class="text-sm text-gray-500">Oreo branding project</p>
                    <div class="mt-4">
                        <div class="text-xs text-gray-500 mb-1">Progress</div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-orange-500 h-2 rounded-full" style="width: 70%;"></div>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">7/10</p>
                    </div>
                    <p class="text-xs text-gray-400 mt-4">13 Nov 2022</p>
                    <div class="flex items-center justify-between text-gray-400 mt-4">
                        <span class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v10a2 2 0 01-2 2h-6l-4 4m0-4v-4m0 4H7a2 2 0 01-2-2V4a2 2 0 012-2h8a2 2 0 012 2v4" />
                            </svg>
                            <span>2</span>
                        </span>
                        <span class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16.5 10.5L7.5 21m9-10.5L7.5 3m0 18l9-9m-9 0l9-9" />
                            </svg>
                            <span>13</span>
                        </span>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-lg border border-gray-200 p-4">
                    <h3 class="text-lg font-semibold text-gray-700 mb-2">Create brand guideline</h3>
                    <p class="text-sm text-gray-500">Oreo branding project</p>
                    <div class="mt-4">
                        <div class="text-xs text-gray-500 mb-1">Progress</div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-orange-500 h-2 rounded-full" style="width: 70%;"></div>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">7/10</p>
                    </div>
                    <p class="text-xs text-gray-400 mt-4">13 Nov 2022</p>
                    <div class="flex items-center justify-between text-gray-400 mt-4">
                        <span class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8h2a2 2 0 012 2v10a2 2 0 01-2 2h-6l-4 4m0-4v-4m0 4H7a2 2 0 01-2-2V4a2 2 0 012-2h8a2 2 0 012 2v4" />
                            </svg>
                            <span>2</span>
                        </span>
                        <span class="flex items-center space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16.5 10.5L7.5 21m9-10.5L7.5 3m0 18l9-9m-9 0l9-9" />
                            </svg>
                            <span>13</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">Materi Belajar UTBK/SNBT</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                @foreach (['Penalaran Umum', 'Pengetahuan Kuantitattif', 'Pengetahuan dan Penalaran Umum ', 'Pemahaman Bacaan dan Menulis', 'Literasi dalam Bahasa Indonesia', 'Literasi dalam Bahasa Inggris', 'Penalaran Matematika'] as $category)
                    <div class="bg-white shadow-md p-4 rounded-lg text-center">
                        <div class="text-orange-500 text-4xl mb-4">📚</div>
                        <h3 class="font-semibold text-gray-700">{{ $category }}</h3>
                        <p class="text-gray-500">38 Courses</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Section: Next Lessons -->
    <section class="py-16 bg-white">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">Welcome back, ready for your next lesson?</h2>
                <a href="#" class="text-purple-500 hover:text-purple-600 transition font-semibold">View History</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src={{ asset('images/lesson.png') }} alt="Lesson 1" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-700">AWS Certified Solutions Architect</h3>
                        <div class="flex items-center mt-2">
                            <img src={{ asset('images/lina.png') }} alt="Lina" class="w-8 h-8 rounded-full">
                            <p class="ml-2 text-sm text-gray-600">Lina</p>
                        </div>
                        <div class="mt-4">
                            <div class="bg-gray-200 rounded-full h-2 w-full">
                                <div class="bg-cyan-300 h-2 rounded-full" style="width: 60%;"></div>
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
                        <div class="flex items-center mt-2">
                            <img src={{ asset('images/lina.png') }} alt="Lina" class="w-8 h-8 rounded-full">
                            <p class="ml-2 text-sm text-gray-600">Lina</p>
                        </div>
                        <div class="mt-4">
                            <div class="bg-gray-200 rounded-full h-2 w-full">
                                <div class="bg-cyan-300 h-2 rounded-full" style="width: 60%;"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-2">Lesson 5 of 7</p>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src={{ asset('images/lesson.png') }} alt="Lesson 3" class="w-full h-40 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-700">AWS Certified Solutions Architect</h3>
                        <div class="flex items-center mt-2">
                            <img src={{ asset('images/lina.png') }} alt="Lina" class="w-8 h-8 rounded-full">
                            <p class="ml-2 text-sm text-gray-600">Lina</p>
                        </div>
                        <div class="mt-4">
                            <div class="bg-gray-200 rounded-full h-2 w-full">
                                <div class="bg-cyan-300 h-2 rounded-full" style="width: 60%;"></div>
                            </div>
                            <p class="text-sm text-gray-600 mt-2">Lesson 5 of 7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-gray-50 py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold text-gray-800">What Student's Say</h2>
            <p class="text-gray-600 mt-4">Lorem Ipsum is simply dummy text of the printing.</p>
            <div class="relative mt-8">
                <!-- Scrollable container for testimonials -->

                <div class="overflow-x-auto flex gap-8 pb-4">
                    <div class="max-w-md bg-white shadow-md p-4 rounded-lg flex-shrink-0">
                        <p class="text-gray-600">"Teachings of the great explore of truth, the master-builder of human
                            happiness."</p>
                        <h4 class="mt-4 text-gray-800 font-semibold">Finlay Kirk</h4>
                    </div>
                    <div class="max-w-md bg-white shadow-md p-4 rounded-lg flex-shrink-0">
                        <p class="text-gray-600">"Complete account of the system and expound the actual teachings."</p>
                        <h4 class="mt-4 text-gray-800 font-semibold">Danette P. Caranetes</h4>
                    </div>
                    <div class="max-w-md bg-white shadow-md p-4 rounded-lg flex-shrink-0">
                        <p class="text-gray-600">"There are many variations of passages of Lorem Ipsum available."</p>
                        <h4 class="mt-4 text-gray-800 font-semibold">Clara R. Altman</h4>
                    </div>
                    <div class="max-w-md bg-white shadow-md p-4 rounded-lg flex-shrink-0">
                        <p class="text-gray-600">"There are many variations of passages of Lorem Ipsum available."</p>
                        <h4 class="mt-4 text-gray-800 font-semibold">Clara R. Altman</h4>
                    </div>
                    <div class="max-w-md bg-white shadow-md p-4 rounded-lg flex-shrink-0">
                        <p class="text-gray-600">"There are many variations of passages of Lorem Ipsum available."</p>
                        <h4 class="mt-4 text-gray-800 font-semibold">Clara R. Altman</h4>
                    </div>
                    <div class="max-w-md bg-white shadow-md p-4 rounded-lg flex-shrink-0">
                        <p class="text-gray-600">"There are many variations of passages of Lorem Ipsum available."</p>
                        <h4 class="mt-4 text-gray-800 font-semibold">Clara R. Altman</h4>
                    </div>
                </div>
                <!-- Scrollbar -->
                <div class="absolute top-0 right-0 h-full w-12 bg-gradient-to-l from-gray-100"></div>
            </div>
        </div>
    </section>

    <!-- Info Universitas Section -->
    <section class="py-16">
        <div class="container mx-auto">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Info Universitas</h2>
                <a href="#" class="text-blue-500 hover:underline">All Articles</a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Article Card 1 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/article.png') }}" alt="Article Image 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Best LearnPress WordPress Theme Collection For 2023
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 mt-2">
                            <p>Jan 24, 2023</p>
                        </div>
                        <p class="text-gray-600 mt-2 text-sm">Looking for an amazing & well-functional LearnPress WordPress
                            Theme?... </p>
                    </div>
                </div>
                <!-- Article Card 2 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/article.png') }}" alt="Article Image 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Best LearnPress WordPress Theme Collection For 2023
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 mt-2">
                            <p>Jan 24, 2023</p>
                        </div>
                        <p class="text-gray-600 mt-2 text-sm">Looking for an amazing & well-functional LearnPress WordPress
                            Theme?... </p>
                    </div>
                </div>
                <!-- Article Card 3 -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/article.png') }}" alt="Article Image 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800">Best LearnPress WordPress Theme Collection For 2023
                        </h3>
                        <div class="flex items-center text-sm text-gray-500 mt-2">
                            <p>Jan 24, 2023</p>
                        </div>
                        <p class="text-gray-600 mt-2 text-sm">Looking for an amazing & well-functional LearnPress WordPress
                            Theme?... </p>
                    </div>
                </div>
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
