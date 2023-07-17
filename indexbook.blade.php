<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexBook</title>
    <link rel="stylesheet" href="{{ asset('/indexbook.css') }}">
</head>
<body>
    <a href="book">Add Book</a>
    <a href="indexbook">Refresh</a>
    <h1 style="margin-top: 10px;text-align:center;">Show All Book Details</h1>
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
                    <td><a href="bookedit/{{ $book->id }}">Edit</a>
                        <a style="background:red;" href="bookdelete/{{ $book->id }}">Delete</a>
                        <a style="background:rgb(131, 219, 43);" href="past/{{ $book->id }}">Last take-out</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
