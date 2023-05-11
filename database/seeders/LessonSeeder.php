<?php

namespace Database\Seeders;

use App\Models\Lessons;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Lessons::create
        ([
            'id'=>3,
            'title'=> "Are Steroids Bad for You? Uses, Side Effects, and Dangers",
            'short_description'=> "While steroids’ muscle-building capabilities are well documented, they come with several potential side effects.",
            'link' => "https://www.healthline.com/nutrition/are-steroids-bad"
        
        ]);

        Lessons::create
        ([
            'id'=>4,
            'title'=> "10 Best Back Exercises For Building Muscle",
            'short_description'=> "If you're overwhelmed by the sheer number of row variations, or you draw a total blank when thinking of new exercises to try, consider this list your new back blueprint.",
            'link' => "https://www.bodybuilding.com/content/10-best-muscle-building-back-exercises.html",
            'image'=>"{{asset('img/Protein.png')}}"  
        
        ]);
    }
}
