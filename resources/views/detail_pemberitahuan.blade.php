@extends('layout.mainadmin')

@section('breadcrumb')
<ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
  <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
  <li class="breadcrumb-item text-sm text-white active" aria-current="page">Detail Pemberitahuan</li>
</ol>
<h6 class="font-weight-bolder text-white mb-0">Detail Pemberitahuan</h6>
@endsection


@section('body')

<!-- Modal Body -->
<div class="container-fluid py-4 px-0">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
          <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                
                @foreach($pmb as $p)
              </div>
            </div>
            <div class="card-body">
            <div class="row">
            <form>
               <div class="col-md-12">
                 <div class="form-group">
                   <p  style="font-family:arial bold; text-align: center; color: black;" class="mb-0"><b>{{ $p->Subjek }}</b></p>
              
                 </div>
               </div>
               <div class="col-md-12">
                 <p style="font-size: small; font-family: arial; text-align: justify;" class="mb-0">{{ $p->Detail }} </p>
                 
              
             </div>
               </form>
               @endforeach
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