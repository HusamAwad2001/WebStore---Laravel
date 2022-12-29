@extends('layouts.app')

@section('content')




<table class="table table-striped">
    <thead>
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br/>
    @endif
      <h3>All Warehouses</h3>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($warehouse as $warehouses)


      <tr>
        <th scope="row">{{$warehouses->id}}</th>
        <td>{{$warehouses->name}}</td>
        <td>
            @if ($warehouses->status == '1')
                Active
                @else
                Not Active
            @endif
        </td>
        <td>
            <form action="{{ route('warehouses.destroy', $warehouses->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            <a href="{{route('warehouses.edit',$warehouses->id)}}" class="btn btn-primary">Edit</a>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
