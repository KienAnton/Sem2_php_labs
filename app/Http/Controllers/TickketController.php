<?php

namespace App\Http\Controllers;

use App\Models\Tickket;
use Illuminate\Http\Request;

class TickketController extends Controller
{
    public function index() {
        $tickkets = Tickket::latest()->get();
        return view('admin.demo.table', compact('tickkets'));
    }

    public function show(Tickket $tickket) {
        return view('tickkets.show',['tickket' =>  $tickket]);
    }

    public function create() {
        return view('admin.demo.form');
    }

//    public function edit(Product $product) {
//        return view('products.edit', compact('product'));
//    }

//    public function update(Request $request, Product $product) {
//        $request->validate([
//            'name' => 'required',
//            'price' => 'required',
//            'description' => 'required'
//        ]);
//        $product->name = $request->name;
//        $product->price = $request->price;
//        $product->description = $request->description;
//        $product->save();
//        return redirect()->route('products.index');
//    }

    public function store(Request $request) {
        $data = $request->validate([
            'eventName' => 'required|min:20',
            'bandName' => 'required',
            'startDate' => 'required|after:today',
            'endDate'=> 'required|after:startDate',
            'portfolio'=> 'required',
            'ticketPrice'=> 'required|gt:1',
            'status'=> 'required|gt:1|lt:3'
        ],
        [ 'eventName.required' => 'Please enter event name',
          'bandName.required' => 'Please enter band name',
          'startDate.required' => 'Please enter start day',
          'endDate.required' => 'Please enter end day',
          'portfolio.required' => 'Please enter portfolio',
          'ticketPrice.required' => 'Please enter ticketPrice',
          'status.required' => 'Please enter status'
        ]
        );

        Tickket::create($data);
        return redirect()->route('tickkets.index');
    }

    public function destroy(Tickket $tickket) {
        $tickket->delete();
        return back();
    }
}
