@extends('account.layouts.app')

@section('content')
<div class="container">
<div class="form-container">
        <div class="form-header text-center">
            <h2>Login</h2>
        </div>
        <form action="{{ route('login')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <div class="form-footer text-center mt-3">
                <br>
                <a href="/register">Don't have an account? Register</a>
            </div>
        </form>
    </div>
</div>
@endsection

