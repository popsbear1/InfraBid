
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel">
          <div class="panel-heading">
            <h2>Procurement  Monitoring Report for Public Bidding and Negotiated<small></small></h2>
          </div>
          <div class="row">
            <p>filters:</p>
            <input type="date" id="year">
            <select name="" id="">
              <option value="">1st Q</option>
              <option value="">2nd Q</option>
              <option value="">3rd Q</option>
              <option value="">4th Q</option>
            </select>
            <select name="" id="">
              <option value="">Pending</option>
              <option value="">Processing</option>
              <option value="">Implementation</option>
              <option value="">Finished</option>
            </select>
          </div>
          <div class="content">
            <table class="table table-striped table-bordered" id="plan_table">
              <thead style='font-size:12px;'>
                <tr>
                  <th class="text-center">Project No.</th>
                  <th class="text-center">Project Title</th>
                  <th class="text-center">Location</th>
                  <th class="text-center">Type of Project</th>
                  <th class="text-center">Mode of Procurement</th>
                  <th class="text-center">Approved Budget Cost</th>
                  <th class="text-center">Source of Fund</th>
                  <th class="text-center">Account Classification</th>
                  <th class="text-center">Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($plans as $plan): ?>
                  <tr>
                    <td><?php echo $plan['project_no'] ?></td>
                    <td><?php echo $plan['project_title'] ?></td>
                    <td><?php echo $plan['barangay'] . ', ' . $plan['municipality']?></td>
                    <td><?php echo $plan['type'] ?></td>
                    <td><?php echo $plan['mode'] ?></td>
                    <td><?php echo $plan['abc'] ?></td>
                    <td><?php echo $plan['source'] ?></td>
                    <td><?php echo $plan['classification'] ?></td>
                    <td>
                      <form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">
                        <button class="btn btn-success" type="submit" name="plan_id" value="<?php echo $plan['plan_id'] ?>">
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
  </div>
</div>

<!-- jQuery -->
<script src="<?php echo base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url() ?>public/vendors/nprogress/nprogress.js"></script>


<script src="<?php echo base_url() ?>public/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo base_url() ?>public/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>public/build/js/custom.min.js"></script>
<!-- Datatables -->

<script>
  $(document).ready( 
    function () {
      $('#plan_table').DataTable();
      $('#year').datepicker({
        dateFormat: 'yy'
      });
    } 
  );
</script>
