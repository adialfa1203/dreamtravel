@extends('layout.tampilan')
@section('/travel','active')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit Travel</title>
    </head>

    <body>

        <div class="container-fluid">
            <div class="">
                <div class="container-fluid add-form-list">update
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <div class="header-title">
                                        <h4 class="card-title">Edit Travel</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form
                                        action="/updatetravel/{{ $data->id }}"
                                        data-toggle="validator" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>No Plat</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan No plat" data-errors="Masukan No Plat."
                                                            required id="id_plat" name="id_plat" value="{{ $data->id_plat }}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label>Nama Kendaraan</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Masukan Nama Kendaraan"
                                                            data-errors="Masukan Nama Kendaraan." required id="nama_kendaraan" name="nama_kendaraan" value="{{ $data->nama_kendaraan }}">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class`="form-group">
                                                    <div class="form-group">
                                                        <label>Foto</label>
                                                        <input type="file" value="uploud foto"
                                                            class="form-control image-file" name="foto" accept="image/*" id="foto" name="foto">
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
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
