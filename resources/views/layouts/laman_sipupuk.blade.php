<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Si Pupuk | AGROPUPUK</title>

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
        
    </style>
</head>
<body>
    @include('component.nav')

    <!-- Header Section -->
    <section class="header-section text-center">
        <div class="container">
            <h1 class="text-uppercase fw-bold fs-1 text-hijau mb-2" data-aos="fade-down">SI PUPUK</h1>
            <p class="text-muted fs-5" data-aos="fade-up" data-aos-delay="100">
                Sistem Informasi Pupuk yang membantu dalam memberikan informasi tentang pupuk
            </p>
        </div>
    </section>

    <div class="container py-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 gap-3">
            <h3 class="fw-bold text-success text-center text-md-start mb-0">Artikel On Going</h3>
            <form class="input-group search-article-form" action="{{ route('search') }}" method="GET">
                <input class="form-control rounded-start-pill" type="search" placeholder="Cari artikel..." aria-label="Search" name="search" value="{{ old('search') }}">
                <button class="btn btn-success rounded-end-pill" type="submit">Cari</button>
            </form>
        </div>

    <style>
        /* Menggunakan kelas kustom untuk form pencarian artikel */
        .search-article-form {
            max-width: 300px; /* Lebar default untuk desktop/tablet */
        }

        /* Media query untuk layar mobile (di bawah 768px) */
        @media (max-width: 767.98px) {
            .search-article-form {
                width: 100%; /* Ambil lebar penuh */
                max-width: none; /* Hapus batasan max-width */
                margin-top: 1rem; /* Beri jarak dari judul */
            }
            /* Memastikan judul rata tengah pada mobile */
            .text-md-start {
                text-align: center !important;
            }
        }
    </style>

        <!-- Card Artikel -->
        <div class="row g-4">
            @forelse ($sipupuks as $sipupuk)
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm rounded-4 news-card card-hover">
                    <img src="{{ asset('storage/gambar_sipupuk/' . $sipupuk->image) }}" class="card-img-top object-fit-cover" style="height: 20rem;" alt="Artikel Pertanian">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Artikel</span>
                            <small class="text-muted">{{ $sipupuk->created_at->diffForHumans() }}</small>
                        </div>
                        <h5 class="card-title fw-bold">{{ Str::limit($sipupuk->title, 70) }}</h5>
                        <p class="card-text text-muted">{{ Str::limit(strip_tags($sipupuk->content, 60)) }}</p>
                        <a href="{{ route('sipupuk.show', $sipupuk->id) }}" class="btn btn-link text-success p-0 fw-medium d-flex align-items-center">
                            Baca Selengkapnya
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">Artikel belum tersedia</div>
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center border-top mt-5 pt-4">
            <nav aria-label="Pagination">
                <ul class="pagination">
                    @if ($sipupuks->onFirstPage())
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $sipupuks->previousPageUrl() }}" rel="prev">Previous</a>
                        </li>
                    @endif

                    @if ($sipupuks->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $sipupuks->nextPageUrl() }}" rel="next">Next</a>
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