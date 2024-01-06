<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
            'ar_title',
            'en_title',
            'fr_title',
            'ar_description',
            'en_description',
            'fr_description',
            'cover'
    ];
}
