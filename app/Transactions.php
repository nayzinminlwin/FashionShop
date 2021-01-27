<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    public function acessories()
    {
    	return $this->belongsTo('App\Acessories','itemID');
    }
    public function bkks()
    {
    	return $this->belongsTo('App\Bkks','itemID');
    }
    public function bottoms()
    {
    	return $this->belongsTo('App\Bottoms','itemID');
    }
    public function cosmetics()
    {
    	return $this->belongsTo('App\Cosmetics','itemID');
    }
    public function dresses()
    {
    	return $this->belongsTo('App\Dresses','itemID');
    }
    public function foods()
    {
    	return $this->belongsTo('App\Foods','itemID');
    }
    public function tops()
    {
    	return $this->belongsTo('App\Tops','itemID');
    }
   
    
}
