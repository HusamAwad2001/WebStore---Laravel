@extends('layouts.app')

@section('content')
    <div class="row">
        
                                      @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div><br/>
                                            @endif
        <div class="col-md-12 col-sm-12">
            <div class="card card-topline-yellow">
                <div class="card-head">
                    <header>Add Warehouse</header>
                </div>
                <div class="card-body " id="bar-parent">
                    <form method="POST"
                        action="{{ isset($warehouse) ? route('warehouses.update', $warehouse->id) : url('warehouses') }}">
                        @csrf
                        @if (isset($warehouse))
                            @method('PUT')
                        @endif
                        <div class="form-group">
                            <label for="simpleFormEmail">Warehouse Name</label>
                            <input type="text" name="name" value="{{ isset($warehouse) ? $warehouse->name : '' }}"
                                class="form-control" id="simpleFormEmail" placeholder="Enter email address">
                        </div>

                        <div class="form-group">
                            <div class="radio">
                                <input type="radio" name="status"
                                    @isset($warehouse)
                            @if ($warehouse->status == '1')
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
                                    @isset($warehouse)
                            @if ($warehouse->status == '0')
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
