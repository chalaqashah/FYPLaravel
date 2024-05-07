@extends('layout')
@section('content')
<section class="max-w-3xl mx-auto">
    <div id="navbar" class="my-5">
        <ul class="flex gap-1 justify-between">
            <li><a href="/" class="text-3xl font-[Poppins]">Aiman Rahim</a></li>
            <div class="flex gap-3 justify-center items-center">
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/signup') }}">Signup</a></li>
                <li><a href="{{ url('/admin') }}">Admin</a></li>
            </div>
           </ul>
    </div>
    <div id="content" class="h-64">

    </div>
</section>
@endsection
