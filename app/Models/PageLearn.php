<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageLearn extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'example',
    ];


}
