<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'status'
    ];
    public function Reporters(){
        return $this->hasMany(Reporter::class,'district_id','id');
    }
}
