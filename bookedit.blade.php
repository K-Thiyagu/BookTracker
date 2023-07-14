@extends('layout')
@section('content')

    <div class="card mt-5">
        <div class="card-header ">
            <h1 class="text-center">Book Edit Page</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('bookupdate/'. $bookedit->id) }}" method="post">
                {!! csrf_field() !!}
                {{-- @method("PATCH") --}}
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ $bookedit->name }}" class="form-control" />
                <label for="author">Author:</label>
                <input type="text" name="author" id="author" value="{{ $bookedit->author }}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        </div>
    </div>
@stop
