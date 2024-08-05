
@extends('admins.layouts.master')

@section('content')
<div class="container">
    <center>
        <h1>Danh sách người dùng</h1>
    </center>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Type</th>
                <th>Ngày tạo</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accounts as $account)
            <tr>
                <td>{{ $account->id }}</td>
                <td>{{ $account->name }}</td>
                <td>{{ $account->email }}</td>
                <td>{{ $account->password }}</td>
                <td>{{ $account->type }}</td>       
                <td>{{ $account->created_at }}</td>       
                <td>
                    <form action="{{ route('account.destroy', $account->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Bạn có chắc chắn muốn xóa tin tức này không?');">
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
