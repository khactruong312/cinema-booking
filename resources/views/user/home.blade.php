@extends('layouts.user')

@section('title', 'CineHome - Đặt vé xem phim')

@section('content')

@php
    /*
        Dữ liệu mẫu.
        Sau này bạn thay bằng dữ liệu từ database:
        $bannerMovies = Movie::where('status', 'now_showing')->take(5)->get();
        $movies = Movie::where('status', 'now_showing')->get();
    */

    $bannerMovies = [
        [
            'title' => 'Buồn Thần Bán Thành',
            'description' => 'Một bộ phim điện ảnh hấp dẫn với câu chuyện bí ẩn, lôi cuốn và đầy cảm xúc. Hành trình khám phá sự thật sẽ đưa khán giả đi qua nhiều cung bậc cảm xúc.',
            'genre' => 'Kinh dị, Tâm lý',
            'duration' => '120 phút',
            'age' => 'T16',
            'release_date' => '20/05/2026',
            'cover' => 'https://images.unsplash.com/photo-1489599849927-2ee91cede3ba?q=80&w=1600&auto=format&fit=crop',
            'poster' => 'https://images.unsplash.com/photo-1574267432553-4b4628081c31?q=80&w=500&auto=format&fit=crop',
        ],
        [
            'title' => 'Thành Phố Ánh Đèn',
            'description' => 'Câu chuyện về những con người trẻ tuổi theo đuổi ước mơ trong thành phố hiện đại, nơi tình yêu và tham vọng luôn song hành.',
            'genre' => 'Tình cảm, Đời sống',
            'duration' => '110 phút',
            'age' => 'T13',
            'release_date' => '22/05/2026',
            'cover' => 'https://images.unsplash.com/photo-1517604931442-7e0c8ed2963c?q=80&w=1600&auto=format&fit=crop',
            'poster' => 'https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=500&auto=format&fit=crop',
        ],
        [
            'title' => 'Cuộc Đua Cuối Cùng',
            'description' => 'Một bộ phim hành động tốc độ cao với những pha rượt đuổi nghẹt thở và các tình huống gay cấn đến phút cuối.',
            'genre' => 'Hành động',
            'duration' => '130 phút',
            'age' => 'T16',
            'release_date' => '25/05/2026',
            'cover' => 'https://images.unsplash.com/photo-1505686994434-e3cc5abf1330?q=80&w=1600&auto=format&fit=crop',
            'poster' => 'https://images.unsplash.com/photo-1524985069026-dd778a71c7b4?q=80&w=500&auto=format&fit=crop',
        ],
        [
            'title' => 'Ngôi Nhà Điện Ảnh',
            'description' => 'Bộ phim gia đình nhẹ nhàng, hài hước và cảm động, phù hợp cho khán giả muốn tận hưởng cuối tuần cùng người thân.',
            'genre' => 'Gia đình, Hài',
            'duration' => '100 phút',
            'age' => 'P',
            'release_date' => '28/05/2026',
            'cover' => 'https://images.unsplash.com/photo-1478720568477-152d9b164e26?q=80&w=1600&auto=format&fit=crop',
            'poster' => 'https://images.unsplash.com/photo-1582738411706-bfc8e691d1c2?q=80&w=500&auto=format&fit=crop',
        ],
        [
            'title' => 'Bí Mật Sau Màn Ảnh',
            'description' => 'Một hành trình phá án bí ẩn trong thế giới điện ảnh, nơi mỗi nhân vật đều có một bí mật riêng.',
            'genre' => 'Trinh thám',
            'duration' => '118 phút',
            'age' => 'T18',
            'release_date' => '30/05/2026',
            'cover' => 'https://images.unsplash.com/photo-1594909122845-11baa439b7bf?q=80&w=1600&auto=format&fit=crop',
            'poster' => 'https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c?q=80&w=500&auto=format&fit=crop',
        ],
    ];

    $movies = [
        [
            'title' => 'Buồn Thần Bán Thành',
            'poster' => 'https://images.unsplash.com/photo-1574267432553-4b4628081c31?q=80&w=500&auto=format&fit=crop',
            'genre' => 'Kinh dị',
            'duration' => '120 phút',
            'age' => 'T16',
            'status' => 'Đang chiếu',
        ],
        [
            'title' => 'Thành Phố Ánh Đèn',
            'poster' => 'https://images.unsplash.com/photo-1536440136628-849c177e76a1?q=80&w=500&auto=format&fit=crop',
            'genre' => 'Tình cảm',
            'duration' => '110 phút',
            'age' => 'T13',
            'status' => 'Đang chiếu',
        ],
        [
            'title' => 'Cuộc Đua Cuối Cùng',
            'poster' => 'https://images.unsplash.com/photo-1524985069026-dd778a71c7b4?q=80&w=500&auto=format&fit=crop',
            'genre' => 'Hành động',
            'duration' => '130 phút',
            'age' => 'T16',
            'status' => 'Đang chiếu',
        ],
        [
            'title' => 'Ngôi Nhà Điện Ảnh',
            'poster' => 'https://images.unsplash.com/photo-1582738411706-bfc8e691d1c2?q=80&w=500&auto=format&fit=crop',
            'genre' => 'Gia đình',
            'duration' => '100 phút',
            'age' => 'P',
            'status' => 'Đang chiếu',
        ],
        [
            'title' => 'Bí Mật Sau Màn Ảnh',
            'poster' => 'https://images.unsplash.com/photo-1512149177596-f817c7ef5d4c?q=80&w=500&auto=format&fit=crop',
            'genre' => 'Trinh thám',
            'duration' => '118 phút',
            'age' => 'T18',
            'status' => 'Đang chiếu',
        ],
        [
            'title' => 'Ký Ức Mùa Hè',
            'poster' => 'https://images.unsplash.com/photo-1535016120720-40c646be5580?q=80&w=500&auto=format&fit=crop',
            'genre' => 'Thanh xuân',
            'duration' => '105 phút',
            'age' => 'T13',
            'status' => 'Đang chiếu',
        ],
        [
            'title' => 'Vùng Đất Lạ',
            'poster' => 'https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?q=80&w=500&auto=format&fit=crop',
            'genre' => 'Phiêu lưu',
            'duration' => '125 phút',
            'age' => 'T13',
            'status' => 'Đang chiếu',
        ],
        [
            'title' => 'Đêm Cuối Cùng',
            'poster' => 'https://images.unsplash.com/photo-1502134249126-9f3755a50d78?q=80&w=500&auto=format&fit=crop',
            'genre' => 'Kịch tính',
            'duration' => '115 phút',
            'age' => 'T16',
            'status' => 'Đang chiếu',
        ],
    ];
