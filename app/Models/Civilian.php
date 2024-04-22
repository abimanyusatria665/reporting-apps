<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civilian extends Model
{
    use HasFactory;

    protected $fillable = [
        'neighbourhood_id',
        'name',
        'address',
        'phone_number'
    ];
}
