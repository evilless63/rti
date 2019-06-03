<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variation extends Model
{
    protected $fillable = [
        'name'
    ];

    public function product() {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

}
