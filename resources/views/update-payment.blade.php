@extends('layouts.apps')
@section('title','Update Payment Record');
@section('content')
<div class="max-w-md m-auto p-4 mt-2">  
    <h1 class="text-4xl mb-2 font-extrabold text-[#1c2434]">{{ $name }}</h1>
    <form action="{{ route('update.payment.now',$payment->slug) }}" method="post" enctype="multipart/form-data" >
        @csrf
        @method('PATCH')
        <x-input-field type="string" name="enrollment_id" placeholder="Name" value="{{ $payment->enrollment_id }}" />
        @error('enrollment_id')
            <x-alerts.error :$message />
        @enderror
        <x-input-field type="string" name="paid_date" placeholder="Paid Date" value="{{ $payment->paid_date }}" />
        @error('paid_date')
            <x-alerts.error :$message />
        @enderror
        <x-input-field type="string" name="amount" placeholder="Amount" value="{{ $payment->amount }}" />
            @error('amount')
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
