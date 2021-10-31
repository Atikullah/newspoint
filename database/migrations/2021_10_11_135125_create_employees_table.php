<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('add_emp_id');
            $table->string('name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('gender');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('designation');
            $table->string('activity_status');
            $table->string('blood_group');
            $table->string('job_type');
            $table->string('work_department');
            $table->string('medium');
            $table->string('nid');
            $table->string('birth_date');
            $table->string('age');
            $table->string('employ_id');
            $table->string('account_num');
            $table->string('contact');
            $table->string('alt_contact');
            $table->string('email');
            $table->string('joining_date');
            $table->string('ending_date');
            $table->string('salary');
            $table->string('password');
            $table->string('fb')->nullable();
            $table->string('skype')->nullable();
            $table->string('instagram')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('about')->nullable();
            $table->string('achievement')->nullable();
            $table->string('image');
            $table->string('status');
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
        Schema::dropIfExists('employees');
    }
}
