<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Province;

class Municipality extends Model
{
    use HasFactory;

    protected $fillable = [
        'province_id',
        'image',
        'name',
        'slug',
        'description',
        'long',
        'lat',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
}
