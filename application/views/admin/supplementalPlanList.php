
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <h3 class="pull-left">Supplemental Procurement Plan Report</h3>
            <a href="<?php echo base_url('admin/addSupplementalPlanView') ?>" class="btn btn-primary btn-lg pull-right" type="button">
              <i class="fa fa-plus"></i>
              Add Supplemental Plan
            </a>
          </div>
        </div>
        <div class="box">
          <div class="box-header">
            <h2 class="box-title"><b>(Supplemental) </b>Project Procurement Plan Records</h2>
          </div>
          <div class="box-body">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <table width="100%" id="supplemental_plan_table">
                  <thead style='font-size:12px;background: #ffcccc'>
                    <tr>
                      <th class="text-center">Project No.</th>
                      <th class="text-center">Project Title</th>
                      <th class="text-center">Location</th>
                      <th class="text-center">Mode of Procurement</th>
                      <th class="text-center">ADS/POST OF IB/REI</th>
                      <th class="text-center">SUB/ OPEN OF BIDS</th>
                      <th class="text-center">NOTICE OF AWARD</th>
                      <th class="text-center">CONTRACT SIGNING</th>
                      <th class="text-center">Source of Fund</th>
                      <th class="text-center">Type of Project</th>
                      <th class="text-center">Approved Budget Cost</th>
                      <th class="text-center">Project Year</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                  </tbody>
                  <tfoot style='font-size:12px;background: #ffcccc'>
                    <tr>
                      <th class="text-center">Project No.</th>
                      <th class="text-center">Project Title</th>
                      <th class="text-center">Location</th>
                      <th class="text-center">Mode of Procurement</th>
                      <th class="text-center">ADS/POST OF IB/REI</th>
                      <th class="text-center">SUB/ OPEN OF BIDS</th>
                      <th class="text-center">NOTICE OF AWARD</th>
                      <th class="text-center">CONTRACT SIGNING</th>
                      <th class="text-center">Source of Fund</th>
                      <th class="text-center">Type of Project</th>
                      <th class="text-center">Approved Budget Cost</th>
                      <th class="text-center">Project Year</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>

<script src="<?php echo base_url() ?>public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url() ?>public/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url() ?>public/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() ?>public/bower_components/moment/min/moment.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url() ?>public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() ?>public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() ?>public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>public/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>public/dist/js/adminlte.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/jszip.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/buttons.html5.min.js"></script>

<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.rowGroup.min.js"></script>

<script>
  var plans_data = '<?php echo json_encode($plans) ?>';
  var plans = JSON.parse(plans_data);
  console.log(plans);
  $(document).ready(function(){
      $('#supplemental_plan_table').DataTable({
        data: plans,
        columns: [
          { data: 'project_no' },
          { data: 'project_title' },
          { 
            data: null,
            render: function(data, type, row){
              return data.barangay + ', ' + data.municipality;
            },
            editField: ['barangay', 'municipality']
          },
          { data: 'mode' },
          { data: 'abc_post_date' },
          { data: 'sub_open_date' },
          { data: 'award_notice_date' },
          { data: 'contract_signing_date' },
          { data: 'source' },
          { data: 'type' },
          { data: 'abc' },
          { data: 'project_year' },
          { 
            data: null,
            render: function ( data, type, row ) {
              return '<div class="row">' +
                      '<div class="col-lg-6 col-md-6 col-sm-6">' +
                        '<form method="POST" action="<?php echo base_url('admin/editPlanView') ?>">' +
                        '<input name="project_type" value="' + data.project_type + '" hidden>' +
                          '<button class="btn btn-primary btn-sm" type="submit" name="plan_id" value="' + data.plan_id + '">' +
                            '<i class="fa fa-pencil"></i>' +
                          '</button>' +
                        '</form>' +
                      '</div>' +
                      '<div class="col-lg-6 col-md-6 col-sm-6">' +
                        '<form method="POST" action="<?php echo base_url('admin/setCurrentPlanID') ?>">' +
                          '<button class="btn btn-danger btn-sm" type="submit" name="plan_id" value="' + data.plan_id + '">' +
                            '<i class="fa fa-trash"></i>' +
                          '</button>' +
                        '</form>' +
                      '</div>' +      
                    '</div>'
                    ;
            }
          }
        ]
      });
  });

</script>