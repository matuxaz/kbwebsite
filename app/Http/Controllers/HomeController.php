<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if (Auth::user()->hasRole(['admin'])) {
            return redirect('/admin');
        }
        else {
            return redirect('/');
        }
    }

    public function search(){


        $name = $_GET['userName'];
        $user = User::where('name', $name)->first();

        if(is_null($user))
            return redirect('/');

        return view('pages/profile', [
            'user' => $user,
        ]);
    }
}
