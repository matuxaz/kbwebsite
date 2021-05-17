<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{

    public function index($user){
            $user = User::findOrFail($user);

        return view('pages/profile', [
            'user' => $user,
        ]);
    }
}
