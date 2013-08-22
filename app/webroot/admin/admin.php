<?php
session_start();
include('lib/connect.php');
if(empty($_SESSION['loginid']))
{
	print "<script>";
	print " self.location='index.php'"; // Comment this line if you don't want to redirect
	print "</script>";
}


if($_SESSION['loginid'] >= 3)
{
	print "<script>";
	print " self.location='org.php'"; // Comment this line if you don't want to redirect
	print "</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Organization List | Admin Panel</title>

<!--Tree View-->
<link rel="stylesheet" href="jquery.treeview.css" />
	<link rel="stylesheet" href="screen.css" />
	
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="lib/jquery.cookie.js" type="text/javascript"></script>
	<script src="jquery.treeview.js" type="text/javascript"></script>
	
	<script type="text/javascript" src="demo.js"></script>
 <!--Tree View-->



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


<!-- Show Ogranizations -->
<script type="text/javascript">
function loadReport()
{
var p=document.form1.srch.value;
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
xmlhttp.open("GET","orga.php?p="+p,true);
xmlhttp.send();
}
</script>
<!-- Show Ogranizations -->



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
				
					<h4>Welcome, logged in as <font color="orange"><?php echo $_SESSION['email']; ?></font>.</h4>
					
					<p>
						
						<br>
						Click to <a href="logout.php">Logout</a>
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
		
				<li class="nav-icon">
					<a href="./">
						<i class="icon-home"></i>
						<span>Home</span>
					</a>	    				
				</li>
				
				<li class="dropdown active">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-th"></i>
						Components
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="./forms.html">Forms</a></li>
						<li><a href="./ui-elements.html">UI Elements</a></li>
						<li><a href="./grid.html">Grid Layout</a></li>
						<li><a href="./tables.html">Tables</a></li>
						<li><a href="./widgets.html">Widget Boxes</a></li>
						<li><a href="./charts.html">Charts</a></li>
						<li><a href="./tabs.html">Tabs & Accordion</a></li>
						<li><a href="./buttons.html">Buttons</a></li>
					</ul>    				
				</li>
				
				<li class="dropdown">					
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
				</li>
				
				
			
			</ul>
			
			
			<ul class="nav pull-right">
		
				<li class="">
					
                    	<input type="text" class="search-query">
						 				
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
                        
                        <label style="padding-top:0px; padding-right:6px; float:right">
                        <form id="form1" name="form1" class="navbar-search pull-left">
                        <b>Search Organization by Name:</b>
                        <input id="srch" type="text" aria-controls="example" onKeyUp="loadReport()">
                         </form>	
                        </label>
                       				
					</div> <!-- /.widget-header -->
					
					<div class="widget-content">
						<table border="0" width="100%">
						<tr>
						<td width="20%" style="border-right:thin dotted #0C0" valign="top">
	<?php
    //mysql_connect("103.247.238.173","root","mistestdb");
    //mysql_select_db("org_registry");
    $tree = mysql_query("SELECT * from divisions");
    ?>
    <ul id="navigation">
        <li><a href="admin.php"><font size="2">Bangladesh</font></a>
            <ul>
                <?php
                while($row = mysql_fetch_array($tree))
                {

                    ?>
                    <li><a href="admin.php?div=<?php echo $row['division_id']; ?>"><font size="2"><?php echo $row['name']; ?></font></a>
                        <ul>
                            <?php
                            $divid = $row['division_id'];
                            $dist = mysql_query("SELECT * FROM districts WHERE division_id='$divid'");
                            while($rowdist = mysql_fetch_array($dist))
                            {
                                ?>
                                <li><a href="admin.php?dis=<?php echo $rowdist['district_id']; ?>"><font size="2"><?php echo $rowdist['name']; ?></font></a>
                                <ul>
                                	<?php
									$distid = $rowdist['district_id'];
									$upa = mysql_query("SELECT * FROM upazillas WHERE district_id='$distid'");
									while($rowupa = mysql_fetch_array($upa))
									{
										?>
										<li><a href="admin.php?upa=<?php echo $rowupa['upazilla_id']; ?>"><font size="2"><?php echo $rowupa['name']; ?></font></a>
										</li>
										<?php
									}
									?>
                                    </ul>
                                   </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </li>
    </ul>
							
						</td>
						<td width="80%" valign="top" align="center">
						<h3 align="center">Organization List of Bangladesh</h3>
                        <div id="report">
                        <table class="table table-striped table-bordered table-highlight" id="example" width="90%" style="padding-left:10px">
							<thead>
								<tr>
									<th width="50px"><b>Org. Code</b></th>
									<th width="220px"><b>Organization Name</b></th>
									<th width="150px"><b>Organization Type</b></th>
									<th width="90px"><b>Division</b></th>
									<th width="90px"><b>District</b></th>
									<th width="110px"><b>Upazila</b></th>
									<th width="50px"><b>Action</b></th>
									
								</tr>
							</thead>
							<tbody>
                            <?php
							/*$org = mysql_query("SELECT * FROM organizations order by organization_id LIMIT 0,100");
							while($roworg = mysql_fetch_array($org))
							{*/
							?>
<?php
$div = $_GET['div'];
$dis = $_GET['dis'];
$upa = $_GET['upa'];
if($div == "" && $dis == "" && $upa == "")
{
	// Adam's Custom PHP MySQL Pagination Tutorial and Script
	// You have to put your mysql connection data and alter the SQL queries(both queries)
	// This script is in tutorial form and is accompanied by the following video:
	// http://www.youtube.com/watch?v=K8xYGnEOXYc
	//mysql_connect("localhost","root","") or die (mysql_error());
	//mysql_select_db("bbs_code") or die (mysql_error());
	//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
	$sql = mysql_query("SELECT * FROM organizations");
	//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
	$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
	if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
		$pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
		//$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
	} else { // If the pn URL variable is not present force it to be value of page number 1
		$pn = 1;
	}
	//This is where we set how many database items to show on each page
	$itemsPerPage = 100;
	// Get the value of the last page in the pagination result set
	$lastPage = ceil($nr / $itemsPerPage);
	// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
	if ($pn < 1) { // If it is less than 1
		$pn = 1; // force if to be 1
	} else if ($pn > $lastPage) { // if it is greater than $lastpage
		$pn = $lastPage; // force it to be $lastpage's value
	}
	// This creates the numbers to click in between the next and back buttons
	// This section is explained well in the video that accompanies this script
	$centerPages = "";
	$sub1 = $pn - 1;
	$sub2 = $pn - 2;
	$add1 = $pn + 1;
	$add2 = $pn + 2;
	if ($pn == 1) {
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	} else if ($pn == $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
	} else if ($pn > 2 && $pn < ($lastPage - 1)) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add2 . '">' . $add2 . '</a> &nbsp;&nbsp;';
	} else if ($pn > 1 && $pn < $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	}
	// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
	$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage;
	// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
	// $sql2 is what we will use to fuel our while loop statement below
	$sql2 = mysql_query("SELECT * FROM organizations $limit");
	//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
	$paginationDisplay = ""; // Initialize the pagination output variable
	// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
	if ($lastPage != "1"){
		// This shows the user what page they are on, and the total number of pages
		//$paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
		// If we are not on page 1 we can place the Back button
		$firstpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?pn=1"><< First Page</a></li>';
		if ($pn != 1) {
			$previous = $pn - 1;
			$backpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '"> ← Previous </a></li>';
		}
		// Lay in the clickable numbers display here between the Back and Next links
		$centerpage .= '<li><a href="#">' . $centerPages . '</a></li>';
		// If we are not on the very last page we can place the Next button
		if ($pn != $lastPage) {
			$nextPage = $pn + 1;
			$nextpagination =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"> Next → </a></li>';
		}
	
		$lstpage =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $lastPage . '">Last Page >></a></li>&nbsp;';
	}
	///////////////////////////////////// END Adam's Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
	// Build the Output Section Here
	$outputList = '';
	while($row = mysql_fetch_array($sql2))
	{

?>                            
								<tr>
									<td align="center"><?php echo $row['organization_code']; ?></td>
                                    <td align="center"><?php echo $row['title']; ?></td>
                                    <?php
									$type = $row['org_type_id'];
									$tp = mysql_query("SELECT * FROM org_types WHERE type_id='$type'");
									$rowtp = mysql_fetch_assoc($tp);
									?>
                                    <td align="center"><?php echo $rowtp['name']; ?></td>
                                    <?php
									$div = $row['division_code'];
									$dv = mysql_query("SELECT * FROM divisions WHERE division_id='$div'");
									$rowdv = mysql_fetch_assoc($dv);
									?>
                                    <td align="center"><?php echo $rowdv['name']; ?></td>
                                    <?php
									$dis = $row['district_code'];
									$ds = mysql_query("SELECT * FROM districts WHERE district_id='$dis'");
									$rowds = mysql_fetch_assoc($ds);
									?>
                                    <td align="center"><?php echo $rowds['name']; ?></td>
                                    <?php
									$up = $row['upazila_code'];
									if($up == 0)
									{
										$upaz = "Not Found";
									}else{
										$upa = mysql_query("SELECT * FROM upazillas WHERE upazilla_id='$up'");
										$rowupa = mysql_fetch_assoc($upa);
										$upaz = $rowupa['name'];
									}
									?>
                                    <td align="center"><?php echo $upaz; ?></td>
                                    <td align="center"><a href="details.php?id=<?php echo $row['organization_id']; ?>"><img src="images/edit.png" height="15px" width="15px"></a>&nbsp;&nbsp;&nbsp;<img src="images/delete.png" height="15px" width="15px"></td>
								</tr>
<?
	}
?>			
							</tbody>
						</table>
                        
						<div class="span6">
                        <div class="dataTables_paginate paging_bootstrap pagination">
                          <ul>
                            <?php echo $firstpage; ?>
                            <?php echo $backpage; ?>
                            <?php echo $centerpage; ?>
                            <?php echo $nextpagination; ?>
                            <?php echo $lstpage; ?>
                           <!-- <li>
                            <a href="#">3</a>
                            </li>
                            <li>
                            <a href="#">4</a>
                            </li>
                            <li>
                            <a href="#">5</a>
                            </li>-->
                            
                          </ul>
                          </div>
<?php
}
elseif($div != "")
{
		// Adam's Custom PHP MySQL Pagination Tutorial and Script
	// You have to put your mysql connection data and alter the SQL queries(both queries)
	// This script is in tutorial form and is accompanied by the following video:
	// http://www.youtube.com/watch?v=K8xYGnEOXYc
	//mysql_connect("localhost","root","") or die (mysql_error());
	//mysql_select_db("bbs_code") or die (mysql_error());
	//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
	$sql = mysql_query("SELECT * FROM organizations WHERE division_code='$div'");
	//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
	$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
	if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
		$pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
		//$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
	} else { // If the pn URL variable is not present force it to be value of page number 1
		$pn = 1;
	}
	//This is where we set how many database items to show on each page
	$itemsPerPage = 100;
	// Get the value of the last page in the pagination result set
	$lastPage = ceil($nr / $itemsPerPage);
	// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
	if ($pn < 1) { // If it is less than 1
		$pn = 1; // force if to be 1
	} else if ($pn > $lastPage) { // if it is greater than $lastpage
		$pn = $lastPage; // force it to be $lastpage's value
	}
	// This creates the numbers to click in between the next and back buttons
	// This section is explained well in the video that accompanies this script
	$centerPages = "";
	$sub1 = $pn - 1;
	$sub2 = $pn - 2;
	$add1 = $pn + 1;
	$add2 = $pn + 2;
	if ($pn == 1) {
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	} else if ($pn == $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
	} else if ($pn > 2 && $pn < ($lastPage - 1)) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $add2 . '">' . $add2 . '</a> &nbsp;&nbsp;';
	} else if ($pn > 1 && $pn < $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	}
	// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
	$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage;
	// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
	// $sql2 is what we will use to fuel our while loop statement below
	$sql2 = mysql_query("SELECT * FROM organizations WHERE division_code='$div' $limit");
	//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
	$paginationDisplay = ""; // Initialize the pagination output variable
	// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
	if ($lastPage != "1"){
		// This shows the user what page they are on, and the total number of pages
		//$paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
		// If we are not on page 1 we can place the Back button
		$firstpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=1"><< First Page</a></li>';
		if ($pn != 1) {
			$previous = $pn - 1;
			$backpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $previous . '"> ← Previous </a></li>';
		}
		// Lay in the clickable numbers display here between the Back and Next links
		$centerpage .= '<li><a href="#">' . $centerPages . '</a></li>';
		// If we are not on the very last page we can place the Next button
		if ($pn != $lastPage) {
			$nextPage = $pn + 1;
			$nextpagination =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $nextPage . '"> Next → </a></li>';
		}
	
		$lstpage =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?div='.$div.'&pn=' . $lastPage . '">Last Page >></a></li>&nbsp;';
	}
	///////////////////////////////////// END Adam's Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
	// Build the Output Section Here
	$outputList = '';
	while($row = mysql_fetch_array($sql2))
	{

?>

								<tr>
									<td align="center"><?php echo $row['organization_code']; ?></td>
                                    <td align="center"><?php echo $row['title']; ?></td>
                                    <?php
									$type = $row['org_type_id'];
									$tp = mysql_query("SELECT * FROM org_types WHERE type_id='$type'");
									$rowtp = mysql_fetch_assoc($tp);
									?>
                                    <td align="center"><?php echo $rowtp['name']; ?></td>
                                    <?php
									$div = $row['division_code'];
									$dv = mysql_query("SELECT * FROM divisions WHERE division_id='$div'");
									$rowdv = mysql_fetch_assoc($dv);
									?>
                                    <td align="center"><?php echo $rowdv['name']; ?></td>
                                    <?php
									$dis = $row['district_code'];
									$ds = mysql_query("SELECT * FROM districts WHERE district_id='$dis'");
									$rowds = mysql_fetch_assoc($ds);
									?>
                                    <td align="center"><?php echo $rowds['name']; ?></td>
                                    <?php
									$up = $row['upazila_code'];
									if($up == 0)
									{
										$upaz = "Not Found";
									}else{
										$upa = mysql_query("SELECT * FROM upazillas WHERE upazilla_id='$up'");
										$rowupa = mysql_fetch_assoc($upa);
										$upaz = $rowupa['name'];
									}
									?>
                                    <td align="center"><?php echo $upaz; ?></td>
                                    <td align="center"><img src="images/edit.png" height="15px" width="15px">&nbsp;&nbsp;&nbsp;<img src="images/delete.png" height="15px" width="15px"></td>
								</tr>
<?
	}
