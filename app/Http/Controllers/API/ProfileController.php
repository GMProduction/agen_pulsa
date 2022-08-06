<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return User::with('agen')->find(auth()->id());
    }
}
