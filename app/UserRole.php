<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'user_id',
        'role_id',
    ];

    public function users() {
        return $this->belongsTo('App\User');
    }

    public function roles() {
        return $this->belongsTo('App\Role');
    }
}
