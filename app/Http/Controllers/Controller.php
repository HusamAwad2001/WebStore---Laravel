<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;




    public function __construct()
    {
        //its just a dummy data object.
        $product=Product::where('status','1')->get();
        $category=Category::where('status','1')->get();


        // Sharing is caring
        View::share('product', $product);
        View::share('category',$category);
    }
}
