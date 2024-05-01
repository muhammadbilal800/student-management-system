@extends('layouts.apps')
@section('title','Login Page')
@section('content')
<div class="max-w-md m-auto p-4 mt-2">
    <h1 class="text-4xl mb-2 font-extrabold text-[#1c2434]">{{ $name }}</h1>
    <form action="{{ route('login') }}" method="post">
        @if (session('failed'))
        <x-alerts.failed :failed="session('failed')"  />
         @endif
        @csrf
        <x-input-field type="email" name="email" placeholder="Email Address" />
        @error('email')
        <x-alerts.error :$message />
        @enderror
        <x-input-field type="password" name="password" placeholder="Password" />
        @error('password')
        <x-alerts.error :$message />
        @enderror 
        <div class="mt-4 ">
            <input class="focus:outline-none"  type="checkbox" id="remember">
            <label class="text-lg ml-2 cursor-pointer" for="remember">Remember me</label>
        </div>
        <div  class="flex items-center justify-center bg-[#1c2434] px-4 py-3 mt-5 rounded-lg">
            <button class="flex items-center text-white font-bold text-lg" type="submit">Continue
                <span><img src="https://api.iconify.design/formkit:arrowright.svg?color=%236b707b" width="20px"></span>
            </button>
        </div>
    </form>
</div>

@endsection