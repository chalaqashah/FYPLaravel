@extends('layout')
@section('content')
    {{-- sample home page  --}}
    <section class="min-h-screen grid grid-cols-2">
        {{--  left side of page  --}}
        <div id="left-side " class="bg-orange-600">
            <h1>dwa</h1>
        </div>
        <div id="right-side" class=" h-full">
            <a href="{{ url('/login')  }}" class="btn btn-ghost my-2 mx-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Back
            </a>
            <div class="min-w-2xl mx-10 my-16">
                <h1 class="text-2xl font-bold mx-5">Account Signup</h1>
                <form class="flex flex-col gap-4 px-5 py-5" action="{{ url('api/register') }}"  method="POST">
                    @csrf <!-- {{ csrf_field() }} -->
                    <label class="font-bold">Username</label>
                    <input type="text" name="username" class="border border-gray-500 input" placeholder="Username"/>
                    <label  class="font-bold">Email</label>
                    <input type="email" name="email" class="border border-gray-500 input" placeholder="Email"/>
                    <label  class="font-bold">Phone Number</label>
                    <input type="text" name="phonenumber" class="border border-gray-500 input" placeholder="Phone Number"/>
                    <label  class="font-bold">Password</label>
                    <input type="password" name="password" class="border border-gray-500 input" placeholder="Password"/>
                    <button type="submit" class="btn hover:bg-orange-600 border border-gray-500 hover:border-0 ">Signup</button>
                </form>
            </div>
        </div>
    </section>
@endsection
