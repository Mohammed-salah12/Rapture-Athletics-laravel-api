<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trending extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'name',
        'small-prev'
    ];


    // public function getImgUrlAttribute()
    // {
    //     return $this->img ? asset('storage/' . $this->img) : null;
    // }
}
