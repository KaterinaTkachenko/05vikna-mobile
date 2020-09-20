<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Work;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::sortable()->paginate(10);
        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $work = new Work();
        return view('admin.works.create', compact('work'));
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
            'title' => 'required',
            'slug' => 'sometimes|unique:works',            
            'metaKeywords' => 'required',
            'metaTitle' => 'required',
            'metaDesc' => 'required',
            'shortDesc' => 'required',
            'img' => 'required',
            'alt' => 'required',
            'fullDesc' => 'required',            
        ]);

        Work::create($request->all());

        return redirect('/admin/works')->with('success', 'Работа добавлена!');
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
        $work = Work::find($id);
        return view('admin.works.edit', compact('work'));
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
            'title' => 'required',
            'slug' => 'sometimes|unique:works,slug,'.$id,            
            'metaKeywords' => 'required',
            'metaTitle' => 'required',
            'metaDesc' => 'required',
            'shortDesc' => 'required',
            'alt' => 'required',
            'fullDesc' => 'required',
        ])->validate();

        $work = Work::find($id);
        $work->title = $request->title;
        $work->slug = $request->slug;      
        $work->metaKeywords = $request->metaKeywords;
        $work->metaTitle = $request->metaTitle;
        $work->metaDesc = $request->metaDesc;
        $work->shortDesc = $request->shortDesc;

        if($request->removeImg && !$request->img){            
            $validator->errors()->add('img', 'Поле с изображением обязательно для заполнения!');
            return view('admin.works.edit', compact('work'))->withErrors($validator);
        }
        if($request->img)
            $work->img = $request->img;   
        $work->alt = $request->alt;
        $work->fullDesc = $request->fullDesc;

        $work->save();
        
        return redirect('/admin/works')->with('success', 'Работа с id ' . $work->id . ' обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Work::find($id)->delete();
        return redirect('/admin/works')->with('success', 'Работа удалена!');
    }
}
