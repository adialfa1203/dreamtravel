@extends('layout.tampilan')
@section('/fasilitas','active')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Travel</title>
    </head>

    <body>

        <div class="container-fluid">
            <div class="">
                <div class="container-fluid add-form-list">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Tambah Travel</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form
                                        action="/insertfasilitas"
                                        data-toggle="validator" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">                      
                                                    <div class="form-group">
                                                        <label>Nomor Plat</label>
                                                        <select name="plat" id="plat" class="selectpicker form-control" data-style="py-0">
                                                            <option>-- Pilih No Plat --</option>

                                                            @foreach ($datatravel as $d)
                                                            <option value="{{ $d->id }}">{{ $d->id_plat }}</option>
                                                        @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Selimut</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan Jumlah Selimut"
                                                            data-errors="Masukan Jumlah Selimut." required id="selimut" name="selimut">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Tv</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan Jumlah Tv"
                                                            data-errors="Masukan Jumlah Tv." required id="tv" name="tv">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Wifi</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan Jumlah Wifi"
                                                            data-errors="Masukan Jumlah Wifi." required id="wifi" name="wifi">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Bagasi</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan Jumlah Bagasi"
                                                            data-errors="Masukan Jumlah Bagasi." required id="bagasi" name="bagasi">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Makanan</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan Jumlah Makanan"
                                                            data-errors="Masukan Jumlah Makanan." required id="makanan" name="makanan">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Tambah Kategori</button>
                                            <button type="reset" class="btn btn-danger ">Mengatur ulang</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page end  -->
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection