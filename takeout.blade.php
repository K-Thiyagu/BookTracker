<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>takeout</title>
</head>

<body>
    <h1>TakeOut</h1>
    <form action="/takepage" method="post">
        <div class="form_grp">
            <label for="book_id">Book:</label>
            <select id="book_id" name="book_id">
                @foreach ($book_id as $book)
                    <option value="{{ $book->id }}">{{ $book->name ?? 'none' }}</option>
                @endforeach
            </select>
        </div>
        <div class="form_grp">
            <label for="reader_id">Reader:</label>
            <select id="book_id" name="book_id">
                @foreach ($reader_id as $reader)
                    <option value="{{ $reader->id }}">{{ $reader->name ?? 'none' }}</option>
                @endforeach
            </select>
        </div>
        <div class="form_grp">
            <label for="start_date">start_date:</label>
            <input type="date" name="start_date" id="start_date" />
        </div>
        <div class="form_grp">
            <label for="end_date">start_date:</label>
            <input type="date" name="end_date" id="end_date" />
        </div>
        <div class="form_grp">
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" cols="20"></textarea>
        </div>
        <button type="submit">Submit</button>
        @csrf
    </form>

</body>
</html>
