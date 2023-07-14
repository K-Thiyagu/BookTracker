<!DOCTYPE html>
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
</html>
