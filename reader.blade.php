<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reader</title>
    <link rel="stylesheet" href="{{asset('/reader.css')}}">
</head>

<body>
    <div class="container">
    <h1>Reader</h1>
    <form action="/readerkpage" method="post">
        <div class="form_group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="@error('name') error1 @enderror" />
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form_group">
            <label for="phone">Phone:</label>
            <input type="number" name="phone" id="phone" class="@error('phone') error1 @enderror" />
            @error('phone')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">Submit</button>
        @csrf
    </form>
</div>

</body>

</html>
