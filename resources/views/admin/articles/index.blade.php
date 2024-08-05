
@extends('admins.layouts.master')

@section('content')
<div class="container">
    <center>
        <h1>Danh sách tin tức</h1>
    </center>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Thêm tin tức</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Danh mục</th>
                <th>Số lượt xem</th>
                <th>Hình ảnh</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->category->name }}</td>
                <td>{{ $article->views }}</td>
                <td>
                    @if($article->image)
                        <img src="{{ asset('images/' . $article->image) }}" alt="Article Image" style="width: 100px;">
                    @endif
                </td>
                <td>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Chỉnh sửa</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa tin tức này không?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
