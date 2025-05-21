<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lupa Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Latar belakang sedikit abu-abu */
        }
        .card {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15); /* Efek bayangan */
        }
        .card-header {
            background-color: #224038;
            color: #fff;
            text-align: center;
            padding: 1.5rem 0;
            border-radius: 0.3rem 0.3rem 0 0; /* Sudut melengkung di atas */
        }
        .card-title {
            color: #fff;
            margin-bottom: 0;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #224038;
            border-color: #224038;
        }
        .btn-primary:hover {
            background-color: #1a302a; /* Warna lebih gelap saat dihover */
            border-color: #1a302a;
        }
        label {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 500px;">
            <div class="card-header">
                <h4 class="card-title mb-0">Lupa Password</h4>
            </div>
            <div class="card-body p-4">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @elseif(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form method="POST" action="{{ route('password.send.code') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                        @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Kirim Kode Reset</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>