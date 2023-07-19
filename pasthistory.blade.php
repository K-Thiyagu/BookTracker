<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Past History</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/pasthistory.css') }}">
</head>

<body>
    {{-- <a href="/indexreader">Go Back</a> --}}
    <h2 style="text-align:center; margin-top:10px;">Takeout History</h2>
    <a href="/indexreader"><i class="bi bi-arrow-left"></i> Go Back</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Reader Name</th>
                <th>Book Name</th>
                <th>Takeout Date</th>
                <th>Return Dtae </th>
                <th>Feedback</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($history as $historys)
                <tr>
                    <td>{{ $historys->id ?? 'none' }}</td>
                    <td>{{ $historys->reader->name ?? 'none' }}</td>
                    <td>{{ $historys->book->name ?? 'none' }}</td>
                    <td>{{ $historys->start_date ?? 'none' }}</td>
                    <td>{{ $historys->end_date ?? 'Pending' }}</td>
                    <td>{{ $historys->feedback ?? 'No FeedBack' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
