<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cases;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index(){
        return view('client.index');
    }

    public function cases(){
        $cases = Cases::all();
        return view('client.cases', ['cases' => $cases]);
    }

    public function case($id){
        return view('client.case.index', ['id' => $id]);
    }

    public function appointments(){
        $request = request();
        $user = Auth::user();

        $client = \App\Models\Client::find($user->id);
        $appointments = $client->appointments;
        return view('client.appointments', ['appointments' => $appointments]);
    }

    public function requestAppointment(){
        return view('client.appointment.request');
    }

}
