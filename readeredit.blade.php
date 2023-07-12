<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reader</title>
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
    <h1>Reader</h1>
    <form action="{{ url('update/'. $readeredit->id) }}" method="post">
        <div class="form_group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{$readeredit->name}}">
        </div>
        <div class="form_group">
            <label for="phone">Phone:</label>
            <input type="number" name="phone" id="phone" value="{{$readeredit->phone}}" >
        </div>
        <button type="submit">Update</button>
        @csrf
    </form>


</body>

</html>
