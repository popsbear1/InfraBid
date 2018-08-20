<style>
  .document_container{
    height: 550px;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 7px 10px; 
    margin: 0 5px 0 5px;
    background: #FFFFFF;
    border-style: groove;
    border-width: 1px;
  }

  .document_container_submit{
    height: 50px;
    padding: 7px 10px; 
    margin: 0 5px 0 5px;
    background: #FFFFFF;
    border-style: groove;
    border-width: 1px;
  }

  .document_container_two{
    height: 300px;
    overflow-y: auto;
    overflow-x: hidden;
    padding: 7px 10px; 
    margin: 0 5px 0 5px;
    background: #FFFFFF;
    border-style: groove;
    border-width: 1px;
  }

  .document_add{
    padding: 7px 10px; 
    margin: 0 5px 0 5px;
    text-align: right;
  }

  img {
    max-width: 100%;
    max-height: auto;
}

}
</style>  
<section class="content-header">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6">
      <a href="<?php if($this->session->userdata('user_type') == 'BAC_SEC'){ echo base_url('doctrack/documentDetailsView'); }else{ echo base_url('capitol/docTrackView'); } ?>" type="button" class="btn btn-warning btn-lg" >
        <i class="fa fa-arrow-left"></i>
        Back
      </a>
    </div>
  </div>
</section>
<section class="content">
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12 col-md-12">
      <div class="box">
        <div class="box-header">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <div style="background-color:#C0C0C0; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px; border-width: 1px; border-style: groove;">
                <h4>Add Project Document Images</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="box-body">      
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div style="background-color:#C0C0C0; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px; border-width: 1px; border-style: groove;">
                    <h5>Onhand Documents</h5>
                  </div>
                  <div class="document_container_two">
                    <?php foreach ($onhand_project_documents as $onhand_document): ?>
                      <div class="radio">
                        <label class="form-check-label"><input type="radio" value="<?php echo $onhand_document['project_document_id'] ?>" name="document_id" form="uploadPhotoForm"><?php echo $onhand_document['document_name'] ?></label>
                      </div>
                    <?php endforeach ?>
                  </div>
                  <div class="document_container_two">
                    <ul class="list-group">
                    <?php foreach ($onhand_project_documents_with_image as $doc_image): ?>
                      <li class="list-group-item">
                        <ul class="list-inline">
                          <li><?php echo $doc_image['document_name'] ?></li>
                          <li class="pull-right">
                            <button value="<?php echo $doc_image['project_document_id'] ?>" class="image_view_btn" >
                              <i class="fa fa-eye"></i>
                            </button>
                            <button value="<?php echo $doc_image['project_document_id'] . ',' . $doc_image['document_name'] ?>" class="image_delete_btn" >
                              <i class="fa fa-trash"></i>
                            </button>
                          </li>
                        </ul>
                      </li>
                    <?php endforeach ?>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                  <div style="background-color:#C0C0C0; font-size: 25px; text-align: center; padding: 7px 10px; margin: 0 5px 0 5px; border-width: 1px; border-style: groove;">
                    <h5>Upload Images</h5>
                  </div>
                  <div class="document_container">
                    <div>
                      <form enctype="multipart/form-data" action="<?php echo base_url('doctrack/uploadPhoto') ?>" id="uploadPhotoForm" method="POST" >
                        <div calss="form-group">
                          <label for="">Select Photo</label>
                          <input type="file" name="files[]" multiple>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="document_container_submit text-center">
                    <button class="btn btn-primary" type="submit" form="uploadPhotoForm">
                      <i class="fa fa-uplaod"></i>
                      Upload
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="box-footer">
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
<script src="<?php echo base_url() ?>public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="viewDocumentImageModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header" style="padding-top: 0">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12" style="background-color:#C0C0C0; text-align: center; padding: 7px 10px; border-width: 1px;">
            <h3>Document Image/s</h3>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <div class="document_container">
          <div id="image_container">
            
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="confirmDocumentImageDeleteModal">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center">Delete Image for Document</p>
        <p class="text-center"><b id="document_name"></b></p>
        <form method="POST" action="<?php echo base_url('doctrack/deleteDocumentImage') ?>" id="documentImageDeleteForm">
          <input type="text" name="document_id" id="document_id" hidden>
        </form>
      </div>
      <div class="modal-footer">
        <button type="submit" form="documentImageDeleteForm" class="btn btn-primary">Confirm</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).on('click', '.image_view_btn', function(e){

    $('#image_container').empty();
    
    var project_document_id = $(this).val();

    $.ajax({
      type: 'POST',
      url: "<?php echo base_url('doctrack/getAllImageURL') ?>",
      data: { project_document_id: project_document_id},
      dataType: 'json'
    }).done(function(response){
      for (var i = 0; i < response.image_urls.length; i++) {
        $('#image_container').append('<img src="' + response.image_urls[i]['image_url'] + '" alt="image">');
        console.log(response.image_urls[i]['image_url']);
      }
    })

    $('#viewDocumentImageModal').modal('show');
  });

  $(document).on('click', '.image_delete_btn', function(){

    var document_Details = $(this).val().split(',');

    $('#document_name').html(document_Details[1]);
    $('#document_id').val(document_Details[0]);
    $('#confirmDocumentImageDeleteModal').modal('show');

  });
</script>
