<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Quản lý - CineHome')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/cinehome.css') }}">
</head>
<body>

<div class="dashboard-wrapper">

    <aside class="sidebar">
        <div class="sidebar-logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="CineHome Logo">
            <div>
                <h5>CineHome</h5>
                <small>Admin Panel</small>
            </div>
        </div>

        <div class="sidebar-menu">
            <a href="#" class="active">
                <i class="fa-solid fa-chart-line"></i> Dashboard
            </a>

            <a href="#">
                <i class="fa-solid fa-film"></i> Quản lý phim
            </a>

            <a href="#">
                <i class="fa-solid fa-image"></i> Poster / Trailer
            </a>

            <a href="#">
                <i class="fa-solid fa-building"></i> Quản lý rạp
            </a>

            <a href="#">
                <i class="fa-solid fa-chair"></i> Sơ đồ ghế
            </a>

            <a href="#">
                <i class="fa-solid fa-calendar-days"></i> Lịch chiếu
            </a>

            <a href="#">
                <i class="fa-solid fa-users"></i> Người dùng
            </a>

            <a href="#">
                <i class="fa-solid fa-user-tie"></i> Nhân viên
            </a>

            <a href="#">
                <i class="fa-solid fa-ticket"></i> Vé
            </a>

            <a href="#">
                <i class="fa-solid fa-burger"></i> Đồ ăn
            </a>

            <a href="#">
                <i class="fa-solid fa-chart-pie"></i> Thống kê
            </a>

            <a href="{{ route('home') }}">
                <i class="fa-solid fa-house"></i> Về trang User
            </a>
        </div>
    </aside>

    <section class="dashboard-main">
        <header class="dashboard-topbar">
            <div>
                <h5 class="mb-0 fw-bold">@yield('page-title', 'Trang quản lý')</h5>
                <small class="text-muted">Quản lý phim, rạp, lịch chiếu, người dùng và doanh thu</small>
            </div>

            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-outline-cine">
                    <i class="fa-solid fa-bell"></i>
                </button>

                <div class="dropdown">
                    <button class="btn btn-cine dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fa-solid fa-user-shield"></i> Admin
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="#" class="dropdown-item">Tài khoản</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item">Cài đặt</a>
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger">Đăng xuất</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <main class="dashboard-content">
            @yield('content')
        </main>
    </section>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@yield('scripts')
</body>
</html>