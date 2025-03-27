<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🌏WorldGreen</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary-color:rgb(14, 74, 8);
        --secondary-color:rgb(14, 74, 8);
        --light-color: #F8F9FA;
    }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f5f5f5;
    }

    /* Navbar Styling */
    .navbar {
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
        font-weight: 700;
        color: var(--primary-color) !important;
        font-size: 1.5rem;
    }

    .nav-link {
        color: #495057;
        font-weight: 500;
        margin: 0 5px;
    }

    .nav-link:hover {
        color: var(--primary-color);
    }

    .login-container {
        display: flex;
        min-height: calc(100vh - 56px);
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .login-card {
        width: 100%;
        max-width: 450px;
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .login-header {
        background-color: var(--primary-color);
        color: white;
        padding: 25px;
        text-align: center;
    }

    .login-logo {
        font-size: 1.8rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .login-body {
        background-color: white;
        padding: 30px;
    }

    .form-control {
        height: 45px;
        border-radius: 8px;
        padding-left: 15px;
        border: 1px solid #ddd;
    }

    .form-control:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(46, 139, 87, 0.25);
    }

    .btn-login {
        background-color: var(--primary-color);
        color: white;
        border: none;
        height: 45px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-login:hover {
        background-color: var(--secondary-color);
        transform: translateY(-2px);
    }

    .divider {
        display: flex;
        align-items: center;
        margin: 20px 0;
    }

    .divider::before,
    .divider::after {
        content: "";
        flex: 1;
        border-bottom: 1px solid #ddd;
    }

    .divider-text {
        padding: 0 10px;
        color: #777;
        font-size: 0.9rem;
    }

    .social-login .btn {
        height: 45px;
        border-radius: 8px;
        font-weight: 500;
        margin-bottom: 10px;
    }

    .login-footer {
        text-align: center;
        padding-top: 20px;
        color: #777;
    }

    .login-footer a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
    }

    .input-group-text {
        background-color: white;
        border-right: none;
    }

    .input-group .form-control {
        border-left: none;
    }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-tree"></i> PT.EcoGreen
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?page=landing_page"><i
                                class="fas fa-home"></i> Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Login Container -->
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-logo">
                    <i class="fas fa-leaf"></i> EcoGreen
                </div>
                <p>Masuk ke akun Anda</p>
            </div>

            <div class="login-body">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda"
                                required>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="password"
                                placeholder="Masukkan password Anda" required>
                            <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label" for="remember">Ingat saya</label>
                        </div>
                        <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Lupa password?</a>
                    </div>

                    <button type="submit" class="btn btn-login w-100 mb-3">
                        <i class="fas fa-sign-in-alt me-2"></i> Masuk
                    </button>

                    <div class="divider">
                        <span class="divider-text">ATAU MASUK DENGAN</span>
                    </div>

                    <div class="social-login">
                        <button type="button" class="btn btn-outline-secondary w-100">
                            <i class="fab fa-google me-2" style="color: #DB4437;"></i> Google
                        </button>
                        <button type="button" class="btn btn-outline-primary w-100">
                            <i class="fab fa-facebook-f me-2" style="color: #1877F2;"></i> Facebook
                        </button>
                    </div>
                </form>

                <div class="login-footer">
                    Belum punya akun? <a href="#">Daftar sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const icon = this.querySelector('i');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        }
    });
    </script>
</body>
</div>
</html>