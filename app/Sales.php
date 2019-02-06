<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'user_id', 'sale_date',
    ];

    public function sales_detail()
    {
        return $this->hasMany('App\Sales_detail');
    }

    public function users()
    {
        return $this->hasOne('App\User');
    }
}
