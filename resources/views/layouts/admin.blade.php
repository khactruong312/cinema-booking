<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin - CineHome')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- Admin CSS --}}
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>
<body>

<div class="admin-wrapper">

    {{-- SIDEBAR --}}
    <aside class="admin-sidebar" id="adminSidebar">

        <div class="sidebar-brand">
            <img src="{{ asset('assets/images/logo.png') }}" alt="CineHome Logo">
            <div>
                <h4>Cine<span>Home</span></h4>
                <small>Admin Panel</small>
            </div>
        </div>

        <div class="sidebar-section-title">Tổng quan</div>

        <nav class="sidebar-menu">
            <a href="{{ route('admin.dashboard') }}" class="active">
                <i class="fa-solid fa-chart-line"></i>
                <span>Dashboard</span>
            </a>
        </nav>

        <div class="sidebar-section-title">Quản lý nội dung</div>

        <nav class="sidebar-menu">
            <a href="#">
                <i class="fa-solid fa-film"></i>
                <span>Quản lý phim</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-clapperboard"></i>
                <span>Trailer / Poster</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-building"></i>
                <span>Quản lý rạp</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-chair"></i>
                <span>Sơ đồ ghế</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-calendar-days"></i>
                <span>Lịch chiếu</span>
            </a>
        </nav>

        <div class="sidebar-section-title">Vé & Giao dịch</div>

        <nav class="sidebar-menu">
            <a href="#">
                <i class="fa-solid fa-ticket"></i>
                <span>Quản lý vé</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-qrcode"></i>
                <span>Thanh toán QR</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-burger"></i>
                <span>Đồ ăn</span>
            </a>
        </nav>

        <div class="sidebar-section-title">Tài khoản</div>

        <nav class="sidebar-menu">
            <a href="#">
                <i class="fa-solid fa-users"></i>
                <span>Người dùng</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-user-tie"></i>
                <span>Nhân viên</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-shield-halved"></i>
                <span>Phân quyền</span>
            </a>
        </nav>

        <div class="sidebar-section-title">Báo cáo</div>

        <nav class="sidebar-menu">
            <a href="#">
                <i class="fa-solid fa-chart-pie"></i>
                <span>Thống kê doanh thu</span>
            </a>

            <a href="#">
                <i class="fa-solid fa-chart-column"></i>
                <span>Lượng khách</span>
            </a>
        </nav>

    </aside>

    {{-- MAIN --}}
    <main class="admin-main">

        {{-- TOPBAR --}}
        <header class="admin-topbar">

            <div class="topbar-left">
                <button class="sidebar-toggle" id="sidebarToggle">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div>
                    <h5>@yield('page-title', 'Dashboard')</h5>
                    <small>@yield('page-subtitle', 'Quản lý hệ thống đặt vé xem phim CineHome')</small>
                </div>
            </div>

            <div class="topbar-right">

                <div class="admin-search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <input type="text" placeholder="Tìm phim, vé, người dùng...">
                </div>

                <button class="topbar-icon">
                    <i class="fa-solid fa-bell"></i>
                    <span></span>
                </button>

                <div class="admin-profile dropdown">
                    <button class="profile-btn dropdown-toggle" data-bs-toggle="dropdown">
                        <div class="profile-avatar">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>

                        <div class="profile-info">
                            <strong>Admin</strong>
                            <small>Quản lý</small>
                        </div>
                    </button>

                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="#" class="dropdown-item">
                                <i class="fa-solid fa-user"></i> Tài khoản
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown-item">
                                <i class="fa-solid fa-gear"></i> Cài đặt
                            </a>
                        </li>

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            {{-- <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger">
                                    <i class="fa-solid fa-right-from-bracket"></i> Đăng xuất
                                </button>
                            </form> --}}
                        </li>
                    </ul>
                </div>

            </div>

        </header>

        {{-- CONTENT --}}
        <section class="admin-content">
            @yield('content')
        </section>

    </main>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

{{-- ChartJS --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

{{-- Admin JS --}}
<script src="{{ asset('assets/js/admin.js') }}"></script>

@yield('scripts')
</body>
</html>