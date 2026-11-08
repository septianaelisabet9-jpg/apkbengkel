<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Servis - Sistem Bengkel</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/home">APK Bengkel</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/home">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-danger text-white px-3 ms-2" href="/logout">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="card shadow-sm border-0 p-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fw-bold text-dark m-0">Rincian Detail Servis #TRX-001</h3>
                <a href="/home" class="btn btn-secondary fw-bold">Kembali</a>
            </div>
            <hr>
            
            <h5 class="fw-bold text-primary mb-3">A. Jasa Servis yang Digunakan</h5>
            <ul class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Ganti Oli Mesin
                    <span class="badge bg-primary rounded-pill">Rp 25.000</span>
                </li>
            </ul>

            <h5 class="fw-bold text-primary mb-3">B. Sparepart yang Dibeli</h5>
            <ul class="list-group mb-4">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Oli Mesin Matic 0.8L (1 pcs)
                    <span class="badge bg-primary rounded-pill">Rp 55.000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Kampas Rem Depan (1 pcs)
                    <span class="badge bg-primary rounded-pill">Rp 45.000</span>
                </li>
            </ul>

            <div class="alert alert-info text-end fw-bold fs-5">
                Total Biaya Keseluruhan: Rp 125.000
            </div>
        </div>
    </div>
</body>
</html>