<?php if ($_SESSION['user_type'] !== 'BAC_SEC'){
  header('Location: ..\index.php');
} ?>
  <link href="<?php echo base_url() ?>public/timeline/jquery-ui.css" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url() ?>public/timeline/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>public/timeline/jquery-ui.min.js"></script>
    <script src="<?php echo base_url() ?>public/timeline/calc_datenew.js"></script>

    <script>

      $(document).ready(function() {
        $("#datepicker4").datepicker({dateFormat: 'mm/dd/yy'});
      });


      $(document).ready(function() {
        $("#datepicker5").datepicker({dateFormat: 'mm/dd/yy'});
      });

    </script>


    <script scr="<?php echo base_url() ?>public/timeline/calc_date1.js"></script>

    <script scr="<?php echo base_url() ?>public/timeline/handleChange40.js"></script>


    <script scr="<?php echo base_url() ?>public/timeline/prebidnew.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/handleChange.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/prebid.js"></script>

    <script scr="<?php echo base_url() ?>public/timeline/prebidnoa.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/handleChange1.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/evalfunc.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/evalfunct.js"></script>  
    <script scr="<?php echo base_url() ?>public/timeline/handleChange2.js"></script>  
    <script scr="<?php echo base_url() ?>public/timeline/postfunc.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/postfunct.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/handleChange3"></script>
    <script scr="<?php echo base_url() ?>public/timeline/noafunc.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/noafunct.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/handleChange4.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/consignfunc.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/consignfunct.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/handleChange5.js"></script>
    <script scr=".latestmessage.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/apprcontfunc.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/apprcontfunct.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/handleChange6.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/noticefunc2.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/noticefunc.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/noticefunct.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo base_url() ?>public/timeline/xpath.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo base_url() ?>public/timeline/SpryData.js"></script>
    <script language="JavaScript" type="text/javascript" src="<?php echo base_url() ?>public/timeline/SpryTooltip.js"></script>
    <link href="<?php echo base_url() ?>public/timeline/SpryTooltip.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="<?php echo base_url() ?>public/timeline/calc_dateinfra.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>public/timeline/timelinecss.css" />
    <script language="JavaScript" src="<?php echo base_url() ?>public/timeline/prebid30.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/imageArray.js"></script>
    <script scr="<?php echo base_url() ?>public/timeline/prebid_disable.js"></script>
    <script src="<?php echo base_url() ?>public/timeline/changeme.js"></script>
    <script src="<?php echo base_url() ?>public/timeline/HA_disable.js"></script>
    <script src="<?php echo base_url() ?>public/timeline/compute144days.js"></script>
    <script language="JavaScript" src="<?php echo base_url() ?>public/timeline/computelatest.js"></script>
    <!-- InstanceEndEditable -->
    <!-- WARREN PAUL A. NICDAO - WEB Developer/Programmer/Designer Copyright 2012 -->
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="description" content="Government Procurement Policy Board - Technical Support Office" />
    <meta name="keywords" content="GPPB, GPPB-TSO, Government Procurement, Procurement, Policy, Board" />
    <link href="<?php echo base_url() ?>public/timeline/gppb.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/timeline/dropdown.css" media="all" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>public/timeline/default.adv.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="SHORTCUT ICON" HREF="../../web-icon.ico" />

    <script type="text/javascript">
      var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
      document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>

    <script type="text/javascript">
      try {
        var pageTracker = _gat._getTracker("UA-12179177-1");
        pageTracker._trackPageview();
      } catch(err) {}
    </script>

    <style type="text/css">
      td img {display: block;}
    </style>
