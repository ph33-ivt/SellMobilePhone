<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'comment'
    ];

    public function users() {
        return $this->belongsTo('App\User');
    }

    public function products() {
        return $this->belongsTo('App\Product');
    }
}
