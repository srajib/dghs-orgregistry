<?php
ini_set('memory_limit', '-1');
session_start();
include('lib/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Report Panel | Home</title>

<!-- Show Report -->
<script type="text/javascript">
function loadReport()
{
var p=document.form1.type.value;
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("report").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","ajax2.php?p="+p,true);
xmlhttp.send();
}
</script>
<!-- Show Report -->

<!-- Javascript -->
<script src="./js/jquery-1.7.2.min.js"></script>
<script src="./js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="./js/jquery.ui.touch-punch.min.js"></script>
<script src="./js/bootstrap.js"></script>

<script src="./js/Slate.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Styles -->
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.css" rel="stylesheet">
<link href="./css/bootstrap-overrides.css" rel="stylesheet">

<link href="./css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">

<link href="./css/slate.css" rel="stylesheet">
<link href="./css/slate-responsive.css" rel="stylesheet">  

<!-- Javascript -->




<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body>
 	
  	
<div id="header">
	
	<div class="container">			
		
		<div style="height:100px; width:auto;"><img src="img/logo.png" style="height:80px; width:95px; border:none"><font style="font-family:'Arial Black', Gadget, sans-serif; font-size:25px;position:relative; bottom:15px; color:#CCC">Organization Registry Admin Panel</font><br>
<font style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:13px; left:95px; position:relative; bottom:40px; float:left; color:#CCC">Government of People's Republic of Bangladesh</font><br>
<font style="font-family:Arial, Helvetica, sans-serif; font-size:15px; left:95px; position:relative; bottom:42px;  color:#CCC"><b>Directorate General of Health Services</b></font></div>			
		
		<div id="info">				
			
			<a href="javascript:;" id="info-trigger">
				<i class="icon-cog"></i>
			</a>
			
			<div id="info-menu">
				
				<div class="info-details">
				
					<h4>Welcome,  <font color="orange"></font>.</h4>
					
					<p>
						
						<br>
						
					</p>
					
				</div> <!-- /.info-details -->
				
				
				
			</div> <!-- /#info-menu -->
			
		</div> <!-- /#info -->
		
	</div> <!-- /.container -->

</div> <!-- /#header -->


<div id="nav">
		
	<div class="container">
		
		<a href="javascript:;" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        	<i class="icon-reorder"></i>
      	</a>
		
		<div class="nav-collapse">
			
			<ul class="nav" style="float:left; position:relative">
		
				<!--<li class="nav-icon">
					<a href="./">
						<i class="icon-home"></i>
						<span>Home</span>
					</a>	    				
				</li>-->
				
				<li class="dropdown active">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-th"></i>
						Sanctioned Post Report Generation
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="index.php">Org. Type wise Sanctioned Post</a></li>
						<li><a href="index2.php">Org. wise Sanctioned Post</a></li>
					</ul>    				
				</li>
				
				<!--<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-copy"></i>
						Sample Pages
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="./invoice.html">Invoice</a></li>
						<li><a href="./faq.html">FAQ</a></li>
						<li><a href="./pricing.html">Pricing Plans</a></li>
						<li><a href="./gallery.html">Image Gallery</a></li>
						<li><a href="./wizard.html">Wizard</a></li>
						<li><a href="./reports.html">Reports</a></li>
						<li><a href="./calendar.html">Calendar</a></li>
					</ul>    				
				</li>
				
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-external-link"></i>
						Other Pages
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">							
						<li><a href="./login.html">Login</a></li>
						<li><a href="./signup.html">Signup</a></li>
						<li><a href="./error.html">Error</a></li>
						<li class="dropdown">
							<a href="javascript:;">
								Dropdown Menu									
								<i class="icon-chevron-right sub-menu-caret"></i>
							</a>
							
							<ul class="dropdown-menu sub-menu">
		                        <li><a href="javascript:;">Dropdown #1</a></li>
		                        <li><a href="javascript:;">Dropdown #2</a></li>
		                        <li><a href="javascript:;">Dropdown #3</a></li>
		                        <li><a href="javascript:;">Dropdown #4</a></li>
		                    </ul>
						</li>
					</ul>    				
				</li>-->
				
				
			
			</ul>
			
			
			<ul class="nav pull-right">
		
				<li class="">
					<form class="navbar-search pull-left">
						<input type="text" class="search-query" placeholder="Search">
						<button class="search-btn"><i class="icon-search"></i></button>
					</form>	    				
				</li>
				
			</ul>
			
		</div> <!-- /.nav-collapse -->
		
	</div> <!-- /.container -->
	
</div> <!-- /#nav -->


<div id="content">
		
	<div class="container">
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li class="active">
			    <a href="/">Home</a> <span class="divider">/</span>
			  </li>
			  
			</ul>
			
			
		</div> <!-- /.page-title -->
	
		
		
		<div class="row">
			
		    
		    
		    
		    
		    
		    
		    
		    <div class="span12">
		    	
		    	<div class="widget">
					
					<div class="widget-header">
						
						<h3>
							<i class="icon-sort"></i> 
							Organizations List
							
						</h3>
                        				
					</div> <!-- /.widget-header -->
					
					<div class="widget-content">
						<table border="0" width="100%">
						<tr>
						<td width="25%" style="border-right:thin dotted #0C0" valign="top" align="left">
						<h3><u>Selection Panel</u></h3>
                        <br>
                        <form name="form1" id="form1">
                        <select id="type">
                         <option value="">--Select Organization Type--</option>
                         <?php
                         $t = mysql_query("SELECT * FROM org_types ORDER BY type_name");
                         while($rt = mysql_fetch_array($t))
                         {
                         ?>
                            <option value="<?php echo $rt['type_id']; ?>"><?php echo $rt['type_name']; ?></option>
                         <?php
                         }
                         ?>
                         </select>
                        <br><br>
                        <button type="button" class="btn btn-primary btn-large" onClick="loadReport()">Submit Selection</button>&nbsp;&nbsp;
                        <button type="reset" class="btn btn-large">Reset</button>
                        </form>
						</td>
						<td width="75%" valign="top" align="center">
						<h3 align="center">Organization Type wise Sanctioned Post Report</h3>
                        <br>
                        <div id="report">
                        <table class="table table-striped table-bordered table-highlight" id="example" width="90%" style="padding-left:10px">
							<thead>
								<tr>
									<th><b>Organization Name(s)</b></th>
									<th><b>Total Sanctioned Post(s)</b></th>
									<th><b>Total Filled Sanctioned Post(s)</b></th>
																		
								</tr>
							</thead>
							<tbody>
                            <?php
							/*$org = mysql_query("SELECT * FROM organizations order by organization_id LIMIT 0,100");
							while($roworg = mysql_fetch_array($org))
							{*/
							?>
                         
								<tr>
									<td colspan="3" align="center">No Selection Made</td>
                                </tr>
		
							</tbody>
						</table>
						</div>
						
						</td>
						</tr>
						</table>
						</div>

                        </div>
                        </div>	
                        
					</div>
					
				</div> <!-- /.widget -->
		    	
		    	
		    </div> <!-- /.span12 -->
		    
		    
		    
		    
		    
		    
		    
		    
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->



<div id="footer">	
		
	<div class="container">
		
		&copy; 2012 Propel UI, all rights reserved.
		
	</div> <!-- /.container -->		
	
</div> <!-- /#footer -->





  </body>
</html>


