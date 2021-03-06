@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <h2>Продукция</h2>

        <form action="">
        <a href="{{ route('product.create') }}" class="btn btn-success">Создать новый товар</a>
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
            @foreach($products as $k=>$product)
            <tr>
            <th scope="row">{{++$k}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->slug}}</td>
                <td>
                <a href="{{ route('product.edit', $product->slug) }}" class="btn btn-primary">Редактировать</a>
                </td>
                <td>
                    <form method="post" action="{{ route('product.destroy', $product->slug) }}">
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
                {{ $products->links() }}
            </ul>
        </nav>
        </div>
    </div>
</div>
@endsection