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

    public function index()
     {
        return Article::all();
     }
 
    public function show($id)
     {
        return Article::find($id);
     }
    public function update(Request $request, $id)
     {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;
     }
}
