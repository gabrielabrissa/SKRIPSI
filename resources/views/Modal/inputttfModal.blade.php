    <!-- Modal HTML -->
    <div id="modal1" class="modal fade" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h5 class="modal-title">Pilih Cabang</h5>
                </div>
                <div class="modal-body">
                <div class="table-responsive p-0">
                <table class="table table-bordered -mb-1">
                  <thead>
                    <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">No</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Site Code</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Supplier Name</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Branch</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Count BPB</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="fw-semibold text-xs font-weight-bolder ">1</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="fw-semibold text-xs font-weight-bold">SA01</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">PT IMC IND</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">JAKARTA</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">10</span>
                      </td>
                      <td class="align-middle text-center">
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal2">Pilih</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
                </div>
                <div class="modal-footer ">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Modal.addttfModal') 