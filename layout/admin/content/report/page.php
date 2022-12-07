<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Project</h1>
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
                <div class="col-sm-4">
                  <div class="form-group offset-sm-1">
                    <input class="form-check-input" type="checkbox" id="select_all_columns" checked>
                    <label class="form-check-label" for="select_all_columns">Select All</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_reference" id="reference" checked>
                    <label class="form-check-label" for="reference">REFERENCE#</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_epa" id="epa" checked>
                    <label class="form-check-label" for="epa">EPA</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_implementing_unit" id="eu" checked>
                    <label class="form-check-label" for="eu">IMPLEMENTING UNIT</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_pabac" id="pabac" checked>
                    <label class="form-check-label" for="pabac">PABAC</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_pabac_nr" id="pabacnr" checked>
                    <label class="form-check-label" for="pabacnr">PABAC NR</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_upr_nr" id="uprnr" checked>
                    <label class="form-check-label" for="uprnr">UPR NR</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_upr_date" id="upr_date" checked>
                    <label class="form-check-label" for="upr_date">UPR DATE</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_commodity" id="commodity" checked>
                    <label class="form-check-label" for="commodity">COMMODITY</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_program_manager" id="programmanager" checked>
                    <label class="form-check-label" for="programmanager">PROGRAM MANAGER</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_asa_nr" id="asa_nr" checked>
                    <label class="form-check-label" for="asa_nr">ASA NR</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_asa_date" id="asa_date" checked>
                    <label class="form-check-label" for="asa_date">DATE OF ASA</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_asa_object_code" id="asa_object_code" checked>
                    <label class="form-check-label" for="asa_object_code">ASA OBJECT CODE</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_asa_amount" id="asa_amount" checked>
                    <label class="form-check-label" for="asa_amount">ASA AMOUNT</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_asa_expense_class" id="asa_expense_class" checked>
                    <label class="form-check-label" for="asa_expense_class">ASA Expense Class</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_contract_nr" id="contractnr" checked>
                    <label class="form-check-label" for="contractnr">CONTRACT NR</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_project_description" id="projectdescription" checked>
                    <label class="form-check-label" for="projectdescription">PROJECT DESCRIPTION</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_quantity" id="quantity" checked>
                    <label class="form-check-label" for="quantity">QUANTITY</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_unit" id="unit" checked>
                    <label class="form-check-label" for="unit">UNIT</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_abc" id="abc" checked>
                    <label class="form-check-label" for="abc">ABC</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_contract_price" id="contractprice" checked>
                    <label class="form-check-label" for="contractprice">CONTRACT PRICE</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_residuals" id="residuals" checked>
                    <label class="form-check-label" for="residuals">RESIDUALS</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_end_user" id="enduser" checked>
                    <label class="form-check-label" for="enduser">END USER</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_mode_of_proc" id="modeofproc" checked>
                    <label class="form-check-label" for="modeofproc">MODE OF PROCUREMENT</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_preproc_conducted_date" id="preprocconducteddate" checked>
                    <label class="form-check-label" for="preprocconducteddate">PRE-PROC</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_prebid_conducted_date" id="prebidconducteddate" checked>
                    <label class="form-check-label" for="prebidconducteddate">PRE-BID</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_sobe_conducted_date" id="sobeconducteddate" checked>
                    <label class="form-check-label" for="sobeconducteddate">SOBE</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_pq_conducted_date" id="pqconducteddate" checked>
                    <label class="form-check-label" for="pqconducteddate">PQ</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_pqr_conducted_date" id="pqrconducteddate" checked>
                    <label class="form-check-label" for="pqrconducteddate">PQR</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_noa_conducted_date" id="noaconducteddate" checked>
                    <label class="form-check-label" for="noaconducteddate">NOA</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_ors_conducted_date" id="orsconducteddate" checked>
                    <label class="form-check-label" for="orsconducteddate">ORS</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_ntp_conducted_date" id="ntpconducteddate" checked>
                    <label class="form-check-label" for="ntpconducteddate">NTP</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_ntp_conforme_conducted_date" id="ntpconformeqconducteddate" checked>
                    <label class="form-check-label" for="ntpconformeqconducteddate">NTP CONFORME</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_delivery_period" id="delivery_period" checked>
                    <label class="form-check-label" for="delivery_period">DELIVERY PERIOD</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_ldd" id="ldd" checked>
                    <label class="form-check-label" for="ldd">LDD</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_delivery_conducted_date" id="deliveryconducteddate" checked>
                    <label class="form-check-label" for="deliveryconducteddate">DELIVERY</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_inspected_conducted_date" id="inspectedconducteddate" checked>
                    <label class="form-check-label" for="inspectedconducteddate">INSPECTED</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_accepted_conducted_date" id="acceptedconducteddate" checked>
                    <label class="form-check-label" for="acceptedconducteddate">ACCEPTED DATE</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_dv" id="dv" checked>
                    <label class="form-check-label" for="dv">DV/CHECK</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="retention_amount" id="retentionamount" checked>
                    <label class="form-check-label" for="retentionamount">RETENTION AMOUNT</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_ld_amount" id="ldamount" checked>
                    <label class="form-check-label" for="ldamount">LD AMOUNT</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1 column">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_total" id="total" checked>
                    <label class="form-check-label" for="total">TOTAL</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_supplier" id="supplier" checked>
                    <label class="form-check-label" for="supplier">SUPPLIER</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_bid_price" id="bid_price" checked>
                    <label class="form-check-label" for="bid_price">BID PRICE</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_lc_local" id="lc_local" checked>
                    <label class="form-check-label" for="lc_local">LC/LOCAL</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_twg" id="twg" checked>
                    <label class="form-check-label" for="twg">TWG</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input column" type="checkbox" name="col_authority" id="authority" checked>
                    <label class="form-check-label" for="authority">AUTHORITY</label>
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
                  <div class="form-group offset-sm-1">
                    <input class="form-check-input" type="checkbox" id="select_all_filters">
                    <label class="form-check-label" for="select_all_filters">Select All</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>EPA</label>
                    <div class="custom-control">
                      <input class="form-check-input filter" id="epa_1" type="checkbox" name="epa[]" value="1">
                      <label for="epa_1" class="form-check-label">Yes</label>
                    </div>
                    <div class="custom-control">
                      <input class="form-check-input filter" id="epa_0" type="checkbox" name="epa[]" value="0">
                      <label for="epa_0" class="form-check-label">No</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>IMPLEMENTING UNIT</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['implementing_unit'] as $res) { ?>
                        <div class="custom-control">
                          <input id="implementing_unit_<?= $res['id'] ?>" class="form-check-input filter" type="checkbox" name="implementing_unit[]" value="<?= $res['id'] ?>">
                          <label for="implementing_unit_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>PROGRAM MANAGER</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['program_manager'] as $res) { ?>
                        <div class="custom-control">
                          <input id="progran_manager_<?= $res['id'] ?>" class="form-checkbox-input filter" type="checkbox" name="program_manager[]" value="<?= $res['id'] ?>">
                          <label for="progran_manager_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>PABAC</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['pabac'] as $res) { ?>
                        <div class="custom-control">
                          <input id="pabac_<?= $res['id'] ?>" class="form-check-input filter" type="checkbox" name="pabac[]" value="<?= $res['id'] ?>">
                          <label for="pabac_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>END USER</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['end_user'] as $res) { ?>
                        <div class="custom-control">
                          <input class="form-check-input filter" id="end_user_<?= $res['id'] ?>" type="checkbox" name="end_user[]" value="<?= $res['id'] ?>">
                          <label for="end_user_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group">
                    <label>COMMODITY</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['comodity'] as $res) { ?>
                        <div class="custom-control">
                          <input class="form-check-input filter" id="commodity_<?= $res['id'] ?>" type="checkbox" name="commodity[]" value="<?= $res['id'] ?>">
                          <label for="commodity_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>MODE OF PROC</label>
                    <div class="form-group">
                      <?php foreach ($data['default']['mode_of_proc'] as $res) { ?>
                        <div class="custom-control">
                          <input class="form-check-input filter" id="mode_of_proc_<?= $res['id'] ?>" type="checkbox" name="mode_of_proc[]" value="<?= $res['id'] ?>">
                          <label for="mode_of_proc_<?= $res['id'] ?>" class="form-check-label"><?= $res['name'] ?></label>
                        </div>
                      <?php } ?>
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

  $("#select_all_columns, #select_all_filters").click(function(){
    var input_class_name = $(this).attr("id") == "select_all_columns" ? '.column' : '.filter';
    $(input_class_name).not(this).prop('checked', this.checked);
  })

  $('.daterange').daterangepicker({
    locale: {
      format: 'DD-MM-YYYY'
    }
  });
</script>