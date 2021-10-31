<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();;
            $table->string('name');
            $table->string('designation');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('subdistrict_id');
            $table->string('gender');
            $table->string('email');
            $table->string('password');
            $table->string('contact');
            $table->string('fb')->nullable();
            $table->string('skype')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('address')->nullable();
            $table->string('about')->nullable();
            $table->string('achievement')->nullable();
            $table->string('image');
            $table->string('status');
            $table->timestamps();
            $table->rememberToken();
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
           $table->foreign('subdistrict_id')->references('id')->on('subdistricts')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporters');
    }
}
