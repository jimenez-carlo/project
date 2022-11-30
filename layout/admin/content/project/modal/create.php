      <div class="modal fade" id="create_modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><strong>PREPROC Details</strong></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>*Target Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="preproc_target_date" id="preproc_target_date">

                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-sm btn-dark" onclick="document.getElementById('create').click()" data-dismiss="modal">Create Project</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>