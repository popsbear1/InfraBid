<div class="clearfix"></div>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
    <nav class="navbar navbar-default" style="background: orange">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand" href="#">Annual Procurement Plan </a>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <ul class="nav navbar-nav navbar-centered collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <li <?php if($pagename == "5mabove"){ echo "class='active'"; } ?>><a href="<?php echo base_url('admin/plan5MAboveABCView') ?>">ABC 5M above</a></li>
          <li <?php if($pagename == "between1m&5m"){ echo "class='active'"; } ?>><a href="<?php echo base_url('admin/planABCBetween1Mn5mView') ?>">ABC Between 1M & 5M</a></li>
          <li <?php if($pagename == "below1m"){ echo "class='active'"; } ?>><a href="<?php echo base_url('admin/plan1MBelowView') ?>">ABC 1M below</a></li>
          <li <?php if($pagename == "addplan"){ echo "class='active'"; } ?>><a href="<?php echo base_url('admin/addPlanView') ?>">Add Plan</a></li>
        </ul>
      </div><!-- /.container-fluid -->
    </nav>
  </div>
</div>