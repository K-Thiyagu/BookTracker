<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Reader</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        padding: 5px;

    }

    a {
        text-decoration: none;
        font-size: 15px;
        background-color: blue;
        color: white;
        padding: 2px;
        border-radius: 3px;
    }
</style>

<body>
    <a href="reader">Add Reader</a>
    <a href="reader">Refresh</a>
    <h1>Show All Reader Details</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($readdata as $read)
                <tr>
                    <td>{{ $read->id }}</td>
                    <td>{{ $read->name }}</td>
                    <td>{{ $read->phone }}</td>
                    <td><a href="readeredit/{{ $read->id }}">Edit</a>
                        <a style="background:red;" href="readerdelete/{{ $read->id }}">Delete</a>
                        <a style="background:rgb(131, 219, 43);" href="history/{{ $read->id }}">Past History</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
