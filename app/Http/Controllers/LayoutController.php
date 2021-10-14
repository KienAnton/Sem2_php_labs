<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function getLayout(){
        return view('admin.layout.master-layout');
    }

    public function getForm(){
        return view('admin.demo.form');
    }

    public function getTable(){
        return view('admin.demo.table');
    }

    public function formProcess(Request $request){
        $eventName = $request->get('eventName');
        $bandNames = $request->get('bandNames');
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');
        $portfolio = $request->get('portfolio');
        $ticketPrice = $request->get('ticketPrice');
        $status = $request->get('status');
        return view('admin.demo.table', [
            'eventName' =>$eventName,
            'bandNames' =>$bandNames,
            'startDate' =>$startDate,
            'endDate' =>$endDate,
            'portfolio' =>$portfolio,
            'ticketPrice' =>$ticketPrice,
            'status' =>$status
        ]);
    }
}
