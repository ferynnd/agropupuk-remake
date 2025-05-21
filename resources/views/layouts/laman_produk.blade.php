<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk | AGROPUPUK</title>

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
        .search-form input {
            height: 55px;
            font-size: 1.1rem;
        }
        .search-form button {
            height: 55px;
            font-size: 1.1rem;
        }
        footer {
            margin-top: auto;
        }
    </style>
</head>
<body>
    @include('component.nav')

    <!-- Header Produk -->
    <section class="header-section text-center">
        <div class="container">
            <h1 class="text-uppercase fw-bold fs-1 text-hijau mb-2" data-aos="fade-down">Produk</h1>
            <p class="text-muted fs-5" data-aos="fade-up" data-aos-delay="100">Temukan solusi terbaik untuk pertanian Anda</p>
        </div>
    </section>

    <!-- Filter dan Pencarian -->
    <div class="container py-5">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-5 gap-3">
            <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-3">
                @foreach ([
                    'npk' => 'NPK',
                    'phonska' => 'Phonska',
                    'urea' => 'Urea',
                    'za' => 'ZA+'
                ] as $id => $label)
                    <button type="button" class="btn btn-lg btn-success rounded-pill px-4 btn-filter-responsive" data-box-id="{{ $id }}">{{ $label }}</button>
                @endforeach
            </div>
            <form class="input-group search-form w-100 w-md-auto" action="{{ route('search') }}" method="GET">
                <input class="form-control rounded-start-pill" type="search" placeholder="Cari produk..." aria-label="Search" name="search" value="{{ old('search') }}">
                <button class="btn btn-success rounded-end-pill" type="submit">Cari</button>
            </form>
        </div>

        <style>
            /* Styling khusus untuk responsivitas tombol filter dan pencarian */
            @media (max-width: 767.98px) { /* Untuk layar di bawah 768px (mobile) */
                .btn-filter-responsive {
                    /* Mengurangi padding atau ukuran font jika diperlukan */
                    padding: .5rem 1rem; /* Padding lebih kecil */
                    font-size: .9rem;   /* Font lebih kecil */
                }

                .search-form {
                    /* Memastikan form pencarian mengambil lebar penuh pada mobile */
                    max-width: 100% !important; /* Override max-width */
                    margin-top: 1rem; /* Memberi jarak dari tombol di atasnya */
                }

                /* Jika tombol-tombolnya sendiri terlalu panjang pada satu baris, biarkan flex-wrap yang menanganinya */
                /* d-flex flex-wrap justify-content-center sudah cukup untuk menumpuk dan menengahkan tombol */
            }

            @media (min-width: 768px) { /* Untuk layar di atas 768px (tablet ke atas) */
                .search-form {
                    max-width: 400px !important; /* Kembalikan max-width untuk desktop */
                    margin-top: 0; /* Hapus margin atas */
                }
            }
        </style>

        <!-- Daftar Produk -->
        <div class="row g-4">
            @forelse ($data as $item)
                <div class="col-12 col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm product-card card-hover">
                        <img src="{{ asset('storage/gambarproduk/' . $item->image) }}" alt="{{ $item->image }}" class="card-img-top object-fit-cover" style="height: 20rem;">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">{{ $item->jenis }}</span>
                            </div>
                            <p class="card-text text-muted">{{ Str::limit($item->description, 50) }}</p>
                            <a href="#" class="btn btn-outline-success rounded-pill mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-warning text-center">Produk belum tersedia</div>
                </div>
            @endforelse
        </div>
    </div>

    @include('component.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>