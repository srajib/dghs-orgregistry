<?php 
session_start();
$_SESSION['name'] = time();
ini_set('memory_limit', '-1');


@$type = $_GET['type'];
@$div = $_GET['div'];
@$dis = $_GET['dis'];
if($type == 2)
{
	header("Content-type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename=".$_SESSION['name'].".xls"); 
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	//include("file:///D|/xampp/htdocs/xlsexport/dbconnect.inc.php"); 
	mysql_connect('103.247.238.173','root','mistestdb'); 
	@mysql_select_db('orgregistry') or die("Unable to select database"); 
	$select = "select organizations.organization_code,organizations.title,agency_code.agency,divisions.name,districts.name,organizations.email, organizations.contact_no,org_types.type_name,organizational_function.org_function from organizations,org_types,divisions,districts,upazillas,organizational_function,agency_code,ownership_type where divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and organizations.agencie_code=agency_code.id and organizations.org_type_id=org_types.type_id and organizations.org_func_id=organizational_function.id and organizations.ownership_id=ownership_type.id and organizations.division_code='$div' group by organizations.organization_id"; 
	$export = mysql_query($select); 
	/*$count = mysql_num_fields($export); 
	for ($i = 0; $i < $count; $i++) { */
	$header .= "Organization Code"."\t";
	$header .= "Organization Title"."\t";
	$header .= "Agency Type"."\t";
	$header .= "Division Name"."\t";
	$header .= "District Name"."\t";
	$header .= "Email"."\t";
	$header .= "Contact Number"."\t";
	$header .= "Organization Type"."\t";
	$header .= "Organization Function"."\t";  
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
elseif($type == 3)
{
	header("Content-type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename=".$_SESSION['name'].".xls"); 
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	//include("file:///D|/xampp/htdocs/xlsexport/dbconnect.inc.php"); 
	mysql_connect('103.247.238.173','root','mistestdb'); 
	@mysql_select_db('orgregistry') or die("Unable to select database"); 
	$select = "select organizations.organization_code,organizations.title,agency_code.agency,divisions.name,districts.name,organizations.email, organizations.contact_no,org_types.type_name,organizational_function.org_function from organizations,org_types,divisions,districts,upazillas,organizational_function,agency_code,ownership_type where divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and organizations.agencie_code=agency_code.id and organizations.org_type_id=org_types.type_id and organizations.org_func_id=organizational_function.id and organizations.ownership_id=ownership_type.id and organizations.district_code='$dis' group by organizations.organization_id"; 
	$export = mysql_query($select); 
	/*$count = mysql_num_fields($export); 
	for ($i = 0; $i < $count; $i++) { */
	$header .= "Organization Code"."\t";
	$header .= "Organization Title"."\t";
	$header .= "Agency Type"."\t";
	$header .= "Division Name"."\t";
	$header .= "District Name"."\t";
	$header .= "Email"."\t";
	$header .= "Contact Number"."\t";
	$header .= "Organization Type"."\t";
	$header .= "Organization Function"."\t"; 
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
elseif($type == 1)
{
	header("Content-type: application/octet-stream"); 
	header("Content-Disposition: attachment; filename=".$_SESSION['name'].".xls"); 
	header("Pragma: no-cache"); 
	header("Expires: 0"); 
	//include("file:///D|/xampp/htdocs/xlsexport/dbconnect.inc.php"); 
	mysql_connect('103.247.238.173','root','mistestdb'); 
	@mysql_select_db('orgregistry') or die("Unable to select database"); 
	$select = "select organizations.organization_code,organizations.title,agency_code.agency,divisions.name,districts.name,organizations.email, organizations.contact_no,org_types.type_name,organizational_function.org_function from organizations,org_types,divisions,districts,upazillas,organizational_function,agency_code,ownership_type where divisions.division_id=organizations.division_code and districts.district_id=organizations.district_code and organizations.agencie_code=agency_code.id and organizations.org_type_id=org_types.type_id and organizations.org_func_id=organizational_function.id and organizations.ownership_id=ownership_type.id group by organizations.organization_id"; 
	$export = mysql_query($select); 
	/*$count = mysql_num_fields($export); 
	for ($i = 0; $i < $count; $i++) { */
	$header .= "Organization Code"."\t";
	$header .= "Organization Title"."\t";
	$header .= "Agency Type"."\t";
	$header .= "Division Name"."\t";
	$header .= "District Name"."\t";
	$header .= "Email"."\t";
	$header .= "Contact Number"."\t";
	$header .= "Organization Type"."\t";
	$header .= "Organization Function"."\t"; 
	/*} */
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
	
}
session_destroy(); 
?>