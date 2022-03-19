<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'gender' => ['required', 'string', 'in:male,female'],
//            'gender' => 'required|string|in:male,female',
            'weight' => ['required', 'numeric'],
            'aiming_weight'=> ['required', 'numeric'],
            'units'=> ['required', 'string'],
            'email'=> ['required', 'email', 'unique:users'],
            'password'=> ['required', 'string']
        ]);

        User::create([
            "name" => $request->name,
            "gender" => $request->gender,
            "weight" => $request->weight,
            "aiming_weight" => $request->aiming_weight,
            "units" => $request->units,
            'email' => $request->email,
            'password' => $request->password
        ]);
       dd($request->all(), $request->get('password'), $request->password);
       // test assdaasdsad
    }
}
