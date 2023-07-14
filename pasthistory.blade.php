<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Past History</title>
    <style>
        th,td,table {
               border: 1px solid black;
               text-align: center
        }
        </style>
</head>

<body>

    {{-- <h1>Reader id: {{ $history->reader_id ?? 'none' }}<span style="font-size: 15px;color:blue;"> is studied by Book ID  </span> {{$history->book_id}}.</h1>
    <p>Start date : {{ $history->start_date ?? 'none' }}</p>
    <p>End date : {{ $history->end_date ?? 'none' }}</p> --}}
    <!-- Other content in your blade template -->

<h2>Takeout History</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Reader ID</th>
            <th>Takeout Date</th>
            <th>Feedback    </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($history as $historys)
            <tr>
                <td>{{ $historys->id ?? 'none' }}</td>
                <td>{{ $historys->reader_id ?? 'none' }}</td>
                <td>{{ $historys->start_date ?? 'none' }}</td>
                <td>{{ $historys->feedback ?? 'none' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<!-- Other content in your blade template -->


</body>

</html>
