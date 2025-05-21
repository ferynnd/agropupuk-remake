{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beranda | AGROPUPUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/beranda.css') }}" />
    <style>
        /* Pastikan untuk mengintegrasikan styling ini ke dalam beranda.css atau gunakan SCSS untuk Bootstrap */
        .card-hover {
            background-color: transparent;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }

        .card-hover:hover {
            background-color: white;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; /* Menggunakan shadow Bootstrap */
        }

        .kotak-konten {
            background-image: url('{{ asset('storage/image/wave.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 5rem 0; /* Memberi padding agar konten tidak terlalu mepet */
        }

        /* Kelas kustom untuk ukuran teks kecil jika text-sm tidak berfungsi dengan baik */
        .text-sm {
            font-size: 0.875em; /* 14px default */
        }

        /* Penyesuaian untuk gambar di Carousel */
        .carousel-item img {
            height: 700px; /* Tinggi default */
            object-fit: cover;
        }

        /* Media queries untuk responsivitas gambar carousel */
        @media (max-width: 991.98px) {
            .carousel-item img {
                height: 500px;
            }
        }

        @media (max-width: 767.98px) {
            .carousel-item img {
                height: 350px;
            }
        }

        /* Penyesuaian untuk bagian "Tentang Kami" */
        .bungkus-animasi {
            overflow: hidden; /* Penting untuk animasi AOS pada h1 */
        }

        .ttg-kami {
            position: relative;
            display: inline-block; /* Agar bisa menerapkan efek data-text */
        }

        /* Contoh penyesuaian untuk gambar galeri */
        .img-fluid-custom {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hover-img {
            transition: transform 0.3s ease;
        }

        .hover-img:hover {
            transform: scale(1.05);
        }

        /* Untuk bagian "AGROPUPUK" dengan background image */
        .bg-hijau {
            background-color: #28a745; /* Contoh warna hijau Bootstrap */
            padding: 5rem 0;
            position: relative;
            overflow: hidden; /* Pastikan teks tidak keluar dari container */
        }

        .bg-hijau img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.3; /* Transparansi gambar background */
            z-index: 0;
        }

        .bg-hijau h1,
        .bg-hijau h3 {
            position: relative;
            z-index: 1; /* Pastikan teks di atas gambar */
            color: white;
        }

        .fs-full {
            font-size: clamp(2rem, 5vw, 4rem); /* Responsive font-size */
        }

        .fs-end {
            font-size: clamp(1rem, 2vw, 1.5rem); /* Responsive font-size */
        }

        /* Galeri */
        .m-top-2 {
            margin-top: 1rem; /* Sesuaikan dengan kebutuhan */
        }

        .margin-2 {
            margin-left: 1rem; /* Sesuaikan dengan kebutuhan */
            margin-right: 1rem; /* Sesuaikan dengan kebutuhan */
        }

        /* Penyesuaian untuk Our Groups */
        .our-grub {
            background-color: #343a40; /* Warna gelap Bootstrap */
            padding: 3rem 0;
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
    </style>
</head>

<body>

    @include('component.navbaru')

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 animate-fade-in" data-aos="fade-right" data-aos-delay="100">
                    <div class="d-inline-flex align-items-center bg-success-subtle px-3 py-1 rounded-pill mb-4">
                        <svg class="h-4 w-4 text-success me-2" fill="currentColor" viewBox="0 0 20 20" style="width: 1rem; height: 1rem;">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span class="text-sm text-success-emphasis">Berbasis AI, Dirancang Dengan Hati</span>
                    </div>
                    <h1 class="display-4 fw-bold mb-4">
                        <span class="text-dark">Solusi Pertanian</span><br>
                        <span class="text-dark">Untuk Masa</span><br>
                        <span class="text-success">Depan Yang</span><br>
                        <span class="text-dark">Berkelanjutan.</span>
                    </h1>
                    <p class="text-muted mb-4">
                        Kami adalah platform pertanian terdepan di Indonesia bagi petani yang ingin inovasi. Meningkatkan hasil panen dengan solusi berbasis teknologi untuk pertanian yang lestari dan menguntungkan.
                    </p>
                    <a href="#layanan" class="btn btn-success btn-lg d-inline-flex align-items-center">
                        <span>Pelajari Lebih Lanjut</span>
                        <svg class="ms-2" width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                <div class="col-md-6 animate-fade-in" data-aos="fade-left" data-aos-delay="200">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/600x400" alt="Petani dengan teknologi" class="img-fluid rounded shadow-lg w-100">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
                    <div class="carousel-inner">
                        @foreach ($corosel as $data)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} position-relative">
                                <img src="{{ asset('storage/gambar corosel/' . $data->image) }}"
                                    class="d-block w-100 object-fit-cover"
                                    alt="{{ $data->image }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
                        <div class="position-absolute bottom-0 end-0 bg-white p-3 rounded shadow translate-middle-y">
                            <div class="d-flex align-items-center">
                                <svg class="h-6 w-6 text-success me-2" fill="currentColor" viewBox="0 0 24 24" style="width: 1.5rem; height: 1.5rem;">
                                    <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                                </svg>
                                <div>
                                    <p class="text-sm text-muted mb-0">Meningkatkan hasil panen</p>
                                    <p class="fw-bold text-success mb-0">30% Lebih Tinggi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
        @include('component.newproduct')
        <div class="w-100 bg-hijau shadow text-center py-5 mb-5">
            <img src="{{ asset('storage/image/bgImg.png') }}" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover opacity-25" alt="Background AGROPUPUK" />
            <div class="position-relative z-1 text-white">
                <h1 class="fw-bold fs-full mb-3">AGROPUPUK</h1>
                <h3 class="fs-end">
                    hadir sebagai mitra terpercaya bagi para petani di Indonesia. Kami menyediakan berbagai jenis pupuk berkualitas tinggi, <br>
                    baik organik maupun kimia, untuk memenuhi kebutuhan budidaya tanaman Anda. Tak hanya itu, <br>
                    kami juga menawarkan informasi pertanian yang lengkap dan terkini
                    untuk membantu Anda <br> meningkatkan hasil panen dan mencapai kesuksesan dalam bertani.
                </h3>
            </div>
        </div>

        <div class="container mb-5">
            <div class="row">
                <div class="col-12 mb-4" data-aos="fade-down" data-aos-offset="100" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('storage/image/galeriimg1.jpg') }}" class="img-fluid rounded-3 hover-img w-100" alt="Galeri 1" style="max-height: 400px; object-fit: cover;"/>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('storage/image/galeriimg2.jpg') }}" class="img-fluid rounded-3 hover-img w-100" alt="Galeri 2" style="max-height: 300px; object-fit: cover;"/>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('storage/image/galeriimg3.png') }}" class="img-fluid rounded-3 hover-img w-100" alt="Galeri 3" style="max-height: 300px; object-fit: cover;"/>
                </div>
                <div class="col-md-4 mb-3" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('storage/image/galeriimg4.png') }}" class="img-fluid rounded-3 hover-img w-100" alt="Galeri 4" style="max-height: 300px; object-fit: cover;"/>
                </div>
            </div>
        </div>

        @include('component.banner')
        @include('component.artikel_beranda')
        @include('component.banner')
        @include('component.berita_laman_beranda')
        <div class="our-grub d-flex justify-content-center align-items-center py-4 my-5">
            <h1 class="text-white fs-4 fw-bold mb-0">Our Groups</h1>
        </div>

        @include('component.corp_beranda')
        @include('component.contactus_beranda')
        @include('component.footer')
        </div> <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beranda | AGROPUPUK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .bg-hijau {
            background-color: #198754;
        }
        
        .text-hijau {
            color: #198754;
        }
        
        .hover-img {
            transition: transform 0.3s ease;
            overflow: hidden;
        }
        
        .hover-img:hover {
            transform: scale(1.03);
        }
        
        .hero-carousel {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .navbar {
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }
        
        .btn-success {
            border-radius: 50px;
            padding: 10px 25px;
        }
        
        .stats-box {
            border-radius: 12px;
        }
        
        .our-grub {
            background-color: #198754;
            border-radius: 100px;
            max-width: 350px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .product-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(25, 135, 84, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
        }
        
        .feature-icon i {
            font-size: 24px;
            color: #198754;
        }
        
        .news-card img {
            border-radius: 12px;
            height: 200px;
            object-fit: cover;
        }
        
        .contact-card {
            border-radius: 15px;
            overflow: hidden;
        }
        
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <!-- Navbar Section -->
    @include('component.nav')

    
    {{-- @include('component.navbaru') --}}

    <!-- Hero Section -->
    <section class="py-5">
        <div style="  height: 70dvh;" class="container d-flex justify-items-center ">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="d-inline-flex align-items-center bg-success-subtle px-3 py-1 rounded-pill mb-4">
                        <i class="bi bi-check-circle-fill text-success me-2"></i>
                        <span class="text-success fw-medium">Terverifikasi Kementrian Pertanian</span>
                    </div>
                    <h1 class="display-4 fw-bold mb-4">
                        <span class="text-dark">Solusi Pertanian</span><br>
                        <span class="text-dark">Untuk Masa</span><br>
                        <span class="text-success">Depan Yang</span><br>
                        <span class="text-dark">Berkelanjutan.</span>
                    </h1>
                    <p class="text-muted mb-4 fs-5">
                        Kami adalah platform pertanian terdepan di Indonesia bagi petani yang ingin inovasi. Meningkatkan hasil panen dengan solusi berbasis teknologi untuk pertanian yang lestari dan menguntungkan.
                    </p>
                    <a href="#products" class="btn btn-success btn-lg d-inline-flex align-items-center">
                        <span>Pelajari Lebih Lanjut</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                    <div class="position-relative hero-carousel">
                        <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach ($corosel as $data)
                                <div class="carousel-item active">
                                    <img  src="{{ asset('storage/gambar corosel/' . $data->image) }}" class="d-block w-100 object-fit-cover" alt="{{ $data->image }}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('component.newproduct')

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="bg-success rounded-4 shadow text-center py-5 position-relative overflow-hidden">
                <div class="position-relative z-1 text-white py-4 px-3">
                    <h1 class="fw-bold display-4 mb-3">AGROPUPUK</h1>
                    <p class="fs-5 mx-auto" style="max-width: 800px;">
                        hadir sebagai mitra terpercaya bagi para petani di Indonesia. Kami menyediakan berbagai jenis pupuk berkualitas tinggi, 
                        baik organik maupun kimia, untuk memenuhi kebutuhan budidaya tanaman Anda. Tak hanya itu, 
                        kami juga menawarkan informasi pertanian yang lengkap dan terkini
                        untuk membantu Anda meningkatkan hasil panen dan mencapai kesuksesan dalam bertani.
                    </p>
                    <a href="{{ route('tentangkami')}}" class="btn btn-light btn-lg rounded-pill text-success mt-3">
                        <i class="bi bi-people-fill me-2"></i>
                        Tentang Kami
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill mb-2">Galeri</span>
                <h2 class="display-5 fw-bold mb-3">Melihat Lebih Dekat</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Galeri foto dari berbagai kegiatan dan produk AGROPUPUK di lapangan</p>
            </div>
            
            <div class="row g-4">
                <div class="col-12" data-aos="fade-down" data-aos-offset="100" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('storage/image/galeriimg1.jpg') }}" class="img-fluid rounded-4 hover-img w-100 shadow-sm" alt="Galeri 1" style="object-fit: cover;">
                </div>
                <div class="col-md-4" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('storage/image/galeriimg2.jpg') }}" class="img-fluid rounded-4 hover-img w-100 shadow-sm" alt="Galeri 2" style="height: 250px; object-fit: cover;">
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-offset="200" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('storage/image/galeriimg3.png') }}" class="img-fluid rounded-4 hover-img w-100 shadow-sm" alt="Galeri 3" style="height: 250px; object-fit: cover;">
                </div>
                <div class="col-md-4" data-aos="fade-left" data-aos-offset="200" data-aos-easing="ease-in-sine">
                    <img src="{{ asset('storage/image/galeriimg4.png') }}" class="img-fluid rounded-4 hover-img w-100 shadow-sm" alt="Galeri 4" style="height: 250px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>


    @include('component.artikel_beranda')

    <!-- Features Section -->
    <section class="py-5 bg-light" id="layanan">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill mb-2">Keunggulan</span>
                <h2 class="display-5 fw-bold mb-3">Kenapa Memilih Kami?</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">AGROPUPUK memberikan berbagai keunggulan untuk membantu kesuksesan pertanian Anda</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 card-hover">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Teknologi Modern</h4>
                        <p class="text-muted">Menggunakan teknologi AI dan IoT untuk memberikan solusi pertanian yang lebih efisien dan presisi.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 card-hover">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-tree-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Ramah Lingkungan</h4>
                        <p class="text-muted">Komitmen kami pada praktik pertanian berkelanjutan yang menjaga kesehatan tanah dan lingkungan.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 card-hover">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-graph-up-arrow"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Hasil Maksimal</h4>
                        <p class="text-muted">Produk dan layanan kami terbukti meningkatkan hasil panen hingga 30% lebih tinggi dari metode konvensional.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 card-hover">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Pendampingan Ahli</h4>
                        <p class="text-muted">Tim ahli pertanian kami siap memberikan konsultasi dan pendampingan untuk keberhasilan usaha tani Anda.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 card-hover">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Produk Berkualitas</h4>
                        <p class="text-muted">Semua produk kami melewati kontrol kualitas ketat dan telah tersertifikasi oleh lembaga terkait.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 card-hover">
                        <div class="feature-icon mb-4">
                            <i class="bi bi-cash-coin"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Harga Bersaing</h4>
                        <p class="text-muted">Menawarkan harga yang kompetitif dengan nilai dan manfaat yang jauh lebih besar untuk pertanian Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@include('component.berita_laman_beranda')

@include('component.corp_beranda')

@include('component.contactus_beranda')

@include('component.footer')


<!-- Styles & Scripts -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>


    {{-- @include('component.corp_beranda')
    @include('component.contactus_beranda')
    @include('component.footer')
    

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script> --}}
</body>

</html>
