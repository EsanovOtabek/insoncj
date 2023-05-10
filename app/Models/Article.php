<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'authors',
        'abstract',
        'keywords',
        'status',
        'comment',
        'file',
        'issue_id',
        'user_id',
    ];

    public function issue(){
        return $this->belongsTo(Issue::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
