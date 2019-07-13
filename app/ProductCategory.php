<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductCategory extends Model
{
    protected $fillable = [
        'metadescription', 'metakeywords', 'description', 'image', 'name', 'slug'
    ];

    public function products() {
        return $this->hasMany('App\Product');
    }

    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
