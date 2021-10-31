<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bangladesh extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'image' , 'status'
    ];
}
