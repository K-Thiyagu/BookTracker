@extends('layout')
@section('content')

    <div class="card mt-5">
        <div class="card-header ">
            <h1 class="text-center">Reader Edit Page</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('update/' . $readeredit->id) }}" method="post">
                {!! csrf_field() !!}
                {{-- @method("PATCH") --}}
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{ $readeredit->name }}" class="form-control" />
                <label>Phone</label></br>
                <input type="number" name="phone" id="phone" value="{{ $readeredit->phone }}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        </div>
    </div>
@stop
