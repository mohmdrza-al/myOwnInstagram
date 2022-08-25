<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ProfilesControllor extends Controller
{
    public function index($user)
    {
        $user = User::findorfail($user);

        return view('Profiles.index',[
            'user' => $user,
        ]);
    }
}
