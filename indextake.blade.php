<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexTakeOut</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/indextake.css') }}">
</head>

<body>

    <h1 style="margin-top: 10px;text-align:center;">Show All TakeOut Details</h1>
    <div class="link">
        <a class="btn" href="takeout"> <i class="bi bi-plus-lg"></i>Add New Takeout </a>
        <a class="btn" href="/"><i class="bi bi-house-door-fill"></i> Home Page</a>
        </div>
    <h2>Data Entries</h2>
    <form action="/indextake" method="post">
        @csrf
        <label for="start_date">Start Date:</label>
        <input type="date" name="start_date" id="start_date">

        <label for="end_date">End Date:</label>
        <input type="date" name="end_date" id="end_date">

        <button type="submit">Filter</button>
        {{-- <nav class="navbar bg-body-tertiary">
            <div class="container_fluid">
            <form class="d-flex" class="m-4" action="/indexbook" method="post">
                @csrf
                <input  class="form-control form-control-sm me-1 " type="text" name="name" id="name" aria-label="Search" placeholder="Search..........">
                <button class="btn btn-warning" type="submit">Filter</button>
            </form>
        </div>
            </nav> --}}
        </div>
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
                        <a class="btn btn-primary"  href="takeeditpage/{{ $take->id }}"><i id="icon" class="bi bi-pencil-fill"></i>
                            Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
    {{-- <div class="col-md-10 m-3 ">
        {!! $takeouts->links() !!}
    </div> --}}

</body>

</html>
