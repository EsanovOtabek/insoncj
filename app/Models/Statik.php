<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statik extends Model
{
    use HasFactory;
    protected $fillable = [
        'static_tel1',
        'static_tel2',
        'static_tel3',
        'static_email',
        'adress_uz',
        'adress_en',
        'adress_ru',
    ];
}
