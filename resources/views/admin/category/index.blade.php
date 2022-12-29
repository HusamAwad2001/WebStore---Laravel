@extends('layouts.app')

@section('content')




<table class="table table-striped">
    @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br/>
    @endif
  <h3>All Category</h3>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)


      <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>
            @if ($category->status == '1')
                Active
                @else
                Not Active
            @endif
        </td>
        <td>
            <form action="{{ route('category.destroy', $category->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary">Edit</a>


        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
