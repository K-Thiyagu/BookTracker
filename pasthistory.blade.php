<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Past History</title>
</head>

<body>

    <h1>Reader id: {{ $history->reader_id ?? 'none' }}<span style="font-size: 15px;color:blue;"> is studied by Book ID  </span> {{$history->book_id}}.</h1>
    <p>Start date : {{ $history->start_date ?? 'none' }}</p>
    <p>End date : {{ $history->end_date ?? 'none' }}</p>

</body>

</html>
