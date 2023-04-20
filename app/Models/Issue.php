<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Issue extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'number',
        'year_id',
        'yil',
        'file',
    ];



    public function articles(){
        return $this->hasMany(Article::class);
    }
}
