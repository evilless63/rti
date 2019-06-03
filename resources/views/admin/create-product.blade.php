@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <h2>Создание товара</h2>
        <form method="post" action="{{ route('product.store') }}">
            <div class="form-group">
                @csrf
                <label for="metadescription">Мета описание:</label>
                <input type="text" class="form-control" name="metadescription"/>
            </div>
            <div class="form-group">
                <label for="metakeywords">Мета ключи (через запятую):</label>
                <input type="text" class="form-control" name="metakeywords"/>
            </div>
            <div class="form-group">
                <label for="name">Наименование:</label>
                <input type="text" class="form-control" name="name"/>
            </div>
            <div class="form-group">
                <label for="image">Изображение :</label>
                <input type="file" class="form-control" name="image"/>
            </div>
            <div class="form-group">
                <label for="description">Описание:</label>
                <textarea class="form-control" name="description" id="ck_description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="variations_description">Описание допусков:</label>
                <textarea class="form-control" name="variations_description" id="ck_variations_description" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="variations_table">Таблица допусков:</label>
                <textarea class="form-control" name="variations_table" id="ck_variations_table" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <label for="variations">Варианты допусков (через запятую):</label>
                <textarea class="form-control" name="variations" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Создать</button>
        </form>

        </div>
    </div>
</div>
@endsection