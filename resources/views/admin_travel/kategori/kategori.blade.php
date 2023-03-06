@extends('layout.tampilan')
@section('/kategori','active')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Kategori Travel</h4>
                    <p class="mb-0">Kategori Travel akan menampilkan kategori dari setiap travel yang ada</p>
                </div>
                <a href="tambahkendaraan.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Tambah Kategori</a>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive">
               <table id="datatable" class="table data-tables table-striped">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>#</th>
                        <th>Nomor Plat</th>
                        <th>Nama Kendaraan</th>
                        <th>Kategori Kendaraan</th>
                        <th>Bahan Bakar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @php
                    $no=1;
                    @endphp
                    @foreach($data as $row )
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->travels->id_plat }}</td>
                        <td>{{ $row->nama_kendaraan }}</td>
                        <td>{{ $row->kategori }}</td>
                        <td>{{ $row->bahan_kendaraan }}</td>
                        <td>{{ $row->created_at->format('D M Y') }}</td>
                        <td>
                            <div class="d-flex align-items-center list-action">
                                
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah"
                                    href="editkendaraan.html"><i class="ri-pencil-line mr-0"></i></a>
                                <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"
                                    href="#"><i class="ri-delete-bin-line mr-0"></i></a>
                            </div>
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
@endsection