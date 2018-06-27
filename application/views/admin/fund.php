
    <section class="content-header">
      
    </section>
    <section class="content">
      <div class="row">
        <div class="form-group">
          <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-9">
            <a href="<?php echo base_url('admin/addFundsView') ?>" type="button" class="btn btn-primary">Add New Fund</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="box">
            <div class="box-header">
              <h2 class="box-title">Manage Funds<small></small></h2>
            </div>
            <div class="box-body">
              <table class="table table-bordered table-striped" id="fundTable">
                <thead>
                  <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Source of Fund</th>
                    <th class="text-center">Edit</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($funds as $fund): ?>
                    <tr>
                      <td><?php echo $fund['fund_id'] ?></td>
                      <td><?php echo $fund['source'] ?></td>
                      <td class="text-center">
                        <form method="POST" action="<?php echo base_url('admin/setCurrentFundID') ?>">
                          <button class="btn btn-success" name="source" value="<?php echo $fund['fund_id'] ?>" type="submit">
                            <i class="fa fa-edit"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>public/dist/js/demo.js"></script>
<!-- page script -->

<script>
  $(function() {
    $('#fundTable').DataTables();
  });
</script>
