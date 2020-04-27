<?php

namespace App\Http\Controllers;

use App\CartHold;
use App\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Melihovv\ShoppingCart\Facades\ShoppingCart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addItem(Request $request, $id)
    {
        $cust = $_GET['cust'];
        $table = $_GET['table'];

        $product = Products::where('id', $id)->first();

        $cartItem = Cart::add($product->id, $product->name, 1, $product->price, ['cust' => $cust,'table' => $table]);

        $cart = Cart::content();
        $cartsubtot = Cart::subtotal();
        $carttotal = Cart::total();
        $carttax = Cart::tax();
        $cartcount = Cart::count();
//        dd($cart);
        if ($request->ajax()){ //checking if input is ajax
            return response()->json([
                'thecart' => view('layouts.thecart')->render(),
                'success' => $product->name.' added to cart successfully.','cart' => $cart,
                'cartsubtot' => $cartsubtot,
                'carttotal' => $carttotal,
                'cartcount' => $cartcount,
                'carttax' => $carttax,
            ]);
        }
        return back()->with('success', trans($product->name.' added to cart successfully.'));
    }

    public function updateQty(Request $request, $rowId)
    {
        $cartItem = Cart::get($rowId);

        Cart::update($rowId, $cartItem->qty + 1); // Will update the quantity

        $cart = Cart::content();
        $cartsubtot = Cart::subtotal();
        $carttotal = Cart::total();
        $carttax = Cart::tax();
        $cartcount = Cart::count();
//        dd($cart);
        if ($request->ajax()){ //checking if input is ajax
            return response()->json([
                'thecart' => view('layouts.thecart')->render(),
                'success' => 'product removed from to cart successfully.','cart' => $cart,
                'cartsubtot' => $cartsubtot,
                'carttotal' => $carttotal,
                'carttax' => $carttax,
                'cartcount' => $cartcount,
            ]);
        }
        return back()->with('success', trans('product removed from cart successfully.'));
    }

    public function updateQtyDown(Request $request, $rowId)
    {
        $cartItem = Cart::get($rowId);

        Cart::update($rowId, $cartItem->qty - 1); // Will update the quantity

        $cart = Cart::content();
        $cartsubtot = Cart::subtotal();
        $carttotal = Cart::total();
        $carttax = Cart::tax();
        $cartcount = Cart::count();
//        dd($cart);
        if ($request->ajax()){ //checking if input is ajax
            return response()->json([
                'thecart' => view('layouts.thecart')->render(),
                'success' => 'product removed from to cart successfully.','cart' => $cart,
                'cartsubtot' => $cartsubtot,
                'carttotal' => $carttotal,
                'carttax' => $carttax,
                'cartcount' => $cartcount,
            ]);
        }
        return back()->with('success', trans('product removed from cart successfully.'));
    }

    public function deleteItem(Request $request, $rowId)
    {
        Cart::remove($rowId);

        $cart = Cart::content();
        $cartsubtot = Cart::subtotal();
        $carttotal = Cart::total();
        $carttax = Cart::tax();
        $cartcount = Cart::count();
//        dd($cart);
        if ($request->ajax()){ //checking if input is ajax
            return response()->json([
                'thecart' => view('layouts.thecart')->render(),
                'success' => 'product removed from to cart successfully.','cart' => $cart,
                'cartsubtot' => $cartsubtot,
                'carttotal' => $carttotal,
                'carttax' => $carttax,
                'cartcount' => $cartcount,
            ]);
        }
        return back()->with('success', trans('product removed from cart successfully.'));
    }

    public function holdCartRestore(Request $request, $id)
    {
        $hold = CartHold::with(['user'])
            ->whereHas('user', function ($query) { $query->where('id', Auth::user()->id);  })
            ->orderBy('id','asc')->select('hold_id','table_no','waiter_id','customer_id','product_id')->get();

        /* delete what is in the cart currently */
        Cart::destroy();

        /* return the products to the cart */
        foreach ($hold as $holds){
            $product = Products::where('id', $holds->product_id)->first();
            $cartItem = Cart::add($product->id, $product->name, 1, $product->price, ['cust' => $holds->customer_id,'table' => $holds->waiter_id]);

        }
        /* delete that products which were held */
        $delete = CartHold::where('hold_id', $id)->delete();

        $cart = Cart::content();
        $cartsubtot = Cart::subtotal();
        $carttotal = Cart::total();
        $carttax = Cart::tax();
        $cartcount = Cart::count();

        $hold = CartHold::with(['user'])
            ->whereHas('user', function ($query) { $query->where('id', Auth::user()->id);  })
            ->orderBy('id','asc')->distinct('hold_id')->select('hold_id','table_no','waiter_id','customer_id')->get();
//        dd($cart);
//        dd($hold);
        if ($request->ajax()){ //checking if input is ajax
            return response()->json([
                'thecart' => view('layouts.thecart')->render(),
                'success' => $product->name.' hold restored to cart successfully.','cart' => $cart,
                'cartsubtot' => $cartsubtot,
                'carttotal' => $carttotal,
                'cartcount' => $cartcount,
                'carttax' => $carttax,
                'holds' => view('parts.holds',compact('hold'))->render(),
            ]);
        }
        return back()->with('success', trans($product->name.' hold restored  to cart successfully.'));
    }

    public function holdCart(Request $request)
    {
        $cust = $_GET['cust'];
        $table = $_GET['table'];

        $hold_no = 0;
        $holdnum = CartHold::latest()->first();
        if ($holdnum !== null){
            $hold_no = $holdnum->id;
        }
        $final = 'HOLD_'.str_pad($hold_no + 1,2, 0, STR_PAD_LEFT);

        foreach(Cart::content() as $cartItem){
            $hold = [
            'hold_id'  => $final,
            'product_id'  => $cartItem->id,
            'qty'  => $cartItem->qty,
            'waiter_id'    => Auth::user()->id,
            'customer_id' => $cust,
            'table_no' => $table,
        ];
//            dd($hold);

            /* create the orders data*/
            $createOrder = CartHold::create($hold);
        };
//        dd($createOrder);
        Cart::destroy();

        $cart = Cart::content();
        $cartsubtot = Cart::subtotal();
        $carttotal = Cart::total();
        $carttax = Cart::tax();
        $cartcount = Cart::count();

        $hold = CartHold::with(['user'])
            ->whereHas('user', function ($query) { $query->where('id', Auth::user()->id);  })
            ->distinct('hold_id')->select('hold_id','table_no','waiter_id','customer_id')->get();
//        dd($hold);
        if ($request->ajax()){ //checking if input is ajax
            return response()->json([
                'thecart' => view('layouts.thecart')->render(),
                'success' => 'The order has hold successfully','cart' => $cart,
                'cartsubtot' => $cartsubtot,
                'carttotal' => $carttotal,
                'carttax' => $carttax,
                'cartcount' => $cartcount,
                'holds' => view('parts.holds',compact('hold'))->render(),
            ]);
        }
        return back()->with('success', trans('The order has hold successfully.'));
    }

    public function clearCart(Request $request)
    {
        Cart::destroy();

        $cart = Cart::content();
        $cartsubtot = Cart::subtotal();
        $carttotal = Cart::total();
        $carttax = Cart::tax();
        $cartcount = Cart::count();

//        dd($cart);
        if ($request->ajax()){ //checking if input is ajax
            return response()->json([
                'thecart' => view('layouts.thecart')->render(),
                'success' => 'The cart has been cleared successfully',
                'cart' => $cart,
                'cartsubtot' => $cartsubtot,
                'carttotal' => $carttotal,
                'carttax' => $carttax,
                'cartcount' => $cartcount,
            ]);
        }
        return back()->with('success', trans('The order has hold successfully.'));
    }
}
