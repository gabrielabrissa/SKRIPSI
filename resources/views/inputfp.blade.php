@extends('layout.main')
@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Input TTF</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Tambah Tanda Terima Faktur</h6>
@endsection

@section('body')
<!-- Filter Data -->
<div class="container-fluid py-1 px-0">
<div class="row">
        <div class="col-md-6 mt-4">
          <div class="card">
            <div class="card-body">
            <div class="row">
                  <div class="form-group">
                  <h6 class="font-weight-bolder mb-2">Tipe Faktur Pajak</h6>
                    <div class="col-sm-10">
                    <select class="form-select" aria-label="Pilih Tipe FP">
                    <option selected>Pilih Tipe FP</option>
                    <option value="1">Standart</option>
                    <option value="2"></option>
                  </select>
                    </div>
                  </div>      
                  <div class="form-group">
                  <h6 class="font-weight-bolder mb-2">Faktur Pajak</h6>
                    <div class="row mb-0">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">No FP</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Pilih No Faktur">
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3 btn-sm">Pilih No FP</button>
                  </div>
                  </div>
                  <div class="row mb-0">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">File FP</label>
                    <div class="col-sm-5">
                    <input type="file" class="form-control-file form-control-sm" id="exampleFormControlFile1" >
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3 btn-sm">Cek</button>
                  </div>
                  </div>
                  <div class="row mb-2">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Tanggal FP</label>
                    <div class="col-sm-5">
                      <input type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="date">
                    </div>
                  </div>
                  <!-- Summary -->
                  <h6 class="font-weight-bolder mb-2 mt-3">Summary</h6>
                  <div class="row mb-1">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">DPP FP</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Total DPP BPB</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Selisih DPP</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">PPN FP</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Total PPN BPB</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                  </div>
                  <div class="row mb-1">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Selisih PPN</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                  </div>
                </div>                    
            </div>
          </div>
</div>
</div>
<!-- Tabel BPB -->
      <div class="col-md-6 mt-4">
         <div class="card">
          <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <button class="btn btn-primary btn-sm ms-3">Add BPB</button>
                <button class="btn btn-danger btn-sm ms-3">Remove</button>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor BPB  </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">BPB Date </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP BPB  </th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN BPB</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
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
@endsection