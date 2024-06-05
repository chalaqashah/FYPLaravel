@extends('layout')
@section('content')
    <section class="flex bg-dashboard font-['Poppins']">
        @include('client.navbar')
        <div class="w-full min-h-screen flex flex-col font-['Poppins']">
            <div class="flex justify-end">
                {{--    Profile Pic, might put dropdown for logout            --}}
                @include('client.user_dropdown')
            </div>
            <h1 class="text-xl font-bold mx-10">Appointment Booking</h1>
            <p class="my-3 mx-10">Book your appointments and have them reviewed by the admin</p>
            <form class="my-5 w-full flex flex-col gap-2">
                <h1 class="text-xl font-bold mx-12">Date</h1>
                <input type="date" class="input border border-zinc-200 mx-10">
                <h1 class="text-xl font-bold mx-12">Time</h1>
                <input type="time" class="input border border-zinc-200 mx-10">
                <h1 class="text-xl font-bold mx-12">Reason</h1>
                <textarea class="input border border-zinc-200 mx-10"></textarea>
                <input type="submit" class="btn btn-ghost bg-blue-900  ml-auto mr-10" value="Request">
            </form>



        </div>
    </section>
@endsection






