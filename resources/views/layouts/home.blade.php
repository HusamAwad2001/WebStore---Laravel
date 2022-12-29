@extends('layouts.app')

@section('content')

        <div class="row">
            <div class="state-overview">
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel blue">
                        <div class="symbol">
                            <i class="fa fa-first-order usr-clr"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{$orderCount}}">{{$orderCount}}</p>
                            <p>Orders Count</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel green-bgcolor">
                        <div class="symbol">
                            <i class="fa fa-product-hunt"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{$product}}">{{$product}}</p>
                            <p>Product Count</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel grey">
                        <div class="symbol">
                            <i class="fa fa-save"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{$warehouse}}">{{$warehouse}}</p>
                            <p>Warehouse Count</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="overview-panel orange">
                        <div class="symbol">
                            <i class="fa fa-random"></i>
                        </div>
                        <div class="value white">
                            <p class="sbold addr-font-h1" data-counter="counterup" data-value="{{$category}}">{{$category}}</p>
                            <p>Category Count</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end widget -->

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card  card-topline-yellow">
                    <div class="card-head">
                        <header>All Orders</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-wrap">
                            <div class="table-responsive">
                                <table class="table display product-overview mb-30" id="support_table">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
