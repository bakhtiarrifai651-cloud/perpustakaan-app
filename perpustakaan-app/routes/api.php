<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;

Route::get('/books', function () {
    return response()->json(Book::with('author')->get());
});