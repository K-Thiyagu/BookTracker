<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexBook</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/indexbook.css') }}">
</head>
<body>

    <h1 style="margin-top: 10px;text-align:center;">Show All Book Details</h1>
    <div class="link">
    <a href="book"> <i class="bi bi-plus-lg"></i>Add New Book</a>
    <a href="/"><i class="bi bi-house-door-fill"></i> Home Page</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookdata as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td><a  href="bookedit/{{ $book->id }}" > <i id="icon" class="bi bi-pencil-fill"></i> Edit</a>
                        <a style="background:red;" href="bookdelete/{{ $book->id }}"> <i class="bi bi-trash3"></i> Delete</a>
                        <a style="background:rgb(111, 116, 112);" href="past/{{ $book->id }}"> <i id= "Histry" class="bi bi-clock-history"></i> Last take-out</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
