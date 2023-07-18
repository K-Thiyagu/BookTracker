<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book</title>
    <link rel="stylesheet" href="{{ asset('/book.css') }}">
</head>

<body>
    <div class="container">
        <h2> Book Form</h2>
        <form action="/bookpage" method="post">

            <div class="form_group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}"
                    class="@error('name') error1 @enderror" />

                @error('name')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <div class="form_group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" value="{{ old('author') }}"
                    class="@error('author') error1 @enderror"/>

                @error('author')
                    <div class="error">{{ $message }}</div>
                @enderror

            </div>

            <button type="submit">Submit</button>
            @csrf
        </form>
    </div>
</body>

</html>
