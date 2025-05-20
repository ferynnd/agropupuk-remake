<nav class="">
    <div class="atas d-flex align-items-center justify-content-start">
        <i class="sidebar_tombol bx bx-menu d-flex align-items-center justify-content-center"></i>
        <img class="" src="{{ asset('/gambar/logo.png') }}" alt="" />
    </div>
    <div class="daftar_menu">
        <ul class="menu_atas ps-0 mb-0">
            <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ route('admin.dashboard') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bxs-dashboard d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Dashboard</span>
                </a>
            </li>
            <li class="{{ request()->is('admin/adminberanda') ? 'active' : '' }}">
                <a href="{{ route('admin_beranda.index') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-windows d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Beranda</span></a>
            </li>
            <li class="{{ request()->is('adminproduk') ? 'active' : '' }}">
                <a href="{{ url('adminproduk') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-package d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Produk</span></a>
            </li>
            <li class="{{ request()->is('admin/adminsipupuk') ? 'active' : '' }}">
                <a href="{{ url('admin/adminsipupuk') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bxs-florist d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Pupuk</span></a>
            </li>
            <li class="{{ request()->is('admin/berita', 'admin/berita/*') ? 'active' : '' }}">
                <a href="{{ route('admin_berita.index') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-news d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Berita</span></a>
            </li>
        </ul>
        <ul class="menu_bawah ps-0 mb-0">
            @if (Auth::user()->role == 'superadmin')
                <li class="{{ request()->is('register') ? 'active' : '' }}">
                    <a href="{{ url('/register') }}"
                        class="menu flex-fill d-flex align-items-center justify-content-start">
                        <i class="bx bx-user-plus d-flex align-items-center justify-content-center"></i>
                        <span class="nama_nav">Buat Admin</span></a>
                </li>
            @endif
            <li class="{{ request()->is('admin/profile/*') ? 'active' : '' }}">
                <a href="{{ url('/admin/profile/edit') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start">
                    <i class="bx bx-user d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Profile</span></a>
            </li>
            <li class="">
                <a href="{{ route('admin.logout') }}"
                    class="menu flex-fill d-flex align-items-center justify-content-start"
                    onclick="confirmLogout(event)">
                    <i class="bx bx-log-out d-flex align-items-center justify-content-center"></i>
                    <span class="nama_nav">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

{{-- <main>
    jika ingin menggunakan sidebar awali dan akhiri mengguanakan tag main
</main> --}}

<script>
    function confirmLogout(event) {
        // Menghentikan aksi default dari tag <a>
        event.preventDefault();

        // Menampilkan peringatan SweetAlert 2
        Swal.fire({
            title: 'Konfirmasi',
            text: 'Apakah Anda yakin ingin keluar?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Ya',
            cancelButtonText: 'Tidak',
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect ke halaman logout jika diklik "Ya"
                window.location.href = '{{ route('admin.logout') }}';
            } else {
                // Tidak melakukan apa-apa jika diklik "Tidak"
            }
        });
    }
</script>
