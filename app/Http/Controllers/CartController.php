<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //...........................................................
    public function shop()
    {
        $products = Product::all();
        //dd($products);
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->
        with(['products' => $products]);
    }
    //.............................................................
    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->
        with(['cartCollection' => $cartCollection]);;
    }
    //..............................................................
    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'attributes' => array('image' => $request->img,)
        ));
        //return redirect()->route('cart.index')->with('success_msg',
        return redirect()->route('shop')->with('success_msg',
            'Товар добавлен в корзину.'.'    '.'Item is Added to Cart!');
    }
    //...................................................................
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->
        with('success_msg', 'Item is removed!');
    }
    //..................................................................
    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
            ));
        return redirect()->route('cart.index')->
        with('success_msg', 'Cart is Updated!');
    }
    //....................................................................
    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Cart is cleared!');
    }
}
