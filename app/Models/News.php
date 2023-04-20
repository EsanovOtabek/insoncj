<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_uz',
        'title_en',
        'title_ru',
        'text_uz',
        'text_en',
        'text_ru',
        'date',
        'image',
    ];
}
