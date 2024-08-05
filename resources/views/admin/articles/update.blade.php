<!-- resources/views/admin/articles/edit.blade.php -->

@extends('admins.layouts.master')

@section('content')
<div class="container">
    <center>
        <h1>Chỉnh sửa tin tức</h1>
    </center>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $article->title) }}" >
        </div>
        <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea class="form-control" id="content" name="content" rows="4" required>{{ old('content', $article->content) }}</textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Danh mục</label>
            <select class="form-control" id="category_id" name="category_id" >
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $article->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="views">Lượt xem</label>
            <input type="number" class="form-control" id="views" name="views" value="{{ old('views', $article->views) }}" >
        </div>
        <div class="form-group">
            <label for="image">Hình ảnh</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($article->image)
            <img src="{{ asset('images/' . $article->image) }}" alt="Current Image" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>


</div>
@endsection