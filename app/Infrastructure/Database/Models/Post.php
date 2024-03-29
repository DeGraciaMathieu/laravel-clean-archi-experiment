<?php

namespace App\Infrastructure\Database\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'highlight',
        'content',
        'createdAt',
    ];
}