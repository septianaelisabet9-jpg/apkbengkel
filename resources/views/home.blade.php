
@extends('template')
@section('content')

<div class="container-fluid dashboard">

    
<div class="welcome-card mb-4">
    <div class="welcome-content">
        <div>
            <h2>Selamat Datang, {{ session('u') }}!</h2>
            <p>
                Selamat datang di Sistem Informasi BengkelGay.
                Selamat bekerja dan berikan pelayanan terbaik
                untuk setiap pelanggan.
            </p>
        </div>

        <div class="welcome-icon">
            <i class="bi bi-tools"></i>
        </div>
    </div>
</div>

    <div class="row g-4">

        <div class="col-xl-3 col-md-6">
            <a href="/pelanggan" class="menu-card">
                <div class="menu-icon icon-blue">👥</div>
                <h5>Data Pelanggan</h5>
                <p>Kelola informasi pemilik kendaraan.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/kendaraan" class="menu-card">
                <div class="menu-icon icon-yellow">🚗</div>
                <h5>Data Kendaraan</h5>
                <p>Kelola plat nomor, merk, dan tipe kendaraan.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/sparepart" class="menu-card">
                <div class="menu-icon icon-green">🔩</div>
                <h5>Data Sparepart</h5>
                <p>Kelola stok dan harga suku cadang.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/jasa_servis" class="menu-card">
                <div class="menu-icon icon-cyan">🛠️</div>
                <h5>Data Jasa Servis</h5>
                <p>Kelola jenis dan harga jasa perbaikan.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/transaksi_servis" class="menu-card">
                <div class="menu-icon icon-orange">🧾</div>
                <h5>Transaksi Servis</h5>
                <p>Kelola nota dan status pengerjaan servis.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/users" class="menu-card">
                <div class="menu-icon icon-purple">👨‍💼</div>
                <h5>Data Users & Mekanik</h5>
                <p>Kelola akun pegawai dan mekanik.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/pembayaran" class="menu-card">
                <div class="menu-icon icon-pink">💳</div>
                <h5>Data Pembayaran</h5>
                <p>Kelola pembayaran dan pelunasan.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/laporan" class="menu-card">
                <div class="menu-icon icon-cyan">📊</div>
                <h5>Laporan Keuangan</h5>
                <p>Lihat rekap pendapatan bengkel.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/jabatan" class="menu-card">
                <div class="menu-icon icon-blue">🏢</div>
                <h5>Data Jabatan</h5>
                <p>Kelola jabatan dan posisi pegawai.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/detail_servis_jasa" class="menu-card">
                <div class="menu-icon icon-orange">📋</div>
                <h5>Detail Servis Jasa</h5>
                <p>Lihat rincian jasa perbaikan.</p>
            </a>
        </div>

        <div class="col-xl-3 col-md-6">
            <a href="/detail_servis_part" class="menu-card">
                <div class="menu-icon icon-green">⚙️</div>
                <h5>Detail Servis Part</h5>
                <p>Lihat rincian sparepart yang digunakan.</p>
            </a>
        </div>

    </div>

    <div class="mt-5 d-flex justify-content-end">
        <a href="/logout"
           class="btn btn-outline-danger logout-btn"
           onclick="return confirm('Apakah kamu yakin ingin logout?')">
            Logout
        </a>
    </div>

</div>

@endsection
