<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($data)
    {
        $user = User::findOrFail($data);
        
        return view('home', ['user'=>$user]);
    }
}
