<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexTakeOut</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/indextake.css') }}">
</head>

<body>
    <div class="container">

        <h1 style="margin-top: 10px;text-align:center;">Show All TakeOut Details</h1>

        <form method="GET" action="/indextake">
            {{-- @csrf --}}
                <div class="col-md-5 pt-4">
                    <div class="link">
                        <a class="btn btn-success" href="takeout"><i class="bi bi-plus-lg"></i> Add New Takeout</a>
                        <a href="/"><i class="bi bi-house-door-fill"></i> Home Page</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <label>Start Date:</label>
                    <input type="date" name="start_date" class="form-control">
                </div>
                <div class="col-md-3">
                    <label>End Date:</label>
                    <input type="date" name="end_date" class="form-control">
                </div>
                <div class="col-md-1 pt-4">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
        </form>
        <table class="table table-bordered table-hover">
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
                            <a href="takeeditpage/{{ $take->id }}"><i id="icon" class="bi bi-pencil-fill"></i> Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
