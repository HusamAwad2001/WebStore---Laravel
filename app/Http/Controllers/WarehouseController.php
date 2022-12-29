<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * This code is using the Warehouse model to retrieve a list of all warehouses from the database 
         * and return a view with the index view file located in the admin/warehouse directory, 
         * which is passed the $warehouse variable as a compact variable.
         */
        $warehouse = Warehouse::all();
        return view('admin.warehouse.index', compact('warehouse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /**
         * This code is using the view() function to return the create view file located in the 
         * admin/warehouse directory.
         */
        return view('admin.warehouse.create');
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
         * This code is using the validate() method of the incoming HTTP request object to validate the 
         * request data.
         */
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        /**
         * This code is using the Warehouse model to create a new warehouse in the database.
         */
        $warehouse = new Warehouse();
        $warehouse->name = $request->name;
        $warehouse->status = $request->status;
        $warehouse->created_by = Auth::user()->name;
        $warehouse->save();
        //    dd($category);

        /**
         * This code is using the redirect() function to redirect the user to the warehouses route with 
         * a success message.
         */
        return redirect('warehouses')->with('success', 'Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function show(Warehouse $warehouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /**
         * This code is using the Warehouse model to retrieve a specific warehouse from the database 
         * and return a view with the create view file located in the admin/warehouse directory, 
         * which is passed the $warehouse variable as a compact variable.
         */
        $warehouse = Warehouse::find($id);
        return view('admin.warehouse.create', compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        /**
         * This code is using the Warehouse model to update a specific warehouse in the database.
         */
        $warehouse = Warehouse::find($id);
        $warehouse->update($request->all());
        return redirect()->route('warehouses.index')->with('success', 'Successfully added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Warehouse  $warehouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Warehouse $warehouse)
    {
        /**
         * This code is using the Warehouse model to delete a specific warehouse from the database.
         */
        $warehouse->delete();
        return redirect()->route('warehouses.index')->with('success', 'Successfully dalete');
    }
}
