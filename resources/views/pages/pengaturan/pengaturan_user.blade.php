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
              <li class="breadcrumb-item active" aria-current="page">User</li>
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
                        <div class="btn btn-sm btn-primary has-icon float-right btn-add" data-toggle="modal" data-target="#modalUser"><i class="mdi mdi-plus"></i>Tambah User</div>
                    </div>
                </div>
                <div class="grid-body">
                    <div class="item-wrapper">
                        <div class="table-responsive">
                            <div id="usertable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="usertable_length"><label>Show <select name="usertable_length" aria-controls="usertable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="usertable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="usertable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="usertable" class="data-table table table-striped dataTable no-footer dtr-inline" role="grid" aria-describedby="usertable_info" style="width: 1005px;">
                                <thead>
                                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 27px;" aria-sort="ascending" aria-label="Id: activate to sort column descending">Id</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 89px;" aria-label="Username: activate to sort column ascending">Username</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 158px;" aria-label="Email: activate to sort column ascending">Email</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 145px;" aria-label="Registration Date: activate to sort column ascending">Registration Date</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 91px;" aria-label="Superuser: activate to sort column ascending">Superuser</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 62px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="usertable" rowspan="1" colspan="1" style="width: 48px;" aria-label="Aksi: activate to sort column ascending">Aksi</th></tr>
                                </thead>
                                <tbody>
                                
                                <tr role="row" class="odd"><td class="sorting_1" tabindex="0">1</td><td>admin</td><td>admin@gmail.com</td><td>2019-06-13 13:40:00</td><td>Ya</td><td>Tidak</td><td><center><a href="#" data-id="4" class="mr-2 btn-edit" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="4" class="btn-delete"><i class="mdi mdi-delete"></i> Hapus</a></center></td></tr><tr role="row" class="even"><td class="sorting_1" tabindex="0">2</td><td>sekretariat</td><td>sekretariat@gmail.com</td><td>2019-06-13 14:49:22</td><td>Ya</td><td>Aktif</td><td><center><a href="#" data-id="5" class="mr-2 btn-edit" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="5" class="btn-delete"><i class="mdi mdi-delete"></i> Hapus</a></center></td></tr><tr role="row" class="odd"><td class="sorting_1" tabindex="0">3</td><td>rizkyayu</td><td>aprianti@asia.com</td><td>2019-07-15 13:32:15</td><td>Tidak</td><td>Aktif</td><td><center><a href="#" data-id="8" class="mr-2 btn-edit" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="8" class="btn-delete"><i class="mdi mdi-delete"></i> Hapus</a></center></td></tr><tr role="row" class="even"><td class="sorting_1" tabindex="0">4</td><td>bidang1</td><td>bidang@gmail.com</td><td>2019-07-28 15:25:04</td><td>Ya</td><td>Aktif</td><td><center><a href="#" data-id="9" class="mr-2 btn-edit" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="9" class="btn-delete"><i class="mdi mdi-delete"></i> Hapus</a></center></td></tr><tr role="row" class="odd"><td class="sorting_1" tabindex="0">5</td><td>mriwandi</td><td>mriwandi17@gmail.com</td><td>2019-01-07 00:00:00</td><td>Ya</td><td>Tidak</td><td><center><a href="#" data-id="10" class="mr-2 btn-edit" data-toggle="modal" data-target="#userModal"><i class="mdi mdi-pencil-box-outline"></i> Ubah</a>
            <a href="#" data-id="10" class="btn-delete"><i class="mdi mdi-delete"></i> Hapus</a></center></td></tr></tbody>
                            </table><div id="usertable_processing" class="dataTables_processing card" style="display: none;">Processing...</div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="usertable_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="usertable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="usertable_previous"><a href="#" aria-controls="usertable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="usertable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="usertable_next"><a href="#" aria-controls="usertable" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
