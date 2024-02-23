<?php

namespace App\Http\Controllers\Food;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food\Food;
use App\Models\Food\Cart;
use Auth;
use Session;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;

class FoodController extends Controller
{
   public function foodDetails($id){
    $foodItem = Food::find($id);
    $cartverify = Cart::where('food_id', $id)
    ->where('user_id', Auth::user()->id)->count();
    return view("food.food-details", compact('foodItem', 'cartverify'));
    
   }

   public function cart(Request $request, $id){
      $cart = Cart::create([
          'user_id' => $request->user_id,
          'food_id' => $request->food_id,
          'name' => $request->name,
          'price' => $request->price,
          'image' => $request->image
      ]);

      if($cart){
            return redirect()->route('food.details', $id)->with(['success' => 'Item added to cart']);
        }      

      echo"item added successfully to cart!";
      //return view("food.food-details", compact('cart'));
      
     }

     public function displaycartItems(){
        //display cart
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();
        //display price
        $total = Cart::where('user_id', Auth::user()->id)->sum('price');


        return view("food.cart", compact('cartItems','total'));
        
       }

       public function deletecartItems($id){
        //display cart
        $deleteItem = Cart::where('food_id', $id)->delete();
        
        if($deleteItem){
            return redirect()->route('food.display.cart')->with(['delete' => 'Item removed from cart']);
        }

        
       }
       public function prepareCheckout(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));
    
        $session = StripeSession::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Cart Total',
                    ],
                    'unit_amount' => $request->price * 100, // Stripe expects the amount in cents
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('checkout.success'), // You need to create this route
            'cancel_url' => route('checkout.cancel'), // You need to create this route
        ]);
    
        return redirect($session->url, 303);
    }

    public function checkoutSuccess(){
        // Handle successful checkout
        return view('checkout.success');
    }
    
    public function checkoutCancel(){
        // Handle canceled checkout
        return view('checkout.cancel');
    }
    
    

       
}


