@extends('layout.mainadmin')

@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Laporan TTF</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Laporan TTF</h6>
@endsection


@section('body')
<div class="container-fluid py-4 px-0">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group mb-2">
                    <h6 class="font-weight-bolder mb-0">Laporan Data TTF Supplier</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-bordered -mb-1">
                  <thead>
                    <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">No</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">No TTF</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Status</th>
                      <th class="fw-semibold text-xs font-weight-bolder ">Cabang</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Tanggal TTF</th>
                      <th class="fw-semibold text-xs font-weight-bolder ">Tanggal Validasi </th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Supplier</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Username</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Lampiran</th>
                    </tr>
                  </thead>
                  <tbody id="savettf">
                    @foreach($ttf as $t)
                    <tr>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $loop->iteration }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $t->TTF_NUM }}</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        @if($t->TTF_STATUS == "DRAFT")
                        <span class="badge badge-sm bg-gradient-secondary">DRAFT</span>
                        @else
                        <span class="badge badge-sm bg-gradient-success">SUBMITTED</span>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $t->SUPP_ADDR_PROVINCE }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ date('d F Y', strtotime($t->TTF_DATE)) }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ date('d F Y', strtotime($t->TTF_RETURN_DATE)) }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $t->SUPP_SITE_ALT_NAME }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $t->USERNAME }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="/inputttf/cetakttf/{{ $t->TTF_ID }}" class="text-decoration-none text-xs font-weight-bold">Download</a>
                      </td>
                      
                    </tr>     
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection