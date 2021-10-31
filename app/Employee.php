<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table='employees';
    protected $primaryKey='add_emp_id';
    protected $fillable = ['name', 'fathers_name','mothers_name','gender','religion','marital_status','designation','activity_status','blood_group','job_type','work_department','medium','nid','birth_date','age','employ_id','account_num','contact','alt_contact','email', 'joining_date','ending_date','salary','password','fb','skype','instagram','linkedin','about','achievement','image','status'];

}
