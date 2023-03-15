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
          <form name="checkout" method="post" action=""
            enctype="multipart/form-data" class="checkout woocommerce-checkout">
          @csrf

            <div id="customer_details" class="col">
              <div class="col" style="width: 1200px;">

                <p class="mb-20">Belum Masuk? <a href="login.html">Klik disini untuk Masuk</a></p>
                <div class="billing-wrapper">
                  <div class="woocommerce-billing-fields">
                    <p id="billing_first_name_field" class="form-row form-row-wide validate-required">
                      <label for="nama">Nama Lengkap <abbr title="required"
                          class="required">*</abbr></label>
                      <input id="nama" type="text" name="nama" placeholder="Nama" value=""
                        class="input-text">
                    </p>
                    <p id="notelp" class="form-row form-row-last validate-required validate-phone">
                      <label for="notelp">Nomor Telepon <abbr title="required" class="required">*</abbr></label>
                      <input id="notelp" type="text" name="notelp" placeholder="" value=""
                        class="input-number">
                    </p>
                    <p id="tujuan" class="form-row form-row-wide address-field validate-required">
                      <label for="tujuan">Tujuan<abbr title="required"
                          class="required">*</abbr></label>
                      <input id="tujuan" type="text" name="tujuan" placeholder="Tujuan"
                        value="" class="input-text">
                    </p>
                    <p id="jemput" class="form-row form-row-wide address-field validate-required">
                      <label for="jemput">Tiik Jemput<abbr title="required"
                          class="required">*</abbr></label>
                      <input id="jemput" type="text" name="jemput" placeholder="Alamat"
                        value="" class="input-text">
                    </p>
                    <p id="penumpang" class="form-row form-row-last validate-required">
                      <label for="penumpang">Jumlah Penumpang Dewasa<abbr title="required"
                          class="required">*</abbr></label>
                      <!-- <input id="billing_last_name" type="text" name="billing_last_name" placeholder="" value="" class="input-text"> -->
                      <select id="penumpang" name="penumpang" class="country_to_state country_select">
                        <option value="">Pilih jumlah Penumpang Dewasa…</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </p>
                    <p id="penumpang" class="form-row form-row-last validate-required">
                      <label for="penumpang">Jumlah Penumpang Anak-Anak<abbr title="required"
                          class="required">*</abbr></label>
                      <!-- <input id="penumpang" type="text" name="penumpang" placeholder="" value="" class="input-text"> -->
                      <select id="penumpang" name="penumpang" class="country_to_state country_select">
                        <option value="">Pilih jumlah Penumpang Anak-Anak…</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </p>
                    <div class="clear"></div>
                    <p id="berangkat" class="form-row form-row-first validate-required validate-email">
                      <label for="berangkat">Tanggal Berangkat <abbr title="required"
                          class="required">*</abbr></label>
                      <input id="berangkat" type="date" name="berangkat" placeholder="" value=""
                        class="input-text">
                    </p>
                    <p id="pulang" class="form-row form-row-last validate-required validate-phone">
                      <label for="pulang">Tanggal Pulang <abbr title="required" class="required">*</abbr></label>
                      <input id="pulang" type="date" name="pulang" placeholder="" value=""
                        class="input-text">
                    </p>
                    {{-- <p id="billing_address_2_field" class="form-row form-row-wide address-field">
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
                    <div class="clear"></div>
                  </div> --}}
                  {{-- <p id="order_comments_field" class="form-row notes mt-20 mb-20">
                    <label for="order_comments">Pesan untuk Travel </label>
                    <textarea id="order_comments" name="order_comments" placeholder="" rows="2" cols="5"
                      class="input-text"></textarea>
                  </p> --}}

                  <button type="submit" class="cws-button small alt mb-20">Pesan</button>
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