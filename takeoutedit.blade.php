<!DOCTYPE html>
<html>
<head>
    <title>Takeout Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<div class="container">
    <div class="card mt-5">
        <div class="card-header ">
            <h1 class="text-center">Takeout Edit Page</h1>
        </div>
        <div class="card-body">
            <form action="{{ url('updateEdit/'.$takeoutedit->id) }}" method="post">
                {!! csrf_field() !!}
                <label for="book_id">Book</label></br>
                <select name="book_id" id="book_id"  class="form-control">
                    @foreach ($books as $book )
                        <option value="{{ $book ->id}}" >{{ $book ->name ?? 'none'}}</option>
                    @endforeach
                </select>
                <label for="reader_id">Reader</label></br>
                <select name="reader_id" id="reader_id"  class="form-control">
                    @foreach ($readers as $reader )
                        <option value="{{ $reader ->id}}" >{{ $reader ->name ?? 'none'}}</option>
                    @endforeach
                </select></br>
                <label for="start_date">Start_date</label>
                <input type="date" name="start_date" id="start_date" value="{{ $takeoutedit->start_date }}"class="form-control"></br>
                <label for="end_date">End_date</label>
                <input type="date" name="end_date" id="end_date" class="form-control"/></br>
                <label for="feedback">Feedback</label>
                <input type="text" id="feedback" name="feedback" rows="4" cols="20" value="{{ $takeoutedit->feedback}}" class="form-control"/></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>
        </div>
    </div>
</div>

</body>
</html>
