<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Reader;
use App\Models\Takeout;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use PhpParser\Node\Expr\Cast\Bool_;

class BookTrackerController extends Controller
{
    //--->Main Page
    public function main()
    {
        return view('main');
    }
    //---->Book Details
    public function book()
    {
        return view('book');
    }

    public function insertbook(Request $request)
    {
        $data = $request->validate(
            [
                'name' => ['required', 'unique:books,Name'],
                'author' => ['required']
            ]
        );
        $books = Book::create($data);

        return 'Record Insert Successfully ! <a href = "/book">Click here go to back </a>' . $books->name;
    }

    public function bookedit($id)
    {
        $bookedit = Book::find($id);

        return view('bookedit', ['bookedit' => $bookedit]);
    }

    public function bookupdate(Request $request, $id)
    {
        $bookedit = Book::find($id);
        $bookedit->name = $request->input('name');
        $bookedit->author = $request->input('author');
        $bookedit->save();

        return 'user update successfully !<a href="/indexbook">Click here to see list</a>';
    }

    public function bookdel($id)
    {
        $bookedit = Book::find($id);
        $bookedit->delete();

        return 'User Delete !<a href="/indexbook">Click here to see list</a> ';
    }
    //----->Reader Details
    public function reader()
    {
        return view('reader');
    }

    public function insertReader(Request  $request)
    {
        $read = $request->validate(
            [
                'name' => ['required', 'unique:Readers,Name'],
                'phone' => ['required', 'numeric', 'digits:10', 'starts_with:5,6,7,8,9']
            ]
        );
        $readers = Reader::create($read);

        return 'Record Insert Successfully ! <a href = "/reader">Click here go to back </a>' . $readers->name;
    }

    public function readeredit($id)
    {
        $readeredit = Reader::find($id);

        return view('readeredit', ['readeredit' => $readeredit]);
    }

    public function readerupdate(Request $request, $id)
    {
        $readerup = Reader::find($id);
        $readerup->name = $request->input('name');
        $readerup->phone = $request->input('phone');
        $readerup->save();

        return 'user update successfully !<a href="/indexreader">Click here to see list</a>';
    }

    public function readerdel($id)
    {
        $readerdel = Reader::find($id);
        $readerdel->delete();

        return 'User Delete !<a href="/indexreader">Click here to see list</a> ';
    }

    //------->Takeout Details
    public function takeout()
    {
        $book_id = Book::get();
        $reader_id = Reader::get();

        return view('takeout', ['book_id' => $book_id], ['reader_id' => $reader_id]);
    }

    public function inserttake(Request  $request)
    {
        $request->validate(
            [
                'book_id' => ['required', 'unique:Takeouts,Book_Id'],
                'reader_id' => ['required'],
                'start_date' => ['required', 'date'],
            ]
        );

        $bookId = $request->input('book_id');
        $readerId = $request->input('reader_id');
        $startDate = $request->input('start_date');

        // Check if the book is already borrowed by another reader
        $existingBorrow = Takeout::where('book_id', $bookId)
            ->where('start_date', '=', $startDate)
            ->first();

        if ($existingBorrow) {
            throw ValidationException::withMessages([
                'book_id' => 'The book is already taken by another reader.',
            ]);
        }
        // Continue with the borrowing process
        $borrow = new Takeout(
            [
                'book_id' => $bookId,
                'reader_id' => $readerId,
                'start_date' => $startDate,
            ]
        );
        $borrow->save();

        return 'Record Insert Successfully ! <a href = "/takeout">Click here go to back </a>';
    }

    public function TakeOutEdit($id)
    {
        $takeoutedit = Takeout::find($id);
        $books = Book::with('takeout')->get();
        $readers = Reader::with('takeout')->get();
        // return view('takeoutedit', ['takeoutedit' => $takeoutedit, 'books' => $books, 'readers' => $readers]);
        return view('takeoutedit', compact('takeoutedit', 'books', 'readers'));
    }


    public function Takeupdate(Request $request, $id)
    {
        $validatedtake = $request->validate(
            [
                'book_id' => ['required'],
                'reader_id' => ['required'],
                'start_date' => ['required', 'date'],
                'end_date' => ['required', 'after:start_date'],
                'feedback' => ['required'],
            ]
        );

        $takeout = Takeout::find($id);
        $takeout->update($validatedtake);

        return 'user update successfully !<a href="/indextake">Click here list</a>';
    }

    public function indexbook()
    {
        $bookdata = Book::paginate(7);

        return view('indexbook', compact('bookdata'));
    }
    //index--->fliter
    public function book_filter(Request $request)
    {
        $name = $request->input('name');

        $bookdata = Book::where('name', 'like', "%{$name}%")->paginate(7); // Change the per page value as needed

        return view('indexbook', compact('bookdata'));
    }


    public function indexreader()
    {
        $readdata = Reader::paginate(5);

        return view('indexreader', compact('readdata'));
    }
    //index--->fliter
    public function reader_filter(Request $request)
    {
        $name = $request->input('name');

        $readdata = Reader::where('name', 'like', "%{$name}%")->paginate(5); // Change the per page value as needed

        return view('indexreader', compact('readdata'));
    }

    public function indextake()
    {
        $takeouts = Takeout::all();
        $books = Book::with('takeout')->get();
        $readers = Reader::with('takeout')->get();
        foreach ($takeouts as $data) {
            $start = Carbon::parse($data->start_date);
            $end = Carbon::parse($data->end_date);
            $data->numDays = $end->diffInDays($start);
        }
        return view('indextake', compact('takeouts'));
    }
    //index--->fliter
    public function take_filter(Request $request)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $takeouts = Takeout::whereBetween('created_at', [$startDate, $endDate])->get();
        foreach ($takeouts as $data) {
            $start = Carbon::parse($data->start_date);
            $end = Carbon::parse($data->end_date);
            $data->numDays = $end->diffInDays($start);
        }

        return view('indextake', compact('takeouts'));
    }

    // ------>Book Last Take OUT
    public function past($id)
    {
        $reader = Reader::with('book')->get();
        $book = Book::findOrFail($id);
        $pastTakeouts = $book->takeout()->where('book_id', $id)->get(); //end_date

        return view('past_takeout', compact('reader', 'book', 'pastTakeouts'));
    }

    //---->Reader History
    public function history($id)
    {
        $history = Takeout::where('reader_id', $id)->get();
        $reader = Reader::with('reader')->get();
        $book = Book::with('book')->get();

        return view('pasthistory', compact('history', 'reader', 'book'));
    }
}
