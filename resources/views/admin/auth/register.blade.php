<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
    {{-- link bs --}}
    <link rel="stylesheet" href="{{ asset('css/boostrap/bootstrap.min.css') }}">
</head>

<body class="badan">
    <img src="{{ asset('storage/image/logoweb.png') }}" alt="logo"
        class="logo position-absolute top-0 start-0 mt-4 ms-4">
    <div class="wrapper">
        <div class="title">Buat Admin Baru</div>
        <div class="desc">Masukkan data admin yang akan dibuat</div>
        <form action="{{ url('process_register') }}" method="POST">
            @csrf
            <div class="input-box">
                <input type="text" name="username" id="user" class="@error('username') is-invalid @enderror"
                    required />
                <label for="user" id="labeluser">Username</label>
                <i class="fa fa-user" id="user_icon"></i>
            </div>
            <div class="input-box">
                <input type="text" name="email" id="email" required
                    class="@error('email') is-invalid @enderror" />
                <label for="email" id="labelemail">Email</label>
                <i class="fa fa-user" id="user_icon"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="pass" required
                    class="@error('password') is-invalid @enderror" />
                <label for="pass" id="labelpass">Password</label>
                <i class="fa fa-eye-slash" id="pass_icon"></i>
            </div>
            
            <!-- Wadah untuk persyaratan dan indikator kekuatan password -->
            <div class="password-info-container">
                <!-- Persyaratan password -->
                <div class="password-requirement">
                    <small class="text-danger">*Password harus minimal 8 karakter</small>
                </div>
                
                <!-- Indikator kekuatan password -->
                <div class="password-strength-container">
                    <div class="progress">
                        <div class="progress-bar" id="password-strength-meter" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <small id="password-strength-text">Password <span>Belum diisi</span></small>
                </div>
            </div>
            
            <div class="input-box">
                <input type="password" name="konfirmasi_password"
                    class="@error('konfirmasi_password') is-invalid @enderror" id="conf_pass" required disabled />
                <label for="conf_pass" id="labelconfpass" class="active">Konfirmasi Password</label>
                <i class="fa fa-eye-slash" id="confpass_icon"></i>

            </div>
            <div class="input-box button">
                <input id="button" type="submit" value="Submit" class="" required />
            </div>
            <div class="register">
                <a href="{{ url('/admin/dashboard') }}" class="link">Kembali ke Dashboard</a>
            </div>
        </form>
        <!-- error message untuk username -->
        <div class="alert-container">
            @error('username')
                <div class="alert custom-alert alert-dismissible fade show" role="alert">
                    <div class="alert-content">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <span>{{ $message }}</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            @error('email')
                <div class="alert custom-alert alert-dismissible fade show" role="alert">
                    <div class="alert-content">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <span>{{ $message }}</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            @error('password')
                <div class="alert custom-alert alert-dismissible fade show" role="alert">
                    <div class="alert-content">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <span>{{ $message }}</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            @error('konfirmasi_password')
                <div class="alert custom-alert alert-dismissible fade show" role="alert">
                    <div class="alert-content">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        <span>{{ $message }}</span>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
        </div>
    </div>

    <script src="{{ asset('js/auth/register.js') }}"></script>
    <script src="{{ asset('js/boostrap/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // DOMContentLoaded untuk memastikan semua elemen sudah di-load
        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk cek kekuatan password
            function checkPasswordStrength(password) {
                let strength = 0;
                
                // Jika kosong, return 0
                if (password.length === 0) {
                    return [0, "Belum diisi"];
                }
                
                // Panjang password minimal 8 karakter
                if (password.length >= 8) {
                    strength += 25;
                }
                
                // Jika memiliki huruf kecil dan besar
                if (password.match(/([a-z].*[A-Z])|([A-Z].*[a-z])/)) {
                    strength += 25;
                }
                
                // Jika memiliki angka
                if (password.match(/([0-9])/)) {
                    strength += 25;
                }
                
                // Jika memiliki karakter khusus
                if (password.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
                    strength += 25;
                }
                
                // Return strength dan pesan
                if (strength < 25) {
                    return [strength, "Sangat Lemah"];
                } else if (strength < 50) {
                    return [strength, "Lemah"];
                } else if (strength < 75) {
                    return [strength, "Sedang"];
                } else {
                    return [strength, "Kuat"];
                }
            }
            
            // Ambil elemen password input
            const passwordInput = document.getElementById('pass');
            if (!passwordInput) {
                console.error('Password input not found');
                return;
            }
            
            const passwordMeter = document.getElementById('password-strength-meter');
            if (!passwordMeter) {
                console.error('Password meter not found');
                return;
            }
            
            const passwordText = document.getElementById('password-strength-text').querySelector('span');
            if (!passwordText) {
                console.error('Password text not found');
                return;
            }
            
            const passwordInfoContainer = document.querySelector('.password-info-container');
            if (!passwordInfoContainer) {
                console.error('Password info container not found');
                return;
            }
            
            console.log('Password elements found, setting up event listeners');
            
            // Event untuk menampilkan indikator saat password field difokuskan
            passwordInput.addEventListener('focus', function() {
                passwordInfoContainer.classList.add('show');
            });
            
            // Event untuk menyembunyikan indikator saat password field kehilangan fokus
            // tetapi hanya jika password kosong
            passwordInput.addEventListener('blur', function() {
                if (this.value.length === 0) {
                    passwordInfoContainer.classList.remove('show');
                }
            });
            
            // Update meter kekuatan password saat user mengetik
            passwordInput.addEventListener('input', function() {
                const password = this.value;
                const [strength, strengthText] = checkPasswordStrength(password);
                
                console.log('Input event triggered, password strength:', strength, strengthText);
                
                // Update progress bar
                passwordMeter.style.width = strength + '%';
                passwordMeter.setAttribute('aria-valuenow', strength);
                
                // Update warna progress bar
                if (strength < 25) {
                    passwordMeter.className = 'progress-bar bg-danger';
                } else if (strength < 50) {
                    passwordMeter.className = 'progress-bar bg-warning';
                } else if (strength < 75) {
                    passwordMeter.className = 'progress-bar bg-info';
                } else {
                    passwordMeter.className = 'progress-bar bg-success';
                }
                
                // Update teks
                passwordText.textContent = strengthText;
            });
            
            // Cek apakah password field sudah memiliki nilai saat halaman dimuat
            if (passwordInput.value.length > 0) {
                passwordInfoContainer.classList.add('show');
                // Trigger input event untuk menginisialisasi meter
                passwordInput.dispatchEvent(new Event('input'));
            }
        });
        
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000,
                customClass: {
                    popup: 'animated-popup success-popup'
                }
            });
        @elseif (session('error'))
            Swal.fire({
                icon: "error",
                title: "PERINGATAN",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000,
                customClass: {
                    popup: 'animated-popup error-popup'
                }
            });
        @endif

        // Validasi untuk setiap input
        document.querySelector('form').addEventListener('submit', function(e) {
            const username = document.getElementById('user').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('pass').value;
            const konfirmasiPassword = document.getElementById('conf_pass').value;

            // Validasi Username
            if (username.includes(' ')) {
                e.preventDefault();
                Swal.fire({
                    icon: "error",
                    title: "Username Error",
                    text: "Username tidak boleh mengandung spasi",
                    toast: true,
                    position: 'center',
                    showConfirmButton: false,
                    timer: 3000,
                    customClass: {
                        popup: 'animated-popup error-popup'
                    },
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                });
                return;
            }

            // Validasi Email
            if (!email.endsWith('@gmail.com')) {
                e.preventDefault();
                Swal.fire({
                    icon: "error",
                    title: "Email Error",
                    text: "Format email harus @example.com",
                    toast: true,
                    position: 'center',
                    showConfirmButton: false,
                    timer: 3000,
                    customClass: {
                        popup: 'animated-popup error-popup'
                    },
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                });
                return;
            }

            // Validasi Password
            if (password.length < 8) {
                e.preventDefault();
                Swal.fire({
                    icon: "error",
                    title: "Password Error",
                    text: "Password harus minimal 8 karakter",
                    toast: true,
                    position: 'center',
                    showConfirmButton: false,
                    timer: 3000,
                    customClass: {
                        popup: 'animated-popup error-popup'
                    },
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                });
                return;
            }

            // Validasi Konfirmasi Password
            if (password !== konfirmasiPassword) {
                e.preventDefault();
                Swal.fire({
                    icon: "error",
                    title: "Konfirmasi Password Error",
                    text: "Konfirmasi password harus sama dengan password",
                    toast: true,
                    position: 'center',
                    showConfirmButton: false,
                    timer: 3000,
                    customClass: {
                        popup: 'animated-popup error-popup'
                    },
                    showClass: {
                        popup: 'animate__animated animate__fadeInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__fadeOutUp'
                    }
                });
                return;
            }
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <style>
        .animated-popup {
            border-radius: 15px !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2) !important;
            padding: 20px !important;
            font-family: 'Poppins', sans-serif !important;
        }

        .error-popup {
            background: linear-gradient(135deg, #ff6b6b, #ff4757) !important;
            color: white !important;
        }

        .success-popup {
            background: linear-gradient(135deg, #2ecc71, #27ae60) !important;
            color: white !important;
        }

        .animated-popup .swal2-title {
            color: white !important;
            font-size: 1.5em !important;
            font-weight: 600 !important;
            margin-bottom: 10px !important;
        }

        .animated-popup .swal2-html-container {
            color: white !important;
            font-size: 1.1em !important;
            margin: 0 !important;
        }

        .animated-popup .swal2-icon {
            border-color: white !important;
            color: white !important;
        }

        .animated-popup .swal2-icon.swal2-error {
            border-color: white !important;
        }

        .animated-popup .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
            background-color: white !important;
        }

        .animated-popup .swal2-icon.swal2-success {
            border-color: white !important;
        }

        .animated-popup .swal2-icon.swal2-success [class^='swal2-success-line'] {
            background-color: white !important;
        }

        .animated-popup .swal2-icon.swal2-success .swal2-success-ring {
            border-color: white !important;
        }

        .alert-container {
            position: fixed !important;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            z-index: 9999 !important;
            width: 100% !important;
            max-width: 400px !important;
            padding: 0 20px !important;
        }

        .custom-alert {
            background: linear-gradient(135deg, #ff6b6b, #ff4757) !important;
            color: white !important;
            border: none !important;
            border-radius: 10px !important;
            padding: 15px 20px !important;
            margin-bottom: 10px !important;
            box-shadow: 0 4px 15px rgba(255, 71, 87, 0.2) !important;
            animation: fadeIn 0.3s ease-out !important;
            width: 100% !important;
        }

        .custom-alert .alert-content {
            display: flex !important;
            align-items: center !important;
            font-size: 0.95rem !important;
        }

        .custom-alert .btn-close {
            color: white !important;
            opacity: 0.8 !important;
            filter: brightness(0) invert(1) !important;
        }

        .custom-alert .btn-close:hover {
            opacity: 1 !important;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .custom-alert.fade {
            transition: opacity 0.3s linear !important;
        }

        .custom-alert.fade.show {
            opacity: 1 !important;
        }

        .custom-alert .fas {
            font-size: 1.1rem !important;
            margin-right: 8px !important;
        }

        /* Style untuk password strength meter yang diperbaiki */
        .password-strength-container {
            margin-bottom: 5px !important;
            width: 100% !important;
        }

        .password-strength-container .progress {
            height: 6px !important;
            margin-bottom: 5px !important;
            border-radius: 3px !important;
            background-color: #e9ecef !important;
            width: 100% !important;
        }

        .password-strength-container .progress-bar {
            border-radius: 3px !important;
            transition: width 0.3s ease !important;
            height: 6px !important;
        }

        .password-strength-container small {
            display: block !important;
            font-size: 0.8rem !important;
            color: #555 !important;
        }

        .password-strength-container small span {
            font-weight: bold !important;
        }

        /* Style untuk wadah informasi password */
        .password-info-container {
            padding: 5px 10px !important;
            margin: 0 10px 15px 10px !important;
            background-color: transparent !important;
            border-radius: 0 !important;
            box-shadow: none !important;
            display: none !important; /* Sembunyikan secara default */
            opacity: 0 !important;
            transition: opacity 0.3s ease !important;
        }

        .password-info-container.show {
            display: block !important;
            opacity: 1 !important;
        }

        .password-requirement {
            margin-bottom: 10px !important;
        }

        .password-requirement small {
            display: flex !important;
            align-items: center !important;
            font-size: 0.8rem !important;
        }

        .password-requirement small i {
            margin-right: 5px !important;
        }
    </style>
</body>
</html>