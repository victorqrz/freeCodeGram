<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function show($data)
    {
        $user = User::find($data);
        
        return view('home', ['user'=>$user]);
    }
}
