<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Other content in your blade template -->

<form action="{{ route('books.borrow', ['bookId' => $book->id, 'readerId' => $reader->id]) }}" method="POST">
    @csrf
    <!-- Your form fields for book borrowing -->
    <button type="submit">Borrow</button>
</form>

@if ($errors->has('book'))
    <div class="alert alert-danger">{{ $errors->first('book') }}</div>
@endif

<!-- Other content in your blade template -->

</body>
</html>