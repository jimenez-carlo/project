      <div class="modal fade" id="change_status_modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><strong>Change Status</strong></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>*Status:</label>
                    <select class="form-control select2bs4 form-control-sm" name="new_status_id" id="new_status_id">
                      <?php foreach ($data['new_status_admin'] as $res) { ?>
                        <option value="<?= $res['id'] ?>"><?= strtoupper($res['name']) ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>*Remarks</label>
                    <textarea class="form-control form-control-sm" rows="2" name="remarks" id="remarks"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-sm btn-dark" onclick="document.getElementById('change_status').click()" data-dismiss="modal" <?= ($default->status_id == 15) ? 'disabled' : '' ?>>Change Status</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>