<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reader</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('/reader.css')}}">
</head>

<body>
    <div class="container">
    <h1>Reader Form</h1>
    <form action="/readerkpage" method="post">
        <div class="form_group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name')}}" class="@error('name') error1 @enderror" />
            <i class="bi bi-person"></i>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form_group">
            <label for="phone">Phone:</label>
            <input type="number" name="phone" id="phone" value="{{ old('phone')}}" class="@error('phone') error1 @enderror" />
            <i class="bi bi-phone"></i>
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
