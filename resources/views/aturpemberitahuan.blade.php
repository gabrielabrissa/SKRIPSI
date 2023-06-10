@extends('layout.mainadmin')

@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Atur Pemberitahuan</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Atur Pemberitahuan</h6>
@endsection


@section('body')

<!-- Modal Body -->
<div class="container-fluid py-4 px-0">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
          <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0">Input Pemberitahuan Baru</p>
              </div>
            </div>
            <div class="card-body">
            <div class="row">
              <form action="/aturpemberitahuan/save_pemberitahuan" method="post" class="">
               @php echo csrf_field() @endphp
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Subjek</label>
                    <input class="form-control" type="text" id="subjek" name="subjek" require="required">
                  </div>
                </div>
                <div class="col-md-12">
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Detail Pemberitahuan</label>
                  <textarea class="form-control" id="detail_pemberitahuan" name ="detail_pemberitahuan" rows="5" require="required"></textarea>
                </div>
              </div>
                <div class="col-12 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">Save</button>
                </div>
                </form>
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
                    <h6 class="font-weight-bolder mb-0">Data Pemberitahuan</h6>
                    </div>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">No  </th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Tanggal</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Subjek</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $no=1;?>
                        @foreach($pmb as $p)
                            <tr>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$no }}</span>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{ date('d F Y', strtotime($p->TANGGAL)) }}</span>
                            </td>
                            <td class="align-middle text-left">
                                <span class="text-secondary text-xs font-weight-bold">{{$p->SUBJEK }}</span>
                            </td>
                            <td class="align-middle text-center">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal6{{ $p->ID }}">Detail</button>

                            @include('Modal.pemberitahuanModal') 
                            <?php $no++;?>
                            
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
            </div>
            </div>
            </div>
            </div>

            </div>
        </div>
    </div>
</div>

@endsection