?>			
							</tbody>
						</table>
                        
						<div class="span6">
                        <div class="dataTables_paginate paging_bootstrap pagination">
                          <ul>
                            <?php echo $firstpage; ?>
                            <?php echo $backpage; ?>
                            <?php echo $centerpage; ?>
                            <?php echo $nextpagination; ?>
                            <?php echo $lstpage; ?>
                           <!-- <li>
                            <a href="#">3</a>
                            </li>
                            <li>
                            <a href="#">4</a>
                            </li>
                            <li>
                            <a href="#">5</a>
                            </li>-->
                            
                          </ul>
                          </div>
<?php
}
elseif($dis != "")
{
		// Adam's Custom PHP MySQL Pagination Tutorial and Script
	// You have to put your mysql connection data and alter the SQL queries(both queries)
	// This script is in tutorial form and is accompanied by the following video:
	// http://www.youtube.com/watch?v=K8xYGnEOXYc
	//mysql_connect("localhost","root","") or die (mysql_error());
	//mysql_select_db("bbs_code") or die (mysql_error());
	//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
	$sql = mysql_query("SELECT * FROM organizations WHERE district_code='$dis'");
	//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
	$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
	if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
		$pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
		//$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
	} else { // If the pn URL variable is not present force it to be value of page number 1
		$pn = 1;
	}
	//This is where we set how many database items to show on each page
	$itemsPerPage = 100;
	// Get the value of the last page in the pagination result set
	$lastPage = ceil($nr / $itemsPerPage);
	// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
	if ($pn < 1) { // If it is less than 1
		$pn = 1; // force if to be 1
	} else if ($pn > $lastPage) { // if it is greater than $lastpage
		$pn = $lastPage; // force it to be $lastpage's value
	}
	// This creates the numbers to click in between the next and back buttons
	// This section is explained well in the video that accompanies this script
	$centerPages = "";
	$sub1 = $pn - 1;
	$sub2 = $pn - 2;
	$add1 = $pn + 1;
	$add2 = $pn + 2;
	if ($pn == 1) {
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	} else if ($pn == $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
	} else if ($pn > 2 && $pn < ($lastPage - 1)) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $add2 . '">' . $add2 . '</a> &nbsp;&nbsp;';
	} else if ($pn > 1 && $pn < $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	}
	// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
	$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage;
	// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
	// $sql2 is what we will use to fuel our while loop statement below
	$sql2 = mysql_query("SELECT * FROM organizations WHERE district_code='$dis' $limit");
	//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
	$paginationDisplay = ""; // Initialize the pagination output variable
	// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
	if ($lastPage != "1"){
		// This shows the user what page they are on, and the total number of pages
		//$paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
		// If we are not on page 1 we can place the Back button
		$firstpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=1"><< First Page</a></li>';
		if ($pn != 1) {
			$previous = $pn - 1;
			$backpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $previous . '"> ← Previous </a></li>';
		}
		// Lay in the clickable numbers display here between the Back and Next links
		$centerpage .= '<li><a href="#">' . $centerPages . '</a></li>';
		// If we are not on the very last page we can place the Next button
		if ($pn != $lastPage) {
			$nextPage = $pn + 1;
			$nextpagination =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $nextPage . '"> Next → </a></li>';
		}
	
		$lstpage =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?dis='.$dis.'&pn=' . $lastPage . '">Last Page >></a></li>&nbsp;';
	}
	///////////////////////////////////// END Adam's Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
	// Build the Output Section Here
	$outputList = '';
	while($row = mysql_fetch_array($sql2))
	{

?>

								<tr>
									<td align="center"><?php echo $row['organization_code']; ?></td>
                                    <td align="center"><?php echo $row['title']; ?></td>
                                    <?php
									$type = $row['org_type_id'];
									$tp = mysql_query("SELECT * FROM org_types WHERE type_id='$type'");
									$rowtp = mysql_fetch_assoc($tp);
									?>
                                    <td align="center"><?php echo $rowtp['name']; ?></td>
                                    <?php
									$div = $row['division_code'];
									$dv = mysql_query("SELECT * FROM divisions WHERE division_id='$div'");
									$rowdv = mysql_fetch_assoc($dv);
									?>
                                    <td align="center"><?php echo $rowdv['name']; ?></td>
                                    <?php
									$dis = $row['district_code'];
									$ds = mysql_query("SELECT * FROM districts WHERE district_id='$dis'");
									$rowds = mysql_fetch_assoc($ds);
									?>
                                    <td align="center"><?php echo $rowds['name']; ?></td>
                                    <?php
									$up = $row['upazila_code'];
									if($up == 0)
									{
										$upaz = "Not Found";
									}else{
										$upa = mysql_query("SELECT * FROM upazillas WHERE upazilla_id='$up'");
										$rowupa = mysql_fetch_assoc($upa);
										$upaz = $rowupa['name'];
									}
									?>
                                    <td align="center"><?php echo $upaz; ?></td>
                                    <td align="center"><img src="images/edit.png" height="15px" width="15px">&nbsp;&nbsp;&nbsp;<img src="images/delete.png" height="15px" width="15px"></td>
								</tr>
<?
	}
