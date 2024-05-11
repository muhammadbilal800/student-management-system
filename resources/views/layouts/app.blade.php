<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite('resources/css/app.css');
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex h-screen">

        <!-- Sidebar -->
        <div class="bg-gray-800 text-gray-100 py-6 hidden md:block md:w-1/5">
            <div class="mx-6 my-4">
                <a href="/" class="block py-2 px-4 bg-gray-900 text-white hover:bg-gray-700 hover:text-gray-100 rounded-lg">Home</a>
                <a href="{{ route('show.student') }}" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Student</a>
                <a href="{{ route('show.teacher') }}" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Teacher</a>
                <a href="#" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Courses</a>
                <a href="#" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Enrollment</a>
                <a href="#" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Payment</a>
            </div>
        </div>
   
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            @yield('content')
           
        </div>
    
</div>

</body>
</html>
