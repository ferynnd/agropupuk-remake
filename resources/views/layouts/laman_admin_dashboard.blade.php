<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <title>{{ isset($title) ? $title . '' : '' }}</title> --}}
    <title> Dashboard | ADMIN </title>
    <!-- Link Google Fonts untuk font Popins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    {{-- link alert dari sweetalert2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    {{-- link icon dari boxincons --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- link css --}}
    <link rel="stylesheet" href="{{ asset('css/sidebar_new.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        main header {
            padding: 2px 2px 10px 2px;
            border-bottom: #224038 2px solid;
        }

        header .list_page {
            font-size: 14px;
            font-weight: 500;
            color: var(--primary);
        }

        header .profile {
            gap: 10px;
        }

        header .nama_admin {
            color: var(--primary);
            font-size: 14px;
            font-weight: 500;
        }

        header img {
            width: 30px;
            height: 30px;
        }
    </style>
</head>

<body style="color: #E3E3E3">
    @include('component.sidebar_new')
    <main class="position-relative">

        @yield('admin_dashboard')

    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/sidebar_news.js') }}"></script>
    <script src="{{ asset('js/session.js') }}"></script>

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
