<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function store(Request $request)
     {
        return Article::create($request->all());
     }
}
