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
  <!-- Start Page -->
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group" role="group" aria-label="First group">
              <button type="button" class="btn btn-primary btn-sm" id="btn-show-pilih-cabang">Add
                TTF</button>
            </div>
            {{-- <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-group mb-2">
                    <input class="form-control" placeholder="Search" type="text">
                  </div>
                </div>
              </div>
            </div> --}}
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table table-bordered">
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
                  <tbody id="table-data-ttf">
                  </tbody>
                </table>
                {{-- <nav aria-label="...">
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
                </nav> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Modal HTML -->
  <div id="modal-cabang" class="modal fade" data-backdrop="static" tabindex="-1">
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
              <tbody id="list-cabang">
              </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-secondary btn-sm" id="cancel-pilih-cabang">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-add-ttf" class="modal fade" data-backdrop="static" tabindex="-1">
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
                  <td class="fw-semibold text-xs" id="x1"></td>
                </tr>
                <tr>
                  <th class="fw-semibold text-xs font-weight-bolder ">Nama Supplier</th>
                  <td class="fw-semibold text-xs" id="x2"></td>
                </tr>
                <tr>
                  <th class="fw-semibold text-xs font-weight-bolder ">Tipe Supplier</th>
                  <td class="fw-semibold text-xs" id="x3"></td>
                </tr>
                <tr>
                  <th class="fw-semibold text-xs font-weight-bolder ">No NPWP</th>
                  <td class="fw-semibold text-xs" id="x4"></td>
                </tr>
                <tr>
                  <th class="fw-semibold text-xs font-weight-bolder ">Alamat</th>
                  <td class="fw-semibold text-xs" id="x5"></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card mb-0">
                <div class="card-header pb-0">
                  <button class="btn btn-primary btn-sm" id="btn-show-modal-add-fp-bpb">Add FP</button>
                </div>
                <div class="card-body px-0 pt-0 pb-0">
                  <div class="table-responsive p-0">
                    <table class="table table-bordered -mb-1">
                      <thead>
                        <tr>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Type Faktur
                            Pajak </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Nomor Faktur
                            Pajak </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tanggal Faktur Pajak</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">DPP Faktur Pajak </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">PPN Faktur Pajak </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Total Bundel BPB </th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Selisih DPP</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Selisih PPN</th>
                          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">FLAG PPN BPB</th>
                        </tr>
                      </thead>
                      <tbody id="table-ttf-data-to-save">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" id="cancel-add-ttf">Cancel</button>
          <button class="btn btn-success btn-sm" id="save-ttf">Save</button>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-add-fp-bpb" class="modal fade" data-backdrop="static" tabindex="-1">
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
                          <select id="selection" onchange="chooseTipeFaktur(this)" class="form-select" required>
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
                            <input type="text" class="form-control form-control-sm" id="no-faktur" name="FP[]"
                              placeholder="Pilih No Faktur" disabled>
                            <input type="hidden" id="nofaktur_file">
                          </div>
                          <div class="col-auto">
                            <button type="button" class="btn btn-primary btn-sm" id="btn-show-modal-pilih-no-fp">Pilih No FP </button>
                          </div>
                        </div>
  
                        {{-- <form action="" method="" enctype="multipart/form-data"> --}}
                          <div class="row mb-0">
                            <label class="col-sm-3 col-form-label col-form-label-sm text-primary">File FP</label>
                            <div class="col-sm-5">
                              <input type="file" id="file-faktur" name="filefaktur"
                                class="form-control-file form-control-sm">
                            </div>
                            <div class="col-auto">
                              <button class="btnFP btn btn-secondary mb-3 btn-sm" id="check-no-faktur">Cek</button>
                            </div>
                          </div>
                          {{--
                        </form> --}}
  
                        <div class="row mb-2">
                          <label class="col-sm-3 col-form-label col-form-label-sm text-primary">Tanggal FP</label>
                          <div class="col-sm-5">
                            <input type="date" class="form-control form-control-sm" name="FP[]" id="tanggal-faktur" disabled>
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
                      <button type="button" class="btn btn-primary btn-sm" id="btn-show-modal-pilih-bpb" disabled>Add BPB</button>
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
                        <tbody id="BPB-to-save">
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <!--  End Tabel BPB -->
            <div class="modal-footer ">
              <button type="button" class="btn btn-secondary btn-sm" id="close-add-fp-bpb">Close</button>
              <button type="button" name="button" class="btn btn-primary btn-sm" id="save-fp">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-pilih-no-fp" class="modal fade" data-backdrop="static" tabindex="-1">
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
                      <tbody id="table-no-fp">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-secondary btn-sm" id="close-modal-pilih-fp">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-pilih-bpb" class="modal fade" data-backdrop="static" tabindex="-1">
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
                      <tbody id="table-data-bpb">
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer ">
          <button type="button" class="btn btn-secondary btn-sm" id="btn-close-add-bpb">Close</button>
        </div>
      </div>
    </div>
  </div>  
  <!-- End Modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script>
    var appUrl = "{{env('http://ttf.test')}}";
    var data_branch = [];
    var data_ttf_to_save = [];
    var data_no_faktur = [];
    var data_bpb = [];
    var selectedBPB = [];
    var selectedSupp = [];
    var selectedFP = [] ;
    var listOfFakturPajak = [];
    var branch_code, DPP_FP, PPN_FP, Total_DPP_BPB, Total_PPN_BPB, Selisih_DPP, Selisih_PPN, Total_BPB, ttf_sumBPB_DPP, ttf_sumBPB_PPN, ttf_jumFP_DPP, ttf_jumFP_PPN, ttf_selisihDPP, ttf_selisihPPN;
    fetchTTF();
    function fetchTTF(){
      $('#table-data-ttf').html('');
      $.ajax({
        type: "GET",
        url: "/fetch-ttf",
        dataType: 'json',
        success: function(response){
          $('#table-data-ttf').html('');
          var auto_inc_id = 1;
          var status = '';
          var dateTTF = '';
          var dateValidation = '';
          var action = '';
          const options = { year: 'numeric', month: 'long', day: 'numeric' };
          $.each(response.ttf, function (key, item){
            dateTTF = new Date(item.TTF_DATE);
            dateValidation = new Date(item.TTF_RETURN_DATE);
            if(item.TTF_STATUS == "DRAFT"){
              status = `<span class="badge badge-sm bg-gradient-secondary">DRAFT</span>`;
              action = `<button class="btn btn-secondary btn-xs submit-data-ttf" value="${item.TTF_ID}">
                          Submit
                        </button>
                        <button value="${item.TTF_ID}" class="delete-data-ttf btn btn-danger btn-xs" >
                          Delete
                        </button>`
            }else{
              status = `<span class="badge badge-sm bg-gradient-success">SUBMITTED</span>`;
              action = `<a href="#" class="btn btn-danger btn-xs disabled">Delete</a>`;
            }

            $('#table-data-ttf').append(`<tr>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${auto_inc_id}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${item.TTF_NUM}</span>
                </td>
                <td class="align-middle text-center text-sm">${status}</td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${item.SUPP_ADDR_PROVINCE}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${dateTTF.toLocaleDateString('id', options)}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${dateValidation.toLocaleDateString('id', options)}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${item.SUPP_SITE_ALT_NAME}</span>
                </td>
                <td class="align-middle text-center">
                  <a href="/inputttf/cetakttf/${item.TTF_ID}" class="text-decoration-none text-xs font-weight-bold" target="_new">Download</a>
                </td>
                <td class="align-middle text-center">${action}</td>
              </tr>`
              );
              auto_inc_id++;
          })
        }
      });
    }
    $(document).on('click', '.submit-data-ttf', function(){
      const id = $(this).attr('value');
      $.ajax({
        type: "GET",
        url: "/inputttf/submitttf/"+id,
        dataType: 'json',
        success: function(response){
          console.log(response);
          fetchTTF();
      }})
    })
    $(document).on('click', '.delete-data-ttf', function(){
      const id = $(this).attr('value');
      $.ajax({
        type: "GET",
        url: "/inputttf/deletettf/"+id,
        dataType: 'json',
        success: function(response){
          console.log(response);
          fetchTTF();
      }})
    })
    function countSummary(){
      Total_DPP_BPB = selectedBPB.map((el) => el.BPB_DPP).reduce((sum, current)=> sum + current,0);
      Total_PPN_BPB = selectedBPB.map((el) => el.BPB_TAX).reduce((sum, current)=> sum + current,0);
      if(DPP_FP == 0){
        Selisih_DPP = Total_DPP_BPB;
        Selisih_PPN = Total_PPN_BPB;
      } else{
        Selisih_DPP = DPP_FP - Total_DPP_BPB;
        Selisih_PPN = PPN_FP - Total_PPN_BPB;
      }
      document.getElementById("Total_DPP_BPB").value = Total_DPP_BPB;
      document.getElementById("Total_PPN_BPB").value = Total_PPN_BPB;
      document.getElementById("Selisih_DPP").value = Selisih_DPP;
      document.getElementById("Selisih_PPN").value = Selisih_PPN;
    }
    function defaultFormAddFpBpb(){
      document.getElementById("selection").value = 1;
      document.getElementById("no-faktur").value = '';
      document.getElementById("btn-show-modal-pilih-no-fp").disabled = false;
      document.getElementById("file-faktur").value = '';
      document.getElementById("file-faktur").disabled = false;
      document.getElementById("check-no-faktur").disabled = false;
      document.getElementById("tanggal-faktur").value = '';
      document.getElementById("DPP_FP").value = 0;
      document.getElementById("PPN_FP").value = 0;
      document.getElementById("Total_DPP_BPB").value = 0;
      document.getElementById("Total_PPN_BPB").value = 0;
      document.getElementById("Selisih_DPP").value = 0;
      document.getElementById("Selisih_PPN").value = 0;
      document.getElementById("btn-show-modal-pilih-bpb").disabled = true;
      $('#BPB-to-save').html('');
      selectedBPB = []
      DPP_FP = PPN_FP = Total_DPP_BPB = Total_PPN_BPB = Selisih_DPP = Selisih_PPN = 0;
    }
    function chooseTipeFaktur(faktur) {
      if(faktur.value == 1){
        defaultFormAddFpBpb();
      }else {
        defaultFormAddFpBpb();
        document.getElementById("selection").value = 2;
        document.getElementById("no-faktur").value = '';
        document.getElementById("btn-show-modal-pilih-no-fp").disabled = true;
        document.getElementById("file-faktur").disabled = true;
        document.getElementById("check-no-faktur").disabled = true;
        document.getElementById("btn-show-modal-pilih-bpb").disabled = false;
      }
    }
    function viewSelectedPBB(){
      $('#BPB-to-save').html('');
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
        $('#BPB-to-save').append(row);
      })
    }
    function viewTTFDataToSave(){
      $('#table-ttf-data-to-save').html('');
      Total_BPB = ttf_sumBPB_DPP = ttf_sumBPB_PPN = ttf_jumFP_DPP = ttf_jumFP_PPN = ttf_selisihDPP = ttf_selisihPPN = 0;
      $.each(data_ttf_to_save, function (key, el){
        Total_BPB += el.buddleBPB;
        ttf_sumBPB_DPP += el.Total_DPP_BPB;
        ttf_sumBPB_PPN += el.Total_PPN_BPB;
        ttf_jumFP_DPP += el.DPP_FP;
        ttf_jumFP_PPN += el.PPN_FP;
        ttf_selisihDPP += el.Selisih_DPP;
        ttf_selisihPPN += el.Selisih_PPN;
        $('#table-ttf-data-to-save').append(`<tr>
          <td class="align-middle text-center">
            <button class="delete-ttf-to-save btn btn-danger btn-xs" id="${key}">Delete</button>
          </td>
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
            <span class="text-secondary text-xs font-weight-bold">${el.DPP_FP}</span>
          </td>
          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">${el.PPN_FP}</span>
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
        </tr>`);
      })
    }
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        }
    });
    function sendFile(file) {
      const formData = new FormData();
      formData.append('file', file);
        fetch(`${appUrl}/read_qr`, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: formData
      }).then(response => {
        if (response.ok) {
          return response.json();
        } else {
          console.error('File upload failed');
        }
      }).then(data => {
        let noFaktur = document.getElementById("no-faktur").value;
        if (noFaktur == data.no_faktur) {
          alert(`nomor faktur sama!`);
          document.getElementById("btn-show-modal-pilih-bpb").disabled = false;
        } else {
          alert(`nomor faktur berbeda!`)
        }
      }).catch(error => {
        console.error('Error:', error);
      });
    }
    $(document).on('click', '#btn-show-pilih-cabang', function(){
      $('#modal-cabang').modal('show');
      $.ajax({
        type: "GET",
        url: "/fetch-cabang",
        dataType: 'json',
        success: function(response){
          $('#list-cabang').html('');
          var number = 1;
          data_branch = response.ttf;
          $.each(data_branch, function (key, item){
            $('#list-cabang').append(`<tr>
                <td class="align-middle text-center">
                  <span class="fw-semibold text-xs font-weight-bolder ">${number}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="fw-semibold text-xs font-weight-bold">${item.SUPP_SITE_CODE}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${item.SUPP_SITE_ALT_NAME}</span>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${item.BRANCH_CODE}</span>
                </td>\
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">${item.jumlah}</span>
                </td>
                <td class="align-middle text-center">
                  <button value="${item.BRANCH_CODE}" class="pilih-cabang-show-modal-add-ttf btn btn-primary btn-xs" >Pilih</button>
                </td>
              </tr>`);
            number++;
          });
        }})
    })
    $(document).on('click', '#cancel-pilih-cabang', function(){
      $('#modal-cabang').modal('hide');
    })
    $(document).on('click', '.pilih-cabang-show-modal-add-ttf', function(){
      branch_code = $(this).val();
      $('#modal-add-ttf').modal('show');
      //show data cabang
      $.ajax({
        type: "GET",
        url: "/get-sys-supp-site/"+branch_code,
        dataType: 'json',
        success: function(response){
          $('#x1').text(response.SUPP_SITE_CODE)
          $('#x2').text(response.SUPP_SITE_ALT_NAME)
          $('#x3').text(response.SUPP_TYPE)
          $('#x4').text(response.SUPP_PKP_NUM)
          $('#x5').text(`${response.SUPP_ADDR_LINE1 ?? ''} ${response.SUPP_ADDR_LINE2 ?? ''}`)
          let namaSup = response.SUPP_SITE_ALT_NAME;
          let cabangSup = response.SUPP_ADDR_PROVINCE;
          let supsitecode = response.SUPP_SITE_CODE;
          let supplierdata = {
            namaSup : namaSup,
            cabangSup : cabangSup,
            supsitecode : supsitecode,
          }
          selectedSupp.push(supplierdata);
      }})
      //get data no fp
      $.ajax({
        type: "GET",
        url: "/get-ttf-data-nofp/"+branch_code,
        dataType: 'json',
        success: function(response){
          data_no_faktur = response.data;
      }})
      //get data bpb
      $.ajax({
        type: "GET",
        url: "/get-ttf-data-bpb/"+branch_code,
        dataType: 'json',
        success: function(response){
          data_bpb = response.data;
      }})
      $('#table-ttf-data-to-save').html('');
      data_ttf_to_save = [];
    })
    $(document).on('click','#cancel-add-ttf', function(){
      $('#modal-add-ttf').modal('hide');
    })
    $(document).on('click', '#btn-show-modal-add-fp-bpb', function(){
      $('#modal-add-fp-bpb').modal('show');
      defaultFormAddFpBpb();
    })
    $(document).on('click', '#btn-show-modal-pilih-no-fp', function(){
      $('#modal-pilih-no-fp').modal('show');
      $('#table-no-fp').html('');
      var number = 1;
      $.each(data_no_faktur, function (key, item){
        $('#table-no-fp').append(`<tr>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${number}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${item.NOMOR_FAKTUR}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${item.NAMA_PENJUAL}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${item.JUMLAH_DPP}</span>
              </td>
              <td class="align-middle text-center">
                <span class="text-secondary text-xs font-weight-bold">${item.JUMLAH_PPN}</span>
              </td>
              <td class="align-middle text-center">
                  <button class="pilih-no-fp btn btn-primary btn-sm" value="${item.NOMOR_FAKTUR}">Pilih</button>
              </td>
            </tr>`
          );
        number++;
      });
    })
    $(document).on('click', '.pilih-no-fp', function(){
      $("#modal-pilih-no-fp").modal('hide');
      const no_fp = $(this).val();
      document.getElementById("btn-show-modal-pilih-bpb").disabled = true;
      $.ajax({
        type: "GET",
        url: "/get-detail-fp/"+no_fp,
        dataType: "json",
        success: function (response){
          DPP_FP = response.data.JUMLAH_DPP;
          PPN_FP = response.data.JUMLAH_PPN;
          document.getElementById("DPP_FP").value = DPP_FP;
          document.getElementById("PPN_FP").value = PPN_FP;
          document.getElementById("no-faktur").value = no_fp;
          document.getElementById("tanggal-faktur").value = response.data.TANGGAL_FAKTUR;
          countSummary();
        }
      })
    })
    $(document).on('click','#close-modal-pilih-fp', function(){
      $('#modal-pilih-no-fp').modal('hide');
    })
    $(document).on('click','#check-no-faktur', function(){
      let uploadedFile = document.getElementById('file-faktur').files[0];
      if (uploadedFile) {
        sendFile(uploadedFile);
      } else {
        alert('Pilih file terlebih dahulu');
      }
    })
    $(document).on('click', '#btn-show-modal-pilih-bpb', function(e){
      $("#modal-pilih-bpb").modal('show');
        var number = 1;
        $('#table-data-bpb').html('');
        var indexBPB = false;
        var input = '';
        $.each(data_bpb, function (key, el){
          indexBPB = selectedBPB.find(ele => ele.BPB_NUMBER === el.BPB_NUMBER);
          if(indexBPB) {
            input =  `<input class='form-check-input checklist-bpb' type='checkbox' key='${key}' id='${el.BPB_NUMBER}' checked>`;
          }else{
            input =  `<input class='form-check-input checklist-bpb' type='checkbox' key='${key}' id='${el.BPB_NUMBER}'>`;
          }
          $('#table-data-bpb').append(
            `<tr>
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
                <div class="form-check" id="input_cb">
                  ${input}
                </div>
              </td>
            </tr>`
          );
          number++;
        })
    })
    $(document).on('click', '#btn-close-add-bpb', function(e){
      $("#modal-pilih-bpb").modal('hide');
    })
    $(document).on('click', '#close-add-fp-bpb', function(e){
      $("#modal-add-fp-bpb").modal('hide');
    })
    $(document).on('change', '.checklist-bpb', function(e) {
      const isChecked = $(this).is(':checked');
      const bpbNumber = $(this).attr('id');
      const index_data_bpb = $(this).attr('key');
      if (isChecked) {
          selectedBPB.push(data_bpb[index_data_bpb]);
      } else {
          const index = selectedBPB.findIndex(el => el.BPB_NUMBER === bpbNumber);
          selectedBPB.splice(index, 1);
      }
      countSummary();
    })
    $(document).on('click', '.bpbDelete', function(){
      const bpbNumber = $(this).attr('id');
      const index = selectedBPB.findIndex(el => el.BPB_NUMBER === bpbNumber);
      selectedBPB.splice(index, 1);
      countSummary();
      viewSelectedPBB();
    })
    $('#modal-pilih-bpb').on('hidden.bs.modal', function (e) {
      $('#body-modal4').html('');
      viewSelectedPBB();
    })
    $('#save-fp').on('click', function (e) {
      if(selectedBPB.length > 0) {
        let type = document.getElementById("selection");
        let typeselect = type.options[type.selectedIndex];
        let typefp = typeselect.textContent;
        let noFaktur = document.getElementById("no-faktur").value;
        let noFakturHidden = document.getElementById("nofaktur_file").value;
        let tglFaktur = document.getElementById("tanggal-faktur").value;

        var obj = {
            typefp,
            noFaktur,
            tglFaktur,
            DPP_FP,
            PPN_FP,
            Total_DPP_BPB,
            Total_PPN_BPB,
            Selisih_DPP,
            Selisih_PPN,
            buddleBPB : selectedBPB.length,
            listOfBPB: selectedBPB
        }
        if(noFaktur){
          //kurangin data nomor faktur
          selectedFP.push(data_no_faktur[data_no_faktur.findIndex(el => el.NOMOR_FAKTUR === noFaktur)]);
          data_no_faktur.splice(data_no_faktur.findIndex(el => el.NOMOR_FAKTUR === noFaktur),1);
        }
        //kurangin data BPB
        var index_data_bpb;
        $.each(selectedBPB, function(key, item){
          index_data_bpb = data_bpb.findIndex(el => el.BPB_NUMBER === item.BPB_NUMBER);
          data_bpb.splice(index_data_bpb, 1);
        })
        data_ttf_to_save.push(obj);
        viewTTFDataToSave();
        $('#modal-add-fp-bpb').modal('hide');
      }else{
        alert('Data BPB Belum DiPilih!');
      }
    })
    $(document).on('click', '.delete-ttf-to-save', function(){
      const index = $(this).attr('id');
      //cari nomor faktur
      const no_faktur = data_ttf_to_save[index].noFaktur;
      if(no_faktur != ''){
        //cari index nomor faktur dari faktur yang sudah dipilihd dari selected FP
        const index_selected_fp = selectedFP.findIndex(el => el.NOMOR_FAKTUR === no_faktur);
        //tambahkan data faktur tersebut ke data no faktur
        data_no_faktur.push(selectedFP[index_selected_fp]);
        //delete nomor faktur dari yang sudah terpilih
        selectedFP.splice(index_selected_fp,1);
      }
      //tambahkan data bpbnya ke data bpb
      var listOfBPB = data_ttf_to_save[index].listOfBPB;
      for(var i= 0; i < listOfBPB.length; i++){
        data_bpb.push(listOfBPB[i]);
      }
      //delete nomor faktur dari data ttf to save
      data_ttf_to_save.splice(index, 1);
      //tampilkan data ttf to save
      viewTTFDataToSave();
    })
    document.getElementById("save-ttf").addEventListener("click", function(){
      let cabang_ttf = selectedSupp[0].cabangSup;
      let supsitecode = selectedSupp[0].supsitecode;
      let typefp_ttf = data_ttf_to_save[0].typefp;
      let tanggalttf = new Date();
      let tanggal_ttf = tanggalttf.toLocaleDateString("en-US")
      let tanggal_validasi = "-";
      let nama_supplier = selectedSupp[0].namaSup;

      let ttf = {
          cabang_ttf,
          supsitecode,
          tanggal_ttf,
          tanggal_validasi,
          typefp_ttf,
          nama_supplier,
          listFP: data_ttf_to_save,
          branchcode : branch_code,
          jml_fp : Total_BPB,
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
      .then(res => {
        console.log(res)
        fetchTTF();
        listOfFakturPajak = [];
      })
      .catch(error => {
        console.log(error)
      })
      $("#modal-add-ttf").modal('hide');
      $("#modal-cabang").modal('hide');
    })

  // const rupiah = (number)=>{
  //   return new Intl.NumberFormat({
  //     style: "currency"
  //   }).format(number);
  // }
  </script>
  @endsection
