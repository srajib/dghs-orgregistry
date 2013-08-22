<?php 
$connect = mysql_connect("localhost","root","");
mysql_select_db("hrm_new",$connect); //select the table

set_time_limit(11112);

if ($_FILES[csv][size] > 0) {

    //get the csv file
    $file = $_FILES[csv][tmp_name];
    $handle = fopen($file,"r");

    //loop through the csv file and insert into database
    do {
        if ($data[0]) {
                mysql_query("INSERT INTO `organizations`(organization_id,organization_code,title,agencie_code) VALUES 
                (    '".addslashes($data[0])."', 
                    '".addslashes($data[1])."', 
                    '".addslashes($data[2])."',
					'".addslashes($data[3])."',
                ) 
            ");
        }
    } while ($data = fgetcsv($handle,1000,",","'"));
    //

    //redirect
    header('Location: index.php'); die;

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title> Organization Registry</title>
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
					<h2 style="color: #060;padding: 15px 10px 3px 10px;font-size: 36px;">Organization Registry</h2>
					<p style="width:500px;font-size:11px;font-weight;bold;text-transform:none;">Government of People's Republic of Bangladesh</p>
					<p style="width:500px;font-size:15px;text-transform:uppercase;padding-top:4px;">directorate general of health services</p>
				</div><div class="lclear"></div>
			</div><!-- end of siteHeader -->
				<div id="siteMenuWrapper">
				
					<ul>
					<li><a href="/">Home</a></li> 
						
					<li class="seperator"></li>
					<li><a href="/pages/addorg">Register New Org.</a></li>
					<li class="seperator"></li>
					<li><a href="/pages/requestNeworg"> Request for new registration </a></li>
					<li class="seperator"></li>
						<li><a href="/pages/search"> Search Organization</a></li>
					<li class="seperator"></li>
						<li><a href="/pages/reports"> Reports</a></li>
					
					<!--
					<li><a href="/import.php"> Import CSV  </a></li>
						<li class="seperator"></li>-->
				</ul><div class="lclear"></div>
			</div><!-- end of siteMenuWrapper --><!-- end of siteMenuWrapper -->
			<div id="logoutInfo">
				<img src="img/lock.gif"/>
				<p><a href="" style="text-decoration:none;color:white;font-weight:bold; display: block;margin-left:-5px;">Login</a> </p>
			</div><!--end of logoutInfo -->
			<!--end of logoutInfo -->
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