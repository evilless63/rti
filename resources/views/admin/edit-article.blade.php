@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <h2>Редактирование статьи</h2>
        <form method="post" action="{{ route('article.update', $article->slug) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="metadescription">Мета описание:</label>
                <input type="text" class="form-control" value="{{$article->metadescription}}" name="metadescription"/>
            </div>
            <div class="form-group">
                <label for="metakeywords">Мета ключи (через запятую):</label>
                <input type="text" class="form-control" value="{{$article->metakeywords}}" name="metakeywords"/>
            </div>
            <div class="form-group">
                <label for="name">Наименование:</label>
                <input type="text" class="form-control" value="{{$article->name}}" name="name"/>
            </div>
            <div class="form-group">
                <label for="image">Изображение :</label>
                <input type="file" class="form-control" value="{{$article->image}}" name="image"/>
            </div>

            <h3>Текущее изображение:</h3>
            <img src="{{ asset('/storage/' .$article->image)}}" alt="" class="img-fluid">

            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea class="form-control" name="short_description" id="ck_description" cols="30" rows="10">{{$article->short_description}}</textarea>
            </div>
            <div class="form-group">
                <label for="variations_description">Описание допусков:</label>
                <textarea class="form-control" name="description" id="ck_variations_description" cols="30" rows="10">{{$article->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Создать</button>
        </form>

        </div>
    </div>
</div>
@endsection