@extends('admin_travel.layout.tampilan')
@section('/fasilitas','active')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
                <div>

                    <h4 class="mb-3">Fasilitas Travel</h4>
                    

                    <!-- <h4 class="mb-3">Tujuan Travel  </h4> -->
                    <!-- <p class="mb-0">Gunakan daftar kategori untuk menggambarkan bisnis inti Anda secara keseluruhan dari daftar yang disediakan. <br>
                        Klik nama kategori tempat Anda ingin menambahkan item daftar. .</p> -->

                </div>
                <a href="/tambahfasilitas" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Tambah Fasilitas</a>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="table-responsive rounded mb-3">
            <table class="data-tables table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth light-data">
                        <th class="text-center">#</th>
                        <th>No Plat</th>
                        <th>Selimut</th>
                        <th>TV</th>
                        <th>Wifi</th>
                        <th>Bagasi(kg)</th>
                        <th>Makan</th>
                        <th>Tanggal dibuat</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="ligth-body">
                    @php
                        $no=1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                        <td scope="row">{{ $no++ }}</td>
                        <td>{{ $row->travels->id_plat }}</td>
                        <td>{{ $row->selimut }}</td>
                        <td>{{ $row->tv }}</td>
                        <td>{{ $row->wifi }}</td>
                        <td>{{ $row->bagasi }}</td>
                        <td>{{ $row->makanan }}</td>
                        <td>{{ $row->created_at->format('D M Y') }}</td>
                        <td>
                            <div class="d-flex align-items-center list-action">
                                <a class="badge bg-success mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ubah"
                                    href="/tampilfasilitas/{{ $row->id }}"><i class="ri-pencil-line mr-0"></i></a>
                                <a class="badge bg-warning mr-2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hapus"
                                    href="/deletefasilitas/{{ $row->id }}"><i class="ri-delete-bin-line mr-0"></i></a>
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
    
   <!-- Modal Edit -->
   <div class="modal fade" id="edit-note" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-body">
                   <div class="popup text-left">
                       <div class="media align-items-top justify-content-between">                            
                           <h3 class="mb-3">Product</h3>
                           <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                       </div>
                       <div class="content edit-notes">
                           <div class="card card-transparent card-block card-stretch event-note mb-0">
                               <div class="card-body px-0 bukmark">
                                   <div class="d-flex align-items-center justify-content-between pb-2 mb-3 border-bottom">                                                    
                                       <div class="quill-tool">
                                       </div>
                                   </div>
                                   <div id="quill-toolbar1">
                                       <p>Virtual Digital Marketing Course every week on Monday, Wednesday and Saturday.Virtual Digital Marketing Course every week on Monday</p>
                                   </div>
                               </div>
                               <div class="card-footer border-0">
                                   <div class="d-flex flex-wrap align-items-ceter justify-content-end">
                                       <div class="btn btn-primary mr-3" data-dismiss="modal">Cancel</div>
                                       <div class="btn btn-outline-primary" data-dismiss="modal">Save</div>
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
@endsection