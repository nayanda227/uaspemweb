@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<section 
    class="py-16 min-h-screen flex items-center justify-center" 
    style="background-image: linear-gradient(to right, rgba(103, 102, 219, 0.9), rgba(255, 219, 238, 0.5)); 
    background-size: cover; 
    background-position: center;">
    <div class="container mx-auto flex flex-col lg:flex-row items-center gap-10">
        <!-- Left Section (Text) -->
        <div class="text-center lg:text-left flex-1">
            <h1 class="text-5xl font-bold text-white mb-4 drop-shadow-lg">
                Connect with Us
            </h1>
            <p class="text-gray-200 mb-6">
                Want to chat? We'd love to hear from you! Get in touch with our Customer Success Team to inquire about 
                speaking events, advertising rates, or just say hello.
            </p>
            <div class="w-[200px] h-[50px] bg-[#4D2C5E] rounded-full flex items-center justify-center mx-auto lg:mx-0">
                <button onclick="scrollToForm()" class="text-white text-sm font-medium font-['Roboto'] hover:opacity-90 transition">
                    Continue
                </button>
            </div>
        </div>

        <!-- Right Section (Image) -->
        <div class="mt-12 md:mt-0 md:w-1/2 flex justify-center">
            <img src={{ asset('images/qii.png') }} alt="Learning Illustration" class="w-[600px] h-auto">
        </div> 
    </div>
</section>


<!-- Contact Section -->
<div class="flex flex-col lg:flex-row justify-center gap-16 px-4 lg:px-16 mt-10 items-start">
    <!-- Left Info Section -->
    <div class="flex-1 bg-white p-8 shadow-lg rounded-lg">
        <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
        <p class="text-gray-700 mb-4 font-semibold">Nama dan NIM:</p>
        <ul class="list-disc pl-5 text-gray-600 space-y-2">
            <li>Sugeng Aldi Widodo [233140707111014]</li>
            <li>Cagita Dian A`yunin  [233140707111025]</li>
            <li>Aulia Lutfhi Hakim [233140707111030]</li>
            <li>Nadia Alya Paramitha Erwanto [233140707111031]</li>
            <li>Tubagus Rangga Gilang [233140707111032]</li>
        </ul>
    </div>

    <!-- Form Section -->
    <form id="contact-form" class="flex-1 bg-white shadow-lg p-8 rounded-lg">
        <h3 class="text-2xl font-bold mb-6">Get In Touch</h3>
        <div class="mb-6">
            <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name</label>
            <input 
                type="text" 
                id="first_name" 
                placeholder="Enter your first name" 
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-purple-400 focus:outline-none"
            >
        </div>
        <div class="mb-6">
            <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
            <input 
                type="email" 
                id="email" 
                placeholder="Enter your email address" 
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-purple-400 focus:outline-none"
            >
        </div>
        <div class="mb-6">
            <label for="subject" class="block text-gray-700 font-medium mb-2">Subject</label>
            <input 
                type="text" 
                id="subject" 
                placeholder="Enter the subject" 
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-purple-400 focus:outline-none"
            >
        </div>
        <div class="mb-6">
            <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
            <textarea 
                id="message" 
                placeholder="Type your message here" 
                rows="4" 
                class="w-full border border-gray-300 rounded-lg p-3 focus:ring-2 focus:ring-purple-400 focus:outline-none">
            </textarea>
        </div>
        <button 
            type="submit" 
            class="bg-purple-500 text-white px-6 py-3 rounded-lg hover:bg-purple-400 transition w-full">
            Send Message
        </button>
    </form>
</div>
@endsection

<script>
    function scrollToForm() {
        document.getElementById('contact-form').scrollIntoView({ behavior: 'smooth' });
    }
</script>
