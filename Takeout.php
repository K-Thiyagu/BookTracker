<?php

namespace App\Models;

use App\Models\Reader;
use App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Takeout extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    //reader - book = one

    public function books()
    {
        return $this->belongsTo(Book::class);
    }
}
