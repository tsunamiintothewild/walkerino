<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Walk extends Model
{
    use HasFactory;

    public $casts = ['date' => 'datetime'];

    public $fillable = ['distance', 'date'];
}
