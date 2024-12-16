<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MisionVision extends Model
{
    use HasFactory;

    protected $fillable = [
        'mision', 'vision'
    ];
}
