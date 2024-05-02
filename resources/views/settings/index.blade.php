@extends('layout')
@section('content')
    <section class="bg-zinc-50 min-h-screen py-10">
        <h1 class="underline text-2xl mx-10 mb-10 ">User Profile</h1>

        <div class="flex  justify-between">
            <div id="profile" class="mx-10 flex ">
                <img class="h-24 w-24 rounded-full border-2 border-white shadow-md"
                     src="https://upload.wikimedia.org/wikipedia/en/3/3b/SpongeBob_SquarePants_character.svg"
                     id="profile-pic"/>
                <div class="mx-5 flex flex-col justify-center " id="profile-details">
                    <h1 class="font-bold text-xl">Spongebob SquarePants</h1>
                    <p class="text-gray-500">Cook at Krusty Krab</p>
                    <p class="text-gray-500">Bikini Bottom, Pacific Ocean</p>
                </div>

            </div>
            <div id="" class="flex items-center mx-12">
                <button class="btn bg-blue-700 text-white mr-10">Upload New Photo</button>
                <button class="btn">Delete</button>
            </div>

        </div>
        <hr class="border m-10"/>
        <form id="name-form" class="">
            <div>
                <div class="flex justify-between">
                    <div class="flex flex-col w-full gap-2">
                        <label class="font-bold mx-11">First Name</label>
                        <input type="text" name="name" class="border border-zinc-200 input mx-10" placeholder="Name"/>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <label class="font-bold mx-11">Last Name</label>
                        <input type="text" name="name" class="border border-zinc-200 input mx-10" placeholder="Name"/>
                    </div>
                </div>
                <div class="flex flex-col my-5 gap-2">
                    <label class="font-bold mx-11">User Name</label>
                    <input type="text" name="username" class="border border-zinc-200 input mx-10"
                           placeholder="User name"/>
                </div>
            </div>
            <hr class="border m-10"/>
            <div>
                <div class="flex justify-between">
                    <div class="flex flex-col w-full gap-2">
                        <label class="font-bold mx-11 ">Email Address</label>
                        <input type="text" name="email" class="border border-zinc-200 input mx-10"
                               placeholder="Email Address"/>
                    </div>
                    <div class="flex flex-col w-full gap-2">
                        <label class="font-bold mx-11">Phone Number</label>
                        <input type="text" name="dob" class="border border-zinc-200 input mx-10"
                               placeholder="Phone Number"/>
                    </div>
                </div>

            </div>
            <hr class="border m-10"/>

            <div class="flex flex-col my-5 gap-2">
                <label class="font-bold mx-11">Location</label>
                <input type="text" name="address" class="border border-zinc-200 input mx-10" placeholder="Address"/>
            </div>
            <submit class=" btn bg-blue-700 text-white mx-10">Save Changes</submit>
        </form>
    </section>
@endsection
