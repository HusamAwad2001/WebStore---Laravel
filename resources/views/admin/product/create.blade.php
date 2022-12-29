@extends('layouts.app')

@section('content')
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div><br/>
        @endif
        <div class="col-md-12 col-sm-12">
            <div class="card card-topline-yellow">
                <div class="card-head">
                    <header>Add Product</header>
                </div>
                <div class="card-body " id="bar-parent">
                    <form method="POST"
                        action="{{ isset($products) ? route('products.update', $products->id) : url('products') }}" enctype="multipart/form-data">
                        @csrf
                        @if (isset($products))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="simpleFormEmail">Product Name</label>
                            <input type="text" required name="name" value="{{ isset($products) ? $products->name : '' }}"
                                class="form-control" id="simpleFormEmail" placeholder="Enter product name">
                        </div>
                         <div class="form-group">
                          <label for="simpleFormEmail">Category Name</label>
                          <br>

                        <select  name="category_id" class="form-control"  required>
                           @isset($products->categories)
                            <option value="{{$products->categories->id}}">{{$products->categories->name}}</option>
                           @endisset

                           <option value="0">Add The Category</option>
                            @foreach ($category as $categor )

                            <option value="{{$categor->id}}">{{$categor->name}}</option>
                            @endforeach

                          </select>
</div>
                        <div class="form-group">
                            <label for="simpleFormEmail">Warehouse Name</label>
                            <br>

                            <select  name="warehouse_id" class="form-control"  required>
                                @isset($products->warehouses)
                                    <option value="{{$products->warehouses->id}}">{{$products->warehouses->name}}</option>
                                @endisset

                                <option value="0">Add The Category</option>
                                @foreach ($warehouse as $warehousess )

                                    <option value="{{$warehousess->id}}">{{$warehousess->name}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="simpleFormEmail">Product Description</label>
                            <input type="text" required name="description" value="{{ isset($products) ? $products->description : '' }}"
                                class="form-control" id="simpleFormEmail" placeholder="Enter product description">
                        </div>
                          <div class="form-group">
                            <label for="simpleFormEmail">Product Count</label>
                            <input type="number" required name="count" value="{{ isset($products) ? $products->count : '' }}"
                                class="form-control" id="count" placeholder="Enter product count">
                        </div>
                        <div class="form-group">
                            <label for="simpleFormEmail">Product Count</label>
                            <input type="file"  name="image" value="{{ isset($products) ? $products->image : '' }}"
                                class="form-control" id="image" >
                        </div>
                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" name="status"
                                    @isset($products)
                            @if ($products->status == '1')
                            checked
                            @endif
                            @endisset
                                    id="optionsRadios1" value="1" checked>
                                <label for="optionsRadios1">
                                    Active
                                </label>
                            </div>
                            <div class="radio">
                                <input type="radio"
                                    @isset($products)
                            @if ($products->status == '0')
                            checked
                            @endif
                            @endisset
                                    name="status" id="optionsRadios2" value="0">
                                <label for="optionsRadios2">
                                    No Active
                                </label>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
