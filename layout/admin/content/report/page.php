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

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Select Columns</h3>
          </div>
          <!-- /.card-header -->
          <form method="get" id="reportform" enctype="multipart/form-data" action="../project/layout/admin/content/report/download.php">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="status" id="status" checked>
                    <label class="form-check-label" for="status">Status</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="epa" id="epa" checked>
                    <label class="form-check-label" for="epa">EPA</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="emplementing_unit" id="eu" checked>
                    <label class="form-check-label" for="eu">Emplementing Unit</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="pabac" id="pabac" checked>
                    <label class="form-check-label" for="pabac">PABAC</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="pabac_nr" id="pabacnr" checked>
                    <label class="form-check-label" for="pabacnr">PABAC NR</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="upr_nr" id="uprnr" checked>
                    <label class="form-check-label" for="uprnr">UPR NR</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="commodity" id="commodity" checked>
                    <label class="form-check-label" for="commodity">Commodity</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="program_manager" id="programmanager" checked>
                    <label class="form-check-label" for="programmanager">Program Manager</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="project_description" id="projectdescription" checked>
                    <label class="form-check-label" for="projectdescription">Project Description</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="quantity" id="quantity" checked>
                    <label class="form-check-label" for="quantity">Quantity</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="unit" id="unit" checked>
                    <label class="form-check-label" for="unit">Unit</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="abc" id="abc" checked>
                    <label class="form-check-label" for="abc">ABC</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="contract_nr" id="contractnr" checked>
                    <label class="form-check-label" for="contractnr">Contract NR</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="contract_price" id="contractprice" checked>
                    <label class="form-check-label" for="contractprice">Contract Price</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="residuals" id="residuals" checked>
                    <label class="form-check-label" for="residuals">Residuals</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="end_user" id="enduser" checked>
                    <label class="form-check-label" for="enduser">End User</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="mode_of_proc" id="modeofproc" checked>
                    <label class="form-check-label" for="modeofproc">Mode of Proc</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="preproc_conducted_date" id="preprocconducteddate" checked>
                    <label class="form-check-label" for="preprocconducteddate">Preproc Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="prebid_conducted_date" id="prebidconducteddate" checked>
                    <label class="form-check-label" for="prebidconducteddate">Prebid Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="sobe_conducted_date" id="sobeconducteddate" checked>
                    <label class="form-check-label" for="sobeconducteddate">Sobe Conducted Date</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="no_bidder" id="nobidder" checked>
                    <label class="form-check-label" for="nobidder">No Bidder</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="pq_conducted_date" id="pqconducteddate" checked>
                    <label class="form-check-label" for="pqconducteddate">PQ Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="pqr_conducted_date" id="pqrconducteddate" checked>
                    <label class="form-check-label" for="pqrconducteddate">PQR Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="noa_conducted_date" id="noaconducteddate" checked>
                    <label class="form-check-label" for="noaconducteddate">NOA Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="ors_conducted_date" id="orsconducteddate" checked>
                    <label class="form-check-label" for="orsconducteddate">ORS Conducted Date</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="ntp_conducted_date" id="ntpconducteddate" checked>
                    <label class="form-check-label" for="ntpconducteddate">NTP Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="ntp_conforme_conducted_date" id="ntpconformeqconducteddate" checked>
                    <label class="form-check-label" for="ntpconformeqconducteddate">NTP Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="delivery_conducted_date" id="deliveryconducteddate" checked>
                    <label class="form-check-label" for="deliveryconducteddate">Delivery Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="ldd" id="ldd" checked>
                    <label class="form-check-label" for="ldd">LDD</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="inspected_conducted_date" id="inspectedconducteddate" checked>
                    <label class="form-check-label" for="inspectedconducteddate">Inspected Conducted Date</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="accepted_conducted_date" id="acceptedconducteddate" checked>
                    <label class="form-check-label" for="acceptedconducteddate">Accepted Conducted Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="dv" id="dv" checked>
                    <label class="form-check-label" for="dv">DV</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="amount" id="amount" checked>
                    <label class="form-check-label" for="amount">Amount</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="retention_percent" id="retentionpercent" checked>
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
                    <input class="form-check-input" type="checkbox" name="ld_amount" id="ldamount" checked>
                    <label class="form-check-label" for="ldamount">LD Amount</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="total" id="total" checked>
                    <label class="form-check-label" for="total">Total</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="twg" id="twg" checked>
                    <label class="form-check-label" for="twg">TWG</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="created_date" id="createddate" checked>
                    <label class="form-check-label" for="createddate">Created Date</label>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="updated_date" id="updateddate" checked>
                    <label class="form-check-label" for="updateddate">Updated Date</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-2 offset-sm-1">
                  <div class="form-group">
                    <input class="form-check-input" type="checkbox" name="created_by" id="createdby" checked>
                    <label class="form-check-label" for="createdby">Created By</label>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Date Created From:</label>
                    <div class="input-group input-group-sm datepicker" id="report_created_from" data-target-input="nearest">
                      <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#report_created_from" name="date_created_from" />
                      <div class="input-group-append" data-target="#report_created_from" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Date Created To:</label>
                    <div class="input-group input-group-sm datepicker" id="report_created_to" data-target-input="nearest">
                      <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#report_created_to" name="date_created_to" />
                      <div class="input-group-append" data-target="#report_created_to" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button class="btn btn-sm btn-dark float-right" id="download">Download</button>
            </div>
          </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>

<script>
  $(function() {
    $("#download").on("click", function(e) {
      e.preventDefault()
      parameters = $("#reportform").serialize() 
      var anchor = document.createElement('a')
      anchor.href = base_url+'layout/admin/content/report/download.php?'+parameters
      anchor.target="_blank"
      anchor.click();
    })
  })
  $('.datepicker').datetimepicker({
    format: 'yyyy-MM-DD'
  });
</script>