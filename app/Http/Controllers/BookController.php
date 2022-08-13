<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        return view('list_top10', [
            "title" => "List Top 10 Most Famous Author",
            "trendings" => Book::all()->sortByDesc('voter')->take(10)
        ]);
    }

    public function filter()
    {
        return view('book_filter', [
            "title" => "List of Book Filter",
            "books" => Book::paginate(10),
        ]);
    }

    public function insert()
    {
        return view('insert_rating', [
            "title" => "Insert Rating Books",
            "books" => Book::paginate(10)
        ]);
    }
}