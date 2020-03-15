<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('pages.dashboard')
            ->with('fleets',$user->fleets)
            ->with('users',$user);
    }

    public function about()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('pages.about')
            ->with('users',$user);

    }

    public function fleet()
    {
        return view('fleets.index');

    }

    public function settings()
    {


    }
}
