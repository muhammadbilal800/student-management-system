@extends('layouts.apps')
@section('title','Update Enroll Record');
@section('content')
<div class="max-w-md m-auto p-4 mt-2">
    
    <h1 class="text-4xl mb-2 font-extrabold text-[#1c2434]">{{ $name }}</h1>
    <form action="{{ route('update.enroll.now',$enrollment->slug) }}" method="post" enctype="multipart/form-data" >
        @csrf
        @method('PATCH')
        <x-input-field type="string" name="enroll_no" placeholder="Name" value="{{ $enrollment->enroll_no }}" />
        @error('enroll_no')
            <x-alerts.error :$message />
        @enderror
        <x-input-field type="text" name="slug" placeholder="Slug" value="{{ $enrollment->slug }}" />
        @error('slug') <x-alerts.error :$message /> @enderror
        <x-input-field type="string" name="batch_id" placeholder="Batch Name" value="{{ $enrollment->batch->name }}" />
      
        <x-input-field type="string" name="student_id" placeholder="Student Name" value="{{ $enrollment->student->name }}" />
      
        <x-input-field type="string" name="join_date" placeholder="Join Date" value="{{ $enrollment->join_date }}" />
        @error('join_date')
            <x-alerts.error :$message />
        @enderror
        <x-input-field type="string" name="fee" placeholder="Fee" value="{{ $enrollment->fee }}" />
            @error('fee')
                <x-alerts.error :$message />
            @enderror
        <div class="flex items-center justify-center bg-[#1c2434] px-4 py-3 mt-5 rounded-lg">
            <button class="flex items-center text-white font-bold text-lg" type="submit">Submit
                <span><img src="https://api.iconify.design/formkit:arrowright.svg?color=%236b707b" width="20px"></span>
            </button>
        </div>
    </form>
</div>


@endsection
