<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'type','status'
    ];
}
