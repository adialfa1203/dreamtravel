

<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/lite/posdash/html/backend/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2023 02:59:13 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Beranda</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/lite/posdash/html/assets/images/favicon.ico" />
      <link rel="stylesheet" href="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/css/backend-plugin.min.css')}}">
      <link rel="stylesheet" href="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/css/backende209.css?v=1.0.0')}}">
      <link rel="stylesheet" href="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}">
      <link rel="stylesheet" href="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/vendor/remixicon/fonts/remixicon.css')}}">  
    <!-- Google Tag Manager -->


    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/css/smart_wizard_all.min.css" rel="stylesheet" type="text/css" />
      
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">


    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WNGH9RL');window.tag_manager_event='dashboard-free-preview';window.tag_manager_product='Posdash';</script>
    <!-- End Google Tag Manager -->
</head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      
        @include('admin_travel.layout.sidebar')
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
      </div>      <div class="content-page">

        {{-- content --}}
     @yield('content')
    {{-- penutup content --}}
      </div>
    </div>
    <!-- Wrapper End-->
    
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/js/backend-bundle.min.js')}}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/js/table-treeview.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/js/customizer.js')}}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script async src="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/js/chart-custom.js')}}"></script>
    
    <!-- app JavaScript -->
    <script src="{{ asset ('E5 (1)\E5/templates.iqonic.design/lite/posdash/html/assets/js/app.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- jQuery Slim 3.6  -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script> -->

    <!-- Include SmartWizard JavaScript source -->
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript"></script>
    @yield('script')
  </body>

<!-- Mirrored from templates.iqonic.design/lite/posdash/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2023 02:59:20 GMT -->
</html>