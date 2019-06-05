@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

        <h2>Статьи</h2>

        <form action="">
        <a href="{{ route('article.create') }}" class="btn btn-success">Создать новую статью</a>
        </form>

        <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Наименование</th>
            <th scope="col">Ярлык</th>
            <th scope="col">Краткий текст</th>
            <th scope="col">Редактировать</th>
            <th scope="col">Удалить</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $k=>$article)
            <tr>
            <th scope="row">{{++$k}}</th>
                <td>{{$article->name}}</td>
                <td>{{$article->slug}}</td>
                <td>{{$article->short_description}}</td>
                <td>
                <a href="{{ route('article.edit', $article->slug) }}" class="btn btn-primary">Редактировать</a>
                </td>
                <td>
                    <form method="post" action="{{ route('article.destroy', $article->slug) }}">
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
                {{ $articles->links() }}
            </ul>
        </nav>
        </div>
    </div>
</div>
@endsection