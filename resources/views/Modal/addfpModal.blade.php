<div id="modal3" class="modal fade" data-backdrop="static" tabindex="-1">
<div class="modal-dialog modal-lg ">
            <div class="modal-content ">
                <div class="modal-header bg-light">
                    <h5 class="modal-title">Tambah Tanda Terima Faktur</h5>
                </div>
                <div class="modal-body">
                <div class="container-fluid py-1">
        <div class="row">
        <div class="col-md-12 mt-0">
          <div class="card">
            <div class="card-body">
            <div class="row">
                  <div class="form-group">
                  <h6 class="font-weight-bolder mb-2">Tipe Faktur Pajak</h6>
                    <div class="col-sm-5">
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
                    <div class="col-sm-5">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Pilih No Faktur">
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-secondary mb-3 btn-sm">Pilih No FP</button>
                  </div>
                  </div>
                  <div class="row mb-0">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">File FP</label>
                    <div class="col-sm-5">
                    <input type="file" class="form-control-file form-control-sm" id="exampleFormControlFile1" >
                    </div>
                    <div class="col-auto">
                    <button type="submit" class="btn btn-secondary mb-3 btn-sm">Cek</button>
                  </div>
                  </div>
                  <div class="row mb-2">
                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Tanggal FP</label>
                    <div class="col-sm-5">
                      <input type="date" class="form-control form-control-sm" id="colFormLabelSm" placeholder="date">
                    </div>
                  </div>
                 
    <!--  Summary -->

    <div class="form-group">
                  <h6 class="font-weight-bolder mb-2 mt-3">Summary</h6>
                  <div class="row ">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-primary">DPP FP</label>
                    <div class="col-sm-3 mb-1">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-primary">Total DPP BPB</label>
                    <div class="col-sm-3 mb-1">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-primary">Selisih DPP</label>
                    <div class="col-sm-3 mb-1">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-primary">PPN FP</label>
                    <div class="col-sm-3 mb-1">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-primary">Total PPN BPB</label>
                    <div class="col-sm-3 mb-1">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-primary">Selisih PPN</label>
                    <div class="col-sm-3 mb-1">
                      <input type="text" class="form-control form-control-sm" id="colFormLabelSm" >
                    </div>
                  </div>
                </div>
             
<!--  End Summary -->
              </div>                    
          </div>
      </div>
</div>
</div>

<!-- Tabel BPB -->
<div class="col-md-12 mt-2">
         <div class="card">
          <div class="card-header">
              <div class="d-flex align-items-center">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal4">Add BPB</button>
                <button class="btn btn-danger btn-sm ms-1">Remove</button>
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
    </div>
    <!--  End Tabel BPB -->
      <div class="modal-footer ">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-sm">Save</button>
      </div>
    </div>
  </div>
</div>
</div>

@include('Modal.bpbModal') 