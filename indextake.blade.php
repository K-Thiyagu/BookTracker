<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexTakeOut</title>
    <link rel="stylesheet" href="{{ asset('/indextake.css') }}">
</head>

<body>
    <a href="takeout">Add TakeOut</a>
    <a href="indextake">Refresh</a>
    <h1 style="margin-top: 10px;text-align:center;">Show All TakeOut Details</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>BookName</th>
                <th>ReaderName</th>
                <th>Start_date</th>
                <th>End_date</th>
                <th>No.of Days</th>
                <th>Feedback</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($takeouts as $take)
                <tr>
                    <td>{{ $take->id }}</td>
                    <td>{{ $take->book->name ?? 'None' }}</td>
                    <td>{{ $take->reader->name ?? 'None' }}</td>
                    <td>{{ $take->start_date }}</td>
                    <td>{{ $take->end_date }}</td>
                    <td>{{ $take->numDays }}</td>
                    <td>{{ $take->feedback }}</td>
                    <td>
                        <a href="takeeditpage/{{ $take->id }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
