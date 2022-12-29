<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index()
    {
        /**
         * This function is using the Product model to retrieve all the products from the database 
         * and their associated categories using eager loading, and then returning a view with the 
         * index view file located in the admin/product directory, which is passed the $products 
         * variable as a compact variable.
         */
        $products = Product::with('categories')->get();
        return view('admin.product.index', compact('products'));
    }


    public function create()
    {
        /**
         * This function is using the Category and Warehouse models to retrieve all the active 
         * categories and warehouses from the database, and then returning a view with the create 
         * view file located in the admin/product directory, which is passed the $category and 
         * $warehouse variables as compact variables.
         */
        $category=Category::where('status','1')->get();
        $warehouse=Warehouse::where('status','1')->get();

        return view('admin.product.create',compact('category','warehouse'));
    }


    public function store(Request $request)
    {
        /**
         * This code is using the validate() method of the request object to validate the input 
         * fields of a form submission.
         */
        $product=$request->validate([
            'name' => 'required|max:20',
            'description' => 'required|max:200',
            'count' => 'required',
            'status' => 'required',
            'category_id' => 'required|exists:categories,id',
            'warehouse_id' => 'required|exists:warehouses,id',
        ]);

        /**
         * This code is creating a new product and storing it in the database. 
         * It is also uploading an image to the product/image directory if one is provided.
         */
      $id= Product::orderBy('id', 'DESC')->first();

        $code=$id->id + 1 ;

        $product = new Product();
        $product->name = $request->name;
        $product->status = $request->status;
        $product->count = $request->count;
        $product->code = "01".$code;
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->warehouse_id = $request->warehouse_id;
        $image=$request->file('image');
        if ($image) {
            $name = Str::random(12);
            $path = $image->move('product/image',$name . time() . '.' . $image->getClientOriginalExtension());
            $product->image = $path;
        }
        $product->save();

        /**
         * This code is using the redirect() function to redirect the user to the products route with a success message.
         */
        return redirect('products')->with('success', 'Successfully added');
    }


    public function show(Product $product)
    {
        //
    }


    public function edit($id)
    {
        /**
         * This code is using the Product, Category, and Warehouse models to retrieve a specific product, 
         * as well as all the active categories and warehouses from the database, and then returning a view 
         * with the create view file located in the admin/product directory, which is passed the $product, 
         * $category, and $warehouse variables as compact variables.
         */
        $products = Product::find($id);
        $category=Category::where('status','1')->get();
        $warehouse=Warehouse::where('status','1')->get();
        return view('admin.product.create', compact('products','category','warehouse'));
    }


    public function update(Request $request, $id)
    {
        /**
         * This code is using the Product model to update a specific product in the database. 
         * It is also uploading an image to the product/image directory if one is provided.
         */
        $products = Product::find($id);
        $data=$request->all();
        $image=$request->file('image');
        if ($image) {
            $name = Str::random(12);
            $path = $image->move('product/image',$name . time() . '.' . $image->getClientOriginalExtension());
            $data['image']= $path;
            //  $request->image=$path;
        }
        // dd($products->image);
        $products->update($data);
        /**
         * This code is using the redirect() function to redirect the user to the products route with a success message.
         */
        return redirect('products')->with('success', 'Successfully added');
    }


    public function destroy(Product $product)
    {
        /**
         * This code is using the Product model to delete a specific product from the database.
         */
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Successfully dalete');
    }
}
