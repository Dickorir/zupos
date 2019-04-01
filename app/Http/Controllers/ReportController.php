<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Payment;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function sales(){
        $title = 'Reports';
        return view('reports.sales', compact('title'));
//        dd('sales');
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
}
