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
    <form action="/bookpage" method="post">
      <div class="form_group">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"
        class="@error('name') error1 @enderror" />
        @error('name')
        <div class="error">{{ $message }}</div>
    @enderror
      </div>
      <div class="form_group">
        <label for="author">Author:</label>
        <input type="text" name="author" id="author"
        class="@error('author') error1 @enderror"/>
        @error('author')
        <div class="error">{{ $message }}</div>
    @enderror
      </div>
      <button type="submit">Submit</button>
      @csrf
    </form>

</body>
</html>
