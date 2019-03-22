<?php

namespace App\Http\Controllers;

use App\OrderItems;
use App\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;

class KitchenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = trans('Orders');
        $orders= Orders::with(['table','waiter'])->where('kitchen', 0)->orderBy('updated_at', 'desc')->get();
//        dd($orders);

        $ordersnew= Orders::with(['table','waiter'])->where('kitchen', 0)->orderBy('updated_at', 'desc')->count();
        $orderswait= Orders::with(['table','waiter'])->where('kitchen', 1)->orderBy('updated_at', 'desc')->count();
        $ordersfinish= Orders::with(['table','waiter'])->where('kitchen', 2)->whereDate('created_at', Carbon::today())
            ->orderBy('updated_at', 'desc')->count();
//        dd($ordersnew,$orderswait,$ordersfinish);
        return view('pages.kitchen.view', compact('title','ordersnew','orderswait','ordersfinish'));
    }

    public function newOrders()
    {
        $orders= Orders::with(['table','waiter'])->where('kitchen', 0)->orderBy('updated_at', 'desc')->get();
        return response()->json([
            'neworder' => view('parts.neworder',compact('orders'))->render(),
        ]);
    }

    public function waitOrders()
    {
        $orders= Orders::with(['table','waiter'])->where('kitchen', 1)->orderBy('updated_at', 'desc')->get();
            return response()->json([
                'waitorder' => view('parts.waitorder',compact('orders'))->render(),
            ]);
    }

    public function finishedOrders()
    {
        $orders= Orders::with(['table','waiter'])->where('kitchen', 2)->whereDate('created_at', Carbon::today())
            ->orderBy('updated_at', 'desc')->get();
            return response()->json([
                'finorder' => view('parts.finorder',compact('orders'))->render(),
            ]);
    }

    public function viewOrderItems($id)
    {
        $orderitems = OrderItems::with(['order','product'])->where('order_id',$id)->get();
        $order = Orders::where('id',$id)->select('order_number','kitchen','id','updated_at')->first();

//        dd($order);
            return response()->json([
                'vieworderitems' => view('parts.newordermodal',compact('orderitems','order'))->render(),
            ]);
    }

    public function finishOrder($id)
    {
        Orders::whereId($id)->update([
            'kitchen'             => 2,
        ]);
        return response()->json([
            'success' => 'Order has been finished successfully',
        ]);
    }

    public function prepareOrder($id)
    {
        Orders::whereId($id)->update([
            'kitchen'             => 1,
        ]);
        return response()->json([
            'success' => 'Order preapreation started',
        ]);
    }

    public function badgeOrder()
    {
        $ordersnew= Orders::with(['table','waiter'])->where('kitchen', 0)->orderBy('updated_at', 'desc')->count();
        $orderswait= Orders::with(['table','waiter'])->where('kitchen', 1)->orderBy('updated_at', 'desc')->count();
        $ordersfinish= Orders::with(['table','waiter'])->where('kitchen', 2)->whereDate('created_at', Carbon::today())
            ->orderBy('updated_at', 'desc')->count();

        return response()->json([
            'ordersnew' => $ordersnew,
            'orderswait' => $orderswait,
            'ordersfinish' => $ordersfinish,
        ]);
    }
}
