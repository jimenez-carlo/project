<?php $default = $data['default_data'];  ?>
<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Editing Project #<?= $default->id ?></h1>
        </div><!-- /.col -->


      </div><!-- /.row -->
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <?= $data['bread_crumb'] ?>
          </ol>
        </div><!-- /.col -->

      </div><!-- /.row -->

    </div><!-- /.container-fluid -->
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div id="result">
        </div>

        <form method="post" name="project_update" refresh="admin/project/edit&id=<?= $default->id ?>" enctype="multipart/form-data">
          <button type="button" class="btn btn-dark pull-right" data-toggle="modal" data-target="#chronology_modal" style="right: 251px;z-index: 99;position: fixed;bottom: 20px;">Chronology</button>
          <?php if ($default->status_id < 14) { ?>
            <button type="button" class="btn btn-dark pull-right" data-toggle="modal" data-target="#change_status_modal" style="right: 137px;z-index: 99;position: fixed;bottom: 20px;">Change Status</button>
          <?php } ?>
          <button type="submit" class="btn btn-dark pull-right" name="update" confirmation="Save Changes To Project?" style="right: 20px;z-index: 99;position: fixed;bottom: 20px;">Update Project</button>
          <input type="submit" name="change_status" id="change_status" confirmation="Change Status Confirmation?" style="display:none">
          <input type="hidden" name="status_id" value="<?= $default->status_id ?>">
          <input type="hidden" name="id" value="<?= $default->id ?>">
          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                General Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Reference No#</label>
                    <input type="text" class="form-control form-control-sm" name="reference_no" disabled value="<?= $default->id ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*EPA</label>
                    <div class="form-group" style="display:flex">
                      <div class="form-check" style="width:15%">
                        <input class="form-check-input" type="radio" name="epa" value="1" <?= ($default->epa) ? 'checked' : '' ?>>
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div class="form-check" style="width:15%">
                        <input class="form-check-input" type="radio" name="epa" value="0" <?= (!$default->epa) ? 'checked' : '' ?>>
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Implementing Unit</label>
                    <select class="form-control form-control-sm" name="implementing_unit" id="implementing_unit">
                      <?php foreach ($data['default']['implementing_unit'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->implementing_unit_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*PABAC</label>
                    <select class="form-control form-control-sm" name="pabac" id="pabac">
                      <?php foreach ($data['default']['pabac'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->pabac_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*PABAC Nr</label>
                    <input type="text" class="form-control form-control-sm" name="pabac_nr" id="pabac_nr" value="<?= $default->pabac_nr ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*UPR Nr</label>
                    <input type="text" class="form-control form-control-sm" name="upr_nr" id="upr_nr" value="<?= $default->upr_nr ?>">
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Date of UPR:</label>
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-clock"></i></span>
                      </div>
                      <input type="text" class="form-control float-right daterange" id="upr_date" name="upr_date" value="<?= $default->upr_date ?>">
                    </div>

                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Comodity</label>
                    <select class="form-control form-control-sm" name="comodity" id="comodity">
                      <?php foreach ($data['default']['comodity'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->comodity_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Program Manager</label>
                    <select class="form-control form-control-sm" name="program_manager" id="program_manager">
                      <?php foreach ($data['default']['program_manager'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->program_manager_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                ASA Details
              </h3>
              <button type="button" class="btn btn-sm btn-dark float-right" id="add_asa">Add ASA Entry</button>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <table id="asa_table" class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>ASA NR</th>
                        <th>Date of ASA</th>
                        <th>Object Code</th>
                        <th>ASA AMOUNT</th>
                        <th>EXPENSE CLASS</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="wrapper3">
                      <?php $asa_ctr = 1; ?>
                      <?php foreach ($data['asas'] as $res) { ?>
                        <tr>

                          <td><input type="text" class="form-control form-control-sm" name="asa_nr[]" value="<?= $res['asa_nr'] ?>"></td>
                          <td>
                            <input type="text" class="form-control form-control-sm datepicker" name="asa_date_<?= $asa_ctr ?>" id="asa_date_<?= $asa_ctr ?>" value="<?= date("d/m/Y", strtotime($res['asa_date'])) ?>">
                          </td>
                          <td><input type="text" class="form-control form-control-sm" name="asa_object[]" value="<?= $res['object_code'] ?>"></td>
                          <td><input type="text" class="form-control form-control-sm" name="asa_amount[]" value="<?= $res['asa_amount'] ?>"></td>

                          <td>
                            <select name="asa_expense_class[]" class="form-control form-control-sm">
                              <?php foreach ($data['default']['expense_class'] as $subres) { ?>
                                <option value="<?= $subres['id']; ?>" <?= $res['expense_class_id'] == $subres['id'] ? 'selected' : '' ?>> <?php echo $subres['name'] ?> </option>
                              <?php } ?>
                            </select>
                          </td>
                          <td>
                            <button type="button" class="btn btn-dark btn-remove-user btn-sm"> <i class="fa fa-times"></i> </button>
                          </td>
                        </tr>
                        <?php $asa_ctr++; ?>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Project Description</label>
                    <textarea class="form-control form-control-sm" rows="2" name="project_description" id="project_description"><?= $default->project_description ?></textarea>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Qty</label>
                    <input type="text" class="form-control form-control-sm" name="qty" id="qty" value="<?= $default->qty ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Unit</label>
                    <select class="form-control form-control-sm" name="unit" id="unit">
                      <?php foreach ($data['default']['unit'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->unit_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Contract Nr</label>
                    <input type="text" class="form-control form-control-sm" name="contract_nr" id="contract_nr" value="<?= $default->contract_nr ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>ABC</label>
                    <input type="text" class="form-control form-control-sm currency" name="abc" id="abc" value="<?= number_format($default->abc, 2) ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Contract Price</label>
                    <input type="number" class="form-control form-control-sm currency" name="contract_price" id="contract_price" value="<?= number_format($default->contract_price, 2) ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Residuals</label>
                    <input type="text" class="form-control form-control-sm currency" id="residuals_display" value="<?= number_format($default->residuals, 2) ?>" disabled>
                    <input type="hidden" class="form-control form-control-sm" name="residuals" value="<?= $default->residuals ?>" id="residuals">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>End User</label>
                    <select class="form-control form-control-sm select2bs4" name="end_user[]" id="end_user" multiple="multiple">
                      <?php foreach ($data['default']['end_user'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= in_array($res['id'], explode(",", $default->end_user))  ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <script>
                  $(document).on("change", "#contract_price,#abc", function(e) {
                    if (!$("#abc").val() || !$("#contract_price").val()) {
                      $("#residuals_display").val(0);
                      $("#residuals").val(0);
                    } else {
                      let total = parseFloat($("#abc").val().replace(",", "")) - parseFloat($("#contract_price").val().replace(",", ""));
                      $("#residuals_display").val(total).maskMoney();
                      $("#residuals").val(total);
                    }
                  })
                </script>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Mode Of Proc</label>
                    <select class="form-control form-control-sm" name="mode_of_proc" id="mode_of_proc">
                      <?php foreach ($data['default']['mode_of_proc'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->mode_of_proc_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                PREPROC Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>*Target Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="preproc_target_date" id="preproc_target_date" value="<?= date("d/m/Y", strtotime($default->preproc_target_date)) ?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="preproc_conducted_date" id="preproc_conducted_date" value="<?= date("d/m/Y", strtotime($default->preproc_conducted_date)) ?>">

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                PREBID Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>*Target Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="prebid_target_date" id="prebid_target_date" value="<?= date("d/m/Y", strtotime($default->prebid_target_date)) ?>">

                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="prebid_conducted_date" id="prebid_conducted_date" value="<?= date("d/m/Y", strtotime($default->prebid_conducted_date)) ?>">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <script>
            // $(document).on("change", '#test',
            //   function(e) {
            //     console.log('bang');

            // var new_date = new Date($("#prebid_conducted_date").val());
            // new_date.setDate(new_date.getDate() + 2);
            // console.log(new_date);
            // $("#prebid_display").val(new_date);
            // $("#actual_prebid_target_date").val(new_date);
            // })
          </script>

          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                SOBE Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>*Target Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="sobe_target_date" id="sobe_target_date" value="<?= date("d/m/Y", strtotime($default->sobe_target_date)) ?>">


                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="sobe_conducted_date" id="sobe_conducted_date" value="<?= date("d/m/Y", strtotime($default->sobe_conducted_date)) ?>">

                  </div>
                </div>
                <div class="col-sm-4">
                  <label>*No Bidder:</label>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="no_bidder" name="no_bidder" value="1" <?= $default->no_bidder ? 'checked' : '' ?>>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                Supplier Details
              </h3>
              <button type="button" class="btn btn-sm btn-dark float-right" id="add_supplier">Add Supplier Entry</button>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>Rank</th>
                        <th>SUPPLIER</th>
                        <th>BID Price</th>
                        <th>LC/Local</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="wrapper">
                      <?php foreach ($data['suppliers'] as $res) { ?>
                        <tr>
                          <td>
                            <input type="text" class="form-control form-control-sm" name="supplier_rank[]" value="<?= $res['rank'] ?>">
                          </td>
                          <td>
                            <input type="text" class="form-control form-control-sm" name="supplier[]" value="<?= $res['supplier'] ?>">
                          </td>
                          <td><input type="text" class="form-control form-control-sm" name="bid_price[]" value="<?= $res['price'] ?>"></td>
                          <td>
                            <select name="local[]" class="form-control form-control-sm">
                              <?php foreach ($data['default']['local'] as $subres) { ?>
                                <option value="<?= $subres['id']; ?>" <?= $res['local_id'] == $subres['id'] ? 'selected' : '' ?>> <?php echo $subres['name'] ?> </option>
                              <?php } ?>
                            </select>
                          </td>
                          <td>
                            <select name="supplier_status[]" class="form-control form-control-sm">
                              <?php foreach ($data['default']['supplier_status'] as $subres) { ?>
                                <option value="<?= $subres['id']; ?>" <?= $res['status_id'] == $subres['id'] ? 'selected' : '' ?>> <?php echo $subres['name'] ?> </option>
                              <?php } ?>
                            </select>
                          </td>
                          <td>
                            <button type="button" class="btn btn-dark btn-remove-user btn-sm"> <i class="fa fa-times"></i> </button>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                PQ Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>*Target Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="pq_target_date" id="pq_target_date" value="<?= date("d/m/Y", strtotime($default->pq_target_date)) ?>">


                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="pq_conducted_date" id="pq_conducted_date" value="<?= date("d/m/Y", strtotime($default->pq_conducted_date)) ?>">


                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                PQR Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="pqr_conducted_date" id="pqr_conducted_date" value="<?= date("d/m/Y", strtotime($default->pqr_conducted_date)) ?>">

                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                NOA Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="noa_conducted_date" id="noa_conducted_date" value="<?= date("d/m/Y", strtotime($default->noa_conducted_date)) ?>">


                  </div>
                </div>
              </div>
            </div>
          </div>



          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                ORS Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="ors_conducted_date" id="ors_conducted_date" value="<?= date("d/m/Y", strtotime($default->ors_conducted_date)) ?>">


                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                NTP Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="ntp_conducted_date" id="ntp_conducted_date" value="<?= date("d/m/Y", strtotime($default->ntp_conducted_date)) ?>">

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                NTP CONFORME Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="ntp_conforme_conducted_date" id="ntp_conforme_conducted_date" value="<?= date("d/m/Y", strtotime($default->$ntp_conforme_conducted_date)) ?>">

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>*Delivery Period</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="ntp_delivery_period" id="ntp_delivery_period" value="<?= date("d/m/Y", strtotime($default->delivery_period)) ?>">

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>*LDD:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="ldd_date" id="ldd_date" value="<?= date("d/m/Y", strtotime($default->ldd)) ?>">

                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                Delivery Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="delivery_conducted_date" id="delivery_conducted_date" value="<?= date("d/m/Y", strtotime($default->delivery_conducted_date)) ?>">



                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                Inspected Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="inspected_conducted_date" id="inspected_conducted_date" value="<?= date("d/m/Y", strtotime($default->inspected_conducted_date)) ?>">


                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                Accepted Details
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>*Conducted Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="accepted_conducted_date" id="accepted_conducted_date" value="<?= date("d/m/Y", strtotime($default->accepted_conducted_date)) ?>">


                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>DV/Check:</label>
                    <div class="form-group" style="display:flex">
                      <div class="form-check" style="width:15%">
                        <input class="form-check-input" type="radio" name="dv" value="1" <?= ($default->dv) ? 'checked' : '' ?>>
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div class="form-check" style="width:15%">
                        <input class="form-check-input" type="radio" name="dv" value="0" <?= (!$default->dv) ? 'checked' : '' ?>>
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group ">
                    <label>Amount</label>
                    <input type="number" class="form-control form-control-sm" name="amount" value="<?= number_format($default->amount, 2) ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="accepted_date_1" id="accepted_date_1" value="<?= date("d/m/Y", strtotime($default->accepted_date_1)) ?>">

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Retention Percentage</label>
                    <select class="form-control form-control-sm" name="retention_percentage" id="retention_percentage">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Retention Amount</label>
                    <input type="number" class="form-control form-control-sm" name="retention_amount" id="retention_amount" value="<?= number_format($default->retention_amount, 2) ?>">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Date:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="accepted_date_2" id="accepted_date_2" value="<?= date("d/m/Y", strtotime($default->accepted_date_2)) ?>">

                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>LD Amount</label>
                    <input type="number" class="form-control form-control-sm" name="ld_amount" id="ld_amount" value="<?= number_format($default->ld_amount, 2)  ?>">
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Total</label>
                    <input type="number" class="form-control form-control-sm" name="total" id="total" value="<?= number_format($default->total, 2)  ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>


          <?php if ($default->status_id >= 15) { ?>
            <div class="card card-dark card-outline card-tabs">
              <div class="card-header">
                <h3 class="card-title">
                  TWG
                </h3>
                <button type="button" class="btn btn-sm btn-dark float-right" id="add_twg">Add TWG Entry</button>
              </div>
              <div class="card-body">
                <div class="row">
                  <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>Rank</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Middle Initial</th>
                        <th>Suffix</th>
                        <th>Branch of Service</th>
                        <th>Serial No</th>
                        <th>Designation</th>
                        <th>Authority</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="wrapper2">
                      <?php foreach ($data['twgs'] as $res) { ?>
                        <tr>
                          <td>
                            <select name="twg_rank[]" class="form-control form-control-sm">
                              <?php foreach ($data['default']['rank'] as $subres) { ?>
                                <option value="<?= $subres['id']; ?>" <?= $res['rank_id'] == $subres['id'] ? 'selected' : '' ?>> <?php echo $subres['name'] ?> </option>
                              <?php } ?>
                            </select>
                          </td>
                          <td><input type="text" class="form-control form-control-sm" name="last_name[]" value="<?= $res['last_name'] ?>"></td>
                          <td><input type="text" class="form-control form-control-sm" name="first_name[]" value="<?= $res['first_name'] ?>"></td>
                          <td><input type="text" class="form-control form-control-sm" name="middle_name[]" value="<?= $res['middle_name'] ?>"></td>
                          <td>
                            <select name="suffix[]" class="form-control form-control-sm">
                              <?php foreach ($data['default']['suffix'] as $subres) { ?>
                                <option value="<?= $subres['id']; ?>" <?= $res['suffix_id'] == $subres['id'] ? 'selected' : '' ?>> <?php echo $subres['name'] ?> </option>
                              <?php } ?>
                            </select>
                          </td>
                          <td>
                            <select name="branch[]" class="form-control form-control-sm">
                              <?php foreach ($data['default']['branch'] as $subres) { ?>
                                <option value="<?= $subres['id']; ?>" <?= $res['branch_id'] == $subres['id'] ? 'selected' : '' ?>> <?php echo $subres['name'] ?> </option>
                              <?php } ?>
                            </select>
                          </td>
                          <td><input type="text" class="form-control form-control-sm" name="serial_no[]" value="<?= $res['serial_no'] ?>"></td>
                          <td>
                            <select name="designation[]" class="form-control form-control-sm">
                              <?php foreach ($data['default']['designation'] as $subres) { ?>
                                <option value="<?= $subres['id']; ?>" <?= $res['designation_id'] == $subres['id'] ? 'selected' : '' ?>> <?php echo $subres['name'] ?> </option>
                              <?php } ?>
                            </select>
                          </td>
                          <td><input type="text" class="form-control form-control-sm" name="authority[]" value="<?= $res['authority'] ?>"></td>
                          <td>
                            <button type="button" class="btn btn-dark btn-remove-user btn-sm"> <i class="fa fa-times"></i> </button>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>

              </div>
            </div>
          <?php } ?>
          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                Allied Documents
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="app_file">APP/IAPP/AAPP (<a href="files/app/<?= $default->app_file ?>" target="_blank">Preview</a>)</label>
                    <div class="input-group input-group-sm">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="application/pdf" id="app_file" name="app_file">
                        <label class="custom-file-label" for="app_file">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="ppmp_file">PPMP/APPMP (<a href="files/ppmp/<?= $default->ppmp_file ?>" target="_blank">Preview</a>)
                    </label>
                    <div class="input-group input-group-sm">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="application/pdf" id="ppmp_file" name="ppmp_file">
                        <label class="custom-file-label" for="ppmp_file">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="procurement_file">Procurement Directive (<a href="files/procurement/<?= $default->procurement_file ?>" target="_blank">Preview</a>)
                    </label>
                    <div class="input-group input-group-sm">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="application/pdf" id="procurement_file" name="procurement_file">
                        <label class="custom-file-label" for="procurement_file">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="tech_specs_file">Tech Specs (<a href="files/tech/<?= $default->tech_specs_file ?>" target="_blank">Preview</a>)
                    </label>
                    <div class="input-group input-group-sm">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="application/pdf" id="tech_specs_file" name="tech_specs_file">
                        <label class="custom-file-label" for="tech_specs_file">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="bidding_file">Bidding Directive (<a href="files/bidding/<?= $default->bidding_file ?>" target="_blank">Preview</a>)
                    </label>
                    <div class="input-group input-group-sm">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="application/pdf" id="bidding_file" name="bidding_file">
                        <label class="custom-file-label" for="bidding_file">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="upr_file">UPR (<a href="files/upr/<?= $default->upr_file ?>" target="_blank">Preview</a>)
                    </label>
                    <div class="input-group input-group-sm">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="application/pdf" id="upr_file" name="upr_file">
                        <label class="custom-file-label" for="upr_file">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="other_file">Other Documents (<a href="files/other/<?= $default->other_file ?>" target="_blank">Preview</a>)
                    </label>
                    <div class="input-group input-group-sm">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" accept="application/pdf" id="other_file" name="other_file">
                        <label class="custom-file-label" for="other_file">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card card-dark card-outline card-tabs">
            <div class="card-header">
              <h3 class="card-title">
                Project Team
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>*Assigned Officer
                    </label>
                    <select class="form-control select2bs4 form-control-sm" name="assigned_officer" id="assigned_officer">
                      <?php foreach ($data['default']['officers'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->officer_id == $res['id'] ? 'selected' : '' ?>><?= strtoupper($res['name']) ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>*Assigned Personnel
                    </label>
                    <select class="form-control select2bs4 form-control-sm" name="assigned_personell[]" id="assigned_personell" multiple="multiple">
                      <?php foreach ($data['default']['personells'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= in_array($res['id'], explode(",", $default->personell_ids))  ? 'selected' : '' ?>><?= strtoupper($res['name']) ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php include_once('layout/admin/content/project/modal/chronology.php') ?>
          <?php include_once('layout/admin/content/project/modal/change_status_admin.php') ?>
        </form>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</div>
<script>
  $('.currency').maskMoney();

  //Date picker
  $('.datepicker').datepicker({
    format: "yyyy-mm-dd",
  });
  $(function() {
    bsCustomFileInput.init();
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $("input[name='epa']").trigger("change");
  });

  var wrapper = $("#wrapper");
  var add_button = $("#add_supplier");

  $(add_button).click(function(e) {
    e.preventDefault();
    var supp = $('.supplier').length
    supp++;
    $(wrapper).append('<tr><td> <input type="text" class="form-control form-control-sm supplier" name="supplier_rank[]" value="' + supp + '"></td><td> <input type="text" class="form-control form-control-sm" name="supplier[]"></td> <td>  <input type="text" class="form-control form-control-sm" name="bid_price[]"> </td><td> <select name = "local[]" class="form-control form-control-sm"><?php foreach ($data['default']['local'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td> <select name = "supplier_status[]" class="form-control form-control-sm"><?php foreach ($data['default']['supplier_status'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');
  });

  $(wrapper).on("click", ".btn-remove-user", function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
  })

  var wrapper2 = $("#wrapper2");
  var add_button2 = $("#add_twg");

  $(add_button2).click(function(e) {
    e.preventDefault();

    $(wrapper2).append('<tr><td> <select name = "twg_rank[]" class="form-control form-control-sm"><?php foreach ($data['default']['rank'] as $res) { ?> <option value="<?= $res['id']; ?>" style="color:<?= $res['color'] ?>"> <?php echo $res['name'] ?> </option><?php } ?> </select> </td> <td><input type="text" class="form-control form-control-sm" name="last_name[]"></td> <td><input type="text" class="form-control form-control-sm" name="first_name[]"></td> <td><input type="text" class="form-control form-control-sm" name="middle_name[]"></td>   <td> <select name="suffix[]" class="form-control form-control-sm"><?php foreach ($data['default']['suffix'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td> <select name = "branch[]" class="form-control form-control-sm"><?php foreach ($data['default']['branch'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><input type="text" class="form-control form-control-sm" name="serial_no[]"></td><td> <select name = "designation[]" class="form-control form-control-sm"><?php foreach ($data['default']['designation'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><input type="text" class="form-control form-control-sm" name="authority[]"></td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');
  });

  $(wrapper2).on("click", ".btn-remove-user", function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
  })


  var wrapper3 = $("#wrapper3");
  var add_button3 = $("#add_asa");

  $(add_button3).click(function(e) {
    e.preventDefault();
    var tmp = $('.asa_date').length
    tmp++;
    $(wrapper3).append('<tr><td> <input type="text" class="form-control form-control-sm" name="asa_nr[]"></td><td> <input type="text" class="form-control form-control-sm datepicker" name="asa_date_' + tmp + '" asa_date_' + tmp + ' ></td></td> <td>  <input type="text" class="form-control form-control-sm" name="asa_object[]"> </td><td> <input type="text" class="form-control form-control-sm" name="asa_amount[]"> </td><td> <select name = "asa_expense_class[]" class="form-control form-control-sm"><?php foreach ($data['default']['expense_class'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');

    $('.datepicker').datepicker({
      format: "yyyy-mm-dd",
    });
  });

  $(wrapper3).on("click", ".btn-remove-user", function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
  })


  $('.daterange').daterangepicker();

  $(document).on("change", "#contract_price,#abc", function(e) {
    if (!$("#abc").val() || !$("#contract_price").val()) {
      $("#residuals_display").val(0);
      $("#residuals").val(0);
    } else {
      let total = parseInt($("#abc").val()) - parseInt($("#contract_price").val());
      $("#residuals_display").val(total);
      $("#residuals").val(total);
    }
  })
  $(document).on("change", "input[name='epa']:checked", function(e) {
    console.log($(this).val());
    if ($('input[name="epa"]:checked').val() == 1) {
      $('#asa_table').hide();
      $(add_button3).hide();
    } else {
      $('#asa_table').show();
      $(add_button3).show();
    }
  })
</script>