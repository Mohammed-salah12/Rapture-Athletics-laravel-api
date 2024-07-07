<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeYourOwnLevel extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'img',
    ];
}
