<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorearticleRequest;
use App\Http\Requests\UpdatearticleRequest;
use App\Models\article;
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    
public function index()
{
    $articles = Article::all();
    return view('articles.index', compact('articles'));
}

public function create()
{
    return view('articles.create');
}

public function store(Request $request)
{
    // Validate and save the article
}

public function show(Article $article)
{
    return view('articles.show', compact('article'));
}

public function edit(Article $article)
{
    return view('articles.edit', compact('article'));
}

public function update(Request $request, Article $article)
{
    // Validate and update the article
}

public function destroy(Article $article)
{
    $article->delete();
    return redirect()->route('articles.index')->with('success', 'Article deleted successfully');
}
}
