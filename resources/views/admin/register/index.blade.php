


<!doctype html>
<html lang="en">
  
<!-- Mirrored from templates.iqonic.design/lite/posdash/html/backend/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2023 02:59:43 GMT -->
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Daftar</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="https://templates.iqonic.design/lite/posdash/html/assets/images/favicon.ico" />
      <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
      <link rel="stylesheet" href="../assets/css/backende209.css?v=1.0.0">
      <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">  </head>
  <body class=" ">
   <form class="mx-1 mx-md-4" action="" method="POST">
      @csrf
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    
      <div class="wrapper">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center flex-column justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-7 align-self-center">
                              <div class="p-3">
                                 <h2 class="mb-2">Daftar</h2>
                                 <p>Buat akun Anda.</p>
                                 @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                 @endif
                                 
                                 <form>
                                    <div class="row">
                                       <div class="col-lg-6">Nama
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="nama" type="text" placeholder="Nama">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">Alamat
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="alamat" type="text" placeholder="Alamat">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">Tanggal Lahir
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="tanggal" type="date" placeholder="Tanggal Lahir">
                                          </div>
                                       </div>                        
                                       <div class="col-lg-6">No Telepon
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="no" type="number" placeholder="Nomor Telepon">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">Email
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="email" type="email" placeholder="Email">
                                          </div>
                                       </div>
                                       <div class="col-lg-6">Password
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" name="password" type="password" placeholder="Password">
                                          </div>
                                       </div>
                                       <!-- <div class="col-lg-6">
                                          <div class="floating-label form-group">
                                             <input class="floating-input form-control" type="password" placeholder=" ">
                                             <label>Konfirmasi Password</label>
                                          </div>
                                       </div> -->
                                       <div class="col-lg-12">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label" for="customCheck1">Saya setuju dengan ketentuan penggunaan</label>
                                          </div>
                                       </div>
                                    </div>
                                    @if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
					@endif
                                    <button type="submit" class="btn btn-primary">Daftar</button>
                                    <p class="mt-3">
                                       Sudah memiliki Akun ?<a href="{{url('login')}}" class="text-primary">Masuk</a>
                                    </p>
                                 </form>
                              </div>
                           </div>
                           <div class="col-lg-5 content-right">
                              <img src="../assets/images/login/01.png" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>
    
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
  </body>

<!-- Mirrored from templates.iqonic.design/lite/posdash/html/backend/auth-sign-up.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Feb 2023 02:59:43 GMT -->
</html>