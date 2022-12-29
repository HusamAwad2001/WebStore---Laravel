@extends('layouts.app')

@section('content')




<table class="table table-striped">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br/>
    @endif
  <h3>All Product</h3>

    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Code</th>
        <th scope="col">Category</th>
        <th scope="col">Warehouse</th>
        <th scope="col">Description</th>
        <th scope="col">Count</th>
        <th scope="col">Status</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>

      </tr>
    </thead>

    <tbody>
        @foreach ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->name}}</td>
        <td>#{{$product->code}}</td>
        <td>
          @if(empty($product->categories['name']))

           No Category
          @else
          {{$product->categories['name']}}
          @endif

        </td>
          <td>
              @if(empty($product->warehouses['name']))

                  No Warehouses
              @else
                  {{$product->warehouses['name']}}
              @endif

          </td>
        <td>{{$product->description}}</td>
        <td>{{$product->count}}</td>

        <td>
          @if ($product->status ==1)
          Active
          @else
          Not Active

          @endif
        </td>
        <td>
          <img src="{{asset($product->image)}}" style="width:150px">
        </td>
        <td>
          <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>

            <form action="{{ route('products.destroy', $product->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
