<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top py-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('beranda') }}">
            <i class="bi bi-flower1 text-success me-2 fs-3"></i>
            <span class="fw-bold fs-4">AGROPUPUK</span>
        </a>

        <!-- Button Offcanvas - hanya tampil di mobile -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav" aria-controls="mobileNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Desktop Menu -->
        <div class="collapse navbar-collapse d-none d-lg-flex" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('beranda') ? 'active' : '' }}" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('produk.index') ? 'active' : '' }}" href="{{ route('produk.index') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('sipupuk.index') ? 'active' : '' }}" href="{{ route('sipupuk.index') }}">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('berita') ? 'active' : '' }}" href="{{ route('berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium {{ request()->routeIs('tentangkami') ? 'active' : '' }}" href="{{ route('tentangkami') }}">Tentang Kami</a>
                </li>
            </ul>
            <div class="d-flex">
                <a href="{{ route('beranda') }}" class="btn btn-success rounded-pill fw-medium d-flex align-items-center">
                    <i class="bi bi-headset me-2"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>

    <!-- Offcanvas for Mobile Only -->
    <div class="offcanvas offcanvas-end d-lg-none glass-blur" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-success" id="mobileNavLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item py-2">
                    <a class="nav-link" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item py-2">
                    <a class="nav-link" href="{{ route('produk.index') }}">Produk</a>
                </li>
                <li class="nav-item py-2">
                    <a class="nav-link" href="{{ route('sipupuk.index') }}">Artikel</a>
                </li>
                <li class="nav-item py-2">
                    <a class="nav-link" href="{{ route('berita') }}">Berita</a>
                </li>
                <li class="nav-item py-2">
                    <a class="nav-link" href="{{ route('tentangkami') }}">Tentang Kami</a>
                </li>
                <li class="nav-item mt-3">
                    <a href="{{ route('beranda') }}" class="btn btn-success w-100 rounded-pill d-flex justify-content-center align-items-center">
                        <i class="bi bi-headset me-2"></i>
                        Hubungi Kami
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .glass-blur {
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-left: 1px solid rgba(255, 255, 255, 0.3);
    }
</style>