@endphp

{{-- NAVBAR --}}
<header class="cine-navbar">
    <div class="container-fluid px-5">
        <div class="d-flex justify-content-between align-items-center">

            <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 text-decoration-none">
                <img src="{{ asset('assets/images/logo.png') }}" class="logo-img" alt="CineHome Logo">
                <div class="brand-text">Cine<span>Home</span></div>
            </a>

            <nav class="nav-menu">
                <a href="{{ route('home') }}" class="active">Trang chủ</a>
                <a href="#">Phim</a>
                <a href="#">Rạp</a>
                <a href="#">Lịch chiếu</a>
                <a href="#">Khuyến mãi</a>
                <a href="#">Vé của tôi</a>
            </nav>

            <div class="nav-action">
                <input type="text" class="search-box" placeholder="Tìm phim...">

                {{-- @guest
                    <a href="{{ route('login') }}" class="btn-login">Đăng nhập</a>
                    <a href="{{ route('register') }}" class="btn-register">Đăng ký</a>
                @else
                    <a href="#" class="btn-register">
                        <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                    </a>
                @endguest --}}
            </div>

        </div>
    </div>
</header>

{{-- HERO SLIDER --}}
<section class="hero-slider">

    @foreach ($bannerMovies as $index => $movie)
        <div 
            class="hero-slide {{ $index === 0 ? 'active' : '' }}"
            style="background-image: url('{{ $movie['cover'] }}');"
        >
            <div class="container-fluid px-5 hero-content">
                <div class="hero-info">

                    <div class="hero-badge">
                        <i class="fa-solid fa-fire"></i>
                        Phim hot trong tháng
                    </div>

                    <h1 class="hero-title">
                        {{ $movie['title'] }}
                    </h1>

                    <p class="hero-desc">
                        {{ $movie['description'] }}
                    </p>

                    <div class="hero-meta">
                        <span><i class="fa-solid fa-film"></i> {{ $movie['genre'] }}</span>
                        <span><i class="fa-solid fa-clock"></i> {{ $movie['duration'] }}</span>
                        <span><i class="fa-solid fa-user-shield"></i> {{ $movie['age'] }}</span>
                        <span><i class="fa-solid fa-calendar"></i> {{ $movie['release_date'] }}</span>
                    </div>

                    <div class="hero-buttons">
                        <a href="#" class="btn-book">
                            <i class="fa-solid fa-ticket"></i> Đặt vé ngay
                        </a>

                        <a href="#" class="btn-trailer">
                            <i class="fa-solid fa-play"></i> Xem trailer
                        </a>
                    </div>

                </div>
            </div>
        </div>
    @endforeach

    {{-- TOP 5 HOT --}}
    <div class="hot-movies">
        <div class="section-label">
            <i class="fa-solid fa-ranking-star"></i>
            Top 5 phim đang chiếu
        </div>

        <div class="hot-list">
            @foreach ($bannerMovies as $index => $movie)
                <div class="hot-item">
                    <div class="hot-rank">{{ $index + 1 }}</div>
                    <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}">
                    <p>{{ $movie['title'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

</section>

{{-- DANH SÁCH PHIM --}}
<main class="main-section">
    <div class="container-fluid px-5">

        <div class="section-title-wrap">
            <h2 class="section-title">
                Phim <span>đang chiếu</span>
            </h2>

            <div class="filter-tabs">
                <button class="active">Tất cả</button>
                <button>Hành động</button>
                <button>Kinh dị</button>
                <button>Tình cảm</button>
                <button>Sắp chiếu</button>
            </div>
        </div>

        <div class="row g-4">
            @foreach ($movies as $movie)
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="movie-card">

                        <div class="movie-poster">
                            <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}">

                            <div class="movie-status">
                                {{ $movie['status'] }}
                            </div>

                            <div class="movie-age">
                                {{ $movie['age'] }}
                            </div>
                        </div>

                        <div class="movie-body">
                            <h3 class="movie-title">
                                {{ $movie['title'] }}
                            </h3>

                            <div class="movie-info">
                                <p class="mb-1">
                                    <i class="fa-solid fa-film"></i>
                                    {{ $movie['genre'] }}
                                </p>

                                <p class="mb-0">
                                    <i class="fa-solid fa-clock"></i>
                                    {{ $movie['duration'] }}
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
            @endforeach
        </div>

    </div>
</main>

{{-- FOOTER --}}
<footer class="cine-footer">
    <div class="container-fluid px-5">
        <div class="row gy-4">

            <div class="col-md-4">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="CineHome Logo">
                    <strong>Cine<span>Home</span></strong>
                </div>

                <p>
                    CineHome là hệ thống đặt vé xem phim trực tuyến, hỗ trợ chọn ghế,
                    thanh toán QR và vé điện tử tiện lợi.
                </p>
            </div>

            <div class="col-md-2">
                <h5 class="text-white fw-bold">Menu</h5>
                <p>Phim</p>
                <p>Rạp</p>
                <p>Lịch chiếu</p>
            </div>

            <div class="col-md-3">
                <h5 class="text-white fw-bold">Hỗ trợ</h5>
                <p>Điều khoản sử dụng</p>
                <p>Chính sách hủy vé</p>
                <p>Liên hệ</p>
            </div>

            <div class="col-md-3">
                <h5 class="text-white fw-bold">Liên hệ</h5>
                <p><i class="fa-solid fa-envelope"></i> support@cinehome.vn</p>
                <p><i class="fa-solid fa-phone"></i> 0123 456 789</p>
            </div>

        </div>

        <hr class="border-secondary">

        <div class="text-center">
            © {{ date('Y') }} CineHome. All rights reserved.
        </div>
    </div>
</footer>

@endsection