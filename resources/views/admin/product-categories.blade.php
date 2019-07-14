@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <h2>Категории товаров</h2>

        <form action="">
        <a href="{{ route('product-category.create') }}" class="btn btn-success">Создать новую категорию товаров</a>
        </form>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Ярлык</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product_categories as $k=>$product_category)
            <tr>
            <th scope="row">{{++$k}}</th>
                <td>{{$product_category->name}}</td>
                <td>{{$product_category->slug}}</td>
                <td>
                <a href="{{ route('product-category.edit', $product_category->slug) }}" class="btn btn-primary">Редактировать</a>
                </td>
                <td>
                    <form method="post" action="{{ route('product-category.destroy', $product_category->slug) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" onClick="return confirm('Вы подтверждаете удаление?');">
                            Удалить товар
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>

        <nav aria-label="Page navigation example">
            <ul class="pagination pg-blue justify-content-center">
                {{ $product_categories->links() }}
            </ul>
        </nav>
        </div>
    </div>
</div>
@endsection