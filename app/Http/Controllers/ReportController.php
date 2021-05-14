<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $year = $request->year ?? 2021;
        $month_in_num = $request->month ?? 5;
        $month = $month_in_num < 10 ? '0'.$month_in_num : $month_in_num;
        $orders = DB::table('orders')->where('created_at', 'LIKE', "%$year-$month-%" )->get();
        $data = [];
        for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $month_in_num, $year); $i++) {
            $day = $i<10 ? '0'.$i : ''.$i;
            $data[$day] = 0;
        }
        foreach ($orders as $order) {
            $day = date('d', strtotime($order->created_at));
            $data[$day]++;
        }
        $dataView = [
            'days' => array_keys($data),
            'orders' => array_values($data),
            'month' => $month,
            'year' => $year
        ];
        return view('pages.admin.report.browse')->with($dataView);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
