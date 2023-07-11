<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexBook</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td {
        padding: 5px;

    }

    a {
        text-decoration: none;
        font-size: 15px;
        background-color: blue;
        color: white;
        padding: 2px;
        border-radius: 3px;
    }
</style>

<body>
    <a href="reader">Add Reader</a>
    <a href="reader">Refresh</a>
    {{-- <a href="http://127.0.0.1:8000/city">City Page</a> --}}
    <h1>Show All Reader Details</h1>
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
                    <td><a href="edit/{{ $read->id }}">Edit</a>
                    <a style="background:red;" href="delete/{{ $read->id }}">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>

{{--
SELECT students.id, students.name,students.phone_number,students.course, cities.name
         FROM students
         INNER JOIN cities on
         students.city_id = cities.id --}}
{{--
         return DB::table('students')
         ->join('cities', 'cities.id' , " = " , 'students.city_id')
         ->get(); --}}

         {{-- $students = Student::select('students.*')
     ->join('cities', 'students.city_id' ,'=' , 'cities.id')
     ->whereNull('cities.id')->first();
     Student::doesntHave('City')->get(); --}}
