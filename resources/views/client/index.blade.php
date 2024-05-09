@extends('layout')
@section('content')
    <section class="flex bg-dashboard font-['Poppins']">
        @include('client.navbar')
        <div class="w-full min-h-screen flex flex-col font-['Poppins']">
            <div class="flex justify-end">
{{--    Profile Pic, might put dropdown for logout  --}}

            @include('client.user_dropdown')
            </div>

            <h1 class="text-xl font-bold mx-10">Dashboard</h1>

        </div>
    </section>

@endsection
