@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <h2>Редактирование категории товаров</h2>
        <form method="post" action="{{ route('product-category.update', $product_category->slug) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="metadescription">Мета описание:</label>
                <input type="text" class="form-control" value="{{$product_category->metadescription}}" name="metadescription"/>
            </div>
            <div class="form-group">
                <label for="metakeywords">Мета ключи (через запятую):</label>
                <input type="text" class="form-control" value="{{$product_category->metakeywords}}" name="metakeywords"/>
            </div>
            <div class="form-group">
                <label for="name">Наименование:</label>
                <input type="text" class="form-control" value="{{$product_category->name}}" name="name"/>
            </div>
            <div class="form-group">
                <label for="image">Изображение :</label>
                <input type="file" class="form-control" value="{{$product_category->image}}" name="image"/>
            </div>

            <h3>Текущее изображение:</h3>
            <img src="{{ asset('/storage/' .$product_category->image)}}" alt="" class="img-fluid">

            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea class="form-control" name="description" id="ck_description" cols="30" rows="10">{{$product_category->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Редактировать</button>
        </form>

        </div>
    </div>
</div>
@endsection