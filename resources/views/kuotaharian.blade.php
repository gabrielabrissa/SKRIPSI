@extends('layout.mainadmin')

@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Kuota Harian Supplier</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Kuota Harian Supplier</h6>
@endsection

@section('body')
<!-- Filter Data -->
<div class="container-fluid py-4 px-0">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Branch Code</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Supplier Code</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Tanggal Kembali</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Total TTF Per Tanggal</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-12 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">Search</button>
                </div>
            </div>
          </div>
</div>
</div>
<!-- Tabel TTF -->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cabang </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Supp. Code</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Supplier </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Counter TTF </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tgl Kembali Fisik </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Detail </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"></span>
                      </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
@endsection