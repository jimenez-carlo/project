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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Create Project</h3>
              <button type="submit" class="btn btn-sm btn-dark float-right" name="create" confirmation="Create New Project?">Create Project</button>
            </div>
            <!-- /.card-header -->
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
                        <input class="form-check-input" type="radio" name="epa" checked="" value="1">
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div class="form-check" style="width:15%">
                        <input class="form-check-input" type="radio" name="epa" value="0">
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
                    <textarea class="form-control form-control-sm" rows="2" name="pabac_nr" id="pabac_nr"></textarea>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*UPR Nr</label>
                    <textarea class="form-control form-control-sm" rows="2" name="upr_nr" id="upr_nr"></textarea>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Date of UPR:</label>
                    <div class="input-group datepicker" id="upr_date" data-target-input="nearest">
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
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>ASA NR</label>
                    <input type="text" class="form-control form-control-sm" name="asa_nr" id="asa_nr">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Date of ASA:</label>
                    <div class="input-group datepicker" id="asa_date" data-target-input="nearest">
                      <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#asa_date" name="asa_date" />
                      <div class="input-group-append" data-target="#asa_date" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Object Code</label>
                    <input type="text" class="form-control form-control-sm" name="object_code" id="object_code">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>ASA Amount</label>
                    <input type="text" class="form-control form-control-sm" name="asa_amount" id="asa_amount">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Expense Class</label>
                    <select class="form-control form-control-sm" name="expense_class" id="expense_class">
                      <?php foreach ($data['default']['expense_class'] as $res) { ?>
                        <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Project Description</label>
                    <input type="text" class="form-control form-control-sm" name="project_description" id="project_description">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Qty</label>
                    <input type="text" class="form-control form-control-sm" name="qty" id="qty">
                  </div>
                </div>
              </div>

              <div class="row">
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
                    <label>ABC</label>
                    <input type="text" class="form-control form-control-sm" name="abc" id="abc">
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>End User</label>
                    <input type="text" class="form-control form-control-sm" name="end_user" id="end_user">
                  </div>
                </div>
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
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Status</label>
                    <select class="form-control form-control-sm" name="project_status" id="project_status">
                      <?php foreach ($data['default']['project_status'] as $res) { ?>
                        <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!-- /.card-body -->
          </div>
          <!-- Supplier Cart -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Supplier Details</h3>
              <button type="button" class="btn btn-sm btn-dark float-right" id="add_supplier">Add Supplier</button>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <table id="example1" class="table table-bordered table-striped table-sm">
                    <thead>
                      <tr>
                        <th>SUPPLIER</th>
                        <th>BID Price</th>
                        <th>LC/Local</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody id="wrapper">

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- End Supplier -->
          <!-- Allied Documents -->
          <div class="card">
            <!-- Project Team -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Project Team
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
                        <?php foreach ($data['default']['users'] as $res) { ?>
                          <option value="<?= $res['id'] ?>"><?= strtoupper($res['name']) ?></option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>

                </div>
                <!-- End Allied Documents -->
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
  });

  var wrapper = $("#wrapper");
  var add_button = $("#add_supplier");

  $(add_button).click(function(e) {
    e.preventDefault();
    $(wrapper).append('<tr><td> <select name = "supplier[]" class="form-control form-control-sm"><?php foreach ($data['default']['supplier'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td> <td>  <input type="text" class="form-control form-control-sm" name="bid_price[]"> </td><td> <select name = "local[]" class="form-control form-control-sm"><?php foreach ($data['default']['local'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');
  });

  $(wrapper).on("click", ".btn-remove-user", function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
  })
</script>