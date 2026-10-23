<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorsBook extends Model
{
    use HasFactory;

    protected $table = 'authors_books';

    protected $fillable = [
        'author_id',
        'book_id',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}