?>			
							</tbody>
						</table>
                        
						<div class="span6">
                        <div class="dataTables_paginate paging_bootstrap pagination">
                          <ul>
                            <?php echo $firstpage; ?>
                            <?php echo $backpage; ?>
                            <?php echo $centerpage; ?>
                            <?php echo $nextpagination; ?>
                            <?php echo $lstpage; ?>
                           <!-- <li>
                            <a href="#">3</a>
                            </li>
                            <li>
                            <a href="#">4</a>
                            </li>
                            <li>
                            <a href="#">5</a>
                            </li>-->
                            
                          </ul></div>
<?php
}
elseif($upa != "")
{
			// Adam's Custom PHP MySQL Pagination Tutorial and Script
	// You have to put your mysql connection data and alter the SQL queries(both queries)
	// This script is in tutorial form and is accompanied by the following video:
	// http://www.youtube.com/watch?v=K8xYGnEOXYc
	//mysql_connect("localhost","root","") or die (mysql_error());
	//mysql_select_db("bbs_code") or die (mysql_error());
	//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
	$sql = mysql_query("SELECT * FROM organizations WHERE upazila_code='$upa'");
	//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
	$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
	if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
		$pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
		//$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
	} else { // If the pn URL variable is not present force it to be value of page number 1
		$pn = 1;
	}
	//This is where we set how many database items to show on each page
	$itemsPerPage = 100;
	// Get the value of the last page in the pagination result set
	$lastPage = ceil($nr / $itemsPerPage);
	// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
	if ($pn < 1) { // If it is less than 1
		$pn = 1; // force if to be 1
	} else if ($pn > $lastPage) { // if it is greater than $lastpage
		$pn = $lastPage; // force it to be $lastpage's value
	}
	// This creates the numbers to click in between the next and back buttons
	// This section is explained well in the video that accompanies this script
	$centerPages = "";
	$sub1 = $pn - 1;
	$sub2 = $pn - 2;
	$add1 = $pn + 1;
	$add2 = $pn + 2;
	if ($pn == 1) {
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	} else if ($pn == $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
	} else if ($pn > 2 && $pn < ($lastPage - 1)) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $add2 . '">' . $add2 . '</a> &nbsp;&nbsp;';
	} else if ($pn > 1 && $pn < $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	}
	// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
	$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage;
	// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
	// $sql2 is what we will use to fuel our while loop statement below
	$sql2 = mysql_query("SELECT * FROM organizations WHERE upazila_code='$upa' $limit");
	//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
	$paginationDisplay = ""; // Initialize the pagination output variable
	// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
	if ($lastPage != "1"){
		// This shows the user what page they are on, and the total number of pages
		//$paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
		// If we are not on page 1 we can place the Back button
		$firstpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=1"><< First Page</a></li>';
		if ($pn != 1) {
			$previous = $pn - 1;
			$backpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $previous . '"> ← Previous </a></li>';
		}
		// Lay in the clickable numbers display here between the Back and Next links
		$centerpage .= '<li><a href="#">' . $centerPages . '</a></li>';
		// If we are not on the very last page we can place the Next button
		if ($pn != $lastPage) {
			$nextPage = $pn + 1;
			$nextpagination =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $nextPage . '"> Next → </a></li>';
		}
	
		$lstpage =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?upa='.$upa.'&pn=' . $lastPage . '">Last Page >></a></li>&nbsp;';
	}
	///////////////////////////////////// END Adam's Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
	// Build the Output Section Here
	$outputList = '';
	while($row = mysql_fetch_array($sql2))
	{

?>

								<tr>
									<td align="center"><?php echo $row['organization_code']; ?></td>
                                    <td align="center"><?php echo $row['title']; ?></td>
                                    <?php
									$type = $row['org_type_id'];
									$tp = mysql_query("SELECT * FROM org_types WHERE type_id='$type'");
									$rowtp = mysql_fetch_assoc($tp);
									?>
                                    <td align="center"><?php echo $rowtp['name']; ?></td>
                                    <?php
									$div = $row['division_code'];
									$dv = mysql_query("SELECT * FROM divisions WHERE division_id='$div'");
									$rowdv = mysql_fetch_assoc($dv);
									?>
                                    <td align="center"><?php echo $rowdv['name']; ?></td>
                                    <?php
									$dis = $row['district_code'];
									$ds = mysql_query("SELECT * FROM districts WHERE district_id='$dis'");
									$rowds = mysql_fetch_assoc($ds);
									?>
                                    <td align="center"><?php echo $rowds['name']; ?></td>
                                    <?php
									$up = $row['upazila_code'];
									if($up == 0)
									{
										$upaz = "Not Found";
									}else{
										$upa = mysql_query("SELECT * FROM upazillas WHERE upazilla_id='$up'");
										$rowupa = mysql_fetch_assoc($upa);
										$upaz = $rowupa['name'];
									}
									?>
                                    <td align="center"><?php echo $upaz; ?></td>
                                    <td align="center"><img src="images/edit.png" height="15px" width="15px">&nbsp;&nbsp;&nbsp;<img src="images/delete.png" height="15px" width="15px"></td>
								</tr>
<?
	}
