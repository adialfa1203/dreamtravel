@extends('layouts.users')
@section('content')
    <!-- ! header page-->
  <!-- content-->
  <div class="content-body">
    <div class="container page">
      <div class="row">
        <div class="col-md-6">
          <div class="contact-item">
            <h4 class="title-section mt-30"><span class="font-bold">Kontak</span></h4>
            <div class="cws_divider mb-25 mt-5"></div>
            <ul class="icon">
              <li> <a href="#">dreamtravel@example.com<i class="flaticon-suntour-email"></i></a></li>
              <li> <a href="#">(505)-700-45<i class="flaticon-suntour-phone"></i></a></li>
              <li> <a href="#">Karang Ploso, Malang<i class="flaticon-suntour-map"></i></a></li>
            </ul>
            <p class="mt-20"> <span>Saran?</span> Bolehh, <span> Kritik?</span> jangann .</p>
            <div class="contact-cws-social"><a href="#" class="cws-social fa fa-twitter"></a><a href="#"
                class="cws-social fa fa-facebook"></a><a href="#" class="cws-social fa fa-google-plus"></a><a href="#"
                class="cws-social fa fa-linkedin"></a></div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map-wrapper">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.952145553704!2d112.60469731410974!3d-7.900068680794785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7881c2c4637501%3A0x10433eaf1fb2fb4c!2sHummasoft%20Technology!5e0!3m2!1sid!2sid!4v1677160436747!5m2!1sid!2sid"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    <div class="element-section pattern bg-gray-3 relative pt-60 pb-100">
      <div class="container">
        <h4 class="title-section mb-20"><span class="font-bold">Hubungi Kami</span></h4>
        <div class="widget-contact-form pb-0">
          <!-- contact-form-->
          <div class="email_server_responce"></div>
          <form action="http://html.cwsthemes.com/suntour/php/contacts-process.php" method="post"
            class="form contact-form alt clearfix">
            <div class="row">
              <div class="col-md-6 clearfix">
                <div class="input-container">
                  <input type="text" name="name" value="" size="40" placeholder="Nama" aria-invalid="false"
                    aria-required="true" class="form-row form-row-first">
                </div>
              </div>
              <div class="col-md-6">
                <div class="input-container">
                  <input type="text" name="email" value="" size="40" placeholder="Email" aria-required="true"
                    class="form-row form-row-last">
                </div>
              </div>
            </div>
            <div class="input-container">
              <textarea name="message" cols="40" rows="4" placeholder="Mau ngasih saran apaa ?" aria-invalid="false"
                aria-required="true"></textarea>
            </div>
            <input type="submit" value="Kirim" class="cws-button alt">
          </form>
          <!-- /contact-form-->
        </div>
      </div>
    </div>
  </div>
  <!-- ! content-->
  <!-- footer-->
@endsection