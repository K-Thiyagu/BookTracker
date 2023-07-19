<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Reader</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/indexreader.css') }}">
</head>

<body>

    <h1  style="margin-top: 10px;text-align:center;">Show All Reader Details</h1>
    <div class="link">
    <a href="reader"> <i class="bi bi-plus-lg"></i>Add New Reader </a>
    <a href="/"><i class="bi bi-house-door-fill"></i> Home Page</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($readdata as $read)
                <tr>
                    <td>{{ $read->id }}</td>
                    <td>{{ $read->name }}</td>
                    <td>{{ $read->phone }}</td>
                    <td><a href="readeredit/{{ $read->id }}"><i id="icon" class="bi bi-pencil-fill"></i> Edit</a>
                        <a style="background:red;" href="readerdelete/{{ $read->id }}"><i class="bi bi-trash3"></i> Delete</a>
                        <a style="background:rgb(111, 116, 112);" href="history/{{ $read->id }}"><i id= "Histry" class="bi bi-clock-history"></i>  Past History</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
