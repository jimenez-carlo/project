<?php $default = $data['default_data'];  ?>
<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Reference No#<?= $default->id ?> - <?= $data['default']['set_status'][$default->status_id] ?></h1>
        </div><!-- /.col -->


      </div><!-- /.row -->
      <div class="row mb-2">
        <div class="col-sm-6">

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
          <button type="button" class="btn btn-dark pull-right" data-toggle="modal" data-target="#change_status_modal" style="right: 137px;z-index: 99;position: fixed;bottom: 20px;" <?= $data['default']['set_status'][$default->status_id] == "ACCEPTED" ? "disabled" : "" ?>>Change Status</button>

          <button type="submit" class="btn btn-dark pull-right" name="update" confirmation="Save Changes To Project?" style="right: 20px;z-index: 99;position: fixed;bottom: 20px;">Save Changes</button>
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
                    <label>PABAC</label>
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
                    <label>PABAC Nr</label>
                    <input type="text" class="form-control form-control-sm" name="pabac_nr" id="pabac_nr" value="<?= $default->pabac_nr ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>UPR Nr</label>
                    <input type="text" class="form-control form-control-sm" name="upr_nr" id="upr_nr" value="<?= $default->upr_nr ?>">
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Date of UPR:</label>
                    <input type="text" class="form-control form-control-sm multidate" name="upr_date" id="upr_date" value="<?= !empty($default->upr_date) ? $default->upr_date : "" ?>">

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
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>GAA</label>
                    <input type="text" class="form-control form-control-sm" name="gaa" id="gaa" value="<?= $default->gaa ?>">
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
                            <input type="text" class="form-control form-control-sm datepicker" name="asa_date_<?= $asa_ctr ?>" id="asa_date_<?= $asa_ctr ?>" value="<?= date("d-m-Y", strtotime($res['asa_date']))  ?>">
                          </td>
                          <td><input type="text" class="form-control form-control-sm" name="asa_object[]" value="<?= $res['object_code'] ?>"></td>
                          <td><input type="text" class="form-control form-control-sm currency" name="asa_amount[]" value="<?= $res['asa_amount'] ?>"></td>

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
                    <label>*ABC</label>
                    <input type="text" class="form-control form-control-sm currency" name="abc" id="abc" value="<?= number_format($default->abc, 2) ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Contract Price</label>
                    <input type="text" class="form-control form-control-sm currency" name="contract_price" id="contract_price" value="<?= number_format($default->contract_price, 2) ?>">
                  </div>
                </div>
                <?php if ($default->status_id >= 9) { ?>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Residuals</label>
                      <input type="text" class="form-control form-control-sm currency" id="residuals_display" name="residuals_display" value="<?= number_format($default->residuals, 2) ?>" disabled>
                      <input type="hidden" class="form-control form-control-sm" name="residuals" value="<?= $default->residuals ?>" id="residuals">
                    </div>
                  </div>
                <?php } ?>
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
                <?php if ($default->status_id >= 9) { ?>
                  <script>
                    $(document).on("change", "#contract_price,#abc", function(e) {
                      // if (!$("#abc").val() || !$("#contract_price").val()) {
                      //   $("#residuals_display").val(0);
                      //   $("#residuals").val(0);
                      // } else {
                      // }
                      let total = parseFloat($("#abc").val().trim().replace(/,/g, '')) - parseFloat($("#contract_price").val().trim().replace(/,/g, ''));

                      let numFor = Intl.NumberFormat('en-US');
                      let new_for = numFor.format(total);

                      $("#residuals_display").val(Number(parseFloat(total).toFixed(2)).toLocaleString('en', {
                        minimumFractionDigits: 2
                      }));
                      $("#residuals").val(total);
                    })
                  </script>
                <?php } ?>
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

          <?php if ($default->status_id >= 1) { ?>

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
                      <input type="text" class="form-control form-control-sm datepicker" name="preproc_target_date" id="preproc_target_date" value="<?= !empty($default->preproc_target_date) ? date("d-m-Y", strtotime($default->preproc_target_date)) : "" ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>*Conducted Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="preproc_conducted_date" id="preproc_conducted_date" value="<?= !empty($default->preproc_conducted_date) ? date("d-m-Y", strtotime($default->preproc_conducted_date)) : "" ?>">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <?php if ($default->status_id == 2 || $default->status_id >= 4) { ?>
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
                      <input type="text" class="form-control form-control-sm datepicker" name="prebid_target_date" id="prebid_target_date" value="<?= !empty($default->prebid_target_date) ? date("d-m-Y", strtotime($default->prebid_target_date)) : "" ?>" disabled>
                      <input type="hidden" name="prebid_target_date" value="<?= !empty($default->prebid_target_date) ? date("d-m-Y", strtotime($default->prebid_target_date)) : "" ?>">
                      <script>
                        $(document).on("change", '#preproc_conducted_date',
                          function(e) {
                            var tmp = $("#preproc_conducted_date").val().split("-");
                            var result = new Date(tmp[2], (tmp[1] - 1), tmp[0]);
                            result.setDate(result.getDate() + 8);
                            console.log(result);
                            var month = result.getMonth() + 1;
                            $("#prebid_target_date").val(result.getDate() + "-" + month + "-" + result.getFullYear());
                            $("[name='prebid_target_date']").val(result.getDate() + "-" + month + "-" + result.getFullYear());
                          })
                      </script>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>*Conducted Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="prebid_conducted_date" id="prebid_conducted_date" value="<?= !empty($default->prebid_conducted_date) ? date("d-m-Y", strtotime($default->prebid_conducted_date)) : "" ?>">

                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>
          <?php if ($default->status_id >= 4) { ?>
            <div class="card card-dark card-outline card-tabs">
              <div class="card-header">
                <h3 class="card-title">
                  SOBE Details
                </h3>
                <button type="button" class="btn btn-sm btn-dark float-right" id="add_supplier">Add Supplier</button>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>*Target Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" id="sobe_target_date" value="<?= date("d-m-Y", strtotime($default->sobe_target_date)) ?>" disabled>
                      <input type="hidden" name="sobe_target_date" value="<?= date("d-m-Y", strtotime($default->sobe_target_date)) ?>">
                      <script>
                        $(document).on("change", '#prebid_conducted_date',
                          function(e) {
                            var tmp = $("#prebid_conducted_date").val().split("-");
                            var result = new Date(tmp[2], (tmp[1] - 1), tmp[0]);
                            result.setDate(result.getDate() + 13);
                            console.log(result);
                            var month = result.getMonth() + 1;
                            $("#sobe_target_date").val(result.getDate() + "-" + month + "-" + result.getFullYear());
                            $("[name='sobe_target_date']").val(result.getDate() + "-" + month + "-" + result.getFullYear());
                          })
                      </script>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>*Conducted Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="sobe_conducted_date" id="sobe_conducted_date" value="<?= !empty($default->sobe_conducted_date) ? date("d-m-Y", strtotime($default->sobe_conducted_date)) : "" ?>">

                    </div>
                  </div>
                  <div class="col-sm-4">
                    <label>*No Bidder:</label>
                    <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="no_bidder" name="no_bidder" value="1" <?= $default->no_bidder ? 'checked' : '' ?>>
                    </div>
                  </div>
                </div>

                <script>
                  $(document).on("change", '#no_bidder',
                    function(e) {

                      if ($('#no_bidder').is(":checked")) {
                        $("#supplier_list").hide();
                      } else {
                        $("#supplier_list").show();

                      }
                    })
                </script>
                <div class="row" id="supplier_list">

                  <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>SCB/LCB</th>
                        <th>SUPPLIER</th>
                        <th>BID Price</th>
                        <th>Foreign/Local</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="wrapper5">
                      <?php $ctr = 1 ?>
                      <?php foreach ($data['bidders'] as $res) { ?>
                        <input type="hidden" name="bidder_modify[<?= $res['bidder_id'] ?>]" value="<?= $res['bidder_id'] ?>">
                        <tr>
                          <td><input type="text" class="form-control form-control-sm bidder_rank" name="bidder_rank[<?= $res['bidder_id'] ?>]" value="<?= $res['rank'] ?>"></td>
                          <td><input type="text" class="form-control form-control-sm" name="bidder_supplier[<?= $res['bidder_id'] ?>]" value="<?= $res['supplier'] ?>"></td>
                          <td><input type="text" class="form-control form-control-sm currency" name="bidder_price[<?= $res['bidder_id'] ?>]" value="<?= number_format($res['price'], 2) ?>"></td>
                          <td>
                            <select name="bidder_local[<?= $res['bidder_id'] ?>]" class="form-control form-control-sm">
                              <?php foreach ($data['default']['local'] as $subres) { ?>
                                <option value="<?= $subres['id']; ?>" <?= $res['local_id'] == $subres['id'] ? 'selected' : '' ?>> <?php echo $subres['name'] ?> </option>
                              <?php } ?>
                            </select>
                          </td>
                          <td>
                            <button type="button" class="btn btn-dark btn-remove-user btn-sm"> <i class="fa fa-times"></i> </button>
                          </td>
                        </tr>
                        <?php $ctr++; ?>
                      <?php } ?>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>



          <?php } ?>

          <?php if ($default->status_id == 5 || $default->status_id >= 7) { ?>

            <div class="card card-dark card-outline card-tabs">
              <div class="card-header">
                <h3 class="card-title">
                  PQ Details
                </h3>
              </div>
              <div class="card-body">

                <table id="example1" class="table table-bordered table-striped table-sm">
                  <thead>
                    <tr>
                      <th>SCB/LCB</th>
                      <th>SUPPLIER</th>
                      <th>BID Price</th>
                      <th>Foreign/Local</th>
                      <th>Conducted Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody id="wrapper">
                    <?php $ctr = 1 ?>
                    <?php foreach ($data['suppliers'] as $res) { ?>
                      <tr>
                        <td><?= $ctr ?></td>
                        <td><?= $res['supplier'] ?></td>
                        <td><?= number_format($res['price'], 2) ?></td>
                        <td><?= $res['type'] ?></td>
                        <td><?= date("d-m-Y", strtotime($res['conducted_date'])) ?></td>
                        <td><?= $res['status'] ?></td>
                      </tr>
                      <?php $ctr++; ?>
                    <?php } ?>
                  </tbody>
                </table>
                <br>
                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>*Target Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="pq_target_date" id="pq_target_date" value="<?= !empty($default->pq_target_date) ? date("d-m-Y", strtotime($default->pq_target_date)) : "" ?>" disabled>
                      <input type="hidden" name="pq_target_date" value="<?= !empty($default->pq_target_date) ? date("d-m-Y", strtotime($default->pq_target_date)) : "" ?>">
                      <script>
                        $(document).on("change", '#sobe_conducted_date',
                          function(e) {
                            var tmp = $("#sobe_conducted_date").val().split("-");
                            var result = new Date(tmp[2], (tmp[1] + 1), tmp[0]);
                            result.setDate(result.getDate() + 14);
                            console.log(result);
                            var month = result.getMonth() + 1;
                            $("#pq_target_date").val(result.getDate() + "-" + month + "-" + result.getFullYear());
                            $("[name='pq_target_date']").val(result.getDate() + "-" + month + "-" + result.getFullYear());
                          })
                      </script>

                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>*Conducted Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="pq_conducted_date" id="pq_conducted_date" <?= !empty($default->pq_conducted_date) ? date("d-m-Y", strtotime($default->pq_conducted_date)) : "" ?>>
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label>Supplier:</label>
                      <select class="form-control form-control-sm" name="pq_supplier" id="pq_supplier">
                        <?php foreach ($data['bidders'] as $res) { ?>
                          <option value="<?= $res['bidder_id'] ?>"><?= strtoupper($res['supplier'] . " - (" . number_format($res['price'], 2) . ")") ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>



              </div>
            </div>
          <?php } ?>

          <?php if ($default->status_id >= 7 && $default->status_id != 17) { ?>

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
                      <label>*Submitted Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="pqr_conducted_date" id="pqr_conducted_date" value="<?= !empty($default->pqr_conducted_date) ? date("d-m-Y", strtotime($default->pqr_conducted_date)) : "" ?>">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

          <?php if ($default->status_id >= 8 && $default->status_id != 17) { ?>
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
                      <label>*Date Approved:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="noa_conducted_date" id="noa_conducted_date" value="<?= !empty($default->noa_conducted_date) ? date("d-m-Y", strtotime($default->noa_conducted_date)) : "" ?>">


                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>
          <?php if ($default->status_id >= 9 && $default->status_id != 17) { ?>

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
                      <input type="text" class="form-control form-control-sm datepicker" name="ors_conducted_date" id="ors_conducted_date" value="<?= !empty($default->ors_conducted_date) ? date("d-m-Y", strtotime($default->ors_conducted_date)) : "" ?>">



                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <?php if ($default->status_id >= 10 && $default->status_id != 17) { ?>
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
                      <input type="text" class="form-control form-control-sm datepicker" name="ntp_conducted_date" id="ntp_conducted_date" value="<?= !empty($default->ntp_conducted_date) ? date("d-m-Y", strtotime($default->ntp_conducted_date)) : "" ?>">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

          <?php if ($default->status_id >= 11 && $default->status_id != 17) { ?>
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

                      <input type="text" class="form-control form-control-sm datepicker" name="ntp_conforme_conducted_date" id="ntp_conforme_conducted_date" value="<?= !empty($default->ntp_conforme_conducted_date) ? date("d-m-Y", strtotime($default->ntp_conforme_conducted_date)) : "" ?>">


                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>*Delivery Period</label>
                      <input type="number" class="form-control form-control-sm" name="ntp_delivery_period" id="ntp_delivery_period" value="<?= $default->delivery_period ?>">

                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>*LDD:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="ldd_date_display" id="ldd_date_display" value="<?= !empty($default->ldd) ? date("d-m-Y", strtotime($default->ldd)) : "" ?>" disabled>
                      <input type="hidden" class="form-control form-control-sm datepicker" name="ldd_date" id="ldd_date" value="<?= !empty($default->ldd) ? date("d-m-Y", strtotime($default->ldd)) : "" ?>">

                      <script>
                        $(document).on("change", '#ntp_delivery_period,#ntp_conducted_date',
                          function(e) {
                            var tmp = $("#ntp_conducted_date").val().split("-");
                            var result = new Date(tmp[2], (tmp[1] - 1), tmp[0]);
                            result.setDate(result.getDate() + parseInt($("#ntp_delivery_period").val()));
                            var month = result.getMonth() + 1;
                            $("#ldd_date_display").val(result.getDate() + "-" + month + "-" + result.getFullYear());
                            $("[name='ldd_date']").val(result.getDate() + "-" + month + "-" + result.getFullYear());
                          })
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>

          <?php if ($default->status_id >= 12 && $default->status_id != 17) { ?>
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
                      <label>*Date Delivered:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="delivery_conducted_date" id="delivery_conducted_date" value="<?= !empty($default->delivery_conducted_date) ? date("d-m-Y", strtotime($default->delivery_conducted_date)) : "" ?>">



                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php } ?>

          <?php if ($default->status_id >= 13 && $default->status_id != 17) { ?>
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
                      <label>*Inspection Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="inspected_conducted_date" id="inspected_conducted_date" value="<?= !empty($default->inspected_conducted_date) ? date("d-m-Y", strtotime($default->inspected_conducted_date)) : "" ?>">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
          <?php if ($default->status_id >= 14 && $default->status_id != 17) { ?>
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
                      <input type="text" class="form-control form-control-sm datepicker" name="accepted_conducted_date" id="accepted_conducted_date" value="<?= !empty($default->accepted_conducted_date) ? date("d-m-Y", strtotime($default->accepted_conducted_date)) : "" ?>">


                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>DV/Check:</label>
                      <div class="form-group" style="display:flex">
                        <div class="form-check" style="width:15%">
                          <input class="form-check-input" type="radio" name="dv" value="1" <?= ($default->dv) ? 'checked' : '' ?>>
                          <label class="form-check-label">DV</label>
                        </div>
                        <div class="form-check" style="width:15%">
                          <input class="form-check-input" type="radio" name="dv" value="0" <?= (!$default->dv) ? 'checked' : '' ?>>
                          <label class="form-check-label">Check</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group ">
                      <label>DV Amount</label>
                      <input type="text" class="form-control form-control-sm currency" name="amount" id="amount" value="<?= number_format($default->amount, 2) ?>">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>DV Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="accepted_date_1" id="accepted_date_1" value="<?= !empty($default->accepted_date_1) ? date("d-m-Y", strtotime($default->accepted_date_1)) : "" ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Retention Percentage</label>
                      <select class="form-control form-control-sm" name="retention_percentage" id="retention_percentage">
                        <?php
                        for ($i = 1; $i < 11; $i++) {  ?>
                          <option <?= $default->retention_percent == $i ? 'selected' : '' ?>><?= $i ?></option>
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Retention Amount</label>
                      <input type="text" class="form-control form-control-sm" id="retention_display" name="retention_display" value="<?= number_format($default->retention_amount, 2) ?>" disabled>
                      <input type="hidden" name="retention_amount" id="retention_amount" value="<?= number_format($default->retention_amount, 2) ?>">

                      <script>
                        $(document).on("change", '#retention_percentage,#contract_price',
                          function(e) {

                            let total = (($("#retention_percentage").val() / 100) * parseFloat($("#contract_price").val().trim().replace(/,/g, '')));




                            $("#retention_display").val(Number(parseFloat(total).toFixed(2)).toLocaleString('en', {
                              minimumFractionDigits: 2
                            }));
                            $("[name='retention_amount']").val(total);
                          })
                      </script>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>Retention Date:</label>
                      <input type="text" class="form-control form-control-sm datepicker" name="accepted_date_2" id="accepted_date_2" value="<?= !empty($default->accepted_date_2) ? date("d-m-Y", strtotime($default->accepted_date_2)) : "" ?>">

                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label>LD Amount</label>
                      <input type="text" class="form-control form-control-sm currency" name="ld_amount" id="ld_amount" value="<?= number_format($default->ld_amount, 2)  ?>">
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label hidden="hidden">Total</label>
                      <input type="text" class="form-control form-control-sm" id="total_display" name="total_display" value="<?= number_format($default->total, 2)  ?>" disabled>
                      <input type="hidden" name="total" value="<?= number_format($default->total, 2) ?>">

                      <script>
                        $(document).on("change", '#amount,#retention_amount,#retention_percentage,#contract_price',
                          function(e) {

                            let total = (parseFloat($("#amount").val().replace(",", "")) + parseFloat($("#retention_amount").val().replace(",", "")));
                            $("#total_display").val(Number(parseFloat(total).toFixed(2)).toLocaleString('en', {
                              minimumFractionDigits: 2
                            }));
                            $("[name='total']").val(total);
                          })

                        $('#total_display').hide();

                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

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
                    <select class="form-control select2bs4 form-control-sm" name="assigned_officer[]" id="assigned_officer" multiple="multiple">
                      <?php foreach ($data['default']['officers'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= in_array($res['id'], explode(",", $default->officer_id))  ? 'selected' : '' ?>><?= strtoupper($res['name']) ?></option>
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
          <?php include_once('layout/admin/content/project/modal/change_status.php') ?>
        </form>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</div>
<script>
  $('.currency').maskMoney({
    allowZero: true,
  });

  //Date picker
  $('.datepicker').datepicker({
    format: "dd-mm-yyyy",
  });
  $('.multidate').datepicker({
    format: "dd-mm-yyyy",
    multidate: true
  });
  $(function() {
    bsCustomFileInput.init();
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $("input[name='epa']").trigger("change");
  });

  var wrapper2 = $("#wrapper2");
  var add_button2 = $("#add_twg");

  $(add_button2).click(function(e) {
    e.preventDefault();

    $(wrapper2).append('<tr><td> <select name = "twg_rank[]" class="form-control form-control-sm"><?php foreach ($data['default']['twg_rank'] as $res) { ?> <option value="<?= $res['id']; ?>" style="color:<?= $res['color'] ?>"> <?php echo $res['name'] ?> </option><?php } ?> </select> </td> <td><input type="text" class="form-control form-control-sm" name="last_name[]"></td> <td><input type="text" class="form-control form-control-sm" name="first_name[]"></td> <td><input type="text" class="form-control form-control-sm" name="middle_name[]"></td>   <td> <select name="suffix[]" class="form-control form-control-sm"><?php foreach ($data['default']['suffix'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td> <select name = "branch[]" class="form-control form-control-sm"><?php foreach ($data['default']['branch'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><input type="text" class="form-control form-control-sm" name="serial_no[]"></td><td> <select name = "designation[]" class="form-control form-control-sm"><?php foreach ($data['default']['designation'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><input type="text" class="form-control form-control-sm" name="authority[]"></td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');
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
    $(wrapper3).append('<tr><td> <input type="text" class="form-control form-control-sm" name="asa_nr[]"></td><td> <input type="text" class="form-control form-control-sm datepicker" name="asa_date_' + tmp + '" asa_date_' + tmp + ' ></td></td> <td>  <input type="text" class="form-control form-control-sm" name="asa_object[]"> </td><td> <input type="text" class="form-control form-control-sm currency" name="asa_amount[]"> </td><td> <select name = "asa_expense_class[]" class="form-control form-control-sm"><?php foreach ($data['default']['expense_class'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');
    $('.datepicker').datepicker({
      format: "dd-mm-yyyy",
    });
    $('.currency').maskMoney();
  });

  $(wrapper3).on("click", ".btn-remove-user", function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
  })

  var wrapper5 = $("#wrapper5");
  var add_button5 = $("#add_supplier");

  $(add_button5).click(function(e) {
    e.preventDefault();

    $(wrapper5).append('<tr><td><input type="hidden" name="bidder_new[]"> <input type="text" class="form-control form-control-sm bidder_rank" name="bidder_new_rank[]"></td> <td>  <input type="text" class="form-control form-control-sm" name="bidder_new_supplier[]"> </td><td> <input type="text" class="form-control form-control-sm currency" name="bidder_new_price[]" value="0.00"> </td><td> <select name = "bidder_new_local[]" class="form-control form-control-sm"><?php foreach ($data['default']['local'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');
    $('.datepicker').datepicker({
      format: "dd-mm-yyyy",
    });
    let ctr = 1;
    $(".bidder_rank").each(function(index) {
      $(this).val(ctr);
      ctr++;
    });
    $('.currency').maskMoney({
      allowZero: true
    });
  });

  $(wrapper5).on("click", ".btn-remove-user", function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
    let ctr = 1;
    $(".bidder_rank").each(function(index) {
      $(this).val(ctr);
      ctr++;
    });
  })


  $('.daterange').daterangepicker({
    locale: {
      format: 'DD-MM-YYYY'
    }
  });


  // $(document).on("change", "input[name='epa']:checked", function(e) {

  //   if ($('input[name="epa"]:checked').val() == 1) {
  //     $('#asa_table').hide();
  //     $(add_button3).hide();
  //   } else {
  //     $('#asa_table').show();
  //     $(add_button3).show();
  //   }
  // })

  // $(document).on("change", "input[name='no_bidder']:checked", function(e) {
  //   if ($('input[name="no_bidder"]:checked').val() == 1) {
  //     $("#new_status_id option[value='5']").remove();
  //   } else {
  //     var o = new Option("SOBE - PASSED", "5");
  //     $(o).html("option text");
  //     $("#new_status_id").append(o);
  //   }
  // })
</script>