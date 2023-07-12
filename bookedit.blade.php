<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book</title>
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
    <h2>Books</h2>
    <form action="{{ url('bookupdate/'. $bookedit->id) }}" method="post">
      <div class="form_group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $bookedit->name }}">
      </div>
      <div class="form_group">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author" value="{{ $bookedit->author }}">
      </div>
      <button type="submit">Update</button>
      @csrf
    </form>

</body>
</html>
