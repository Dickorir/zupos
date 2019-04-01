<?php

namespace App\Http\Controllers;

use App\OrderItems;
use App\Orders;
use App\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CashierController extends Controller
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
        $title = trans('Cashier');

        $orders= Orders::with(['table','waiter'])->where('kitchen', 2)->where('paid',0)->orderBy('updated_at', 'desc')->get();
        $salestoday= Orders::with(['table','waiter'])->where('kitchen', 2)->where('paid',1)->whereDate('created_at', Carbon::today())->orderBy('updated_at', 'desc')->get();
        $salestoday= Orders::with(['table','waiter'])->where('kitchen', 2)->where('paid',1)->orderBy('updated_at', 'desc')->get();
//        dd($orders);
        return view('pages.cashier.view', compact('title','orders','salestoday'));
    }

    public function newOrders()
    {
        $orders= Orders::with(['table','waiter'])->where('kitchen', 2)->where('paid',0)->orderBy('updated_at', 'desc')->get();
//        dd($orders);
        return response()->json([
            'neworder' => view('parts.cashierneworder',compact('orders'))->render(),
        ]);
    }

    public function viewOrderItems($id)
    {
        $orderitems = OrderItems::with(['order','product'])->where('order_id',$id)->get();
        $order = Orders::where('id',$id)->select('order_number','kitchen','id','updated_at','total_price','balance')->first();

//        dd($order);
        return response()->json([
            'vieworderitems' => view('parts.cashiernewordermodal',compact('orderitems','order'))->render(),
        ]);
    }

    public function Payments($id)
    {
        $amt_paid = $_GET['amt_paid'];
        $amt_received = $_GET['amt_received'];
        $due_change = $_GET['due_change'];

        $order = Orders::where('order_number',$id)->first();
//        check if amount paid is = to balance
        $bal = abs($amt_paid - $order->balance);  // abs is a fuction to remove the negative sign
        $paid = false;
        if ($bal == 0){
            $paid = true;
        }
        /* create an invoice number */
        $invnum = Payment::latest()->first();
        $invoice_no = 0;
        if ($invnum !== null){
            $invoice_no = $invnum->id;
        }

        /* get the name of the company or hotel */
        $name = (get_option('name') == "") ? 'Zuca Restora' : get_option('name');
        /* get the first letters of the words above */
        $words = explode(" ", $name);
        $acronym = "";
        foreach ($words as $w) {
            $acronym .= $w[0];
        }

        $inv_no = $acronym.str_pad($invoice_no + 1,4, 0, STR_PAD_LEFT);

        /* update orders table */
        Orders::where('order_number',$id)->update([
            'balance'             => $bal,
            'paid'              => $paid,
        ]);

        $data = [
            'invoice_no'      => $inv_no,
            'order_id'        => $order->id,
            'order_number'    => $order->order_number,
            'discount'        => 0,
            'total_pay'       => $amt_paid,
            'balance'         => $bal,
            'payment_mode'    => 'cash',
            'code'            => null,
            'received_by'     => Auth::user()->id,
            'amount_received'     => $amt_received,
            'change'     => $due_change,
        ];
        /* insert into payments table */
        $pay = Payment::create($data);

        return response()->json([
            'success' => 'payment successfully',
            'printreceipt' => view('parts.printreceipt',compact('pay'))->render(),
        ]);
    }

    public function receipt(int $id)
    {
        $pay = Payment::with(['cashier'])->where('id',$id)->first();
        $orderitems = OrderItems::with(['order','product'])->where('order_id',$pay->order_id)->get();
        $order = Orders::with(['table','waiter'])->where('id', $pay->order_id)->first();
//        dd($pay);
//        dd($order);
        return view('receipt',compact('orderitems','order','pay'));
    }

    public function badgeSales()
    {
        $orders= Orders::with(['table','waiter'])->where('kitchen', 2)->where('paid',0)->orderBy('updated_at', 'desc')->count();
        return response()->json([
            'orders' => $orders,
        ]);
    }

    public function salesToday()
    {
        $pays = Payment::with(['cashier','order'])->get();
//        dd($pays);
        $from = "";
        return response()->json([
            'salestoday' => view('pages.cashier.salesorder',compact('pays','from'))->render(),
        ]);
    }
}
