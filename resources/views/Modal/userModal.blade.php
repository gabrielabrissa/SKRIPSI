<div id="modal4" class="modal fade" tabindex="-1">
<div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title">Tambah Data</h5>
                </div>
                <div class="modal-body">
<!-- Modal Body -->
<div class="container-fluid py-4">
<div class="row">
  <div class="form-group">
    <div class="row mb-1">
        <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Username</label>
        <div class="col-sm-8"> 
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukan Username">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row mb-1">
        <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Password</label>
        <div class="col-sm-8"> 
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukan Password">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row mb-1">
        <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Konfirmasi Password</label>
        <div class="col-sm-8"> 
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukan Konfirmasi Password">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row mb-1">
        <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Email</label>
        <div class="col-sm-8"> 
            <input type="text" class="form-control form-control-sm" id="colFormLabelSm" placeholder="Masukan Email">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row mb-1">
        <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Role</label>
        <div class="col-sm-8">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Admin</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">User</label>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row mb-1">
        <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Active Flag</label>
        <div class="col-sm-8">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">
                <label class="form-check-label" for="inlineRadio3">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option2">
                <label class="form-check-label" for="inlineRadio4">Tidak</label>
            </div>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row mb-1">
        <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Reset Status Flag</label>
        <div class="col-sm-8">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">Ya</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Tidak</label>
            </div>
        </div>
    </div>
</div>
</div>
</div>
                            
<!-- Tabel TTF -->

            <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <button class="btn btn-primary btn-sm ms-3">Add Supplier</button>
                    </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No  </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Supplier</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Cabang</th>
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
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    </div>
            </div>
            </div>
            </div>
            </div>
               
<!-- End Modal Body -->
<div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary btn-sm">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('Modal.addfpModal') 