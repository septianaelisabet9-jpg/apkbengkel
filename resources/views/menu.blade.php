
<!-- ======= Sidebar BengkelGay ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="/home">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-heading">Menu Bengkel</li>

        <!-- Data Pelanggan -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/pelanggan">
                <i class="bi bi-people"></i>
                <span>Data Pelanggan</span>
            </a>
        </li>

        <!-- Data Kendaraan -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/kendaraan">
                <i class="bi bi-car-front"></i>
                <span>Data Kendaraan</span>
            </a>
        </li>

        <!-- Data Sparepart -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/sparepart">
                <i class="bi bi-gear"></i>
                <span>Data Sparepart</span>
            </a>
        </li>

        <!-- Jasa Servis -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/jasa_servis">
                <i class="bi bi-tools"></i>
                <span>Jasa Servis</span>
            </a>
        </li>

        <!-- Transaksi Servis -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#transaksi-nav"
               data-bs-toggle="collapse" href="#">
                <i class="bi bi-receipt"></i>
                <span>Transaksi Servis</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <ul id="transaksi-nav"
                class="nav-content collapse"
                data-bs-parent="#sidebar-nav">

                <li>
                    <a href="/transaksi_servis">
                        <i class="bi bi-circle"></i>
                        <span>Data Transaksi</span>
                    </a>
                </li>

                <li>
                    <a href="/detail_servis_jasa">
                        <i class="bi bi-circle"></i>
                        <span>Detail Servis Jasa</span>
                    </a>
                </li>

                <li>
                    <a href="/detail_servis_part">
                        <i class="bi bi-circle"></i>
                        <span>Detail Servis Part</span>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Pembayaran -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/pembayaran">
                <i class="bi bi-credit-card"></i>
                <span>Data Pembayaran</span>
            </a>
        </li>

        <!-- Laporan -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/laporan">
                <i class="bi bi-file-earmark-bar-graph"></i>
                <span>Laporan Keuangan</span>
            </a>
        </li>

        <li class="nav-heading">Pengaturan</li>

        <!-- Data Users -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/users">
                <i class="bi bi-person-badge"></i>
                <span>Data Users & Mekanik</span>
            </a>
        </li>

        <!-- Data Jabatan -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/jabatan">
                <i class="bi bi-diagram-3"></i>
                <span>Data Jabatan</span>
            </a>
        </li>

        <!-- Logout -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="/logout"
               onclick="return confirm('Apakah kamu yakin ingin logout?')">
                <i class="bi bi-box-arrow-right text-danger"></i>
                <span>Logout</span>
            </a>
        </li>

    </ul>

</aside>
<!-- End Sidebar BengkelGay -->

<main id="main" class="main">
