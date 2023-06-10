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
                  <span class="text-secondary text-xs font-weight-bold">{{ $c->jumlah }}</span>
                </td>
                <td class="align-middle text-center">

                  <a data-toggle="modal" data-id="{{$c->SUPP_SITE_ID}}" data-toggle="modal" title="Add this item"
                    class="openModal btn btn-primary btn-sm" href="#modal2-{{ $c->ID2 }}">Pilih</a>
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

@foreach ( $cbg as $c)
@include('Modal.tambahttfModal', ['id2' => $c->ID2])
@endforeach
