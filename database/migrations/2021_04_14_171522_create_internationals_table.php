<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInternationalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internationals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('hit')->default('0');
            $table->string('status');
            $table->timestamps();
            $table->rememberToken();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('internationals');
    }
}
