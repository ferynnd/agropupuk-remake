
    <!-- Products Section -->
    <section class="py-5 bg-light m-10" id="products">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill mb-2">Produk Kami</span>
                <h2 class="display-5 fw-bold mb-3">Produk Unggulan</h2>
                <p class="text-muted mx-auto" style="max-width: 600px;">Temukan berbagai produk berkualitas untuk kebutuhan pertanian Anda. Dari pupuk organik hingga teknologi modern.</p>
            </div>
        
            <div class="row g-4">
                @forelse ($Produk as $item)
                <div class="col-12 col-sm-6 col-md-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm product-card card-hover">
                        <img src="{{ asset('storage/gambarproduk/' . $item->image) }}" alt="{{ $item->image }}" class="card-img-top object-fit-cover" style="height: 20rem;">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <h5 class="card-title fw-bold">{{ $item->title }}</h5>
                                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">{{$item->jenis}}</span>
                            </div>
                            <p class="card-text text-muted">{{Str::limit($item->description, 50)}}</p>
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

            <div class="text-center mt-5">
                <a href="#" class="btn btn-success btn-lg rounded-pill">
                    Lihat Semua Produk
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>
            </div>
        </div>
    </section>
