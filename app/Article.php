<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'metadescription', 'metakeywords', 'description', 'short_description', 'image', 'name', 'slug'
    ];
}
