<?php 
$connect = mysql_connect("103.247.238.164","root","M1$DB@2012");
mysql_select_db("hrm_new",$connect); //select the table
error_reporting(E_ALL);
ini_set('display_errors','On');
set_time_limit(20112);

if ($_FILES["csv"]['size'] > 0) {

     //get the csv file
    //$file = $_FILES[csv][tmp_name];
	$handle = fopen($_FILES["csv"]['tmp_name'], "r");
   // $handle = fopen($file,"r");

    //loop through the csv file and insert into database
    do {
        if ($data[0]) {
              mysql_query("INSERT INTO organizations(organization_id,organization_code,title,agencie_code,photo,division_code,district_code,upazila_code,union_code,ward_id,location_id,house_no,village_address,longitude,latitude,organization_type_code,level_id,function_id,established_year,mailing_address,mobile_number,contact_number_two,contact_number_three,fax_number_one,fax_number_two,fax_number_three,email_address_one,email_address_two,email_address_three,website_one,website_two,website_three,facebook,twitter,google_plus,youtube,land_area,mouza,cs_dag_no,rs_dag_no,ds_dag_no,khatian_no,mutation_no,other_land_information,is_offer_academic_course,is_hospital,hospital_level_id,laundry_id,autoclave_id,waste_disposal_id,toilet_type_id,toilet_adequacy_id,sanctioned_vehicles,sanctioned_office_equipment,tag,other_info,other_misc_info) VALUES 
              (   '".addslashes($data[0])."', 
                    '".addslashes($data[1])."', 
                    '".addslashes($data[2])."',
					'".addslashes($data[3])."',
					'".addslashes($data[4])."',
					'".addslashes($data[5])."',
					'".addslashes($data[6])."',
					'".addslashes($data[7])."',
					'".addslashes($data[8])."',
					'".addslashes($data[9])."',
					'".addslashes($data[10])."',
					'".addslashes($data[11])."',
					'".addslashes($data[12])."',
					'".addslashes($data[13])."',
					'".addslashes($data[14])."',
					'".addslashes($data[15])."',
					'".addslashes($data[16])."',
					'".addslashes($data[17])."',
					'".addslashes($data[18])."',
					'".addslashes($data[19])."',
					'".addslashes($data[20])."',
					'".addslashes($data[21])."',
					'".addslashes($data[22])."',
					'".addslashes($data[23])."',
					'".addslashes($data[24])."',
					'".addslashes($data[25])."',
					'".addslashes($data[26])."',
					'".addslashes($data[27])."',
					'".addslashes($data[28])."',
					'".addslashes($data[29])."',
					'".addslashes($data[30])."',
					'".addslashes($data[31])."',
					'".addslashes($data[32])."',
					'".addslashes($data[33])."',
					'".addslashes($data[34])."',
					'".addslashes($data[35])."',
					'".addslashes($data[36])."',
					'".addslashes($data[37])."',
					'".addslashes($data[38])."',
					'".addslashes($data[39])."',
					'".addslashes($data[40])."',
					'".addslashes($data[41])."',
					'".addslashes($data[42])."',
					'".addslashes($data[43])."',
					'".addslashes($data[44])."',
					'".addslashes($data[45])."',
					'".addslashes($data[46])."',
					'".addslashes($data[47])."',
					'".addslashes($data[48])."',
					'".addslashes($data[49])."',
					'".addslashes($data[50])."',
					'".addslashes($data[51])."',
					'".addslashes($data[52])."',
					'".addslashes($data[53])."',
					'".addslashes($data[54])."',
					'".addslashes($data[55])."',
					'".addslashes($data[56])."'
                ) 
            ");
        }
    } while ($data = fgetcsv($handle,1000,",","'"));
    //
    //redirect
   // header('Location: index.php'); die;

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