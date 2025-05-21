    <!-- News & Articles Section -->
<section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill mb-2">Wawasan</span>
                <h2 class="display-5 fw-bold mb-3">Berita Terbaru</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Dapatkan informasi dan pengetahuan terkini seputar dunia pertanian</p>
            </div>
            
            <div class="row g-4">
                @forelse ($berita as $data)
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm rounded-4 news-card card-hover">
                        <img src="{{ asset('/storage/gambar berita/' . $data->gambar_berita) }}" class="card-img-top" alt="{{ $data->gambar_berita }}">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Berita</span>
                                <small class="text-muted">{{ $data->created_at->diffForHumans() }}</small>
                            </div>
                            <h5 class="card-title fw-bold">{{ $data->judul_berita }}</h5>
                            <p class="card-text text-muted"> {{ $data->deskripsi_berita }}</p>
                            <a href="{{ route('berita.pengunjung', ['id_berita' => $data->id_berita]) }}" target="_blank" class="btn btn-link text-success p-0 fw-medium d-flex align-items-center">
                                Baca Selengkapnya
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert bg-body-secondary text-dark ">
                        Data berita tidak ditemukan.
                    </div>
                @endforelse
            </div>
            
            <div class="text-center mt-5">
                <a href="{{route('berita')}}" class="btn btn-success btn-lg rounded-pill">
                    Lihat Semua Berita
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
</section>