@extends('layout.mainadmin')

@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Data TTF Supplier</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Data Lampiran Faktur Pajak</h6>
@endsection

@section('body')
<!-- Button grup -->
<div class="row mt-3">
<div class="col-md-8 ">
    <div class="btn-group" role="group" aria-label="First group">
    <a class="btn btn-light " href="/datattf" role="button">
        <i class="ni ni-app"></i>
        <span class="ms-2">Data TTF</span>
    </a>
    <a class="btn btn-light" href="/datasup" role="button" >
        <i class="ni ni-app"></i>
        <span class="ms-2">Data Supplier</span>
    </a>
    <a class="btn btn-dark active" href="/datalampfp" role="button"aria-pressed="true">
        <i class="ni ni-app"></i>
        <span class="ms-2">Data Lampiran Faktur Pajak</span>
    </a>
    </div>
</div>
</div>
<!-- Filter Data -->
<div class="container-fluid py-1 px-0">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Branch</label>
                    <input class="form-control" type="text" >
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">TTF Number</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">FP Number </label>
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
<div class="container-fluid py-2 px-3">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TTF Number  </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ">FP Number  </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">FileName  </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action  </th>
                    
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="mb-0 text-sm"></span>
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