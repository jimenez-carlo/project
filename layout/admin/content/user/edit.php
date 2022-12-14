<?php $default = $data['default_data'];  ?>
<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">User Settings</h1>
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
            <h3 class="card-title">Edit User # <?= $default->id ?> </h3>

          </div>
          <!-- /.card-header -->
          <form method="post" name="user_update" refresh="admin/user/edit&id=<?= $default->id ?>">
            <input type="hidden" name="id" value="<?= $default->id ?>">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*First Name</label>
                    <input type="text" class="form-control form-control-sm" placeholder="First Name" name="first_name" value="<?= $default->first_name ?>" <?= $_SESSION['user']->access_id != 1 ? "disabled" : "" ?>>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Middle Name" name="middle_name" value="<?= $default->middle_name ?>" <?= $_SESSION['user']->access_id != 1 ? "disabled" : "" ?>>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Last Name</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Last Name" name="last_name" value="<?= $default->last_name ?>" <?= $_SESSION['user']->access_id != 1 ? "disabled" : "" ?>>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Suffix</label>
                    <select class="form-control form-control-sm" name="suffix" id="suffix" <?= $_SESSION['user']->access_id != 1 ? "disabled" : "" ?>>
                      <?php foreach ($data['default']['suffix'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->suffix_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Serial No#</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Serial No" name="serial_no" value="<?= $default->serial_no ?>" <?= $_SESSION['user']->access_id != 1 ? "disabled" : "" ?>>
                  </div>
                </div>

                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Branch of Service</label>
                    <select class="form-control form-control-sm" name="branch" id="branch" <?= $_SESSION['user']->access_id != 1 ? "disabled" : "" ?>>
                      <?php foreach ($data['default']['branch'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->branch_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Rank</label>
                    <select class="form-control form-control-sm" name="rank" id="rank" <?= $_SESSION['user']->access_id != 1 ? "disabled" : "" ?>>
                      <?php foreach ($data['default']['rank'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" style="color:<?= $res['color'] ?>" <?= $default->rank_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Role</label>
                    <select class="form-control form-control-sm" name="access" id="access" <?= $_SESSION['user']->access_id != 1 ? "disabled" : "" ?>>
                      <?php foreach ($data['default']['access'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->access_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Status</label>
                    <select class="form-control form-control-sm" name="status" id="status" <?= $_SESSION['user']->access_id != 1 ? "disabled" : "" ?>>
                      <?php foreach ($data['default']['user_status'] as $res) { ?>
                        <option value="<?= $res['id'] ?>" <?= $default->status_id == $res['id'] ? 'selected' : '' ?>><?= $res['name'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
              <?php if($_SESSION['user']->access_id == 1): ?> 
                <div class="col-sm-3">
                  <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="reset_password">
                    <label>Reset Password</label>
                  </div>
                </div>
              <?php endif; ?>
                <!--
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Password</label>
                    <input type="password" class="form-control form-control-sm" placeholder="Password" name="password">
                  </div>
                </div>
              </div>
                -->

            </div>
            <div class="card-footer">
              <?php if($_SESSION['user']->access_id == 1): ?> 
              <button type="submit" class="btn btn-sm btn-dark float-right" name="edit" confirmation="Save New Changes?">Save Changes</button>
              <?php endif; ?>
              <?php if (!$default->verified_flag) { ?>
                <button type="submit" class="btn btn-sm btn-dark float-right mg-r" name="verify" value="1" confirmation="Verify This User?">Verify</button>
              <?php } else { ?>
                <button type="button" class="btn btn-sm btn-dark float-right mg-r" disabled>Verified</button>
              <?php } ?>
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
</div>