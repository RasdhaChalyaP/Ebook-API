<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "book";

    protected $fillable = [
        'id',
        'title',
        'description',
        'author',
        'publisher',
        'date_of_issue'
    ];
}
