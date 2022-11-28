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
                  <div class="timeline">
                    <?php foreach ($data['chronology'] as $res) { ?>
                      <div>
                        <i class="fas fa-clock bg-gray"></i>
                        <div class="timeline-item">
                          <span class="time"><i class="fas fa-clock"></i> <?= date("Y-m-d", strtotime($res['created_date'])) . " At " . date("H:i", strtotime($res['created_date']));  ?></span>
                          <h3 class="timeline-header"><a href="#"><?= ucwords($res['full_name']) ?></a> changed the status to <?= strtoupper($res['name']) ?></h3>
                          <?php if (!empty($res['remarks'])) { ?>
                            <div class="timeline-body">
                              <?= $res['remarks'] ?>
                            </div>
                          <?php } ?>

                        </div>
                      </div>
                    <?php } ?>
                    <div>
                      <i class="fas fa-clock bg-gray"></i>

                    </div>
                  </div>
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