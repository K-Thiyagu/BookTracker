<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexTakeOut</title>
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
        text-align: center;

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
    <a href="takeout">Add TakeOut</a>
    {{-- <a href="book">Add Book</a> --}}
    {{-- <a href="reader">Add Reader</a> --}}
    <a href="indextake">Refresh</a>
    {{-- <a href="http://127.0.0.1:8000/city">City Page</a> --}}
    <h1>Show All TakeOut Details</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Book_Id</th>
                <th>Reader_Id</th>
                <th>Start_date</th>
                <th>End_date</th>
                <th>Feedback</th>
                <th>No.of Days</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($takedata as $take)
                <tr>
                    <td>{{ $take->id }}</td>
                    <td>{{ $take->book_id }}</td>
                    <td>{{ $take->reader_id }}</td>
                    <td>{{ $take->start_date }}</td>
                    <td>{{ $take->end_date }}</td>
                    <td>{{ $take->feedback }}</td>
                    <td>{{ $take->numDays }}</td>
                    <td>
                        <a href="takeeditpage/{{ $take->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>


