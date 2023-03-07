@extends('admin_travel.layout.tampilan')
@section('/detail_tujuan','active')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div>
                    <h4 class="mb-3">Detail Tujuan</h4>
                    <p class="mb-0"></p>
                </div>
                <a href="tambahtujuan.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Tambah Tujuan</a>
            </div>
        </div>
        <div class="card-body">

            <div class="table-responsive">
               <table id="datatable" class="table data-tables table-striped">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>#</th>
                        <th>Nomor Plat</th>
                        <th>Tujuan</th>
                        <th>Pemberangkatan</th>
                        <th>Jam</th>
                        <th>tanggal dibuat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @php
                    $no=1;
                    @endphp
                    @foreach ($data as $row )
                    <tr> 
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->travels->id_plat }}</td>
                        <td>{{ $row->tujuan }}</td>
                        <td>{{ $row->pemberangkatan }}</td>
                        <td>{{ $row->jam }}</td>
                        <td>{{ $row->created_at->format('D M Y') }}</td>
                        <td>
                            <div class="d-flex align-items-center list-action">
                                
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah"
                                    href="edittujuan.html"><i class="ri-pencil-line mr-0"></i></a>
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