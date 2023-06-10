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
                 
                  <?php $no=1;?>
                  @foreach($cbg as $c)
                  <tbody>
                    <tr>
                      <td class="align-middle text-center">
                        <span class="fw-semibold text-xs font-weight-bolder ">{{$no }}</span>
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
                        <span class="text-secondary text-xs font-weight-bold">{{ $c->jumlah  }}</span>
                      </td>
                      <td class="align-middle text-center">
                      {{-- <button data-path="{{ route('inputttf',$c->SUPP_SITE_ID) }}" type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal2">Pilih</button> --}}
                      {{-- <a href="javascript:void(0)" id="pilihCbg" data-url="{{ route('inputttf.pilihCabang', $c->SUPP_SITE_ID) }}" data-bs-toggle="modal" data-bs-target="#modal2" class="btn btn-info">Pilih</a> --}}
                      {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal2{{ $c->ID2 }}">Pilih</button> --}}
                      {{-- <a href="{{ route('inputttf.pilihCabang', [$c->SUPP_SITE_ID]) }}" class="btn btn-danger btn-flat" style="width:90px;" data-bs-target="#modal2" data-toggle="modal">Yes</a>   --}}
                      {{-- <a href="javascript:void(0)" type="button" class="btn btn-primary btn-sm" data-id="{{$c->SUPP_SITE_ID}}">Pilih</a> --}}
                      <a data-toggle="modal" data-id="{{$c->SUPP_SITE_ID}}" data-toggle="modal" title="Add this item" class="openModal btn btn-primary btn-sm" href="#modal2">Pilih</a>
                    </td>
                    </tr>
                  </tbody>
                  <?php $no++;?>
                  
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
</div>

@include('Modal.tambahttfModal') 
{{-- 
<script type="text/javascript">
  $(document).on('click', '.openModal', function () {
        var id = $(this).data('SUPP_SITE_ID');
        $('#modal2').modal('show');
    })
    
</script> --}}