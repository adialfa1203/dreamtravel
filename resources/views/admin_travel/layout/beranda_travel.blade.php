@extends('admin_travel.layout.tampilan')
@section('/beranda','active')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-transparent card-block card-stretch card-height border-none">
                 <div class="card-body p-0 mt-lg-2 mt-0">
                    <h3 class="mb-3">Halo {{ Auth::user()->nama }} !</h3>
                    <p class="mb-0 mr-4">Selamat Bekerja !</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row">
                
                <div class="col-lg-6 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-danger-light">
                                    <img src="{{  asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/images/product/2.png') }}" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <p class="mb-2">Pesanan</p>
                                    <h4>35081</h4>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-danger iq-progress progress-1" data-percent="70">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 card-total-sale">
                                <div class="icon iq-icon-box-2 bg-success-light">
                                    <img src="{{  asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/images/product/3.png') }}" class="img-fluid" alt="image">
                                </div>
                                <div>
                                    <p class="mb-2">Travel</p>
                                    <h4>4000</h4>
                                </div>
                            </div>
                            <div class="iq-progress-bar mt-2">
                                <span class="bg-success iq-progress progress-1" data-percent="75">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   
        
        <div class="col-lg-12">  
            <div class="card card-block card-stretch card-height">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Ringkasan Pesanan</h4>
                    </div>                        
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                            <span class="dropdown-toggle dropdown-bg btn" id="dropdownMenuButton004"
                                    data-toggle="dropdown">
                                    Bulan ini<i class="ri-arrow-down-s-line ml-1"></i>
                                </span>
                                <div class="dropdown-menu dropdown-menu-right shadow-none"
                                    aria-labelledby="dropdownMenuButton004">
                                    <a class="dropdown-item" href="#">Tahun</a>
                                    <a class="dropdown-item" href="#">Bulan</a>
                                    <a class="dropdown-item" href="#">Minggu</a>
                                </div>
                        </div>
                    </div>
                </div> 
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center mt-2">
                        <div class="d-flex align-items-center progress-order-left">
                            <div class="progress progress-round m-0 orange conversation-bar" data-percent="46">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value text-secondary">46%</div>
                            </div>
                            <div class="progress-value ml-3 pr-5 border-right">
                                <h5>Pesanan Rata-Rata</h5>
                                <p class="mb-0">1M</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ml-5 progress-order-right">
                            <div class="progress progress-round m-0 primary conversation-bar" data-percent="70">
                                <span class="progress-left">
                                    <span class="progress-bar"></span>
                                </span>
                                <span class="progress-right">
                                    <span class="progress-bar"></span>
                                </span>
                                <div class="progress-value text-primary">70%</div>
                            </div>
                            <div class="progress-value ml-3">
                                <h5>Pesanan Terbanyak</h5>
                                <p class="mb-0">5M</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div id="layout1-chart-5"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page end  -->
</div>
@endsection