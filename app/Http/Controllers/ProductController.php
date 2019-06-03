<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Variation;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return View('admin.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.create-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // $this->validate($request, [
        //     'image' => 'required',
        //     'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'name' => 'required',
        //     'slug' => 'required'
        // ]);

        if($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
        }

        $product = Product::create($request->all());
        if($request->filled('variations')) {
            $variations = explode(",", $request->variations);

            foreach($variations as $variation) {
                $v = new Variation();
                $v->product_id = $product->id;
                $v->name = trim($variation);
                $v->save();
            }
        }
        //Указываем допуски

        $products = Product::all();
        return View('admin.products', compact('products'));
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
            $product = Product::findOrFail($slug);
    
            return Redirect::to(route('product.show', $post->slug), 301);
        }
    
        // Get post for slug.
        $product = Product::whereSlug($slug)->firstOrFail();
    
        return view('product.show', [
            'product' => $product
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
        $product = Product::whereSlug($slug)->firstOrFail();
        return view('admin.edit-product', compact('product'));
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
        $product = Product::whereSlug($slug)->FirstOrFail();
        $product->update($request->all());

        $variations = $product->variations->all();
        foreach($variations as $variation) {
            $delVar = Variation::find($variation->id);
            $delVar->delete();
        }

        if($request->filled('variations')) {
            $variations = explode(",", $request->variations);

            foreach($variations as $variation) {
                $v = new Variation();
                $v->product_id = $product->id;
                $v->name = trim($variation);
                $v->save();
            }
        }

        $products = Product::all();
        return View('admin.products', compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}