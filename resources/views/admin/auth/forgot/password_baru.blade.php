<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password</title>

    <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/auth/pass_baru.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>
<body>

<section>
    <form method="POST" action="{{ route('password.reset') }}" class="card-login card rounded-10 p-4 shadow" style="width: 100%; max-width: 500px;">
        @csrf

        <div class="title text-center pt-2 fs-2 fw-bold text-uppercase">Reset Password</div>
        <div class="desc text-center mb-3 text-capitalize">Masukkan password dan konfirmasi password dengan benar</div>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger text-center">{{ session('error') }}</div>
        @endif

        <div class="input-box mb-3 position-relative">
            <input type="email" name="email" id="email" class="rounded-3 form-control" value="{{ old('email') }}" required />
            <label for="email" class="form-label" id="labelemail">Email</label>
            <i class="fa fa-envelope position-absolute end-0 top-50 translate-middle-y pe-3" id="user_icon"></i>
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="input-box mb-3 position-relative">
            <input type="text" name="code" id="code" class="rounded-3 form-control" value="{{ old('code') }}" required />
            <label for="code" class="form-label" id="labelcode">Kode Reset</label>
            <i class="fa fa-key position-absolute end-0 top-50 translate-middle-y pe-3" id="code_icon"></i>
            @error('code') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="input-box mb-3 position-relative">
            <input type="password" name="password" id="pass" class="form-control" required />
            <label for="pass" class="form-label" id="labelpass">Create Password</label>
            <i class="fa fa-eye-slash position-absolute end-0 top-50 translate-middle-y pe-3" id="pass_icon"></i>
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="input-box mb-4 position-relative">
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required />
            <label for="password_confirmation" class="form-label" id="labelconf">Confirm Password</label>
            <i class="fa fa-eye-slash position-absolute end-0 top-50 translate-middle-y pe-3" id="conf_icon"></i>
            @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="input-box button d-flex align-items-center justify-content-between">
            <a href="{{ url('forget/validasi') }}" class="btn btn-outline-secondary px-4 py-3 p-2">
                Kembali
            </a>
            <button type="submit" id="button" class="btn btn-success button px-4 py-3">
                Selesai
            </button>
        </div>
    </form>
</section>

<!-- Optional alert if password_confirmation error -->
@error('password_confirmation')
    <div class="alert alert-danger alert-dismissible fade show position-absolute end-0 bottom-0 me-3 mb-3"
        role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@enderror

<!-- JS Bootstrap -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

<!-- JS Custom -->
{{-- <script src="{{ asset('js/auth/pass_baru.js') }}"></script> --}}

</body>
</html>
