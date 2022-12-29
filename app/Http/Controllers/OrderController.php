<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * This function is using the Order model to retrieve all the orders from the database 
         * and then returning a view with the index view file located in the admin/order directory, 
         * which is passed the $order variable as a compact variable.
         */
        $order = Order::all();
        return view('admin.order.index', compact('order'));
    }

    public function myOrder()
    {
        $user = Auth::user()->id;

        $order = Order::where('client_id', $user)->get();
        return view('admin.order.myOrder', compact('order'));
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
        /**
         * This code is checking if the user is authenticated, creating a new order, updating the product count, 
         * and redirecting the user back to the previous page with a success message or to the login page if the 
         * user is not authenticated.
         */
        if (Auth::id()) {
            $order = new Order();
            $id =  $request->product_id;
            $products = Product::where('id', $id)->first();
            $order->client_id = Auth::id();
            $order->created_by = Auth::id();

            if ($products['count'] == 0) {
                return back()->with('success', 'لا يوجد منتجات من هذا الصنف في المخزن');
            } else {
                $order->product_id = $request->product_id;
            }
            
            $order->product_id = $request->product_id;
            $order->warehouse_id = $request->warehouse_id;
            $order->save();
            $product = Product::find($order->product_id);
            $product->count = $product->count - 1;
            $product->update();
            return back()->with('success', 'تم طلب المنتج بنجاح');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
