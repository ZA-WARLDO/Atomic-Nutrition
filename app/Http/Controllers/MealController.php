<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //Used for listing data in this case meals resource
    public function index()
    {
        //
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

     //form data gets passed here 
    //This will contain the code to how to store the produ
    public function store(Request $request)
    {
         $meal = Meal::create([
            'user_id' => Auth::id(),
            'meal_name' => $request['name'],
            'calories' => $request['calories'],
            'meal_time' => $request['time']
         ]);

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */

    //Shows a specific meal
    public function show(Meal $meal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */

    //show here the form to edit the product
    public function edit(Meal $meal)
    {
        return view('editSummary');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */

    //The request parameters store the new information
    public function update(Request $request, Meal $meal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meal  $meal
     * @return \Illuminate\Http\Response
     */

    //remove a meal
    public function destroy($id)
    {


        $meal = Meal::find($id);


        $meal->delete();
        return redirect("home");
    }

}
