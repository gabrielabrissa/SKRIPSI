
  <div id="modal6{{ $p->ID }}" class="modal fade" tabindex="-1">
<div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header ">
                    <h5 class="modal-title">Pemberitahuan</h5>
                </div>
                <div class="modal-body">
<!-- Modal Body -->
<div class="container-fluid py-1">
<div class="row">
<div class="card">
          <div class="card-header pb-0">
              <div class="d-flex align-items-center">
                <p class="mb-0" style="text-align: center" ><b>{{ $p->SUBJEK }}</b></p>
              </div>
             </div>
             <div class="card-body">
             <div class="row">
               <form>
                 <div class="col-md-12">
                 <div class="form-group">
                   <textarea disabled style="font-size: small; font-family: arial; text-align: justify;" class="form-control"  rows="20"">{{ $p->DETAIL }}</textarea>
                 </div>
               </div>
               
                 </form>
             </div>
           </div>
 </div>
 </div>
 </div>
   
 <!-- End Modal Body -->
 <div class="modal-footer">
                 <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                 </div>
             </div>
         </div>
     </div>
 </div>