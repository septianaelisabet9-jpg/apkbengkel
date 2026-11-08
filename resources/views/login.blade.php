<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Bengkel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light d-flex align-items-center justify-content-center vh-100">

    <div class="container" style="max-width: 400px;">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">
                <h4 class="fw-bold text-primary text-center">Sistem Bengkel</h4>
                <p class="text-muted text-center fs-6 mb-4">Silahkan login terlebih dahulu</p>
                 
                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form method="POST" action="/login">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Login</button>
                    
                    <div class="text-center mt-3">
                        <p class="text-muted mb-0">Belum punya akun? <a href="/register" class="text-decoration-none">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>