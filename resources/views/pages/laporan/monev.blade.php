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
                  <a href="#">Laporan</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Monitoring Evaluasi Kinerja dan Keuangan</li>
          </ol>
      </nav>
  </div>
  <div class="content-viewport">
      <div class="row">
          <div class="col-lg-12">
              <div class="grid">
                  <div class="grid-body pb-0">
                      <p class="card-title ml-n1">Laporan Monev per Tahun</p>
                  </div>
                  <div class="grid-body row pb-0">
                      <div class="col-md-2">
                          <div class="form-group">
                              <select class="custom-select center">
                                  <option selected="selected">...Pilih Tahun...</option>
                                  <option value="2018">2018</option>
                                  <option value="2019">2019</option>
                                  <option value="2020">2020</option>
                                  <option value="2021">2021</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-6">
                          
                      </div>
                      <div class="col-md-4">
                          <div class="btn btn-sm btn-danger has-icon" id="btn-cetak-pdf"><i class="mdi mdi-file-pdf-box"></i>Cetak ke PDF</div>
                          <div class="btn btn-sm btn-success has-icon float-right" id="btn-cetak-excel"><i class="mdi mdi-file-excel-box"></i>Cetak ke Excel</div>
                      </div>
                  </div>
              </div>
              <div class="grid">
                  <div class="grid-body pb-0">
                      <p class="card-title ml-n1">Laporan Monev per Triwulan</p>
                  </div>
                  <div class="grid-body row pb-0">
                      <div class="col-md-4">
                          <div class="form-group">
                              <select class="custom-select center" id="triwulan">
                                  <option selected="selected">...Pilih Triwulan...</option>
                                  <option value="1">Triwulan 1 (Januari - Maret)</option>
                                  <option value="2">Triwulan 2 (April - Juni)</option>
                                  <option value="3">Triwulan 3 (Juli - September)</option>
                                  <option value="4">Triwulan 4 (Oktober - Desember)</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-md-4">
                      
                      </div>
                      <div class="col-md-4">
                          <div class="btn btn-sm btn-danger has-icon" id="btn-cetak-pdf-triwulan"><i class="mdi mdi-file-pdf-box"></i>Cetak ke PDF</div>
                          <div class="btn btn-sm btn-success has-icon float-right" id="btn-cetak-excel-triwulan"><i class="mdi mdi-file-excel-box"></i>Cetak ke Excel</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection
