<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductCategory;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = ProductCategory::latest()->paginate(15);
        return View('admin.product-categories', compact('product_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.create-product-category');
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
            $data['image'] = $path;
        }

        $product_category = ProductCategory::create($data);
        $product_categories = ProductCategory::latest()->paginate(15);
        $request->session()->flash('alert-success', 'Информация успешно добавлена !');
        return View('admin.product-categories', compact('product_categories'));
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
            $product_category = Product::findOrFail($slug);
    
            return Redirect::to(route('product.show', $product_category->slug), 301);
        }
    
        // Get post for slug.
        $product_category = ProductCategory::whereSlug($slug)->firstOrFail();
    
        return view('product-category.show', [
            'product_category' => $product_category
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
        $product_category = ProductCategory::whereSlug($slug)->firstOrFail();
        return view('admin.edit-product-category', compact('product_category'));
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
        $product_category = ProductCategory::whereSlug($slug)->FirstOrFail();

        $data = $request->all();

        if($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads', 'public');
            $data['image'] = $path;
        }
        
        $product_category->update($data);

        $product_categories = ProductCategory::latest()->paginate(15);
        $request->session()->flash('alert-success', 'Информация успешно обновлена !');
        return View('admin.product-categories', compact('product_categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug, Request $request)
    {
        $product_category = ProductCategory::whereSlug($slug)->FirstOrFail();

        $product_category->delete();
        $product_categories = ProductCategory::latest()->paginate(15);
        $request->session()->flash('alert-success', 'Информация успешно удалена !');
        return View('admin.product-categories', compact('product_categories'));
    }
}
