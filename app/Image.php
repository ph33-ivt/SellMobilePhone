<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'product_id',
        'name',
        'path'
    ];

    public function products() {
        return $this->belongsTo('App\Product');
    }
}
