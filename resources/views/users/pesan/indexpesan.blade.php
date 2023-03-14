@extends('layouts.users')
@section('content')
    <!-- breadcrumbs start-->
  <section style="background-image:url('pic/breadcrumbs/bg-1.jpg');" class="breadcrumbs">
    <div class="container">
      <div class="text-left breadcrumbs-item"><a href="">Beranda</a><i>/</i><a href="">Pesan Travel</a>
        <h2><span>Pesan</span> Travel </h2>
      </div>
    </div>
  </section>
  <!-- ! breadcrumbs end-->
  <section class="small-section cws_prlx_section bg-white-80 pb-0" id="cws_prlx_section_481501519592"><img
      src="pic/images.jpg" alt="" class="cws_prlx_layer" id="cws_prlx_layer_788353406674"
      style="transform: translate(-50%, -32.4945px);">
    <div class="container">
      <div class="row">
        <div class="col" style="width: 1200px;">
          <form name="checkout" method="post" action="http://html.cwsthemes.com/suntour/shop-checkout.html"
            enctype="multipart/form-data" class="checkout woocommerce-checkout">
            <div id="customer_details" class="col">
              <div class="col" style="width: 1200px;">

                <p class="mb-20">Belum Masuk? <a href="login.html">Klik disini untuk Masuk</a></p>
                <div class="billing-wrapper">
                  <div class="woocommerce-billing-fields">
                    <p id="billing_first_name_field" class="form-row form-row-wide validate-required">
                      <label for="billing_first_name">Nama Lengkap <abbr title="required"
                          class="required">*</abbr></label>
                      <input id="billing_first_name" type="text" name="billing_first_name" placeholder="" value=""
                        class="input-text">
                    </p>
                    <p id="billing_last_names_field" class="form-row form-row-last validate-required">
                      <label for="billing_last_names">Jumlah Penumpang Dewasa<abbr title="required"
                          class="required">*</abbr></label>
                      <!-- <input id="billing_last_name" type="text" name="billing_last_name" placeholder="" value="" class="input-text"> -->
                      <select id="billing_last_names" name="billing_last_names" class="country_to_state country_select">
                        <option value="">Pilih jumlah Penumpang Dewasa…</option>
                        <option value="AX">1</option>
                        <option value="AF">2</option>
                        <option value="AL">3</option>
                        <option value="DZ">4</option>
                        <option value="AD">5</option>
                      </select>
                    </p>
                    <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                      <label for="billing_last_name">Jumlah Penumpang Anak-Anak<abbr title="required"
                          class="required">*</abbr></label>
                      <!-- <input id="billing_last_name" type="text" name="billing_last_name" placeholder="" value="" class="input-text"> -->
                      <select id="billing_last_name" name="billing_last_name" class="country_to_state country_select">
                        <option value="">Pilih jumlah Penumpang Anak-Anak…</option>
                        <option value="AX">1</option>
                        <option value="AF">2</option>
                        <option value="AL">3</option>
                        <option value="DZ">4</option>
                        <option value="AD">5</option>
                      </select>
                    </p>
                    <p id="billing_country_field"
                      class="form-row form-row-wide address-field update_totals_on_change validate-required">
                      <label for="billing_country">Asal Kota <abbr title="required" class="required">*</abbr></label>
                      <select id="billing_country" name="billing_country" class="country_to_state country_select">
                        <option value="">Pilih Kota…</option>
                        <option value="AX">Malang</option>
                        <option value="AF">Surabaya</option>
                        <option value="AL">Madura</option>
                        <option value="DZ">Pasuruan</option>
                        <option value="AD">Lumajang</option>
                      </select>
                    </p>
                    <div class="clear"></div>
                    <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                      <label for="billing_email">Tanggal Berangkat <abbr title="required"
                          class="required">*</abbr></label>
                      <input id="billing_email" type="date" name="billing_email" placeholder="" value=""
                        class="input-text">
                    </p>
                    <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                      <label for="billing_phone">Tanggal Pulang <abbr title="required" class="required">*</abbr></label>
                      <input id="billing_phone" type="date" name="billing_phone" placeholder="" value=""
                        class="input-text">
                    </p>
                    <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                      <label for="billing_address_1">Titik Jemput <abbr title="required"
                          class="required">*</abbr></label>
                      <input id="billing_address_1" type="text" name="billing_address_1" placeholder="Nama Jalan"
                        value="" class="input-text">
                    </p>
                    <p id="billing_address_2_field" class="form-row form-row-wide address-field">
                      <input id="billing_address_2" type="text" name="billing_address_2"
                        placeholder="Lokasi lebih Spesifik / Patokan" value="" class="input-text">
                    </p>
                    <p id="billing_city_field" class="form-row form-row-wide address-field validate-required">
                      <label for="billing_city">Kota / Kabupaten Tujuan <abbr title="required"
                          class="required">*</abbr></label>
                      <input id="billing_city" type="text" name="billing_city" placeholder="Kota / Kabupaten Tujuan"
                        value="" class="input-text">
                    </p>
                    <div class="clear"></div>
                    <p id="billing_email_field" class="form-row form-row-first validate-required validate-email">
                      <label for="billing_email">Alamat Email <abbr title="required" class="required">*</abbr></label>
                      <input id="billing_email" type="text" name="billing_email" placeholder="" value=""
                        class="input-text">
                    </p>
                    <p id="billing_phone_field" class="form-row form-row-last validate-required validate-phone">
                      <label for="billing_phone">Nomor Telepon <abbr title="required" class="required">*</abbr></label>
                      <input id="billing_phone" type="text" name="billing_phone" placeholder="" value=""
                        class="input-text">
                    </p>
                    <div class="clear"></div>
                  </div>
                  {{-- <p id="order_comments_field" class="form-row notes mt-20 mb-20">
                    <label for="order_comments">Pesan untuk Travel </label>
                    <textarea id="order_comments" name="order_comments" placeholder="" rows="2" cols="5"
                      class="input-text"></textarea>
                  </p> --}}

                  <div><a href="#" class="cws-button small alt mb-20">Pesan</a></div>
                </div>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
    </div>
    </div>
    <br>
    <br>
  </section>

  <!-- footer-->
@endsection