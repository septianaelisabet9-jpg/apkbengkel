<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Sparepart - Sistem Bengkel</title>
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
                <h3 class="fw-bold text-dark m-0">Data Sparepart</h3>
                <a href="#" class="btn btn-primary fw-bold">+ Tambah Sparepart</a>
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Sparepart</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Contoh Data Statis / Looping nanti dari Controller -->
                        <tr>
                            <td>1</td>
                            <td>Oli Mesin Matic 0.8L</td>
                            <td>Rp 55.000</td>
                            <td>20</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm text-white fw-bold">Edit</a>
                                <a href="#" class="btn btn-danger btn-sm fw-bold">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Kampas Rem Depan</td>
                            <td>Rp 45.000</td>
                            <td>12</td>
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