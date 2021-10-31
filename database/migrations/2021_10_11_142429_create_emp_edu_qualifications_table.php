<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpEduQualificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_edu_qualifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('add_emp_id');
            $table->string('exam_name');
            $table->string('borad');
            $table->string('reg_no');
            $table->string('roll_no');
            $table->string('group');
            $table->string('passing_year');
            $table->string('result');
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
        Schema::dropIfExists('emp_edu_qualifications');
    }
}
