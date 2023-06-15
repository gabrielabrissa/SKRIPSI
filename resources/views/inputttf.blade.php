@extends('layout.main')

@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Create TTF</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Inquiry Tanda Tukar Faktur Pajak</h6>
@endsection

@section('body')

<!-- Tabel TTF -->
<div class="container-fluid py-4 px-0">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group" role="group" aria-label="First group">
              <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal1">Add
                TTF</button>
              <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#">Submit
                TTF</button>
              <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">Delete
                TTF</button>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group mb-2">
                    <input class="form-control" placeholder="Search" type="text">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-bordered -mb-1">
                  <thead>
                    <tr>
                      <th class="fw-semibold text-xs font-weight-bolder "></th>
                      <th class="fw-semibold text-xs font-weight-bolder ">No</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">No TTF</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Status</th>
                      <th class="fw-semibold text-xs font-weight-bolder ">Cabang</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Tanggal TTF</th>
                      <th class="fw-semibold text-xs font-weight-bolder ">Tanggal Validasi </th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Supplier</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Lampiran</th>
                      <th class="fw-semibold  text-xs font-weight-bolder ">Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="mb-0 text-sm"></span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">1</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">230022129138</span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">SUBMITTED</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">JAKARTA</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">28 September 2022</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">-</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">PT IMC IND</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="#" class="text-decoration-none text-xs font-weight-bold">Download</a>
                      </td>
                      <td class="align-middle text-center">
                        <a href="#" class="text-decoration-none text-xs font-weight-bold">Delete</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <nav aria-label="...">
                  <ul class="pagination pagination-sm">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
              @foreach($cbg as $c)
              <tbody>
                <tr>
                  <td class="align-middle text-center">
                    <span class="fw-semibold text-xs font-weight-bolder ">{{ $loop->iteration }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="fw-semibold text-xs font-weight-bold">{{ $c->SUPP_SITE_CODE }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $c->SUPP_SITE_ALT_NAME }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $c->BRANCH_CODE }}</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">{{ $c->jumlah }}</span>
                  </td>
                  <td class="align-middle text-center">

                    <a data-branch-code="{{ $c->BRANCH_CODE }}" data-toggle="modal" title="Add this item"
                      class="openModal btn btn-primary btn-sm" href="#modal2">Pilih</a>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

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
                  <td class="fw-semibold text-xs" id="x1">{{-- $c->SUPP_SITE_CODE --}}</td>
                </tr>
                <tr>
                  <th class="fw-semibold text-xs font-weight-bolder ">Nama Supplier</th>
                  <td class="fw-semibold text-xs" id="x2">{{-- $c->SUPP_SITE_ALT_NAME --}}</td>
                </tr>
                <tr>
                  <th class="fw-semibold text-xs font-weight-bolder ">Tipe Supplier</th>
                  <td class="fw-semibold text-xs" id="x3">{{-- $c->SUPP_TYPE --}}</td>
                </tr>
                <tr>
                  <th class="fw-semibold text-xs font-weight-bolder ">No NPWP</th>
                  <td class="fw-semibold text-xs" id="x4">{{-- $c->SUPP_PKP_NUM --}}</td>
                </tr>
                <tr>
                  <th class="fw-semibold text-xs font-weight-bolder ">Alamat</th>
                  <td class="fw-semibold text-xs" id="x5">{{-- $c->SUPP_ADDR_LINE1 }}{{ $c->SUPP_ADDR_LINE2--}}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card mb-0">
                <div class="card-header pb-0">
                  <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal3">Add
                    FP</button>
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">Delete
                    FP</button>
                </div>
                <div class="card-body px-0 pt-0 pb-0">
                  <div class="table-responsive p-0">
                    <table class="table table-bordered -mb-1">
                      <thead>
                        <tr>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor BPB
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">BPB BKL
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No. Ref
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">BPB Date
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP BPB
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN BPB</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">TGL GO </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG GO
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG SJ
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG PPN
                          </th>
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
                            <option value="2">Tanpa Faktur Pajak</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <h6 class="font-weight-bolder mb-2">Faktur Pajak</h6>
                        <div class="row mb-0">
                          <label class="col-sm-3 col-form-label col-form-label-sm text-primary">No
                            FP</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" placeholder="Pilih No Faktur">
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-secondary mb-3 btn-sm">Pilih No FP</button>
                          </div>
                        </div>
                        <div class="row mb-0">
                          <label class="col-sm-3 col-form-label col-form-label-sm text-primary">File FP</label>
                          <div class="col-sm-5">
                            <input type="file" class="form-control-file form-control-sm" id="exampleFormControlFile1">
                          </div>
                          <div class="col-auto">
                            <button type="submit" class="btn btn-secondary mb-3 btn-sm">Cek</button>
                          </div>
                        </div>
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label col-form-label-sm text-primary">Tanggal FP</label>
                          <div class="col-sm-5">
                            <input type="date" class="form-control form-control-sm" placeholder="date">
                          </div>
                        </div>

                        <!--  Summary -->

                        <div class="form-group">
                          <h6 class="font-weight-bolder mb-2 mt-3">Summary</h6>
                          <div class="row ">
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">DPP FP</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="form-control form-control-sm">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Total DPP BPB</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="form-control form-control-sm">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Selisih DPP</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="form-control form-control-sm">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">PPN FP</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="form-control form-control-sm">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Total PPN BPB</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="form-control form-control-sm">
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Selisih PPN</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="form-control form-control-sm">
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
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal4">Add
                        BPB</button>
                      <button class="btn btn-danger btn-sm ms-1">Remove</button>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor BPB
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">BPB Date
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP BPB
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN BPB
                            </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action
                            </th>
                          </tr>
                        </thead>
                        <tbody id="selectedBPB">
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
  </div>

  <div id="modal4" class="modal fade" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ">
        <div class="modal-header bg-light">
          <h5 class="modal-title">Pilih BPB</h5>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              <div class="card mb-0">
                <div class="card-body px-0 pt-0 pb-0">
                  <div class="table-responsive p-0">
                    <table class="table table-bordered -mb-1">
                      <thead>
                        <tr>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor BPB
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Due Date BPB
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG PPN
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP BPB
                          </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN BPB</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
                        </tr>
                      </thead>
                      <tbody id="body-modal4">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer ">
            <button type="button" class="btn btn-primary btn-sm" id="addBPB">Tambah BPB</button>
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    var appUrl = "{{env('APP_URL')}}";
    var selectedBranchCode = null;

    var optionsBPB = []; // array of BPB from api
    var selectedBPB = []; // array of selected BPB

    $('#modal2').on('shown.bs.modal', function (e) {
      const branchCode = $(e.relatedTarget).data('branch-code');
      selectedBranchCode = branchCode;
    //   alert(`modal 2 opened with id ${id}`)
      fetch(`${appUrl}/get-sys-supp-site?` + new URLSearchParams({
        supp_branch_code: branchCode
        })
      )
        .then(response => response.json())
        .then(data => {
          $('#x1').text(data.SUPP_SITE_CODE)
          $('#x2').text(data.SUPP_SITE_ALT_NAME)
          $('#x3').text(data.SUPP_TYPE)
          $('#x4').text(data.SUPP_PKP_NUM)
          $('#x5').text(`${data.SUPP_ADDR_LINE1 ?? ''} ${data.SUPP_ADDR_LINE2 ?? ''}`)
        }).
        catch(error => alert(error))
    })

    $('#modal2').on('hidden.bs.modal', function (e) {
        $('#x1').text('')
        $('#x2').text('')
        $('#x3').text('')
        $('#x4').text('')
        $('#x5').text('')
    })

    $('#modal4').on('shown.bs.modal', function (e) {
        const branchCode = selectedBranchCode;

        fetch(`${appUrl}/get-ttf-data-bpb?` + new URLSearchParams({
            supp_branch_code: branchCode
        }))
        .then(response => response.json())
        .then(data => {
          data.forEach((el,index) => {
            let number = index + 1;
            let row =`
            <tr>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${number}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.BPB_NUMBER}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.BPB_DATE}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.FLAG_PPN}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.BPB_DPP}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${el.BPB_TAX}</span>
              </td>
              <td class="align-middle text-center">
                <div class="form-check">
                  <input class="form-check-input checklist-bpb" type="checkbox" id="${el.BPB_NUMBER}">
                  </label>
                </div>
              </td>
            </tr>
            `;

            $('#body-modal4').append(row);
          })

          optionsBPB = data;
        }).
        catch(error => alert(error))
    })



    $(document).on('change', '.checklist-bpb', function(e) {
        const isChecked = $(this).is(':checked');
        const bpbNumber = $(this).attr('id');

        if (isChecked) {
            const selected = optionsBPB.find(el => el.BPB_NUMBER === bpbNumber);
            // check if selectedBPB already has the selected BPB
            const isExist = selectedBPB.find(el => el.BPB_NUMBER === bpbNumber);
            if (!isExist) {
                selectedBPB.push(selected);
            }
        } else {
            const index = selectedBPB.findIndex(el => el.BPB_NUMBER === bpbNumber);
            selectedBPB.splice(index, 1);
        }

        console.log('selectedBPB', selectedBPB)
    })

    $('#modal4').on('hidden.bs.modal', function (e) {
        $('#body-modal4').empty();
        $('#selectedBPB').empty();

        selectedBPB.forEach(el => {
            let row = `
              <tr>
                <td class="align-middle text-center">
                  ${el.BPB_NUMBER}
                </td>
                <td class="align-middle text-center">
                  ${el.BPB_DATE}
                </td>
                <td class="align-middle text-center">
                  ${el.BPB_DPP}
                </td>
                <td class="align-middle text-center">
                  ${el.BPB_TAX}
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold"></span>
                </td>
              </tr>
              `
            $('#selectedBPB').append(row);
        })
    })
  </script>
  @endsection
