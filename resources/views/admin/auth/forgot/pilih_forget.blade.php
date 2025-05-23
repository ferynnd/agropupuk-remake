<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pilih opsi</title>
    {{-- link bs --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/auth/pilih_forget.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body class="d-flex align-items-center justify-content-center vh-100 w-100">
    <img src="{{ asset('storage/image/logoweb.png') }}" alt="logo"
        class="logo position-absolute top-0 start-0 mt-4 ms-4">
    <section class="kotak card rounded-4 d-flex justify-content-center gap-3">
        <h2 class="title pt-2 text-center">Ganti Password</h2>
        <p class="desc text-center text-capitalize">pilihlah metode yang sesuai dalam mengganti password</p>
        <div class="tombol d-flex align-items-stretch flex-column gap-4">
            <a href="{{ route('forget.email') }}" class="btn d-flex gap-3 align-items-center px-3">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                Email
            </a>
            <a href="{{ route('forget.validasi') }}" class="btn d-flex gap-3 align-items-center px-3">
                <i class="fa fa-user-shield" aria-hidden="true"></i>
                Validasi Data
            </a>
        </div>
        <div class="tombol-kembali mt-3 d-flex align-items-center justify-content-start">
            <a href="{{ url('/login') }}" class="btn d-flex gap-3 align-items-center">
                Kembali
            </a>
        </div>
    </section>

    {{-- link alert js dari sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // untuk tampilan alert atau pemberitahuan
        @if (session('success')) // jika suscces menambahkan atau mengubah data
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('warning')) // jika terjadi error atau nilai succes bernilai false
            Swal.fire({
                icon: "warning",
                title: "Maaf!",
                text: "{{ session('warning') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error')) // jika terjadi error atau nilai succes bernilai false
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
</body>

</html>
