<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Past-Out History</title>
</head>

<body>

    <h1>Book id: {{ $takes->book_id ?? 'none' }}<span style="font-size: 15px;color:blue;"> is studied by Reader ID  </span> {{ $takes->reader_id}}.</h1>
    <p>Start date : {{ $takes->start_date ?? 'none' }}</p>
    <p>End date : {{ $takes->end_date ?? 'none' }}</p>

</body>

</html>