?>			
							</tbody>
						</table>
                        
						<div class="span6">
                        <div class="dataTables_paginate paging_bootstrap pagination">
                          <ul>
                            <?php echo $firstpage; ?>
                            <?php echo $backpage; ?>
                            <?php echo $centerpage; ?>
                            <?php echo $nextpagination; ?>
                            <?php echo $lstpage; ?>
                           <!-- <li>
                            <a href="#">3</a>
                            </li>
                            <li>
                            <a href="#">4</a>
                            </li>
                            <li>
                            <a href="#">5</a>
                            </li>-->
                            
                          </ul></div>
<?php
}
else
{
		// Adam's Custom PHP MySQL Pagination Tutorial and Script
	// You have to put your mysql connection data and alter the SQL queries(both queries)
	// This script is in tutorial form and is accompanied by the following video:
	// http://www.youtube.com/watch?v=K8xYGnEOXYc
	//mysql_connect("localhost","root","") or die (mysql_error());
	//mysql_select_db("bbs_code") or die (mysql_error());
	//////////////  QUERY THE MEMBER DATA INITIALLY LIKE YOU NORMALLY WOULD
	$sql = mysql_query("SELECT * FROM organizations");
	//////////////////////////////////// Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////
	$nr = mysql_num_rows($sql); // Get total of Num rows from the database query
	if (isset($_GET['pn'])) { // Get pn from URL vars if it is present
		$pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
		//$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)
	} else { // If the pn URL variable is not present force it to be value of page number 1
		$pn = 1;
	}
	//This is where we set how many database items to show on each page
	$itemsPerPage = 100;
	// Get the value of the last page in the pagination result set
	$lastPage = ceil($nr / $itemsPerPage);
	// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
	if ($pn < 1) { // If it is less than 1
		$pn = 1; // force if to be 1
	} else if ($pn > $lastPage) { // if it is greater than $lastpage
		$pn = $lastPage; // force it to be $lastpage's value
	}
	// This creates the numbers to click in between the next and back buttons
	// This section is explained well in the video that accompanies this script
	$centerPages = "";
	$sub1 = $pn - 1;
	$sub2 = $pn - 2;
	$add1 = $pn + 1;
	$add2 = $pn + 2;
	if ($pn == 1) {
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	} else if ($pn == $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
	} else if ($pn > 2 && $pn < ($lastPage - 1)) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub2 . '">' . $sub2 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add2 . '">' . $add2 . '</a> &nbsp;&nbsp;';
	} else if ($pn > 1 && $pn < $lastPage) {
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '">' . $sub1 . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="#" class="active">' . $pn . '</a> &nbsp;&nbsp;';
		$centerPages .= '&nbsp;&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '">' . $add1 . '</a> &nbsp;&nbsp;';
	}
	// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
	$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage;
	// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
	// $sql2 is what we will use to fuel our while loop statement below
	$sql2 = mysql_query("SELECT * FROM organizations $limit");
	//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
	$paginationDisplay = ""; // Initialize the pagination output variable
	// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
	if ($lastPage != "1"){
		// This shows the user what page they are on, and the total number of pages
		//$paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
		// If we are not on page 1 we can place the Back button
		$firstpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?pn=1"><< First Page</a></li>';
		if ($pn != 1) {
			$previous = $pn - 1;
			$backpage =  '<li class="prev"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . '"> ← Previous </a></li>';
		}
		// Lay in the clickable numbers display here between the Back and Next links
		$centerpage .= '<li><a href="#">' . $centerPages . '</a></li>';
		// If we are not on the very last page we can place the Next button
		if ($pn != $lastPage) {
			$nextPage = $pn + 1;
			$nextpagination =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . '"> Next → </a></li>';
		}
	
		$lstpage =  '<li class="next"><a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $lastPage . '">Last Page >></a></li>&nbsp;';
	}
	///////////////////////////////////// END Adam's Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
	// Build the Output Section Here
	$outputList = '';
	while($row = mysql_fetch_array($sql2))
	{

?>

								<tr>
									<td align="center"><?php echo $row['organization_code']; ?></td>
                                    <td align="center"><?php echo $row['title']; ?></td>
                                    <?php
									$type = $row['org_type_id'];
									$tp = mysql_query("SELECT * FROM org_types WHERE type_id='$type'");
									$rowtp = mysql_fetch_assoc($tp);
									?>
                                    <td align="center"><?php echo $rowtp['name']; ?></td>
                                    <?php
									$div = $row['division_code'];
									$dv = mysql_query("SELECT * FROM divisions WHERE division_id='$div'");
									$rowdv = mysql_fetch_assoc($dv);
									?>
                                    <td align="center"><?php echo $rowdv['name']; ?></td>
                                    <?php
									$dis = $row['district_code'];
									$ds = mysql_query("SELECT * FROM districts WHERE district_id='$dis'");
									$rowds = mysql_fetch_assoc($ds);
									?>
                                    <td align="center"><?php echo $rowds['name']; ?></td>
                                    <?php
									$up = $row['upazila_code'];
									if($up == 0)
									{
										$upaz = "Not Found";
									}else{
										$upa = mysql_query("SELECT * FROM upazillas WHERE upazilla_id='$up'");
										$rowupa = mysql_fetch_assoc($upa);
										$upaz = $rowupa['name'];
									}
									?>
                                    <td align="center"><?php echo $upaz; ?></td>
                                    <td align="center"><img src="images/edit.png" height="15px" width="15px">&nbsp;&nbsp;&nbsp;<img src="images/delete.png" height="15px" width="15px"></td>
								</tr>
<?
	}
?>			
							</tbody>
						</table>
                        
						<div class="span6">
                        <div class="dataTables_paginate paging_bootstrap pagination">
                          <ul>
                            <?php echo $firstpage; ?>
                            <?php echo $backpage; ?>
                            <?php echo $centerpage; ?>
                            <?php echo $nextpagination; ?>
                            <?php echo $lstpage; ?>
                           <!-- <li>
                            <a href="#">3</a>
                            </li>
                            <li>
                            <a href="#">4</a>
                            </li>
                            <li>
                            <a href="#">5</a>
                            </li>-->
                            
                          </ul></div>
<?php
}
?>

                        </div>
                        </div>	
						</td>
						</tr>
						</table>
						
                        
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


