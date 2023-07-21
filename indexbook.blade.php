<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexBook</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('/indexbook.css') }}">
</head>
<body>

    <h1 style="margin-top: 10px;text-align:center;">Show All Book Details</h1>
    <div class="link">
    <a class="btn" href="book"> <i class="bi bi-plus-lg"></i>Add New Book</a>
    <a class="btn" href="/"><i class="bi bi-house-door-fill"></i> Home Page</a>

    <nav class="navbar bg-body-tertiary">
    <div class="container_fluid">
    <form class="d-flex" class="m-4" action="/indexbook" method="post">
        @csrf
        <input  class="form-control form-control-sm me-1 " type="text" name="name" id="name" aria-label="Search" placeholder="Search..........">
        <button class="btn btn-warning" type="submit">Filter</button>
    </form>
</div>
    </nav>
</div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookdata as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->author }}</td>
                    <td><a class="btn btn-primary"  href="bookedit/{{ $book->id }}" > <i id="icon" class="bi bi-pencil-fill" ></i> Edit</a>
                        <a class="btn btn-danger"  href="bookdelete/{{ $book->id }}"> <i class="bi bi-trash3"></i> Delete</a>
                        <a class="btn btn-success"  href="past/{{ $book->id }}"> <i id= "Histry" class="bi bi-clock-history"></i> Last take-out</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-md-10 m-3">
        {!! $bookdata->links() !!}
    </div>
</body>

</html>
