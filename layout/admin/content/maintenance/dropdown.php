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
          <form method="post" name="dropdown_create" refresh="admin/maintenance/dropdown&table=<?= urlencode(strtoupper($data['table_title'])) ?>">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group">
                    <label>Dropdown List</label>
                    <select id="dp_name" class="form-control form-control-sm" name="dropdown_name">
                      <option value="COMMODITY" <?= $data['is_commodity_selected'] ? 'selected' : '' ?>>COMMODITY</option>
                      <option value="END USER" <?= $data['is_end_user_selected'] ? 'selected' : '' ?>>END USER</option>
                      <option value="MODE OF PROC" <?= $data['is_mode_of_proc_selected'] ? 'selected' : '' ?>>MODE OF PROC</option>
                      <option value="PABAC" <?= $data['is_pabac_selected'] ? 'selected' : '' ?>>PABAC</option>
                      <option value="PROGRAM MANAGER" <?= $data['is_program_manager_selected'] ? 'selected' : '' ?>>PROGRAM MANAGER</option>
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
              <button type="submit" class="btn btn-sm btn-dark float-right" name="create" confirmation="You Are About To Add <?= $data['table_title'] ?>">Add</button>
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
          <div class="card-header">
            <h3 class="card-title"><?= $data['table_title'] ?></h3>
          </div>
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Created</th>
                  <th>Update</th>
                  <th>Settings</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['list'] as $res) { ?>
                  <tr>
                    <td><?= $res['id'] ?></td>
                    <td><?= $res['name'] ?></td>
                    <td><?= $res['created_date'] ?></td>
                    <td><?= $res['updated_date'] ?></td>
                    <td class="flex">
                      <button type="button" class="btn btn-sm btn-dark btn-view flex base" name="admin/maintenance/dropdown/edit&table=<?= urlencode(strtoupper($data['table_title'])) ?>" value="<?= $res['id']; ?>"> <i class="fa fa-edit"></i> Edit</button>
                      <form method="post" name="dropdown_delete" refresh="admin/maintenance/dropdown&table=<?= urlencode(strtoupper($data['table_title'])) ?>">
                        <button type="submit" class="btn btn-sm btn-dark flex base" name="id" value="<?= $res['id']; ?>" confirmation="You Are About To Delete <?= $res['name'] ?> ID <?= $res['id'] ?>"> <i class="fa fa-trash"></i> Delete</button>
                        <input type="hidden" name="dropdown_name" value="<?= strtoupper($data['table_title']) ?>" >
                      </form>
                    </td>
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

<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $("#dp_name").on("change", function() {
      $("#content").load(base_url + 'page.php?page=admin/maintenance/dropdown&table='+encodeURIComponent(this.value)+'&id=1',
         (response, status, xhr) => {
          if (status == "error") {
            $('#result').html(MessageServerError);  
          }
        }
      );
    })

  });
</script>