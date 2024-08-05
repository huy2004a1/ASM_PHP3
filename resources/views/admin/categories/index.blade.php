@extends('admins.layouts.master')

@section('content')
<div class="container">
    <center>
        <h1>Danh sách danh mục</h1>
    </center>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Thêm danh mục</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Chỉnh sửa</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirmDelete();">
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

<!-- Thêm JavaScript để xử lý xác nhận xóa -->
<script>
    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa danh mục này không?');
    }
</script>
@endsection
