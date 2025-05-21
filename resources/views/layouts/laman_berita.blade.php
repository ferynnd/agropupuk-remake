<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita | AGROPUPUK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/a8b5e7e027.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: white;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }
        .object-fit-cover {
            object-fit: cover;
        }
        .bg-hijau {
            background-color: #198754;
        }
        .text-hijau {
            color: #198754;
        }
        .header-section {
            padding: 4rem 0;
            background: linear-gradient(180deg, #e6f4ec 0%, #ffffff 100%);
            position: relative;
        }
        .header-section::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background-color: #198754;
            border-radius: 2px;
        }
        footer {
            margin-top: auto;
        }
        .berita-kiri .card-title,
        .berita-kanan .card-title {
            font-size: 1rem;
            line-height: 1.2em;
            max-height: 2.4em;
            overflow: hidden;
        }
        .berita-kanan .card {
            height: 100px;
        }
            /* Menggunakan kelas kustom untuk form pencarian berita */
        .search-news-form {
            max-width: 300px; /* Lebar default untuk desktop/tablet */
        }

        /* Media query untuk layar mobile (di bawah 768px) */
        @media (max-width: 767.98px) {
            .search-news-form {
                width: 100%; /* Ambil lebar penuh */
                max-width: none; /* Hapus batasan max-width */
                margin-top: 1rem; /* Beri jarak dari judul */
            }
            /* Memastikan judul rata tengah pada mobile jika flex-direction menjadi kolom */
            .text-md-start {
                text-align: center !important;
            }
        }
    </style>
</head>
<body>
    @include('component.nav')

    <!-- Header Section -->
    <section class="header-section text-center">
        <div class="container">
            <h1 class="text-uppercase fw-bold fs-1 text-hijau mb-2" data-aos="fade-down">Berita</h1>
            <p class="text-muted fs-5" data-aos="fade-up" data-aos-delay="100">
                Informasi terkini seputar kegiatan dan perkembangan AGROPUPUK
            </p>
        </div>
    </section>

    <div class="container py-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 gap-3">
            <h3 class="fw-bold text-success text-center text-md-start mb-0">Berita Terbaru</h3>
            <form class="input-group search-news-form" action="{{ route('search') }}" method="GET">
                <input class="form-control rounded-start-pill" type="search" placeholder="Cari berita..." aria-label="Search" name="search" value="{{ old('search') }}">
                <button class="btn btn-success rounded-end-pill" type="submit">Cari</button>
            </form>
        </div>


        <div class="row">
            <div class="col-lg-9 berita-kiri">
                <div class="row g-4">
                    @forelse ($berita as $data)
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 border-0 shadow-sm rounded-4 card-hover">
                            <img src="{{ asset('/storage/gambar berita/' . $data->gambar_berita) }}" class="card-img-top object-fit-cover" style="height: 160px;" alt="{{ $data->gambar_berita }}">
                            <div class="card-body p-3">
                                <h5 class="card-title fw-semibold">{{ $data->judul_berita }}</h5>
                                <p class="card-text text-muted small">{{ Str::limit(strip_tags($data->deskripsi_berita), 50) }}</p>
                                <a href="{{ route('berita.pengunjung', ['id_berita' => $data->id_berita]) }}" target="_blank" class="text-success small">Baca Selengkapnya <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    @empty
                        <div class="col-12">
                            <div class="alert alert-warning text-center">Data berita tidak ditemukan.</div>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="col-lg-3 berita-kanan">
                <h5 class="fw-bold mb-3">Berita Terkini</h5>
                @forelse ($beritaSide as $data)
                <div class="card mb-3 border-0 shadow-sm rounded-3 p-2" data-aos="fade-up" data-aos-delay="50">
                    <div class="card-body py-2 px-3">
                        <h6 class="card-title mb-1">{{ $data->judul_berita }}</h6>
                        <a href="{{ route('berita.pengunjung', ['id_berita' => $data->id_berita]) }}" class="text-success small">Lihat Selengkapnya</a>
                    </div>
                </div>
                @empty
                <div class="alert alert-warning">Data berita terkini tidak ditemukan.</div>
                @endforelse
            </div>
        </div>

        <div class="d-flex justify-content-center border-top mt-5 pt-4">
            <nav aria-label="Pagination">
                <ul class="pagination">
                    @if ($berita->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $berita->previousPageUrl() }}" rel="prev">Previous</a>
                        </li>
                    @endif

                    @if ($berita->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $berita->nextPageUrl() }}" rel="next">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">Next</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>

    @include('component.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>