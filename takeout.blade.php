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
                        <option value="" selected disabled>--Select Here--</option>

                        @foreach ($book_id as $book)
                            <option value="{{ old('id', $book->id) }}">{{ old('name', $book->name ?? 'none') }}
                            </option>
                        @endforeach

                    </select></br>

                    <label for="reader_id" class="fs-5 mb-1">Reader</label>

                    <select id="reader_id" name="reader_id" class="form-control">
                        <option value="" selected disabled>--Select Here--</option>

                        @foreach ($reader_id as $reader)
                            <option value="{{ old('id', $reader->id) }}">{{ old('name', $reader->name ?? 'none') }}
                            </option>
                        @endforeach

                    </select></br>

                    <label for="start_date" class="fs-5 mb-1">Start_date</label>
                    <input type="date" name="start_date" id="start_date" value="{{ old('start_date') }}"
                        class="form-control" class="@error('start_date') error1 @enderror" />

                    @error('start_date')
                        <div class="text-danger" class="error">{{ $message }}</div></br>
                    @enderror </br>

                    <input type="submit" value="Save" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
