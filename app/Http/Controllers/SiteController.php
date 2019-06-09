<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Article;

class SiteController extends Controller
{
    public function index() {

        $products = Product::all();
        return view('site.index', compact('products'));
    }

    public function kontakty() {
        return view('site.kontakty');
    }

    public function okompanii() {
        return view('site.o-kompanii');
    }

    public function staty() {
        $articles = Article::latest()->paginate(15);
        return View('site.staty', compact('articles'));
    }

    //TODO Сделать view статьи и заполнить его.
    public function statya($slug) {
        $single_article = Article::whereSlug($slug)->firstOrFail();
        $other_articles = Article::all()->take(3);
        return view('site.article', compact('single_article','other_articles'));
    }

    public function politics() {
        return view('site.politics');
    }   

    public function tovary($slug) {

        $products = Product::all();
        $single_product = Product::whereSlug($slug)->firstOrFail();
        return view('site.tovary', compact('products', 'single_product'));
    }

    public function firsttovar() {
        $products = Product::all();
        $single_product = Product::firstOrFail();
        return view('site.tovary', compact('products', 'single_product'));
    }
}
