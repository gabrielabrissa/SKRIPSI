@extends('layout.mainadmin')


@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Atur User</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Atur User</h6>
@endsection

@section('body')
<div class="container-fluid py-4 px-0">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
      <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Tambahkan User</p>
          </div>
        </div>
        <div class="card-body">
        <div class="row">
          <form action="/aturuser/simpan_user" method="post" class="">                        
            @php echo csrf_field() @endphp
          <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Username</label>
                <div class="col-sm-8"> 
                    <input type="text" class="form-control form-control-sm" name="username"id="username" placeholder="Masukan Username">
                </div>
            </div>
        </div>
        <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Password</label>
                <div class="col-sm-8"> 
                    <input type="text" class="form-control form-control-sm" id="password" name="password" placeholder="Masukan Password">
                </div>
            </div>
        </div>
        <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Email</label>
                <div class="col-sm-8"> 
                    <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder="Masukan Email">
                </div>
            </div>
        </div>
        <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Nama Supplier</label>
                <div class="col-sm-8"> 
                    <select class="form-select  form-select-sm" placeholder="Pilih Supplier" id="supplier" name="supplier" required="required">
                        <option selected>Pilih Supplier</option>
                        @foreach ($supp as $s)
                        <option value="{{ $s->SUPP_ID }}">{{ $s->SUPP_NAME }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        
        <div class="form-group required">
            <div class="row mb-1">
                <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm text-primary">Active Flag</label>
                <div class="col-sm-8">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="activeflag1" id="activeflag1" value="Y">
                        <label class="form-check-label" for="inlineRadio3">Ya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="activeflag2" id="activeflag2" value="N">
                        <label class="form-check-label" for="inlineRadio4">Tidak</label>
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
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal5">Add Supplier</button>
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
             
        </form>
        </div>
      </div>
</div>
</div>

                        
<!-- Tabel TTF -->

@include('Modal.userModal') 
@endsection
