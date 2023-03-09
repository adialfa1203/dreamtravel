@extends('layouts.users')
@section('content')
<section style="background-image:url('pic/breadcrumbs/bg-2.jpg');" class="breadcrumbs style-2 gray-90">
  <div class="container">
    <div class="text-left breadcrumbs-item"><a href="index.html">Beranda</a><i>/</i><a href="#"
        class="last"><span>Travel</span></a>
      <h2><span>Patria Jaya</span> Travel</span></span></h2>
      <div class="location"><i class="flaticon-suntour-map"></i>
        <p class="font-4">Genengan,Blitar</p><a href="#location" class="scrollto">Lihat Peta</a>
      </div>
    </div>
    <!-- <div class="breadright"><a href="#" class="cws-button small alt">Get price</a>
      <p>Best Price Guarantee</p>
    </div> -->
  </div>
</section>
<!-- ! header page-->
<div class="content-body">
  <section class="page-section pt-0 pb-50">
    <div class="container">
      <div class="menu-widget with-switch mt-30 mb-30">
        <ul class="magic-line">
          <li class="current_item"><a href="#overview" class="scrollto">Beranda</a></li>
          <li><a href="#prices" class="scrollto">Kendaraan</a></li>
          <li><a href="#location" class="scrollto">Lokasi</a></li>

          <li><a href="#reviews" class="scrollto">Resensi</a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      <div id="flex-slider" class="flexslider">
        <ul class="slides">
          <li><img src="pic/3.jpg" alt></li>
          <li><img src="pic/flexslider/l-2.jpg" alt></li>
          <li><img src="pic/flexslider/l-3.jpg" alt></li>
          <li><img src="pic/flexslider/l-4.jpg" alt></li>
          <li><img src="pic/flexslider/l-5.jpg" alt></li>
          <li><img src="pic/flexslider/l-6.jpg" alt></li>
          <li><img src="pic/flexslider/l-7.jpg" alt></li>
          <li><img src="pic/flexslider/l-8.jpg" alt></li>
          <li><img src="pic/flexslider/l-9.jpg" alt></li>
          <li><img src="pic/flexslider/l-1.jpg" alt></li>
        </ul>
      </div>
      <div id="flex-carousel" class="flexslider">
        <ul class="slides">
          <li><img src="pic/3.jpg" data-at2x="pic/flexslider/1@2x.jpg" alt></li>
          <li><img src="pic/flexslider/2.jpg" data-at2x="pic/flexslider/2@2x.jpg" alt></li>
          <li><img src="pic/flexslider/3.jpg" data-at2x="pic/flexslider/3@2x.jpg" alt></li>
          <li><img src="pic/flexslider/4.jpg" data-at2x="pic/flexslider/4@2x.jpg" alt></li>
          <li><img src="pic/flexslider/5.jpg" data-at2x="pic/flexslider/5@2x.jpg" alt></li>
          <li><img src="pic/flexslider/6.jpg" data-at2x="pic/flexslider/6@2x.jpg" alt></li>
          <li><img src="pic/flexslider/7%402x.jpg" data-at2x="pic/flexslider/7@2x.jpg" alt></li>
          <li><img src="pic/flexslider/8%402x.jpg" data-at2x="pic/flexslider/8@2x.jpg" alt></li>
          <li><img src="pic/flexslider/9.jpg" data-at2x="pic/flexslider/9@2x.jpg" alt></li>
          <li><img src="pic/flexslider/1.jpg" data-at2x="pic/flexslider/1@2x.jpg" alt></li>
        </ul>
      </div>
    </div>
    <div class="container mt-30">
      <h4 class="mb-20">Patria Jaya Travel</h4>
      <div class="row">
        <div class="col-md-8">
          <p class="mb-15">Patria Jaya Travel menghadirkan jasa transportasi travel dari Surabaya, Malang, Blitar, dan
            Tulungagung. Perorangan maupun carter per 1 unit mobil. Baik untuk urusan Dinas atau Pendidikan maupun
            Berwisata dengan pelayanan yang terbaik. </p>
          <p class="mb-15">Jika Anda membutuhkan moda transportasi darat, Anda dapat menggunakan jasa dari kami Patria
            Jaya Travel, salah satu kepastian yang membuat nyaman pelanggan. </p>
          <p class="mb-15">Dengan layanan antar jemput ke lokasi, sehingga anda lebih menghemat waktu, Praktis, Nyaman
            dan Aman sampai di tempat tujuan. Pemesanan tiket travel di tempat kami sangat mudah tinggal TELEPON atau
            WHATSAPP secara Online 24jam. Kami akan memberikan pelayanan yang terbaik.</p>
        </div>
        <div class="col-md-4">
          <div class="bg-gray-3 p-30-40">
            <ul class="style-1 mb-0">
              <li>AC</li>
              <li>Selimut</li>
              <li>Free Wifi</li>
              <li>Toilet</li>
              <li>Makanan</li>
              <li>Bantal</li>
              <li>Musik</li>
              <li>Stopkontak</li>
              <li>Minuman</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- section prices-->
    <div id="prices" class="container mb-50 mt-40">
      <div class="search-hotels room-search pattern">
        <div class="search-room-title">
          <h5>Daftar Kendaraan</h5>
        </div>
        <!-- <div class="tours-container">
          <div class="tours-box">
            <div class="tours-search mb-20">
              <form method="post" class="form search divider-skew">
                <div class="search-wrap">
                  <input type="text" placeholder="Kota Asal" class="form-control search-field"><i
                    class="flaticon-suntour-map search-icon"></i>
                </div>
              </form>
              <div class="tours-calendar divider-skew">
                <input placeholder="Tanggal berangkat" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')" class="calendar-default textbox-n"><i
                  class="flaticon-suntour-calendar calendar-icon"></i>
              </div>
              <div class="tours-calendar divider-skew">
                <input placeholder="Tanggal pulang" type="text" onfocus="(this.type='date')"
                  onblur="(this.type='text')" class="calendar-default textbox-n"><i
                  class="flaticon-suntour-calendar calendar-icon"></i>
              </div>
              <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                <select>
                  <option>Dewasa</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
              <div class="selection-box divider-skew"><i class="flaticon-suntour-children box-icon"></i>
                <select>
                  <option>Anak-Anak</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>

              <div class="button-search">Cari</div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="room-table">
        <table class="table alt-2">
          <thead>
            <tr>
              <th>kendaraan</th>
              <th>Jumlah Kursi</th>
              <th>Fasilitas</th>
              <th>Maks Barang</th>
              <th>Makan</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="pic/1.jpg" data-at2x="pic/190x130@2x.jpg" alt="" style="height: 120px; width: 190px;">
                <h6>Bus AKAS</h6>
              </td>
              <td>
                <div class="table-icon"><i class="flaticon-people alt"></i><i class="flaticon-people"></i><i
                    class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people"></i>
                  <div class="table-icon"><i class="flaticon-people "></i><i class="flaticon-people alt"></i><i
                      class="flaticon-people"></i><i class="flaticon-people"></i><i class="flaticon-people"></i>
                    <i class="flaticon-people"></i><i class="flaticon-people"></i>
                  </div>
                  <p>12 Kursi</p>
              </td>
              <td>
                <ul class="style-1">
                  <li>Ac</li>
                  <li>Free Wifi</li>
                  <li>Selimut</li>
                  <li>Bantal</li>
                  <li>Minuman</li>
                </ul>
              </td>
              <td class="room-price">
                10Kg
              </td>
              <td>
                3 Kali
              </td>
              <td><a href="/detailkendaraan" class="cws-button alt gray">Detail</a></td>
            </tr>

            <!-- <tr>
              <td> <img src="pic/190x130.jpg" data-at2x="pic/190x130@2x.jpg" alt>
                <h6>Deluxe Room, Sea View</h6>
                <p class="mb-0">(Extra beds available: Crib, <br> Rollaway bed)</p>
              </td>
              <td>
                <div class="table-icon"><i class="flaticon-people"></i><i class="flaticon-people"></i><i
                    class="flaticon-people alt"></i><i class="flaticon-people alt"></i><i
                    class="flaticon-people alt"></i></div>
                <p>2 guest</p>
              </td>
              <td>
                <ul class="style-1">
                  <li>Special conditions, pay when you stay</li>
                  <li>Breakfast included</li>
                  <li>Free Parking</li>
                  <li>Free Internet</li>
                </ul>
              </td>
              <td class="room-price">Sold out</td>
              <td> <a href="#" class="cws-button alt gray">Book now</a></td>
            </tr> -->
          </tbody>
        </table>
      </div>
    </div>
    <!-- section location-->
    <div id="location" class="container mb-50">
      <div class="row">
        <div class="col-md-12">
          <h4 class="trans-uppercase mb-10">Lokasi</h4>
          <div class="cws_divider mb-30"></div>
          <!-- google map-->
          <div class="map-wrapper">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.047613323161!2d112.12565201478009!3d-8.096627194170914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78efe35b4578f9%3A0xb8d380b99570a4c2!2sTravel%20Surabaya%20-%20Blitar%20-%20Tulungagung%20-%20Malang%20-%20Kediri%20-%20Patria%20Jaya%20Travel!5e0!3m2!1sid!2sid!4v1677639130711!5m2!1sid!2sid"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <ul class="icon inline mt-20">
            <li> <a href="#">Blitar : Genengan, Sanankulon, Kec. Sanankulon, Kabupaten Blitar, Jawa Timur 66151,
                Indonesia<i class="flaticon-suntour-map"></i></a></li>
            <li> <a href="#">0857 7777 5676<i class="flaticon-suntour-phone"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- section amenties-->
    <!-- <div id="amenties" class="container mb-50">
      <div class="row">
        <div class="col-md-12">
          <h4 class="trans-uppercase mb-10">Amenties</h4>
          <div class="cws_divider mb-10"></div>
        </div>
      </div>
      <div class="row mt-0 masonry">
        <div class="col-md-3 col-sm-6">
          <h6 class="trans-uppercase">General</h6>
          <ul class="style-1">
            <li>Room Service</li>
            <li>Newspapers</li>
            <li>Non-smoking Rooms</li>
            <li>Family Rooms</li>
            <li>Elevator</li>
            <li>Safe</li>
            <li>Heating</li>
            <li>All Spaces Non-Smoking</li>
            <li>Air Conditioning</li>
            <li>Carpeted</li>
          </ul>
          <h6 class="trans-uppercase mt-20">Business Facilities</h6>
          <ul class="style-1">
            <li>RooFax/Photocopying</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6 class="trans-uppercase">Media & Technology</h6>
          <ul class="style-1">
            <li>Telephone</li>
            <li>Radio</li>
            <li>Cable channels</li>
            <li>Flat-screen TV</li>
          </ul>
          <h6 class="trans-uppercase mt-20"> Bathroom</h6>
          <ul class="style-1">
            <li>Hairdryer</li>
            <li>Toilet</li>
            <li>Bathroom</li>
            <li>Slippers</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6 class="trans-uppercase">Food & Drink</h6>
          <ul class="style-1">
            <li>Bar</li>
            <li>Breakfast in the Room</li>
            <li>Restaurant with Dining Menu</li>
            <li>FSpecial Diet Meals (upon request)</li>
            <li>Minibar</li>
          </ul>
          <h6 class="trans-uppercase mt-20"> Activites</h6>
          <ul class="style-1">
            <li>Hiking</li>
            <li>Cycling</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6">
          <h6 class="trans-uppercase">Front Desk Services</h6>
          <ul class="style-1">
            <li>24-Hour Front Desk</li>
            <li>Currency Exchange</li>
            <li>Tour Desk</li>
            <li>Ticket Service</li>
            <li>Baggage Storage</li>
            <li>Concierge Service</li>
          </ul>
          <h6 class="trans-uppercase mt-20"> Cleaning Services</h6>
          <ul class="style-1">
            <li>Laundry</li>
            <li>Dry Cleaning</li>
            <li>Ironing Service</li>
            <li>Shoeshine</li>
            <li>Daily Housekeeping</li>
          </ul>
        </div>
      </div>
    </div> -->
    <!-- section reviews-->
    <div id="reviews" class="container mb-60">
      <div class="row">
        <div class="col-md-12">
          <h4 class="trans-uppercase mb-10">Pesan dari Pelanggan</h4>
          <div class="cws_divider mb-30"></div>
        </div>
      </div>
      <div class="reviews-wrap">
        <!-- <div class="reviews-top pattern relative">
          <div class="reviews-total">
            <h5>Excellent</h5>
            <div class="reviews-sub-mark">5.0</div>
            <div class="stars-perc"><span style="width:100%"></span></div><span>Based on 67 reviews</span>
          </div>
          <div class="reviews-marks">
            <ul>
              <li>Cleanliness<span><span class="stars-perc"><span style="width:85%"></span></span>4.5</span></li>
              <li>Location<span><span class="stars-perc"><span style="width:80%"></span></span>4.0</span></li>
              <li>Staff<span><span class="stars-perc"><span style="width:100%"></span></span>5.0</span></li>
              <li>Free Wi-Fi<span><span class="stars-perc"><span style="width:65%"> </span></span>3.5</span></li>
            </ul>
            <ul>
              <li>Comfort<span><span class="stars-perc"><span style="width:85%"> </span></span>4.5</span></li>
              <li>Facilities<span><span class="stars-perc"><span style="width:80%"></span></span>4.0</span></li>
              <li>Value for money<span><span class="stars-perc"><span style="width:100%"> </span></span>5.0</span>
              </li>
            </ul>
          </div>
        </div> -->
        <div class="comments">
          <div class="comment-body">
            <div class="avatar"><img src="pic/blog/90x90/1.jpg" data-at2x="pic/blog/90x90/1@2x.jpg" alt>
            </div>
            <div class="comment-info">
              <div class="comment-meta">
                <div class="title">
                  <h5>Lovely clean, comfortable hotel <span>Rachel George</span></h5>
                </div>
                <div class="comment-date">
                  <span>Mon, 03-23-2016</span>
                </div>
              </div>
              <div class="comment-content">
                <p>Proin ut pretium sem. Maecenas id commodo massa. Sed vitae urna hendrerit, commodo dolor non,
                  porttitor odio. Suspendisse ac arcu eu enim lobortis luctus sed quis velit. Nam ut vestibulum orci,
                  at sodales libero. Fusce egestas urna a dolor fermentum, id tincidunt leo eleifend. Phasellus
                  pulvinar hendrerit pulvinar.</p>
              </div>
            </div>
          </div>
          <div class="comment-body">
            <div class="avatar"><img src="pic/blog/90x90/2.jpg" data-at2x="pic/blog/90x90/2@2x.jpg" alt>
            </div>
            <div class="comment-info">
              <div class="comment-meta">
                <div class="title">
                  <h5>Brilliant hotel with history <span>Phillip Ferguson</span></h5>
                </div>
                <div class="comment-date">
                  <span>Mon, 03-23-2016</span>
                </div>
              </div>
              <div class="comment-content">
                <p>Vestibulum tellus justo, scelerisque sit amet imperdiet et, placerat non massa. Aliquam erat
                  volutpat. Proin vitae enim cursus, dapibus est at, feugiat mauris. Sed molestie dolor sed ante
                  dictum dictum. Quisque at nulla ipsum. Praesent interdum euismod turpis, eget tristique justo porta
                  eu. Cras ullamcorper pulvinar nibh, eget faucibus neque porta in.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="reviews-bottom">
          <h4>Tertarik memberi Saran ?</h4>
        </div>
      </div>
    </div>
    <!-- review -->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h4 class="trans-uppercase mb-10">Kritik & Saran</h4>
          <div class="cws_divider mb-30"></div>
        </div>
      </div>
      <div class="review-content pattern relative">
        <!-- <div class="row">
          <div class="col-md-5 mb-md-30 mb-xs-0">
            <div class="review-total"><img src="pic/blog/120x120.jpg" data-at2x="pic/blog/120x120@2x.jpg" alt>
              <div class="review-total-content">
                <h6>Patria Jaya Travel</h6>
                <div class="stars stars-5"></div>
                <ul class="icon">
                  <li>Blitar<i class="flaticon-suntour-map"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="review-marks clearfix mb-30">
              <ul>
                <li>Cleanliness
                  <div class="stars stars-5"></div>
                </li>
                <li>Location
                  <div class="stars stars-5"></div>
                </li>
                <li>Staff
                  <div class="stars stars-5"></div>
                </li>
                <li>Free Wi-Fi
                  <div class="stars stars-5"></div>
                </li>
              </ul>
              <ul>
                <li>Comfort
                  <div class="stars stars-5"></div>
                </li>
                <li>Facilities
                  <div class="stars stars-5"></div>
                </li>
                <li>Value for money
                  <div class="stars stars-5"></div>
                </li>
              </ul>
            </div>
          </div>
        </div> -->
        <form class="form clearfix">
          <div class="row">
            <div class="col-md-12">
              <input type="text" name="email" value="" size="40" placeholder="Nama Depan" aria-required="true"
                class="form-row form-row-first">
            </div>
            <!-- <div class="col-md-4">
              <input type="text" name="email" value="" size="40" placeholder="Nama Belakang" aria-required="true"
                class="form-row form-row-first">
            </div>
            <div class="col-md-4">
              <input type="text" name="email" value="" size="40" placeholder="Kode Pesan" aria-required="true"
                class="form-row form-row-first">
            </div> -->
            <div class="col-md-12">
              <input type="text" name="password" value="" size="40" placeholder="Judul Kritik/Saran"
                aria-required="true" class="form-row form-row-last">
            </div>
            <div class="col-md-12">
              <textarea name="message" cols="40" rows="4" placeholder="Pesan Kritik/Saran" aria-invalid="false"
                aria-required="true" class="mb-20"></textarea>
              <input type="submit" value="Kirim pesan" class="cws-button alt float-right">
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- ! review -->
  </section>
</div>
<!-- footer-->
@endsection