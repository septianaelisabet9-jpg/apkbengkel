<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan - Sistem Bengkel</title>
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
                <h3 class="fw-bold text-dark m-0">Data Pelanggan & Kendaraan</h3>
                <a href="#" class="btn btn-primary fw-bold">+ Tambah Pelanggan</a>
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Pelanggan</th>
                            <th>No HP</th>
                            <th>Nomor Plat Kendaraan</th>
                            <th>Jenis Kendaraan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Budi Santoso</td>
                            <td>081234567890</td>
                            <td>B 1234 XYZ</td>
                            <td>Honda Beat</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm text-white fw-bold">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm fw-bold">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>