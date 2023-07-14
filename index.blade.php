<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
</head>
<body>
    <!-- Display book information -->
@foreach ($books as $book)
<h2>{{ $book->name }}</h2>
<p>{{ $book->author }}</p>

{{-- <!-- Calculate and display the number of days -->
@php
    $startDate = \Carbon\Carbon::parse($book->start_date);
    $endDate = \Carbon\Carbon::parse($book->end_date);
    $numberOfDays = $startDate->diffInDays($endDate);
@endphp
<p>Number of days: {{ $numberOfDays }}</p> --}}
@endforeach

</body>
</html>
