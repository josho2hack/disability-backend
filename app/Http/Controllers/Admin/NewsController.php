<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\News;
use Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();

        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dir = 'uploads/news/';
        $path = public_path($dir);
        $filename = 'news' . date('Ymdhis') . Str::random() .'.jpg';
        $filelink = asset($dir.$filename);
        $request->upload->move($path, $filename);

        $news = new News;
        $news->user_id          = Auth::user()->id;
        $news->news_category_id = 1;
        $news->news_group_id    = 1;
        $news->title            = $request->title;
        $news->description      = $request->description;
        $news->is_publish       = 1;
        $news->cover_path       = $path;
        $news->cover_name       = $filename;
        $news->cover_link       = $filelink;

        if ( $news->save() ) {
            return redirect()->route('admin.news.index')
                ->with('success', 'สร้างข่าวสำเร็จ');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.news.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);

        return view('admin.news.edit', compact('news'));
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
        $dir = 'uploads/news/';
        $path = public_path($dir);
        $filename = 'news' . date('Ymdhis') . Str::random() .'.jpg';
        $filelink = asset($dir.$filename);
        $request->upload->move($path, $filename);

        $news = News::find($id);
        $news->user_id          = Auth::user()->id;
        $news->news_category_id = 1;
        $news->news_group_id    = 1;
        $news->title            = $request->title;
        $news->description      = $request->description;
        $news->is_publish       = 1;
        $news->cover_path       = $path;
        $news->cover_name       = $filename;
        $news->cover_link       = $filelink;

        if ( $news->save() ) {
            return back()->with('success', 'อัพเดทข่าวสำเร็จ');
        }
        
        return view('admin.news.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        
        if ( $news->delete() ) {
            return redirect()->route('admin.news.index')
                ->with('success', 'ลบข้อมูลสำเร็จ');
        }
    }
}
