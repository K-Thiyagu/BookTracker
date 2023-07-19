<!DOCTYPE html>
<html>

<head>
    <title>Takeout Edit Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header ">
                <h1 class="text-center">Takeout Edit Page</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('updateEdit/' . $takeoutedit->id) }}" method="post">

                    {!! csrf_field() !!}

                    <label for="book_id">Book</label></br>
                    <select name="book_id" id="book_id" class="form-select">
                             {{-- <option value="" selected disabled>--Select Here--</option> --}}
                        {{-- @foreach ($books as $book) --}}
                            <option value="{{  $takeoutedit->book->id  }}">{{ $takeoutedit->book->name }}</option>
                        {{-- @endforeach --}}

                    </select></br>

                    <label for="reader_id">Reader</label></br>

                    <select name="reader_id" id="reader_id" class="form-select">
                            {{-- <option value="" selected disabled>--Select Here--</option> --}}
                        {{-- @foreach ($readers as $reader) --}}
                            <option value="{{ $takeoutedit->reader->id }}">{{ $takeoutedit->reader->name }}</option>
                        {{-- @endforeach --}}
                    </select></br>

                    <label for="start_date">Start_date</label>
                    <input type="date" name="start_date" id="start_date"
                        value="{{ old('start_date', $takeoutedit->start_date )}}"class="form-control"></br>

                    <label for="end_date">End_date</label>
                    <input type="date" name="end_date" id="end_date" value="{{ old('end_date', $takeoutedit->end_date )}}" class="form-control"
                        class="@error('end_date') error1 @enderror" />

                    @error('end_date')
                        <div class="text-danger" class="error">{{ $message }}</div>
                    @enderror</br>


                    <label for="feedback">Feedback</label>
                    <input type="text" id="feedback" name="feedback" rows="4" cols="20"
                        value="{{old('feedback', $takeoutedit->feedback )}}" class="form-control" class="@error('feedback') error1 @enderror">                        @error('feedback')
                        <div class="text-danger" class="error">{{ $message }}</div>
                    @enderror</br>


                    <input type="submit" value="Update Takeout" class="btn btn-success">
                    <a href="/indextake" class="btn btn-success">Go Back</a>

                </form>
            </div>
        </div>
    </div>

</body>

</html>
