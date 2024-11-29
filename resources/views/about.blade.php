@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="text-center py-16 bg-gray-100">
        <h1 class="text-5xl md:text-6xl font-bold mb-4">2007-2021</h1>
        <h2 class="text-2xl md:text-4xl text-gray-800">We share knowledge with the world</h2>
        <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
            Interdum et malesuada fames ac ante ipsum primis in faucibus. 
            Present fermentum quam mauris.
        </p>
    </section>

    <!-- Companies Section -->
    <section class="py-12">
        <h3 class="text-xl md:text-2xl text-center mb-8 font-semibold">We Just Keep Growing with 6.3k Companies</h3>
        <div class="flex flex-wrap justify-center gap-6">
            <img src="/images/netflix.png" alt="Netflix" class="h-10 md:h-12">
            <img src="/images/youtube.png" alt="YouTube" class="h-10 md:h-12">
            <img src="/images/google.png" alt="Google" class="h-10 md:h-12">
            <img src="/images/lenovo.png" alt="Lenovo" class="h-10 md:h-12">
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-12 bg-gray-50">
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 text-center gap-8 max-w-5xl mx-auto">
            <div>
                <h3 class="text-3xl font-bold">67.1K</h3>
                <p class="text-gray-600">Students</p>
            </div>
            <div>
                <h3 class="text-3xl font-bold">26K</h3>
                <p class="text-gray-600">Certified Instructor</p>
            </div>
            <div>
                <h3 class="text-3xl font-bold">72</h3>
                <p class="text-gray-600">Country Language</p>
            </div>
            <div>
                <h3 class="text-3xl font-bold">99.9%</h3>
                <p class="text-gray-600">Success Rate</p>
            </div>
            <div>
                <h3 class="text-3xl font-bold">57</h3>
                <p class="text-gray-600">Trusted Companies</p>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="py-12 bg-pink-100">
        <div class="flex flex-col md:flex-row items-center gap-8 max-w-6xl mx-auto">
            <img src="/images/mission.jpg" alt="Our Mission" class="w-full md:w-1/2 rounded-lg shadow-lg">
            <div class="text-center md:text-left">
                <h3 class="text-2xl md:text-3xl font-bold mb-4">
                    Our one billion mission sounds bold, we agree.
                </h3>
                <p class="text-gray-600 leading-relaxed">
                    “We cannot solve our problems with the same thinking we used when we created them.” — Albert Einstein.
                    Institutions are slow to change; communities were often good ideas with slow thinking to let them die.
                </p>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-12">
        <h3 class="text-2xl md:text-3xl text-center mb-8 font-semibold">What Our Clients Say</h3>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Testimonial Card -->
            <div class="border p-6 rounded-lg shadow-lg bg-white">
                <p class="italic text-gray-700">
                    "Eduguard fit us like a glove. Their team curates fresh, up-to-date courses for their marketplace and makes them available to customers."
                </p>
                <p class="mt-4 font-bold text-gray-800">Sundar Pichai</p>
                <p class="text-gray-500">Chief Chairman of Google</p>
            </div>
            <div class="border p-6 rounded-lg shadow-lg bg-white">
                <p class="italic text-gray-700">
                    "Eduguard responds to the needs of the business in an agile and global manner. It’s truly the best solution for our employees and their careers."
                </p>
                <p class="mt-4 font-bold text-gray-800">Satya Nadella</p>
                <p class="text-gray-500">CEO of Microsoft</p>
            </div>
            <div class="border p-6 rounded-lg shadow-lg bg-white">
                <p class="italic text-gray-700">
                    "In total, it was a big success, I would get emails about what a fantastic resource it was."
                </p>
                <p class="mt-4 font-bold text-gray-800">Ted Sarandos</p>
                <p class="text-gray-500">Chief Executive Officer of Netflix</p>
            </div>
        </div>
    </section>
</div>
@endsection
