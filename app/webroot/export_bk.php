<?php 
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=allbbscode.csv');
$output = fopen('http://localhost/bbscodefinal/', 'w');
// output the column headings
fputcsv($output, array('Division','Division code', 'District','District code','Upazilla','Upazilla code','Union','Union Code'));
// fetch the data
$connect = mysql_connect("localhost","root","");
mysql_select_db("bbs_code",$connect); //select the table
set_time_limit(4000);
$rows = mysql_query('SELECT division,divcode,district,districtcode,upazilla,upazillacode,name,unioncode FROM bbscode');
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title>  GeoCode Registry</title>
<link media="screen" rel="stylesheet" type="text/css" 
href="css/style.css"  />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Import a CSV File with PHP & MySQL</title>
</head>
<body>
	<div id="siteWrapper">
			<div id="siteHeader">
				<div id="headerFirst">
				</div>
				<div id="headerLogo">
					<img src="img/gov_logo.gif" />
				</div>
				<div id="siteTitle">
					<h2>Geocode Registry</h2>
					<p>directorate general of health services</p>
				</div><div class="lclear"></div>
			</div><!-- end of siteHeader -->
			<div id="siteMenuWrapper">
				<ul>
					<li><a href="/bbscodefinal/">Home</a></li>
					<li class="seperator"></li>
					<li><a href="/bbscodefinal/import.php"> Import  </a></li>
					<li class="seperator"></li>
					<li><a href="/bbscodefinal/pages/search"> Search Geocode  </a></li>
					<li class="seperator"></li>
				</ul><div class="lclear"></div>
			</div><!-- end of siteMenuWrapper --><!-- end of siteMenuWrapper -->
			<div id="logoutInfo">
			
			</div><!--end of logoutInfo -->
			<div class="lclear"></div>
			<div id="contentWrapper">
			<div id="mainContentWrapper">
<?php if (!empty($_GET[success])) { echo "<b>Your file has been imported.</b><br><br>"; } //generic success notice ?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  Upload your CSV file: <br />
  <input name="csv" type="file" id="csv" />
  <input type="submit" name="Submit" value="Submit" />
</form>
</div>
<div class="lclear"></div>
			</div><!-- end of contentWrapper -->
			<div id="footerWrapper">
				<p>&copy; All Rights Reserved by Management Information System, Health Department, Mohakhali, Dhaka</p>				
			<!-- end of contentWrapper -->
		</div>
		</div><!-- end of siteWrapper -->
		
		
		
</body>
</html> 