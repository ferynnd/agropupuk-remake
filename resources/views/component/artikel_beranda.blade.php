
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill mb-2">Wawasan</span>
                <h2 class="display-5 fw-bold mb-3">Artikel Terbaru</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Dapatkan informasi dan pengetahuan terkini seputar dunia pertanian</p>
            </div>
            
            <div class="row g-4">
                @forelse ($sipupuks as $sipupuk)
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm rounded-4 news-card card-hover">
                        <img src="{{ asset('storage/gambar_sipupuk/' . $sipupuk->image) }}" class="card-img-top" style="height: 20rem;" alt="Artikel Pertanian">
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
                        <div class="alert alert-warning text-center">Article belum tersedia</div>
                    </div>
                @endforelse
            </div>
            
            <div class="text-center mt-5">
                <a  href="{{ route('sipupuk.index') }}" class="btn btn-success btn-lg rounded-pill">
                    Lihat Semua Artikel
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>