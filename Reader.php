<?php

namespace App\Models;

use App\Models\Takeout;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function takeout()
    {
        return $this->hasMany(Takeout::class);
    }


    //reader
    public function reader()
    {
        return $this->belongsTo(Reader::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
