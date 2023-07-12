<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Takeout-Edit-page</title>
</head>

<body>
    <h1>TakeOut</h1>
    <form action="{{ url('takepageedit/'. $take_edit->id) }}" method="post">
        <div class="form_grp">
            <label for="book_id">Book:</label>
            <select id="book_id" name="book_id">
                @foreach ($take_edit as $take)
                    <option value="{{ $take->id }}">{{ $take->name ?? 'none' }}</option>
                @endforeach
            </select>
        </div>
        <div class="form_grp">
            <label for="reader_id">Reader:</label>
            <select id="reader_id" name="reader_id">
                @foreach ($take as $take)
                    <option value="{{ $take->id }}">{{ $take->name ?? 'none' }}</option>
                @endforeach
            </select>
        </div>
        <div class="form_grp">
            <label for="start_date">start_date:</label>
            <input type="date" name="start_date" id="start_date" value="{{ $take_edit->start_date }}" />
        </div>
        <div class="form_grp">
            <label for="end_date">End_date:</label>
            <input type="date" name="end_date" id="end_date" value="{{ $take_edit->end_date }} "/>
        </div>
        <div class="form_grp">
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="4" cols="20" value="{{ $take_edit->feedback }}"></textarea>
        </div>
        <button type="submit">Submit</button>
        @csrf
    </form>

</body>
</html>
