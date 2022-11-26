<?php $default = $data['default_data'];  ?>
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

        <form method="post" name="project_edit" refresh="admin/project/edit&id=<?= $default->id ?>" enctype="multipart/form-data">
          <div class="card card-dark card-outline card-tabs">
            <div class="card-header p-0 pt-1 border-bottom-0">
              <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="tab1-tab" data-toggle="pill" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Project</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab2-tab" data-toggle="pill" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Allied Documents</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab3-tab" data-toggle="pill" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">PMO Project Team</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab4-tab" data-toggle="pill" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Supplier Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab5-tab" data-toggle="pill" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Delivery Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="tab6-tab" data-toggle="pill" href="#tab6" role="tab" aria-controls="tab6" aria-selected="false">TWG</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content" id="custom-tabs-three-tabContent">
                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
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
                        <div class="input-group datepicker" id="upr_date" data-target-input="nearest">
                          <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#upr_date" name="upr_date" value="<?= $default->upr_date ?>" />
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
                        <label>ASA NR</label>
                        <input type="text" class="form-control form-control-sm" name="asa_nr" id="asa_nr" value="<?= $default->asa_nr ?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Date of ASA:</label>
                        <div class="input-group datepicker" id="asa_date" data-target-input="nearest">
                          <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#asa_date" name="asa_date" value="<?= $default->asa_date ?>" />
                          <div class="input-group-append" data-target="#asa_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Object Code</label>
                        <input type="text" class="form-control form-control-sm" name="object_code" id="object_code" value="<?= $default->object_code ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>ASA Amount</label>
                        <input type="text" class="form-control form-control-sm" name="asa_amount" id="asa_amount" value="<?= $default->asa_amount ?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Expense Class</label>
                        <select class="form-control form-control-sm" name="expense_class" id="expense_class">
                          <?php foreach ($data['default']['expense_class'] as $res) { ?>
                            <option value="<?= $res['id'] ?>" <?= $default->expense_class_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
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
                  </div>

                  <div class="row">
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
                        <label>ABC</label>
                        <input type="text" class="form-control form-control-sm" name="abc" id="abc" value="<?= $default->abc ?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>End User</label>
                        <input type="text" class="form-control form-control-sm" name="end_user" id="end_user" value="<?= $default->end_user ?>">
                      </div>
                    </div>
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
                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="app_file">APP/IAPP/AAPP (<a href="files/app/<?= $default->app_file ?>" download>Download</a>)
                        </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="app_file" name="app_file">
                            <label class="custom-file-label" for="app_file">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="ppmp_file">PPMP/APPMP (<a href="files/ppmp/<?= $default->ppmp_file ?>" download>Download</a>)
                        </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="ppmp_file" name="ppmp_file">
                            <label class="custom-file-label" for="ppmp_file">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="procurement_file">Procurement Directive (<a href="files/procurement/<?= $default->procurement_file ?>" download>Download</a>)
                        </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="procurement_file" name="procurement_file">
                            <label class="custom-file-label" for="procurement_file">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="tech_specs_file">Tech Specs (<a href="files/tech/<?= $default->tech_specs_file ?>" download>Download</a>)

                        </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tech_specs_file" name="tech_specs_file">
                            <label class="custom-file-label" for="tech_specs_file">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="bidding_file">Bidding Directive (<a href="files/bidding/<?= $default->bidding_file ?>" download>Download</a>)
                        </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="bidding_file" name="bidding_file">
                            <label class="custom-file-label" for="bidding_file">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="upr_file">UPR (<a href="files/upr/<?= $default->upr_file ?>" download>Download</a>)
                        </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="upr_file" name="upr_file">
                            <label class="custom-file-label" for="upr_file">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label for="other_file">Other Documents (<a href="files/other/<?= $default->other_file ?>" download>Download</a>)
                        </label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="other_file" name="other_file">
                            <label class="custom-file-label" for="other_file">Choose file</label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>*Assigned Officer
                        </label>
                        <select class="form-control select2bs4 form-control-sm" name="assigned_officer" id="assigned_officer">
                          <?php foreach ($data['default']['users'] as $res) { ?>
                            <option value="<?= $res['id'] ?>" <?= $default->expense_class_id == $res['id'] ? 'selected' : '' ?>><?= strtoupper($res['name']) ?></option>
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
                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                  <div class="col-sm-12">
                    <button type="button" class="btn btn-sm btn-dark float-right" id="add_supplier">Add Supplier</button>
                    <table id="example1" class="table table-bordered table-striped table-sm">
                      <thead>
                        <tr>
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
                              <select name="supplier[]" class="form-control form-control-sm">
                                <?php foreach ($data['default']['supplier'] as $subres) { ?>
                                  <option value="<?= $subres['id']; ?>" <?= $res['supplier_id'] == $subres['id'] ? 'selected' : '' ?>> <?php echo $subres['name'] ?> </option>
                                <?php } ?>
                              </select>
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
                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Delivery Period:</label>
                        <input type="number" class="form-control form-control-sm" name="delivery_period" value="<?= $default->delivery_period ?>">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>LDD:</label>
                        <div class="input-group datepicker" id="ldd" data-target-input="nearest">
                          <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#ldd" name="ldd" value="<?= $default->ldd ?>" />
                          <div class="input-group-append" data-target="#ldd" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>DV/Check:</label>
                        <div class="form-group" style="display:flex">
                          <div class="form-check" style="width:15%">
                            <input class="form-check-input" type="radio" name="dv" value="1" <?= ($default->dv) ? 'checked' : '' ?>>
                            <label class="form-check-label">Yes</label>
                          </div>
                          <div class="form-check" style="width:15%">
                            <input class="form-check-input" type="radio" name="dv" value="0" <?= ($default->dv) ? 'checked' : '' ?>>
                            <label class="form-check-label">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Amount</label>
                        <input type="number" class="form-control form-control-sm" name="amount" value="<?= $default->amount ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Date:</label>
                        <div class="input-group datepicker" id="delivery_date" data-target-input="nearest">
                          <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#delivery_date" name="delivery_date" value="<?= $default->delivery_date ?>" />
                          <div class="input-group-append" data-target="#delivery_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Retention</label>
                        <input type="text" class="form-control form-control-sm" name="retention" value="<?= $default->retention ?>">
                      </div>
                    </div>

                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Date:</label>
                        <div class="input-group datepicker" id="retention_date" data-target-input="nearest">
                          <input type="text" class="form-control form-control-sm datetimepicker-input" data-target="#retention_date" name="retention_date" value="<?= $default->retention_date ?>" />
                          <div class="input-group-append" data-target="#retention_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-group">
                        <label>Total</label>
                        <input type="number" class="form-control form-control-sm" name="total" value="<?= $default->total ?>">
                      </div>
                    </div>
                  </div>

                </div>
                <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                  <div class="col-sm-12">
                    <button type="button" class="btn btn-sm btn-dark float-right" id="add_entry">Add Entry</button>
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
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody id="wrapper2">
                        <?php foreach ($data['twgs'] as $res) { ?>
                          <tr>
                            <td>
                              <select name="rank[]" class="form-control form-control-sm">
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
              <!-- /.card -->
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-sm btn-dark pull-right" name="edit" confirmation="Save Project Changes?">Update Project</button>
            </div>

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
    $(wrapper).append('<tr><td> <select name = "supplier[]" class="form-control form-control-sm"><?php foreach ($data['default']['supplier'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td> <td>  <input type="text" class="form-control form-control-sm" name="bid_price[]"> </td><td> <select name = "local[]" class="form-control form-control-sm"><?php foreach ($data['default']['local'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td> <select name = "supplier_status[]" class="form-control form-control-sm"><?php foreach ($data['default']['supplier_status'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');
  });

  $(wrapper).on("click", ".btn-remove-user", function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
  })

  var wrapper2 = $("#wrapper2");
  var add_button2 = $("#add_entry");

  $(add_button2).click(function(e) {
    e.preventDefault();
    console.log('cliked');
    $(wrapper2).append('<tr><td> <select name = "rank[]" class="form-control form-control-sm"><?php foreach ($data['default']['rank'] as $res) { ?> <option value="<?= $res['id']; ?>" style="color:<?= $res['color'] ?>"> <?php echo $res['name'] ?> </option><?php } ?> </select> </td> <td><input type="text" class="form-control form-control-sm" name="last_name[]"></td> <td><input type="text" class="form-control form-control-sm" name="first_name[]"></td> <td><input type="text" class="form-control form-control-sm" name="middle_name[]"></td>   <td> <select name="suffix[]" class="form-control form-control-sm"><?php foreach ($data['default']['suffix'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td> <select name = "branch[]" class="form-control form-control-sm"><?php foreach ($data['default']['branch'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><input type="text" class="form-control form-control-sm" name="serial_no[]"></td><td> <select name = "designation[]" class="form-control form-control-sm"><?php foreach ($data['default']['designation'] as $res) { ?> <option value="<?= $res['id']; ?>" > <?php echo $res['name'] ?> </option><?php } ?> </select> </td><td><button type ="button" class="btn btn-dark btn-remove-user btn-sm" > <i class="fa fa-times"></i> </button></td> </tr>');
  });

  $(wrapper2).on("click", ".btn-remove-user", function(e) {
    e.preventDefault();
    $(this).parent().parent().remove();
  })
</script>