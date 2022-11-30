<style>
  .custom-control-label::before {
    position: absolute;
    top: .25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    pointer-events: none;
    content: "";
    background-color: unset;
    border: unset;
    box-shadow: unset;
  }
</style>
<div class="modal fade" id="chronology_modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Advance Search</strong></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" id="search_form">


        <div class="modal-body">
          <div class="card-body">
            <div class="row">

              <div class="col-sm-4">
                <div class="form-group">
                  <label>Status</label>
                  <div class="form-group">
                    <?php foreach ($data['default']['project_status'] as $res) { ?>
                      <div class="custom-control">
                        <input type="checkbox" name="project_status[]" value="<?= $res['id'] ?>">
                        <label for="customCheckbox1<?= $res['id'] ?>" class="custom-control-label"><?= $res['name'] ?></label>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>


              <div class="col-sm-4">
                <div class="form-group">
                  <label>Commodity</label>
                  <div class="form-group">
                    <?php foreach ($data['default']['comodity'] as $res) { ?>
                      <div class="custom-control">
                        <input type="checkbox" name="comodity[]" value="<?= $res['id'] ?>">
                        <label for="customCheckbox1<?= $res['id'] ?>" class="custom-control-label"><?= $res['name'] ?></label>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>


              <div class="col-sm-4">
                <div class="form-group">
                  <label>Unit</label>
                  <div class="form-group">
                    <?php foreach ($data['default']['unit'] as $res) { ?>
                      <div class="custom-control">
                        <input type="checkbox" name="unit[]" value="<?= $res['id'] ?>">
                        <label for="customCheckbox1<?= $res['id'] ?>" class="custom-control-label"><?= $res['name'] ?></label>
                      </div>
                    <?php } ?>
                  </div>
                </div>
                <div class="form-group">
                  <label>Mode of PROC</label>
                  <div class="form-group">
                    <?php foreach ($data['default']['mode_of_proc'] as $res) { ?>
                      <div class="custom-control">
                        <input type="checkbox" name="mode_of_proc[]" value="<?= $res['id'] ?>">
                        <label for="customCheckbox1<?= $res['id'] ?>" class="custom-control-label"><?= $res['name'] ?></label>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>


            </div>

            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>PABAC</label>
                  <div class="form-group">
                    <?php foreach ($data['default']['pabac'] as $res) { ?>
                      <div class="custom-control">
                        <input type="checkbox" name="pabac[]" value="<?= $res['id'] ?>">
                        <label for="customCheckbox1<?= $res['id'] ?>" class="custom-control-label"><?= $res['name'] ?></label>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label>Program Manager</label>
                  <div class="form-group">
                    <?php foreach ($data['default']['program_manager'] as $res) { ?>
                      <div class="custom-control">
                        <input type="checkbox" name="program_manager[]" value="<?= $res['id'] ?>">
                        <label for="customCheckbox1<?= $res['id'] ?>" class="custom-control-label"><?= $res['name'] ?></label>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label>Implementing Unit</label>
                  <div class="form-group">
                    <?php foreach ($data['default']['implementing_unit'] as $res) { ?>
                      <div class="custom-control">
                        <input type="checkbox" name="implementing_unit[]" value="<?= $res['id'] ?>">
                        <label for="customCheckbox1<?= $res['id'] ?>" class="custom-control-label"><?= $res['name'] ?></label>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Date:</label>
                  <select class="form-control form-control-sm" name="date" id="date">
                    <option value="">None</option>
                    <option value="">Preproc Date</option>
                    <option value="">Prebid Date</option>
                    <option value="">Sobe Date</option>
                    <option value="">PQ Date</option>
                    <option value="">PQR Date</option>
                    <option value="">NOA Date</option>
                    <option value="">ORS Date</option>
                    <option value="">NTP Date</option>
                    <option value="">NTP Conforme Date</option>
                    <option value="">Delivery Date</option>
                    <option value="">Inspected Date</option>
                    <option value="">Accepted Date</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-8">
                <div class="form-group">
                  <label>Range:</label>
                  <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control float-right daterange" id="upr_date" name="upr_date">
                  </div>
                </div>
              </div>


            </div>

          </div>
        </div>
      </form>

      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-sm btn-dark pull-right" data-dismiss="modal" id="search">Search</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script>
  $('.daterange').daterangepicker({
    locale: {
      format: 'DD-MM-YYYY'
    }
  });

  $(document).on("click", '#search',
    function(e) {

      let data = $('form').serialize();
      $("#content").load(base_url + 'page.php?page=admin/project/my_list&id=<?= $_SESSION['user']->id ?>&' + data,
        (response, status, xhr) => {
          if (status == "error") {
            $('#result').html(MessageServerError);
          }

        }
      );
    })
</script>