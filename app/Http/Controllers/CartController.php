<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller{
	public function update(){

		 $cart = auth()->user()->cart;   
		 $cart->status = 'Pending';
		 $cart->save();

		 $notification = 'Tu pedido se ha registrado correctamente, te contactaremos pronto via e-mail';
		 return back()->with(compact('notification')); 
 	}
 }
