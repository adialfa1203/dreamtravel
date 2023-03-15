@extends('layouts.users')
@section('content')
<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                href="https://www.creative-tim.com/product/argon-dashboard" target="_blank">Profil Pengguna</a>
            <!-- Form -->
            <!-- <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                </form> -->
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder"
                                    src="https://demos.creative-tim.com/argon-dashboard/assets-old/img/theme/team-4.jpg">
                            </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold"></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="../examples/profile.html" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        <a href="../examples/profile.html" class="dropdown-item">
                            <i class="ni ni-settings-gear-65"></i>
                            <span>Settings</span>
                        </a>
                        <a href="../examples/profile.html" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Activity</span>
                        </a>
                        <a href="../examples/profile.html" class="dropdown-item">
                            <i class="ni ni-support-16"></i>
                            <span>Support</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#!" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="background-color: #ffc107;">
        <!-- style="min-height: 600px; background-image: url(https://raw.githubusercontent.com/creativetimofficial/argon-dashboard/gh-pages/assets-old/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;" -->
        <!-- Mask -->
        <!-- <span class="mask bg-gradient-default opacity-8"></span> -->
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-7 col-md-10">
                    <h1 class="display-2 text-white">Haii {{ Auth::user()->nama }}</h1>
                    <p class="text-white mt-0 mb-5">Ini adalah halaman profil Anda. Anda dapat Mengubah, Keluar atau
                        Menghapus akun anda disini .
                    </p>
                    <!-- <a href="#!" class="btn btn-info">Edit profile</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        {{-- <div class="row"> --}}
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">AkunKU</h3>
                            </div>
                            <div class="col-4 text-right">
                                {{-- <a href="editprofile" class="btn btn-sm btn-primary">Simpan</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/update/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <h6 class="heading-small text-muted mb-4">Informasi Pengguna</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-username">Nama</label>
                                            <input name="nama" type="text" id="input-username"
                                                class="form-control form-control-alternative" placeholder="Username"
                                                value="{{ Auth::user()->nama }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-tanggallahir">Tanggal Lahir</label>
                                            <input name="tanggal" type="date" id="input-tanggallahir"
                                                class="form-control form-control-alternative"
                                                placeholder="Tanggal Lahir" value="{{ Auth::user()->tanggal }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-email">Email</label>
                                            <input name="email" type="email" id="input-email"
                                                class="form-control form-control-alternative"
                                                placeholder="jesse@example.com" value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-password">Password</label>
                                            <input type="email" id="input-password"
                                                class="form-control form-control-alternative" placeholder="Password"
                                                value="{{ Auth::user()->password }}">
                                        </div>
                                    </div> --}}
                                </div>
                                <!-- <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-first-name">First
                                                    name</label>
                                                <input type="text" id="input-first-name"
                                                    class="form-control form-control-alternative"
                                                    placeholder="First name" value="Lucky">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-last-name">Last
                                                    name</label>
                                                <input type="text" id="input-last-name"
                                                    class="form-control form-control-alternative"
                                                    placeholder="Last name" value="Jesse">
                                            </div>
                                        </div>
                                    </div> -->
                            </div>
                            <hr class="my-4">
                            <!-- Address -->
                            <h6 class="heading-small text-muted mb-4">Informasi Kontak</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-address">Alamat</label>
                                            <input name="alamat" id="input-address" class="form-control form-control-alternative"
                                                placeholder="Home Address" value="{{ Auth::user()->alamat }}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group focused">
                                            <label class="form-control-label" for="input-nomortelepon">Nomor
                                                Telepon</label>
                                            <input name="no" id="input-nomortelepon" class="form-control form-control-alternative"
                                                placeholder="Nomor Telepon" value="{{ Auth::user()->no }}" type="text">
                                        </div>
                                    </div>
                                </div>
                                @if ($errors->has('nama'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('nama') }}
                                    </div>
                                @endif
                                @if ($errors->has('tanggal'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('tanggal') }}
                                    </div>
                                @endif
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('email') }}
                                    </div>
                                @endif
                                @if ($errors->has('alamat'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('alamat') }}
                                    </div>
                                @endif
                                @if ($errors->has('no'))
                                    <div class="alert alert-danger" role="alert">
                                      {{ $errors->first('no') }}
                                    </div>
                                @endif
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <!-- <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-city">City</label>
                                                <input type="text" id="input-city"
                                                    class="form-control form-control-alternative" placeholder="City"
                                                    value="New York">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group focused">
                                                <label class="form-control-label" for="input-country">Country</label>
                                                <input type="text" id="input-country"
                                                    class="form-control form-control-alternative" placeholder="Country"
                                                    value="United States">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="input-country">Postal
                                                    code</label>
                                                <input type="number" id="input-postal-code"
                                                    class="form-control form-control-alternative"
                                                    placeholder="Postal code">
                                            </div>
                                        </div>
                                    </div> -->
                            </div>
                            <!-- <hr class="my-4"> -->
                            <!-- Description -->
                            <!-- <h6 class="heading-small text-muted mb-4">About me</h6>
                                <div class="pl-lg-4">
                                    <div class="form-group focused">
                                        <label>About Me</label>
                                        <textarea rows="4" class="form-control form-control-alternative"
                                            placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                                    </div>
                                </div> -->
                        </form>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </div>
</div>
@endsection
