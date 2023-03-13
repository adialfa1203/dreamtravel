@extends('layouts.users')
@section('content')
    <!-- ! header page-->
  <div class="content-body">
    <div class="container page">
      <h2 class="title-section mb-5"><span>Cari</span> Travel</h2>
      <div class="search-hotels mb-40 pattern">
        <div class="tours-container">
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
                <input placeholder="Tanggal pulang" type="text" onfocus="(this.type='date')" onblur="(this.type='text')"
                  class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
              </div>
              <!-- <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
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
              </div> -->

            </div>
            <div class="row">
              <div class="col-md-6 clearfix">
                <div class="widget-price-slider float-left">
                  <form method="get" action="#">
                    <div class="price_slider_wrapper">
                      <div aria-disabled="false"
                        class="price_slider price_slider_amount ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div><a href="#"
                          class="ui-slider-handle ui-state-default ui-corner-all">
                          <div class="price_label"><span class="from"></span></div>
                        </a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all">
                          <div class="price_label"><span class="to"></span></div>
                        </a>
                      </div>
                      <div class="price_slider_amount addon">
                        <input id="min_price" type="text" name="min_price" value="" data-min="0" placeholder="Min price"
                          style="display: none;">
                        <input id="max_price" type="text" name="max_price" value="" data-max="1000000"
                          placeholder="Max price" style="display: none;">
                        <input type="hidden" name="post_type" value="product">
                      </div>
                    </div>
                  </form>
                </div>
                <!-- <div class="rating">Rating
                  <div class="stars stars-5"></div>
                </div> -->
              </div>
              <div class="col-md-6">
                <div class="tours-search">
                  <form method="post" class="form search">
                    <div class="search-wrap">
                      <input type="text" placeholder="Tujuan" class="form-control search-field"><i
                        class="flaticon-suntour-map search-icon"></i>
                    </div>
                  </form>
                  <div class="button-search">Cari</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <!-- Recomended item-->
          <div class="card">
            <div class="col-md-12">
              <div class="recom-item border faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/1.jpg" data-at2x="pic/029466900_1663919230-Bus_Pariwisata@2x.jpg"
                        alt="" style="height: 240px; width: 600px;"></div>
                  </a>
                  <div class="location">Malang - Surabaya</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="/detailtravel">
                    <h6 class="blog-title">Travel Partria jaya</h6>
                  </a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price">
                    <h5>Rp. 100.000,00 / Orang</h5>
                  </div>
                  <a class="recom-button faq-title" data-toggle="collapse" data-target="#faqCollapse-1"
                    data-aria-expanded="true" data-aria-controls="faqCollapse-1">Selengkapnya</a><a href="{{ url('pemesanan') }}"
                    class="cws-button small alt">Pesan
                    Sekarang</a>
                  <!-- <div class="action font-2">20%</div> -->
                </div>
                <!-- Recomended Image-->
              </div>
              <div id="faqCollapse-1" class="collapse col-md-12" aria-labelledby="faqHeading-1"
                data-parent="#accordion">
                <div class="card-body">
                  <div class="element-section mb-80">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="menu-widget with-switch">
                          <ul class="magic-line">
                            <li class="current_item"><a href="#" data-filter=".waktu" class="filter active">Detail
                                Waktu</a>
                            </li>
                            <li><a href="#" data-filter=".kendaraan" class="filter">Detail Kendaraan</a></li>
                            <li><a href="#" data-filter=".harga" class="filter">Detail Harga</a></li>
                            <!-- <li><a href="#">Solo (17)</a></li>
                            <li><a href="#">Business (10)</a></li> -->
                          </ul>
                        </div>
                        <div id="filter-grid" class="row portfolio-grid gallery">
                          <div class="all waktu">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, est ab? Corrupti id
                              molestias accusamus quibusdam voluptatem quis nisi illum, quos nostrum fugit ipsam
                              expedita dolore tempore hic voluptate ea! Lorem ipsum dolor sit, amet consectetur
                              adipisicing elit. Totam tempore earum delectus, ipsa impedit in officiis ullam aperiam
                              officia consequuntur doloremque quidem placeat sequi praesentium veniam quam dolores quasi
                              libero?</p>
                          </div>
                          <div class="all kendaraan">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nisi placeat nobis</p>
                          </div>
                          <div class="all harga">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, soluta. Officiis ab
                              molestiae, culpa cupiditate expedita a porro quibusdam accusamus, distinctio
                              necessitatibus
                              quas nemo, dolor facere! Quam minus deleniti molestias.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- ! Recomended item-->
          <!-- Recomended item-->
          <div class="card">
            <div class="col-md-12">
              <div class="recom-item border faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                data-aria-expanded="true" data-aria-controls="faqCollapse-2">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/1.jpg" data-at2x="pic/029466900_1663919230-Bus_Pariwisata@2x.jpg"
                        alt="" style="height: 240px; width: 600px;"></div>
                  </a>
                  <div class="location">Malang - Surabaya</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Travel Partria jaya</h6>
                  </a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price">
                    <h5>Rp. 100.000,00 / Orang</h5>
                  </div>
                  <a class="recom-button faq-title" data-toggle="collapse" data-target="#faqCollapse-2"
                    data-aria-expanded="true" data-aria-controls="faqCollapse-2">Selengkapnya</a><a href="pesan.html"
                    class="cws-button small alt">Pesan
                    Sekarang</a>
                  <!-- <div class="action font-2">20%</div> -->
                </div>
                <!-- Recomended Image-->
              </div>
              <div id="faqCollapse-2" class="collapse col-md-12" aria-labelledby="faqHeading-2"
                data-parent="#accordion">
                <div class="card-body">
                  <div class="element-section mb-80">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="menu-widget with-switch">
                          <ul class="magic-line">
                            <li class="current_item"><a href="#" data-filter=".waktu1" class="filter active">Detail
                                Waktu</a>
                            </li>
                            <li><a href="#" data-filter=".kendaraan1" class="filter">Detail Kendaraan</a></li>
                            <li><a href="#" data-filter=".harga1" class="filter">Detail Harga</a></li>
                            <!-- <li><a href="#">Solo (17)</a></li>
                            <li><a href="#">Business (10)</a></li> -->
                          </ul>
                        </div>
                        <div id="filter-grid1" class="row portfolio-grid gallery">
                          <div class="all waktu1">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, est ab? Corrupti id
                              molestias accusamus quibusdam voluptatem quis nisi illum, quos nostrum fugit ipsam
                              expedita dolore tempore hic voluptate ea! Lorem ipsum dolor sit, amet consectetur
                              adipisicing elit. Totam tempore earum delectus, ipsa impedit in officiis ullam aperiam
                              officia consequuntur doloremque quidem placeat sequi praesentium veniam quam dolores quasi
                              libero?</p>
                          </div>
                          <div class="all kendaraan1">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nisi placeat nobis</p>
                          </div>
                          <div class="all harga1">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, soluta. Officiis ab
                              molestiae, culpa cupiditate expedita a porro quibusdam accusamus, distinctio
                              necessitatibus
                              quas nemo, dolor facere! Quam minus deleniti molestias.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- ! Recomended item-->
          <!-- Recomended item-->
          <div class="card">
            <div class="col-md-12">
              <div class="recom-item border faq-title" data-toggle="collapse" data-target="#faqCollapse-3"
                data-aria-expanded="true" data-aria-controls="faqCollapse-3">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/1.jpg" data-at2x="pic/029466900_1663919230-Bus_Pariwisata@2x.jpg"
                        alt="" style="height: 240px; width: 600px;"></div>
                  </a>
                  <div class="location">Malang - Surabaya</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Travel Partria jaya</h6>
                  </a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price">
                    <h5>Rp. 100.000,00 / Orang</h5>
                  </div>
                  <a class="recom-button faq-title" data-toggle="collapse" data-target="#faqCollapse-3"
                    data-aria-expanded="true" data-aria-controls="faqCollapse-3">Selengkapnya</a><a href="pesan.html"
                    class="cws-button small alt">Pesan
                    Sekarang</a>
                  <!-- <div class="action font-2">20%</div> -->
                </div>
                <!-- Recomended Image-->
              </div>
              <div id="faqCollapse-3" class="collapse col-md-12" aria-labelledby="faqHeading-3"
                data-parent="#accordion">
                <div class="card-body">
                  <div class="element-section mb-80">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="menu-widget with-switch">
                          <ul class="magic-line">
                            <li class="current_item"><a href="#" data-filter=".waktu" class="filter active">Detail
                                Waktu</a>
                            </li>
                            <li><a href="#" data-filter=".kendaraan" class="filter">Detail Kendaraan</a></li>
                            <li><a href="#" data-filter=".harga" class="filter">Detail Harga</a></li>
                            <!-- <li><a href="#">Solo (17)</a></li>
                            <li><a href="#">Business (10)</a></li> -->
                          </ul>
                        </div>
                        <div id="filter-grid" class="row portfolio-grid gallery">
                          <div class="all waktu">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, est ab? Corrupti id
                              molestias accusamus quibusdam voluptatem quis nisi illum, quos nostrum fugit ipsam
                              expedita dolore tempore hic voluptate ea! Lorem ipsum dolor sit, amet consectetur
                              adipisicing elit. Totam tempore earum delectus, ipsa impedit in officiis ullam aperiam
                              officia consequuntur doloremque quidem placeat sequi praesentium veniam quam dolores quasi
                              libero?</p>
                          </div>
                          <div class="all kendaraan">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nisi placeat nobis</p>
                          </div>
                          <div class="all harga">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, soluta. Officiis ab
                              molestiae, culpa cupiditate expedita a porro quibusdam accusamus, distinctio
                              necessitatibus
                              quas nemo, dolor facere! Quam minus deleniti molestias.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- ! Recomended item-->
        <!-- Recomended item-->
        <div class="col-md-6">
          <div class="card">
            <div class="col-md-12">
              <div class="recom-item border faq-title" data-toggle="collapse" data-target="#faqCollapse-4"
                data-aria-expanded="true" data-aria-controls="faqCollapse-4">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/1.jpg" data-at2x="pic/029466900_1663919230-Bus_Pariwisata@2x.jpg"
                        alt="" style="height: 240px; width: 600px;"></div>
                  </a>
                  <div class="location">Malang - Surabaya</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Travel Partria jaya</h6>
                  </a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price">
                    <h5>Rp. 100.000,00 / Orang</h5>
                  </div>
                  <a class="recom-button faq-title" data-toggle="collapse" data-target="#faqCollapse-4"
                    data-aria-expanded="true" data-aria-controls="faqCollapse-4">Selengkapnya</a><a href="pesan.html"
                    class="cws-button small alt">Pesan
                    Sekarang</a>
                  <!-- <div class="action font-2">20%</div> -->
                </div>
                <!-- Recomended Image-->
              </div>
              <div id="faqCollapse-4" class="collapse col-md-12" aria-labelledby="faqHeading-4"
                data-parent="#accordion">
                <div class="card-body">
                  <div class="element-section mb-80">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="menu-widget with-switch">
                          <ul class="magic-line">
                            <li class="current_item"><a href="#" data-filter=".a" class="filter active">Detail
                                Waktu</a>
                            </li>
                            <li><a href="#" data-filter=".b" class="filter">Detail Kendaraan</a></li>
                            <li><a href="#" data-filter=".c" class="filter">Detail Harga</a></li>
                            <!-- <li><a href="#">Solo (17)</a></li>
                            <li><a href="#">Business (10)</a></li> -->
                          </ul>
                        </div>
                        <div id="filter-grid" class="row portfolio-grid gallery">
                          <div class="all a">
                            <p>Lorem</p>
                          </div>
                          <div class="all b">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nisi placeat nobis</p>
                          </div>
                          <div class="all c">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, soluta. Officiis ab
                              molestiae, culpa cupiditate expedita a porro quibusdam accusamus, distinctio
                              necessitatibus
                              quas nemo, dolor facere! Quam minus deleniti molestias.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- ! Recomended item-->
          <!-- Recomended item-->
          <div class="card">
            <div class="col-md-12">
              <div class="recom-item border faq-title" data-toggle="collapse" data-target="#faqCollapse-5"
                data-aria-expanded="true" data-aria-controls="faqCollapse-5">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/1.jpg" data-at2x="pic/029466900_1663919230-Bus_Pariwisata@2x.jpg"
                        alt="" style="height: 240px; width: 600px;"></div>
                  </a>
                  <div class="location">Malang - Surabaya</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Travel Partria jaya</h6>
                  </a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price">
                    <h5>Rp. 100.000,00 / Orang</h5>
                  </div>
                  <a class="recom-button faq-title" data-toggle="collapse" data-target="#faqCollapse-5"
                    data-aria-expanded="true" data-aria-controls="faqCollapse-5">Selengkapnya</a><a href="pesan.html"
                    class="cws-button small alt">Pesan
                    Sekarang</a>
                  <!-- <div class="action font-2">20%</div> -->
                </div>
                <!-- Recomended Image-->
              </div>
              <div id="faqCollapse-5" class="collapse col-md-12" aria-labelledby="faqHeading-5"
                data-parent="#accordion">
                <div class="card-body">
                  <div class="element-section mb-80">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="menu-widget with-switch">
                          <ul class="magic-line">
                            <li class="current_item"><a href="#" data-filter=".waktu" class="filter active">Detail
                                Waktu</a>
                            </li>
                            <li><a href="#" data-filter=".kendaraan" class="filter">Detail Kendaraan</a></li>
                            <li><a href="#" data-filter=".harga" class="filter">Detail Harga</a></li>
                            <!-- <li><a href="#">Solo (17)</a></li>
                            <li><a href="#">Business (10)</a></li> -->
                          </ul>
                        </div>
                        <div id="filter-grid" class="row portfolio-grid gallery">
                          <div class="all waktu">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, est ab? Corrupti id
                              molestias accusamus quibusdam voluptatem quis nisi illum, quos nostrum fugit ipsam
                              expedita dolore tempore hic voluptate ea! Lorem ipsum dolor sit, amet consectetur
                              adipisicing elit. Totam tempore earum delectus, ipsa impedit in officiis ullam aperiam
                              officia consequuntur doloremque quidem placeat sequi praesentium veniam quam dolores quasi
                              libero?</p>
                          </div>
                          <div class="all kendaraan">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nisi placeat nobis</p>
                          </div>
                          <div class="all harga">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, soluta. Officiis ab
                              molestiae, culpa cupiditate expedita a porro quibusdam accusamus, distinctio
                              necessitatibus
                              quas nemo, dolor facere! Quam minus deleniti molestias.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <!-- ! Recomended item-->
          <!-- Recomended item-->
          <div class="card">
            <div class="col-md-12">
              <div class="recom-item border faq-title" data-toggle="collapse" data-target="#faqCollapse-6"
                data-aria-expanded="true" data-aria-controls="faqCollapse-6">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/1.jpg" data-at2x="pic/029466900_1663919230-Bus_Pariwisata@2x.jpg"
                        alt="" style="height: 240px; width: 600px;"></div>
                  </a>
                  <div class="location">Malang - Surabaya</div>
                </div>
                <!-- Recomended Content-->
                <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Travel Partria jaya</h6>
                  </a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price">
                    <h5>Rp. 100.000,00 / Orang</h5>
                  </div>
                  <a class="recom-button faq-title" data-toggle="collapse" data-target="#faqCollapse-6"
                    data-aria-expanded="true" data-aria-controls="faqCollapse-6">Selengkapnya</a><a href="pesan.html"
                    class="cws-button small alt">Pesan
                    Sekarang</a>
                  <!-- <div class="action font-2">20%</div> -->
                </div>
                <!-- Recomended Image-->
              </div>
              <div id="faqCollapse-6" class="collapse col-md-12" aria-labelledby="faqHeading-6"
                data-parent="#accordion">
                <div class="card-body">
                  <div class="element-section mb-80">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="menu-widget with-switch">
                          <ul class="magic-line">
                            <li class="current_item"><a href="#" data-filter=".waktu" class="filter active">Detail
                                Waktu</a>
                            </li>
                            <li><a href="#" data-filter=".kendaraan" class="filter">Detail Kendaraan</a></li>
                            <li><a href="#" data-filter=".harga" class="filter">Detail Harga</a></li>
                            <!-- <li><a href="#">Solo (17)</a></li>
                            <li><a href="#">Business (10)</a></li> -->
                          </ul>
                        </div>
                        <div id="filter-grid" class="row portfolio-grid gallery">
                          <div class="all waktu">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Qui, est ab? Corrupti id
                              molestias accusamus quibusdam voluptatem quis nisi illum, quos nostrum fugit ipsam
                              expedita dolore tempore hic voluptate ea! Lorem ipsum dolor sit, amet consectetur
                              adipisicing elit. Totam tempore earum delectus, ipsa impedit in officiis ullam aperiam
                              officia consequuntur doloremque quidem placeat sequi praesentium veniam quam dolores quasi
                              libero?</p>
                          </div>
                          <div class="all kendaraan">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos nisi placeat nobis</p>
                          </div>
                          <div class="all harga">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates, soluta. Officiis ab
                              molestiae, culpa cupiditate expedita a porro quibusdam accusamus, distinctio
                              necessitatibus
                              quas nemo, dolor facere! Quam minus deleniti molestias.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- ! Recomended item-->
      </div>
    </div>
    <!-- call out section-->
    <!-- <section class="page-section pt-90 pb-80 bg-main pattern relative">
        <div class="container">
          <div class="call-out-box clearfix with-icon">
            <div class="row call-out-wrap">
              <div class="col-md-5">
                <h6 class="title-section-top gray font-4">subscribe today</h6>
                <h2 class="title-section alt-2"><span>Get</span> Latest offers</h2><i class="flaticon-suntour-email call-out-icon"></i>
              </div>
              <div class="col-md-7">
                <form action="http://html.cwsthemes.com/suntour/php/contacts-process.php" method="post" class="form contact-form mt-10">
                  <div class="input-container">
                    <input type="text" placeholder="Enter your email" value="" name="email" class="newsletter-field mb-0 form-row"><i class="flaticon-suntour-email icon-left"></i>
                    <button type="submit" class="subscribe-submit"><i class="flaticon-suntour-arrow icon-right"></i></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section> -->
    <!-- ! call out section	-->
  </div>
  <!-- footer-->
@endsection