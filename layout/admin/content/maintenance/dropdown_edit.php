<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Maintenance Dropdown</h1>
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
            <h3 class="card-title">Edit <?= $table_title ?> # <?= $default->id ?> </h3>
          </div>
          <!-- /.card-header -->
          <form method="post" name="dropdown_update" refresh="admin/maintenance/dropdown/edit&table=<?= urlencode(strtoupper($table_title)) ?>&id=<?= $default->id ?>">
            <input type="hidden" name="dropdown_name" value="<?= strtoupper($table_title) ?>">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>ID</label>
                    <input type="text" class="form-control form-control-sm" name="id" value="<?= $default->id ?>" readonly>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control form-control-sm" placeholder="Name" name="dropdown_value" value="<?= $default->name ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-sm btn-dark float-right" name="edit" confirmation="Save New Changes?">Save Changes</button>
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