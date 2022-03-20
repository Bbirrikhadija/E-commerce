<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe\{Charge, Stripe};
use Cart;
use Darryldecode\Cart\Facades\CartFacade;

class StripeController extends Controller
{
    /**
     * payment view
     */
    public function handleGet()
    {
        if (CartFacade::isEmpty()) {
            return redirect()->back()->with('message', "Your cart is empty, you must add items before proceeding to payment");
        } else {
            return view('stripe');
        }
    }

    /**
     * handling payment with POST
     */
    public function handlePost(Request $request)
    {

        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
            "amount" => (int) sprintf("%0.2f", Cart::getSubTotal() * 10),
            "currency" => "USD",
            "source" => $request->stripeToken,
            "description" => "Making test payment."
        ]);

        CartFacade::clear();
        return redirect()->route('products.list')->with('message', "done");

    }
}
