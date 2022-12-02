      <div class="modal fade" id="chronology_modal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title"><strong>Project Chronology</strong></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <table class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>Status</th>
                        <th>Conducted Date</th>
                        <th>Remarks</th>
                        <th>Others Details</th>
                        <th>Updated By</th>
                        <th>Date Updated</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data['chronology'] as $res) { ?>
                        <tr>
                          <td><?= strtoupper($res['name']) ?></td>
                          <td><?= date("d-m-Y", strtotime($res['conducted_date'])) ?></td>
                          <td><?= strtoupper($res['remarks']) ?></td>
                          <td><?= strtoupper($res['other_details']) ?></td>
                          <td><?= ucwords($res['full_name']) ?></td>
                          <td><?= date("d-m-Y", strtotime($res['created_date'])) ?></td>
                        </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>
              </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-sm btn-dark" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>