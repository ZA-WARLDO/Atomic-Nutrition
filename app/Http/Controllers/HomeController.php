<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Meal;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $user = Auth::user();
        $meals = Meal::all();

        if($user != null)
        {
            $meals = Meal::where('user_id', '=', $user->id)->get();
        }
        return view('home',['user' => $user, 'meals' => $meals]);
    }
}
