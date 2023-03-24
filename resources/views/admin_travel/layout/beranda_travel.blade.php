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
                        <h4 class="card-title">Ringkasan Tujuan</h4>
                    </div>                        
                    <div class="card-header-toolbar d-flex align-items-center">
                        <div class="dropdown">
                </div>
            </div>
        </div> 
        <div class="card card-block card-stretch card-height">
            <div id="penjualan"></div>
        </div>
            </div>
        </div>
    </div>
    <!-- Page end  -->
</div>
@endsection

@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
        Highcharts.chart('penjualan', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Laporan Tujuan Terpopuler'
        },
        xAxis: {
            categories: [
                'Perjalanan'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Tujuan Paling Diminati'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Jawa Timur',
            data: [49.9]

        }, {
            name: 'Bali',
            data: [83.6]

        }, {
            name: 'Jawa Barat',
            data: [48.9]

        }, {
            name: 'Aceh',
            data: [42.4]

        }]
    });
    </script>
@endsection