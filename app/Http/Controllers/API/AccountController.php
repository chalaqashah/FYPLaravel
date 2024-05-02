<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    private Request $request;
//    private Auth $auth;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function register()
    {
        $this->request->only('username', 'email', 'password','phonenumber');
        $user = new \App\Models\User();
        $user->name = $this->request->username;
        $user->email =  $this->request->email;
        $user->password = bcrypt( $this->request->password);
        $user->phonenumber =  $this->request->phonenumber;
        $user->save();
        return
            [
                'name' => $user->name,
                'email' => $user->email,
                'password' => $this->request->password,
                'phonenumber' => $user->phonenumber

            ];
    }
}
