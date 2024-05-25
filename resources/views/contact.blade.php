@extends('layouts.apps')

@section('title', 'Contact Us')

@section('content')
    <div class="container mx-auto my-12 px-4">
        <h1 class="text-4xl font-bold text-center mb-8">Contact Us</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Information -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Contact Information</h2>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                    <li><i class="fas fa-envelope mr-2"></i> Email: malikmuhammadbilal10@gmail.com</li>
                    <li><i class="fas fa-phone mr-2"></i> Phone: +92 339415 9800</li>
                    <li><i class="fas fa-map-marker-alt mr-2"></i> Address: House 14,Educational line,Multan</li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Send us a Message</h2>
                <form action="#" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Your Name</label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-input w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Your Email</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-input w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-semibold mb-2">Message</label>
                        <textarea id="message" name="message" rows="4" placeholder="Enter your message" class="form-textarea w-full px-4 py-2 rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary bg-blue-600 text-white px-4 py-2 rounded-lg">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
