<?php

namespace App\Http\Controllers;

use App\Orders;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Payment;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public $title = 'Report';

    public function sales(){
        $title = $this->title;
        return view('reports.sales', compact('title'));
//        dd('sales');
    }

    public function daterange(){
        return response()->json([
            'daterange' => view('parts.daterange')->render(),
        ]);
    }

    public function datesales(Request $request){
        $pays = Payment::with(['cashier','order'])->get();

        $from = Carbon::parse($request->from_date)->toFormattedDateString();
        $to = Carbon::parse($request->to_date)->toFormattedDateString();

        $fromDate = Carbon::parse($request->from_date)->toDateTimeString();
        $toDate = Carbon::parse($request->to_date)->addDay()->toDateTimeString();

        $pays = Payment::with(['cashier','order'])->whereBetween('created_at', [$fromDate, $toDate])
            ->orderBy('created_at', 'desc')->get();

//        dd($pays);
        return response()->json([
            'salestoday' => view('pages.cashier.salesorder',compact('pays','from','to'))->render(),
        ]);
    }

    public function downloadExcel($type,$from,$to)
    {
        $fromDate = Carbon::parse($from)->toDateTimeString();
        $toDate = Carbon::parse($to)->addDay()->toDateTimeString();

        $data = Payment::whereBetween('created_at', [$fromDate, $toDate])
            ->orderBy('created_at', 'desc')->get()->toArray();
//        dd($data);

        return Excel::create('sales from '.$from.' to '.$to, function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function product_sales(){
        $title = $this->title;
        $prods = DB::table('products as p')
            ->join('order_items as oi', 'oi.product_items_id', '=', 'p.id')
            ->join('orders as ord', 'oi.order_id', '=', 'ord.id')
            ->where('ord.paid',1)
            ->select('p.name', 'p.price', DB::raw('Sum(oi.quantity) AS tqty'), DB::raw('Sum(oi.sub_total_price) AS tsales'))
            ->groupBy('p.name', 'p.price')
            ->get();
        $from = Carbon::now()->toFormattedDateString();
        $to = Carbon::now()->toFormattedDateString();

        return view('reports.product_sales', compact('title','prods','from','to'));
    }

    public function product_datesales(Request $request){

        $from = Carbon::parse($request->from_date)->toFormattedDateString();
        $to = Carbon::parse($request->to_date)->toFormattedDateString();

        $fromDate = Carbon::parse($request->from_date)->toDateTimeString();
        $toDate = Carbon::parse($request->to_date)->addDay()->toDateTimeString();

        $prods = DB::table('products as p')
            ->join('order_items as oi', 'oi.product_items_id', '=', 'p.id')
            ->join('orders as ord', 'oi.order_id', '=', 'ord.id')
            ->where('ord.paid',1)
            ->select('p.name', 'p.price', DB::raw('Sum(oi.quantity) AS tqty'), DB::raw('Sum(oi.sub_total_price) AS tsales'))
            ->groupBy('p.name', 'p.price')
            ->whereBetween('ord.created_at', [$fromDate, $toDate])
            ->get();

//        dd($pays);
        return response()->json([
            'salestoday' => view('reports.prod_sales',compact('prods','from','to'))->render(),
        ]);
    }
}
