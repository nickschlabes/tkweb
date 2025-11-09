<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vorstand extends Model
{
    protected $table = 'vorstand';
    
    protected $fillable = [
        'name',
        'position',
        'description',
        'image',
        'order',
    ];
}
