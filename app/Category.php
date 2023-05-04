<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status',
    ];
}
