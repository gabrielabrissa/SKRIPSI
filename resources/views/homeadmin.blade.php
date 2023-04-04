@extends('layout.mainadmin')

@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Home</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Home</h6>
@endsection


@section('body')
<div class="container-fluid py-1 px-0">
<div class="row ">
        <div class="col-md-10 mt-4">
          <div class="card ">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Pemberitahuan</h6>
            </div>
            <div class="card-body pt-4 p-3">   
              <ul class="list-group ">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-light border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">4 November 2022</h6>
                    <span class="mb-2 text-xs">Pemberitahuan pengiriman dokumen ke kantor
                  </div>
                  <div class="ms-auto text-end">
                  <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-light border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">4 Mei 2022</h6>
                    <span class="mb-2 text-xs">Pemberitahuan pengiriman dokumen ke kantor
                  </div>
                  <div class="ms-auto text-end">
                  <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-light border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">9 Juni 2022</h6>
                    <span class="mb-2 text-xs">Informasi Pendaftaran User
                  </div>
                  <div class="ms-auto text-end">
                  <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-light border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">5 April 2022</h6>
                    <span class="mb-2 text-xs">Informasi Faktur Pajak
                  </div>
                  <div class="ms-auto text-end">
                  <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
   
     <!-- Download Juklak -->
    <div class="col-md-2 mt-4">
                  <div class="card">
                    <div class="card-header mx-4 p-3 text-center">
                      <div class="icon icon-shape icon-lg bg-gradient-primary shadow text-center border-radius-lg">
                        <i class="fas fa-file-pdf opacity-10"></i>
                      </div>
                    </div>
                    <div class="card-body pt-0 p-1 text-center">
                      <hr class="horizontal dark my-1">
                      <button class="btn btn-outline-gradient-primary text-primary text-sm "></i> JUKLAK</button>
                    </div>
                  </div>
                </div>   
</div> 
</div>
@endsection