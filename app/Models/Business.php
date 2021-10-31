<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'status'
    ];
}
