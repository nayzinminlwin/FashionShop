<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public function transactions()
    {
    	return $this->hasMany('App\Transactions');
    }
}
