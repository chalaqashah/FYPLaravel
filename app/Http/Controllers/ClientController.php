<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cases;

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

}
