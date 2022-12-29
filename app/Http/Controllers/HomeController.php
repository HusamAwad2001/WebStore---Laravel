<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $order = Order::all();
        $orderCount = count($order);
        $product = Product::where('status', '1')->count();
        $warehouse = Warehouse::where('status', '1')->count();
        $category = Category::where('status', '1')->count();
        if (Auth::user() && Auth::user()->roles == 'admin') {
            return view('layouts.home', compact('order', 'orderCount', 'product', 'warehouse', 'category'));
        } else {
            /**
             * This code is returning a view with the app view file located in the layouts directory.
             */
            return view('layouts.app');
        }
    }
}
