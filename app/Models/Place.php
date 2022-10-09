<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id',
        'municipality_id',
        'image',
        'name',
        'slug',
        'description',
        'long',
        'lat',
        'type',
    ];
}
