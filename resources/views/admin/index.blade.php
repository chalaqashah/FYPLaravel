@extends('layout')
@section('content')
    <section class="flex bg-dashboard font-['Poppins']">
        @include('navbar')
        <div class="w-full min-h-screen flex flex-col font-['Poppins']">
            <div class="flex justify-end">
                <img class="mx-10 my-5 h-14 w-14 rounded-full object-cover"
                     src="https://cdn.britannica.com/58/129958-050-C3FE2DD2/Adolf-Hitler-1933.jpg" alt="hero"
                     class="w-full h-96 object-cover"/>
            </div>
            <h1 class="text-xl font-bold mx-10">Admin Panel</h1>
            <div class="flex gap-2 mx-10 my-5 justify-between">
                <div class="flex flex-col">
                    <label class="font-bold mb-2 mx-1">Customer</label>
                    <input class="input border border-zinc-200">
                </div>
                <div class="flex flex-col">
                    <label class="font-bold mb-2 mx-1">Phone Number</label>
                    <input class="input border border-zinc-200">
                </div>
                <div class="flex flex-col">
                    <label class="font-bold mb-2 mx-1">Start Date</label>
                    <input class="input border border-zinc-200">
                </div>
                <div class="flex flex-col">
                    <label class="font-bold mb-2 mx-1">End Date</label>
                    <input class="input border border-zinc-200">
                </div>
            </div>
            <div class="flex  mx-10  gap-5">
                <button class="btn bg-zinc-500 text-white">Search</button>
                <button class="btn bg-zinc-500 text-white">Reset</button>
            </div>
            <div class="mx-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Case</th>
                        <th>Phone Number</th>
                        <th>Paid Amount</th>
                        <th>Due</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                </table>
            </div>
        </div>
    </section>

@endsection
