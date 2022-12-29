@extends('layouts.app')

@section('content')




    <table class="table table-striped">
        <h3>My Order</h3>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Product Code</th>
            <th scope="col">Product Category</th>
            <th scope="col">Product Warehouse</th>
            <th scope="col">Product Description</th>
            <th scope="col">Product Image</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($order as $orders)
            <tr>
                <th scope="row">{{$orders->id}}</th>
                <td>{{$orders->products->name}}</td>
                <td>#{{$orders->products->code}}</td>
                <td>
                    @if(empty($orders->products->categories['name']))

                        No Category
                    @else
                        {{$orders->products->categories['name']}}
                    @endif

                </td>
                <td>
                    @if(empty($orders->products->warehouses['name']))

                        No Warehouses
                    @else
                        {{$orders->products->warehouses['name']}}
                    @endif

                </td>
                <td>{{$orders->products->description}}</td>


                <td>
                    <img src="{{$orders->products->image}}" style="width:150px">
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
