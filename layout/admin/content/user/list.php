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
            <h3 class="card-title">User List</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Role</th>
                  <th>Branch</th>
                  <th>Verified</th>
                  <th>Status</th>
                  <th>Serial No#</th>
                  <th>Full Name</th>
                  <th>Classification</th>
                  <th>Rank</th>
                  <th>Approved By</th>
                  <th>Created Date</th>
                  <th>Created By</th>
                  <th>Last Updated Date</th>
                  <th>Settings</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data['list'] as $res) { ?>
                  <tr>
                    <td><?= $res['id'] ?></td>
                    <td><?= $res['access'] ?></td>
                    <td><?= $res['branch'] ?></td>
                    <td><?= ($res['verified_flag']) ? 'VERIFIED' : 'PENDING' ?></td>
                    <td><?= $res['status'] ?></td>
                    <td><?= $res['serial_no'] ?></td>
                    <td><?= $res['user_full_name'] ?></td>
                    <td><?= $res['classification'] ?></td>
                    <td><?= $res['rank'] ?></td>
                    <td><?= $res['verifier_full_name'] ?></td>
                    <td><?= $res['created_date'] ?></td>
                    <td><?= $res['creator_full_name'] ?></td>
                    <td><?= $res['updated_date'] ?></td>
                    <td class="flex">
                      <button type="button" class="btn btn-sm btn-dark btn-view flex base" name="admin/user/edit" value="<?= $res['id']; ?>"> <i class="fa fa-edit"></i> Edit</button>
                      <form method="post" name="user_update" refresh="admin/user/list">
                        <button type="submit" class="btn btn-sm btn-dark flex base" name="delete_list" value="<?= $res['id']; ?>" confirmation="You Are About To Delete This User"> <i class="fa fa-trash"></i> Delete</button>
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
      // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      <?php if ($_SESSION['user']->access_id == 1): ?>
      "buttons": [{
          text: '<i class="fa fa-use"></i> Create User</button>',
          className: 'btn btn-sm btn-dark btn-view',
          attr: {
            name: 'admin/user/create'
          }
        }, ]
      <?php endif; ?>
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


  });
</script>