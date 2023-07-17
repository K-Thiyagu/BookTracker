<!DOCTYPE html>
<html>

<head>
    <title>Takeout page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        @yield('content')
        {{-- //error message --}}
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="card mt-5">
            <div class="card-header ">
                <h1 class="text-center"> Takeout Page</h1>
            </div>
            <div class="card-body">
                <form action="/takepage" method="post">
                    {!! csrf_field() !!}
                    <label for="book_id" class="fs-5 fw-normal mb-1">Book</label>
                    <select id="book_id" name="book_id" class="form-control">
                        @foreach ($book_id as $book)
                            <option value="{{ $book->id }}">{{ $book->name ?? 'none' }}</option>
                        @endforeach
                    </select></br>
                    <label for="reader_id" class="fs-5 mb-1">Reader</label>
                    <select id="reader_id" name="reader_id" class="form-control">
                        @foreach ($reader_id as $reader)
                            <option value="{{ $reader->id }}">{{ $reader->name ?? 'none' }}</option>
                        @endforeach
                    </select></br>
                    <label for="start_date" class="fs-5 mb-1">Start_date</label>
                    <input type="date" name="start_date" id="start_date" class="form-control"
                        class="@error('start_date') error1 @enderror" />
                    @error('start_date')
                        <div class="text-danger" class="error">{{ $message }}</div></br>
                    @enderror
                    </br>
                    <label for="end_date" class="fs-5 mb-1">End_date</label>
                    <input type="date" name="end_date" id="end_date" class="form-control"
                        class="@error('end_date') error1 @enderror" />
                    @error('end_date')
                        <div class="text-danger" class="error">{{ $message }}</div></br>
                    @enderror
                    </br>
                    <label for="feedback" class="fs-5 mb-1">Feedback</label>
                    <textarea id="feedback" name="feedback" value ="{{ old('feedback')}}" class="form-control" rows="4" cols="20"></textarea></br>
                    <input type="submit" value="Save" class="btn btn-success">
                </form>

            </div>
        </div>
    </div>
</body>

</html>





















































{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>takeout</title>
    <style>
        .error {
           color: red;
           font-size: 12px;
           margin-top: 4px;
       }

       .error1 {
           border: 1px solid red;
       }
   </style>
</head>

<body>
    <h1>TakeOut</h1>
    <form action="/takepage" method="post">
        <div class="form_grp">
            <label for="book_id">Book:</label>
            <select id="book_id" name="book_id" >
                @foreach ($book_id as $book)
                    <option value="{{ $book->id }}">{{ $book->name ?? 'none' }}</option>
                @endforeach
            </select>
        </div>
        <div class="form_grp">
            <label for="reader_id">Reader:</label>
            <select id="reader_id" name="reader_id">
                @foreach ($reader_id as $reader)
                    <option value="{{ $reader->id }}">{{ $reader->name ?? 'none' }}</option>
                @endforeach
            </select>
        </div>
        <div class="form_grp">
            <label for="start_date">start_date:</label>
            <input type="date" name="start_date" id="start_date" class="@error('start_date') error1 @enderror" />
            @error('start_date')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form_grp">
            <label for="end_date">End_date:</label>
            <input type="date" name="end_date" id="end_date" class="@error('end_date') error1 @enderror" />
            @error('end_date')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form_grp">
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" cols="20"></textarea>
        </div>
        <button type="submit">Submit</button>
        @csrf
    </form>
</body>
</html> --}}
