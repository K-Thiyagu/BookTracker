<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Past-Out History</title>
    <link rel="stylesheet" href="{{ asset('/past_out.css') }}">

</head>

<body>

<h2>Past Takeouts for Book : <span> {{ $book->name }} </span></h2>
@if ($pastTakeouts->isEmpty())
    <p>No past takeouts found for this book.</p>
@else
    <table>
        <thead>
            <tr>
                <th>Reader</th>
                <th>Takeout Date</th>
                <th>Return Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pastTakeouts as $takeout)
                <tr>
                    <td>{{ $takeout->reader->name }}</td>
                    <td>{{ $takeout->start_date }}</td>
                    <td>{{ $takeout->end_date ?? 'Pending' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
</body>

</html>









































