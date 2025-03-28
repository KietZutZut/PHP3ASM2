@extends('layouts.app')

@section('title', 'Trang chủ')

@section('content')
<div class="container mt-4">
    <!-- Tiêu đề -->
    <h1 class="display-4 text-center mb-4">Tin tức mới nhất</h1>

    <!-- Bố cục tin tức -->
    <div class="row">
        <!-- Cột chính -->
        <div class="col-lg-8">
            <!-- Tin nổi bật (lấy tin có lượt xem cao nhất) -->
            @if(isset($tinNoiBat))
                <div class="alert alert-primary text-center">
                    <h2>
                        <a href="{{ route('tin', $tinNoiBat->id) }}" class="text-decoration-none text-dark">
                            {{ $tinNoiBat->title }}
                        </a>
                    </h2>
                </div>
            @endif

            <!-- Danh sách tin mới -->
            <ul class="list-group">
                @foreach($tatCaTin as $tin)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('tin', $tin->id) }}" class="text-decoration-none">
                            {{ $tin->title }}
                        </a>
                        <a href="{{ route('tin', $tin->id) }}" class="btn btn-primary btn-sm">Xem chi tiết</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4">
            <!-- Danh mục tin -->
            <div class="list-group mb-4">
                <h4 class="mb-3">Danh mục</h4>
                <a href="{{ route('tintrongloai', 1) }}" class="list-group-item list-group-item-action">Thể thao</a>
                <a href="{{ route('tintrongloai', 2) }}" class="list-group-item list-group-item-action">Công nghệ</a>
                <a href="{{ route('tintrongloai', 3) }}" class="list-group-item list-group-item-action">Giải trí</a>
            </div>

            <!-- Tin xem nhiều -->
            <div class="list-group">
                <h4 class="mb-3">Tin xem nhiều</h4>
                @foreach($tinXemNhieu as $tin)
                    <a href="{{ route('tin', $tin->id) }}" class="list-group-item list-group-item-action">
                        {{ $tin->title }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
