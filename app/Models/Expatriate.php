<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expatriate extends Model
{
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', 'status'
    ];
}
