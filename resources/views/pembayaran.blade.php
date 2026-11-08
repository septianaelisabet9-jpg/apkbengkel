<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - Sistem Bengkel</title>
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
                <h3 class="fw-bold text-dark m-0">Riwayat & Konfirmasi Pembayaran</h3>
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>ID Transaksi</th>
                            <th>Pelanggan</th>
                            <th>Total Bayar</th>
                            <th>Metode</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>TRX-001</td>
                            <td>Budi Santoso</td>
                            <td>Rp 100.000</td>
                            <td>Cash</td>
                            <td><span class="badge bg-success">Lunas</span></td>
                            <td>
                                <a href="#" class="btn btn-info btn-sm text-white fw-bold">Nota / Struk</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>