<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UrlContainer extends Model
{
    protected $fillable = [
        'baseUrl',
        'shortCutUrl',

    ];
    use HasFactory;
}
