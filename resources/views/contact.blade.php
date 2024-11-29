@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container mx-auto p-6">
    <!-- Header Section -->
    <div class="bg-white p-8 shadow-md rounded-lg mb-10">
        <h1 class="text-3xl font-bold mb-4">Connect with Us</h1>
        <p class="text-gray-600 mb-6">
            Want to chat? We'd love to hear from you! Get in touch with our Customer Success Team to inquire about speaking events, advertising rates, or just say hello.
        </p>
        <button class="bg-orange-500 text-white px-6 py-2 rounded-md hover:bg-orange-600 transition">
            Copy Email
        </button>
    </div>

    <!-- Branch Section -->
    <div class="my-10">
        <h2 class="text-2xl font-bold text-center mb-8">Our Branches Around the World</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Branch Cards -->
            <div class="bg-white shadow-md p-6 rounded-lg text-center">
                <p class="font-semibold text-gray-800">Main Branch</p>
                <p class="text-gray-600">Los Angeles, California</p>
                <p class="text-gray-600">1702 Olympic Boulevard</p>
            </div>
            <div class="bg-white shadow-md p-6 rounded-lg text-center">
                <p class="font-semibold text-gray-800">Tokyo, Japan</p>
                <p class="text-gray-600">10th St, Tokyo</p>
            </div>
            <div class="bg-white shadow-md p-6 rounded-lg text-center">
                <p class="font-semibold text-gray-800">Moscow, Russia</p>
                <p class="text-gray-600">Arbat Street</p>
            </div>
            <div class="bg-white shadow-md p-6 rounded-lg text-center">
                <p class="font-semibold text-gray-800">Mumbai, India</p>
                <p class="text-gray-600">Gate 5th Floor</p>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="flex flex-col md:flex-row justify-between gap-8 items-start">
        <!-- Left Info Section -->
        <div class="flex-1">
            <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
            <p class="text-gray-600 mb-4">Phone: <span class="font-medium">(480) 555-0103</span></p>
            <p class="text-gray-600">Email: <span class="font-medium">help.edguard@gmail.com</span></p>
        </div>

        <!-- Form Section -->
        <form class="bg-white shadow-md p-8 rounded-lg w-full md:w-1/2">
            <h3 class="text-2xl font-bold mb-6">Get In Touch</h3>
            <div class="mb-6">
                <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name</label>
                <input type="text" id="first_name" placeholder="Enter your first name" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-orange-400 focus:outline-none">
            </div>
            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
                <input type="email" id="email" placeholder="Enter your email address" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-orange-400 focus:outline-none">
            </div>
            <div class="mb-6">
                <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
                <input type="text" id="subject" placeholder="Enter the subject" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-orange-400 focus:outline-none">
            </div>
            <div class="mb-6">
                <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                <textarea id="message" placeholder="Type your message here" rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-orange-400 focus:outline-none"></textarea>
            </div>
            <button type="submit" class="bg-orange-500 text-white px-6 py-3 rounded-lg hover:bg-orange-600 transition w-full">
                Send Message
            </button>
        </form>
    </div>
</div>
@endsection
