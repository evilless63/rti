@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <h2>Редактирование товара</h2>
        <form method="post" action="{{ route('product.update', $product->slug) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="metadescription">Мета описание:</label>
                <input type="text" class="form-control" value="{{$product->metadescription}}" name="metadescription"/>
            </div>
            <div class="form-group">
                <label for="metakeywords">Мета ключи (через запятую):</label>
                <input type="text" class="form-control" value="{{$product->metakeywords}}" name="metakeywords"/>
            </div>
            <div class="form-group">
                <label for="name">Наименование:</label>
                <input type="text" class="form-control" value="{{$product->name}}" name="name"/>
            </div>
            <div class="form-group">
                <label for="image">Изображение :</label>
                <input type="file" class="form-control" value="{{$product->image}}" name="image"/>
            </div>

            <h3>Текущее изображение:</h3>
            <img src="{{ asset('/storage/' .$product->image)}}" alt="" class="img-fluid">

            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea class="form-control" name="description" id="ck_description" cols="30" rows="10">{{$product->description}}</textarea>
            </div>
            <div class="form-group">
                <label for="variations_description">Описание допусков:</label>
                <textarea class="form-control" name="variations_description" id="ck_variations_description" cols="30" rows="10">{{$product->variations_description}}</textarea>
            </div>
            <div class="form-group">
                <label for="variations_table">Таблица допусков:</label>
                <textarea class="form-control" name="variations_table" id="ck_variations_table" cols="30" rows="10">{{$product->variations_table}}</textarea>
            </div>
            <div class="form-group">
                <label for="variations">Варианты допусков (через запятую):</label>
                <textarea class="form-control" name="variations" id="" cols="30" rows="10">{{implode(",", $product->variations->pluck('name')->all())}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Создать</button>
        </form>

        </div>
    </div>
</div>
@endsection