<?php

namespace App\Http\Controllers\Cart;

use App\Tops;
use App\Acessories;
use App\Bkks;
use App\Cosmetics;
use App\Dresses;
use App\Foods;
use App\Shoes;
use App\Bottoms;
use App\Cart;
use App\Customers;
use App\Transactions;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class CartController extends Controller
{
    public function index()
    {
    	//return view('cart');
    }


    public function addItemToCart($catID,$id)
    {
    	$prevCart = request()->session()->get('cart');
    	$cart = new Cart($prevCart);

    	if($catID==1)
        {
            $data = Tops::find($id);
        }
        else if ($catID==2) 
        {
            $data =Cosmetics::find($id);
        }
        else if ($catID==3) 
        {
            $data =Shoes::find($id);
        }
        else if ($catID==4) 
        {
            $data =Dresses::find($id);
        }
        else if ($catID==5) 
        {
            $data =Bkks::find($id);
        }
        else if ($catID==6) 
        {
            $data =Acessories::find($id);
        }
        else if ($catID==7) 
        {
            $data =Foods::find($id);
        }

        else if ($catID==8) 
        {
            $data =Bottoms::find($id);
        }
        else
        {
        	$data=NULL;
        }

        if($data!=NULL)
        {
        	$cart->addItem($id,$catID,$data);
        	request()->session()->put('cart',$cart);

        	return redirect('/onlineShop/category');
        }
        else
        {
        	return redirect()->back();
        }
    }


    public function showCart()
    {
    	
    	if(session()->has('cart'))
    	{
    		$cart = session()->get('cart');
    		return view('cart',['cartItems'=>$cart]);
    	}
    	else
    	{
    		return view('cart');
    	}
    }
    public function delete()
    {
        session()->flush();
        return redirect('/onlineShop/category');
    }
    public function soloDelete($id)
    {


        //echo "hash id is $id";
        
        $cart =request()->session()->get('cart');
        if (array_key_exists($id, $cart->items)) {
            unset($cart->items[$id]);
        }

        $prevCart = request()->session()->get('cart');
        $updatedCart = new Cart($prevCart);
        $updatedCart->updatePriceNQuantity();

        request()->session()->put('cart',$updatedCart);
        
        
        return redirect('/onlineShop/cart#ggs');
    }

    public function customerConfirm()
    {
        if(request()->session()->has('cart'))
        {
            return view('customerForm');
        }
        else
        {
            return redirect('/onlineShop/category');
        }
    }
    public function dataInsert()
    {
        $customer = new Customers;

        $customer->name=request()->cName;
        $customer->phNum = request()->cPhone;
        $customer->mail = request()->cMail;
        $customer->address = request()->cAddress;

        $customer->save();

        $cID=$customer->id;

        $cart = request()->session()->get('cart');

        foreach ($cart->items as $item) 
        {
           $cat=$item['data']['cat'];
           $itemID=$item['data']['id'];
           $count = $item['quantity'];
           $totalSinglePrice = $item['totalSinglePrice'];
           $totalPrice = $cart->totalPrice;

           $transaction = new Transactions;

           $transaction->customers_id = $cID;
           $transaction->category = $cat;
           $transaction->itemID = $itemID;
           $transaction->count = $count;
           $transaction->totalSinglePrice= $totalSinglePrice;
           $transaction->totalPrice = $totalPrice;

           $transaction->save();

        }

        session()->flush();
         return redirect('/onlineShop/cart/confirm/finished');

        
    }


    public function done()
    {
        return view('finished');    
    }
}
