<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Report</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
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

        <form method="get" id="reportform" enctype="multipart/form-data" action="../project/layout/admin/content/report/download.php">
          <div class="card" style="margin-buttom: .1rem;">
            <div class="card-header">
              <h3 class="card-title">Select Columns</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_status" id="status" checked>
                    <label class="form-check-label" for="status">Status</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_epa" id="epa" checked>
                    <label class="form-check-label" for="epa">EPA</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_implementing_unit" id="eu" checked>
                    <label class="form-check-label" for="eu">Implementing Unit</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_pabac" id="pabac" checked>
                    <label class="form-check-label" for="pabac">PABAC</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_pabac_nr" id="pabacnr" checked>
                    <label class="form-check-label" for="pabacnr">PABAC NR</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_upr_nr" id="uprnr" checked>
                    <label class="form-check-label" for="uprnr">UPR NR</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_commodity" id="commodity" checked>
                    <label class="form-check-label" for="commodity">Commodity</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_program_manager" id="programmanager" checked>
                    <label class="form-check-label" for="programmanager">Program Manager</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_project_description" id="projectdescription" checked>
                    <label class="form-check-label" for="projectdescription">Project Description</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_quantity" id="quantity" checked>
                    <label class="form-check-label" for="quantity">Quantity</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_unit" id="unit" checked>
                    <label class="form-check-label" for="unit">Unit</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_abc" id="abc" checked>
                    <label class="form-check-label" for="abc">ABC</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_contract_nr" id="contractnr" checked>
                    <label class="form-check-label" for="contractnr">Contract NR</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_contract_price" id="contractprice" checked>
                    <label class="form-check-label" for="contractprice">Contract Price</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_residuals" id="residuals" checked>
                    <label class="form-check-label" for="residuals">Residuals</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_end_user" id="enduser" checked>
                    <label class="form-check-label" for="enduser">End User</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_mode_of_proc" id="modeofproc" checked>
                    <label class="form-check-label" for="modeofproc">Mode of Proc</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_preproc_conducted_date" id="preprocconducteddate" checked>
                    <label class="form-check-label" for="preprocconducteddate">Preproc Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_prebid_conducted_date" id="prebidconducteddate" checked>
                    <label class="form-check-label" for="prebidconducteddate">Prebid Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_sobe_conducted_date" id="sobeconducteddate" checked>
                    <label class="form-check-label" for="sobeconducteddate">Sobe Conducted Date</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_no_bidder" id="nobidder" checked>
                    <label class="form-check-label" for="nobidder">No Bidder</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_pq_conducted_date" id="pqconducteddate" checked>
                    <label class="form-check-label" for="pqconducteddate">PQ Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_pqr_conducted_date" id="pqrconducteddate" checked>
                    <label class="form-check-label" for="pqrconducteddate">PQR Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_noa_conducted_date" id="noaconducteddate" checked>
                    <label class="form-check-label" for="noaconducteddate">NOA Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_ors_conducted_date" id="orsconducteddate" checked>
                    <label class="form-check-label" for="orsconducteddate">ORS Conducted Date</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_ntp_conducted_date" id="ntpconducteddate" checked>
                    <label class="form-check-label" for="ntpconducteddate">NTP Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_ntp_conforme_conducted_date" id="ntpconformeqconducteddate" checked>
                    <label class="form-check-label" for="ntpconformeqconducteddate">NTP Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_delivery_conducted_date" id="deliveryconducteddate" checked>
                    <label class="form-check-label" for="deliveryconducteddate">Delivery Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_ldd" id="ldd" checked>
                    <label class="form-check-label" for="ldd">LDD</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_inspected_conducted_date" id="inspectedconducteddate" checked>
                    <label class="form-check-label" for="inspectedconducteddate">Inspected Conducted Date</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_accepted_conducted_date" id="acceptedconducteddate" checked>
                    <label class="form-check-label" for="acceptedconducteddate">Accepted Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_dv" id="dv" checked>
                    <label class="form-check-label" for="dv">DV</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_amount" id="amount" checked>
                    <label class="form-check-label" for="amount">Amount</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_retention_percent" id="retentionpercent" checked>
                    <label class="form-check-label" for="retentionpercent">Retention Percent</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="retention_amount" id="retentionamount" checked>
                    <label class="form-check-label" for="retentionamount">Retention Amount</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_ld_amount" id="ldamount" checked>
                    <label class="form-check-label" for="ldamount">LD Amount</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_total" id="total" checked>
                    <label class="form-check-label" for="total">Total</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_twg" id="twg" checked>
                    <label class="form-check-label" for="twg">TWG</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_supplier" id="supplier" checked>
                    <label class="form-check-label" for="supplier">Supplier</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_created_date" id="createddate" checked>
                    <label class="form-check-label" for="createddate">Created Date</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_updated_date" id="updateddate" checked>
                    <label class="form-check-label" for="updateddate">Updated Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="col_created_by" id="createdby" checked>
                    <label class="form-check-label" for="createdby">Created By</label>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-header">
              <h3 class="card-title">Filters</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Status</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['project_status'] as $res) { ?>
                        <div class="custom-control">
                          <input class="form-check-input" id="status_<?= $res['id'] ?>" type="checkbox" name="project_status[]" value="<?= $res['id'] ?>">
                          <label for="status_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Commodity</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['comodity'] as $res) { ?>
                        <div class="custom-control">
                          <input class="form-check-input" id="commodity_<?= $res['id'] ?>" type="checkbox" name="commodity[]" value="<?= $res['id'] ?>">
                          <label for="commodity_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>End User</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['end_user'] as $res) { ?>
                        <div class="custom-control">
                          <input class="form-check-input" id="end_user_<?= $res['id'] ?>" type="checkbox" name="end_user[]" value="<?= $res['id'] ?>">
                          <label for="end_user_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Unit</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['unit'] as $res) { ?>
                        <div class="custom-control">
                          <input class="form-check-input" id="unit_<?= $res['id'] ?>" type="checkbox" name="unit[]" value="<?= $res['id'] ?>">
                          <label for="unit_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Mode of PROC</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['mode_of_proc'] as $res) { ?>
                        <div class="custom-control">
                          <input class="form-check-input" id="mode_of_proc_<?= $res['id'] ?>" type="checkbox" name="mode_of_proc[]" value="<?= $res['id'] ?>">
                          <label for="mode_of_proc_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>EPA</label>
                    <div class="form-group">
                      <div class="custom-control">
                        <input class="form-check-input" id="epa_1" type="checkbox" name="epa[]" value="1">
                        <label for="epa_1" class="form-check-label">Yes</label>
                      </div>
                      <div class="custom-control">
                        <input class="form-check-input" id="epa_0" type="checkbox" name="epa[]" value="0">
                        <label for="epa_0" class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>PABAC</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['pabac'] as $res) { ?>
                        <div class="custom-control">
                          <input id="pabac_<?= $res['id'] ?>" class="form-check-input" type="checkbox" name="pabac[]" value="<?= $res['id'] ?>">
                          <label for="pabac_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Program Manager</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['program_manager'] as $res) { ?>
                        <div class="custom-control">
                          <input id="progran_manager_<?= $res['id'] ?>" class="form-checkbox-input" type="checkbox" name="program_manager[]" value="<?= $res['id'] ?>">
                          <label for="progran_manager_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Implementing Unit</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['implementing_unit'] as $res) { ?>
                        <div class="custom-control">
                          <input id="implementing_unit_<?= $res['id'] ?>" class="form-check-input" type="checkbox" name="implementing_unit[]" value="<?= $res['id'] ?>">
                          <label for="implementing_unit_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>Created Date Range:</label>
                    <div class="input-group input-group-sm">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar"></i></span>
                      </div>
                      <input type="text" class="form-control float-right daterange" name="created_date">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm btn-dark float-right" name="download" id="download">Download</button>
              <button class="btn btn-sm btn-dark float-right mg-r" name="pdf" id="pdf">PDF</button>
            </div>
          </div>
          <!-- /.card -->
        </form>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
<script>
  $(function() {
    $("#download, #pdf").on("click", function(e) {
      e.preventDefault()
      parameters = $("#reportform").serialize() 
      var anchor = document.createElement('a')
      anchor.href = base_url+'layout/admin/content/report/download.php?'+parameters+'&type='+$(this).attr("name")
      anchor.target="_blank"
      anchor.click();
    })
  })

  $('.daterange').daterangepicker({
    locale: {
      format: 'DD-MM-YYYY'
    }
  });
</script>