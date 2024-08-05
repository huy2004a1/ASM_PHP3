@extends('account.layouts.app')

@section('content')
<div class="container">
    <div class="form-container">
        <div class="form-header text-center">
            <h2>Reset Password</h2>
        </div>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Send Password Reset Link</button>
            @if (session('status'))
                <div class="mt-3 alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </form>
    </div>
</div>
@endsection