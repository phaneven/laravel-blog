<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\WriteBlogRequest;


class ArticlesController extends Controller
{
    function index ()
    {
        $articles = Article::latest()->get();
        return view('blogs.index', compact('articles'));
    }

    function writeBlog () {
        return view('blogs.writeBlog');
    }

    function show ($id)
    {
        $articles = Article::findOrFail($id);

        return view('blogs.show', compact('articles'));
    }

    function store(WriteBlogRequest $request)
    {
        Article::create($request->all());
        // validation

        return redirect('blog');
    }


}
