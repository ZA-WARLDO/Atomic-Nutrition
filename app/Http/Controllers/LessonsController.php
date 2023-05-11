<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 






    //Theere is a bug here I have the press the button again
    public function index($number)
    {
        $size = Lessons::count();
        $user = Auth::user();
        if($number > $size -2 )
        {
            $number = 0;
            $lesson = Lessons::find($number + 1);
            $lesson2 = Lessons::find($number +2);
            return view('lesson', ['lesson' => $lesson, 'lesson2' => $lesson2, 'size' => $size, 'num' => $number+2, 'user' => $user]);
        }
        else
        {
            $lesson = Lessons::find($number + 1);
            $lesson2 = Lessons::find($number +2);
            $size = Lessons::count();
            return view('lesson', ['lesson' => $lesson, 'lesson2' => $lesson2, 'size' => $size, 'num' => $number + 2, 'user' => $user]);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function show(Lessons $lessons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function edit(Lessons $lessons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lessons $lessons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lessons $lessons)
    {
        //
    }

}
  
