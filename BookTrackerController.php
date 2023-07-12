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
    public function bookedit($id){
        $bookedit = Book::find($id);
        return view('bookedit',['bookedit' => $bookedit]);
    }

    public function bookupdate(Request $request ,$id){
        $bookedit = Book::find($id);
        $bookedit->name = $request->input('name');
        $bookedit->author = $request->input('author');
        $bookedit->save();
        return 'user update successfully !<a href="/indexbook">Click here to see Students list</a>';


    }
    public function bookdel($id){
        $bookedit = Book::find($id);
        $bookedit->delete();
        return 'User Delete !<a href="/indexbook">Click here to see list</a> ';

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

    public function readeredit($id){
            $readeredit = Reader::find($id);
            return view('readeredit',['readeredit' => $readeredit]);
    }

    public function readerupdate(Request $request, $id){
        $readerup = Reader::find($id);
        $readerup->name = $request->input('name');
        $readerup->phone = $request->input('phone');
        $readerup->save();
        return 'user update successfully !<a href="/indexreader">Click here to see Students list</a>';
    }

    public function readerdel($id){
        $readerdel = Reader::find($id);
        $readerdel->delete();
        return 'User Delete !<a href="/indexreader">Click here to see list</a> ';
    }
    public function takeout(){
        $book_id = Book::get();
        $reader_id = Reader::get();
        return view('takeout',['book_id' => $book_id],['reader_id' => $reader_id]);
    }

    public function inserttake(Request  $request){
           $take = $request->all();
            $takeout = Takeout::create($take);
            return 'Record Insert Successfully ! <a href = "/takeout">Click here go to back </a>' . $takeout->book_id;

    }

    public function takeedit($id){
        $take_edit = Takeout::find($id);
        return view('takeoutedit',['take_edit', $take_edit]);
    }

    public function takeup(Request $request, $id){
             $takeup = Takeout::find($id);
             $takeup->book_id = $request->input('book_id');
             $takeup->reader_id = $request->input('reader_id');
             $takeup->start_date = $request->input('start_date');
             $takeup->end_date = $request->input('end_date');
             $takeup->feedback = $request->input('feedback');
             $takeup->save();
             return 'user update successfully !<a href="/indextake">Click here to see Students list</a>';

    }



    public function indexbook(){
        $bookdata = Book::get();
        return view('indexbook',['bookdata' => $bookdata]);
    }

    public function indexreader(){
        $readdata = Reader::get();
        return view('indexreader',['readdata' => $readdata]);
    }

    public function indextake(){
        $takedata = Takeout::get();
        return view('indextake',['takedata' => $takedata]);
    }

    public function past($id){
        $takes = Takeout::find($id);
        return view('past_takeout',['takes' => $takes]);
    }

    public function history($id){
        $history = Takeout::find($id);
        return view('pasthistory',['history' => $history]);
    }

}
