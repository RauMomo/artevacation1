<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;

class SearchController extends Controller
{
    public function search(){
        $search = $_GET['query'];
        $all = Article::where('author', 'LIKE', '%'.$search.'%')
                    // ->select('author', 'title')
                    // ->where('author', 'LIKE', $search)
                    // ->orwhere('title', 'LIKE', $search)
                    ->get();
        return view('search', compact('all'));
    }
}
