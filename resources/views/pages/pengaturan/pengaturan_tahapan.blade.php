@extends('layout.base')
@section('content_back')
<div class="page-content-wrapper-inner">
    <div class="viewport-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb has-arrow">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="#">Pengaturan</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Tahapan</li>
            </ol>
        </nav>
    </div>
    <div class="content-viewport">
        <div class="row">
            <div class="col-lg-12">
                <div class="grid">
                    <div class="grid-body row">
                        <div class="col-md-8">
                        </div>
                        <div class="col-md-4">
                            <div class="btn btn-sm btn-primary has-icon float-right btn-add" data-toggle="modal" data-target="#modalTahapan"><i class="mdi mdi-plus"></i>Tambah Tahapan</div>
                        </div>
                    </div>
                    <div class="grid-body">
                        <div class="item-wrapper">
                            <div class="table-responsive">
                                <div id="usertable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="usertable_length"><label>Show <select name="usertable_length" aria-controls="usertable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="usertable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="usertable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="usertable" class="data-table table table-striped dataTable no-footer dtr-inline" role="grid" aria-describedby="usertable_info" style="width: 1005px;">
                                    <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 29px;" aria-sort="ascending" aria-label="No.: activate to sort column descending">No.</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 108px;" aria-label="Nama Tahapan: activate to sort column ascending">Nama Tahapan</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 98px;" aria-label="Tipe Tahapan: activate to sort column ascending">Tipe Tahapan</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 106px;" aria-label="Waktu Awal: activate to sort column ascending">Waktu Awal</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 106px;" aria-label="Waktu Akhir: activate to sort column ascending">Waktu Akhir</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 65px;" aria-label="Triwulan: activate to sort column ascending">Triwulan</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 108px;" aria-label="Aksi: activate to sort column ascending">Aksi</th></tr>
                                    </thead>
                                    <tbody>
                                    
                                    <tr role="row" class="odd"><td class="sorting_1" tabindex="0">1</td><td>Tahap 1</td><td>kinerja</td><td>20 Mar 2019 00:00</td><td>31 Mar 2019 23:59</td><td>1</td><td><a href="#" data-id="3" class="mr-2 btn-edit-tahapan" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="3" class="btn-delete-tahapan"><i class="mdi mdi-delete"></i> Hapus</a></td></tr><tr role="row" class="even"><td class="sorting_1" tabindex="0">2</td><td>Tahap 3</td><td>kinerja</td><td>20 Sep 2019 00:00</td><td>30 Sep 2019 23:59</td><td>3</td><td><a href="#" data-id="6" class="mr-2 btn-edit-tahapan" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="6" class="btn-delete-tahapan"><i class="mdi mdi-delete"></i> Hapus</a></td></tr><tr role="row" class="odd"><td class="sorting_1" tabindex="0">3</td><td>Tahap 4</td><td>kinerja</td><td>20 Dec 2019 00:00</td><td>31 Dec 2019 23:59</td><td>4</td><td><a href="#" data-id="7" class="mr-2 btn-edit-tahapan" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="7" class="btn-delete-tahapan"><i class="mdi mdi-delete"></i> Hapus</a></td></tr><tr role="row" class="even"><td class="sorting_1" tabindex="0">4</td><td>Tahap 1 Keuangan</td><td>keuangan</td><td>20 Mar 2019 00:00</td><td>31 Mar 2019 23:59</td><td>1</td><td><a href="#" data-id="8" class="mr-2 btn-edit-tahapan" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="8" class="btn-delete-tahapan"><i class="mdi mdi-delete"></i> Hapus</a></td></tr><tr role="row" class="odd"><td class="sorting_1" tabindex="0">5</td><td>Tahap 4 Keuangan</td><td>keuangan</td><td>20 Dec 2019 00:00</td><td>31 Dec 2019 23:59</td><td>4</td><td><a href="#" data-id="12" class="mr-2 btn-edit-tahapan" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="12" class="btn-delete-tahapan"><i class="mdi mdi-delete"></i> Hapus</a></td></tr><tr role="row" class="even"><td class="sorting_1" tabindex="0">6</td><td>Tahap 2 Keuangan</td><td>keuangan</td><td>20 Jun 2019 00:00</td><td>08 Jul 2019 23:59</td><td>2</td><td><a href="#" data-id="9" class="mr-2 btn-edit-tahapan" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="9" class="btn-delete-tahapan"><i class="mdi mdi-delete"></i> Hapus</a></td></tr><tr role="row" class="odd"><td class="sorting_1" tabindex="0">7</td><td>Tahap 2</td><td>kinerja</td><td>20 Jun 2019 00:00</td><td>07 Mar 2030 23:59</td><td>2</td><td><a href="#" data-id="5" class="mr-2 btn-edit-tahapan" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="5" class="btn-delete-tahapan"><i class="mdi mdi-delete"></i> Hapus</a></td></tr><tr role="row" class="even"><td class="sorting_1" tabindex="0">8</td><td>Test</td><td>keuangan</td><td>01 Jul 2019 00:00</td><td>31 Jul 2019 23:59</td><td>2</td><td><a href="#" data-id="13" class="mr-2 btn-edit-tahapan" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="13" class="btn-delete-tahapan"><i class="mdi mdi-delete"></i> Hapus</a></td></tr><tr role="row" class="odd"><td class="sorting_1" tabindex="0">9</td><td>Tahap 3 Keuangan</td><td>keuangan</td><td>20 Sep 2019 00:00</td><td>31 Jul 2019 23:59</td><td>3</td><td><a href="#" data-id="11" class="mr-2 btn-edit-tahapan" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="11" class="btn-delete-tahapan"><i class="mdi mdi-delete"></i> Hapus</a></td></tr></tbody>
                                </table><div id="usertable_processing" class="dataTables_processing card" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="usertable_info" role="status" aria-live="polite">Showing 1 to 9 of 9 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="usertable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="usertable_previous"><a href="#" aria-controls="usertable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="usertable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="usertable_next"><a href="#" aria-controls="usertable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
