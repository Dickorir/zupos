<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Orders;
use App\OrderItems;
use Illuminate\Support\Facades\Auth;

class OrdersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function invoice(int $id)
    {

        $orderitems = OrderItems::with(['order','product'])->where('order_id',$id)->get();
        $order = Orders::with(['table','waiter'])->where('id',$id)->first();
//        dd($order);
        return view('invoice',compact('orderitems','order'));
    }

    public function placeOrder(Request $request)
    {
        $cust = $_GET['cust'];
        $table = $_GET['table'];

        $ordnum = Orders::latest()->first();
        if ($ordnum == null){
            $order_no = 0;
        }else{
            $order_no = $ordnum->id;
        }
        /* get the name of the company or hotel */
        $name = (get_option('name') == "") ? 'Zuca Restora' : get_option('name');
        /* get the first letters of the words above */
        $words = explode(" ", $name);
        $acronym = "";
        foreach ($words as $w) {
            $acronym .= $w[0];
        }

        $ord_no = $acronym.'_'.str_pad($order_no + 1,2, 0, STR_PAD_LEFT);

        if (Cart::count() < 1){
            return response()->json([
                'error' => 'You have no items to Order.',
            ]);
        }

        $cartTotal = (double)str_replace(',', '', Cart::total());
//        dd($cartTotal);
        $order = [
            'order_number'  => $ord_no,
            'waiter_id'  => Auth::user()->id,
            'customer_id'  => $cust,
            'table_id'  => $table,
            'discount'    => 0,
            'total_price' => $cartTotal,
            'paid' => 0,
            'order_by'  => Auth::user()->role,
        ];

        /* create the orders data*/
        $createOrder = Orders::create($order);

        foreach (Cart::content() as $cartItem){

            $orderItem = [
                'order_id'  => $createOrder->id,
                'product_items_id'    => $cartItem->id,
                'quantity'  => $cartItem->qty,
                'price'       => $cartItem->price,
                'sub_total_price'       => $cartItem->qty * $cartItem->price,
            ];
            /* create the orders items data*/
            $createOrderItem = OrderItems::create($orderItem);
        }

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
                'success' => 'Order placed successfully.',
                'cart' => $cart,
                'cartsubtot' => $cartsubtot,
                'carttotal' => $carttotal,
                'cartcount' => $cartcount,
                'carttax' => $carttax,
                'order_no' => $createOrder->id,
            ]);
        }
        return redirect()->route('successOrder',[$ord_no]);
    }

}
