@extends('layouts.user')

@section('title', 'Danh sách phim - CineHome')

@section('content')

<header class="cine-navbar scrolled">
    <div class="container-fluid px-5">
        <div class="d-flex justify-content-between align-items-center">

            <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 text-decoration-none">
                <img src="{{ asset('assets/images/logo.png') }}" class="logo-img" alt="CineHome Logo">
                <div class="brand-text">Cine<span>Home</span></div>
            </a>

            <nav class="nav-menu">
                <a href="{{ route('home') }}">Trang chủ</a>
                <a href="{{ route('user.movies.index') }}" class="active">Phim</a>
                <a href="#">Rạp</a>
                <a href="#">Lịch chiếu</a>
                <a href="#">Vé của tôi</a>
            </nav>

            <div class="nav-action">
                @guest
                    <a href="{{ route('login') }}" class="btn-login">Đăng nhập</a>
                    <a href="{{ route('register') }}" class="btn-register">Đăng ký</a>
                @else
                    <a href="#" class="btn-register">
                        <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                    </a>
                @endguest
            </div>

        </div>
    </div>
</header>

<main class="main-section" style="padding-top: 120px;">
    <div class="container-fluid px-5">

        <div class="section-title-wrap mb-4">
            <div>
                <h2 class="section-title">
                    Danh sách <span>phim</span>
                </h2>
                <p class="text-secondary mb-0">
                    Xem phim đang chiếu, sắp chiếu và đặt vé nhanh chóng tại CineHome.
                </p>
            </div>
        </div>

        {{-- FILTER --}}
        <form action="{{ route('user.movies.index') }}" method="GET" class="movie-filter mb-4">
            <div class="row g-3">

                <div class="col-md-4">
                    <input 
                        type="text" 
                        name="keyword" 
                        class="form-control filter-input"
                        placeholder="Tìm tên phim..."
                        value="{{ request('keyword') }}"
                    >
                </div>

                <div class="col-md-2">
                    <select name="genre" class="form-select filter-input">
                        <option value="">Thể loại</option>
                        @foreach ($genres as $genre)
                            <option value="{{ $genre }}" {{ request('genre') == $genre ? 'selected' : '' }}>
                                {{ $genre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">
                    <select name="country" class="form-select filter-input">
                        <option value="">Quốc gia</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country }}" {{ request('country') == $country ? 'selected' : '' }}>
                                {{ $country }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-2">
                    <select name="status" class="form-select filter-input">
                        <option value="">Trạng thái</option>
                        <option value="now_showing" {{ request('status') == 'now_showing' ? 'selected' : '' }}>
                            Đang chiếu
                        </option>
                        <option value="coming_soon" {{ request('status') == 'coming_soon' ? 'selected' : '' }}>
                            Sắp chiếu
                        </option>
                    </select>
                </div>

                <div class="col-md-2 d-flex gap-2">
                    <button class="btn-filter w-100">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                    <a href="{{ route('user.movies.index') }}" class="btn-reset">
                        <i class="fa-solid fa-rotate-left"></i>
                    </a>
                </div>

            </div>
        </form>

        {{-- LIST MOVIES --}}
        <div class="row g-4">
            @forelse ($movies as $movie)
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="movie-card">

                        <div class="movie-poster">
                            <img src="{{ $movie->poster }}" alt="{{ $movie->title }}">

                            <div class="movie-status">
                                {{ $movie->status_text }}
                            </div>

                            <div class="movie-age">
                                {{ $movie->age_rating }}
                            </div>
                        </div>

                        <div class="movie-body">
                            <h3 class="movie-title">
                                {{ $movie->title }}
                            </h3>

                            <div class="movie-info">
                                <p class="mb-1">
                                    <i class="fa-solid fa-film"></i>
                                    {{ $movie->genre }}
                                </p>

                                <p class="mb-1">
                                    <i class="fa-solid fa-location-dot"></i>
                                    {{ $movie->country }}
                                </p>

                                <p class="mb-0">
                                    <i class="fa-solid fa-clock"></i>
                                    {{ $movie->duration }} phút
                                </p>
                            </div>

                            <div class="movie-actions">
                                <a href="#" class="btn-small-book">
                                    Đặt vé
                                </a>

                                <a href="#" class="btn-small-detail">
                                    Chi tiết
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="empty-movies">
                        <i class="fa-solid fa-film"></i>
                        <h4>Không tìm thấy phim</h4>
                        <p>Hãy thử thay đổi từ khóa hoặc bộ lọc.</p>
                    </div>
                </div>
            @endforelse
        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $movies->links('pagination::bootstrap-5') }}
        </div>

    </div>
</main>

@endsection