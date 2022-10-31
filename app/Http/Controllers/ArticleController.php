<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function create(ArticleRequest $request) //ArticleRequest
    {
        $article = new Article;

        $article->title = $request->title;
        $article->resume = $request->resume;
        $article->text = $request->text;
        $article->user_id = $request->uuid;

        $article->save();
        dd($article);
    }

    public function selectAll()
    {
        $articles = Article::all();
        dd($articles);
    }

    public function selectOne(Request $request)
    {
        $uuid = $request->uuid;
        $article = Article::findOrFail($uuid);
        dd($article);
    }

    public function update(ArticleRequest $request)
    {
        $uuid = $request->uuid;
        $article = Article::findOrFail($uuid)->first()->fill($request->all())->save();
        dd($article);
    }

    public function delete(Request $request)
    {
        $uuid = $request->uuid;
        $article = Article::where(function ($query) use ($uuid) {
            $query->where('id', $uuid)->firstorfail()->delete();
        });
        return redirect('/');
    }
}