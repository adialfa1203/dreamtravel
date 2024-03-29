<!doctype html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/lite/posdash/html/backend/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2023 04:11:09 GMT -->
@section('/travel','active')

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Data</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://templates.iqonic.design/lite/posdash/html/assets/images/favicon.ico" />
    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backende209.css?v=1.0.0">
    <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">


    <input[type="number"] { appearance: textfield; -webkit-appearance: textfield; -moz-appearance: textfield; }>
</head>

<body class="  ">
    <form class="mx-1 mx-md-4" action="tambah_data" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center">
            </div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">

            <div class="iq-sidebar  sidebar-default ">
                <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                    <a href="index.html" class="header-logo">
                        <img src="img/logo-removebg-preview.png" style="width: 150px; height: auto;">
                    </a>
                    <div class="iq-menu-bt-sidebar ml-0">
                        <i class="las la-bars wrapper-menu"></i>
                    </div>
                </div>
                <div class="data-scrollbar" data-scroll="1">
                    <nav class="iq-sidebar-menu">
                        <ul id="iq-sidebar-toggle" class="iq-menu">
                            <li class="">
                                <a href="{{url('beranda_travel')}}" class="svg-icon">
                                    <svg class="svg-icon" id="p-dash1" width="20" height="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                        </path>
                                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                    </svg>
                                    <span class="ml-4">Beranda</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-bus-front-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M16 7a1 1 0 0 1-1 1v3.5c0 .818-.393 1.544-1 2v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5V14H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2a2.496 2.496 0 0 1-1-2V8a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1V2.64C1 1.452 1.845.408 3.064.268A43.608 43.608 0 0 1 8 0c2.1 0 3.792.136 4.936.268C14.155.408 15 1.452 15 2.64V4a1 1 0 0 1 1 1v2ZM3.552 3.22A43.306 43.306 0 0 1 8 3c1.837 0 3.353.107 4.448.22a.5.5 0 0 0 .104-.994A44.304 44.304 0 0 0 8 2c-1.876 0-3.426.109-4.552.226a.5.5 0 1 0 .104.994ZM8 4c-1.876 0-3.426.109-4.552.226A.5.5 0 0 0 3 4.723v3.554a.5.5 0 0 0 .448.497C4.574 8.891 6.124 9 8 9c1.876 0 3.426-.109 4.552-.226A.5.5 0 0 0 13 8.277V4.723a.5.5 0 0 0-.448-.497A44.304 44.304 0 0 0 8 4Zm-3 7a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm8 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-7 0a1 1 0 0 0 1 1h2a1 1 0 1 0 0-2H7a1 1 0 0 0-1 1Z" />
                                    </svg>
                                    <span class="ml-4">Travel</span>
                                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20"
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="10 15 15 20 20 15"></polyline>
                                        <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                    </svg>
                                </a>
                                <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                    <li class="submenu @yield('tambah_data')">
                                        <a href="{{ url('tambah_data')}}">
                                            <i class="las la-minus"></i><span>Tambah Data</span>
                                        </a>
                                    </li>
                                    <li class="submenu @yield('/travel')">
                                        <a href="/travel">
                                            <i class="las la-minus"></i><span>Travel</span>
                                        </a>
                                    </li>
                                    <li class="submenu @yield('/fasilitas')">
                                        <a href="/fasilitas">
                                            <i class="las la-minus"></i><span>Fasilitas Travel</span>
                                        </a>
                                    </li>
                                    <li class="submenu @yield('/detail_harga')">
                                        <a href="/detail_harga">
                                            <i class="las la-minus"></i><span>Detail Harga</span>
                                        </a>
                                    </li>
                                    <li class="submenu @yield('/detail_tujuan')">
                                        <a href="/detail_tujuan">
                                            <i class="las la-minus"></i><span>Detail Tujuan</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="">
                                <a href="{{url('pesanan')}}" class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-envelope-exclamation" viewBox="0 0 16 16">
                                        <path
                                            d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1.5a.5.5 0 0 1-1 0V11a.5.5 0 0 1 1 0Zm0 3a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0Z" />
                                    </svg>
                                    <span class="ml-4">Pesanan</span>
                                </a>
                                <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                    <li class="`">

                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </nav>

                    <div class="p-3"></div>
                </div>
            </div>
            <div class="iq-top-navbar">
                <div class="iq-navbar-custom">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">
                        <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                            <i class="ri-menu-line wrapper-menu"></i>
                            <a href="index.html" class="header-logo">
                                <img src="../assets/images/logo.png" class="img-fluid rounded-normal" alt="logo">
                                <h5 class="logo-title ml-3">Dream Travel</h5>

                            </a>
                        </div>
                        <div class="iq-search-bar device-search">
                            <!-- <form action="#" class="searchbox">
                            <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                            <input type="text" class="text search-input" placeholder="Cari disini...">
                        </form> -->
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-label="Toggle navigation">
                                <i class="ri-menu-3-line"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">

                                    </li>

                                    <li class="nav-item nav-icon search-content">
                                        <a href="#" class="search-toggle rounded" id="dropdownSearch"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <div class="iq-search-bar iq-sub-dropdown dropdown-menu"
                                            aria-labelledby="dropdownSearch">
                                            <form action="#" class="searchbox p-2">
                                                <div class="form-group mb-0 position-relative">
                                                    <input type="text" class="text search-input font-size-12"
                                                        placeholder="type here to search...">
                                                    <a href="#" class="search-link"><i class="las la-search"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-mail">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>
                                            <span class="bg-primary"></span>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu"
                                            aria-labelledby="dropdownMenuButton2">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 ">
                                                    <div class="cust-title p-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Semua Pesan</h5>
                                                            <a class="badge badge-primary badge-card" href="#">3</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-3 pt-0 pb-0 sub-card">
                                                        <a href="#" class="iq-sub-card">
                                                            <div
                                                                class="media align-items-center cust-card py-3 border-bottom">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/01.jpg" alt="01">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h6 class="mb-0">Emma Watson</h6>
                                                                        <small class="text-dark"><b>12 : 47
                                                                                siang</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div
                                                                class="media align-items-center cust-card py-3 border-bottom">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/02.jpg" alt="02">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h6 class="mb-0">Ashlynn Franci</h6>
                                                                        <small class="text-dark"><b>11 : 30
                                                                                siang</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card py-3">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/03.jpg" alt="03">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h6 class="mb-0">Kianna Carder</h6>
                                                                        <small class="text-dark"><b>11 : 21
                                                                                siang</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <a class="right-ic btn btn-primary btn-block position-relative p-2"
                                                        href="{{url('pesannav')}}" role="button">
                                                        Tampilkan Semua
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-bell">
                                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                            </svg>
                                            <span class="bg-primary "></span>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 ">
                                                    <div class="cust-title p-3">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <h5 class="mb-0">Notifikasi</h5>
                                                            <a class="badge badge-primary badge-card" href="#">3</a>
                                                        </div>
                                                    </div>
                                                    <div class="px-3 pt-0 pb-0 sub-card">
                                                        <a href="#" class="iq-sub-card">
                                                            <div
                                                                class="media align-items-center cust-card py-3 border-bottom">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/01.jpg" alt="01">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h6 class="mb-0">Emma Watson</h6>
                                                                        <small class="text-dark"><b>12 : 47
                                                                                siang</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div
                                                                class="media align-items-center cust-card py-3 border-bottom">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/02.jpg" alt="02">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h6 class="mb-0">Ashlynn Franci</h6>
                                                                        <small class="text-dark"><b>11 : 30
                                                                                siang</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card py-3">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small"
                                                                        src="../assets/images/user/03.jpg" alt="03">
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <div
                                                                        class="d-flex align-items-center justify-content-between">
                                                                        <h6 class="mb-0">Kianna Carder</h6>
                                                                        <small class="text-dark"><b>11 : 21
                                                                                siang</b></small>
                                                                    </div>
                                                                    <small class="mb-0">Lorem ipsum dolor sit
                                                                        amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <a class="right-ic btn btn-primary btn-block position-relative p-2"
                                                        href="#" role="button">
                                                        Tampilkan Semua
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon dropdown caption-content">
                                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton4"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="../assets/images/user/Ajg.jpg" class="img-fluid rounded"
                                                alt="user">
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 text-center">
                                                    <div class="media-body profile-detail text-center">
                                                        <img src="../assets/images/user/Ajg.jpg" alt="profile-bg"
                                                            class="rounded-top img-fluid mb-4">
                                                        <img src="../assets/images/user/Ajg.jpg" alt="profile-img"
                                                            class="rounded profile-img img-fluid avatar-70">
                                                    </div>
                                                    <div class="p-3">
                                                        <h5 class="mb-1">Who Me</h5>
                                                        <p class="mb-0">Sejak 10 maret, 2020</p>
                                                        <div
                                                            class="d-flex align-items-center justify-content-center mt-3">
                                                            <a href="{{url('profil')}}"
                                                                class="btn border mr-2">Profil</a>
                                                            <a href="{{ url('logout')}}" class="btn border">Keluar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="modal fade" id="new-order" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="popup text-left">
                                <h4 class="mb-3">pesanan baru</h4>
                                <div class="content create-workform bg-body">
                                    <div class="pb-3">
                                        <label class="mb-2">Email</label>
                                        <input type="text" class="form-control" placeholder="Masukan Nama atau Email">
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                            <div class="btn btn-primary mr-4" data-dismiss="modal">Batalkan</div>
                                            <div class="btn btn-outline-primary" data-dismiss="modal">Buat</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-page">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-12">
                            <div class="card">
                                <br>
                                <h4 class="card-title text-center">Detail Travel</h4>
                                <div class="card-body">
                                    <div class="col">
                                        <label for="plat" class="form-label">No Plat</label>
                                        <input type="number" class="form-control" id="plat" name="plat" required>
                                        <div class="valid-feedback">
                                            bagus
                                        </div>
                                        <div class="invalid-feedback">
                                            Tolong masukan data.
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="nama_kendaraan" class="form-label">Nama Kendaraan</label>
                                        <input type="text" class="form-control" id="nama_kendaraan"
                                            name="nama_kendaraan" required>
                                        <div class="valid-feedback">
                                            bagus
                                        </div>
                                        <div class="invalid-feedback">
                                            Tolong masukan data
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="kategori" class="form-label">Kategori Kendaraan</label>
                                        <input type="text" class="form-control" id="kategori" name="kategori" required>
                                        <div class="valid-feedback">
                                            bagus
                                        </div>
                                        <div class="invalid-feedback">
                                            Tolong masukan data
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label for="foto" class="col-sm-2 col-form-label">Foto Siswa</label>
                                        <input type="file" class="form-control" name="foto " id="foto">
                                        <div class="valid-feedback">
                                            bagus
                                        </div>
                                        <div class="invalid-feedback">
                                            Tolong masukan data
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-12">
                            <div class="card">
                                <br>
                                <h4 class="card-title text-center">Fasilitas Travel</h4>
                                <div class="card-body">
                                    <div class="col">
                                        <div class="customer_records">
                                            <div class="col">
                                                <label for="nama_fasilitas" class="form-label">Fasilitas</label>
                                                <input type="text" class="form-control" id="nama_fasilitas"
                                                    name="nama_fasilitas" required>
                                            </div>

                                            <br>
                                            {{-- <a class="extra-fields-customer" href="#">Tambah Fasilitas</a> --}}
                                            <a class="extra-fields-customer">
                                                <button class="btn btn-primary">Tambah Fasilitas</button>
                                            </a>
                                        </div>

                                        <div class="customer_records_dynamic"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-12">
                        <div class="card">
                            <br>
                            <h4 class="card-title text-center">Harga Travel</h4>
                            <div class="card-body">
                                <div class="col">
                                    <label for="dewasa" class="form-label">Harga Dewasa</label>
                                    <input type="number" class="form-control" id="dewasa" name="dewasa" required>
                                    <div class="valid-feedback">
                                        bagus
                                    </div>
                                    <div class="invalid-feedback">
                                        Tolong masukan data.
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="anak" class="form-label">Harga Anak-Anak</label>
                                    <input type="number" class="form-control" id="anak" name="anak" required>
                                    <div class="valid-feedback">
                                        bagus
                                    </div>
                                    <div class="invalid-feedback">
                                        Tolong masukan data
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-12">
                    <div class="card">
                        <br>
                        <h4 class="card-title text-center">Tujuan Travel</h4>
                        <div class="card-body">
                            <div class="col">
                                <label for="tujuan" class="form-label">Tujuan</label>
                                <input type="text" class="form-control" id="tujuan" name="tujuan" required>
                                <div class="valid-feedback">
                                    bagus
                                </div>
                                <div class="invalid-feedback">
                                    Tolong masukan data.
                                </div>
                            </div>
                            <div class="col">
                                <label for="beangkat" class="form-label">Area Penjemputan</label>
                                <input type="text" class="form-control" id="berangkat" name="berangkat" required>
                                <div class="valid-feedback">
                                    bagus
                                </div>
                                <div class="invalid-feedback">
                                    Tolong masukan data
                                </div>
                            </div>
                            <div class="col">
                                <label for="pemberangkatan" class="form-label">Berangkat</label>
                                <input type="date" class="form-control" id="pemberangkatan" name="pemberangkatan"
                                    required>
                                <div class="valid-feedback">
                                    bagus
                                </div>
                                <div class="invalid-feedback">
                                    Tolong masukan data
                                </div>
                            </div>
                            <div class="col">
                                <label for="jam" class="form-label">Jam</label>
                                <input type="time" class="form-control" id="jam" name="jam" required>
                                <div class="valid-feedback">
                                    bagus
                                </div>
                                <div class="invalid-feedback">
                                    Tolong masukan data
                                </div>
                                <br>
                                {{-- <a href="#" class="btn btn-primary">Tambahkan</a> --}}
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/customizer.js"></script>

    <!-- Chart Custom JavaScript -->
    <script async src="../assets/js/chart-custom.js"></script>

    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>

    <script>
        $('.extra-fields-customer').click(function() {
      $('.customer_records').clone().appendTo('.customer_records_dynamic');
      $('.customer_records_dynamic .customer_records').addClass('single remove');
      $('.single .extra-fields-customer').remove();
      $('.single').append('<a href="#" class="remove-field btn-remove-customer btn btn-danger">Hapus Fasilitas</a>');
      $('.customer_records_dynamic > .single').attr("class", "remove");
      
      $('.customer_records_dynamic input').each(function() {
        var count = 0;
        var fieldname = $(this).attr("name");
        $(this).attr('name', fieldname + count );
        count++;
      });
      
      // $('#step-2').load(location.href + '#step-2')
      $('#tab-konten').css('height', 'auto')
      console.log(location.href)
    });
    
    $(document).on('click', '.remove-field', function(e) {
      $(this).parent('.remove').remove();
      e.preventDefault();
    });
    </script>

</body>

<!-- Mirrored from templates.iqonic.design/lite/posdash/html/backend/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2023 04:11:13 GMT -->

</html>