<footer class="text-white bg-hijau pt-5">
    <div class="container text-center">
        <div class="row justify-content-center mb-3">
            @foreach (['Tentang Kami', 'Produk', 'Si Pupuk', 'Bantuan', 'Kontak'] as $item)
                <div class="col-6 col-md-2 mb-3">
                    <a href="#!" class="text-white text-decoration-none fw-semibold">{{ $item }}</a>
                </div>
            @endforeach
        </div>

        <hr class="border-white">

        <div class="mb-3">
            <a class="navbar-brand d-flex justify-content-center align-items-center mb-2" href="{{ route('beranda') }}">
                <i class="bi bi-flower1 text-white me-2 fs-3"></i>
                <span class="fw-bold fs-4 text-white">AGROPUPUK</span>
            </a>
            <p class="mt-2 small">
                Satukan sinergi untuk petani Indonesia mendunia.
            </p>
        </div>

        <div class="mb-4">
            <a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-google"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-white mx-2"><i class="fab fa-github"></i></a>
        </div>
    </div>

    <div class="text-center py-3 bg-dark bg-opacity-25 small">
        © 2025 Copyright:
        <a class="text-white text-decoration-none" href="#">agropupuk.infitechd.my.id</a>
    </div>
</footer>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">