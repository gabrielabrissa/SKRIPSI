<div id="modal2" class="modal fade" data-backdrop="static" tabindex="-1">
  <div class="modal-dialog modal-lg">
              <div class="modal-content ">
                  <div class="modal-header bg-light">
                      <h5 class="modal-title">Tambah TTF</h5>
                  </div>
                  <div class="modal-body">
                  <div class="table-responsive p-0">
                  <table class="table table-bordered -mb-1">
                    <tbody>
                      <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">Kode Supplier</th>
                      {{-- <td class="fw-semibold text-xs">{{ $cabang->SUPP_SITE_ID}}</label></td> --}}
                      </tr>
                      <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">Nama Supplier</th>
                      <td class="fw-semibold text-xs ">{{ $c->SUPP_SITE_ALT_NAME }}</td>
                      </tr>
                      <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">Tipe Supplier</th>
                      <td class="fw-semibold text-xs ">{{ $c->SUPP_TYPE }}</td>
                      </tr>
                      <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">No NPWP</th>
                      <td class="fw-semibold text-xs">{{ $c->SUPP_PKP_NUM }}</td>
                      </tr>
                      <tr>
                      <th class="fw-semibold text-xs font-weight-bolder ">Alamat</th>
                      <td class="fw-semibold text-xs ">{{ $c->SUPP_ADDR_LINE1 }}{{ $c->SUPP_ADDR_LINE2}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card mb-0">
                      <div class="card-header pb-0" >
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal3{{ $c->ID2 }}">Add FP</button>
                      <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">Delete FP</button>
                        </div>
                        <div class="card-body px-0 pt-0 pb-0">
                          <div class="table-responsive p-0">
                            <table class="table table-bordered -mb-1">
                              <thead>
                                <tr>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor BPB  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">BPB BKL </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No. Ref </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">BPB Date </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP BPB  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN BPB</th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">TGL GO  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG GO </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG SJ  </th>
                                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG PPN</th>
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
                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-primary btn-sm">Save</button>
                  </div>
              </div>
          </div>
      </div>
  @include('Modal.tambahTandaTerimaFakturModal') 