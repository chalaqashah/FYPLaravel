@extends('layout')
@section('content')
<div class="bg-zinc-100 min-h-screen flex justify-center items-center">
    <section class="card shadow bg-zinc-50 ">
        <h1  class="text-center text-2xl my-4">Login</h1>
        <form class="flex flex-col gap-4 px-5 py-5" action="{{ route('login') }}" method="POST">
            @csrf <!-- {{ csrf_field() }} -->
            <label>Username</label>
            <input type="text" name="email" class="input" placeholder="Username"/>
            <label>Password</label>
            <input type="password" name="password" class="input" placeholder="Password"/>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </section>

</div>
@endsection
