
@extends('layouts.users')
@section('content')

  <!-- ! header page-->
  <div class="content-body">

    <div class="tp-banner-container">
      <div class="tp-banner-container">
        <div class="tp-banner-slider">
          <ul>
            <li data-masterspeed="700" data-slotamount="7" data-transition="fade"><img src="pic/parallax-5.jpg"
                data-lazyload="pic/slider/main/slide-4.jpg" data-bgposition="center" alt="" data-kenburns="on"
                data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center"
                data-transform_in="x:-150px;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="x:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Selamat Datang di</div>
                <div class="sl-title">Dream Travel</div>
                <!-- <div class="sl-title-bot">Dream<span>$105</span> Travel</div> -->
              </div>
            </li>
            <li data-masterspeed="700" data-transition="fade"><img src="pic/parallax-1.jpg"
                data-lazyload="pic/slider/main/slide-2.jpg" data-bgposition="center" alt="" data-kenburns="on"
                data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center"
                data-transform_in="y:-150px;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="y:150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Pilih Kendaraan </div>
                <div class="sl-title">yang Membuat </div>
                <div class="sl-title-bot">anda <span></span>nyaman</div>
              </div>
            </li>
            <li data-masterspeed="700" data-transition="fade"><img src="pic/parallax-3.jpg"
                data-lazyload="pic/slider/main/slide-3.jpg" data-bgposition="center" alt="" data-kenburns="on"
                data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120"
                data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"
                data-bgparallax="10">
              <div data-x="['center','center','center','center']" data-y="center"
                data-transform_in="x:150px;opacity:0;s:1500;e:Power3.easeInOut;"
                data-transform_out="x:-150px;opacity:0;s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                data-start="400" class="tp-caption sl-content">
                <div class="sl-title-top">Eksplor dunia</div>
                <div class="sl-title">Bersama kami</div>
                <!-- <div class="sl-title-bot">Starting <span>$280</span> per night</div> -->
              </div>
            </li>
          </ul>
        </div>
        <!-- search tours form-->
        <div class="search-tours-form">
          <div class="container">
            <div class="search-tours-wrap">
              <div class="search-tours-tabs">
                <div class="search-tabs-wrap">

                </div>
              </div>
              <div class="search-tours-content">
                <div data-tours-cat="tab-cat-1" class="tours-container active">
                  <div class="tours-box">
                    <div class="tours-search">
                      <form method="post" class="form search divider-skew">
                        <div class="search-wrap">
                          <input type="text" placeholder="Kota Asal" class="form-control search-field"><i
                            class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <form method="post" class="form search divider-skew">
                        <div class="search-wrap">
                          <input type="text" placeholder="Kota Tujuan" class="form-control search-field"><i
                            class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <div class="tours-calendar divider-skew">
                        <input placeholder="Tanggal Berangkat" type="text" onfocus="(this.type='date')"
                          onblur="(this.type='text')" class="calendar-default textbox-n"><i
                          class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <div class="tours-calendar divider-skew">
                        <input placeholder="Tanggal Pulang" type="text" onfocus="(this.type='date')"
                          onblur="(this.type='text')" class="calendar-default textbox-n"><i
                          class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <!-- <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                        <select>
                          <option>Adult</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="selection-box"><i class="flaticon-suntour-children box-icon"></i>
                        <select>
                          <option>Child</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div> -->
                      <div class="button-search"><a href="/hasilpencarian">Cari</a></div>
                    </div>
                    <!-- <div class="row">
                      <div class="col-md-12 clearfix mt-25">
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
                                <input id="min_price" type="text" name="min_price" value="" data-min="0"
                                  placeholder="Min price" style="display: none;">
                                <input id="max_price" type="text" name="max_price" value="" data-max="1000000"
                                  placeholder="Max price" style="display: none;">
                                <input type="hidden" name="post_type" value="product">
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="rating">Rating
                          <div class="stars stars-5"></div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- <div data-tours-cat="tab-cat-2" style="display: none;" class="tours-container">
                  <div class="holidays-box">
                    <div class="holidays-search">
                      <form method="post" class="form search divider-skew">
                        <div class="search-wrap">
                          <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <div class="tours-calendar divider-skew"> 
                        <input placeholder="Depart date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <div class="tours-calendar divider-skew"> 
                        <input placeholder="Return date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                        <select>
                          <option>Adult</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="selection-box"><i class="flaticon-suntour-children box-icon"></i>
                        <select>
                          <option>Child</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="button-search">Search</div>
                    </div>
                  </div>
                </div>
                <div data-tours-cat="tab-cat-3" style="display: none;" class="tours-container">
                  <div class="hotels-box">
                    <div class="hotels-search">
                      <form method="post" class="form search">
                        <div class="search-wrap">
                          <input type="text" placeholder="Destination, hotel name, airport, train station, landmark or address" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                    </div>
                    <div class="hotels-select">
                      <div class="tours-calendar divider-skew"> 
                        <input placeholder="Check in" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <div class="tours-calendar divider-skew"> 
                        <input placeholder="Check out" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <div class="selection-box divider-skew"><i class="flaticon-suntour-bed box-icon"></i>
                        <select>
                          <option>Rooms</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                        <select>
                          <option>Adults</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="selection-box"><i class="flaticon-suntour-children box-icon"></i>
                        <select>
                          <option>Children</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="button-search">Search</div>
                    </div>
                  </div>
                </div>
                <div data-tours-cat="tab-cat-4" style="display: none;" class="tours-container">
                  <div class="cruise-box">
                    <div class="cruise-search"> 
                      <form method="post" class="form search divider-skew">
                        <div class="search-wrap">
                          <input type="text" placeholder="Destination" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <div class="tours-calendar"> 
                        <input placeholder="Depart date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <div class="button-search">Search</div>
                    </div>
                  </div>
                </div>
                <div data-tours-cat="tab-cat-5" style="display: none;" class="tours-container">
                  <div class="flights-box">
                    <div class="flights-search">
                      <form method="post" class="form search divider-skew">
                        <div class="search-wrap">
                          <input type="text" placeholder="Flying from (City or airport)" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <form method="post" class="form search">
                        <div class="search-wrap">
                          <input type="text" placeholder="Flying to (City or airport)" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                    </div>
                    <div class="flights-select clearfix">
                      <div class="tours-calendar divider-skew"> 
                        <input placeholder="Depart" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <div class="tours-calendar divider-skew"> 
                        <input placeholder="Return" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n"><i class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <div class="selection-box divider-skew"><i class="flaticon-suntour-adult box-icon"></i>
                        <select>
                          <option>Adults</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                      <div class="selection-box"><i class="flaticon-suntour-children box-icon"></i>
                        <select>
                          <option>Children</option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                    </div>
                    <div class="flights-search">
                      <form method="post" class="form search divider-skew">
                        <div class="search-wrap">
                          <input type="text" placeholder="Prefered airline" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <form method="post" class="form search">
                        <div class="search-wrap">
                          <input type="text" placeholder="Prefered class" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <div class="button-search">Search</div>
                    </div>
                    <div class="flights-advance"><span>Advanced options</span>
                      <div class="checkbox-wrap">
                        <div class="checkbox">
                          <input id="checkbox8" type="checkbox" value="none" name="check">
                          <label for="checkbox8">Nonstop</label>
                        </div>
                      </div>
                      <div class="checkbox-wrap">
                        <div class="checkbox">
                          <input id="checkbox9" type="checkbox" value="none" name="check">
                          <label for="checkbox9">Refundable flight</label>
                        </div>
                      </div>
                      <div class="buttons-wrap"> <a href="#" class="tour-button">Roundtrip </a><a href="#" class="tour-button">One Way </a><a href="#" class="tour-button">Multiply Destinations </a></div>
                    </div>
                  </div>
                </div>
                <div data-tours-cat="tab-cat-6" style="display: none;" class="tours-container">
                  <div class="cars-box">
                    <div class="cars-search">
                      <form method="post" class="form search divider-skew">
                        <div class="search-wrap">
                          <input type="text" placeholder="Picking up (City, airport, address)" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <form method="post" class="form search">
                        <div class="search-wrap">
                          <input type="text" placeholder="Dropping off" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                    </div>
                    <div class="cars-calendar clearfix">
                      <div class="tours-calendar divider-skew"> 
                        <input placeholder="Pickup up date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n">
                        <div class="selection-box angle">
                          <select>
                            <option>10:30 AM</option>
                            <option>11:30 AM</option>
                            <option>12:30 AM</option>
                            <option>13:30 AM</option>
                          </select>
                        </div><i class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                      <div class="tours-calendar"> 
                        <input placeholder="Drop off date" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" class="calendar-default textbox-n">
                        <div class="selection-box angle">
                          <select>
                            <option>10:30 AM</option>
                            <option>11:30 AM</option>
                            <option>12:30 AM</option>
                            <option>13:30 AM</option>
                          </select>
                        </div><i class="flaticon-suntour-calendar calendar-icon"></i>
                      </div>
                    </div>
                    <div class="cars-search">
                      <form method="post" class="form search divider-skew">
                        <div class="search-wrap">
                          <input type="text" placeholder="Car type" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <form method="post" class="form search">
                        <div class="search-wrap">
                          <input type="text" placeholder="Car rental company" class="form-control search-field"><i class="flaticon-suntour-map search-icon"></i>
                        </div>
                      </form>
                      <div class="button-search">Search</div>
                    </div>
                    <div class="cars-advance"><span>Advanced options</span>
                      <div class="checkbox-wrap">
                        <div class="checkbox">
                          <input id="checkbox1" type="checkbox" value="none" name="check">
                          <label for="checkbox1">Infant seat</label>
                        </div>
                      </div>
                      <div class="checkbox-wrap">
                        <div class="checkbox">
                          <input id="checkbox2" type="checkbox" value="none" name="check">
                          <label for="checkbox2">Ski rack</label>
                        </div>
                      </div>
                      <div class="checkbox-wrap">
                        <div class="checkbox">
                          <input id="checkbox3" type="checkbox" value="none" name="check">
                          <label for="checkbox3">Left hand control</label>
                        </div>
                      </div>
                      <div class="checkbox-wrap">
                        <div class="checkbox">
                          <input id="checkbox4" type="checkbox" value="none" name="check">
                          <label for="checkbox4">Toddler seat</label>
                        </div>
                      </div>
                      <div class="checkbox-wrap">
                        <div class="checkbox">
                          <input id="checkbox5" type="checkbox" value="none" name="check">
                          <label for="checkbox5">Snow chains</label>
                        </div>
                      </div>
                      <div class="checkbox-wrap">
                        <div class="checkbox">
                          <input id="checkbox6" type="checkbox" value="none" name="check">
                          <label for="checkbox6">Right hand control</label>
                        </div>
                      </div>
                      <div class="checkbox-wrap">
                        <div class="checkbox">
                          <input id="checkbox7" type="checkbox" value="none" name="check">
                          <label for="checkbox7">Navigation system</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- ! search tours form-->
      </div>
      <section class="page-section pb-0">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <!-- <h6 class="title-section-top font-4">Special offers</h6> -->
              <h2 class="title-section"><span>Travel</span> Terpopuler</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p>Dibawah ini adalah beberapa Travel Terpopuler di web ini.</p>
            </div>
            <div class="col-md-4"><img src="pic/promo-1.png" data-at2x="pic/promo-1@2x.png" alt
                class="mt-md-0 mt-minus-70"></div>
          </div>
        </div>
        <div class="features-tours-full-width">
          <div class="features-tours-wrap clearfix">
            <div class="features-tours-item">
              <div class="features-media"><img src="pic/tours/1.jpg" data-at2x="pic/tours/1@2x.jpg" alt>
                <div class="features-info-top">
                  <div class="info-price font-4"><span>start per night</span> $80</div>
                  <div class="info-temp font-4"><span>local temperature</span> 30° / 86°</div>
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">United arab emirates</span> Dubai</h4><a
                    href="hotels-details.html" class="button">Details</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="pic/tours/2.jpg" data-at2x="pic/tours/2@2x.jpg" alt>
                <div class="features-info-top">
                  <div class="info-price font-4"><span>start per night</span> $100</div>
                  <div class="info-temp font-4"><span>local temperature</span> 23° / 73.4°</div>
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">United kingdom</span> London</h4><a href="hotels-details.html"
                    class="button">Details</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="pic/tours/3.jpg" data-at2x="pic/tours/3@2x.jpg" alt>
                <div class="features-info-top">
                  <div class="info-price font-4"><span>start per night</span> $120</div>
                  <div class="info-temp font-4"><span>local temperature</span> 34° / 93.2°</div>
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Australia ans oceania</span> Sydney</h4><a
                    href="hotels-details.html" class="button">Details</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="pic/tours/4.jpg" data-at2x="pic/tours/4@2x.jpg" alt>
                <div class="features-info-top">
                  <div class="info-price font-4"><span>start per night</span> $105</div>
                  <div class="info-temp font-4"><span>local temperature</span> 39° / 102.2°</div>
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Brazil</span> Rio de janeiro</h4><a href="hotels-details.html"
                    class="button">Details</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="pic/tours/5.jpg" data-at2x="pic/tours/5@2x.jpg" alt>
                <div class="features-info-top">
                  <div class="info-price font-4"><span>start per night</span> $110</div>
                  <div class="info-temp font-4"><span>local temperature</span> 35° / 95°</div>
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Maldives</span> Male</h4><a href="hotels-details.html"
                    class="button">Details</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="pic/tours/6.jpg" data-at2x="pic/tours/6@2x.jpg" alt>
                <div class="features-info-top">
                  <div class="info-price font-4"><span>start per night</span> $85</div>
                  <div class="info-temp font-4"><span>local temperature</span> 30° / 86°</div>
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Turkey</span> Istanbul</h4><a href="hotels-details.html"
                    class="button">Details</a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="pic/tours/7.jpg" data-at2x="pic/tours/7@2x.jpg" alt>
                <div class="features-info-top">
                  <div class="info-price font-4"><span>start per night</span> $75</div>
                  <div class="info-temp font-4"><span>local temperature</span> 25° / 77°</div>
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Austria</span> Vienna</h4><a href="hotels-details.html"
                    class="button">Details </a>
                </div>
              </div>
            </div>
            <div class="features-tours-item">
              <div class="features-media"><img src="pic/tours/8.jpg" data-at2x="pic/tours/8@2x.jpg" alt>
                <div class="features-info-top">
                  <div class="info-price font-4"><span>start per night</span> $115</div>
                  <div class="info-temp font-4"><span>local temperature</span> 22° / 71.6°</div>
                  <p class="info-text">Etiam malesuada lectus tempor, ultricies lectus in, convallis massa.</p>
                </div>
                <div class="features-info-bot">
                  <h4 class="title"><span class="font-4">Italy</span> Venice</h4><a href="hotels-details.html"
                    class="button">Details </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section class="small-section cws_prlx_section bg-blue-40"><img src="pic/parallax-3.jpg" alt class="cws_prlx_layer"> -->
      <!-- <div class="container"> -->
      <div class="cws_divider"></div>
    </div>
  </div>
  </section>
  <section class="small-section cws_prlx_section bg-gray-40"><img src="pic/parallax-1.jpg" alt class="cws_prlx_layer">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h2 class="title-section-top alt">Tentang</h2>
          <h2 class="title-section alt mb-20"><span>Dream</span> Travel</h2>
          <p class="color-white">DreamTravel adalah sebuah website yang menyediakan daftar Travel yang siap melayani
            Anda . </p>
          <div class="cws_divider short mb-30 mt-30"></div>
          <h3 class="font-5 color-white font-medium">Teenage Dream .</h3>
        </div>
        <!-- <div class="col-md-7">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/yib7tvIrL6k" class="embed-responsive-item"></iframe>
              </div>
            </div> -->
      </div>
    </div>
  </section>
  <!-- ! page section parallax-->
  <!-- recomended section-->
  <!-- <section class="small-section bg-gray">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <h6 class="title-section-top font-4">Top rated</h6>
              <h2 class="title-section"><span>Recomended</span> Hotels</h2>
              <div class="cws_divider mb-25 mt-5"></div>
              <p>Maecenas commodo odio ut vulputate cursus. Integer in egestas lectus. Nam volutpat feugiat mi vitae mollis. Aenean tristique dolor bibendum mi scelerisque ultrices non at lorem.</p>
            </div>
            <div class="col-md-4"><i class="flaticon-suntour-hotel title-icon"></i></div>
          </div>
          <div class="row"> -->
  <!-- Recomended item-->
  <!-- <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/recomended/1.jpg" data-at2x="pic/recomended/1@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Istanbul, Turkey</div>
                </div> -->
  <!-- Recomended Content-->
  <!-- <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Hotel Bohemians</h6></a>
                  <div class="stars stars-4"></div>
                  <div class="recom-price"><span class="font-4">$90</span> per night</div>
                  <p class="mb-30">Quisque egestas a est in convallis. Maecenas pellentesque.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                  <div class="action font-2">20%</div>
                </div> -->
  <!-- Recomended Image-->
  <!-- </div>
            </div> -->
  <!-- ! Recomended item-->
  <!-- Recomended item-->
  <!-- <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/recomended/2.jpg" data-at2x="pic/recomended/2@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Praga, Czech Republic</div>
                </div> -->
  <!-- Recomended Content-->
  <!-- <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Easyhotel</h6></a>
                  <div class="stars stars-3"></div>
                  <div class="recom-price"><span class="font-4">$35</span> per night</div>
                  <p class="mb-30">Mauris eget hendrerit diam. Praesent a lacinia ex.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div> -->
  <!-- Recomended Image-->
  <!-- </div>
            </div> -->
  <!-- ! Recomended item-->
  <!-- Recomended item-->
  <!-- <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/recomended/3.jpg" data-at2x="pic/recomended/3@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Isle of Colonsay, United...</div>
                </div> -->
  <!-- Recomended Content-->
  <!-- <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Dolce Villa</h6></a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price"><span class="font-4">$110</span> per night</div>
                  <p class="mb-30">Suspe elit nibh, auctor ac quam id, maximus efficitur justo.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div> -->
  <!-- Recomended Image-->
  <!-- </div>
            </div> -->
  <!-- ! Recomended item-->
  <!-- Recomended item-->
  <!-- <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/recomended/4.jpg" data-at2x="pic/recomended/4@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> St. Petersburg, Russia</div>
                </div> -->
  <!-- Recomended Content-->
  <!-- <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Hotel Stary Pivovar</h6></a>
                  <div class="stars stars-4"></div>
                  <div class="recom-price"><span class="font-4">$55</span> per night</div>
                  <p class="mb-30">Nullam posuere tincidunt metus, nec pulvinar risus imperdiet.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div> -->
  <!-- Recomended Image-->
  <!-- </div>
            </div> -->
  <!-- ! Recomended item-->
  <!-- Recomended item-->
  <!-- <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/recomended/5.jpg" data-at2x="pic/recomended/5@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Vienna, Austria</div>
                </div> -->
  <!-- Recomended Content-->
  <!-- <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Grand Hotel Wien</h6></a>
                  <div class="stars stars-5"></div>
                  <div class="recom-price"><span class="font-4">$98</span> per night</div>
                  <p class="mb-30">Quisque egestas a est in convallis. Maecenas pellentesque.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div> -->
  <!-- Recomended Image-->
  <!-- </div>
            </div> -->
  <!-- ! Recomended item-->
  <!-- Recomended item-->
  <!-- <div class="col-md-6">
              <div class="recom-item">
                <div class="recom-media"><a href="hotels-details.html">
                    <div class="pic"><img src="pic/recomended/6.jpg" data-at2x="pic/recomended/6@2x.jpg" alt></div></a>
                  <div class="location"><i class="flaticon-suntour-map"></i> Kraków, Poland</div>
                </div> -->
  <!-- Recomended Content-->
  <!-- <div class="recom-item-body"><a href="hotels-details.html">
                    <h6 class="blog-title">Hotel Wit Stwosz</h6></a>
                  <div class="stars stars-3"></div>
                  <div class="recom-price"><span class="font-4">$75</span> per night</div>
                  <p class="mb-30">Quisque egestas a est in convallis. Maecenas pellentesque.</p><a href="hotels-details.html" class="recom-button">Read more</a><a href="hotels-details.html" class="cws-button small alt">Book now</a>
                </div> -->
  <!-- Recomended Image-->
  <!-- </div>
            </div> -->
  <!-- ! Recomended item-->
  <!-- </div>
        </div>
      </section> -->
  <!-- ! recomended section-->
  <!-- testimonials section-->
  <div class="cws_divider"></div>
  <section class="small-section cws_prlx_section bg-blue-40"><img src="pic/parallax-2.jpg" alt class="cws_prlx_layer">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <!-- <h6 class="title-section-top font-4">Happy Memories</h6> -->
          <h2 class="title-section alt-2"><span>Kata</span> Mereka</h2>
          <div class="cws_divider mb-25 mt-5"></div>
        </div>
      </div>
      <div class="row">
        <!-- testimonial carousel-->
        <div class="owl-three-item">
          <!-- testimonial item-->
          <div class="testimonial-item">
            <div class="testimonial-top"><a href="hotels-details.html">
                <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg"
                    alt></div>
              </a>
              <div class="author"> <img src="pic/testimonial/author/3.jpg" data-at2x="pic/testimonial/author/1@2x.jpg"
                  alt></div>
            </div>
            <!-- testimonial content-->
            <div class="testimonial-body">
              <h5 class="title"><span>Nicolas</span> Saputra</h5>
              <div class="stars stars-5"></div>
              <p class="align-center">Disini travelnya lengkap .</p>
            </div>
          </div>
          <!-- testimonial item-->
          <div class="testimonial-item">
            <div class="testimonial-top"><a href="hotels-details.html">
                <div class="pic"><img src="pic/testimonial/top-bg/2.jpg" data-at2x="pic/testimonial/top-bg/2@2x.jpg"
                    alt></div>
              </a>
              <div class="author"> <img src="pic/testimonial/author/2.jpg" data-at2x="pic/testimonial/author/2@2x.jpg"
                  alt></div>
            </div>
            <!-- testimonial content-->
            <div class="testimonial-body">
              <h5 class="title"><span>Jefri</span> Nichol</h5>
              <div class="stars stars-5"></div>
              <p class="align-center">Travel-travelnya bagus dan nyaman</p>
            </div>
          </div>
          <!-- testimonial item-->
          <div class="testimonial-item">
            <div class="testimonial-top"><a href="hotels-details.html">
                <div class="pic"><img src="pic/testimonial/top-bg/3.jpg" data-at2x="pic/testimonial/top-bg/3@2x.jpg"
                    alt></div>
              </a>
              <div class="author"> <img src="pic/testimonial/author/1.jpg" data-at2x="pic/testimonial/author/3@2x.jpg"
                  alt></div>
            </div>
            <!-- testimonial content-->
            <div class="testimonial-body">
              <h5 class="title"><span>Caitlin </span> Halderman</h5>
              <div class="stars stars-5"></div>
              <p class="align-center">Pelayanan sangat ramah</p>
            </div>
          </div>
          <!-- testimonial item-->
          <div class="testimonial-item">
            <div class="testimonial-top"><a href="hotels-details.html">
                <div class="pic"><img src="pic/testimonial/top-bg/1.jpg" data-at2x="pic/testimonial/top-bg/1@2x.jpg"
                    alt></div>
              </a>
              <div class="author"> <img src="pic/testimonial/author/3.jpg" data-at2x="pic/testimonial/author/1@2x.jpg"
                  alt></div>
            </div>
            <!-- testimonial content-->
            <div class="testimonial-body">
              <h5 class="title"><span>Michelle</span> Ziudith</h5>
              <div class="stars stars-5"></div>
              <p class="align-center">Bagus</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="cws_divider"></div>
  <!-- ! testimonials section-->
  <!-- gallery section-->
  <section class="small-section">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="title-section"><span>Galeri</span> Travel</h2>
          <div class="cws_divider mb-25 mt-5"></div>
        </div>
        <div class="col-md-4"><i class="flaticon-suntour-photo title-icon"></i></div>
      </div>
      <div class="row portfolio-grid">
        <!-- portfolio item-->
        <!-- portfolio item-->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <!-- portfolio image--><a href="pic/portfolio/285x285-1%402x.jpg" class="fancy">
              <div class="portfolio-media"><img src="pic/portfolio/285x285-1.jpg"
                  data-at2x="pic/portfolio/285x285-1@2x.jpg" alt></div>
            </a>
            <div class="links"><a href="pic/portfolio/285x285-1%402x.jpg" class="fancy"><i class="fa fa-expand"></i></a>
            </div>
          </div>
        </div>
        <!-- portfolio item-->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <!-- portfolio image--><a href="pic/portfolio/285x285-2%402x.jpg" class="fancy">
              <div class="portfolio-media"><img src="pic/portfolio/285x285-2.jpg"
                  data-at2x="pic/portfolio/285x285-2@2x.jpg" alt></div>
            </a>
            <div class="links"><a href="pic/portfolio/285x285-2%402x.jpg" class="fancy"><i class="fa fa-expand"></i></a>
            </div>
          </div>
        </div>
        <!-- portfolio item-->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <!-- portfolio image--><a href="pic/portfolio/285x285-3%402x.jpg" class="fancy">
              <div class="portfolio-media"><img src="pic/portfolio/285x285-3.jpg"
                  data-at2x="pic/portfolio/285x285-3@2x.jpg" alt></div>
            </a>
            <div class="links"><a href="pic/portfolio/285x285-3%402x.jpg" class="fancy"><i class="fa fa-expand"></i></a>
            </div>
          </div>
        </div>
        <!-- portfolio item-->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <!-- portfolio image--><a href="pic/portfolio/285x285-4%402x.jpg" class="fancy">
              <div class="portfolio-media"><img src="pic/portfolio/285x285-4.jpg"
                  data-at2x="pic/portfolio/285x285-4@2x.jpg" alt></div>
            </a>
            <div class="links"><a href="pic/portfolio/285x285-4%402x.jpg" class="fancy"><i class="fa fa-expand"></i></a>
            </div>
          </div>
        </div>
        <!-- portfolio item-->

        <!-- portfolio item-->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <!-- portfolio image--><a href="pic/portfolio/285x285-6%402x.jpg" class="fancy">
              <div class="portfolio-media"><img src="pic/portfolio/285x285-6.jpg"
                  data-at2x="pic/portfolio/285x285-6@2x.jpg" alt></div>
            </a>
            <div class="links"><a href="pic/portfolio/285x285-6%402x.jpg" class="fancy"><i class="fa fa-expand"></i></a>
            </div>
          </div>
        </div>
        <!-- portfolio item-->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="portfolio-item">
            <!-- portfolio image--><a href="pic/portfolio/285x285-7%402x.jpg" class="fancy">
              <div class="portfolio-media"><img src="pic/portfolio/285x285-7.jpg"
                  data-at2x="pic/portfolio/285x285-7@2x.jpg" alt></div>
            </a>
            <div class="links"><a href="pic/portfolio/285x285-7%402x.jpg" class="fancy"><i class="fa fa-expand"></i></a>
            </div>
          </div>
        </div>
        <!-- portfolio item-->
        <!-- portfolio item-->
        <div class="col-md-6 col-sm-12 col-xs-12">
          <div class="portfolio-item big">
            <!-- portfolio image--><a href="pic/portfolio/580x285-2%402x.jpg" class="fancy">
              <div class="portfolio-media"><img src="pic/portfolio/580x285-2.jpg"
                  data-at2x="pic/portfolio/580x285-2@2x.jpg" alt></div>
            </a>
            <div class="links"><a href="pic/portfolio/580x285-2%402x.jpg" class="fancy"><i class="fa fa-expand"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ! gallery section-->
  <!-- latest news-->

  <!-- ! latest news-->
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
  <!-- ! call out section-->
  </div>
  <div class="cws_divider"></div>
  <!-- footer-->
@endsection
