<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-5 align-items-start">
            <!-- Left Info -->
            <div class="col-lg-6">
                <h2 class="fw-bold mb-3 text-success">Contact Us</h2>
                <p class="text-muted mb-3">Email, call, or complete the form to learn how our service can help you.</p>
                <p class="mb-2"><strong>Email:</strong> agropupuk@kementan.gov</p>
                <p class="mb-2"><strong>Phone:</strong> 321-221-231</p>
                <a href="#" class="text-success fw-semibold text-decoration-underline">Customer Support</a>

                <div class="row mt-5">
                    <div class="col-md-4">
                        <h6 class="fw-bold">Customer Support</h6>
                        <p class="text-muted small">Team kami dapat selalu membantu anda selama 24/7.</p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold">Feedback</h6>
                        <p class="text-muted small">Kami menerima masukan dari anda untuk memperbaiki pelayanan kami</p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="fw-bold">Media Inquiries</h6>
                        <p class="text-muted small">Contact us at <a href="mailto:agropupuk@kementan.gov">agropupuk@kementan.gov</a>.</p>
                    </div>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-6">
            <div class="bg-white rounded-4 p-5 shadow "> 
                <form action="{{ route('input') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Nama lengkap Anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg" id="inputEmail" name="email" placeholder="you@example.com" required>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Tulis pesan Anda..." id="floatingTextarea2" name="pesan" style="height: 150px;" required></textarea>
                        <label for="floatingTextarea2">Pesan</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg w-100">Kirim Pesan</button>
                    <p class="mt-3 text-center text-muted small">
                        Dengan mengirimkan formulir ini, Anda menyetujui 
                        <a href="#" class="text-decoration-underline">Kebijakan Privasi</a> & 
                        <a href="#" class="text-decoration-underline">Syarat Layanan</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>