<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;
use App\Profile;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the login confirmation.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function confirm()
    {
        return view('home.confirm');
    }

    /**
     * Show the application dashboard.
     */
    public function index(User $user)
    {
        return view('home.index', compact('user'));
    }
}
