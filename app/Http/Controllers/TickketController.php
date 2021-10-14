<?php

namespace App\Http\Controllers;

use App\Models\Tickket;
use Illuminate\Http\Request;

class TickketController extends Controller
{
    public function index() {
        $tickkets = Tickket::latest()->get();
        return view('admin.demo.form', compact('tickkets'));
    }

//    public function show(Tickket $tickket) {
//        return view('products.show', ['product' =>  $tickket]);
//    }

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
            'eventName' => 'required',
            'bandName' => 'required',
            'startDate' => 'required',
            'endDate'=> 'required',
            'portfolio'=> 'required',
            'ticketPrice'=> 'required',
            'status'=> 'required'
        ]);

        Tickket::create($data);

        return redirect()->route('admin.demo.table')->with('success', 'Tickket has been added!');
    }

    public function destroy(Tickket $tickket) {
        $tickket->delete();
        return back();
    }
}
