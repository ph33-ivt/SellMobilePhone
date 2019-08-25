<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function user_roles() {
        return $this->hasMany('App\UserRole');
    }
}
