
<section class="py-5 bg-light position-relative overflow-hidden">
    <div class="container text-center">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill mb-2">Mitra Bisnis Kami</span>
                <h2 class="display-5 fw-bold mb-3">Mitra Strategis Kami</h2>
                <p class="text-muted mb-5">Kami bangga bermitra dengan perusahaan-perusahaan terbaik di industri.</p>
            </div>
        {{-- <h2 class="fw-bold mb-4 text-success">Mitra Strategis Kami</h2> --}}
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-4 justify-content-center">
            @php
                $logos = [
                    ['src' => 'petrokimia-gresik.png', 'alt' => 'Petrokimia Gresik'],
                    ['src' => 'pupuk-iskandar-muda.png', 'alt' => 'Pupuk Iskandar Muda'],
                    ['src' => 'pupuk-kaltim.png', 'alt' => 'Pupuk Kaltim'],
                    ['src' => 'pupuk-kujang.png', 'alt' => 'Pupuk Kujang'],
                    ['src' => 'pupuk-sriwijaya.png', 'alt' => 'Pupuk Sriwijaya'],
                ];
            @endphp

            @foreach ($logos as $index => $logo)
                <div class="col" data-aos="zoom-in" data-aos-delay="{{ $index * 100 }}" data-aos-duration="1000">
                    <div class="card h-100 shadow border-0 rounded-4 p-3 logo-card transition hover-shadow bg-white">
                        <img src="{{ asset('storage/image/' . $logo['src']) }}" alt="{{ $logo['alt'] }}" class="img-fluid">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
