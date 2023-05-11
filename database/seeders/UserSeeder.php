<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create
        ([
            'id'=> 1,
            'name'=> "Stpehen",
            'email'=> "DubNation@gmail.com",
            'height_cm'=> 188,
            'weight_kg'=> 84,
            'fit_goal'=> "Build Muscle",
            'sex'=> 'M',
            'age'=> 35,
            'level'=> true,
            'email_verified_at' => Carbon::now(),
            'password'=> Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);
    }
}
