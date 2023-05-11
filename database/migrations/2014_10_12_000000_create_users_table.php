<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default('Unknown');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('height_cm')->nullable()->default(165);
            $table->float('weight_kg')->nullable()->default(66.1);
            $table->string('fit_goal')->nullable()->default('Build Muscle');
            $table->boolean('level')->nullable()->default(false);
            $table->integer('age')->nullable()->default(30);
            $table->char('sex')->nullable()->default('F');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
