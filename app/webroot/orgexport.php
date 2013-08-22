<?php 
session_start();
$_SESSION['name'] = time();
ini_set('memory_limit', '-1');

$type=2;
@$div = $_GET['div'];
@$dis = $_GET['dis'];
if($type == 2)
{
	header("Content-type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename=".$_SESSION['name'].".xls"); 
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	mysql_connect('103.247.238.173','root','mistestdb'); 
	@mysql_select_db('orgnew') or die("Unable to select database"); 
	$select = $select = "SELECT organizations.organization_id, organizations.organization_code, organizations.title,org_types.type_name,agency_code.agency,org_level.level,organizational_function.org_function,ownership_type.ownership, divisions.name, districts.name, upazillas.name, organizations.fax
	FROM organizations
	LEFT JOIN org_types ON organizations.org_type_id=org_types.type_id
	LEFT JOIN agency_code ON organizations.agencie_code=agency_code.id 
	LEFT JOIN organizational_function ON organizations.org_func_id=organizational_function.id 
	LEFT JOIN org_level ON organizations.org_level_id=org_level.id 
	LEFT JOIN ownership_type ON organizations.ownership_id=ownership_type.id 
	LEFT JOIN divisions ON organizations.division_code=divisions.division_id
	LEFT JOIN districts ON organizations.district_code=districts.district_id
	LEFT JOIN upazillas ON organizations.upazila_code=upazillas.upazilla_id"; 
	$export = mysql_query($select); 
	$header .= "Sl No."."\t";
	$header .= "Organization Code"."\t";
	$header .= "Organization name"."\t";
	$header .= "Organization Type"."\t";
	$header .= "Agency"."\t";
	$header .= "Organization Level"."\t";
	$header .= "Organization Function"."\t";
	$header .= "Organization Ownership"."\t";
	$header .= "Division"."\t";
	$header .= "District"."\t";
	$header .= "Upazilla"."\t"; 
	$header .= "Fax no"."\t"; 	
	/*}*/ 
	while($row = mysql_fetch_row($export)) { 
	$line = ''; 
	foreach($row as $value) { 
	if ((!isset($value)) OR ($value == "")) { 
	$value = "\t"; 
	} else { 
	$value = str_replace('"', '""', $value); 
	$value = '"' . $value . '"' . "\t"; 
	} 
	$line .= $value; 
	} 
	$data .= trim($line)."\n"; 
	} 
	$data = str_replace("\r", "", $data); 
	if ($data == "") { 
	$data = "\n(0) Records Found!\n"; 
	} 
	print "$header\n$data";
}
else
{
	header("Content-type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename=".$_SESSION['name'].".xls"); 
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	//include("file:///D|/xampp/htdocs/xlsexport/dbconnect.inc.php"); 
	mysql_connect('103.247.238.173','root','mistestdb'); 
	@mysql_select_db('orgnew') or die("Unable to select database"); 
	$select = "SELECT organizations.organization_id, organizations.organization_code, organizations.title,org_types.type_name,agency_code.agency,org_level.level,organizational_function.org_function,ownership_type.ownership, divisions.name, districts.name, upazillas.name, organizations.fax
	FROM organizations
	LEFT JOIN org_types ON organizations.org_type_id=org_types.type_id
	LEFT JOIN agency_code ON organizations.agencie_code=agency_code.id 
	LEFT JOIN organizational_function ON organizations.org_func_id=organizational_function.id 
	LEFT JOIN org_level ON organizations.org_level_id=org_level.id 
	LEFT JOIN ownership_type ON organizations.ownership_id=ownership_type.id 
	LEFT JOIN divisions ON organizations.division_code=divisions.division_id
	LEFT JOIN districts ON organizations.district_code=districts.district_id
	LEFT JOIN upazillas ON organizations.upazila_code=upazillas.upazilla_id"; 
	$export = mysql_query($select); 
	/*$count = mysql_num_fields($export); 
	for ($i = 0; $i < $count; $i++) { */
	$header .= "Sl No."."\t";
	$header .= "Organization Code"."\t";
	$header .= "Organization name"."\t";
	$header .= "Organization Type"."\t";
	$header .= "Agency"."\t";
	$header .= "Organization Level"."\t";
	$header .= "Organization Function"."\t";
	$header .= "Organization Ownership"."\t";
	$header .= "Division"."\t";
	$header .= "District"."\t";
	$header .= "Upazilla"."\t"; 
	$header .= "Fax no"."\t"; 	
	/*}*/ 
	while($row = mysql_fetch_row($export)) { 
	$line = ''; 
	foreach($row as $value) { 
	if ((!isset($value)) OR ($value == "")) { 
	$value = "\t"; 
	} else { 
	$value = str_replace('"', '""', $value); 
	$value = '"' . $value . '"' . "\t"; 
	} 
	$line .= $value; 
	} 
	$data .= trim($line)."\n"; 
	} 
	$data = str_replace("\r", "", $data); 
	if ($data == "") { 
	$data = "\n(0) Records Found!\n"; 
	} 
	print "$header\n$data";
}
session_destroy(); 
?>