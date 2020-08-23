<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::sortable()->paginate(10);
        return view('admin.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = new Article();
        return view('admin.articles.create', compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'sometimes|unique:articles',
            'date' => 'required',
            'metaKeywords' => 'required',
            'metaTitle' => 'required',
            'metaDesc' => 'required',
            'shortDesc' => 'required',
            'img' => 'required',
            'alt' => 'required',
            'fullDesc' => 'required',            
        ]);

        Article::create($request->all());

        return redirect('/admin/articles')->with('success', 'Статья добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'slug' => 'sometimes|unique:articles,slug,'.$id,
            'date' => 'required',
            'metaKeywords' => 'required',
            'metaTitle' => 'required',
            'metaDesc' => 'required',
            'shortDesc' => 'required',
            'alt' => 'required',
            'fullDesc' => 'required',
        ])->validate();

        $article = Article::find($id);
        $article->name = $request->name;
        $article->slug = $request->slug;
        $article->date = $request->date;
        $article->metaKeywords = $request->metaKeywords;
        $article->metaTitle = $request->metaTitle;
        $article->metaDesc = $request->metaDesc;
        $article->shortDesc = $request->shortDesc;

        if($request->removeImg && !$request->img){            
            $validator->errors()->add('img', 'Поле с изображением обязательно для заполнения!');
            return view('admin.articles.edit', compact('article'))->withErrors($validator);
        }
        if($request->img)
            $article->img = $request->img;   
        $article->alt = $request->alt;
        $article->fullDesc = $request->fullDesc;

        if($request->has('display'))
            $article->display = true;
        else
            $article->display = false;

        $article->save();
        
        return redirect('/admin/articles')->with('success', 'Статья с id ' . $article->id . ' обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect('/admin/articles')->with('success', 'Статья удалена!');
    }

    public function changeDisplay(Request $request){
        $article = Article::find($request->articleId);        
        $article->display = json_decode($request->display);
        $article->save();        
    }
}
