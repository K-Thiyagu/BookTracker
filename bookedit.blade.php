<!DOCTYPE html>
<html>

<head>
    <title>bookedit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header ">
                <h1 class="text-center">Book Edit Page</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('bookupdate/' . $bookedit->id) }}" method="post">
                    {!! csrf_field() !!}
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="{{ $bookedit->name }}" class="form-control" />
                    <label for="author">Author:</label>
                    <input type="text" name="author" id="author" value="{{ $bookedit->author }}" class="form-control"></br>
                    <input type="submit" value="Update" class="btn btn-success"></br>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
