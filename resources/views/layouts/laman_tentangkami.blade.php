<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tentang Kami | AGROPUPUK</title>
    
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- CDN Tailwind CSS resmi -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <!-- CDN Alpine.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.5/cdn.min.js" defer></script>
    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>

    <!-- Fonts & AOS -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .warna-hijau .text-hijau {
            color: #198754;
        }

        .bg-hijau {
            background-color: #198754;
        }
    </style>
</head>

<body>
    @include('component.nav')

<div class="container py-5" data-aos="fade-up">
    <div class="row text-center mb-5 position-relative">
        <h1 class="display-4 fw-bold text-success mb-3">Tentang Kami</h1>
        <div class="underline-accent mx-auto"></div>
    </div>

    
    <div class="row justify-content-center mb-5">
        <div class="col-md-10 col-lg-8 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="d-inline-flex align-items-center justify-content-center mb-4 large-logo">
                <i class="bi bi-flower1 text-success me-3"></i>
                <span class="fw-bold text-dark">AGROPUPUK</span>
            </div>
        </div>
    </div>
    
    
    <div class="row justify-content-center">
        <div data-aos="fade-up" data-aos-delay="300">
            <p class="lead text-dark text-justify">
                Logo <strong class="text-success">AgroPupuk</strong> lebih dari sekadar simbol visual; ia adalah representasi kuat dari identitas dan misi utama platform kami. Kata <strong class="text-success">"Agro"</strong>, yang berasal dari "Pertanian", secara jelas menunjukkan akar dan fokus kami pada sektor agrikultur. Sementara itu, kata <strong class="text-success">"Pupuk"</strong> menegaskan inti dari layanan dan informasi yang kami sediakan.
            </p>
            <p class="text-muted text-justify mb-4">
                Simbol <span class="text-success fw-bold">daun hijau</span> yang terintegrasi dalam logo kami memiliki makna yang mendalam. Ia tidak hanya melambangkan **kesuburan**, **pertumbuhan**, dan **kehidupan** yang menjadi esensi pertanian, tetapi juga merepresentasikan komitmen kami. Misi kami adalah menyediakan informasi komprehensif mengenai **kesuburan tanah** dan cara mencapai **pertumbuhan tanaman yang optimal** melalui penggunaan pupuk yang tepat dan berkelanjutan, sambil senantiasa menjaga kelestarian lingkungan.
            </p>
            <h4 class="fw-bold text-success mt-4 mb-3">AgroPupuk: Melangkah Maju dalam Dunia Pertanian Berkelanjutan</h4>
            <p class="text-muted text-justify">
                <strong class="text-success">AgroPupuk</strong> hadir sebagai **pusat informasi terkemuka** dan terpercaya seputar pupuk di Indonesia. Kami berdedikasi untuk menjadi sumber daya utama bagi siapa saja yang terlibat atau tertarik pada dunia pertanian. Platform kami mencakup beragam informasi vital, mulai dari **berita terkini** seputar kebijakan dan inovasi di sektor pupuk, **analisis mendalam** mengenai jenis-jenis pupuk dan aplikasinya, **data harga pasar** yang fluktuatif, hingga **panduan praktis** tentang penggunaan pupuk yang efisien dan ramah lingkungan.
            </p>
            <p class="text-muted text-justify">
                Kami berkomitmen penuh untuk menyajikan setiap artikel dan informasi dengan kualitas terbaik; memastikan semuanya <span class="text-dark fw-bold">mendalam, edukatif, akurat, dan relevan</span>. Tujuan utama kami adalah memberdayakan para petani Indonesia dengan pengetahuan yang mereka butuhkan untuk mengoptimalkan hasil panen, meningkatkan produktivitas, dan pada akhirnya, berkontribusi pada kemajuan pertanian nasional yang lebih mandiri dan berkelanjutan. AgroPupuk adalah mitra terpercaya Anda dalam mencapai keberhasilan pertanian.
            </p>
        </div>
    </div>
</div>

