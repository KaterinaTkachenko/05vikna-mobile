<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function getArticles(){
        $articles = Article::where('display', '1')->paginate(10);
        return view('o-nas.stati', compact('articles'));
    }

    public function getArticleInfo($slug){
        $article = Article::where('slug', $slug)->first();
        return view('o-nas/articleInfo', compact('article'));     
   }
}
