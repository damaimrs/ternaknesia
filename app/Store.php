<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'user_id', 'name', 'address',
    ];

    public function users()
    {
        return $this->hasOne('App\User');
    }

    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
