@extends('layouts.app')
@section('title','Add Course')
@section('content')
<div class="max-w-md m-auto p-4 mt-2">
    <h1 class="text-4xl mb-2 font-extrabold text-[#1c2434]">{{ $name }}</h1>
    <form action="{{ route('create.course') }}" method="post">
        @if (session('success'))
        <x-alerts.success :success="session('success')"  />
         @endif
        @csrf
        <x-input-field  type="string" name="name" placeholder="Name" />
        @error('name')
        <x-alerts.error :$message />
        @enderror
        <x-input-field  type="string" name="syllabus" placeholder="Syllabus" />
        @error('syllabus')
        <x-alerts.error :$message />
        @enderror
        <x-input-field  type="string" name="duration" placeholder="Duration" />
        @error('duration')
        <x-alerts.error :$message />   
        @enderror
        <div  class="flex items-center justify-center bg-[#1c2434] px-4 py-3 mt-5 rounded-lg">
            <button class="flex items-center text-white font-bold text-lg" type="submit">Submit
                <span><img src="https://api.iconify.design/formkit:arrowright.svg?color=%236b707b" width="20px"></span>
            </button>
        </div>
    </form>
</div>
@endsection