<header class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">WebTinTuc</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Trang chủ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Giới thiệu</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Liên hệ</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Đăng nhập</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Đăng ký</a></li>
            </ul>
        </div>
    </div>
</header>

<style>
    body {
    font-family: Arial, sans-serif;
}

.navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
}

.navbar-nav .nav-link {
    font-size: 1.1rem;
    padding: 10px 15px;
}

.navbar-nav .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
}

footer {
    margin-top: 30px;
}

</style>