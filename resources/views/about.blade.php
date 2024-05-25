@extends('layouts.apps')

@section('title', 'About Us')

@section('content')
    <div class="container mx-auto my-12 px-4">
        <h1 class="text-4xl font-bold text-center mb-8">About Us</h1>
        
        <div class="mb-12">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-2xl font-semibold mb-4">Welcome to Our Student Management System</h2>
                <p class="text-gray-700 leading-relaxed">Our Student Management System (SMS) is designed to streamline the management of student data, improve communication, and enhance the overall educational experience. Our mission is to provide a comprehensive and user-friendly platform for educational institutions to manage their student information efficiently.</p>
            </div>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <!-- Features Section -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Features</h3>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                    <li>📚 Manage student records and profiles</li>
                    <li>📅 Schedule and track classes</li>
                    <li>📝 Grade assignments and exams</li>
                    <li>📊 Generate reports and analytics</li>
                    <li>📧 Communicate with students and parents</li>
                    <li>🔒 Secure and easy-to-use interface</li>
                </ul>
            </div>
            <!-- Team Section -->
            <div class="bg-white shadow-md rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-4">Our Team</h3>
                <p class="text-gray-700 leading-relaxed mb-4">We are a team of passionate educators, developers, and designers committed to making education more efficient and effective. Our diverse backgrounds and expertise come together to create innovative solutions that address the needs of students, teachers, and administrators.</p>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                    <li>👨‍💼 Malik Bilal, CEO</li>
                    <li>👩‍💻 Taha Mehmood, Lead Developer</li>
                    <li>👨‍🎨 Joan Raza, UI/UX Designer</li>
                    <li>👩‍🏫 Mazhar Muthal, Education Specialist</li>
                </ul>
            </div>
        </div>

        <div>
            <div class="bg-white shadow-md rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4">Contact Information</h2>
                <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                    <li><i class="fas fa-envelope mr-2"></i> Email: malikmuhammadbilal10@gmail.com</li>
                    <li><i class="fas fa-phone mr-2"></i> Phone: +92 339415 9800</li>
                    <li><i class="fas fa-map-marker-alt mr-2"></i> Address: House 14,Educational line,Multan</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
