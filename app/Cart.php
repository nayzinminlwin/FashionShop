<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $items;
    public $totalQuantity;
    public $totalPrice;

    public function __construct($prevCart)
    {
    	if ($prevCart!=NULL) 
    	{
    		$this->items = $prevCart->items;
    		$this->totalQuantity = $prevCart->totalQuantity;
    		$this->totalPrice = $prevCart->totalPrice;
    	}
    	else
    	{
    		$this->items = [];
    		$this->totalQuantity = 0;
    		$this->totalPrice = 0;
    	}
    }

    public function addItem($id,$catID,$data)
    {
    	$price = $data->price;

    	$hashID = (pow(2,$id)) * (pow(3,$catID));

    	if (array_key_exists($hashID, $this->items))
    	{
    		$productToAdd = $this->items[$hashID];
            $productToAdd['id']= $hashID;
    		$productToAdd['quantity']++;
    		$productToAdd['totalSinglePrice']= $productToAdd['quantity'] * $price;
    	}
    	else
    	{
    		$productToAdd = ['quantity'=>1, 'id'=>$hashID, 'totalSinglePrice'=>$price,'data'=>$data];
    	}

    	$this->items[$hashID]= $productToAdd;
    	$this->totalQuantity++;
    	$this->totalPrice=$this->totalPrice + $price;
    }

    public function updatePriceNQuantity()
    {
        $totalPrice = 0;
        $totalQuantity=0;

        foreach ($this->items as $item) 
        {
            $totalQuantity = $totalQuantity +$item['quantity'];
            $totalPrice= $totalPrice+ $item['totalSinglePrice'];
        }

        $this->totalQuantity = $totalQuantity;
        $this->totalPrice = $totalPrice;
    }
}
