<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mision_Visions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'image', 'status'
    ];
}
