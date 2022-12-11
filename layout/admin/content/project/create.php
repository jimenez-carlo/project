<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Reference No#<?= $data['default_id']  ?> - <?= $data['default']['set_status'][1] ?></h1>
        </div><!-- /.col -->

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

        <form method="post" name="project_create" enctype="multipart/form-data" refresh="<?= ($_SESSION['user']->access_id != 1) ? 'admin/project/my_list&id' . $_SESSION['user']->id : '' ?>">
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
                    <label>PABAC</label>
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
                    <label>PABAC Nr</label>
                    <input type="text" class="form-control form-control-sm" name="pabac_nr" id="pabac_nr">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>UPR Nr</label>
                    <input type="text" class="form-control form-control-sm" name="upr_nr" id="upr_nr">
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Date of UPR:</label>
                    <input type="text" class="form-control form-control-sm datepicker" name="upr_date" id="upr_date">

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
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>GAA</label>
                    <input type="text" class="form-control form-control-sm" name="gaa" id="gaa">
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
                    <label>Contract Nr</label>
                    <input type="text" class="form-control form-control-sm" name="contract_nr" id="contract_nr">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*ABC</label>
                    <input type="text" class="form-control form-control-sm currency" name="abc" id="abc">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Contract Price</label>
                    <input type="text" class="form-control form-control-sm currency" name="contract_price" id="contract_price">
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label>End User</label>
                    <select class="form-control form-control-sm select2bs4" name="end_user[]" id="end_user" multiple="multiple">
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
                    <select class="form-control form-control-sm" name="mode_of_proc" id="mode_of_proc">
                      <?php foreach ($data['default']['mode_of_proc'] as $res) { ?>
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
                    <select class="form-control select2bs4 form-control-sm" name="assigned_officer[]" id="assigned_officer" multiple="multiple">
                      <?php foreach ($data['default']['officers'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" selected><?= strtoupper($res['name']) ?></option>
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
                        <option value="<?= $res['id'] ?>" <?= ($_SESSION['user']->id == $res['id'] && $_SESSION['user']->access_id == 2) ? 'selected' : '' ?>><?= strtoupper($res['name']) ?></option>
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
  $('.currency').maskMoney({
    allowZero: true,
  });

  $('.multidate').datepicker({
    format: "dd-mm-yyyy",
    multidate: true
  });
  //Date picker
  $('.datepicker').datepicker({
    format: "dd-mm-yyyy",
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


  $('.daterange').daterangepicker({
    locale: {
      format: 'DD-MM-YYYY'
    }
  });


  // $(document).on("change", "input[name='epa']:checked", function(e) {
  //   console.log($(this).val());
  //   if ($('input[name="epa"]:checked').val() == 1) {
  //     $('#asa_table').hide();
  //     $(add_button3).hide();
  //   } else {
  //     $('#asa_table').show();
  //     $(add_button3).show();
  //   }
  // })

  $(window).scroll(function() {
    $('#show').addClass('scrolled', $(this).scrollTop() > 100);
  });
</script>