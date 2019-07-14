<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    protected $fillable = [
        'metadescription', 'metakeywords', 'description', 'variations_description', 'variations_table', 'image', 'name', 'slug', 'product_category_id'
    ];

    public function variations() {
       return $this->hasMany('App\Variation');
    }

    public function product_category() {
        return $this->belongsTo('App\ProductCategory', 'product_category_id', 'id');
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
