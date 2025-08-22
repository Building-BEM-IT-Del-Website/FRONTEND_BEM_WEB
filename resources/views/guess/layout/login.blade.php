<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Portal - BEM IT Del</title>

    <!-- Bootstrap & Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        /* CSS Internal Khusus Halaman Login */
        :root {
            --del-primary-blue: #0078D4;
        }

        html, body {
            height: 100%;
            background-color: #f8f9fa; /* Latar belakang abu-abu sangat terang */
            font-family: 'Poppins', sans-serif;
        }

        .login-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 2rem 1rem;
        }

        .login-box {
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .login-logo {
            max-width: 180px; /* Ukuran logo lebih besar */
            margin-bottom: 2rem;
        }

        .login-box h2 {
            font-weight: 700;
            color: #212529;
            margin-bottom: 0.5rem;
        }

        .login-box p {
            color: #6c757d;
            margin-bottom: 2rem;
        }

        .form-label {
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border-radius: 0.5rem;
            padding: 0.75rem 1rem;
            border: 1px solid #dee2e6;
        }
        .form-control:focus {
            border-color: var(--del-primary-blue);
            box-shadow: 0 0 0 0.25rem rgba(0, 120, 212, 0.25);
        }
        
        .btn-login {
            background-color: var(--del-primary-blue);
            border-color: var(--del-primary-blue);
            padding: 0.75rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 0.5rem;
        }

        .form-check-label,
        .forgot-password {
            font-size: 0.9rem;
        }
        .forgot-password {
            text-decoration: none;
            color: var(--del-primary-blue);
        }

    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="login-box">
            
            <img src="{{ asset('assets/bem.png') }}" class="login-logo" alt="Logo BEM IT Del">

            <h2>Selamat Datang</h2>
            <p>Masuk ke Portal Sistem Informasi BEM IT Del</p>

            <!-- Form Login -->
            <form action="#" method="POST" class="text-start">
                
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">
                            Ingat saya
                        </label>
                    </div>
                    <a href="#" class="forgot-password">Lupa password?</a>
                </div>

                <button type="submit" class="btn btn-primary w-100 btn-login">Masuk</button>

                <div class="text-center mt-4">
                    <a href="/" class="text-decoration-none text-muted small"><i class="bi bi-arrow-left me-1"></i> Kembali ke Halaman Utama</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>