<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $articles = Article::latest()->paginate(15);
        return View('admin.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.create-article');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
        }

        $data['image'] = $path;
        $article = Article::create($data);

        $articles = Article::latest()->paginate(15);
        $request->session()->flash('alert-success', 'Информация успешно добавлена !');
        return View('admin.articles', compact('articles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        if (is_numeric($slug)) {
            // Get post for slug.
            $article = Product::findOrFail($slug);
    
            return Redirect::to(route('article.show', $article->slug), 301);
        }
    
        // Get post for slug.
        $article = Article::whereSlug($slug)->firstOrFail();
    
        return view('article.show', [
            'article' => $article
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $article = Article::whereSlug($slug)->firstOrFail();
        return view('admin.edit-article', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $article = Article::whereSlug($slug)->FirstOrFail();

        $data = $request->all();

        if($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
        }

        $data['image'] = $path;
        $article->update($data);

        $articles = Article::latest()->paginate(15);
        $request->session()->flash('alert-success', 'Информация успешно обновлена !');
        return View('admin.articles', compact('articles'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, Request $request)
    {
        $article = Article::whereSlug($slug)->FirstOrFail();
        $article->delete();

        $articles = Article::latest()->paginate(15);
        $request->session()->flash('alert-success', 'Информация успешно удалена !');
        return View('admin.articles', compact('articles'));
    }
}