<style>
    /* Custom styles for the underline accent - Reused from previous section */
    .underline-accent {
        width: 80px; /* Lebar garis */
        height: 4px; /* Ketebalan garis */
        background-color: #28a745; /* Warna hijau success Bootstrap */
        border-radius: 2px;
        margin-top: 10px; /* Jarak dari teks */
    }

    /* Optional: Added subtle shadow and border-radius for the image */
    .img-fluid.shadow-lg.rounded-3 {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
    }

    /* Adjust font size for responsiveness */
    @media (max-width: 767.98px) {
        .display-4 {
            font-size: 2.5rem; /* Slightly smaller on small screens */
        }
    }


    /* Media query for smaller screens (e.g., tablets and mobiles) */
    @media (max-width: 991.98px) { /* Adjust breakpoint as needed, lg is 992px */
        .large-logo {
            scale: 2; /* Sedikit kecilkan pada layar tablet */
        }
        .large-logo .bi-flower1 {
            font-size: 4rem; /* Sesuaikan ukuran ikon */
        }
        .large-logo span {
            font-size: 3.6rem; /* Sesuaikan ukuran teks */
        }
    }

    /* Media query for even smaller screens (e.g., mobile phones) */
    @media (max-width: 767.98px) { /* Adjust breakpoint as needed, md is 768px */
        .display-4 {
            font-size: 2.5rem; /* Judul "Tentang Kami" sedikit kecil */
        }
        .large-logo {
            scale: 1.5; /* Lebih kecil lagi untuk mobile */
        }
        .large-logo .bi-flower1 {
            font-size: 3rem; /* Ukuran ikon mobile */
        }
        .large-logo span {
            font-size: 2.8rem; /* Ukuran teks mobile */
            white-space: nowrap; /* Mencegah teks putus baris jika memungkinkan */
        }
    }

    @media (max-width: 575.98px) { /* Adjust breakpoint as needed, sm is 576px */
        .large-logo {
            scale: 1.2; /* Lebih kecil lagi untuk mobile sangat kecil */
            flex-direction: column; /* Ikon dan teks menumpuk vertikal */
            line-height: 1.2; /* Menyesuaikan line height saat menumpuk */
        }
        .large-logo .bi-flower1 {
            font-size: 3rem; /* Ukuran ikon mobile sangat kecil */
            margin-bottom: 0.5rem !important; /* Tambah jarak bawah ikon saat menumpuk */
            margin-right: 0 !important; /* Hapus margin kanan ikon saat menumpuk */
        }
        .large-logo span {
            font-size: 2.5rem; /* Ukuran teks mobile sangat kecil */
            text-align: center;
            white-space: normal; /* Izinkan teks putus baris jika perlu */
        }
    }
