<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales_detail extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'sales_id', 'product_id', 'qty',
    ];

    public function sales()
    {
        return $this->hasOne('App\Sales');
    }
    public function products()
    {
        return $this->hasOne('App\Product');
    }
}
