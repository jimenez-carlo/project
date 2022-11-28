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

        <form method="post" name="project_create" refresh="admin/project/create" enctype="multipart/form-data">
          <button type="button" class="btn btn-dark pull-right" data-toggle="modal" data-target="#create_modal" style="right: 20px;z-index: 99;position: fixed;bottom: 20px;">Create Project</button>
          <input type="submit" name="create" id="create" confirmation="Create New Project?" style="display:none">
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
                    <input type="text" class="form-control form-control-sm" name="reference_no" disabled value="<?= $data['default_id'] ?>">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*EPA</label>
                    <div class="form-group" style="display:flex">
                      <div class="form-check" style="width:15%">
                        <input class="form-check-input" type="radio" name="epa" value="1">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div class="form-check" style="width:15%">
                        <input class="form-check-input" type="radio" name="epa" checked="" value="0">
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
                        <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*PABAC</label>
                    <select class="form-control form-control-sm" name="pabac" id="pabac">
                      <?php foreach ($data['default']['pabac'] as $res) { ?>
                        <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*PABAC Nr</label>
                    <input type="text" class="form-control form-control-sm" name="pabac_nr" id="pabac_nr">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*UPR Nr</label>
                    <input type="text" class="form-control form-control-sm" name="upr_nr" id="upr_nr">
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Date of UPR:</label>
                    <div class="input-group input-group-sm datepicker" id="upr_date" data-target-input="nearest">
                      <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#upr_date" name="upr_date" />
                      <div class="input-group-append" data-target="#upr_date" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Comodity</label>
                    <select class="form-control form-control-sm" name="comodity" id="comodity">
                      <?php foreach ($data['default']['comodity'] as $res) { ?>
                        <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
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
                        <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
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
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Project Description</label>
                    <textarea class="form-control form-control-sm" rows="2" name="project_description" id="project_description"></textarea>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Qty</label>
                    <input type="text" class="form-control form-control-sm" name="qty" id="qty">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Unit</label>
                    <select class="form-control form-control-sm" name="unit" id="unit">
                      <?php foreach ($data['default']['unit'] as $res) { ?>
                        <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>End User</label>
                    <select class="form-control input-sm select2bs4" name="end_user[]" id="end_user" multiple="multiple">
                      <?php foreach ($data['default']['end_user'] as $res) { ?>
                        <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Mode Of Proc</label>
                    <div class="form-group" style="display:flex">
                      <div class="form-check" style="width:50%">
                        <input class="form-check-input" type="radio" name="mode_of_proc" checked="" value="1">
                        <label class="form-check-label">PUBLIC BIDDING</label>
                      </div>
                      <div class="form-check" style="width:25%">
                        <input class="form-check-input" type="radio" name="mode_of_proc" value="2">
                        <label class="form-check-label">NEGOTATION</label>
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
                Allied Documents
              </h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label for="app_file">APP/IAPP/AAPP</label>
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
                    <label for="ppmp_file">PPMP/APPMP
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
                    <label for="procurement_file">Procurement Directive
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
                    <label for="tech_specs_file">Tech Specs
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
                    <label for="bidding_file">Bidding Directive
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
                    <label for="upr_file">UPR
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
                    <label for="other_file">Other Documents
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
                      <?php foreach ($data['default']['users'] as $res) { ?>
                        <option value="<?= $res['id'] ?>"><?= strtoupper($res['name']) ?></option>
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
                        <option value="<?= $res['id'] ?>"><?= strtoupper($res['name']) ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php include_once('layout/admin/content/project/modal/create.php') ?>
        </form>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</div>
<script>
  //Date picker
  $('.datepicker').datetimepicker({
    format: 'yyyy-MM-DD'
  });
  $(function() {
    bsCustomFileInput.init();
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    $("input[name='epa']").trigger("change");
  });


  var wrapper3 = $("#wrapper3");
  var add_button3 = $("#add_asa");

  $(add_button3).click(function(e) {
    e.preventDefault();
    var tmp = $('.asa_date').length
    tmp++;
    $(wrapper3).append('<tr><td> <input type="text" class="form-control form-control-sm" name="asa_nr[]"></td><td> <div class="input-group input-group-sm datepicker asa_date" id="asa_date_' + tmp + '" data-target-input="nearest"><input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#asa_date_' + tmp + '" name="asa_date_' + tmp + '" /><div class="input-group-append" data-target="#asa_date_' + tmp + '" data-toggle="datetimepicker"><div class="input-group-text"><i class="fa fa-calendar"></i></div></div></div></td></td> <td>  <input type="text" class="form-control form-control-sm" name="asa_object[]"> </td><td> <input type="text" class="form-control form-control-sm" name="asa_amount[]"> </td><td> <select name = "asa_expense_class[]" class="form-control form-control-sm"><?php foreach ($data['default']['expense_class'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');

    $('.datepicker').datetimepicker({
      format: 'yyyy-MM-DD'
    });
  });

  $(wrapper3).on("click", ".btn-remove-user", function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
  })


  $('.daterange').daterangepicker();


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

  $(window).scroll(function() {
    $('#show').addClass('scrolled', $(this).scrollTop() > 100);
  });
</script>