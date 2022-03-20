<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserWeightModel;
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

        unset($request->all()['_token']);
        User::create($request->all());

        return redirect()->route('addWeight.get');

//        User::create([
//            "name" => $request->name,
//            "gender" => $request->gender,
//            "weight" => $request->weight,
//            "aiming_weight" => $request->aiming_weight,
//            "units" => $request->units,
//            'email' => $request->email,
//            'password' => $request->password
//        ]);
//       dd($request->all(), $request->get('password'), $request->password);


    }

    public function userAddWeight(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'current_weight' => ['required', 'numeric']
        ]);

        unset($request->all()['_token']);
        UserWeightModel::create($request->all());
//        die("X");
//        UserWeightModel::create([
//            'user_id' => $request->user_id,
//            'current_weight' => $request->current_weight
//        ]);

        return redirect()->route('showUser',[
            'user' => $request->user_id
        ]);

    }

    public function showUser(User $user)
    {
//        dd($user->userWeights);
//        return view('singleUser', ['user' => $user]);
        return view('singleUser', compact('user'));
    }

    public function getAllUsers()
    {
        $users = User::all();
        return view('homepage',compact('users'));
    }
}
