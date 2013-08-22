<?php
session_start();

	$y=$_GET['yid'];
	if ($y=='')
	{
	echo "Please Select Year.";
	}
	else
	{		
	
	
			$orgmail=$_GET['om'];
			$orgtypeid=$_GET['oti'];
			//$orglvlid=$_SESSION['orglvlid'];
			//$orgid=$_SESSION['orgid'];
			//$orgtypeid=$_SESSION['orgtypeid'];
			//$pnd_id=$_SESSION['pnd_id'];
		  	
			include "authcn/auth.dbck.php";
			$query_lvl="select * from lhb_level_id_ where type_id='$orgtypeid'";
           		$log_qry_lvl = mysql_query($query_lvl);
		        $login_lvl = mysql_fetch_array($log_qry_lvl);
			$pnd_id=$login_lvl['pending_sn'];
			$pnd_year=$login_lvl['year'];
			//$orgllllv=$login_lvl['lhb_level_id_'];
			$_SESSION['organame']=$_GET['organame'];
			$org_name=$_SESSION['organame'];
			
	$divi_id=$_SESSION['org_divi'];
	$dis_id=$_SESSION['org_dis'];
	$upa_id=$_SESSION['org_upa'];
	
	$query_divi="select * from divisions where division_id='$divi_id'";
	$log_qry_divi= mysql_query($query_divi);
	$login_divi = mysql_fetch_array($log_qry_divi);
	$org_divi=$login_divi['name'];
	
	$query_dis="select * from districts where district_id='$dis_id'";
	$log_qry_dis= mysql_query($query_dis);
	$login_dis = mysql_fetch_array($log_qry_dis);
	$org_dis=$login_dis['name'];
	
	$query_upa="select * from upazillas where upazilla_id='$upa_id'";
   	$log_qry_upa= mysql_query($query_upa);
    	$login_upa = mysql_fetch_array($log_qry_upa);
	$org_upa=$login_upa['name'];
	
							include "authcn/auth.dbck.php"; 
							$query_org="select * from organization where organization_id='$orgid'";
						  	$log_qry_org = mysql_query($query_org);
						  	$login_org = mysql_fetch_array($log_qry_org);
						  //	$org_name=$login_org['name'];							
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php include 'title.php'; echo ($title);?></title>
<link href="csshb12.css" rel="stylesheet" type="text/css" media="all" />
<link href="csshbr12.css" rel="stylesheet" type="text/css" />

</head>
<body bgcolor="#002000">
<?php $back=$_SERVER['HTTP_REFERER'];

$org_ID=$orgmail;
$reportY=$y-1;
//$_SESSION['rpty']=$reportY;
include ("class/qes_qry.php");
$p=1;
if($_GET['lvl']=="1")
{ $lp=15; }
else if ($_GET['lvl']=="2")
{ $lp=15; }

else if ($_GET['lvl']=="3")
{ $lp=14; }

$lvlri="lvlr".$_GET['lvl'];
if ($_GET['lvl']!='')
while($p<=$lp){
include "$lvlri/p$p.php";
$p++;
}
?>
</body>
</html>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-783567-1";
urchinTracker();
</script>
<?php
	}
?>