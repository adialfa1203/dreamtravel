@extends('admin_travel.layout.tampilan')
@section('/travel','active')
@section('content')
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                        <div>

                            <h4 class="mb-3">Detail Travel</h4>
                            <p class="mb-0">Detail Travel akan menampilkan beberapa travel yang tersedia secara
                                detail<br></p>

                            <!-- <h4 class="mb-3">Tujuan Travel  </h4> -->
                            <!-- <p class="mb-0">Gunakan daftar kategori untuk menggambarkan bisnis inti Anda secara keseluruhan dari daftar yang disediakan. <br>
                            Klik nama kategori tempat Anda ingin menambahkan item daftar. .</p> -->

                        </div>
                        <a href="/tambahtravel" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Tambah
                            Travel</a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="table-responsive rounded mb-3">
                        <table class="data-tables table mb-0 tbl-server-info">
                            <thead class="bg-white text-uppercase">
                                <tr class="ligth light-data">
                                    <th>#</th>
                                    <th class="text-center">Nomor Plat</th>
                                    <th class="text-center">Nama Kendaraan</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Tanggal Dibuat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="ligth-body">
                                @php
                                   $no =1; 
                                @endphp
                                @foreach ($data as $row)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $row->id_plat }}</td>
                                        <td>{{ $row->nama_kendaraan }}</td>
                                        <td><img src="{{ asset('fototravel/' . $row->foto) }}" alt="" style="width:100px;"></td>
                                        <td>{{ $row->created_at->format('D M Y') }}</td>
                                        <td>
                                            <a href="/tampiltravel/{{ $row->id }}" class="btn btn-info"><i class="ri-pencil-line mr-0"></i></a>
                                            <a href="/deletetravel/{{ $row->id }}" class="btn btn-danger"><i class="ri-delete-bin-line mr-0"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Page end  -->
        </div>
        <!-- Page end  -->
    </div>
@endsection
