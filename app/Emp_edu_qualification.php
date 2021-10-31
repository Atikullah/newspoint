<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emp_edu_qualification extends Model
{
    protected $table='emp_edu_qualifications';
    protected $primaryKey='id';
    protected $fillable = ['add_emp_id', 'exam_name', 'borad','reg_no','roll_no','group','passing_year','result'];
}
