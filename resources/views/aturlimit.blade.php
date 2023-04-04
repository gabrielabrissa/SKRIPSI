@extends('layout.mainadmin')

@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Atur Limit TTF</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Atur Limit TTF</h6>
@endsection


@section('body')
<!-- Filter Data -->
<div class="container-fluid py-4 px-0">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
          <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Setting Limit</p>
              </div>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Limit TTF Harian</label>
                    <input class="form-control" type="text" value="3000">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Limit TTF per Supplier per Hari</label>
                    <input class="form-control" type="text" value="0">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Max Selisih DPP</label>
                    <input class="form-control" type="text" value="5000">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Max Selisih TAX</label>
                    <input class="form-control" type="text" value="500">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Limit Cetak TTFS</label>
                    <input class="form-control" type="text" value="3">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Limit Cetak TTF</label>
                    <input class="form-control" type="text" value="0">
                  </div>
                </div>
                <div class="col-12 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">Save</button>
                </div>
            </div>
          </div>
</div>
</div>

@endsection