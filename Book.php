<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function takeout()
    {
        return $this->hasMany(Takeout::class);
    }

    //reader--->history
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function takeouts()
    {
        return $this->hasMany(Takeout::class);
    }




}
