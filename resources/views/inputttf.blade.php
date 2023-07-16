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
            
              {{-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">Delete
                TTF</button> --}}
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
                        <a href="/inputttf/cetakttf/{{ $t->TTF_ID }}" class="text-decoration-none text-xs font-weight-bold">Download</a>
                      </td>
                      <td class="align-middle text-center">
                        @if($t->TTF_STATUS == "DRAFT")
                        <a href="/inputttf/submitttf/{{ $t->TTF_ID }}" class="btn btn-secondary btn-xs" onclick="return confirm('Submit Data TTF?')">Submit</a>
                        <a href="/inputttf/deletettf/{{ $t->TTF_ID }}" class="btn btn-danger btn-xs" onclick="return confirm('Hapus Data TTF?')">Delete</a>
                        @else
                        <a href="#" class="btn btn-danger btn-xs disabled">Delete</a>
                        @endif
                        
                      </td>
                    </tr>     
                    @endforeach
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
                      class="openModal btn btn-primary btn-xs" href="#modal2">Pilih</a>
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
                  {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal3">Add
                    FP</button> --}}
                  <a data-branch-code="{{ $c->BRANCH_CODE }}" data-toggle="modal" title="Add this item"
                  class="openModal btn btn-primary btn-sm" href="#modal3">Add FP</a>
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#">Delete
                    FP</button>
                </div>
                <div class="card-body px-0 pt-0 pb-0">
                  <div class="table-responsive p-0">
                    <table class="table table-bordered -mb-1">
                      <thead>
                        <tr>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Type Faktur
                            Pajak </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor Faktur
                            Pajak </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tanggal Faktur Pajak</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP Faktur Pajak </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN FakturPajak </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Total BundelBPB </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Selisih DPP</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Selisih PPN</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG PPN BPB</th>
                        </tr>
                      </thead>
                      <tbody id="body-modal2">
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
          <button class="btn btn-success btn-sm" id="save-ttf">Save</button>
        </div>
      </div>
    </div>
  </div>

  <div id="modal3" class="modal fade" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content ">
        <div class="modal-header bg-light">
          <h5 class="modal-title">Tambah Faktur Pajak dan BPB</h5>
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
                          <select id="selection" onchange="disableFP(this)" class="form-select" required>
                            <option value="1" selected>Standart</option>
                            <option value="2">Tanpa Faktur Pajak</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" id="faktur_pj">
                        <h6 class="font-weight-bolder mb-2">Faktur Pajak</h6>
                        <div class="row mb-0">
                          <label class="col-sm-3 col-form-label col-form-label-sm text-primary">No FP</label>
                          <div class="col-sm-5">
                            <input type="text" class="form-control form-control-sm" id="nofaktur" name="FP[]"
                              placeholder="Pilih No Faktur">
                            <input type="hidden" id="nofaktur_file">
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" id="pilihnofp"
                              data-target="#modal5">Pilih No FP
                          </div>
                        </div>
  
                        {{-- <form action="" method="" enctype="multipart/form-data"> --}}
                          <div class="row mb-0">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-primary">File FP</label>
                            <div class="col-sm-5">
                              <input type="file" id="filefaktur" name="filefaktur"
                                class="form-control-file form-control-sm">
                            </div>
                            <div class="col-auto">
                              <button class="btnFP btn btn-secondary mb-3 btn-sm" id="check-nofaktur">Cek</button>
                            </div>
                          </div>
                          {{--
                        </form> --}}
  
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label col-form-label-sm text-primary">Tanggal FP</label>
                          <div class="col-sm-5">
                            <input type="date" class="form-control form-control-sm" name="FP[]" id="tanggalfaktur">
                          </div>
                        </div>
  
                        <!--  Summary -->
  
                        <div class="form-group">
                          <h6 class="font-weight-bolder mb-2 mt-3">Summary</h6>
                          <div class="row ">
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">DPP FP</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF form-control form-control-sm" id="DPP_FP" name="FP[]"
                                readonly>
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">PPN FP</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF form-control form-control-sm" id="PPN_FP" name="FP[]"
                                readonly>
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Total DPP BPB</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF_BPB form-control form-control-sm" id="Total_DPP_BPB"
                                name="FP[]" readonly>
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Total PPN BPB</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF_BPB form-control form-control-sm" id="Total_PPN_BPB"
                                name="FP[]" readonly>
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary ">Selisih DPP</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF form-control form-control-sm" id="Selisih_DPP" name="FP[]"
                                readonly>
                            </div>
                            <label class="col-sm-2 col-form-label col-form-label-sm text-primary">Selisih PPN</label>
                            <div class="col-sm-3 mb-1">
                              <input type="text" class="sum_TTF form-control form-control-sm" id="Selisih_PPN" name="FP[]"
                                readonly>
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
                      <button type="button" class="btn btn-primary btn-sm" id="btnmodal4" data-toggle="modal"
                        data-target="#modal4">Add
                        BPB</button>
                    </div>
                  </div>
                  <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor BPB</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">BPB Date</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP BPB</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN BPB</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
                          </tr>
                        </thead>
                        <tbody id="pilihBPB">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <!--  End Tabel BPB -->
            <div class="modal-footer ">
              <button type="button" class="btn btn-secondary btn-sm" id="close-fp" data-dismiss="modal">Close</button>
              <button type="button" name="button" class="btn btn-primary btn-sm" id="save-fp">Save</button>
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
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor BPB</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Due Date BPB</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG PPN</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP BPB</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN BPB</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Add BPB</th>
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
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <div id="modal5" class="modal fade" data-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content ">
        <div class="modal-header bg-light">
          <h5 class="modal-title">Pilih No Faktur Pajak</h5>
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
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor Faktur Pajak</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nama Penjual</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Jumlah DPP</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Jumlah PPN</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
                        </tr>
                      </thead>
                      <tbody id="body-modal5">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    var appUrl = "{{env('http://ttf.test')}}";
    var selectedBranchCode = null;
    var optionsBPB = [];
    var optionsNoFP = [];
    var selectedFP = [];
    var selectedBPB = [];
    var sumBPB_DPP = 0;
    var sumBPB_PPN = 0;
    var jumFP_DPP = 0;
    var jumFP_PPN = 0;
    var selisihDPP = 0;
    var selisihPPN = 0;
    var ttf_sumBPB_DPP = 0;
    var ttf_sumBPB_PPN = 0;
    var ttf_jumFP_DPP = 0;
    var ttf_jumFP_PPN = 0;
    var ttf_selisihDPP = 0;
    var ttf_selisihPPN = 0;
    var selectedSupp = [];

    // --------
    var listOfFakturPajak = [];
    var tmpListOfBPB =[];
    var tmpListOfFakturPajak = [];



  const formFileInput = document.getElementById('filefaktur');
  const checkNoFaktur = document.getElementById('check-nofaktur');

  checkNoFaktur.addEventListener ('click', (e) => {
    let selectedFile = formFileInput.files[0];
    if (selectedFile) {
        sendFile(selectedFile);
    } else {
      alert('Pilih file terlebih dahulu');
    }
  })

  function sendFile(file) {
    const formData = new FormData();
    formData.append('file', file);

    fetch(`${appUrl}/read_qr`, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: formData
    })
    .then(response => {
      if (response.ok) {
        return response.json();
      } else {
        console.error('File upload failed');
      }
    })
    .then(data => {
      let noFakturHiddenInput = document.getElementById("nofaktur_file");
      noFakturHiddenInput.value = data.no_faktur;

      let noFaktur = document.getElementById("nofaktur").value;
      let noFakturHidden = document.getElementById("nofaktur_file").value;
      let btn = document.getElementById("btnmodal4");

      if (noFaktur == noFakturHidden) {
        btn.disabled = false;
        alert(`nomor faktur sama!`)
      } else {
        btn.disabled = true;
        alert(`nomor faktur berbeda!`)
      }
    })

    .catch(error => {
      console.error('Error:', error);
    });
  }
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

          let namaSup = data.SUPP_SITE_ALT_NAME;
          let cabangSup = data.SUPP_ADDR_PROVINCE;
          let supsitecode = data.SUPP_SITE_CODE;
          let supplierdata = {
            namaSup : namaSup,
            cabangSup : cabangSup,
            supsitecode : supsitecode,

          }
          selectedSupp.push(supplierdata)
        }).
        catch(error => alert(error))
    })

  $('#modal3').on('shown.bs.modal', function (e) {
    $('#body-modal2').empty();
    document.getElementById("btnmodal4").disabled = true;
    const branchCode = $(e.relatedTarget).data('branch-code');
    fetch(`${appUrl}/get-sys-supp-site?` + new URLSearchParams({
      supp_branch_code: selectedBranchCode
      })
    )
      .then(response => response.json()).
      catch(error => alert(error))
  })

  $('#modal3').on('hidden.bs.modal', function (e) {
    document.getElementById("selection").value = '1';
    document.getElementById("nofaktur").value = '';
    document.getElementById("nofaktur_file").value = '';
    document.getElementById("tanggalfaktur").value = '';
    document.getElementById("DPP_FP").value = '';
    document.getElementById("PPN_FP").value = '';
    document.getElementById("Total_DPP_BPB").value = '';
    document.getElementById("Total_PPN_BPB").value = '';
    document.getElementById("Selisih_DPP").value = '';
    document.getElementById("Selisih_PPN").value = '';
    $('#pilihBPB').empty();

    tmpListOfFakturPajak.forEach(el => {
      let row = `
      <tr>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold "> ${el.typefp}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.noFaktur}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.tglFaktur}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.DPP_Faktur}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.PPN_Faktur}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.buddleBPB}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.Selisih_DPP}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.Selisih_PPN}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.listOfBPB[0].FLAG_PPN}</span>
        </td>
      </tr>
        `
      $('#body-modal2').append(row);
    })
  })

  $('#save-fp').on('click', function (e) {
    let type = document.getElementById("selection");
    let typeselect = type.options[type.selectedIndex];
    let typefp = typeselect.textContent;
    let noFaktur = document.getElementById("nofaktur").value;
    let noFakturHidden = document.getElementById("nofaktur_file").value;
    let tglFaktur = document.getElementById("tanggalfaktur").value;

    let DPP_Faktur = document.getElementById("DPP_FP").value;
    let PPN_Faktur = document.getElementById("PPN_FP").value;
    let Total_DPP_BPB = document.getElementById("Total_DPP_BPB").value;
    let Total_PPN_BPB = document.getElementById("Total_PPN_BPB").value;
    let Selisih_DPP = document.getElementById("Selisih_DPP").value;
    let Selisih_PPN = document.getElementById("Selisih_PPN").value;
    let buddleBPB = selectedBPB.length;
    let obj = {
        typefp:typefp,
        noFaktur: noFaktur,
        tglFaktur: tglFaktur,
        DPP_Faktur: DPP_Faktur,
        PPN_Faktur: PPN_Faktur,
        Total_DPP_BPB: Total_DPP_BPB,
        Total_PPN_BPB: Total_PPN_BPB,
        Selisih_DPP: Selisih_DPP,
        Selisih_PPN: Selisih_PPN,
        buddleBPB : buddleBPB,
        listOfBPB: selectedBPB
    }
    
    tmpListOfBPB.push(selectedBPB);
    tmpListOfFakturPajak.push(obj);
    console.log('tmpListOfFakturPajak', tmpListOfFakturPajak);
    obj = null;
    selectedBPB = [];
    ttf_sumBPB_DPP= ttf_sumBPB_DPP + sumBPB_DPP;
    ttf_sumBPB_PPN = ttf_sumBPB_PPN + sumBPB_PPN;
    ttf_jumFP_DPP = ttf_jumFP_DPP + jumFP_DPP;
    ttf_jumFP_PPN = ttf_jumFP_PPN + jumFP_PPN;
    ttf_selisihDPP = ttf_jumFP_DPP-ttf_sumBPB_DPP;
    ttf_selisihPPN = ttf_jumFP_PPN-ttf_sumBPB_PPN;
    sumBPB_DPP = 0;
    sumBPB_PPN = 0;
    jumFP_DPP = 0;
    jumFP_PPN = 0;
    selisihDPP = 0;
    selisihPPN = 0;
    console.log('ttf_sumBPB_DPP', ttf_sumBPB_DPP);
    console.log('ttf_sumBPB_PPN', ttf_sumBPB_PPN);
    console.log('ttf_jumFP_DPP', ttf_jumFP_DPP);
    console.log('ttf_jumFP_PPN', ttf_jumFP_PPN);
    console.log('ttf_selisihDPP', ttf_selisihDPP);
    console.log('ttf_selisihPPN', ttf_selisihPPN);
    $('#modal3').modal('hide');
  })

  document.getElementById("save-ttf").addEventListener("click", function(){
    let cabang_ttf = selectedSupp[0].cabangSup;
    let supsitecode = selectedSupp[0].supsitecode;
    let typefp_ttf = tmpListOfFakturPajak[0].typefp;
    let tanggalttf = new Date();
    let tanggal_ttf = tanggalttf.toLocaleDateString("en-US")
    let tanggal_validasi = "-";
    let nama_supplier = selectedSupp[0].namaSup;
    let jml_fp = tmpListOfBPB.length;

    let ttf = {
        cabang_ttf: cabang_ttf,
        supsitecode : supsitecode,
        tanggal_ttf: tanggal_ttf,
        tanggal_validasi: tanggal_validasi,
        typefp_ttf : typefp_ttf,
        nama_supplier: nama_supplier,
        listFP: tmpListOfFakturPajak,
        branchcode : selectedBranchCode,
        jml_fp : jml_fp,
        ttfsumBPB_DPP : ttf_sumBPB_DPP,
        ttfsumBPB_PPN : ttf_sumBPB_PPN,
        ttfjumFP_DPP : ttf_jumFP_DPP,
        ttfjumFP_PPN : ttf_jumFP_PPN,
        ttfselisihDPP : ttf_selisihDPP,
        ttfselisihPPN : ttf_selisihPPN,
        
    }
    listOfFakturPajak.push(ttf);
    fetch('/create-ttf', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      body: JSON.stringify(listOfFakturPajak)
    })
    .then(res => res.json())
    .then(res => {
      console.log(res)
    })
    .catch(error => {
      console.log(error)
    })
    $("#modal2").modal('hide');
    $("#modal1").modal('hide');
  })

  $('#modal2').on('hidden.bs.modal', function (e) {
    $('#body-modal2').empty();
    listOfFakturPajak.forEach((el,index) => {
      let number = index + 1;
      let row = `
      <tr>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${number}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.no_ttf}</span>
        </td>
        <td class="align-middle text-center text-sm">
          <span class="badge badge-sm bg-gradient-success">${el.status_ttf}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.cabang_ttf}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.tanggal_ttf}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.tanggal_validasi}</span>
        </td>
        <td class="align-middle text-center">
          <span class="text-secondary text-xs font-weight-bold">${el.nama_supplier}</span>
        </td>
        <td class="align-middle text-center">
          <a href="#" class="text-decoration-none text-xs font-weight-bold">Download</a>
        </td>
        <td class="align-middle text-center">
          <a href="#" class="text-decoration-none text-xs font-weight-bold">Delete</a>
        </td>
      </tr>     
        `
      $('#savettf').append(row);
    })
  })

  $('#modal5').on('shown.bs.modal', function (e) {
    fetch(`${appUrl}/get-ttf-data-nofp?` + new URLSearchParams({
      supp_branch_code: selectedBranchCode
      })
    )
      .then(response => response.json())
      .then(data => {
        console.log('data', data);
        data.forEach((el,index) => {
          let number = index + 1;
          let row;
          row =`
          <tr>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">${number}</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">${el.NOMOR_FAKTUR}</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">${el.NAMA_PENJUAL}</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">${el.JUMLAH_DPP}</span>
            </td>
            <td class="align-middle text-center">
              <span class="text-secondary text-xs font-weight-bold">${el.JUMLAH_PPN}</span>
            </td>
            <td class="align-middle text-center">
                <button class="nofpPilih btn btn-primary btn-sm" id ="${el.NOMOR_FAKTUR}">Pilih</button>
                </div>
            </td>
          </tr>
          `;
          $('#body-modal5').append(row);

        })
        optionsNoFP = data;
      }).
      catch(error => alert(error))
  })

  $(document).on('click', '.nofpPilih', function(e){
    $("#modal5").modal('hide');
    $('#body-modal5').empty();
    const id_nofp = $(this).attr('id');
    const selected = optionsNoFP.find(el => el.NOMOR_FAKTUR === id_nofp);
    const isExist = selectedFP.find(el => el.NOMOR_FAKTUR === id_nofp);
    if (!isExist) {
      selectedFP.splice(0);
      selectedFP.push(selected);
      jumFP_DPP = selectedFP.map((el) => el.JUMLAH_DPP).reduce((sum, current)=> sum + current,0);
      jumFP_PPN = selectedFP.map((el) => el.JUMLAH_PPN).reduce((sum, current)=> sum + current,0);
    }

    console.log('selectedFP', selectedFP)
    console.log('jumFP_DPP', jumFP_DPP)
    console.log('jumFP_PPN', jumFP_PPN)
    document.getElementById("DPP_FP").value = jumFP_DPP;
    document.getElementById("PPN_FP").value = jumFP_PPN;
    document.getElementById("nofaktur").value = selectedFP.map((el) => el.NOMOR_FAKTUR);
    document.getElementById("tanggalfaktur").value = selectedFP.map((el) => el.TANGGAL_FAKTUR);
  })

  $('#modal4').on('shown.bs.modal', function (e) {
    const branchCode = selectedBranchCode;
      fetch(`${appUrl}/get-ttf-data-bpb?` + new URLSearchParams({
          supp_branch_code: branchCode
      }))
      .then(response => response.json())
      .then(data => {
        data.forEach((el,index) => {
          indexBPB = selectedBPB.find(ele => ele.BPB_NUMBER === el.BPB_NUMBER);
          let number = index + 1;
          let row, cb;
          row =`
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

          `;
          if(indexBPB) {
            cb =  `<td class="align-middle text-center">
              <div class="form-check" id="input_cb">
                <input class='form-check-input checklist-bpb' type='checkbox' id='${el.BPB_NUMBER}' checked>
              </div>
            </td>
          </tr> `;
          }else{
            cb =  `<td class="align-middle text-center">
              <div class="form-check" id="input_cb">
                <input class='form-check-input checklist-bpb' type='checkbox' id='${el.BPB_NUMBER}'>
              </div>
            </td>
          </tr> `;
          }
          row +=cb;
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
              sumBPB_DPP = selectedBPB.map((el) => el.BPB_DPP).reduce((sum, current)=> sum + current,0);
              sumBPB_PPN = selectedBPB.map((el) => el.BPB_TAX).reduce((sum, current)=> sum + current,0);
              }

      } else {
          const index = selectedBPB.findIndex(el => el.BPB_NUMBER === bpbNumber);
          selectedBPB.splice(index, 1);
          sumBPB_DPP = selectedBPB.map((el) => el.BPB_DPP).reduce((sum, current)=> current - sum,0);
          sumBPB_PPN = selectedBPB.map((el) => el.BPB_TAX).reduce((sum, current)=> current - sum,0);
      }
      if(jumFP_DPP==0){
            selisihDPP = sumBPB_DPP;
            selisihPPN = sumBPB_PPN;
          } else{
            selisihDPP = jumFP_DPP - sumBPB_DPP;
            selisihPPN = jumFP_PPN - sumBPB_PPN;
          }

      console.log('selectedBPB', selectedBPB)
      console.log('sumBPB_DPP', sumBPB_DPP)
      console.log('sumBPB_PPN', sumBPB_PPN)
      document.getElementById("Total_DPP_BPB").value = sumBPB_DPP;
      document.getElementById("Total_PPN_BPB").value = sumBPB_PPN;
      document.getElementById("Selisih_DPP").value = selisihDPP;
      document.getElementById("Selisih_PPN").value = selisihPPN;

  })

  $("#pilihBPB").on('click', '.bpbDelete', function(){
    $(this).closest('tr').remove();
    const bpbNumber = $(this).attr('id');
    const index = selectedBPB.findIndex(el => el.BPB_NUMBER === bpbNumber);
    selectedBPB.splice(index, 1);
    sumBPB_DPP = selectedBPB.map((el) => el.BPB_DPP).reduce((sum, current)=> sum + current,0);
    sumBPB_PPN = selectedBPB.map((el) => el.BPB_TAX).reduce((sum, current)=> sum + current,0);
    if(jumFP_DPP==0){
            selisihDPP = sumBPB_DPP;
            selisihPPN = sumBPB_PPN;
          } else{
            selisihDPP = jumFP_DPP - sumBPB_DPP;
            selisihPPN = jumFP_PPN - sumBPB_PPN;
          }

    console.log('selectedBPB', selectedBPB)
    console.log('sumBPB_DPP', sumBPB_DPP)
    console.log('sumBPB_PPN', sumBPB_PPN)
    document.getElementById("Total_DPP_BPB").value = sumBPB_DPP;
    document.getElementById("Total_PPN_BPB").value = sumBPB_PPN;
    document.getElementById("Selisih_DPP").value = selisihDPP;
    document.getElementById("Selisih_PPN").value = selisihPPN;
  })

  $('#modal4').on('hidden.bs.modal', function (e) {
    $('#body-modal4').empty();
    selectedBPB.forEach(el => {
      let row = `
        <tr id="row">
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">${el.BPB_NUMBER}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">${el.BPB_DATE}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">${el.BPB_DPP}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">${el.BPB_TAX}</span>
          </td>
          <td class="align-middle text-center">
            <button class="bpbDelete btn btn-danger btn-sm" id ="${el.BPB_NUMBER}">Delete</button>
          </td>
        </tr>
        `
      $('#pilihBPB').append(row);
    })
  })

  function disableFP(faktur) {
    console.log(faktur.value)
    if(faktur.value == 1){
      document.getElementById("nofaktur").disabled = false;
      document.getElementById("filefaktur").disabled = false;
      document.getElementById("tanggalfaktur").disabled = false;
      document.getElementById("btnmodal4").disabled = true;
      document.getElementById("pilihnofp").disabled = false;
      document.getElementById("check-nofaktur").disabled = false;
    }else {
      document.getElementById("nofaktur").disabled = true;
      document.getElementById("filefaktur").disabled = true;
      document.getElementById("tanggalfaktur").disabled = true;
      document.getElementById("btnmodal4").disabled = false;
      document.getElementById("pilihnofp").disabled = true;
      document.getElementById("check-nofaktur").disabled = true;
      
    }
  };

  // const rupiah = (number)=>{
  //   return new Intl.NumberFormat({
  //     style: "currency"
  //   }).format(number);
  // }

  // document.getElementById("console-log").addEventListener("click", function(){
  //   console.log('=============================')
  //   console.log('selectedBPB', selectedBPB)
  //   console.log('tmpListOfFakturPajak', tmpListOfFakturPajak)
  // })


  </script>
  @endsection
