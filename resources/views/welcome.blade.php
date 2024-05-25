<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Navigation Bar -->
    <nav class="bg-blue-500 p-4">
        <div class="container mx-auto">
            <div class="flex items-center justify-between">
                <div class="text-white text-xl font-semibold">Student Management System</div>
                <div>
                    <a href="/" class="text-white hover:text-gray-200 px-4">Home</a>
                    <a href="{{ route('about') }}" class="text-white hover:text-gray-200 px-4">About</a>
                    <a href="{{ route('contact') }}" class="text-white hover:text-gray-200 px-4">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-900 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">Welcome to Student Management System</h1>
            <p class="mt-4">Manage your students efficiently with our easy-to-use system.</p>
            <a href="/signup" class="mt-8 inline-block bg-white text-blue-900 hover:bg-blue-100 hover:text-blue-900 font-semibold py-2 px-6 rounded-lg">Get Started</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="py-20">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold mb-8 text-center">Key Features</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white p-6">
                    <h3 class="text-xl font-semibold mb-2">Student Records</h3>
                    <p>Manage student information, including personal details, enrollment status, grades, and more.</p>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white p-6">
                    <h3 class="text-xl font-semibold mb-2">Attendance Tracking</h3>
                    <p>Keep track of student attendance and generate reports for analysis.</p>
                </div>
                <div class="max-w-sm rounded-lg overflow-hidden shadow-lg bg-white p-6">
                    <h3 class="text-xl font-semibold mb-2">Grades Management</h3>
                    <p>Record and manage student grades for different subjects and semesters.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Student Management System. All rights reserved.</p>
        </div>
    </footer>

</body>

</html>
