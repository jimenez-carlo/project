<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dropdown</h1>
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
            <h3 class="card-title">Add Dropdown Values</h3>

          </div>
          <!-- /.card-header -->
          <form method="post" name="dropdown_create" refresh="admin/maintenance/dropdown">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Dropdown List</label>
                    <select class="form-control form-control-sm" name="dropdown_id">
                      <option value="PABAC">PABAC</option>
                      <!--
                      <?php foreach ($data['dropdowns'] as $dropdown) { ?>
                        <option value="<?= $dropdown['id'] ?>"><?= $dropdown['name'] ?></option>
                      <?php } ?>
                      -->
                    </select>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>*Value</label>
                    <input type="text" class="form-control form-control-sm" placeholder="" name="dropdown_value" required>
                  </div>
                </div>
                <div class="col-sm-3">
              </div>

            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-sm btn-dark float-right" name="create" confirmation="You Are About To Add PABAC">Add</button>
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
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div id="result">
        </div>

        <div class="card">
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Created</th>
                  <th>Update</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['list'] as $res) { ?>
                  <tr>
                    <td><?= $res['id'] ?></td>
                    <td><?= $res['name'] ?></td>
                    <td><?= $res['created_date'] ?></td>
                    <td><?= $res['updated_date'] ?></td>
                  </tr>
                <?php } ?>
              </tbody>

            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
</div>