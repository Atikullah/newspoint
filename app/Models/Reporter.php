<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Reporter extends Model
{

    protected $table="reporters";
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id','name','designation','gender','district_id','subdistrict_id','email','password','contact','fb','skype','instagram','linkedin','address','about','achievement ','image','status'
    ];
    public function district(){
        return $this->belongsTo(District::class)->select('id','name');

    }
    public function subdistrict(){
        return $this->belongsTo(Subdistrict::class)->select('id','name');

    }
    public function user(){
        return $this->belongsTo(User::class)->select('id','name');

    }

}
