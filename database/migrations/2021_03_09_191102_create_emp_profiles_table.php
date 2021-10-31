<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emp_id');
            $table->string('name');
            $table->string('num');
            $table->string('email');
            $table->string('image');
            $table->string('gender');
            $table->string('password')->nullable();
            $table->string('join')->nullable();
            $table->string('end')->nullable();
            $table->string('status')->nullable();
            $table->string('salary')->nullable();
            $table->string('rank')->nullable();
            $table->bigInteger('nid')->nullable();
            $table->string('birth')->nullable();
            $table->string('skill')->nullable();
            $table->string('ssc')->nullable();
            $table->string('year')->nullable();
            $table->string('result')->nullable();
            $table->string('hsc')->nullable();
            $table->string('year1')->nullable();
            $table->string('result1')->nullable();
            $table->string('versity')->nullable();
            $table->string('dep')->nullable();
            $table->string('year2')->nullable();
            $table->string('result2')->nullable();
            $table->string('about')->nullable();
            $table->string('per_address')->nullable();
            $table->string('live_address')->nullable();
            $table->string('S_media1')->nullable();
            $table->string('S_media2')->nullable();
            $table->string('S_media3')->nullable();
            $table->string('duty_time')->nullable();
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
        Schema::dropIfExists('emp_profiles');
    }
}
