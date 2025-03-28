@extends('layouts.app')

@section('title', 'Đăng ký')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card p-4 shadow" style="width: 400px;">
        <h2 class="text-center mb-3">Đăng ký</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Họ và tên</label>
                <input type="text" class="form-control" id="name" name="name" required autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Mật khẩu</label>
                <input type="password" class="form-control" id="pass" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Xác nhận mật khẩu</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Đăng ký</button>
        </form>
        <p class="text-center mt-3">Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập</a></p>
    </div>
</div>
@endsection

<style>
    body {
    background-color: #f8f9fa;
}
.card {
    border-radius: 10px;
}
.btn {
    border-radius: 5px;
}

</style>