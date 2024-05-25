@extends('layouts.app');
@section('title','enroll Record');
@section('content')
       <div class="bg-gray-100 w-full md:w-4/5 p-6">

        @if (session('success'))
        <x-alerts.success :success="session('success')"  />
         @endif
            <!-- Content goes here -->
            <h1 class="text-gray-900 text-3xl font-bold mb-3 bg-slate-200 border-b-slate-400 p-2">Payment Application</h1>
            <div class="bg-gray-200 p-2">
                <a class="px-4 py-2 bg-red-500 text-white font-semibold rounded-lg mb-3" href="{{ route('add.payment') }}">Add New</a>
                <table class="p-2">
                    <tr class="p-2">
                        <th class="p-2 text-left" >#</th>
                        <th class="p-2 text-left" >Enrollment Id</th>
                        <th class="p-2" >Paid Date</th>
                        <th class="p-2" >Amount</th>
                        <th class="p-2 text-right" >Created At</th>
                        <th class="p-2 text-right" >Updated At</th>
                        <th class="p-2 text-right" >Actions</th>
                    </tr>
        
                @foreach ($payments as $payment)
                <tr>
                    <td class="text-left">{{ $payment->id }}</td>
                    <td class="text-left">{{ $payment->enrollment->enroll_no}}</td>
                    <td class="text-left">{{ $payment->paid_date }} </td>
                    <td>{{ $payment->amount }} </td>
                    <td class="text-right">{{ $payment->created_at->format('D/M/Y H:i:s A') }}</td>
                    <td class="text-right">{{ $payment->updated_at->format('D/M/Y H:i:s A') }}</td>
                    <td class="text-right font-bold relative">
                     <div class=""  x-data="{ open: false }">
                        <img @click="open = !open" src="https://api.iconify.design/bx:dots-vertical.svg?color=%23000000" alt="">
                        <div  x-show="open" x-cloak x-transition
                        class="absolute flex flex-col  -translate-x-1 rounded-lg p-3 bg-black shadow-lg">
                            <a  href="{{ route('payment.update',$payment->slug) }}" class="px-2  mb-2 py-2 rounded-lg text-center text-white bg-indigo-500" >Edit</a>
                            <form action="{{ route('payment.delete',$payment->slug) }}" method="POST" >
                                @csrf
                                @method('Delete')
                              <button  class="px-2 py-1 rounded-lg text-center text-white bg-red-500" type="submit">Delete</button>
                               </form>
                        </div>
                     </div>
                    </td>
                </tr>
                @endforeach
        
                </table>
            </div>
        </div> 
@endsection