<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title> Organization Registry</title>
<link media="screen" rel="stylesheet" type="text/css" 
href="<?php echo $this->base;?>/css/style.css"  />
<?php /*echo $this->Html->script('jquery-1.4.2.min');*/ // Include jQuery library?>
<link rel="shortcut icon" href="<?php echo $this->base; ?>/img/favicon.ico" type="image/x-icon">
<?php echo $scripts_for_layout;?>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<!--Tree View-->
<link rel="stylesheet" href="<?php echo $this->base; ?>/jquery.treeview.css" />
<link rel="stylesheet" href="<?php echo $this->base; ?>/screen.css" />

<!--<script src="<?php echo $this->base; ?>/lib/jquery.js" type="text/javascript"></script>-->
<script src="<?php echo $this->base; ?>/lib/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo $this->base; ?>/jquery.treeview.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo $this->base; ?>/demo.js"></script>
 <!--Tree View-->
<script>
function search(keyword)
{
	if(keyword)
		window.open('<?php echo $this->base;?>/pages/keywordReport/'+escape(keyword),'','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
	else {
	window.open('<?php echo $this->base; ?>/pages/keywordReport/','','scrollbars=yes,menubar=yes,height=925,width=800,resizable=no,toolbar=no,location=no,addressbar=no,status=no,dialog=yes');
	}
}

jQuery(document).ready(function(){
   validSubmit = false;
});
</script>

</head>
<body>
		<div id="siteWrapper">
			<div id="siteHeader">
				<div id="headerFirst">
				</div>
				<div id="headerLogo">
					<img src="<?php echo $this->base; ?>/img/gov_logo.gif" />
				</div>
				<div id="siteTitle">
				<h3 style="font-size:27px;margin-left:3px;margin-top:2px;"> Organization Registry</h3>
							<p style="width:500px;font-size:12px;font-weight;bold;text-transform:none; position:relative;margin-top:-20px;">Government of People's Republic of Bangladesh</p>
					<p style="width:700px;font-size:15px;text-transform:uppercase;padding-top:4px; position:relative;margin-top:3px;">directorate general of health services</p>
				</div>
				<span style="float:right;display:inline;margin-top:50px;">
				<input type="button" name="report" value="Search" onClick="search(keyword.value);" style="width:80px;">
				</span>
				<div style="float:right;margin-top:70px;">
				<?php
					echo $this->Form->input('keyword',array('label'=>'','style'=>'
						float: left;
						text-decoration:bold;
						border: 1px solid #009900;
						border-radius: 3px 3px 3px 3px;
						height: 20px;
						margin-left: 10px;
						margin-top: -18px;
						width: 168px;display:inline;'));
				?>
				</div>
			</div><!-- end of siteHeader -->
			<div id="siteMenuWrapper">
				
					<ul>
					<li><a href="<?php echo $this->base; ?>/">Home</a></li> 
					<!--	
					<li class="seperator"></li>
					<li><a href="http://app.dghs.gov.bd/orgregistry/app/webroot/admin/">Register New Org.</a></li>

					<li class="seperator"></li>
					<li><a href="<?php echo $this->base; ?>/pages/requestNeworg"> Request for new registration </a></li>
					<li class="seperator"></li>
						<li><a href="<?php echo $this->base; ?>/pages/report"> Search Organization</a></li>-->
					<!--<li class="seperator"></li>
						<li><a href="http://app.dghs.gov.bd/orgregistry/app/webroot/report/"> Reports</a></li>-->
					
				</ul><div class="lclear"></div>
			</div><!-- end of siteMenuWrapper --><!-- end of siteMenuWrapper -->
			<div id="logoutInfo">
				<img src="<?php echo $this->base;?>/img/web.png"/>
				<p><a href="http://dghs.gov.bd" style="text-decoration:none;color:white;font-weight:bold; display: block;margin-left:-5px;">DGHS WEBSITE</a> </p>
			</div><!--<!--end of logoutInfo -->
			<div class="lclear"></div>
			<div id="contentWrapper">
			    <!--
				<div id="leftMenuWrapper">
					<?php echo $this->element('left_menu');?>
				</div><!-- end of leftMenuWrapper 
				-->
				<div id="mainContentWrapper">
					<?php echo $content_for_layout; ?>				
				</div><!-- end of mainContentWrapper -->
				<div class="lclear"></div>
			</div><!-- end of contentWrapper -->
			<div id="footerWrapper">
				<p>&copy; All Rights Reserved by Management Information System, Health Department, Mohakhali, Dhaka</p>				
			</div><!-- end of contentWrapper -->
		</div><!-- end of siteWrapper -->
	<!--[if !IE]>end footer<![endif]-->

</body>
</html>
