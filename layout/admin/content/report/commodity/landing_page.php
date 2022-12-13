<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Commodity</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->

    </div><!-- /.container-fluid -->
  </div>
  <div class="container-fluid">
          <div class="card" style="margin-buttom: .1rem;">
            <!-- /.card-header -->
            <div class="card-header">
              <h3 class="card-title">Filter</h3>
            </div>
            <!-- /.card-body -->
            <form id="commodity-report-form">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                      <label for="gaa">GAA</label>
                      <input type="text" class="form-control form-control-sm" name="gaa" id="gaa" value="<?= $_GET['gaa'] ?? '' ?>">
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button class="btn btn-sm btn-dark float-right" id="commodity-report-filter">Search</button> 
              </div>
            </form>
          </div>
          <!-- /.card -->
    <div class="row">
      <div class="col-12">
          <div class="card" style="margin-buttom: .1rem;">
            <div class="card-header">
              <h3 class="card-title">Status Report</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <?php if (count($data['commodities']) > 0): ?>
              <?php 
                $columns = [];
                $columns = array_keys($data['commodities'][0]);
              ?>
                <table id="commodity-table" class="table table-bordered table-sm">
                	<thead>
                		<tr>
                			<?php foreach($columns AS $column): ?>
                				<th><?= $column ?></th>
                			<?php endforeach; ?>
                		</tr>
                	</thead>
                	<tbody>
                			<?php foreach($data['commodities'] AS $commodity): ?>
                				<tr>
                						<td><?= $commodity['Commodity'] ?></td>
                						<td><?= $commodity['For Pre-Proc'] ?></td>
                            <td><?= $commodity['Pre-Proc Passed'] ?></td>
                            <td><?= $commodity['Pre-Proc Failed'] ?></td>
                            <td><?= $commodity['Pre-Bid'] ?></td>
                            <td><?= $commodity['Sobe Passed'] ?></td>
                            <td><?= $commodity['Sobe Failed'] ?></td>
                            <td><?= $commodity['PQ Passed'] ?></td>
                            <td><?= $commodity['PQ Failed'] ?></td>
                            <td><?= $commodity['PQR'] ?></td>
                            <td><?= $commodity['NOA'] ?></td>
                            <td><?= $commodity['ORS'] ?></td>
                            <td><?= $commodity['NTP'] ?></td>
                            <td><?= $commodity['NTP Conforme'] ?></td>
                            <td><?= $commodity['Delivery'] ?></td>
                            <td><?= $commodity['Inspected'] ?></td>
                            <td><?= $commodity['Accepted'] ?></td>
                            <td><?= $commodity['Total'] ?></td>
                				</tr>
                			<?php endforeach; ?>
                	</tbody>
                </table>
              <?php endif; ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </form>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
<script>
  $(function() {
    $("#commodity-report-filter").on("click", function(e) {
      e.preventDefault()
      var parameters = $("#commodity-report-form").serialize() 
      var page = "admin/report/commodity&"+parameters 
      $("#content").load(base_url + 'page.php?page=' + page,
         (response, status, xhr) => {
          if (status == "error") {
            $('#result').html(MessageServerError);  
          }
        }
      );
    })

    $("#commodity-table").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "ordering": false,
      "searching": false,
      "buttons": [
        {
          extend: 'csv',
          text: '<i class="fa fa-export"></i> CSV</button>',
          className: 'btn btn-sm btn-dark'
        },
        {
          extend: 'print',
          text: '<i class="fa fa-export"></i> PDF</button>',
          className: 'btn btn-sm btn-dark'
        }
      ]
    }).buttons().container().appendTo('#commodity-table_wrapper .col-md-6:eq(0)');;
  })
</script>