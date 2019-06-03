<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

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
        return view('site.staty');
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
