<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function home()
    {
        /*orderBy ID is used in case there are multiple articles with the same time stamp 
        so that the article with higher ID will be shown first   .*/
        $articles = Article::orderBy('id', 'DESC')->take(5)->latest()->get();

        return view('home', ['articles' => $articles]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Menampilkan artikel dari paling baru terlebih dahulu*/
        $articles = Article::orderBy('id', 'DESC')->latest()->paginate(10);

        return view('article.articles', ['articles' => $articles]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Article::create(request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]));
        return redirect()->back()->with('message', 'New Article Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Article $article)
    {
        $article->update(request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]));   
        return redirect()->back()->with('message', 'Article Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function delete(Article $article)
    {
        return view('article.delete', compact('article'));
    }
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect('/articles')->with('message', 'Article Successfully Deleted');
    }
}
