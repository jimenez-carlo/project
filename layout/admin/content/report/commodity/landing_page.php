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
    $("#download, #pdf").on("click", function(e) {
      e.preventDefault()
      parameters = $("#reportform").serialize() 
      var anchor = document.createElement('a')
      anchor.href = base_url+'layout/admin/content/report/download.php?'+parameters+'&type='+$(this).attr("name")
      anchor.target="_blank"
      anchor.click();
    })
  })

  $("#select_all_columns, #select_all_filters").click(function(){
    var input_class_name = $(this).attr("id") == "select_all_columns" ? '.column' : '.filter';
    $(input_class_name).not(this).prop('checked', this.checked);
  })

  $('.daterange').daterangepicker({
    locale: {
      format: 'DD-MM-YYYY'
    }
  });
</script>