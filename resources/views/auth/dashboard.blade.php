@extends('layouts.app')

@section('title', 'Dashboard Page')

@section('content')
    <div class="container my-5 mx-10">
        <h1 class="mb-4 text-center text-3xl">📊 Dashboard</h1>
        <div class="row">
            <!-- Students Card -->
            <div class="col-md-6 mb-4">
                <div class="card text-white bg-primary shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title text-black font-semibold text-2xl">👨‍🎓 Total Students</h5>
                            <div class="display-4  text-black font-semibold text-xl">{{ $totalStudents }}</div>
                        </div>
                        <p class="card-text mt-3 text-gray-500 text-lg">The total number of students currently enrolled.</p>
                    </div>
                </div>
            </div>
            <!-- Teachers Card -->
            <div class="col-md-6 mb-4">
                <div class="card text-white bg-success shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="card-title  text-black font-semibold text-2xl">👩‍🏫 Total Teachers</h5>
                            <div class="display-4  text-black font-semibold text-xl">{{ $totalTeachers }}</div>
                        </div>
                        <p class="card-text mt-3  text-gray-500 text-lg">The total number of teachers currently employed.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
