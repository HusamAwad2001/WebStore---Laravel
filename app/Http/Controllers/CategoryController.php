<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * retrieve all the categories from the database and then return a view 
         * with the index view file located in the admin/category directory, 
         * which is passed the $categories variable as a compact variable.
         */
        // $categories=Category::where('status','1')->get();
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * This function is returning a view with the create view 
         * file located in the admin/category directory.
         */
        return view('admin.category.create');
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
         * This function is using the validate() method of the 
         * $request object to validate form input.
         */
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        /**
         * This function is creating a new category and saving it to the database.
         */
        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->created_by = Auth::user()->name;
        $category->save();
        //    dd($category);

        /**
         * This function is redirecting the user to the category route and flashes 
         * a success message to the session.
         */
        return redirect('category')->with('success', 'Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**
         * This function is retrieving data from the database using the Category and Product models.
         */
        $categor=Category::find($id);
        $category=Category::where('status','1')->get();
        $product=Product::where('status','1')->where('category_id',$id)->get();

        /**
         * This function is returning a view with the category view file, which is passed the $category, $product, 
         * and $categor variables as compact variables.
         */
        return view('category', compact('category','product','categor'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /**
         * This function is retrieving a category from the database using the Category model 
         * and returning a view with the create view file located in the admin/category directory, 
         * which is passed the $category variable as a compact variable.
         */
        $categories = Category::find($id);
        return view('admin.category.create', compact('categories'));
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
        //    $ca= $request->validate([
        //         'name' => 'required',
        //         'status' => 'required',
        //     ]);
        //     $category->update($ca);

        /**
         * This function is updating a category in the database using the Category model 
         * and redirecting the user to the category.index route with a success message.
         */
        $categories = Category::find($id);
        $categories->update($request->all());
        return redirect()->route('category.index')->with('success', 'Successfully added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        /**
         * This function is deleting a category from the database and redirecting the user 
         * to the category.index route with a success message.
         */
        $category->delete();
        return redirect()->route('category.index')->with('success', 'Successfully dalete');
    }
}
