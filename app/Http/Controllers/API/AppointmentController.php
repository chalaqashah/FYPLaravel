<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
//    private Request $request;
//    private Auth $auth;
//    public function __construct(Request $request, Auth $auth)
//    {
//        $this->request = $request;
//        $this->auth = $auth;
//    }
    public function store()
    {
        $client = \App\Models\Client::find(1);
        $appointment = new \App\Models\Appointment();
        $appointment->appointment_number = 'APPT-'.rand(1000,9999);
        $appointment->date = '2021-01-01';
        $appointment->time = '10:00:00';
        $appointment->reason = 'Checkup';
        $appointment->appointment_status = 'pending';
        $client->appointments()->save($appointment);
        return $appointment;
    }
}
