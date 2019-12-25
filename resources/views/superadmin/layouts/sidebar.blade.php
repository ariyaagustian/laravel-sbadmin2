<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Medika Tanjungsari</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    @if (Auth::user()->role->role_name == "Superadmin")
    {{-- Master Data --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Nav Item - Pages Collapse Menu -->
    <div class="sidebar-heading">
        <span>Menu Master</span>
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMasterData"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master Data</span>
        </a>
        <div id="collapseMasterData" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Master Data:</h6>
                <a class="collapse-item" href="{{route('roles.index')}}">Role</a>
                <a class="collapse-item" href="{{route('users.index')}}">Users</a>
            </div>
        </div>
    </li>
    @endif


    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Administrasi")
    {{-- Menu Administrasi --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Administrasi</span>
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePasien" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Pasien</span>
        </a>
        <div id="collapsePasien" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pasien:</h6>
                <a class="collapse-item" href="">Harian</a>
                <a class="collapse-item" href="">Kumulatif</a>
            </div>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePelayanan"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Pelayanan</span>
        </a>
        <div id="collapsePelayanan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pelayanan:</h6>
                <a class="collapse-item" href="">Rekam Medis</a>
                <a class="collapse-item" href="">Poli Umum</a>
                <a class="collapse-item" href="">Poli Gigi</a>
                <a class="collapse-item" href="">Poli Persalinan</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Rawat Inap</span>
        </a>
    </li>
    @endif


    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Administrasi Gudang")
    {{-- Menu Administrasi Gudang --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Administrasi Gudang</span>
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Obat Gudang</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDefecta"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Defecta</span>
        </a>
        <div id="collapseDefecta" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Defecta:</h6>
                <a class="collapse-item" href="">Apotek</a>
                <a class="collapse-item" href="">Gudang</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Supplier</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Surat Pesanan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Pembelian Obat</span>
        </a>
    </li>
    @endif


    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Dokter Umum")
    {{-- Menu Dokter Umum --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Dokter Umum</span>
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePoliUmum"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pelayanan Poli Umum</span>
        </a>
        <div id="collapsePoliUmum" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pelayanan:</h6>
                <a class="collapse-item" href="">Harian</a>
                <a class="collapse-item" href="">Kumulatif</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Room Visit</span>
        </a>
    </li>
    @endif



    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Dokter Gigi")
    {{-- Menu Dokter Gigi --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Dokter Gigi</span>
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePoliGigi"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pelayanan Poli Gigi</span>
        </a>
        <div id="collapsePoliGigi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pelayanan:</h6>
                <a class="collapse-item" href="">Harian</a>
                <a class="collapse-item" href="">Kumulatif</a>
            </div>
        </div>
    </li>
    @endif


    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Petugas Lab")
    {{-- Menu Petugas Lab --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Petugas Lab</span>
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePemeriksaanLab"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pemeriksaan Lab</span>
        </a>
        <div id="collapsePemeriksaanLab" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pemeriksaan:</h6>
                <a class="collapse-item" href="">Harian</a>
                <a class="collapse-item" href="">Kumulatif</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Room Visit</span>
        </a>
    </li>
    @endif

    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Bidan")
    {{-- Menu Bidan --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Bidan</span>
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePelayananPasien"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pelayanan Pasien</span>
        </a>
        <div id="collapsePelayananPasien" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pelayanan Pasien:</h6>
                <a class="collapse-item" href="">Harian</a>
                <a class="collapse-item" href="">Kumulatif</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Room Visit</span>
        </a>
    </li>
    @endif


    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Kasir")
    {{-- Menu Kasir --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Kasir</span>
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksi"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Transaksi</span>
        </a>
        <div id="collapseTransaksi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Trasaksi:</h6>
                <a class="collapse-item" href="">Harian</a>
                <a class="collapse-item" href="">Kumulatif</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Setoran</span>
        </a>
    </li>
    @endif


    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Apotek")
    {{-- Menu Apotek --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Apotek</span>
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseObatApotek"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Obat</span>
        </a>
        <div id="collapseObatApotek" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Obat:</h6>
                <a class="collapse-item" href="">Obat Klinik</a>
                <a class="collapse-item" href="">Obat OTC</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTransaksiObat"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Trasaksi Obat</span>
        </a>
        <div id="collapseTransaksiObat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Transaksi:</h6>
                <a class="collapse-item" href="">harian</a>
                <a class="collapse-item" href="">Kumulatif</a>
            </div>
        </div>
    </li>
    @endif


    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Apoteker")
    {{-- Menu Apoteker --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Apoteker</span>
    </div>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseObatApoteker"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Obat</span>
        </a>
        <div id="collapseObatApoteker" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Obat:</h6>
                <a class="collapse-item" href="">Obat Gudang</a>
                <a class="collapse-item" href="">Obat Apotek Klinik</a>
                <a class="collapse-item" href="">Obat Apotek OTC</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Pesanan Obat</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStockOpname"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Stock Opname</span>
        </a>
        <div id="collapseStockOpname" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Obat:</h6>
                <a class="collapse-item" href="">Obat Gudang</a>
                <a class="collapse-item" href="">Obat Apotek Klinik</a>
                <a class="collapse-item" href="">Obat Apotek OTC</a>
            </div>
        </div>
    </li>
    @endif


    @if (Auth::user()->role->role_name == "Superadmin" || Auth::user()->role->role_name == "Manajer")
    {{-- Menu Manajer --}}
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        <span>Menu Manajer</span>
    </div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePasienManajer"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Pasien</span>
        </a>
        <div id="collapsePasienManajer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pasien:</h6>
                <a class="collapse-item" href="">Umum</a>
                <a class="collapse-item" href="">BPJS</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePembayaran"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Pembayaran</span>
        </a>
        <div id="collapsePembayaran" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Pembayaran:</h6>
                <a class="collapse-item" href="">Kasir</a>
                <a class="collapse-item" href="">Faktur</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Surat Pesanan</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseObatManajer"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Obat</span>
        </a>
        <div id="collapseObatManajer" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Obat:</h6>
                <a class="collapse-item" href="">Gudang</a>
                <a class="collapse-item" href="">Apotek Klinik</a>
                <a class="collapse-item" href="">Apotek OTC</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStockOpnameManajer"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Stock Opname</span>
        </a>
        <div id="collapseStockOpnameManajer" class="collapse" aria-labelledby="headingTwo"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Obat:</h6>
                <a class="collapse-item" href="">Gudang</a>
                <a class="collapse-item" href="">Apotek Klinik</a>
                <a class="collapse-item" href="">Apotek OTC</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-cog"></i>
            <span>Data Karyawan</span>
        </a>
    </li>
    @endif

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
