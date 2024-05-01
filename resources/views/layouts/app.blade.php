<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    @yield('content')

    <div class="flex flex-col md:flex-row">

        <!-- Sidebar -->
        <div class="bg-gray-800 text-gray-100 py-6 hidden md:block md:w-1/5">
            <div class="mx-6 my-4">
                <a href="#" class="block py-2 px-4 bg-gray-900 text-white hover:bg-gray-700 hover:text-gray-100 rounded-lg">Home</a>
                <a href="#" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Student</a>
                <a href="#" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Teacher</a>
                <a href="#" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Courses</a>
                <a href="#" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Enrollment</a>
                <a href="#" class="block py-2 px-4 text-gray-400 hover:bg-gray-700 hover:text-white rounded-lg mt-2">Payment</a>
            </div>
        </div>

        <!-- Content -->
        <div class="bg-gray-100 w-full md:w-4/5 p-6">
            <!-- Content goes here -->
            <h1 class="text-gray-900 text-3xl font-bold mb-3 bg-slate-200 border-b-slate-400 p-2">Student Application</h1>
            <div class="bg-gray-200 p-2">
                <a class="px-4 py-2 bg-red-500 text-white font-semibold rounded-lg mb-3" href="">Add New</a>
                <table class="">
                    <tr class="p-2">
                        <th class="p-2" >#</th>
                        <th class="p-2" >Name</th>
                        <th class="p-2" >Address</th>
                        <th class="p-2" >Mobile</th>
                        <th class="p-2" >Actions</th>
                    </tr>
        
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
        
                </table>
            </div>
        </div>

    </div>

</body>
</html>
