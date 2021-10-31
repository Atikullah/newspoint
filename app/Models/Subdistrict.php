<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subdistrict extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'status'
    ];
    public function reporter(){
        return $this->hasMany(Reporter::class,'subdistrict_id','id');
    }
}
