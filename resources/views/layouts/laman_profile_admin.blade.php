<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ isset($title) ? $title . '' : '' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/sidebar_new.css') }}">
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
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

        @yield('admin_profile_edit')

    </main>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/sidebar_news.js') }}"></script>

    <script>
        untuk tampilan alert atau pemberitahuan
        @if(session('success')) // jika suscces menambahkan atau mengubah data
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
        @elseif(session('error')) // jika terjadi error atau nilai succes bernilai false
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
