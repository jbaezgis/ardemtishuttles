<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Municipality;

class Province extends Model
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

    public function municipality()
    {
        return $this->hasMany(Municipality::class);
    }
}
