@extends('layouts.app')

@section('content')




    <table class="table table-striped">
        <h3>All Order</h3>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Warehouse Name</th>
            <th scope="col">Order User Name</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($order as $orders)


            <tr>
                <th scope="row">{{$orders->id}}</th>
                <td>{{$orders->products->name}}</td>
                <td>{{$orders->warehouses->name}}</td>
                <td>{{$orders->users->name}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
