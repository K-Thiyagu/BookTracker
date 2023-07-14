@extends('layout')
@section('content')

    <div class="card mt-5">
        <div class="card-header ">
            <h1 class="text-center">Takeout Edit Page</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('updateEdit/'.$takeoutedit->id) }}" method="post">
                {!! csrf_field() !!}
                {{-- @method("PATCH") --}}
                <label for="book_id">Book</label></br>
                <input type="text" name="book_id" id="book_id" value="{{ $takeoutedit->book_id}}"class="form-control" />
                <label for="reader_id">Reader</label></br>
                <input type="text" name="reader_id" id="reader_id" value="{{ $takeoutedit->reader_id}}" class="form-control"></br>
                <label for="start_date">start_date</label>
                <input type="date" name="start_date" id="start_date" value="{{ $takeoutedit->start_date }}"class="form-control"></br>
                <label for="end_date">End_date</label>
                <input type="date" name="end_date" id="end_date" value="{{ $takeoutedit->end_date}}" class="form-control"/></br>
                <label for="feedback">Feedback</label>
                <input type="text" id="feedback" name="feedback" rows="4" cols="20" value="{{ $takeoutedit->feedback}}" class="form-control"/></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        </div>
    </div>
@stop
