@extends('layout')
@section('content')
    <section class="flex bg-dashboard font-['Poppins']">
        @include('client.navbar')
        <div class="w-full min-h-screen flex flex-col font-['Poppins']">
            <div class="flex justify-end">
                {{--    Profile Pic, might put dropdown for logout            --}}
                @include('client.user_dropdown')
            </div>
            <h1 class="text-xl font-bold mx-10">Appointment</h1>
            <p class="my-3 mx-10">View your appointments to see the progress, remarks, etc</p>
            <a href="{{route('client.appointment.request')}}" class="btn btn-ghost border   ml-auto mr-5 mb-5 w-1/6 ">Request</a>
            <div class="mx-5">
                <table class="table bg-white">
                    <thead>
                    <tr>
                        <th>Appointment ID</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($appointments as $appointment)
                        <tr>
                            <td><a class="text-blue-600 hover:underline " href="{{url('client/appointment/1')}}">1</a></td>
                            <td>{{$appointment->date}}</td>
                            <td>{{$appointment->time}}</td>
                            <td>
                                <span class="text-green
                                @if($appointment->appointment_status == 'pending')
                                    text-yellow-500
                                @elseif($appointment->appointment_status == 'declined')
                                    text-red-500
                                @endif
                                ">{{ $appointment->appointment_status }}</span>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection






