<div class="row">
  <div class="form-group no-print">
    <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-10">
      <a href="<?php echo base_url('admin/addUsersView') ?>" type="button" class="btn btn-primary">Add New User</a>
    </div>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Manage Users<small></small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">

        <table class='datatable-1 table table-striped table-bordered' style='font-size:13px;'>
          <thead>
            <tr>
              <th style='text-align: center'>Username</th>
              <th style='text-align: center'>First Name</th>
              <th style='text-align: center'>Middle Name</th>
              <th style='text-align: center'>Last Name </th>
              <th style='text-align: center'>User Type</th>
              <th style='text-align: center'>Edit</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($users as $user): ?>
              <tr>
                <td><?php echo $user['username']  ?></td>
                <td><?php echo $user['first_name'] ?></td>
                <td><?php echo $user['middle_name'] ?> </td>
                <td><?php echo $user['last_name'] ?></td>
                <td><?php echo $user['user_type'] ?></td>

                <td class="text-center">
                  <form method="post" action="<?php echo base_url('admin/setUsersID') ?>">
                    <button name="userID" type="submit" value="<?php echo $user['user_id'] ?>" class = "btn btn-success">
                      <i class = "fa fa-edit"></i>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>

  </form>
</div>
</div>
</div>
</div>


<!-- /page content -->
</div>
</div>
</div>
<script src="<?php echo base_url() ?>public/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url() ?>public/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>public/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo base_url() ?>public/vendors/nprogress/nprogress.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo base_url() ?>public/build/js/custom.min.js"></script>
<!-- Datatables -->
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
<script src="<?php echo base_url() ?>public/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>public/vendors/pdfmake/build/vfs_fonts.js"></script>

<script>
  $(document).ready(function() {
    $('.datatable-1').dataTable();
  });
</script>