</style>

    <section class="py-5">
    <div class="container">
        <div class="mb-4">
            <h2 class="display-4 fw-bold">
                <span class="text-secondary">Mendukung </span>
                <span class="text-success">Pertanian Lokal,</span><br>
                <span class="text-secondary">Menciptakan Dampak Global.</span>
            </h2>
            <p class="text-muted mt-3 col-md-10 col-lg-8">
                Agropupuk didirikan dengan tujuan untuk memberikan layanan dan mengembangkan inovasi dalam pertanian yang berkelanjutan. Kami berkomitmen untuk membantu petani Indonesia mengoptimalkan hasil pertanian yang berkelanjutan dan tetap menjaga kelestarian lingkungan sekitar. Melalui riset dan kerja keras, kami berkomitmen untuk mewujudkan praktek pertanian masa depan yang lebih maju.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="d-grid gap-4">
                    <div class="card shadow-sm p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-success-subtle p-3 rounded-circle me-3">
                                <svg class="text-success" style="width: 24px; height: 24px;" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-12.5v5l4.25 2.52.77-1.28-3.52-2.09V7.5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="h4 fw-semibold text-success mb-2">Misi Kami</h3>
                                <p class="text-muted">
                                    Memberikan solusi inovatif berteknologi terbaik untuk para petani, meningkatkan produktivitas dan penghasilan. Kami hadir dengan solusi pertanian modern, berbasis data dan riset, serta mengenalkan teknologi terkini ke bidang pertanian untuk memastikan solusi pertanian modern yang adaptif dan beragam.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-success-subtle p-3 rounded-circle me-3">
                                <svg class="text-success" style="width: 24px; height: 24px;" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="h4 fw-semibold text-success mb-2">Visi Kami</h3>
                                <p class="text-muted">
                                    Mengembangkan ekosistem berkelanjutan yang didukung oleh inovasi teknologi dan pengetahuan praktis, sebagai mitra perkembangan kelestarian pertanian modern Indonesia.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card rounded-3 overflow-hidden shadow h-100">
                    <img src="{{ asset('storage/image/gambar-kami.jpg') }}"  alt="Lahan pertanian berkelanjutan" class="card-img-top h-100 object-fit-cover">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container py-5" data-aos="fade-up">
    <div class="row text-center mb-5 position-relative">
        <h2 class="display-4 fw-bold text-success mb-3">Tim Kami</h2>
        <div class="underline-accent mx-auto"></div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @php
            $tim = [
                [
                    'nama' => 'Ahmad Hamdani',
                    'hp' => '0812-3456-7890',
                    'email' => 'ahmad.hamdani@agrofarmid.com',
                    'role' => 'Ahli Pupuk Organik',
                    'deskripsi' => 'Berpengalaman dalam pengembangan dan aplikasi pupuk organik berkelanjutan, memastikan kesuburan tanah dan hasil panen berkualitas tanpa merusak lingkungan.',
                    'image' => 'storage/image/img-hamdani.jpeg'
                ],
                [
                    'nama' => 'Ferry Fernando',
                    'hp' => '0823-4567-8901',
                    'email' => 'ferry.fernando@agrofarmid.com',
                    'role' => 'Peneliti Pertanian',
                    'deskripsi' => 'Fokus pada riset inovatif untuk meningkatkan produktivitas tanaman dan ketahanan terhadap hama penyakit, menggunakan pendekatan ilmiah terkini.',
                    'image' => 'storage/image/img-ferry.jpeg'
                ],
                [
                    'nama' => 'Samodera Haqqi',
                    'hp' => '0834-5678-9012',
                    'email' => 'samodera.haqqi@agrofarmid.com',
                    'role' => 'Pengembang Pupuk Anorganik',
                    'deskripsi' => 'Menciptakan formulasi pupuk anorganik yang efisien dan ramah lingkungan, mendukung pertumbuhan optimal tanaman dan peningkatan kualitas hasil panen.',
                    'image' => 'storage/image/img-sam.jpeg'
                ],
                [
                    'nama' => 'Kress Satoe Java',
                    'hp' => '0845-6789-0123',
                    'email' => 'kress.satoe@agrofarmid.com',
                    'role' => 'Aktivis Lingkungan & Komunitas',
                    'deskripsi' => 'Berdedikasi untuk mempromosikan praktik pertanian lestari dan membangun kesadaran lingkungan di kalangan petani dan masyarakat luas.',
                    'image' => 'storage/image/img-java.jpeg'
                ]
            ];
        @endphp
        @foreach ($tim as $anggota)
            <div class="col">
                <div class="card h-100 shadow-sm border-0 transform-on-hover">
                    <div class="card-body text-center d-flex flex-column align-items-center p-4">
                        <img src="{{ asset($anggota['image']) }}" 
                             alt="{{ $anggota['nama'] }}" 
                             class="rounded-circle mb-3 border border-4 border-success profile-photo" 
                             style="width: 150px; height: 150px; object-fit: cover; transform: scale(1);">
                        
                        <h5 class="card-title fw-bold mt-3 text-dark">{{ $anggota['nama'] }}</h5>
                        <p class="text-success fw-semibold mb-2">{{ $anggota['role'] }}</p>
                        <p class="text-muted small mb-3 flex-grow-1">{{ $anggota['deskripsi'] }}</p>

                        <div class="contact-info text-start w-100">
                            <p class="mb-1"><i class="bi bi-phone me-2 text-success"></i>{{ $anggota['hp'] }}</p>
                            <p class="mb-1"><i class="bi bi-envelope me-2 text-success"></i>{{ $anggota['email'] }}</p>
                            <p class="mb-0"><i class="bi bi-building me-2 text-success"></i>Politeknik Negeri Madiun</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    /* Custom styles for the underline accent */
    .underline-accent {
        width: 80px; /* Lebar garis */
        height: 4px; /* Ketebalan garis */
        background-color: #28a745; /* Warna hijau success Bootstrap */
        border-radius: 2px;
        margin-top: 10px; /* Jarak dari teks */
    }

    /* Hover effect for cards */
    .transform-on-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .transform-on-hover:hover {
        transform: translateY(-5px) scale(1.02); /* Sedikit naik dan membesar */
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; /* Efek shadow lebih jelas */
    }

    /* Hover effect for profile photo */
    .profile-photo {
        transition: transform 0.3s ease;
    }

    .transform-on-hover:hover .profile-photo {
        transform: scale(1.05); /* Sedikit membesar saat hover */
    }

    /* Adjust font size for small screens */
    @media (max-width: 575.98px) {
        .card-title {
            font-size: 1.25rem; /* Ukuran h5 standar */
        }
        .text-success.fw-semibold.mb-2 {
            font-size: 0.95rem;
        }
        .text-muted.small {
            font-size: 0.8rem;
        }
        .contact-info p {
            font-size: 0.85rem;
        }
    }
</style>

    @include('component.footer')

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
</body>
</html>
