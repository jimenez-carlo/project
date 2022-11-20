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
                    <td><?= (!empty($res['epa'])) ? 'YES' : 'NO'; ?></td>
                    <td><?= $res['implementing_unit'] ?></td>
                    <td><?= $res['comodity'] ?></td>
                    <td><?= $res['program_manager'] ?></td>
                    <td><?= $res['created_date'] ?></td>
                    <td><?= $res['updated_date'] ?></td>
                    <td class="flex">
                      <button type="button" class="btn btn-sm btn-dark btn-view" name="admin/user/edit" value="<?= $res['id']; ?>" disabled> <i class="fa fa-edit"></i> Edit</button>
                      <form method="post" name="user_update" refresh="admin/user/list">
                        <button type="submit" class="btn btn-sm btn-dark" name="delete_list" value="<?= $res['id']; ?>" confirmation="You Are About To Delete This User" disabled> <i class="fa fa-trash"></i> Delete</button>
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
      "buttons": [{
          text: '<i class="fa fa-use"></i> Create Project</button>',
          className: 'btn btn-sm btn-dark btn-view',
          attr: {
            name: 'admin/project/create'
          }
        },
        {
          extend: 'copy',
          text: '<i class="fa fa-export"></i> Copy</button>',
          className: 'btn btn-sm btn-dark'
        }, {
          extend: 'csv',
          text: '<i class="fa fa-export"></i> CSV</button>',
          className: 'btn btn-sm btn-dark'
        }, {
          extend: 'excel',
          text: '<i class="fa fa-export"></i> Excel</button>',
          className: 'btn btn-sm btn-dark'
        }, {
          extend: 'pdf',
          text: '<i class="fa fa-export"></i> PDF</button>',
          className: 'btn btn-sm btn-dark'
        }, {
          extend: 'print',
          text: '<i class="fa fa-export"></i> Print</button>',
          className: 'btn btn-sm btn-dark'
        }
      ]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');


  });
</script>