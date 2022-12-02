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
                  <div class="card card-dark card-outline card-tabs">
                    <div class="card-header p-0 pt-1 border-bottom-0">
                      <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <?php foreach ($data['chronology'] as $res) { ?>
                          <li class="nav-item">
                            <a class="nav-link" id="tab_<?= $res['id'] ?>" data-toggle="pill" href="#target_tab_<?= $res['id'] ?>" role="tab" aria-controls="target_tab_<?= $res['id'] ?>"><?= strtoupper($res['name']) ?>[<?= date("d-M-Y", strtotime($res['conducted_date'])) ?>]</a>
                          </li>
                        <?php } ?>
                      </ul>
                    </div>

                    <div class="card-body">


                      <?php $ctr = 1; ?>
                      <div class="tab-content" id="custom-tabs-three-tabContent">
                        <?php foreach ($data['chronology'] as $res) { ?>
                          <div class="tab-pane fade <?= $ctr == 1 ? "active show" : "" ?>" id="target_tab_<?= $res['id'] ?>" role="tabpanel" aria-labelledby="tab_<?= $res['id'] ?>">


                            <div class="row">
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Conducted Date</label>
                                  <input type="text" class="form-control form-control-sm" value="<?= date("d-m-Y", strtotime($res['conducted_date'])) ?>" disabled>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Date Created</label>
                                  <input type="text" class="form-control form-control-sm" value="<?= date("d-m-Y", strtotime($res['created_date'])) ?>" disabled>
                                </div>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label>Status</label>
                                <input type="text" class="form-control form-control-sm" value="<?= $res['name'] ?>" disabled>
                              </div>
                            </div>

                            <div class="col-sm-12">
                              <div class="form-group">
                                <label>Created By</label>
                                <input type="text" class="form-control form-control-sm" value="<?= ucwords($res['full_name']) ?>" disabled>
                              </div>
                            </div>

                            <div class="col-sm-12">
                              <div class="form-group">
                                <label>Remarks</label>
                                <textarea class="form-control form-control-sm" rows="3" disabled> <?= $res['remarks'] ?></textarea>
                              </div>
                            </div>
                            <div class="col-sm-12">
                              <div class="form-group">
                                <label>Other Details</label>
                                <textarea class="form-control form-control-sm" rows="3" disabled> <?= $res['other_details'] ?></textarea>
                              </div>
                            </div>
                          </div>

                          <?php $ctr++; ?>

                        <?php } ?>
                      </div>

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