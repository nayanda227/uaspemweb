@extends('layouts.app')

@section('content')
<!-- Filter and Search -->
<section>
    <div class="container mx-auto px-6 flex justify-between items-center">
        <button class="bg-orange-600 text-white py-2 px-4 rounded-lg hover:bg-orange-700 transition">Filter</button>
        <input type="text" id="search" placeholder="Search courses..." class="border border-gray-300 rounded-lg py-2 px-4 w-64 focus:outline-none focus:ring-2 focus:ring-orange-500" />
        <select id="sort" class="border border-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-2 focus:ring-orange-500">
            <option value="trending">Sort by: Trending</option>
            <option value="popular">Sort by: Popular</option>
            <option value="rating">Sort by: Rating</option>
        </select>
    </div>
</section>

 <!-- Courses Grid -->
 <section class="container mx-auto px-6 py-8">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <!-- Course 1 -->
        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
            <img src="https://via.placeholder.com/300x180" alt="Course Image" class="rounded-t-lg w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Learn Python Programming Masterclass</h3>
                <p class="text-sm text-gray-600 mb-2">Rating: 4.5 ★</p>
                <p class="text-xl font-bold text-orange-600 mb-2">$35</p>
                <p class="text-sm text-gray-500">214,343 students</p>
            </div>
        </div>
        <!-- Course 2 -->
        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
            <img src="https://via.placeholder.com/300x180" alt="Course Image" class="rounded-t-lg w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Complete Blender Creator: Learn 3D Modeling for Beginners</h3>
                <p class="text-sm text-gray-600 mb-2">Rating: 4.9 ★</p>
                <p class="text-xl font-bold text-orange-600 mb-2">$49</p>
                <p class="text-sm text-gray-500">192,367 students</p>
            </div>
        </div>
        <!-- Course 3 -->
        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
            <img src="https://via.placeholder.com/300x180" alt="Course Image" class="rounded-t-lg w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Adobe Premiere Pro CC - Advanced Training Course</h3>
                <p class="text-sm text-gray-600 mb-2">Rating: 4.7 ★</p>
                <p class="text-xl font-bold text-orange-600 mb-2">$32</p>
                <p class="text-sm text-gray-500">236,589 students</p>
            </div>
        </div>
        <!-- Course 4 -->
        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
            <img src="https://via.placeholder.com/300x180" alt="Course Image" class="rounded-t-lg w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Ultimate AWS Certified Solutions Architect: Associate 2021</h3>
                <p class="text-sm text-gray-600 mb-2">Rating: 4.3 ★</p>
                <p class="text-xl font-bold text-orange-600 mb-2">$13</p>
                <p class="text-sm text-gray-500">911,233 students</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
            <img src="https://via.placeholder.com/300x180" alt="Course Image" class="rounded-t-lg w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Ultimate AWS Certified Solutions Architect: Associate 2021</h3>
                <p class="text-sm text-gray-600 mb-2">Rating: 4.3 ★</p>
                <p class="text-xl font-bold text-orange-600 mb-2">$13</p>
                <p class="text-sm text-gray-500">911,233 students</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
            <img src="https://via.placeholder.com/300x180" alt="Course Image" class="rounded-t-lg w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Ultimate AWS Certified Solutions Architect: Associate 2021</h3>
                <p class="text-sm text-gray-600 mb-2">Rating: 4.3 ★</p>
                <p class="text-xl font-bold text-orange-600 mb-2">$13</p>
                <p class="text-sm text-gray-500">911,233 students</p>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
            <img src="https://via.placeholder.com/300x180" alt="Course Image" class="rounded-t-lg w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Ultimate AWS Certified Solutions Architect: Associate 2021</h3>
                <p class="text-sm text-gray-600 mb-2">Rating: 4.3 ★</p>
                <p class="text-xl font-bold text-orange-600 mb-2">$13</p>
                <p class="text-sm text-gray-500">911,233 students</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg hover:shadow-2xl transition-transform transform hover:scale-105">
            <img src="https://via.placeholder.com/300x180" alt="Course Image" class="rounded-t-lg w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-xl font-semibold text-gray-800 mb-2">Ultimate AWS Certified Solutions Architect: Associate 2021</h3>
                <p class="text-sm text-gray-600 mb-2">Rating: 4.3 ★</p>
                <p class="text-xl font-bold text-orange-600 mb-2">$13</p>
                <p class="text-sm text-gray-500">911,233 students</p>
            </div>
        </div>
    </div>
</section>

<!-- Pagination -->
<div class="container mx-auto px-6 py-4 flex justify-center">
    <button class="px-4 py-2 mx-1 bg-gray-200 rounded-lg hover:bg-gray-300">1</button>
    <button class="px-4 py-2 mx-1 bg-gray-200 rounded-lg hover:bg-gray-300">2</button>
    <button class="px-4 py-2 mx-1 bg-gray-200 rounded-lg hover:bg-gray-300">3</button>
    <button class="px-4 py-2 mx-1 bg-gray-200 rounded-lg hover:bg-gray-300">4</button>
    <button class="px-4 py-2 mx-1 bg-gray-200 rounded-lg hover:bg-gray-300">5</button>
</div>
@endsection
