<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'store_id', 'name', 'price',
    ];

    public function sales_detail()
    {
        return $this->hasMany('App\Sales_detail');
    }

    public function store()
    {
        return $this->hasOne('App\Store');
    }
}
