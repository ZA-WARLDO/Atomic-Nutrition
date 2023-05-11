<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function edit(Request $request)
    {
        $user = Auth::user();
        return view('editForm', ['user' => $user]);
    }


    public function update(Request $request, $id)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->height_cm = $request->height;
        $user->weight_kg = $request->weight;
        $user->fit_goal = $request->fit_goal;
        $user->level = $request->level;
        $user->age = $request->age;
        $user->sex = $request->sex;
        $user->save();
       return redirect('/home');
    }
}
