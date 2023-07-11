<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Reader;
use App\Models\Takeout;
use Illuminate\Http\Request;

class BookTrackerController extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function book()
    {
        return view('book');
    }
    public function insertbook(Request $request)
    {
        $data = $request->validate(
            [
                'name' => ['required'],
                'author' => ['required']
            ]
        );
        $books = Book::create($data);
        return 'Record Insert Successfully ! <a href = "/book">Click here go to back </a>' . $books->name;
    }

    public function reader()
    {
        return view('reader');
    }

    public function insertReader(Request  $request)
    {
        $read = $request->validate(
            [
                'name' => ['required'],
                'phone' => ['required','numeric', 'digits:10', 'starts_with:5,6,7,8,9']
            ]
        );
        $readers = Reader::create($read);
        return 'Record Insert Successfully ! <a href = "/reader">Click here go to back </a>' . $readers->name;
    }

    public function takeout(){
        $book_id = Book::get();
        $reader_id = Reader::get();
        return view('takeout',['book_id' => $book_id, 'reader_id' => $reader_id]);
    }

    public function inserttake(Request  $request){
        // $take = $request->all();
           $take = $request->validate(
            [
                'book_id' => ['required','numeric'],
                'reader_id' => ['required','numeric'],
                'start_date' => ['required'],
                'end_date' => ['required'],
                'feedback' => ['required']
            ]
            );
            $takeout = Takeout::create($take);
            return 'Record Insert Successfully ! <a href = "/takeout">Click here go to back </a>' . $takeout->book_id;

    }

    public function indexbook(){
        $bookdata = Book::get();
        return view('indexbook',['bookdata' => $bookdata]);
    }

    public function indexreader(){
        $readdata = Reader::get();
        return view('indexreader',['readdata' => $readdata]);
    }
}
