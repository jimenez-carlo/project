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

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">My Project List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Reference#</th>
                  <th>Status</th>
                  <th>Officer</th>
                  <th>EPA</th>
                  <th>Implementing Unit</th>
                  <th>Comodity</th>
                  <th>Program Manager</th>
                  <th>Created Date</th>
                  <th>Last Updated Date</th>
                  <th>Settings</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['list'] as $res) { ?>
                  <tr>
                    <td><?= $res['id'] ?></td>
                    <td><?= $res['status'] ?></td>
                    <td><?= $res['officer_full_name'] ?></td>
                    <td><?= ($res['epa']) ? 'YES' : 'NO'; ?></td>
                    <td><?= $res['implementing_unit'] ?></td>
                    <td><?= $res['comodity'] ?></td>
                    <td><?= $res['program_manager'] ?></td>
                    <td><?= $res['created_date'] ?></td>
                    <td><?= $res['updated_date'] ?></td>
                    <td class="flex">
                      <?php if (in_array($_SESSION['user']->access_id, array(1, 3))) { ?>
                        <?php if ($_SESSION['user']->access_id == 1) { ?>
                          <button type="button" class="btn btn-sm btn-dark btn-view" name="admin/project/edit_admin" value="<?= $res['id']; ?>"> <i class="fa fa-edit"></i> Edit</button>
                        <?php } else { ?>
                          <button type="button" class="btn btn-sm btn-dark btn-view" name="admin/project/edit" value="<?= $res['id']; ?>"> <i class="fa fa-edit"></i> Edit</button>
                        <?php } ?>
                      <?php } ?>

                      <?php if (in_array($_SESSION['user']->access_id, array(1, 3))) { ?>
                        <form method="post" name="project_update" refresh="admin/project/my_list&id=<?= $_SESSION['user']->id ?>">
                          <button type="submit" class="btn btn-sm btn-dark" name="delete_list" value="<?= $res['id']; ?>" confirmation="You Are About To Delete This Project"> <i class="fa fa-trash"></i> Delete</button>
                        </form>
                      <?php } else { ?>
                        <button type="button" class="btn btn-sm btn-dark btn-view" name="admin/project/view" value="<?= $res['id']; ?>"> <i class="fa fa-eye"></i> View</button>
                        <button type="button" class="btn btn-sm btn-dark btn-view" name="admin/project/edit" value="<?= $res['id']; ?>"> <i class="fa fa-edit"></i> Edit</button>
                      <?php } ?>
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
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "buttons": [{
          text: '<i class="fa fa-use"></i> Create Project</button>',
          className: 'btn btn-sm btn-dark btn-view',
          attr: {
            name: 'admin/project/create'
          }
        },
        {
          text: '<i class="fa fa-use"></i> Advance Search</button>',
          className: 'btn btn-sm btn-dark',
          attr: {
            'data-toggle': "modal",
            'data-target': "#chronology_modal",
          }
        }
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


  });
</script>

<?php include_once('layout/admin/content/project/modal/project_search.php') ?>