<section class="content-header">
  <h2>Manage Procurement Timeline</h2>
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="box">
        <div class="box-header">
          <h2 class="box-title">Manage Project Procurement Timeline<small></small></h2>
        </div>
        <div class="box-body">
          <div align="center">
            <table width="880" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td>
                  <table border="0" cellpadding="0" cellspacing="0" width="880">
                  <!-- fwtable fwsrc="12-02.png" fwpage="Page 1" fwbase="1202.png" fwstyle="Dreamweaver" fwdocid = "433501238" fwnested="0" -->
                    <tr>
                      <td><img src="../../images/1202/spacer.gif" width="440" height="1" border="0" alt="" /></td>
                      <td><img src="../../images/1202/spacer.gif" width="50" height="1" border="0" alt="" /></td>
                      <td><img src="../../images/1202/spacer.gif" width="390" height="1" border="0" alt="" /></td>
                      <td><img src="../../images/1202/spacer.gif" width="1" height="1" border="0" alt="" /></td>
                    </tr>
                    <tr>
                      <td class="tblTopb1">&nbsp;</td>
                      <td colspan="2" class="tblTopb2">&nbsp;</td>
                      <td><img src="../../images/1202/spacer.gif" width="1" height="20" border="0" alt="" /></td>
                    </tr>
                    <tr>
                      <td colspan="2" class="tblTopb3">&nbsp;</td>
                      <td class="tblTopb4">&nbsp;</td>
                      <td><img src="../../images/1202/spacer.gif" width="1" height="94" border="0" alt="" /></td>
                    </tr>
                    <tr>
                      <td colspan="3" class="tblTopb6">
                        <table width="880" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="20">&nbsp;</td>
                            <td width="840"><!-- InstanceBeginEditable name="content" -->
                              <form name="f2" method="post" onSubmit="return CheckForm();">

                                <table width="800"  bgcolor="#D9DAFF" align="center" class="ttable"> 

                                  <tr>
                                    <td width="195" align="center" >
                                      <font face="Arial, Helvetica, sans-serif" color="black">Select date to begin with:</font>
                                    </td>

                                    <td width="112" align="right">
                                      <div id="followMe1" mouse: pointer; >
                                        <input name="sTextBox" class="txtfield" size="8"  type="text" id="datepicker4" style="width:80px; height:20px; text-align:center;" >
                                      </div>
                                    </td>
                                    <div id="following1" class="tooltipContent">
                                      <img src="images/questionmark1.png" style="width:250px; height:50px;">The format of dates is mm/dd/yyyy. 
                                    </div>

                                    <script type="text/javascript">

                                      var followTrigger = new Spry.Widget.Tooltip('following1', '#followMe1', {followMouse: true});

                                    </script>

                                    <td width="302">
                                      <input type="radio" name="group4" id="group20" value="Lalang20" onClick="calc_dateinfra();" title="(Default) Pre-bid is held 12 calendar days before the Submission and Receipt of Bid." style="visibility:hidden;">
                                      <input type="button" name="btn2"  onClick="calc_date()" class="ui-buttonnew" value="Compute/Reset to Earliest Possible Time" style="width:280px; height:30px;" title="Click here to compute the start date of the ADVERTISEMENT up to the end date of NOTICE TO PROCEED.">
                                    </td>
                                    <td width="13" align="center">|</td>
                                    <td width="124" align="left">
                                      &nbsp;&nbsp;
                                      <input type="Reset" name="reset" id="reset" class="ui-buttonnew" value="Start over" style="width:100px; height:30px;" title="Reset all textboxes">
                                    </td>
                                  </tr>

                                </table>
                                <table align="center" border="0" width="800" style="outline-color:#00F;" bgcolor="#E4E4E4" class="maintable">

                                  <tr>
                                    <td  style="border-right:thin dotted #999;">&nbsp;</td>
                                    <td style="border-right:thin dotted #999;">&nbsp;</td>
                                    <td style="border-right:thin dotted #999;">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td width="226" align="center" class="ufont" style="border-bottom:thin dotted #999; border-right:thin dotted #999;">
                                      <b>Procurement Stage</b>
                                    </td>
                                    <td width="80" align="center" class="ufont" style="border-bottom:thin dotted #999; border-right:thin dotted #999;">
                                      <b>Start Date</b>
                                    </td>
                                    <td width="86" align="center" class="ufont" style="border-bottom:thin dotted #999; border-right:thin dotted #999;">
                                      <b>End Date</b>
                                    </td>
                                    <td align="center" colspan="4" valign="top" class="ufont" style="border-bottom:thin dotted #999;">
                                      <b>Add days</b>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="180" align="right" style="border-bottom:thin dotted #999;">
                                      <font color="#000000" style="margin-right:20px;">Advertisement&nbsp;&nbsp;:</font>
                                    </td>
                                    <td align="center" >
                                      <input type="text" name="date_to" size="8" id="date_to" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield">
                                    </td>
                                    <td align="center" >
                                      <input type="text" name="date_to1" size="8" id="date_to1" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield">
                                    </td>
                                    <!--<td colspan='2'><input type="radio" name="group3" id="group13" value="Lalang1" onClick="calc_date();" title="(Default) Pre-bid is held 12 calendar days before the Submission and Receipt of Bid." CHECKED><font color="#000000">12 CD</font> &nbsp;&nbsp;&nbsp;<input type="radio" name="group3" id="group14" value="Lalang2" onClick="prebid30();" title="Click this button if Pre-bid is held 30 calendar days before the Submission and Receipt of Bid."><font color='#000000'>30 CD</font></td>  -->

                                  </tr>
                                  <tr>
                                    <td align="right"  style="border-bottom:thin dotted #999;">
                                      <font color="#000000" style="margin-right:20px;">Pre-bid Conference&nbsp;&nbsp;:</font>
                                      <br />
                                      <font color="#000000" style="margin-right:20px;" ><i>Conduct?</i></font>
                                      &nbsp;&nbsp;&nbsp;
                                      <input type="radio" name="group1" id="group11" value="prebidbut1" onClick="calc_datenew()" title="Click this button if Pre-bid is applicable to your procurement." checked>
                                      <font color="#999999">Yes</font>
                                      <input type="radio" name="group1" id="group12" value="prebidbut2" onClick="prebid_disable()" title="Click this button if Pre-bid is not applicable to your procurement.">
                                      <font color="#999999" style="margin-right:20px;">No</font>
                                    </td>

                                    <td align="center" >
                                      <input type="text" name="date_to2" id="date_to2" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to3" id="date_to3" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield" ></font>
                                    </td>
                                    <td width="46" align="center">
                                      <div id="followMe40" mouse: pointer;>
                                        <input type="text"  name="prebidadded" size="3" id="prebidadded" onChange="handleChange40(this);" style="width:40px; height:25px; text-align:center;" class="txtfield">
                                      </div>
                                    </td>
                                    <div id="following40" class="tooltipContent">
                                      <img src="images/questionmark1.png" style="width:250px; height:50px;">
                                      The Pre-bid Conference must be concluded at least 12, or at least 30 for exceptional circumstances, calendar days before the deadline for the Submission of Bids (Section 22.2, IRR of RA 9184).  Allowable input here is from 1 to 53, which is added to the last day of Advertisement. 
                                    </div>

                                    <script type="text/javascript">

                                      var followTrigger = new Spry.Widget.Tooltip('following40', '#followMe40', {followMouse: true});
                                    </script>

                                    <td width="82">
                                      <input type="button" name="btn40" onClick="prebidnew();" size="8" class ="ui-button" value="Update" style="width:80px; height:30px;">

                                    </td>


                                  </tr>
                                  <tr>
                                    <td align="right" style="border-bottom:thin dotted #999;">
                                      <font color="#000000" style="margin-right:20px;">Submission of Bid&nbsp;&nbsp;:</font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to4" id="date_to4" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield">
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to5" id="date_to5" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td width="46" align="center">
                                      <div id="followMe" mouse: pointer;>
                                        <input type="text"  name="prebid1" size="3" id="prebid1" onChange="handleChange(this);" style="width:40px; height:25px; text-align:center;" class="txtfield">
                                      </div>
                                    </td>

                                    <div id="following" class="tooltipContent">
                                      <img src="images/questionmark1.png" style="width:250px; height:50px;">
                                      Bids may be submitted until the 50th or 65th, as the case may be, calendar day from the last day of Advertisement, depending on the ABC involved.  If the ABC is PhP50M and below, bids may be submitted on or before the 50th calendar day.  If the ABC is above PhP50M, these may be submitted on or before the 65th.  (Section 25.4(b), IRR of RA 9184)  If the Pre-bid Conference is held at least 12 days before, allowable input here is from 13 to 50, or 13 to 65, as the case may be.  If Pre-bid Conference is held at least 30 days before, allowable input here is from 31 to 50, or 31 to 65, as the case may be.  The value is added to the last day of Advertisement.
                                    </div>

                                    <script type="text/javascript">

                                      var followTrigger = new Spry.Widget.Tooltip('following', '#followMe', {followMouse: true});  
                                    </script>

                                    <td width="82">
                                      <input type="button" name="btn3" onClick="prebid(); computeall(); postcomputeall()"  size="8" class ="ui-button" value="Update" style="width:80px; height:30px;">
                                    </td>

                                  </tr>
                                  <tr>
                                    <td align="right" style="border-bottom:thin dotted #999;">
                                      <font color="#000000" style="margin-right:20px;">Bid Evaluation&nbsp;&nbsp;:</font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to6" id="date_to6" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to7" id="date_to7" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td align="center">
                                      <div id="followMe3" mouse: pointer;>
                                        <input type="text" name="evaltxt1" size="3" id="evaltxt1" onChange="handleChange1(this); " style="width:40px; height:25px; text-align:center;" class="txtfield"></font>
                                      </div>
                                    </td>
                                    <div id="following3" class="tooltipContent">
                                      <img src="images/questionmark1.png" style="width:250px; height:50px;">Bid evaluation process for the procurement of Goods and Infrastructure Projects shall be completed within seven (7) calendar days from the deadline for receipt of proposals (Section 32.4, IRR of RA 9184). Allowable input here is from 1 to 7 only.
                                    </div>

                                    <script type="text/javascript">

                                      var followTrigger = new Spry.Widget.Tooltip('following3', '#followMe3', {followMouse: true});

                                    </script>

                                    <!-- eto umpisa nung additional-->

                                    <td>
                                      <input type="button" name="bideval1" onClick="evalfunc(); visible(); postcomputeall()" size="8" class ="ui-button" value="Update" style="width:80px; height:30px;">
                                    </td>

                                  </tr>
                                  <tr>
                                    <td align="right" style="border-bottom:thin dotted #999;">
                                      <font color="#000000" style="margin-right:20px;">Post Qualification&nbsp;&nbsp;:</font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to8" id="date_to8" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to9" id="date_to9" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td align="center">
                                      <div id="followMe4" mouse: pointer;>
                                        <input type="text" name="postqual1"  size="3" onChange="handleChange2(this);" style="width:40px; height:25px; text-align:center;" class="txtfield"></font>
                                      </div>
                                    </td>
                                    <div id="following4" class="tooltipContent">
                                      <img src="images/questionmark1.png" style="width:250px; height:50px;">Post-qualification must be completed in not more than 12 calendar days, or 45 calendar days in exceptional cases (Section 34.8, IRR of RA 9184).  Allowable input here is from 1 to 45 only.
                                    </div>

                                    <script type="text/javascript">

                                      var followTrigger = new Spry.Widget.Tooltip('following4', '#followMe4', {followMouse: true});

                                    </script>


                                    <td>
                                      <input type="button" name="post1" onClick="postfunc(); visible1(); noacomputeall()" size="8" class ="ui-button" value="Update" style="width:80px; height:30px;">
                                    </td>

                                  </tr>
                                  <tr>
                                    <td align="right" style="border-bottom:thin dotted #999;">
                                      <font color="#000000" style="margin-right:20px;">Issuance of Notice of Awards&nbsp;&nbsp;:</font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to10" id="date_to10" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to11" id="date_to11" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>

                                    <td align="center">
                                      <div id="followMe5" mouse: pointer;>
                                        <input type="text" name="noa1" size="3" onChange="handleChange3(this);" style="width:40px; height:25px; text-align:center;" class="txtfield"></font>
                                      </div>
                                    </td>
                                    <div id="following5" class="tooltipContent">
                                      <img src="images/questionmark1.png" style="width:250px; height:50px;">BAC recommends award of contract, and HoPE approves or disapproves the same within 4 calendar days from receipt if the ABC is PhP50M and below.  If the HoPE approves, he/she immediately issues the NOA.  If the ABC is above PhP50M, the maximum period is 7 calendar days.  For GOCCs and GFIs, the maximum period is 15 days.  (Section 37.1.2, IRR of RA 9184)  These Timelines assume that the BAC recommendation, and HoPE approval and issuance each take 1 day each to complete.  As such, allowable input here is from 2 to 15.
                                    </div>

                                    <script type="text/javascript">

                                      var followTrigger = new Spry.Widget.Tooltip('following5', '#followMe5', {followMouse: true});

                                    </script>



                                    <td>
                                      <input type="button" name="noabtn1" onClick="noafunc(); visible2(); Changenoa()" size="8" class ="ui-button" value="Update" style="width:80px; height:30px;">
                                    </td>
                                  </tr>

                                  <tr>
                                    <td align="right" style="border-bottom:thin dotted #999;">
                                      <font color="#000000" style="margin-right:20px;">Contract Preparation and Signing&nbsp;&nbsp;:</font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to12" id="date_to12" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to13" id="date_to13" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>

                                    <td align="center">
                                      <div id="followMe6" mouse: pointer;>
                                        <input type="text" name="consign" size="3" onChange="handleChange4(this);" style="width:40px; height:25px; text-align:center;" class="txtfield"></font>
                                      </div>
                                    </td>
                                    <div id="following6" class="tooltipContent">
                                      <img src="images/questionmark1.png" style="width:250px; height:50px;">The procuring entity and winning bidder must enter into a contract within 10 calendar days from receipt by the latter of the NOA (Section 37.2.1 and 37.2.2, IRR of RA 9184).  These Timelines assume that preparation and signing each take 1 day each to complete.  As such, allowable input here is from 2 to 10 only.
                                    </div>

                                    <script type="text/javascript">

                                      var followTrigger = new Spry.Widget.Tooltip('following6', '#followMe6', {followMouse: true});

                                    </script>

                                    <td>
                                      <input type="button" name="consignbtn1" onClick="consignfunc(); visible3()" size="8" class ="ui-button" value="Update" style="width:80px; height:30px;">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="right" style="border-bottom:thin dotted #999;">
                                      <font color="#000000" style="margin-right:20px;">Approval  by Higher Authority&nbsp;&nbsp;:</font>
                                      <br />
                                      <font color="#000000" style="margin-right:20px;">
                                        <i> Necessary?</i>
                                      </font>
                                      &nbsp;&nbsp;&nbsp;
                                      <input type="radio" name="group3" id="group15"value="Milk1" onclick="changeme()" title="Click this button if Approval of HA is applicable to your procurement." checked>
                                      <font color="#999999">Yes</font>
                                      <input type="radio" name="group3" id="group16" value="Milk2" onclick="HA_disable()" title="Click this button if Approval of HA is not applicable to your procurement.">
                                      <font color="#999999" style="margin-right:20px;">No</font>
                                    </td>
                              
                                    <td align="center">
                                      <input type="text" name="date_to14" id="date_to14" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to15" id="date_to15" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>

                                    <td align="center">
                                      <div id="followMe7" mouse: pointer;>
                                        <input type="text" name="apprcont" size="3" onChange="handleChange5(this);" style="width:40px; height:25px; text-align:center;" class="txtfield"></font>
                                      </div>
                                    </td>
                                    <div id="following7" class="tooltipContent">
                                      <img src="images/questionmark1.png" style="width:250px; height:50px;">The Higher Authority, or his/her duly authorized representative, has a maximum of 5 calendar days from receipt to approve or disapprove the contract if the ABC is PhP50M and below.  If the ABC is above PhP50M, the maximum period is 20 calendar days.  For GOCCs, the maximum period is 30 calendar days.  (Section 37.3, IRR of RA 9184)  Allowable input here is from 1 to 30 only.
                                    </div>

                                    <script type="text/javascript">

                                      var followTrigger = new Spry.Widget.Tooltip('following7', '#followMe7', {followMouse: true});

                                    </script>

                                    <td>
                                      <input type="button" name="apprcontbtn1" onClick="apprcontfunc(); visible4()" size="8" class ="ui-button" value="Update" style="width:80px; height:30px;">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td align="right" style="border-bottom:thin dotted #999;">
                                      <font color="#000000" style="margin-right:20px;">Notice to Proceed&nbsp;&nbsp;:</font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to16" id="date_to16" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>
                                    <td align="center">
                                      <input type="text" name="date_to17" id="date_to17" size="8" readonly="readonly" style="width:80px; height:25px; text-align:center;" class="txtfield"></font>
                                    </td>

                                    <td align="center">
                                      <div id="followMe8" mouse: pointer;>
                                        <input type="text" name="noticeproc" size="3" onChange="handleChange6(this);" style="width:40px; height:25px; text-align:center;" class="txtfield"></font>
                                      </div>
                                    </td>
                                    <div id="following8" class="tooltipContent">
                                      <img src="images/questionmark1.png" style="width:250px; height:50px;">If the contract has an ABC of PhP50M and below, the procuring entity must issue an NTP and a copy of the approved contract to the successful bidder within 2 calendar days from the date of approval by the appropriate government approving authority.  If the ABC is above PhP50M, the maximum period is 7 calendar days.  (Section 37.4.1, IRR of RA 9184)  Allowable input here is from 1 to 7 only.
                                    </div>

                                    <script type="text/javascript">

                                      var followTrigger = new Spry.Widget.Tooltip('following8', '#followMe8', {followMouse: true});

                                    </script>
                                    <td>
                                      <input type="button" name="noticebtn1" class ="ui-button" onClick="noticefunc(); visible5()" size="8" value="Update" style="width:80px; height:30px;">
                                    </td>

                                  </tr>
                                  <tr><td>&nbsp;</td></tr>
                                </table>
                                <table width="800" align="center" bgcolor="#D9DAFF" class="ttable1" >
                                  <tr>
                                    <td align="center" >
                                      <input type="button" name="latestbutton"  class="ui-buttonnew" onClick="computelatest()" size="8" value="Latest Allowable Time for ABC with P50 Million and below" style="width:380px; height:30px;" title="Applicable below 50 Million budget">
                                    </td>

                                    <td width="398" align="center">
                                      <input type="radio" name="group4" id="group22" value="Lalang22" title="(Default) Pre-bid is held 12 calendar days before the Submission and Receipt of Bid." style="visibility:hidden;"> 
                                      <input type="button" name="144cd" onClick="compute144days()" class="ui-buttonnew" size="8" value="Latest Allowable Time for ABC with Above P50 Million" style="width:370px; height:30px;" title="Applicable above 50 Million budget">
                                    </td>
                                  </tr>
                                  <tr>
                                    <td width="390" class="txtlink" align="center">
                                      <a href="../underconstruction.html">
                                        <font face="Arial, Helvetica, sans-serif" color="black">User's Guide&nbsp;&nbsp;&nbsp;</font>
                                      </a>
                                    </td>
                                    <td align="center">
                                      <font color="#000000">Found errors? 
                                        <a href="/cdn-cgi/l/email-protection#452c282105223535276b222a336b352d">Tell us.</a>
                                        &nbsp;&nbsp;&nbsp;
                                      </font>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <input type="radio" name="group4" id="group21" value="Lalang21"  title="(Default) Pre-bid is held 12 calendar days before the Submission and Receipt of Bid." style="visibility:hidden;" />
                                    </td>
                                  </tr>
                                </table>
                              </form>
                              <br />


                                    <!-- InstanceEndEditable -->
                            </td>
                                    <td width="20">&nbsp;</td>
                          </tr>
                                
                        </table>
                      </td>
                      <td>
                        <img src="../../images/1202/spacer.gif" width="1" height="180" border="0" alt="" />
                      </td>
                    </tr>
                    <tr class="text10m">
                      <td colspan="3" class="tblTopb7">&nbsp;</td>
                      <td>
                        <img src="../../images/1202/spacer.gif" width="1" height="35" border="0" alt="" />
                      </td>
                    </tr>
                    <tr>
                      <td colspan="3">
                        <img name="n1202_r6_c1" src="../../images/1202/1202_r6_c1.png" width="880" height="20" border="0" id="n1202_r6_c1" alt="" />
                      </td>
                      <td>
                        <img src="../../images/1202/spacer.gif" width="1" height="20" border="0" alt="" />
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </div>
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

<script src="<?php echo base_url() ?>public/timeLine.js"></script>
