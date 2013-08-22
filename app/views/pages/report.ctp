<!--map of bangladesh-->
<meta charset='utf-8'>
<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<link href='/favicon.ico' rel='shortcut icon' type='image/x-icon'>
<link href="http://ctas.saltsidecdn.net/assets/application-024a5e94eb2f4b0d52aadaecaeaeae50.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://ctas.saltsidecdn.net/assets/sites/bikroy/common-91d5a09b3924904be34c64ba34e55beb.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://ctas.saltsidecdn.net/assets/sites/bikroy/bn-00a58616e9cadab9c1ff615c017ee6cd.css" media="screen" rel="stylesheet" type="text/css" />
<script>
    document.documentElement.className += " js";
    document.createElement("time");
    var KvData = {};
</script>
<!--map of bangladesh-->

<!--Tree View-->
<link rel="stylesheet" href="<?php echo $this->base; ?>/jquery.treeview.css" />
<link rel="stylesheet" href="<?php echo $this->base; ?>/screen.css" />

<!--<script src="<?php echo $this->base; ?>/lib/jquery.js" type="text/javascript"></script>-->
<script src="<?php echo $this->base; ?>/lib/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo $this->base; ?>/jquery.treeview.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo $this->base; ?>/demo.js"></script>
<!--Tree View-->

   	<!-- Heading for lightbox-->
    <link rel="stylesheet" href="<?php echo $this->base; ?>/css/lightbox.css" type="text/css" media="screen" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->base; ?>/js/jquery.lightbox.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
		    base_url = document.location.href.substring(0, document.location.href.indexOf('index.html'), 0);
		    
			$(".lightbox").lightbox({
			    fitToScreen: true,
			    imageClickClose: false
		    });
		    
		});

	</script>

	<style type="text/css">
		body{ color: #333; font: 13px 'Lucida Grande', Verdana, sans-serif;	}
	</style>
<!-- Heading for lightbox-->


     <link rel="stylesheet" href="<?php echo $this->base;?>/css/jquery.treeview.css" />
	
	<!--<script src="<?php echo $this->base;?>/js/jquery.js" type="text/javascript"></script>-->
	<script src="<?php echo $this->base;?>/js/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo $this->base;?>/js/jquery.treeview.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(function() {
			$("#tree").treeview({
				collapsed: true,
				animated: "fast",
				control:"#sidetreecontrol",
				prerendered: true,
				persist: "location"
			});
		})
		
	</script>
   <?php 
    mysql_connect("103.247.238.173","root","mistestdb");
    mysql_select_db("orgregistry");
	?>			
				<div id="mainContentWrapper" style="float:left;width:400px;border:0px;">

					<div class="widget-content">
						<table border="0" width="100%">
						<tr>
						<td width="25%" style="border-right:thin dotted #0C0" valign="top" align="left">
						<h3><u>Selection Panel</u></h3>
                        <br>
                        <form name="form1" id="form1">
                        <select id="div" onChange="showDist(this.value)">
                         <option value="">--Select Division--</option>
                         <option value="0">--All Division--</option>
                         <?php
                         $div = mysql_query("SELECT * FROM divisions ORDER BY name");
                         while($rowdiv = mysql_fetch_array($div))
                         {
                             $s6 = "";
                             if($rorg1['division_code'] == $rowdiv['division_id'])
                             {
                                 $s6 = "selected";
                             }
                         ?>
                            <option value="<?php echo $rowdiv['division_id']; ?>" <?php echo $s6; ?>><?php echo $rowdiv['name']; ?></option>
                         <?php
                         }
                         ?>
                         </select>
                        <br><br>
                        <div id="txtDist">
                         <select id="dis">
                         <option value="">--Select District--</option>
                         </select>
                        </div>
                        <br>
                        <div id="txtUpa">
                         <select id="upa">
                         <option value="">--Select Upazila--</option>
                         </select>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary btn-large" onClick="loadReport()">Submit Selection</button>&nbsp;&nbsp;
                        <button type="reset" class="btn btn-large">Reset</button>
                        </form>
						</td>
						<td width="75%" valign="top" align="center">
						<h3 align="center">Type wise Organization Report</h3>
                        <br>
                        <div id="report">
                        <table class="table table-striped table-bordered table-highlight" id="example" width="90%" style="padding-left:10px">
							<thead>
								<tr>
									<th><b>Organization Type(s)</b></th>
									<th><b>Total Organization(s)</b></th>
									<!--<th><b>Total Sanctioned Post(s)</b></th>-->
																		
								</tr>
							</thead>
							<tbody>
                            <?php
							/*$org = mysql_query("SELECT * FROM organizations order by organization_id LIMIT 0,100");
							while($roworg = mysql_fetch_array($org))
							{*/
							?>
                         
								<tr>
									<td colspan="2" align="center">No Selection Made</td>
                                </tr>
		
							</tbody>
						</table>
						</div>
						
						</td>
						</tr>
						</table>
						</div>


 </div>