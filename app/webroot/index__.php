<html>
<head>
<title>Sanctioned Post</title>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script>
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
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
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","query2.php?q="+str,true);
xmlhttp.send();
}
</script>

<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
/*$server = "localhost";
$user = "root";
$password = "";
$db = "org_registry";*/

/*$server = "localhost";
$user = "root";
$password = "";
$db = "new_hrm_db";*/

/*$con = mysql_connect($server,$user,$password);
$db = mysql_select_db($db,$con);*/
include('lib/connect.php');
?>
<?php
extract($_POST);

if(isset($_POST['submit']))
{
	foreach($org as $key => $val)
	{
		
		$org_id = $org[$key];
		$check = mysql_query("SELECT * FROM sanctioned_post WHERE organization_id='$org_id'");
		$checkrow = mysql_num_rows($check);
		if($checkrow > 0)
		{
			echo "<h4>Sanctioned Post already inserted.</h4>";
		}
		else
		{
		
		  if($type == 17)//for civil surgon office category-1
		  {
			  for($a = 1;$a <= 1; $a++)//Civil Surgon
				  {
					   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','10664','1','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Deputy Civil Surgon
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','10','98','10733','1','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Sr. Health Education Officer
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','11787','2','','')");	
					  
				  }
				  
				  /*for($a = 1;$a <= 1; $a++)//Co-ordinator (Oo & DDC)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','10','','11787','3','','')");	
					  }
				  }*/
				  
				  for($a = 1;$a <= 1; $a++)//Medical Officer(DRS)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','11241','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Medical Officer
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','11226','1','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Medical Officer(TB & Leprosy)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','28','11274','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Jr. Health Education Officer
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','11071','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Statistician
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','46','11826','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Administrative Officer
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10020','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//District Entomologist
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','28','10841','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//District Health Superintendent
	  
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','10','98','10843','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//District Public Health Nurse
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','10','98','10844','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//District Sanitary Inspector
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','10','98','10845','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Sr. Medical Technologist(Lab)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','41','11800','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Workshop Suptd.
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','25','98','11956','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Medical Technologist (Lab)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','41','11284','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Chief Mechanic(Electrical)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','25','98','10648','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Chief Mechanic(Mechanical)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','25','98','10649','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Chief Mechanic(Refrigeration)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','25','98','10650','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//District EPI Supdt.
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','29','98','10842','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Head Asstt.
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10938','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Accountant
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10006','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Cashier
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10621','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Cold Chain Technician
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','29','98','10677','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Programmer Organizer
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','10','98','11241','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Statical Asstt.
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','46','11822','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Steno Typist
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','11833','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Store Keeper
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','85','11848','2','','')");	
					  
				  }
				  
				  for($a = 0;$a <= 1; $a++)//Store Keeper
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','85','11848','3','','')");	
					  
				  }
				  
				  for($a = 0;$a <= 1; $a++)//Driver
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','10859','2','','')");	
					  
				  }
				  
				  for($a = 0;$a <= 1; $a++)//ENTO Technician
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','28','10893','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Driver
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10860','3','','')");	
					  
				  }
				  
				  for($a = 0;$a <= 1; $a++)//Jr. Mechanic
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','25','98','11075','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 4; $a++)//Office Asstt. cum Typist
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11362','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Projectionist
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','11562','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Store Clerk
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','26','98','11845','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Audio Visual Helper
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','10560','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Duplicating Machine Operator
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10863','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Lab Attend.
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','41','11095','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 3; $a++)//Darwan
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10709','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Helper
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','25','98','10964','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Mali
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11200','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 5; $a++)//MLSS
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','11321','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Packer/Loader
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','26','98','11386','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Security Guard
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11725','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Sweeper
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11878','2','','')");	
					  
				  }
		  
	  }
		  
		  //
		  //
		  //
		  //
		  
		  elseif($type == 18) //Civil Surgeon Office (Cat-2)
		  {
			  
			  for($a = 1;$a <= 1; $a++)//Civil Surgon
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','10664','1','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Sr. Health Education Officer
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','11787','2','','')");	
						
					}
					
								
					for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','8','11226','1','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Medical Officer(TB & Leprosy)
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','8','11274','3','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Jr. Health Education Officer
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','11071','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Statistician
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','46','11826','2','','')");	
						
					}
							
					for($a = 1;$a <= 1; $a++)//District Health Superintendent
		
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10843','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//District Public Health Nurse
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10844','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//District Sanitary Inspector
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10845','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Sr. Medical Technologist(Lab)
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','41','11800','2','','')");	
						
					}
					
					
					for($a = 1;$a <= 1; $a++)//Medical Technologist (Lab)
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','41','11284','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//District EPI Supdt.
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10842','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Head Asstt.
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10938','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Accountant
					{
						
						   
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','1','10006','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Cashier
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10621','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Cold Chain Technician
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10677','2','','')");	
						
					}
					
								
					for($a = 1;$a <= 1; $a++)//Statical Asstt.
					{
						
						   
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','46','11822','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Steno Typist
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','8','11833','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Store Keeper
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','85','11848','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Asstt. Store Keeper
					{
						
						   
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','85','10550','3','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Driver
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','8','10859','2','','')");	
						
					}
					
					for($a = 1;$a <= 3; $a++)//Office Asstt. cum Typist
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11362','2','','')");	
						
					}
							
					for($a = 1;$a <= 1; $a++)//Audio Visual Helper
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','10560','3','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Audio Visual Operator
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','10565','3','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Duplicating Machine Operator
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','10863','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Lab Attend.
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','41','11095','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Mali
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11200','2','','')");	
						
					}
					
					for($a = 1;$a <= 3; $a++)//MLSS
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11321','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Security Guard
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11725','2','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Sweeper
					{
						
							
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11878','2','','')");	
						
					}
			  
			  
		  }
		  //
		  //
		  //
		  //
			  
		  elseif($type == 19)//for civil surgon office category-3
		  {
				  
				  for($a = 1;$a <= 1; $a++)//Civil Surgon
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','10664','1','','')");	
					  
				  }
				  
	  
				  
				  for($a = 1;$a <= 1; $a++)//Sr. Health Education Officer
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','11787','2','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//Medical Officer
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','11226','1','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//Jr. Health Education Officer
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','33','11071','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Statistician
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','46','11826','2','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//District Health Superintendent
	  
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','44','98','10843','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//District Public Health Nurse
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','44','98','10844','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//District Sanitary Inspector
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','44','98','10845','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Sr. Medical Technologist(Lab)
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','42','11800','2','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//Medical Technologist (Lab)
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','42','11284','2','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//District EPI Supdt.
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','29','98','10842','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Head Asstt.
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10938','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Accountant
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10006','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Cashier
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10621','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Cold Chain Technician
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','29','98','10677','2','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//Steno Typist
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','11833','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Store Keeper
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','85','11848','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Asstt. Store Keeper
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10550','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Driver
				  {

					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','10859','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//ENTO Technician
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','28','10893','2','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//Audio Visual Helper
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10560','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 2; $a++)//Office Asstt. cum Typist
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11362','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Duplicating Machine Operator
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','10863','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Lab Attend.
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','41','11095','2','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//Mali
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11200','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 2; $a++)//MLSS
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','8','98','11321','2','','')");	
					  
				  }
				  
			  
				  for($a = 1;$a <= 1; $a++)//Security Guard
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11725','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Sweeper
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','2','11878','2','','')");	
					  
				  }
		  }
		  //
		  //
		  //
		  //
		  
		  elseif($type == 20)//for civil surgon office category-4
		  {
		   // Dhaka civil surgon
			   
			   for($a = 1;$a <= 1; $a++)//Civil Surgeon
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','98','10664','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Deputy Civil Surgeon
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','10','98','10733','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','98','11225','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sr. Health Education Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','30','11787','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Health Education Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','30','11071','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Administrative Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','2,'10020','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//District Entomologist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','28','10841','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sr. Medical Technologist(Lab)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','64','11800','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','64','11800','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//District EPI Superintendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','29','98','10842','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Head Asstt.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','54','10951','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Accountant
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','1','10006','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Cashier
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','1','10621','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//steno typist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','98','11833','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Store Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','85','11846','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Driver
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','54','10310','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','54','11362','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Duplicating Machine Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','54','10313','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Lab. Attendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','64','11096','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//MLSS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','54','11321','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','54','11877','2','','')");      
					
			   }
			   
		  }	
		  //
		  //
		  //
		  //
		  
		  elseif($type == 32)//10-Bed Hospital
		  {
				  
				  for($a = 1;$a <= 2; $a++)//Medical Officer
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','41','98','11226','1','','')");	
					  
				  }
				  for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','41','11299','2','','')");	
					  
				  }
				  for($a = 1;$a <= 1; $a++)//Pharmacist
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','70','11395','2','','')");	
					  
				  }
				  for($a = 1;$a <= 4; $a++)//Sr. Staff Nurse
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','52','11812','1','','')");	
					  
				  }
				  for($a = 1;$a <= 4; $a++)//Asstt. Nurse
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','52','10285','2','','')");	
					  
				  }
				  for($a = 1;$a <= 2; $a++)//Cook/Masalche
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','29','10688','2','','')");	
					  
				  }
				  
				  
				  
				  for($a = 1;$a <= 4; $a++)//MLSS
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','54','11321','2','','')");	
					  
				  }
				  for($a = 1;$a <= 2; $a++)//Sweeper
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','17','11878','2','','')");	
					  
				  }
				  for($a = 1;$a <= 2; $a++)//Ward Boy
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','96','11947','2','','')");	
					  
				  }
		  }
		  //
		  //
		  //
		  //
		  
		  elseif($type == 28)//50-Bed Hospital
		  {
			  for($a = 1;$a <= 1; $a++)//Sr. Consultant (Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11767','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Sr. Consultant (Orthopaedics)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11770','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Sr. Consultant (Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11767','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 2; $a++)//Sr. Consultant (Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11767','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 2; $a++)//Sr. Consultant (Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11767','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 2; $a++)//Sr. Consultant (Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11767','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 2; $a++)//Sr. Consultant (Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11767','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 2; $a++)//Sr. Consultant (Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11767','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 2; $a++)//Sr. Consultant (Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11767','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 2; $a++)//Sr. Consultant (Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11767','1','','')");	
				  
			  }
		  }
		  //
		  //
		  //
		  //
		  
		  elseif($type == 31)//20-Bed Hospital
		  {
			  for($a = 1;$a <= 29; $a++)//Sr. staff nurse (nursing)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','52','11821','3','','')");      
					
			   }
			   
	  for($a = 1;$a <= 23; $a++)//jr. Consultant (Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','44','11042','3','','')");      
					
			   }
			   
	  for($a = 1;$a <= 4; $a++)//jr. Consultant (surgery)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','87','11067','3','','')");      
					
			   }
			   
	  for($a = 1;$a <= 4; $a++)//Jr. Consultant(Gyn & Obs)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','32','11039','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 4; $a++)//Jr. Consultant(Anesthesia)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','4','11020','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 4; $a++)//Lab. Attendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','64','11049','3','','')");      
					
			   }
				
			   for($a = 1;$a <= 4; $a++)//sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11878','6','','')");      
					
			   }
			   
			   for($a = 1;$a <= 4; $a++)//word boy
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11947','3','','')");      
					
			   }
			   
			  
				for($a = 1;$a <= 4; $a++)//Head Asstt. Cum Accountant
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10940','3','','')");      
					
			   }
			   
			  for($a = 1;$a <= 4; $a++)//Cook/Mashalchi
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10689','6','','')");      
					
			   }		
			   
			   
			  for($a = 1;$a <= 4; $a++)//Darowan
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10856','6','','')");      
					
			   }
	  
			  for($a = 1;$a <= 4; $a++)//Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','57','11226','3','','')");      
					
			   }
	  
			  for($a = 1;$a <= 4; $a++)//Medical Technologist(Lab)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','64','11299','3','','')");      
					
			   }	
			   
			   for($a = 1;$a <= 4; $a++)//MLSS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','41','98','11321','6','','')");      
					
			   }			 
			   
			  
	           for($a = 1;$a <= 4; $a++)//Office Asstt. Cum Typist/Data Entry Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11363','3','','')");      
					
			   }
	  
			  for($a = 1;$a <= 4; $a++)//Pharmacist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','70','11395','3','','')");      
					
			   }	
	  
			   for($a = 1;$a <= 1; $a++)//RMO
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','41','98','11703','5','','')");      
					
			   }	
				   
			   for($a = 1;$a <= 4; $a++)//Aya
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10575','6','','')");      
					
			   }	
		  }
		  //
		  //
		  //
		  //
		  
		  elseif($type == 29)//31-Bed Hospital
		  {
			   for($a = 1;$a <= 1; $a++)//dental surgon
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','20','10719','3','','')");      
					
			   }	
			   
			  for($a = 1;$a <= 1; $a++)//Head Asist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10939','3','','')");      
					
			   }	
	  
			   for($a = 1;$a <= 1; $a++)//Medical officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','55','11226','3','','')");      
					
			   }	
			   
			   for($a = 1;$a <= 1; $a++)//Medical Technologist(Dental)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','20','11295','3','','')");      
					
			   }
	  
			  for($a = 1;$a <= 1; $a++)//Medical Technologist(BCG/EPI)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','54','11290','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','64','11299','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//MLSS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11321','3','','')");      
					
			   }
	  
			   for($a = 1;$a <= 1; $a++)//RMO
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','82','11706','3','','')");      
					
			   }
			   for($a = 1;$a <= 2; $a++)//Pharmacist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','70','11395','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//security gurd
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','83','11723','3','','')");      
					
			   }
				for($a = 1;$a <= 2; $a++)//Specialist(Gyn & Obs)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','32','11741','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 2; $a++)//Specialist(medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','44','11742','3','','')");      
					
			   }
			   
					   
			   for($a = 1;$a <= 1; $a++)//Specialist(Surgery)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','87','11743','1','','')");      
					
			   }
				
			   for($a = 1;$a <=2; $a++)//Sr. Staff Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11812','3','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Store Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','86','11848','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11878','3','','')");      
					
			   }
			   
				for($a = 1;$a <=1; $a++)//word boy
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','96','11947','3','','')");      
					
			   }
		  }
		  //
		  //
		  //
		  //
		  
		  elseif($type == 12)//TB Hospital
		  {
			   
			   for($a = 1;$a <=1; $a++)//Medical Superintendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','44','98','11280','1','','')");      
					
			   }
			   
			   
			   for($a = 1;$a <=1; $a++)//Asstt. Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','10285','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Deputy Nursing Superintendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','10771','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Head Asstt.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10939','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Driver.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10859','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Cook/Mashalchi
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','29','10689','2','','')");      
					
			   }
			   
				for($a = 1;$a <=1; $a++)//Cashier
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','10623','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','44','11226','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','44','11226','3','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Medical Technologist(Lab)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','45','64','11299','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Nursing Supervisor
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11343','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Nursing Supervisor
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','52','11343','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//MLSS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11321','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Pathologist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','45','64','11387','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Pharmacist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','45','70','11395','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Office Asstt. Cum Typist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11362','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Sr. Consultant
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','44','11754','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Sr. Consultant
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','44','11754','3','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//RMO
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','82','11704','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Radiologist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','45','78','11580','1','','')");      
					
			   }
			   
				for($a = 1;$a <=1; $a++)//Sr. Staff Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11812','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Sr. Staff Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11812','3','','')");      
					
			   }
					   
			   for($a = 1;$a <=1; $a++)//Staff Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11821','3','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Steward
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','29','11840','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Store Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','45','70','11848','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Ward Master
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','95','11950','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11878','2','','')");      
					
			   }
			  
		  }
		  //
		  //
		  //
		  //
		  
		  elseif($type == 25)//100-Bed Hospital(District Hospital)
		  {
			  for($a = 1;$a <=1; $a++)//Sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','17','11878','2','','')");      
					
			   }
			   
					   
			   for($a = 1;$a <=1; $a++)//Store Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','86','11848','2','','')");      
					
			   }
					   
			   for($a = 1;$a <=1; $a++)//Asstt. Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','52','10285','3','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Dental Surgeon
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','20','10719','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Driver
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10860','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Cook/Mashalchi
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','29','10689','2','','')");      
					
			   }
				
			   for($a = 1;$a <=1; $a++)//Dome
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','17','10852','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Emergency Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','22','10891','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Health Educator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','33','10955','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Head Asstt. Cum Accountant
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10941','2','','')");      
					
			   }
			   
				for($a = 1;$a <=1; $a++)//Herbal Assistant(Gardener)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10965','5','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Jr. Consultant(Anesthesia)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','4','11020','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Jr. Consultant(Gyn & Obs)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','32','11039','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Jr. Consultant(Paediatrics)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','68','11056','1','','')");      
					
			   }
			   
			  for($a = 1;$a <=1; $a++)//Medical Officer(Ayurvedic/Unani/Homeo)
			  {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','37','11232','3','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Medical Technologist(Dental)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','20','11295','2','','')");      
					
			   }
			   for($a = 1;$a <=1; $a++)//Record keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','46','11590','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Medical Technologist(Lab)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','64','11299','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Mlss
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11321','3','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Pathologist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','64','11387','1','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Nursing Superintendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11343','3','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Pharmacist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','86','11395','2','','')");      
					
			   }
			   for($a = 1;$a <=1; $a++)//Office Asstt. Cum Typist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','46','11362','2','','')");      
					
			   }
				
			   for($a = 1;$a <=1; $a++)//RMO
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','82','11703','1','','')");      
					
			   }
				
				   
			   for($a = 1;$a <=1; $a++)//Sr. Staff Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11812','3','','')");      
					
			   }
			   
				for($a = 1;$a <=1; $a++)//Staff Nurse
				{
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11821','3','','')");      
					
			   }
			   for($a = 1;$a <=1; $a++)//Support Personal(Compounder)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','37','11875','2','','')");      
					
			   }
			   
			   for($a = 1;$a <=1; $a++)//Sweeper/Cleaner
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','17','11878','2','','')");      
					
			   }
			  
		  }
		  //
		  //
		  //
		  //
		  
		  elseif($type == 23)   //250 bed upozilla
		  {
	  
			  for($a = 1;$a <= 29; $a++)//Sr. staff nurse (nursing)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','52','11812','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sr. staff nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11812','3','','')");      
					
			   }
					   
			   for($a = 1;$a <= 1; $a++)//staff nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11821','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Resident Physician
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','44','11671','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Asstt. Surgeon/Asstt. Registrar
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','44','10552','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Statistical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','2','11825','3','','')");      
					
			   }
				for($a = 1;$a <= 1; $a++)//Ticket Clerk
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','54','11907','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//steward
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','54','11840','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Support Personal(Compounder)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','70','11875','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Strealizer Cum Mechanic
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','54','11862','3','','')");      
					
			   }
			   
				
			   for($a = 1;$a <= 1; $a++)//Electrician
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','54','10875','6','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','17','11878','6','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','17','11878','2','','')");      
					
			   }
			   for($a = 1;$a <= 1; $a++)//Streacher Bearer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','96','11857','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Asstt. Director
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','98','10221','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Anesthetist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','4','10027','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Surgeon/Asstt. Registrar
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','87','10554','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Administrative Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','2','10020','1','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Accountant
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','10006','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Asstt.Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','10284','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Asstt. Accountant
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','10200','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Dental Surgeon
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','20','10719','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Computer Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','46','10684','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Cashier
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','10623','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Cardiographer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','13','10603','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Driver
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10859','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Cash Sarkar
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','10618','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Cook/Mashalchi
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','29','10689','6','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Dome
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','17','10852','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Anesthesia)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','4','11020','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','23','10891','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Health Educator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','33','10955','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Head Asstt. Cum Accountant
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10941','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Herbal Assistant(Gardener)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10965','5','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jamadar/Sardar
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','17','11013','6','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Cardiology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','13','11027','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Dental)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','20','11032','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Gyn & Obs)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','32','11038','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','44','11041','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Paediatrics)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','68','11055','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Pathology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','64','11058','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Radiology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','78','11062','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Surgery)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','87','11066','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Officer(Unani)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','37','11275','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Linen Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11188','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Jr. Mechanic/Pump Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11076','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Mali
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11200','6','','')");      
					
			   }
			   
			  for($a = 1;$a <= 1; $a++)//Medical Technologist(Biochemist/Hematology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','34','11291','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Technologist(Blood Bank)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','7','11292','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Technologist(Dental)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','20','11295','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','72','11284','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Technologist(Physiotherapy)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','73','11301','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//MLLS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','54','11321','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//MLLS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','54','11321','6','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Pathologist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','64','11387','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Radiologist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','78','10709','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Nursing Superintendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11342','3','','')");      
					
			   }
			   for($a = 1;$a <= 1; $a++)//Nursing Supervisor
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11343','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Nursing Supervisor
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11343','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Pharmacist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','70','11395','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Data Entry Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','54','11363','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','54','11362','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Record Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','46','11590','2','','')");      
					
			   }
			   
				   
			   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Anesthesia)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','4','11754','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Sr. Consultant(Cardiology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','13','10762','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sr. Consultant(ENT)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','27','10762','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Dermatology(Skin & VD))
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','84','10760','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//RMO
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','82','11703','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//RMO
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','82','11703','1','','')");      
					
			   }
				   
			   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Gyn & Obs)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','32','11765','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','44','10777','1','','')");      
					
			   }
				   
							   
			   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Paediatrics)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','68','11772','3','','')");      
					
			   }
		  }
		  //
		  //
		  //
		  //
		  
		  elseif($type==2)//Specialized Hospital 
		  {
			      if($org_id == 632)// NIKDU
				  {
			
					 for($a = 1;$a <= 1; $a++)//Anesthetist
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','48','10027','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Accounts Officer
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','1','10015','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Administrative Officer
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10777','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Accountant
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','1','10006','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Account Asstt.
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','1','10004','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Animal Care Taker
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54,'10030','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Anesthesiology)
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','4','10040','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Biochemistry)
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','6','10040','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Hematology)
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','34','10040','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Histopathology)
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','36','10040','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Nephrology)
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','48','10040','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics Urology)
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','93','10092','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics Nephrology)
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','48','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Radiology & Imaging)
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','78','10040','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Transplant Surgery)
					 {
						  
							   
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','87','10040','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Urology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','93','10040','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anesthesiology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','4','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Biochemistry)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','6','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Blood Transfusion)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','8','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Hematology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','34','10092','2','','')");      
						  
					 }
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Histopathology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','36','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Histopathology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','36','10092','2','','')");      
						  
					 }
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Microbiology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','45','10092','2','','')");      
						  
					 }
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Nephrology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','48','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Nuclear Medicine)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','51','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics Urology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','68','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics Nephrology)
			
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','66','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics Nephrology)
			
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','98','10092','3','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Engineer
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','89','10092','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Dietician
			
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','29','10092','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics Nephrology)
			
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','66','10092','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Radiology & Imaging)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','78','10092','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Transplant Urology)
			
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','93','10092','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Urology)
			
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','93','10092','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Nephrology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','48','10097','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Paediatrics Urology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','68','10097','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Paediatrics Nephrology)
			
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','66','10097','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Transplant Surgery)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','87','10097','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Urology)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','93','10097','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt.Statistician
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','46','10097','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Asstt. Steward
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','46','10101','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Transplant Surgery)
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','87','10097','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Cashier
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','1','10171','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Cash Sarkar
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','1','10167','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Cataloger
					 {
						  
							   $org_id = $org[$key];
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','1','10178','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Computer Operator
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','46','10224','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Dietician
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','29','10277','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Dark Room Asstt.
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','98','10241','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','22','10340','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Lecturer(Biochemistry)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','6','10496','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Lecturer(Histopathology)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','36','10496','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Lecturer(Microbiology)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','22','10496','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Head Asstt.
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10386','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Driver
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10386','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Generator Operator
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10374','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//House Keeper
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10422','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Instrument Care Taker
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10433','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Leaser Keeper
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','85','10494','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Lab. Attendent
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10481','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Nursing Superintendent
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','52','10481','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Medical Officer
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','44','10555','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//PA cum Computer Operator
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','46','10637','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Data Entry Operator
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10615','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Library Attendent
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10507','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Mali
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10533','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Mashalchi
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10232','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//MLSS
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10577','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Anesthesiology)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','4','10682','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Anesthesiology)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','4','10682','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Nephrology)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','48','10682','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Paediatrics Nephrology)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','48','10682','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Radiology & Imaging)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','78','10682','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Transplant Urology)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','93','10682','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Urology)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organzation_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','93','10682','2','','')");      
						  
					 }
					 
					 
					 for($a = 1;$a <= 1; $a++)//Registrar
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','54','10719','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Pharmacist
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','70','10650','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Radiographer
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','78','10650','2','','')");      
						  
					 }	 
					 for($a = 1;$a <= 1; $a++)//Record Keeper
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','46','10715','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Photo Copier Operator
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10656','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Sr. Research Officer
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','48','10801','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Resident Physician(RP)
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','44','10727','2','','')");      
						  
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Research Asstt.
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','66','10725','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Resident Surgeon
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','87','10731','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','52','10804','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Rent Collector
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','1','10029','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Statistician
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','46','10820','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Steward
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','96','10830','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Store Keeper
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','87','10838','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Technician
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','89','10731','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Store Assistant
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','87','10833','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Supervisor
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','4','10861','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Tailor
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','89','10869','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Telephone Operator
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10886','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Ticket Clerk / Receptionist
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10890','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Ward Master
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','96','10915','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Ward Boy/Aya
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','96','10915','2','','')");      
						  
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Washerman
					 {
						  
							   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10920,'2','','')");      
						  
					 }
				  }
				  //
				  //
				  //
				  elseif($org_id == 629)//NICRH (National Institute of Cancer Research & Hospital)
				  {                                                            
					for($a = 1;$a <= 1; $a++)//Director Cum Professor(CIR&H)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','21','98','10790','1','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Professor(Cancer Epidemiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11451','1','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Professor(Cytopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11466','3','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Professor(Diagonostic Radiology & Imaging)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','78','11470','3','','')");	
						
					}
		
					
					for($a = 1;$a <= 1; $a++)//Professor(Diagonostic Radiology & Imaging)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','32','11486','3','','')");	
						
					}			
					
					for($a = 1;$a <= 1; $a++)//Professor(Hematology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','34','11488','3','','')");	
						
					}	
		
		
					
					for($a = 1;$a <= 1; $a++)//Professor(Histopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','36','11490','1','','')");	
						
					}	
					
					
					
					for($a = 1;$a <= 1; $a++)//Professor(Medical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','43','11493','1','','')");	
						
					}			
					
					
					for($a = 1;$a <= 1; $a++)//Professor(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','80','11536','1','','')");	
						
					}				
					
					for($a = 1;$a <= 1; $a++)//Professor(Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','88','11545','1','','')");	
						
					}				
					
					
					for($a = 1;$a <= 1; $a++)//Professor/Chief Physist(Medical Physics)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11555','1','','')");	
						
					}
		
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Anesthesiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','4','10045','3','','')");	
						
					}
		
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Blood Transfusion)
					{
						
	  
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10051','3','','')");	
						
					}			
					
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Cancer Epidemiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10053','1','','')");	
						
					}			
								
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Clinical Pathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','98','10068','1','','')");	
						
					}						
					
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Critical Care Unit)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','98','10073','3','','')");	
						
					}						
								
					
					
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Cytopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','98','10075','1','','')");	
						
					}						
									
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Cytopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10075','1','','')");	
						
					}						
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Dental & Facio-maxilary Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','20','10077','3','','')");	
						
					}						
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Diagonostic Radiology & Imaging)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','78','10085','3','','')");	
						
					}
		
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(ENT Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','27','10085','3','','')");	
						
					}
		
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Genitourinary Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10100','3','','')");	
						
					}
		
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Gyn Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','32','10104','3','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Hematological Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','37','10106','1','','')");	
						
					}
		
		
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Histopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','36','10109','1','','')");	
						
					}
		
		
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Histopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10109','3','','')");	
						
					}
		
		
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Immunology/Molicular Biology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10112','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Medical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','43','10117','3','','')");	
						
					}
		
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Medical Physics)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10118','3','','')");	
						
					}
					
					for($a = 1;$a <= 1; $a++)//Associate Professor(Microbiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','45','10120','3','','')");	
						
					}
					
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','65','10157','3','','')");	
						
					}
					
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Psychotherapy)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','73','10174','3','','')");	
						
					}			
		
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','77','10176','3','','')");	
						
					}
		
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10176','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Associate Professor(Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','88','10187','3','','')");	
						
					}
		
		
					for($a = 1;$a <= 1; $a++)//Deputy Director(Administration)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','98','10736','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Senior Consultant(Surgery))
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','87','10727','3','','')");	
						
					}
		
		
					for($a = 1;$a <= 1; $a++)//Asstt. Director(Administration)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','98','10227','3','','')");	
						
					}			
					
					for($a = 1;$a <= 1; $a++)//Asstt. Director(Hospital)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','6','98','10247','3','','')");	
						
					}				
					
					for($a = 1;$a <= 2; $a++)//Asstt. Professor(Anesthesiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','4','10297','3','','')");	
						
					}				
					
					
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Blood Transfusion)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10302','3','','')");	
						
					}			
					
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Cancer Epidemiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10304','1','','')");	
						
					}			
					
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Cancer Epidemiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10304','3','','')");	
						
					}				
					
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Clinical Pathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','98','10304','3','','')");	
						
					}				
					
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Critical Care)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10327','3','','')");	
						
					}				
					
					for($a = 1;$a <= 2; $a++)//Asstt. Professor(Cytopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','98','10330','3','','')");	
						
					}			
					
					for($a = 1;$a <= 2; $a++)//Asstt. Professor(Dental & Facio-maxilary Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','20','10332','3','','')");	
						
					}				
					
					for($a = 1;$a <= 2; $a++)//Asstt. Professor(Diagonostic Radiology & Imaging)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','78','10340','3','','')");	
						
					}				
		
		
					for($a = 1;$a <= 2; $a++)//Asstt. Professor(ENT Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','28','10343','3','','')");	
						
					}						
					
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Genitourinary Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10356','3','','')");	
						
					}	
		
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Gyn Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','32','10361','1','','')");	
						
					}
		
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Gyn Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10361','3','','')");	
						
					}
		
		
					for($a = 1;$a <= 2; $a++)//Asstt. Professor(Hematology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','34','10363','1','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Asstt. Professor(Histopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','36','10365','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Immunology/Molicular Biology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10371','3','','')");	
						
					}
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Medical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10377','3','','')");	
						
					}
					for($a = 1;$a <= 2; $a++)//Asstt. Professor(Medical Physics)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10378','3','','')");	
						
					}
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Microbiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10381','1','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Microbiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','98','10381','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Ortho Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','98','10405','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10422','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Physical Medicine & Rehabilitaion)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10437','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Plastic & Reconstruction)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10443','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','77','10450','1','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Asstt. Professor(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10365','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','88','10460','1','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10460','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Jr. Consutant(Surgery Emergency)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11069','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Resident Surgeon(ENT Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','28','11687','3','','')");	
						
					}	
		
					for($a = 1;$a <= 1; $a++)//Resident Surgeon(Gyn Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','32','11694','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Resident Surgeon(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','77','11697','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Resident Surgeon(Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','88','11701','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Chief Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10651','1','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Anesthetist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10027','1','','')");	
						
					}
		
					for($a = 1;$a <= 4; $a++)//Anesthetist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10027','3','','')");	
						
					}
		
					for($a = 1;$a <= 3; $a++)//Anesthetist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10027','3','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Asstt. Registrar(Dental & Facio-maxilary Surveical)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','20','10493','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Registrar(ENT Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','28','10497','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Genitourinary Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10502','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Gyn Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','32','10504','1','','')");	
						
					}
		
					for($a = 1;$a <= 3; $a++)//Asstt. Registrar(Gyn Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10504','3','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Asstt. Registrar(Hematology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','34','10505','1','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Medical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10509','1','','')");	
						
					}
		
					for($a = 1;$a <= 3; $a++)//Asstt. Registrar(Medical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','43','10509','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Ortho Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','98','10519','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Paediatrics Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10525','3','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Asstt. Registrar(Plastic & Reconstruction)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10530','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','77','10534','1','','')");	
						
					}
		
					for($a = 1;$a <= 5; $a++)//Asstt. Registrar(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10534','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','88','10540','1','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Asstt. Registrar(Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10540','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Lecturer(Clinical Pathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','98','11122','3','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Lecturer(Cytopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11127','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Lecturer(Histopathology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','36','11138','3','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Lecturer(Immunology/Molicular Biology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11142','3','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Lecturer(Microbiology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','45','11146','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
					
					for($a = 1;$a <= 2; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
					
				  for($a = 1;$a <= 4; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}			
		
				  for($a = 1;$a <= 6; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}			
					
				  for($a = 1;$a <= 2; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}	
		
				  for($a = 1;$a <= 2; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}			
					
					
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
					
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}			
		
					
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','1','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}	
		
				  for($a = 1;$a <= 5; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','1','','')");	
						
					}	
		
				  for($a = 1;$a <= 4; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','1','','')");	
						
					}			
					
				  for($a = 1;$a <= 4; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
					
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','1','','')");	
						
					}
					
					
				  for($a = 1;$a <= 2; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
					
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
		
				  for($a = 1;$a <= 2; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
		
					
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
		
				  for($a = 1;$a <= 2; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
					
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
					
				  for($a = 1;$a <= 2; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
		
					
				  for($a = 1;$a <= 3; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','1','','')");	
						
					}
					
				  for($a = 1;$a <= 5; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
		
				  for($a = 1;$a <= 2; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','1','','')");	
						
					}
		
		
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
		
				  for($a = 1;$a <= 3; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
					
					
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','1','','')");	
						
					}
		
				  for($a = 1;$a <= 2; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}			
				  for($a = 1;$a <= 1; $a++)//Medical Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11225','3','','')");	
						
					}
		
					
				  for($a = 1;$a <= 3; $a++)//Medical Physicist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11277','3','','')");	
						
					}
		
					
				  for($a = 1;$a <= 1; $a++)//Registrar(ENT Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','28','11606','3','','')");	
						
					}
					
		
					
				  for($a = 1;$a <= 2; $a++)//Registrar(Gynae Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','32','11615','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Registrar(Hematology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','34','11616','2','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Registrar(Medical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','43','11618','1','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Registrar(Medical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11618','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Registrar(Paediatrics Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11640','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Registrar(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11649','1','','')");	
						
					}
		
				  for($a = 1;$a <= 2; $a++)//Registrar(Radiation Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11649','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Registrar(Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','36','11656','1','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Registrar(Surgical Oncology)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11656','3','','')");	
						
					}
		
				  for($a = 1;$a <= 2; $a++)//Research Asstt.
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11666','1','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//System Analyst
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11880','3','','')");	
						
					}
		
		
				  for($a = 1;$a <= 1; $a++)//Programmer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11558','3','','')");	
					
					}
					
				  for($a = 1;$a <= 1; $a++)//Asstt. Maintanance Engineer(MIS)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10282','3','','')");	
						
					}
					
					
				  for($a = 1;$a <= 1; $a++)//Asstt. Programmer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10474','3','','')");	
						
					}
					
		
				  for($a = 1;$a <= 1; $a++)//Jr. Health Education Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11071','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Metron/Deputy Nursing Superintendent
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11312','2','','')");	
						
					}
		
		
				  for($a = 1;$a <= 1; $a++)//Nursing Superintendent
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11342','3','','')");	
						
					}
		
		
				  for($a = 1;$a <= 1; $a++)//Statistician
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11826','2','','')");	
						
					}
		
		
				  for($a = 1;$a <= 1; $a++)//Technical Manager/Assistant Construction Engineer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11894','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Academic Secretary
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10001','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Accounts Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11880','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Administrative Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10020','2','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Chief Medical Technologist(Radiotheraphy)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10652','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Security Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11726','3','','')");	
						
					}
		
				  for($a = 1;$a <= 5; $a++)//Sister/Nursing Supervisor
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11733','2','','')");	
						
					}
		
				  for($a = 1;$a <= 5; $a++)//Sister/Nursing Supervisor
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11733','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Sotre Officer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11739','3','','')");	
						
					}
		
				  for($a = 1;$a <= 2; $a++)//Sub Asstt. Engineer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11865','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Data Entry Supervisor
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11718','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Dietician
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10783','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Health Educator
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10954','3','','')");	
						
					}
		
				  for($a = 1;$a <= 2; $a++)//Medical Technologist(Dental)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11295','3','','')");	
						
					}
		
				  for($a = 1;$a <= 10; $a++)//Medical Technologist(Lab)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11800','2','','')");	
						
					}
		
				  for($a = 1;$a <= 6; $a++)//Medical Technologist(Lab)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11800','3','','')");	
						
					}
		
				  for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiograpy)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11305','2','','')");	
						
					}
		
				  for($a = 1;$a <= 9; $a++)//Medical Technologist(Radiograpy)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11305','3','','')");	
						
					}
		
				  for($a = 1;$a <= 4; $a++)//Medical Technologist(Radiotherapy)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11307','2','','')");	
						
					}
		
				  for($a = 1;$a <= 16; $a++)//Medical Technologist(Radiotherapy)
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11307','3','','')");	
						
					}
		
				  for($a = 1;$a <= 5; $a++)//Nurse
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11338','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Pharmacist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11395','2','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Pharmacist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11395','3','','')");	
						
					}
		
		for($a = 1;$a <= 32; $a++)//Sr. Staff Nurse
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11812','2','','')");	
						
					}
		
		for($a = 1;$a <= 172; $a++)//Sr. Staff Nurse
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11812','3','','')");	
						
					}
		
		for($a = 1;$a <= 24; $a++)//Staff Nurse
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11821','2','','')");	
						
					}
		
		for($a = 1;$a <= 21; $a++)//Computer Operator
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11681','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Head Asstt.
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10938','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Librarian
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11168','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Accountant
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10005','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Cashier
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10620','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Clinical Photographer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10673','2','','')");	
						
					}
		
		for($a = 1;$a <= 3; $a++)//Interviewer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11007','2','','')");	
						
					}
		
		for($a = 1;$a <= 4; $a++)//Steno Typist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11832','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Steward
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11880','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11839','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Store Keeper
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11846','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11880','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11880','3','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10558','3','','')");	
						
					}
		
		for($a = 1;$a <= 3; $a++)//Data Entry Operator
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10713','3','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Driver
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11858','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Imam
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10978','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Account Asstt.
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10003','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Asstt. Accountant
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10199','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Asstt. Steward
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10549','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Diet Clerk
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10781','3','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//ECG Technician
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10864','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//House Keeper
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10974','3','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Instrument Care Taker
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10998','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Library Asstt.
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11173','3','','')");	
						
					}
		for($a = 1;$a <= 1; $a++)//Linen Keeper
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11187','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Linen Keeper
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11187','3','','')");	
						
					}
		
		for($a = 1;$a <= 4; $a++)//Office Asstt. Cum Typist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11362','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Photographer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11403','3','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Receptionist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11586','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Receptionist
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11586','3','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Record Keeper
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11589','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Record Keeper
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11589','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Record Supplier
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11592','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Rent Collector
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11661','3','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Store Assistant
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11834','2','','')");	
						
					}
		
		for($a = 1;$a <= 3; $a++)//Ticket Clerk
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11907','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Ward Master
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11949','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Ward Master
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11949','3','','')");	
						
					}
		
		for($a = 1;$a <= 3; $a++)//Dark Room Asstt.
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10703','2','','')");	
						
					}		
		
		for($a = 1;$a <= 2; $a++)//Electrician
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10874','2','','')");	
						
					}
		
		for($a = 1;$a <= 6; $a++)//Liftman
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11180','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Moazzin
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11326','3','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Moold Room Assistant
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11331','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Animal Care Taker
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10030','3','','')");	
						
					}
		
		for($a = 1;$a <= 4; $a++)//Bearer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10580','2','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Calender/Dhopi
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10593','6','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Carpenter
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10608','2','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Cook
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10687','2','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Cook
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10687','6','','')");	
						
					}
		
		
		for($a = 1;$a <= 6; $a++)//Darwan/Guard
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10710','2','','')");	
						
					}
		
		for($a = 1;$a <= 12; $a++)//Darwan/Guard
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10710','6','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Dispensary Assistant
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10838','3','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Dispensary Attendent
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10838','1','','')");	
						
					}
		
		for($a = 1;$a <= 2; $a++)//Dome
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10852','6','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Fire Board Attendent
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','10917','3','','')");	
						
					}
		
		for($a = 1;$a <= 4; $a++)//Lab. Attendent
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11094','2','','')");	
						
					}
		
		for($a = 1;$a <= 1; $a++)//Mali
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11200','2','','')");	
						
					}
		
		for($a = 1;$a <= 5; $a++)//Mashalchi
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11209','2','','')");	
						
					}
					
		for($a = 1;$a <= 12; $a++)//MLSS
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11321','2','','')");	
						
					}
					
		for($a = 1;$a <= 40; $a++)//MLSS
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11321','3','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//O.T. Attendent
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11348','2','','')");	
						
					}
		
					for($a = 1;$a <= 6; $a++)//O.T. Attendent
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11348','3','','')");	
						
					}
		
					for($a = 1;$a <= 1; $a++)//Plumber
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11413','2','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Pump Operator
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11575','3','','')");	
						
					}
		
					for($a = 1;$a <= 7; $a++)//Streacher Bearer
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11856','2','','')");	
						
					}
		
					for($a = 1;$a <= 21; $a++)//Sweeper
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11877','2','','')");	
						
		
					}
		
					for($a = 1;$a <= 10; $a++)//Sweeper
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11877','6','','')");	
						
					}
		
					for($a = 1;$a <= 3; $a++)//Trolly Boy
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11919','3','','')");	
						
					}
		
					for($a = 1;$a <= 2; $a++)//Ward Boy
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11947','2','','')");	
						
					}
		
					for($a = 1;$a <= 9; $a++)//Ward Boy/Aya
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11948','2','','')");	
						
					}
		
					for($a = 1;$a <= 50; $a++)//Ward Boy/Aya
					{
						
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11948','3','','')");	
						
					}
				  }
				  //
				  //
				  //
				  elseif($org_id == 637)//NITOR
				  {
					  
					  for($a = 1;$a <= 1; $a++)//Director Cum Professor
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','21','98','10789','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Joint Director
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','98','11014,'3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Professor(Anesthesiology)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','4','11447','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Professor(Orthopaedics Surgery)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','62','11513','1','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Professor(Orthopaedics Surgery)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','62','11513','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Professor(Physical Medicine)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','71','11529','1','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Orthopaedics Surgery)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','62','10145','1','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Associate Professor(Orthopaedics Surgery)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','62','10145','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Associate Professor(Orthopaedics Surgery)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','62','11447','1','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Deputy Director
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','13','98','10756','1','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Asstt. Professor(Orthopaedics Surgery)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','62','10520','1','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Asstt. Professor(Orthopaedics Surgery)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','62','10520','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Asstt. Surgeon
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','4','10552','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Anesthetist
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','4','10028','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Anesthetist
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','4','10028','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Blood Bank Officer
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','7','10585','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','22','10891','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Computer Operation Supervisor
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','46','10680','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Programmer
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','62','11558','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Asstt. Programmer
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','46','10474','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Nursing Superintendent
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11342','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Administrative Officer
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','2','10020','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Development Officer
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','21','10776','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Nursing Supervisor
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11343','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Nursing Supervisor
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11343','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Occupational Therapist
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','53','11354','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Occupational Therapy Consultant
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','53','11357','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Physiotherapist
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','73','10407','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Sr. Medical Technologist(Lab)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','64','11800','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Asstt. Accounts Officer
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','1','10201','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Computer Operator
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','46','10684','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','46','11299','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Pharmacist
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','46','11395','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11812','3','','')");      
							
					   }
					   
					   
						for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11812','3','','')");      
							
					   }
					   
					   
						for($a = 1;$a <= 1; $a++)//Staff Nurse
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11821','3','','')");      
							
					   }
							   
					   for($a = 1;$a <= 1; $a++)//Accountant
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','2','1','10005','3','','')");      
							
					   }
					   
					   
					   for($a = 1;$a <= 1; $a++)//Head Asstt.
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','54','10939','2','','')");      
							
					   }
					   
					   
						for($a = 1;$a <= 1; $a++)//Stenographer
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','21','1','11834','2','','')");      
							
					   }
					   
					   
						for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11812','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//House Keeper
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','21','10974','2','','')");      
							
					   }
					   
					   
						for($a = 1;$a <= 1; $a++)//Instrument Care Taker
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','25','10998','2','','')");      
							
					   }
					   
					   
						for($a = 1;$a <= 1; $a++)//Limb Maker
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','5','11184','3','','')");      
							
					   }
					   
					   
						for($a = 1;$a <= 1; $a++)//PT & OT Asstt.
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','73','11569','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//PT & OT Asstt.
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','73','11569','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//PT & OT Asstt.
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','73','11569','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//PT & OT Technician
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','73','11569','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Sanitary Inspector
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11716','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Steno Typist
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','2','11833','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Steward
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','11840','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Store Keeper
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','2','85,'11848','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Steward
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','11840','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11924','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Driver
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','21','10859','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Cashier
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10623','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Electrician
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','21','11875','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Electrician
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','21','11875','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Laundary Supervisor
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','17','11110','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Librarian
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','42','11172','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Linen Keeper
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','17','11188','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11362','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Receptionist
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11586','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Receptionist
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11586','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Record Keeper
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','46','11590','3','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Telephone Operator
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','17','11188','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Cash Sarkar
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','4','10617','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Carpenter
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','5','10610','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Daftary
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10700','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Duplicating Machine Operator
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10862','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Lab. Attendent
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','64','11094','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Tailor
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','17','11188','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Aya
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','22','10575','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Bootle Washer
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','64','10590','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Cook
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','10688','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Dhupi
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','17','10777','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Head Cook
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','10947','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Mali
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11200','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Mali
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11200','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Mashalchi
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','11210','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//MLSS
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11321','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//MLSS
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11321','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Sweeper
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11878','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Sweeper
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11878','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 2; $a++)//Ward Boy
					   {
							
								 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','22','11947','2','','')");      
							
					   }
				  }
				  //
				  //
				  //
				  elseif($org_id == 767)//Sarkari Karmachari Hostpital
				  {
					  for($a = 1;$a <= 1; $a++)//Medical Superintendent
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','44','98','11289','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Gyn & Obs)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','33','11765','1','','')");      
					   }
					   for($a = 1;$a <= 2; $a++)//Sr. Consultant(Medicine)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','45','11767','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Paediatrics)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','68','11772','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant (Darmatology)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','84','11760','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(surgery)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','87','11780','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Anesthesia)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','4','11020','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(ENT)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','27','11034','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Eye)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','98','11036','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Pathology)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','64','11058','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Radiology)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','78','11062','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//RMO
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','83','11705','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Anesthetist
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','4','10028','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Dental Surgeon
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','20','10719','1','','')");      
					   }
					   for($a = 1;$a <= 5; $a++)//Medical Officer
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','98','11226','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Pathologist
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','64','11387','1','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Radiologist
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','78','11580','1','','')");      
					   }
					   for($a = 1;$a <= 3; $a++)//Nursing Supervisor
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','52','11343',21','','')");      
					   }
					   for($a = 1;$a <= 2; $a++)//Health Educator
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','33','10955','2','','')");      
					   }
					   /*for($a = 1;$a <= 3; $a++)//Sub Asstt. Community Medical Officer
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','48','98','11062','2','','')");      
					   }*/
					   for($a = 1;$a <= 1; $a++)//Medical Technologist(Dental)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','37','20','11295','2','','')");      
					   }
					   for($a = 1;$a <= 2; $a++)//Mecical Technologist((Lab)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','64','11299','2','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiography)
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','98','11305','2','','')");      
					   }
					   for($a = 1;$a <= 3; $a++)//Pharmacist
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','70','11395','2','','')");      
					   }
					   for($a = 1;$a <= 24; $a++)//Sr. Staff Nurse
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','52','11812','2','','')");      
					   }
					   for($a = 1;$a <= 5; $a++)//Asstt. Nurse
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','52','10284','2','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Cashier
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','1','10620','2','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Head Asstt. cum Accountant
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10940','2','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Store Keeper
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','86','11847','2','','')");      
					   }
					   for($a = 1;$a <= 3; $a++)//Driver
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','10860','2','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Office Asstt. cum Typist
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','11359','2','','')");      
					   }
					   for($a = 1;$a <= 2; $a++)//Lab Atteendent
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','98','11095','2','','')");      
					   }
					   for($a = 1;$a <= 2; $a++)//OT. Attendent
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','98','11348','2','','')");      
					   }
					   for($a = 1;$a <= 3; $a++)//Cook/Masalchi
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','29','10688','2','','')");      
					   }
					   for($a = 1;$a <= 2; $a++)//Mali
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','11200','2','','')");      
					   }
					   for($a = 1;$a <= 15; $a++)//MLSS/Ward Boy/Aya
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','54','11324','2','','')");      
					   }
					   for($a = 1;$a <= 6; $a++)//Sweeper
					   {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4,'54','11878','2','','')");      
					   }
					  
				  }
				  //
				  //
				  //
				  //
				  elseif($org_id == 635)//National Institute of Ophthalmology (NIO)
				  {
						for($a = 1;$a <= 1; $a++)//Director Cum Professor(NIO)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','21','98','10789','1','','')");      
							  
						 }
						 
						 
						for($a = 1;$a <= 1; $a++)//Director Cum Professor(NIO)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','21','98','10789','1','','')");      
						  }
							  
						for($a = 1;$a <= 1; $a++)//Professor(General Opthalmology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','59','11480','1','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Professor(Pathology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','64','11527','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Associate Professor(Anesthesiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','4','10297','1','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Associate Professor(Anesthesiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','4','10297','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Associate Professor(General Opthalmology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','59','10789','1','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics Opthalmology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','64','10158','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Associate Professor(Pharmacology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','69','10164','1','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Associate Professor(Physiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','72','10168','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Associate Professor(Radiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','72','10178','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Deputy Director
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','13','98','10768','1','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Asstt. Director
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','13','98','10221','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Sr. Consultant(Medicine)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','44','10789','1','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anesthesiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','4','10045','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Asstt. Professor(General Opthalmology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','59','10398','1','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Opthalmology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','59','10398','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Pathology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','64','10431','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Radiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','78','10453','1','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Jr. Consultant(Anesthesia)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','4','11020','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Jr. Consultant(Cardiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','13','11027','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Jr. Consultant(ENT)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','27','11034','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Jr. Consultant(Opthalmology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','59','11048','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Jr. Consultant(Paediatrics)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','68','11055','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Jr. Consultant(Radiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','68','11063','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Anesthesiologist
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','4','10026','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Anesthesiologist
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','4','10026','1','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Asstt. Registrar
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','44','10477','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Asstt. Registrar
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','44','10477','1','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Asstt. Surgeon
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','87','10552','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Dental Surgeon
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','20','10719','3','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','37','22','10891','1','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Lecturer (Anesthesiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','4','11115','1','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Lecturer (Pathology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','64','11116','1','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Medical Officer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','44','11226','1','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Neurologist
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','98','11336','1','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Pathologist
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','64','11387','1','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Registrar
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','44','11595','3','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Engineer(Instrument Maintain)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','10892','3','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Personal Officer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11394','3','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Programmer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11558','1','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Administrative Officer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','10020','2','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Administrative Officer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','10020','3','','')");      
							  
						 }
						 
						 
						   for($a = 1;$a <= 1; $a++)//Deputy Nursing Superintendent
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','52','10772','2','','')");      
							  
						 }
						 
						  for($a = 1;$a <= 1; $a++)//Deputy Nursing Superintendent
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','52','10772','3','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Nursing Supervisor
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','52','11343','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Sr. Medical Technologist(Lab)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','64','11800','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Store Officer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','86','11853','3','','')");      
							  
						 }
						   for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','64','11229','3','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','64','11229','2','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiology)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','74','11306','1','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Pharmacist
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','86','11395','2','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Pharmacist
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','86','11395','3','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','52','11812','2','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','52','11812','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Staff Nurse
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','52','11821','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Asstt. Librarian
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','42','10279','2','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Cashier
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','1','10622','1','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Dietician
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','29','11786','3','','')");      
							  
						 }
						 
						   for($a = 1;$a <= 1; $a++)//Head Asstt.
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','10939','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Stenographer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','13','98','11834','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Steward
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','29','11840','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11924','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Accountant
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','13','98','10005','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Data Entry Operator
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','46','10714','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Health Education
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','37','33','10952','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Linen Keeper
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11188','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Orthopaedics(Paediatrics)
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','68','11373','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Asstt. Store Keeper
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','86','10550','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Imam
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','10979','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Store Keeper
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','86','11848','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Strealizer Cum Mechanic
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11859','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Strealizer Cum Mechanic
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11859','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11362','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11362','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Ward Master
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11951','2','','')");      
							  
						 }
						 
						 
						 for($a = 1;$a <= 1; $a++)//Ward Master
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11951','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Driver
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','10859','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Instrument Care Taker
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11000','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Instrument Care Taker
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11000','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Photographer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11406','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Photographer
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11406','3','','')");      
							  
						 }
								 
						 for($a = 1;$a <= 1; $a++)//Receptionist
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11586','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Record Keeper
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','46','11590','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Ticket Clerk
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11908','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Cash Sarkar
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','1','10618','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Lab. Attendent
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','33','64','11094','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Jamadar
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','17','11010','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Asstt. Cook
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','29','10218','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Asstt. Cook
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','29','10218','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Cook
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','10688','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Mali
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11200','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Mashalchi
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','29','11210','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//MLSS
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11321','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Night Guard
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','83','11337','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Sweeper
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11878','2','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Tailor
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','54','11884','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Ward Boy
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','95','11947','3','','')");      
							  
						 }
						 
						 for($a = 1;$a <= 1; $a++)//Ward Boy
						 {
							  
								   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								   VALUES('$org_id','4','95','11947','2','','')");      
							  
						 }
	  
					  
				  }
				  //
				  //
				  //
				  //
				  elseif($org_id == 631)//NIDCH
				  {
					  for($a = 1;$a <= 1; $a++)//Director(NIDCH)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','23','98','10821','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Professor(Anesthesiology)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','4','11447','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Professor(Pathology & Micro Biology)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','64','11526','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Professor(Respiratory Medicine)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','81','11542','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Professor(Thorasic Surgery)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','90','11547','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Anesthesiology)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','4','10045','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Blood Transfusion)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','8','10051','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Medicine)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','44','10119','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Pathology)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','64','10163','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Radiology)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','78','10179','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Respiratory Medicine)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','81','10183','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Surgery)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','81','10186','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Thorasic Surgery)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','44','90','10189','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Medical Superintendent
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','44','98','11279','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Pathology & Micro Biology)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','90','10430','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Respiratory Medicine)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','90','10457','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anesthesiology)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','4','10297','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Blood Transfusion)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','8','10302','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt.Professor(Physical Medicine)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','71','10166','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Radiology)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','78','10453','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Res , Physio  & Biochemistry)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','16','10456','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Surgery)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','87','10458','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Thorasic Surgery)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','90','10462','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Resident Physician
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','72','11679','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Resident Surgeon
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','87','11680','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//RMO
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','82','11703','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Anesthetist
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','4','10028','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Anesthesiology)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','4','10478','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Medicine)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','44','10510','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Surgery)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','87','10539','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','22','10891','1','','')");      
					   }
					   
					   for($a = 1;$a <= 2; $a++)//Medical Officer
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','44','11226','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Pathologist
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','64','11387','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Radiologist
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','78','11580','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Registrar(Medicine)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','44','11619','1','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Registrar(Surgery)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','87','11654','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Nursing Superintendent
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','11342','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Academic Secretary
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10001','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Accounts Officer
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10015','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Deputy Nursing Superintendent
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','10771','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Librarian
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','42','10891','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Physiotherapist
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','73','10891','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Secretary
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11722','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Sr. Medical Technologist(Lab)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','64','11800','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Statistical Officer
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','73','10891','2','','')");      
					   }
					   
					   
					   for($a = 1;$a <= 1; $a++)//Store Officer
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','85','11853','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Librarian
			  
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','42','10281','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Audio Visual Technician
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10570','3','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Dietician
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','10787','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Electro Medical Technician
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10885','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Medical Technologist(BT)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','8','11293','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','64','11284','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Nursing Supervisor
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11343','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//O.T. Sister
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11352','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Occupational Therapist
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','53','11354','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Pharmacist
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','70','11395','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11812','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Staff Nurse
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','52','11812','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//X Ray Technician
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','78','11958','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Stenographer
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','98','11834','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Accountant
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10005','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Accountant
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10005','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Head Asstt.
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10939','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Steno Typist
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11833','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Steward
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11840','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Store Keeper
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11848','2','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11924','2','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Account Asstt.
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10004','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Carpenter
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10208','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Boiler Mechanic
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10588','2','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Carpenter
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10610','2','','')");      
					   }
					   for($a = 1;$a <= 1; $a++)//Cashier
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10622','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Dark Room Asstt.
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10704','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Driver.
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10859','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//House Keeper
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10974,'2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Medical Record Keeper
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11278','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11362','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Photographer
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11405','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//Telephone Operator.
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11905','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Ticket Clerk
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11908','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//Tailor
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11883','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Daftary
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10700','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//Pump Machine Operator
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11574','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Cook
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','10688','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//MLSS
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11321','2','','')");      
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Sweeper
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','17','11878','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//Mali
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','17','11200','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//Ward Boy
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','17','11947','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//Mashalchi
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','11210','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//Darwan
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10856','2','','')");      
					   }
					   
						for($a = 1;$a <= 1; $a++)//Head Cook
					   {
								$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','10946','2','','')");      
					   }
				  }
				  //
				  //
				  //
				  //
				  elseif($org_id == 630)//NICVD
				  {
					for($a = 1;$a <= 1; $a++)//Director Cum Professor(NICVD)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','21','98','10791','1','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Anatomy)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','68','11446','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Anesthesiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','4','11447','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Anesthesiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','4','11447','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Biochemistry)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','6','11448','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Cardiac Radiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','11452','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','11453','1','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','11453','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','11453','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','13','11454','1','','')");      
					 }
					 
					 for($a = 1;$a <= 2; $a++)//Professor(Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','13','11454','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Paediatrics Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','67','11516','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Physiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','72','11530','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Professor(Vascular Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','13','11552','3','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Anatomy)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','3','10044','3','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Anesthesiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','4','10045','2','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Anesthesiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','4','10045','1','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Biochemistry)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','6','10049','1','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Blood Transfusion)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','8','10051','3','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','10055','1','','')");      
					 }
					 
					  for($a = 1;$a <= 2; $a++)//Associate Professor(Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','13','10055','3','','')");      
					 }
					 
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','13','10055','3','','')");      
					 }
					 
					for($a = 1;$a <= 1; $a++)//Associate Professor(Cardio Vascular Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','10056','2','','')");      
					 }
					 
					 for($a = 1;$a <=2; $a++)//Associate Professor(Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','13','10057','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Cardiothorasic Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','15','10058','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Microbiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','45','10120','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Nuclear Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','13','10134','3','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','67','10150','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','68','10151','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Pharmacology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','69','10164','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Physical Medicine)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','71','10166','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Physiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','72','10179','1','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Radiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','78','10179','2','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Associate Professor(Radiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','78','10179','1','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Associate Professor(Vascular Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','78','10134','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Deputy Director
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','13','98','10734','2','','')");      
					 }
					 
					 for($a = 1;$a <= 3; $a++)//Asstt. Professor(Anesthesiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','4','10297','3','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anesthesiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','4','10297','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Biochemistry)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','6','10299','2','','')");      
					 }
					 for($a = 1;$a <= 4; $a++)//Asstt. Professor(Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','10306','3','','')");      
					 }
					 
					  for($a = 1;$a <= 4; $a++)//Asstt. Professor(Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','10306','2','','')");      
					 }
					 
					 for($a = 1;$a <= 2; $a++)//Asstt. Professor(Cardio Vascular Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','10134','2','','')");      
					 }
					 
					 for($a = 1;$a <= 7; $a++)//Asstt. Professor(Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','13','10308','2','','')");      
					 }
					 
					 for($a = 1;$a <= 4; $a++)//Asstt. Professor(Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','13','10308','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Cardiothorasic Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','15','10309','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Pathology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','64','10432','2','','')");      
					 }
					 
					 for($a = 1;$a <= 2; $a++)//Asstt. Professor(Paediatrics Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','68','10414','3','','')");      
					 }
					 
					 for($a = 1;$a <= 2; $a++)//Asstt. Professor(Paediatrics Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','68','10412','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Physical Medicine)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','71','10438','2','','')");      
					 }
					 
					 for($a = 1;$a <= 4; $a++)//Asstt. Professor(Radiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','78','10453','3','','')");      
					 }
					 
					 for($a = 1;$a <= 3; $a++)//Asstt. Professor(Vascular Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','10471','3','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Curator
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','3','10692','3','','')");      
					 }
					 
					 for($a = 1;$a <= 2; $a++)//Jr. Consultant(Anesthesia)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','4','11020','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Resident Physician
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','55','11669','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Resident Surgeon
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','87','11680','1','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)//Resident Surgeon(Vascular Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','1','12','11702','3','','')");      
					 }
					 

					 for($a = 1;$a <= 1; $a++)// Registrar(Cardiology)
					 {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','32','12','11597','3','','')");      
					 }
					 
					  for($a = 1;$a <= 15; $a++)//Asstt. Registrar(Anesthesiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','4','10478','3','','')");      
					 }
					 
					  for($a = 1;$a <= 14; $a++)// Asstt. Registrar(Cardiac Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','12','10483','3','','')");      
					 }
					 
					  for($a = 1;$a <= 2; $a++)// Asstt. Registrar(Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','13','10484','2','','')");      
					 }
					 
					  for($a = 1;$a <= 24; $a++)// Asstt. Registrar(Cardiology)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','13','11484','3','','')");      
					 }
					 
					  for($a = 1;$a <= 6; $a++)// Asstt. Registrar(Medicine)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','44','10510','1','','')");      
					 }
					  for($a = 1;$a <= 14; $a++)// Asstt. Registrar(Medicine)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','44','10510','2','','')");      
					 }
					 
					 for($a = 1;$a <= 9; $a++)//Asstt. Registrar(Surgery)
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','87','10539','2','','')");      
					 }
					 
					 for($a = 1;$a <= 9; $a++)//Asstt. Registrar(Surgery)
					 {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','32','87','10539','1','','')");      
					 }
					 
					 for($a = 1;$a <= 8; $a++)//Asstt. Registrar(Vascular Surgery) 
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','33','12','10544','3','','')");      
					 }
					 
					 for($a = 1;$a <= 3; $a++)// Blood Transfusion Officer
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','7','10586','3','','')");      
					 }
					 
					  for($a = 1;$a <= 2; $a++)// Clinical Pathologist
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','32','64','10672','2','','')");      
					 }
					 
					  for($a = 1;$a <= 3; $a++)// Emergency Medical Officer
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','36','22','10891','3','','')");      
					 }
					 
					  for($a = 1;$a <= 4; $a++)// Emergency Medical Officer
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','36','22','10891','2','','')");      
					 }
					 
					  for($a = 1;$a <= 1; $a++)// Hostel Superintendent
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','4','39','10972','3','','')");      
					 }
					 
					  for($a = 1;$a <= 40; $a++)// Medical Officer
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','36','44','11702','3','','')");      
					 }
					 
					 for($a = 1;$a <= 16; $a++)// Medical Officer
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','36','44','11702','2','','')");      
					 }
					 
					 for($a = 1;$a <= 1; $a++)// Radiologist
					 {
							  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							   VALUES('$org_id','36','78','11580','3','','')");      
					 }
					 
					for($a = 1;$a <= 2; $a++)// Registrar(Anesthesiology)
					{
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','32','4','11596','2','','')");      
					}


					for($a = 1;$a <= 1; $a++)// Registrar(Medicine)
					{
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','33','44','11620','3','','')");      
					}


			 for($a = 1;$a <= 1; $a++)// Registrar(Surgery)
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','87','11654','1','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Registrar(Vascular Surgery)
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','87','11659','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// System Analyst
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11880','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Asstt. Programmer
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','46','10474','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Bio-Chemist
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','1','10582','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Librarian
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','1','42','11167','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)//Microbiologist 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','45','11315','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)//Nursing Superintendent
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','52','11702','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Personal Officer
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11934','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)//Accounts Officer 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','1','10015','3','','')");      
			 }

			 for($a = 1;$a <= 2; $a++)//Administrative Officer 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','1','12','10020','2','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)//Administrative Officer 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','1','12','10020','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)//Asstt. Hostel Superintendent 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','39','10275','3','','')");      
			 }

			 for($a = 1;$a <= 2; $a++)// Deputy Nursing Superintendent
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11771','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Dietician
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','29','10783','3','','')");      
			 }

			 for($a = 1;$a <= 6; $a++)// Nursing Supervisor
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','52','11343','2','','')");      
			 }

			 for($a = 1;$a <= 4; $a++)// Nursing Supervisor
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','52','11343','3','','')");      
			 }
			 for($a = 1;$a <= 1; $a++)//Store Officer 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','85','11853','3','','')");      
			 }

			 for($a = 1;$a <= 2; $a++)// Medical Technologist(BT)
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','8','11702','2','','')");      
			 }

			 for($a = 1;$a <= 8; $a++)// Medical Technologist(Lab)
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','1','64','11299','2','','')");      
			 }
			 
			 for($a = 1;$a <= 16; $a++)// Medical Technologist(Lab)
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','1','64','11299','3','','')");      
			 }
			 
			 for($a = 1;$a <= 3; $a++)//Medical Technologist(Physiotherapy) 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','1','73','11303','2','','')");      
			 }

			  for($a = 1;$a <= 1; $a++)//Medical Technologist(Physiotherapy) 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','1','73','11303','3','','')");      
			 }

			 for($a = 1;$a <= 11; $a++)// Pharmacist
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','1','70','11395','3','','')");      
			 }

			 for($a = 1;$a <= 241; $a++)// Sr. Staff Nurse
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','52','11812','3','','')");      
			 }
			 
			 for($a = 1;$a <= 68; $a++)// Sr. Staff Nurse
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','33','52','11812','2','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Cashier
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','1','10621','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)//Data Entry Operator 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','46','10713','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Driver
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','1','12','11702','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// House Keeper
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','10974','3','','')");      
			 }

			 for($a = 1;$a <= 2; $a++)// Instrument Care Taker
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','10998','3','','')");      
			 }

			 for($a = 1;$a <= 20; $a++)// Office Asstt. Cum Typist
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11362','3','','')");      
			 }
			 
			 for($a = 1;$a <= 9; $a++)// Office Asstt. Cum Typist
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11362','2','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Receptionist
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11586','3','','')");      
			 }

			for($a = 1;$a <= 7; $a++)// Telephone Operator
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11905','3','','')");      
			 }

			 for($a = 1;$a <= 6; $a++)// Ticket Clerk
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11907','3','','')");      
			 }


			 for($a = 1;$a <= 3; $a++)// Ward Master
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','96','11949','2','','')");      
			 }

			 for($a = 1;$a <= 3; $a++)// Record Keeper
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','46','11702','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)//Tailor 
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11882','3','','')");      
			 }

			 for($a = 1;$a <= 1; $a++)// Daftary
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','10700','3','','')");      
			 }

			 for($a = 1;$a <= 4; $a++)// Mashalchi
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				  VALUES('$org_id','4','29','11204','2','','')");           
			 }
			 
			 for($a = 1;$a <= 8; $a++)// Mashalchi
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				  VALUES('$org_id','4','29','11204','3','','')");           
			 }

			 for($a = 1;$a <= 30; $a++)// MLSS
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11321','2','','')");           
			 }
			 
			  for($a = 1;$a <= 30; $a++)// MLSS
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','11321','3','','')");           
			 }

			 for($a = 1;$a <= 1; $a++)// Sweeper
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','17','11878','3','','')");        
			 }

			 for($a = 1;$a <=36; $a++)// Ward Boy
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','96','11947','2','','')");      
			 }
			 
			 for($a = 1;$a <=72; $a++)// Ward Boy
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','96','11947','3','','')");      
			 }
			 
			 for($a = 1;$a <=3; $a++)// Dhupi
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','10777','3','','')");      
			 }
			 
			 for($a = 1;$a <=3; $a++)// Dome
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','10852','3','','')");      
			 }
			 
			 for($a = 1;$a <=1; $a++)//Animal Care Taker
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','10030','3','','')");      
			 }
			 
			 for($a = 1;$a <=25; $a++)//Aya
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','10575','3','','')");      
			 }
			 
			 for($a = 1;$a <=10; $a++)//Aya
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','54','10575','2','','')");      
			 }
			 
			 for($a = 1;$a <=1; $a++)//Cash Sarkar
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','1','10616','2','','')");      
			 }
			 
			 for($a = 1;$a <=1; $a++)//Laundary Supervisor
			 {
				 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				 VALUES('$org_id','4','17','11110','2','','')");      
			 }
				  }
				  //
				  //
				  //
				  //
				  elseif($org_id == 784)//Abu Naser
				  {
					   for($a = 1;$a <= 1; $a++)//Director(Seikh Abu Naser Hospital)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','23','98','10832','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Chief Consultant(Cardiology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','32','13','10637','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Chief Consultant(Throrasic & Cardiovascular Surgery)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','32','15','10641','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Chief Consultant(Orthopeadics)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','32','64','10640','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Chief Consultant(Neurology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','32','49','10639','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Chief Consultant(Nephrology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','32','48','10638','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Deputy Director
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','13','98','10735','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. COnsultant(Cardiology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','13','11757','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Throrasic & Cardiovascular Surgery)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','15','11781','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Cardiothorasic Anesthesia & OT)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','14','11758','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. COnsultant(Urology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','93','11782','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Plastic Surgery & Burn Unit)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','73','11775','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. COnsultant (Neuro Surgery)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','50','11768','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(ICU)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','14','11766','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Anesthiology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','4','11755','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(radiology & imaging)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','78','11777','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sr. Consultant(Blood Transfusion)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','8','11756','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(cardiology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','13','11027','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Cardiothorasic & Cardiovascular Surgery)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','15','11028','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Cardiothorasic Anesthesia & OT)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','14','11029','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Neuro Surgery)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','50','11045','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Neurology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','49','11046','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Nephrology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','48','11044','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Urology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','93','11068','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(ICU)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','14','11040','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Orthopeadics)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','63','11445','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Pathology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','64','11059','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Microbiology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','45','11043','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Biochemist)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','6','11023','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Registrar(Cardiology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','13','11598','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Registrar(Neuro Surgery)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','50','11627','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Registrar(Neurology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','49','11630','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Registrar(Nephrology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','48','11622','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Anesthetist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','4','10028','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Cardiothorasic & Cardiovascular Surgery)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','15','10485','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Urology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','93','10543','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Orthopeadics)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','63','10521','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(ICU)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','14','10507','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Anesthesiology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','4','10478','3','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Asstt. Surgeon/Equivalent
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','87','10555','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Dental Surgeon
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','20','10719','3','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Emergency Medical Officer
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','37','22','10891','3','','')");      
							
					   }
					   for($a = 1;$a <= 6; $a++)//Medical Officer
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','44','11226','3','','')");      
							
					   }
					   for($a = 1;$a <= 5; $a++)//Medical Officer(IMO)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','37','44','11253','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Medical Officer(Ayur/Homeo)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','37','37','11230','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Pathologist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','64','11387','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Radiologist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','78','11580','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Resident Physician(Neurology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','49','11676','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Resident Surgeon(Cardiology)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','13','11684','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//RMO(Cardiothorasic & Cardiovascular Surgery)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','12','11707','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Accounts Officer
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10014','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Nursing Super
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','11342','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Administrative Officer
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','2','10020','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Statistician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11827','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Sub Asstt. Engineer
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','35','46','11865','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//ECG Technician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','89','10864','3','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Medical Technologist(Lab)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','64','11299','3','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Medical Technologist(BT)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','8','11293','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Medical Technologist(Dental)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','20','11295','3','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Medical Technologist(Radiography)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','78','11305','3','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Medical Technologist(Radiotherapy)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','79','11307','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Pharmacist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','70','11395','3','','')");      
							
					   }
					   for($a = 1;$a <= 80; $a++)//Sr. Staff Nurse
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','11812','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Asstt. Librarian
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','42','10279','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Library Asstt.
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','98','11173','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Accountant
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10006','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Dietician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','10787','3','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Physiotherapist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','73','11410','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Ward Master
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','98','11950','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Cashier
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10623','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Diet Clerk
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','29','10782','3','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Driver
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10860','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Electro Medical Technician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10888','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Linen Keeper
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11188','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//O.T. Surgncal Technician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','87','11353','3','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Office Asstt. cum Typist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11362','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Plaster Technician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11411','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Receptionist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11586','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Record Keeper
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','46','11590','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Speech Therapist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','73','11744','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Steward
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','45','11842','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Store Keeper
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','85','11850','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Limb and Brush Maker
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11183','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Instrument Care Taker
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','111001','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Strealizer cum Mechanic
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11862','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Tailor
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11884','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Cash Peon
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10614','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Jamader/Sarder
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','11012','3','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Lab. Attendent
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11095','3','','')");      
							
					   }
					   for($a = 1;$a <= 7; $a++)//Aya
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10575','6','','')");      
							
					   }
					   for($a = 1;$a <= 6; $a++)//Cook/Masalchi
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10689','6','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Dark Room Asst.
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10706','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Dome
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10852','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//ELectrician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10879','6','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Generator Operator
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10928','6','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Liftman
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11182','6','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Mali
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11200','6','','')");      
							
					   }
					   for($a = 1;$a <= 12; $a++)//MLSS
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11321','6','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//O.T. Assistant
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11347','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Plumber
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11415','6','','')");      
							
					   }
					   for($a = 1;$a <= 9; $a++)//Security Guard
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11725','6','','')");      
							
					   }
					   for($a = 1;$a <= 20; $a++)//Sweeper
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11878','6','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Table Boy
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11881','6','','')");      
							
					   }
					   for($a = 1;$a <= 10; $a++)//Ward Boy
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11947','6','','')");      
							
					   }
				  }
				  //
				  //
				  //
				  //
				  elseif($org_id == 666)//Pabna Mental
				  {
						for($a = 1;$a <= 1; $a++)//Director(Mental Hospital, Pabna)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','23','98','10819','1','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Medical Super.
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','44','98','11279','1','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Clinical Psychtrist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','75','10674','1','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Sr. COnsultant(Psychtrist)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','75','11776','1','','')");      
							
					   }for($a = 1;$a <= 1; $a++)//Resident Psychtrist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','75','11679','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//RMO
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','98','11704','1','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Anesthesiologist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','4','10026','3','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Asstt. Registrar
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','98','10477','3','','')");      
							
					   }
					   for($a = 1;$a <= 9; $a++)//Clinical Asstt.
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','98','10669','1','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Clinical Pathologist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','75','10672','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Clinical Psychologist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','9','75','10675','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Dental Surgeon
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','20','10719','3','','')");      
							
					   }
					   for($a = 1;$a <= 5; $a++)//Medical Officer(MO)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','44','11259','1','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Medical Officer(MO)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','36','44','11259','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//SLPP
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','98','11735','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Bio-Chemist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','98','10582','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Nursing Super.
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','11342','2','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Psychiatric Social Worker
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','75','11568','3','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Psychiatric Social Worker
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','75','11568','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Administrative Officer
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','2','10020','3','','')");      
							
					   }
					   for($a = 1;$a <= 5; $a++)//Nursing Supervisor
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','11343','2','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Medical Technologist(Lab)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','64','11299','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiography)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','98','11305','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Occupational Therapist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','73','11355','2','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Pharmacist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','98','11395','2','','')");      
							
					   }
					   for($a = 1;$a <= 117; $a++)//Sr. Staff Nurse
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','11812','3','','')");      
							
					   }
					   for($a = 1;$a <= 10; $a++)//Sr. Staff Nurse
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','11812','2','','')");      
							
					   }
					   for($a = 1;$a <= 45; $a++)//Staff Nurse
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','11821','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Head Asstt.
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','98','10938','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Stenographer
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','98','11834','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Computer Operator
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10684','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//ECG Technician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','98','10865','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Statical Asstt.
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','98','11822','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Store Keeper
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','85','11848','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Accountant
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10007','2','','')");      
							
					   }
					   for($a = 1;$a <= 70; $a++)//Asstt. Nurse
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','10285','2','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Driver
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10859','2','','')");      
							
					   }
					   for($a = 1;$a <= 6; $a++)//Asstt. Occupational Therapist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','73','10288','2','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Asstt. Occupational Therapist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','73','10288','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Asstt. Psychriatic Instructor
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','75','10475','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Cashier
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10623','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//ECG Technician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','98','10867','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Imam
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10980','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Laundry Supervisor
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11110','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Machine Driver
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11192','2','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Office Asstt. cum Typist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11362','2','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Office Asstt. cum Typist
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11362','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Rent COllector
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11661','3','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Steward
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','98','11842','2','','')");      
							
					   }
					   for($a = 1;$a <= 3; $a++)//Telephone Operator
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11905','2','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Ward Master
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11951','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Cinema Operator
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10629','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Calenderer
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10594','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Cane Expert
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10596','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Carpenter
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10610','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Tailor
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11884','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Weaving Technician
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11954','2','','')");      
							
					   }
					   for($a = 1;$a <= 2; $a++)//Sardar
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11717','2','','')");      
							
					   }
					   for($a = 1;$a <= 20; $a++)//Cook/Masalchi
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10689','2','','')");      
							
					   }
					   for($a = 1;$a <= 8; $a++)//Mali
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11200','3','','')");      
							
					   }
					   for($a = 1;$a <= 40; $a++)//MLSS
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11321','2','','')");      
							
					   }
					   for($a = 1;$a <= 25; $a++)//Sweeper
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11878','2','','')");      
							
					   }
					   for($a = 1;$a <= 5; $a++)//Sweeper
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11878','3','','')");      
							
					   }
					   for($a = 1;$a <= 60; $a++)//Ward Boy
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11947','2','','')");      
							
					   }
					   for($a = 1;$a <= 10; $a++)//Ward Boy
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11947','3','','')");      
							
					   }
					   //
					   //
					   //
					   //
					   
				  }
				  else
				  {
					  echo "<h4>No Dataset Created Yet</h4>";
				  }
			  
	  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 3)//Specialized Center 
		  {
			  if($org_id == 173)// Chittagong Skin & Hygiene Treatment Center
			  {
					  for($a = 1;$a <= 1; $a++)//Sr. Consultant
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','33','98','11753','1','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Medical Officer
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','33','44','11753','1','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','33','64','11299','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiograpy)
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','33','98','11305','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Pharmacist
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','33','86','11395','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','33','98','11812','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Head Asstt.
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','4','54','10939','1','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Cashier
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','4','1','10622','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Asstt. Nurse
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','33','52','10285','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Driver
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','4','54','10860','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','4','54','11362','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Aya
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','4','54','10575','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//MLSS
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','4','54','11321','2','','')");	
						  
					  }
					  
					  for($a = 1;$a <= 1; $a++)//Sweeper
					  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							  VALUES('$org_id','4','17','11878','2','','')");	
						  
					  }
					
				}					  
			  //
			  //
			  //
			  //
			  elseif($org_id == 627)//Asthema Center
			  {
				  for($a = 1;$a <= 1; $a++)//Professor
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','40','98','11445','4','','')");      
						
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Associate Professor
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','10041','4','','')");      
						
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Associate Professor(Physical Medicine)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','71','10166','4','','')");      
						
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anesthesiology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','4','10297','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','68','10413','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Registrar(Medicine)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','37','44','11620','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 2; $a++)//Anesthetist
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','4','10028','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','22','10891','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Pathologist
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','64','11387','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Programmer
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11558','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Bio-Chemist
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','10292','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Data Entry Supervisor
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10716','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Medical Technologist(Pathology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','64','11299','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11812','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Accountant
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','1','10005','4','','')");      
						
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Driver
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10859','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11362','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Generator Operator
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10927','4','','')");      
						
				   }
				   
					for($a = 1;$a <= 1; $a++)//Security Guard
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','83','11723','4','','')");      
						
				   }
			  }
			  //
			  //
			  //
			  //
			  else
			  {
				  echo "<h4>No Dataset Created Yet</h4>";
			  }
				  
			  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 1)//Specilized Institute
		  {
			 if($org_id == 636)//NIPSOM
			 {
				 for($a = 1;$a <= 1; $a++)//Director(NIPSON)
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','23','98','10823','1','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Professor-Bio Statistics
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','98','11449','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Community Medicine
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','18','11461','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Entomology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','28','11474','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Epidemiology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','98','11476','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Health Education
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','33','11487','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Microbiology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','45','11496','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Nutrition & Bio Chemistry
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','6','11504','1','','')");      
					  
				 }	
				 
				 for($a = 1;$a <= 1; $a++)//Professor-Environmental & Occupational Health
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','53','11505','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Parasiotology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','40','11524','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Population Dynamics
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','40','11532','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Public Health & Hosp. Admin
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','40','11535','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Professor-Reproductive & Child Health
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','40','11541','1','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Associate Professor-Biostatistics
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','98','10050','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Associate Professor-Community Medicine
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','18','10070','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 2; $a++)//Associate Professor-Epidemiology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','98','10090','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Associate Professor-Health Education
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','33','10105','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Associate Professor-Microbiology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','45','10120','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Associate Professor-Nutrition & Bio Chemistry
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','6','10136','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Associate Professor-Occupational & Environmental Health
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','53','10137','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Associate Professor-Population Dynamics
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','40','10171','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Associate Professor-Public Health & Hosp. Admin
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','2','10175','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 2; $a++)//Associate Professor-Reproductive and Child Health
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','98','10182','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Asstt. Professor-Bio-Statistics
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','98','10300','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 2; $a++)//Assstt. Professor-Community Medicine
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','18','10322','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 2; $a++)//Asstt. Professor-Epidemiology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','48','98','10346','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Asstt. Professsor-Health Education
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','33','10362','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Asstt. Professor-Microbiology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','45','10381','1','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Asstt. Professor-Parasiotology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','98','10427','1','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Asstt. Professor-Public Health & Hosp. Admin
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','2','10449','1','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Asstt. Professor-Reproductive & Child Health
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','98','10455','1','','')");      
					  
				 }
				 for($a = 1;$a <= 5; $a++)//Medical Officer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','48','98','11226','1','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Statistician
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11826','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Administrative Officer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','2','10020','2','','')");      
					  
				 }
				 for($a = 1;$a <= 4; $a++)//Sr. Medical Technologist-Lab
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','9','64','11800','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Store Officer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','9','70','11853','2','','')");      
					  
				 }
				 for($a = 1;$a <= 2; $a++)//Librarian
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','42','11169','2','','')");      
					  
				 }
				 for($a = 1;$a <= 7; $a++)//Medical Technologist-Lab
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','9','64','11299','2','','')");      
					  
				 }
				 for($a = 1;$a <= 2; $a++)//sanitary Inspection
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11714','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Academic Secretary
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','98','10002','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Accounts Officer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','1','10017','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Sr. Artist
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11746','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Head Asstt.
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','10938','2','','')");      
					  
				 }
				 for($a = 1;$a <= 3; $a++)//Stenographer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','23','98','11834','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Accountant
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','1','10006','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Asstt. Librarian
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','42','10280','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Audio Visual Officer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','10563','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Audio Visual Technician
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','10569','2','','')");      
					  
				 }
				 for($a = 1;$a <= 2; $a++)//Care Taker
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','10605','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Draftsman
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','10853','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Projectionist
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11561','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 12; $a++)//Steno Typist
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11833','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Upper Div. Asstt.
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11924','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 4; $a++)//Driver
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','10859','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Carpenter
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','10608','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Cashier
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','1','10623','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Electrician
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','1','10875','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 2; $a++)//Field Asstt.
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','48','98','10913','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Library Asstt.
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','1','42','11174','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 1; $a++)//Mechanic
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11213','2','','')");      
					  
				 }	
				 for($a = 1;$a <= 4; $a++)//Office asstt. cum typist
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','70','11362','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Store Keeper
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11850','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Telephone Operator
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11905','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Cash Sarkar
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','1','10618','2','','')");      
					  
				 }
				 for($a = 1;$a <= 4; $a++)//Lab Attendent
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','9','64','11094','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Duplicating Machine Operator
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','10863','2','','')");      
					  
				 }
				 for($a = 1;$a <= 2; $a++)//Library Attendent
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','9','64','11177','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//PLumber
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','48','98','11414','2','','')");      
					  
				 }
				 for($a = 1;$a <= 2; $a++)//Cook
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','29','10688','2','','')");      
					  
				 }
				 for($a = 1;$a <= 7; $a++)//Darwan
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','10709','2','','')");      
					  
				 }
				 for($a = 1;$a <= 1; $a++)//Mali
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11200','2','','')");      
					  
				 }
				 for($a = 1;$a <= 26; $a++)//MLSS
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','54','11321','2','','')");      
					  
				 }
				 for($a = 1;$a <= 5; $a++)//Sweeper
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','4','17','11878','2','','')");      
					  
				 }
				 for($a = 1;$a <= 3; $a++)//Table Boy
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
										   VALUES('$org_id','48','98','11881','2','','')");      
					  
				 }				  
			 }
			 //
			 //
			 //
			 //
			 elseif($org_id == 142)//CME
			 {
				 for($a = 1;$a <= 1; $a++)//Director-Center for medical education
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','18','98','10797','1','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Professor-Curriculam Development
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','40','21','11465','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Professor-Teaching Methodology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','40','33','11546','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Associate Professor-curicullam Development
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','40','33','10074','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Associate Professor-Teaching Methogology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','40','33','10188','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Asstt. Professor-Curriculam Development
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','39','98','10329','1','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Asstt. Professor-Media Development
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','40','33','10374','3','','')");      
					
				 }
				 for($a = 1;$a <= 2; $a++)//Asstt. Professor-Medical Education
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','40','33','10375','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Asstt. Professor-Teaching Methodology
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','40','33','10461','3','','')");      
					
				 }
				 for($a = 1;$a <= 2; $a++)//Lecturar
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','40','33','11114','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Research Associate
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','1','33','11665','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Audio Visual Officer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10562','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Graphics Artist
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10930','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Statistician
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11826','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Administrative Officer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','2','10020','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Computer Operator
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','46','10683','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Head Asstt.
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10938','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Stenographer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','18','98','11834','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Stenographer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','18','98','11834','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Accountant
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','1','10006','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Asstt. Librarian
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','98','10280','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Photographer
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11403','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Store Keeper
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','85','11848','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Upper Div. Assistant
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11924','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Cashier
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','1','10623','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Dark Room Asstt.
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10703','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Driver
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','18','54','10860','2','','')");      
					
				 }
				 for($a = 1;$a <= 2; $a++)//Driver
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10860','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Low Division Asstt.
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11191','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Office Asstt. cum Computer Operator
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11358','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Office Asstt. cum Typist
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11359','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Equipment Operator
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10905','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Duplicating Machine Operator
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10862','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Cleaner
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10665','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Darwan
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10709','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Darwan
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10709','3','','')");      
					
				 }
				 for($a = 1;$a <= 2; $a++)//MLSS
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11321','2','','')");      
					
				 }
				 for($a = 1;$a <= 2; $a++)//MLSS
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11321','3','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Night Guard
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11337','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Night Guard
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11337','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Sweeper
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11878','2','','')");      
					
				 }
				 for($a = 1;$a <= 1; $a++)//Sweeper
				 {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11878','3','','')");      
					
				 }
			 }
			 //
			 //
			elseif($org_id == 389)//IPHN
			{
			
			for($a = 1;$a <= 1; $a++)//Director(IPHN) 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','7','98','10813','1','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Deputy Director 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','13','98','10734','3','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Applied Nutritionist 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10035','1','','')");      
 }

 for($a = 1;$a <=1; $a++)//Clinical Nutritionist
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','9','98','10671','1','','')");      
 }

 for($a = 1;$a <= 1; $a++)// Asstt. Director
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','7','12','10221','3','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Jr. Clinician 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11702','3','','')");      
 }

 for($a = 1;$a <= 2; $a++)//Divisional Chief (Lab & Field) 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','7','41','10847','1','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Statistician 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','52','11826','3','','')");      
 }

 for($a = 1;$a <=2; $a++)//Asstt. Bio-Chemist 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','9','6','10206','2','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Home Economist 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10968','2','','')");      
 }
 
 
 for($a = 1;$a <= 5; $a++)//Nutritionist
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11800','2','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Asstt. Nutrition Education 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10286','2','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Dietician 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','29','10785','3','','')");      
 }

 for($a = 1;$a <= 6; $a++)//Medical Technologist 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11304','2','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Statistician 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11828','3','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Head Asstt. 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10938','2','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Stenographer 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','23','98','11834','3','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Accountant 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','1','10006','2','','')");      
 }

 for($a = 1;$a <= 1; $a++)//Accountant Cum Cashier 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','1','10009','3','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Artist 
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10036','3','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Asstt. Librarian
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10280','2','','')");      
 }
 
 for($a = 1;$a <= 1; $a++)//Draftsman
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10853','2','','')");      
 }
 
 for($a = 1;$a <= 4; $a++)//Field Supervisor
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10915','2','','')");      
 }
 
 for($a = 1;$a <= 2; $a++)//Lady Health Visitor
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11106','2','','')");      
 }
 for($a = 1;$a <=18; $a++)//Lady Health Visitor
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10036','3','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Photographer
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11403','3','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Statistical Asstt.
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11822','2','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Steno Typist
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11832','3','','')");      
 }
 
 for($a = 1;$a <= 4; $a++)//Steno Typist
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11832','2','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Store Keeper
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11846','2','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11924','3','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Driver
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10858','2','','')");      
 }
 
  for($a = 1;$a <= 1; $a++)//Driver
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10858','3','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Cashier
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','1','10623','3','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Field Asstt.
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10913','3','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Home Visitor
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10970','2','','')");      
 }
  for($a = 1;$a <= 4; $a++)//Office Asstt. Cum Typist
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11362','2','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Record Keeper
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','46','10970','2','','')");      
 }
 for($a = 1;$a <= 1; $a++)//Duplicating Machine Operator
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10862','2','','')");      
 }
 for($a = 1;$a <= 4; $a++)//Lab. Attendent
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','41','10970','2','','')");      
 }
 
 for($a = 1;$a <= 1; $a++)//Bearer/Mashalchi
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','29','10581','2','','')");      
 }
 for($a = 1;$a <= 2; $a++)//Cook
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','29','10687','3','','')");      
 }
 for($a = 1;$a <= 2; $a++)//Animal Attendent
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10029','2','','')");      
 }
 
 for($a = 1;$a <= 1; $a++)//Guard
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10931','2','','')");      
 }
 
 for($a = 1;$a <= 8; $a++)//MLSS
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','11321','2','','')");      
 }
 
 for($a = 1;$a <= 2; $a++)//Sweeper
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','17','11878','2','','')");      
 }
 for($a = 1;$a <= 1; $a++)//
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10970','2','','')");      
 }
 
 for($a = 1;$a <= 1; $a++)//
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10970','2','','')");      
 }
 
 for($a = 1;$a <= 1; $a++)//
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10970','2','','')");      
 }
 
 for($a = 1;$a <= 1; $a++)//
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10970','2','','')");      
 }
 
 for($a = 1;$a <= 1; $a++)//
 {
     $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
     VALUES('$org_id','4','54','10970','2','','')");      
 }
			
}

			 //
			 //
			 elseif($org_id == 388)//IPH
			 {
					for($a = 1;$a <= 1; $a++)//Director(IPH)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','23','98','10812','1','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Deputy Director 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','13','98','10734','1','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)// Deputy Director(ORS)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','13','98','10759','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Head(MBL)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','45','10949','1','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)// Head(PH&DTL)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','45','10950','1','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)// Asstt. Director
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','98','10221','1','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)// Director(Blood Bag)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','','10796','4','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Superintendent
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','44','98','11866','2','','')");      
				 }
				 
				 for($a = 1;$a <= 3; $a++)//Superintendent
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','44','98','11866','1','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Virologist 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','1','94','10728','1','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Chief Quality Control Officer 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10654','3','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Electrical Engineer 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11217','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)// Asstt. Chief(Microbiology)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','7','45','10214','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Asstt. Chief(Pharmacology) 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','7','69','10216','3','','')");     
				 }

				 for($a = 1;$a <= 4; $a++)//Bio-Chemist
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','6','10582','3','','')");    
				 }

				 for($a = 1;$a <= 1; $a++)//Field Officer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10914','3','','')");   
				 }

				 for($a = 1;$a <= 5; $a++)//Manager 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11202','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Pharmacologist
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','69','11399','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Production Manager 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','7','11702','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Administrative Officer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10020','2','','')");      
				 }

				 for($a = 1;$a <= 2; $a++)//Asstt. Pharmacologist 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','69','10289','2','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Security Officer 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','17','11726','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)// Store Officer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11853','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)// Medical Technologist(Lab)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','41','11299','3','','')");      
				 }

				 for($a = 1;$a <= 6; $a++)// Medical Technologist(S.I.)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','41','11308','2','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)// Accounts Officer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','1','10014','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Asstt. Chemist 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','6','10210','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Sales & Procurement Officer 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11711','2','','')");      
				 }

				 for($a = 1;$a <=2; $a++)//Sr. Technical Assistant
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11819','3','','')");    
				 }

				 for($a = 1;$a <= 5; $a++)//Supervisor 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11873','3','','')");        
				 }

				 for($a = 1;$a <= 1; $a++)//Workshop Supervisor 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11957','2','','')");     
				 }
				 
				 for($a = 1;$a <= 3; $a++)//Head Asstt.
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10938','2','','')");     
				 }
				 
				 for($a = 1;$a <= 3; $a++)//Jr. Technical Asstt.
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11957','3','','')");     
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Stenographer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','23','98','11834','2','','')");     
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Accountant
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','1','10005','2','','')");     
				 }
				 
				 for($a = 1;$a <= 3; $a++)//Data Entry Operator
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','46','10714','2','','')");     
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Head Asstt. Cum Cashier
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11942','2','','')");     
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Jr. Mechanic
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11074','2','','')");     
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Sr. Mechanic
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11796','2','','')");     
				 }
				 
				 for($a = 1;$a <= 5; $a++)//Sr. Technical Assistant
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11819','2','','')");     
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Steno Typist
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11957','2','','')");     
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Steward
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11839','2','','')");     
				 }
				  for($a = 1;$a <=6; $a++)//Store Keeper
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11849','2','','')");     
				 }
				 
				  for($a = 1;$a <=6; $a++)//Store Keeper
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11849','3','','')");     
				 }
				 
				  for($a = 1;$a <= 12; $a++)//Upper Division Asstt.
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11957','2','','')");     
				 }
				  for($a = 1;$a <=7; $a++)//Driver
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10859','3','','')");     
				 }
				 
				  for($a = 1;$a <=5; $a++)//Driver
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10859','2','','')");     
				 }
				  for($a = 1;$a <= 1; $a++)//Accountant
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','1','10008','2','','')");     
				 }
				 
				 for($a = 1;$a <= 1; $a++)// Accountant Cum Cashier
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','1','10010','3','','')");      
				 }

				 for($a = 1;$a <= 2; $a++)//Cashier 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','1','10623','2','','')");      
				 }

				 for($a = 1;$a <= 5; $a++)// Electrician
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10874','3','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)// Librarian
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','1','42','11167','2','','')");      
				 }

				 for($a = 1;$a <= 2; $a++)//Mechanic Vehicle
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11216','3','','')");      
				 }

				 for($a = 1;$a <= 2; $a++)//Office Asstt. Cum Typist 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11362','3','','')");      
				 }

				 for($a = 1;$a <= 9; $a++)//Office Asstt. Cum Typist
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11362','3','','')");     
				 }

				 for($a = 1;$a <= 1; $a++)//Record Keeper 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','46','11589','2','','')");      
				 }

				 for($a = 1;$a <= 2; $a++)//Telephone Operator 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11905','2','','')");      
				 }

				 for($a = 1;$a <= 1; $a++)//Typist Cum Clerk 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11702','3','','')");      
				 }
				 
				 for($a = 1;$a <= 50; $a++)//Skilled Worker 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11734','3','','')");      
				 }
				 
				 for($a = 1;$a <= 5; $a++)// Machine Operator
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11194','3','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Head Carpenter 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10944','3','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Plumber
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11413','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)// Animal Care Taker
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10030','3','','')");      
				 }
				 
				 for($a = 1;$a <= 15; $a++)//Bootle Washer 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10590','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Cash Peon 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10614','3','','')");      
				 }
				 
				 for($a = 1;$a <=7; $a++)//Darwan 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10709','2','','')");      
				 }
				 
				 for($a = 1;$a <= 8; $a++)//Darwan 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10709','3','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Dome 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10852','2','','')");      
				 }
				 
				 for($a = 1;$a <= 5; $a++)//Equipment Cleaner 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10900','3','','')");      
				 }
				 
				 for($a = 1;$a <= 13; $a++)//Guard Cum Helper 
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10932','3','','')");      
				 }
				 
				 for($a = 1;$a <= 2; $a++)// Hazzam
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11921','2','','')");      
				 }
				 
				 for($a = 1;$a <= 9; $a++)// House Care Taker
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10973','3','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)// Lab. Attendent
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','41','11094','3','','')");      
				 }
				 
				 for($a = 1;$a <=62; $a++)// Lab. Bearer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','7','41','11098','2','','')");      
				 }
				 
				 for($a = 1;$a <=62; $a++)// Mali
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11098','2','','')");      
				 }
				 
				 for($a = 1;$a <=62; $a++)// Messenger
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11200','2','','')");      
				 }
				 
				 for($a = 1;$a <=23; $a++)// MLSS
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11321','2','','')");   
				 }
				 
				 for($a = 1;$a <=20; $a++)// Night Guard
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','83','11337','2','','')");  
				 }
				 
				 for($a = 1;$a <=6; $a++)// Sweeper
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11878','3','','')");
				 }
				 
				  for($a = 1;$a <=37; $a++)// Sweeper
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11878','2','','')");
				 }
				 
				 for($a = 1;$a <=1; $a++)// Store Attendent
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','85','11844','3','','')");    
				 }
				 
				 for($a = 1;$a <=2; $a++)// Sample Taker
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11713','2','','')"); 
				 }
				 
				 for($a = 1;$a <=96; $a++)// Production Worker
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11443','3','','')");
				 }
				 
				 for($a = 1;$a <=17; $a++)// Packer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11385','2','','')");
				 }
				 
				  for($a = 1;$a <=4; $a++)// Sealer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11721','2','','')");
				 }

				   for($a = 1;$a <=15; $a++)// Mixing Worker
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11320','3','','')");
				 }
			 }
			 else
			{
				echo "<h4>No Dataset Created Yet</h4>";
			}
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 4) //College & Hospital
		  {
			  
				  if($org_id == 351)// Govt. Unani & Ayurvedic College
				  {
					for($a = 1;$a <= 1; $a++)//Principal(Unani & Ayurvedic College)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','39','98','11441','2','','')");      
					  
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Asstt. Professor
				   {
					   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					   VALUES('$org_id','33','98','10292','2','','')");      
					  
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Clinical Pathologist
				   {
					   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','33','64','10672','2','','')");      
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
				   {
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','22','10891','3','','')");      
				   }
				   
					for($a = 1;$a <= 2; $a++)//Lecturer
				   {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','1','37','11114','3','','')");      
				   }
				   
					for($a = 1;$a <= 2; $a++)//Medical Officer(Ayurvedic)
				   {
					   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','33','37','11231','3','','')");      
				   }
				   
					for($a = 1;$a <= 1; $a++)//Secretary
				   {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11722','3','','')");      
				   }
				   
					for($a = 1;$a <= 1; $a++)//Sister
				   {
					   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					   VALUES('$org_id','33','52','11730','2','','')");      
				   }
				   
					for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
				   {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','64','11299','2','','')");      
				   }
				   
					for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiograpy)
				   {
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11305','2','','')");      
					
				   }
				   
					for($a = 1;$a <= 1; $a++)//Pathology Technician
				   {
						 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','64','11388','2','','')");      
					}
				   
				   for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
				   {
						 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11812','2','','')");      
				   }
				   
					for($a = 1;$a <= 1; $a++)//Staff Nurse
				   {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','52','11821','3','','')");      
					   
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Accountant
				   {
						 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','10005','2','','')");      
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Driver
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','4','54','10859','2','','')");      
				   }
				   
					for($a = 1;$a <= 2; $a++)//Office Asstt. Cum Typist
				   {
					   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					   VALUES('$org_id','4','54','11362','2','','')");      
				   }
				   
				   
				   for($a = 1;$a <= 1; $a++)//Cashier
				   {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','1','10621','2','','')");      
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Librarian
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','33','42','11172','2','','')");     
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Steward
				   {
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','29','11840','2','','')");      
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11924','2','','')");      
				   }
				   
				   for($a = 1;$a <= 1; $a++)//X Ray Technician
				   {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','78','11959','2','','')");      
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Asstt. Librarian
				   {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','78','10281','2','','')");      
					   
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Audio Visual Operator
				   {
					  
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10567','2','','')");      
					   
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Compounder
				   {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','33','86','10679','2','','')");      
					   
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Store Keeper
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','33','85','11850','2','','')");      
					}
				   
				   for($a = 1;$a <= 1; $a++)//Lab. Attendent
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','33','64','11094','2','','')");      
					   
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Daftary
				   {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10700','2','','')");      
					  
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Mashalchi
				   {
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','29','11210','2','','')");      
					   
				   }
				   
				   for($a = 1;$a <= 1; $a++)//MLSS
				   {
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','2','','')");      
				   }
				   
				   for($a = 1;$a <= 1; $a++)//Sweeper
				   {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','17','11878','2','','')");      
				   }
		  }
				  //
				  //
				  //
				  //
				  elseif($org_id == 350)// Govt. Homeopathy
					  {
					  for($a = 1;$a <= 1; $a++)//Principal Cum Superintendent
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','39','98','11421','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Professor(Materia Medica)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','98','11492','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Associate Professor(Materia Medica)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','39','98','10114','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Deputy Superintendent
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','12','98','10773','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anatomy)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','3','10295','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Phy. Homeo Treatment Science)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','48','98','10435','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Community Medicine)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','18','10323','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Forensic Medicine)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','98','10347','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Gyn & Obs)
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','98','10359','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Pathology)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','64','10431','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Medical Officer(Homeopathic)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','37','11252','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Librarian
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','42','11172','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Physiology)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','72','10440','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Surgery)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','87','10458','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Clinical Pathologist
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','64','10672','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','22','10891','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Lecturer(Anatomy)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','3','11118','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Lecturer(Community Medicine)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','18','11123','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Lecturer(Community Medicine)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','18','11123','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Lecturer(Forensic Medicine)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','30','11133','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Lecturer(Gyn & Obs)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','32','11137','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Lecturer(Gyn & Obs)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','32','11137','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Lecturer(Pathology)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','64','11151','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Lecturer(Pathology)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','64','11151','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Lecturer(Physiology)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','72','11154','2','','')");      
							
					   }
					   for($a = 1;$a <= 1; $a++)//Lecturer(Physiology)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','72','11154','3','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Lecturer(Surgery)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','87','11163','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','64','11299','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','52','11812','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Head Asstt.
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10938','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Accountant
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','1','10005','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 1; $a++)//Store Keeper
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','85','11848','2','','')");      
							
					   }
					   
					   for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','1','54','11924','2','','')");      
							}
					   
					   
					   for($a = 1;$a <= 1; $a++)//Cashier
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','33','85','10622','2','','')");      
							}
					   
					   
					   for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11362','2','','')");      
							}
					   
					   
					   for($a = 1;$a <= 1; $a++)//Daftary
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10700','2','','')");      
							}
					   
					   
					   for($a = 1;$a <= 1; $a++)//Darwan
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','10709','2','','')");      
							}
					   
					   
					   for($a = 1;$a <= 1; $a++)//MLSS
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11321','2','','')");      
							}
					   
					   
					   for($a = 1;$a <= 2; $a++)//Sweeper
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','17','11878','2','','')");      
							
					   }
					   
						for($a = 1;$a <= 2; $a++)//Ward Boy
			  
					   {
							$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
								 VALUES('$org_id','4','54','11947','2','','')");      
							
					   }
				  }
				  //
				  //
				  //
				  //
				  elseif($org_id == 213)//Dental College Hospital
				  {
					for($a = 1;$a <= 1; $a++)//Director(Dental College Hospital)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','14','98','10802','3','','')");      
						
				   }
					for($a = 1;$a <= 1; $a++)//Deputy Director
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','11','98','10735','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Sr. Consultant(Dental)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','11759','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Asstt. Director
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','5','98','10222','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Jr. Consultant(Anestheology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','4','11022','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant (Canservative)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','11026','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Casualty)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','16','11030','3','','')");      
						
				   }for($a = 1;$a <= 1; $a++)//Jr. Consultant(Children)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','11031','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Jr. Consultant(Oral Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','60','10802','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Orthopeadics)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','11052','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Pariodontology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','11057','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Pronthodontics)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','11061','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Radiology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','78','11062','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Pathology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','64','11058','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Oral Pathology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','64','11049','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(microbiology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','45','11043','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Blood)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','8','11025','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Resident Physician
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','44','11670','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Resident Surgeon(General Surgeon)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','87','11691','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Resident Surgeon(Oral SUrgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','60','11696','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Anesthesiologist
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','4','10026','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Anesthesiologist
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','4','10026','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Asstt. Registrar
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','20','10477','2','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Asstt. Registrar(Casulty)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','16','10487','3','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Asstt. Registrar(General Surgeon)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','87','10509','3','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Asstt. Registrar(Medicine)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','10510','3','','')");      
						
				   }
				   for($a = 1;$a <= 5; $a++)//Asstt. Registrar(Oral Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','60','10518','3','','')");      
						
				   }
				   for($a = 1;$a <= 16; $a++)//Dental Surgeon
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','20','10719','2','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Dental Surgeon(Oral & Maxi Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','60','10724','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dental Surgeon(Conservative)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','10722','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dental Surgeon(Orthodontics)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','10727','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dental Surgeon(Children)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','11691','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Resident Surgeon(General Surgeon)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','10721','3','','')");      
						
				   }
				   for($a = 1;$a <= 6; $a++)//Dental Surgeon(Oral Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','60','10726','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dental Surgeon(Casulty)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','16','10720','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dental Surgeon(Oral Pathology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','64','10725','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dental Surgeon
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','20','10726','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dental Surgeon(Oral Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','60','10719','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dental Surgeon(Casulty)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','16','10720','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Officer(Anesthiology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','4','10726','3','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Medical Officer(Medicine)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','44','11258','3','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Medical Officer(General Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','86','11248','3','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Medical Officer(Oral Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','60','11262','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Officer(Anesthesiology)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','4','11229','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Officer(Blood Bank)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','7','11233','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Officer(Medicine)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','44','11258','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Officer(General Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','87','11248','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Medical Officer(Oral Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','60','11262','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Radiologist
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','78','11580','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Registrat(General Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','87','11612','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Registrat(Medicine)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','11620','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Registrat(Oral Surgery)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','60','11634','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Asstt. Programmer
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','46','10474','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Nursing Super.
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','37','52','11342','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Nursing Supervisor
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','37','52','11343','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Secretary
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11722','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Health Educator
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','37','33','10955','3','','')");      
						
				   }
				   for($a = 1;$a <= 12; $a++)//Medical Technologist(Dental)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11295','2','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Medical Technologist(Dental)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11295','3','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Medical Technologist(Lab)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11299','3','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Pharmacist
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','70','11395','2','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Radiographer
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11579','2','','')");      
						
				   }
				   for($a = 1;$a <= 7; $a++)//Sr. Staff Nurse
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11812','2','','')");      
						
				   }
				   for($a = 1;$a <= 26; $a++)//Sr. Staff Nurse
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11812','3','','')");      
						
				   }
				   for($a = 1;$a <= 10; $a++)//Sr. Staff Nurse
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','87','11812','3','','')");      
						
				   }
				   for($a = 1;$a <= 12; $a++)//Staff Nurse
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11821','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Accoutant
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','1','10005','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Cashier
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','1','10620','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Steward
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11839','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11923','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Statical Asstt.
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11822','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Electrician(Electro Medical)
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10880','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Electro Medical Technician
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10887','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Asstt. Acccountant
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','1','10200','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Audio Visual Operator
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10567','3','','')");      
						
				   }
				   for($a = 1;$a <= 4; $a++)//Data Entry Operator
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','46','10716','3','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Driver
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10860','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Instrument Care Taker
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10999','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Linen Keeper
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11188','3','','')");      
						
				   }
				   for($a = 1;$a <= 8; $a++)//Office Asstt. cum Typist
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11362','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Record Keeper
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','46','11590','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//rent collector
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11661','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Store Keeper
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11850','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Telephone Operator
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11905','3','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Ticket Clerk
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11910','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Ward Master
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11951','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Ward Master
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11910','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Cash Sarkar
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','1','10619','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Aya
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10575','2','','')");      
						
				   }
				   for($a = 1;$a <= 4; $a++)//Aya
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10575','6','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Baburchi
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10576','2','','')");      
						
				   }
				   for($a = 1;$a <= 8; $a++)//Bearer
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10580','2','','')");      
						
				   }
				   for($a = 1;$a <= 4; $a++)//Cook/Masalchi
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10689','2','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dark Room Asstt.
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10706','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Dome
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10852','3','','')");      
						
				   }
				   for($a = 1;$a <= 3; $a++)//Lab. Attened
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11096','3','','')");      
						
				   }
				   for($a = 1;$a <= 6; $a++)//Liftman
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11182','6','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//Masalchi
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11210','2','','')");      
						
				   }
				   for($a = 1;$a <= 31; $a++)//MLSS
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','2','','')");      
						
				   }
				   for($a = 1;$a <= 2; $a++)//MLSS
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','6','','')");      
						
				   }
				   for($a = 1;$a <= 4; $a++)//O.T. Boy
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11350','3','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Pump Operator
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11575','6','','')");      
						
				   }
				   for($a = 1;$a <= 6; $a++)//Security Guard
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11725','6','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Streacher Bearer
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11831','6','','')");      
						
				   }
				   for($a = 1;$a <= 1; $a++)//Strealizer cum Mechanic
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11838','3','','')");      
						
				   }
				   for($a = 1;$a <= 10; $a++)//Sweeper
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11878','2','','')");      
						
				   }
				   for($a = 1;$a <= 8; $a++)//Ward boy
				   {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11947','6','','')");      
						
				   }
					   
				  }
				  //
				  //
				  //
				  //
				  elseif($org_id == 214)//Dental College
				  {
								for($a = 1;$a <= 1; $a++)//Principal
				  {
					   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','39','98','11425','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Professor(Children Preventive & Community Dentrist)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','48','98','11457','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Professor(Dental Pronthodantics)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11468','2','','')");	
					  
				  }
				  	  
				  for($a = 1;$a <= 1; $a++)//Professor(Oral Surgery)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11510','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Professor(Orthodonsia)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11512','2','','')");	
					  
				  }
				
				/* for($a = 1;$a <= 1; $a++)//Professor(Conjervative Dentrist)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','','2','','')");	
					  
				  }
				  */
				  
				  
				  for($a = 1;$a <= 1; $a++)//Professor(Medicine)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','44','10379','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Professor(General Surgery)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','87','11482','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 2; $a++)//Professor(Dental Anatomy)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11467','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Professor(Science of Dental Metarial & Engineering)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11543','3','','')");	
					  
				  }
				  
				  /*
				    for($a = 1;$a <= 1; $a++)//Professor((Dental Anatomy & Oral Physiology))
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11467','3','','')");	
					  
				  }
				  */
				  
				  
				    for($a = 1;$a <= 1; $a++)//Professor(General & Dental Pharmacology)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11479','3','','')");	
					  
				  }
				  
				  
				    for($a = 1;$a <= 1; $a++)//Professor(General Pathology & Microbiology)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','64','11481','2','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//Professor(Pariodontology & Oral Pathology)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11525','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Vice Principal(Dhaka Dental College)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','47','98','11932','2','','')");	
					  
				  }
				  
				   for($a = 1;$a <= 1; $a++) //Associate Professor(General Surgery)
				   {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','87','11482','2','','')");	
					  
				   }
				  
				  for($a = 1;$a <= 1; $a++)//Associate Professor(Physiology & Biochemist)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','72','10167','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Associate Professor(Anesthesiology)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','4','10045','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Associate Professor(General & Dental Pharmacology)
	  
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10097','2','','')");	
					  
				  }
				  
				  
				    for($a = 1;$a <= 1; $a++)//Associate Professor(Anatomy & Histology)
	  
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','3','10043','2','','')");	
					  
				  }
			
				  for($a = 1;$a <= 1; $a++)//Associate Professor(Fixed Pronthodontics)
	  
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10091','3','','')");	
					  
				  }
		
				  
				  for($a = 1;$a <= 1; $a++)//Associate Professor(Dental Radiology)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10080','3','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Associate Professor(Removal Orthodonsia)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10181','3','','')");	
					  
				  }
				

			
/*				
				  
				 for($a = 1;$a <= 1; $a++)//Associate Professor(Orthodonsia)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10181','3','','')");	
					  
				  }
				
			*/	 
				  
				  
				  	for($a = 1;$a <= 1; $a++)//Associate Professor(Oral Surgery)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','60','10142','3','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//Associate Professor(Oral Surgery)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','60','10142','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Associate Professor(Endodontics)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10087','3','','')");	
					  
				  }
				  
				  
				 for($a = 1;$a <= 1; $a++)//Associate Professor(Dental Pronthodantics)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10079','2','','')");	
					  
				  }
				 /* 
				  
				  for($a = 1;$a <= 1; $a++)//Associate Professor(Conjervative Dentrist & Dental Radiology
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','60','10142','2','','')");	
					  
				  }
				  */ 
				  
				 for($a = 1;$a <= 1; $a++)//Associate Professor(Dental Pronthodantics)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10079','2','','')");	
					  
				  }
				  
				  
				  
				  
				  
		     for($a = 1;$a <= 1; $a++)//Associate Professor(Pariodontology & Oral Pathology)
				  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10162','2','','')");	
					  
				  }
			
			/*
			  for($a = 1;$a <= 5; $a++)//Associate Professor(Dental Anatomy & Oral Physiology)
			  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10162','3','','')");	
					  
				  }
			*/
			
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Children Preventive & Community Dentisty)
			  {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10063','3','','')");	
					  
				  }
			
				  for($a = 1;$a <= 1; $a++)//Associate Professor(Chemistry of Dental Metarials)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10061','2','','')");	
					  
				  }
				  
				  
				  for($a = 1;$a <= 1; $a++)//Associate Professor(General Pathology & Microbiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','64','10099','2','','')");	
					  
				  }
		  	  for($a = 1;$a <= 1; $a++)//Associate Professor(Microbiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','45','10120','2','','')");	
					  
				  }
				  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(General Medicine)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','44','10119','2','','')");	
					  
				  }	  
			 for($a = 1;$a <= 1; $a++)//Associate Professor(Dental Pharmacology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10078','3','','')");	
					  
				  }	  	  
				  
			 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Dental Radiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10336','2','','')");	
					  
				  }	  
				  
	      for($a = 1;$a <= 1; $a++)//Asstt. Professor(Physiology & Biochemist)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','72','10439','2','','')");	
					  
				  }	  	
		   for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anatomy & Histology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10294','2','','')");	
					  
				  }	  

		   for($a = 1;$a <= 1; $a++)//Asstt. Professor(General Pathology & Microbiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','64','10354','2','','')");	
					  
				  }	  
				  
		 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Orthodonsia)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10406','3','','')");	
					  
				  }	  	

				  
		for($a = 1;$a <= 1; $a++)//Asstt. Professor(Pronthodontics)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10445','2','','')");	
					  
				  }	
				  
		for($a = 1;$a <= 1; $a++)//Asstt. Professor(Dental Radiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10336','3','','')");	
					  
				 }	 
	
	   for($a = 1;$a <= 2; $a++)//Asstt. Professor(Dental Pharmacology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10335','3','','')");	
					  
				 }	
				 
       for($a = 1;$a <= 1; $a++)//Asstt. Professor(Dental Anatomy & Oral Physiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10333','2','','')");	
					  
				 }	

		    for($a = 1;$a <= 1; $a++)//Asstt. Professor(Orthodonsia)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10406','2','','')");	
					  
				 }	
				 
        for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anesthesiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','4','10297','2','','')");	
					  
				 }	

       for($a = 1;$a <= 1; $a++)//Asstt. Professor(Oral Surgery)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','60','10403','2','','')");	
					  
				 }	
      for($a = 1;$a <= 5; $a++)//Asstt. Professor(Oral Surgery)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','60','10403','3','','')");	
					  
				 }	

	  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Conjervative Dentrist & Dental Radiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10324','2','','')");	
					  
				 }	
				 
	  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Pariodontology & Oral Pathology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10429','2','','')");	
					  
				 }	
				 
 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Pariodontology & Oral Microbiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10428','2','','')");	
					  
				 }			 
	 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Dental Anatomy & Oral Physiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10333','3','','')");	
					  
				 }	
 for($a = 1;$a <= 1; $a++)//Asstt. Professor(General Pharmacology & Dental Materia Madica)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10355','2','','')");	
					  
				 }	
	 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Biochemistry)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','6','10299','3','','')");	
					  
				 }				 
				 
	 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anatomy)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','3','10296','3','','')");	
					  
				 }	
		


				 
 for($a = 1;$a <= 1; $a++)//Asstt. Professor(General Surgery)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','87','10458','3','','')");	
					  
				 }	


 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Medicine)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','44','10379','3','','')");	
					  
				 }	
				 
 for($a = 1;$a <= 1; $a++)//Asstt. Professor(Chemistry of Dental Metarials)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10061','2','','')");	
					  
				 }	
				 
 for($a = 1;$a <= 1; $a++)//Asstt. Professor(General Pathology & Microbiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','64','10099','3','','')");	
					  
				 }	
				 
for($a = 1;$a <= 1; $a++)//(Asstt. Professor(Children Preventive & Community Dentrist)

			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10313','3','','')");	
					  
				 }		
/*				 
for($a = 1;$a <= 2; $a++)//Asstt. Professor(Dental Pronthodantics)

			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','','3','','')");	
					  
				 }	

*/

for($a = 1;$a <= 2; $a++)//Asstt. Professor(Dentistry)

			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10337','3','','')");	
					  
				 }	
	for($a = 1;$a <= 15; $a++)//lecturer

			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11113','2','','')");	
					  
				 }		


for($a = 1;$a <= 3; $a++)//Lecturer(Anatomy & Histology)

			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','3','11117','2','','')");	
					  
				 }	
for($a = 1;$a <= 2; $a++)//Lecturer(11154

			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','72','11154','2','','')");	
					  
				 }		
				 
for($a = 1;$a <= 2; $a++)//Lecturer(

			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','64','11134','2','','')");	
					  
				 }		
	for($a = 1;$a <= 1; $a++)//Lecturer(Chemistry of Dental Metarials)


			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11120','2','','')");	
					  
				 }		
				 			 

		for($a = 1;$a <=2; $a++)//Lecturer(General Surgery)


			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','87','11136','2','','')");	
					  
				 }		
				 					 
		
		for($a = 1;$a <=2; $a++)//Lecturer(medicine)


			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','44','11144','2','','')");	
					  
				 }			 


	for($a = 1;$a <=2; $a++)//Lecturer(General Pharmacology & Dental Materia Madica)


			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11135','2','','')");	
					  
				 }		
				 
			 
	for($a = 1;$a <=1; $a++)//LLecturer(Removal Orthodonsia)


			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11160','2','','')");	
					  
				 }		
				 
	for($a = 1;$a <=2; $a++)//	 Lecturer(Fixed Orthodontics)


			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11131','2','','')");	
					  
				 }				 
				 
for($a = 1;$a <=1; $a++)//	 Lecturer(oral surgery

			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','60','11148','2','','')");	
					  
				 }		

	for($a = 1;$a <=1; $a++)//	 Lecturer(maxifocial

			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','60','11143','2','','')");	
					  
				 }

				 
 for($a = 1;$a <=1; $a++)//	 Lecturer(Conjervative Dentrist & Radiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11124','2','','')");	
					  
				 }	
 for($a = 1;$a <=1; $a++)//	Lecturer(Removal Pronthodantics)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11161','2','','')");	
					  
				 }	
 for($a = 1;$a <=2; $a++)//	Lecturer(Fixed Prosthodontics)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11132','2','','')");	
					  
				 }	

		 for($a = 1;$a <=1; $a++)//	Lecturer(children)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11121','2','','')");	
					  
				 }	
				 
		 for($a = 1;$a <=1; $a++)//	/Lecturer(Preventive & Community Dentrist)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11157','2','','')");	
					  
				 }	
				 
				 
				
				 

		for($a = 1;$a <=2; $a++)//	/Lecturer(Dental Radiology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11130','2','','')");	
					  
				 }
				 
	for($a = 1;$a <=1; $a++)///Lecturer(Pariodontology & Oral Pathology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11150','2','','')");	
					  
				 }	

	for($a = 1;$a <=1; $a++)///Lecturer(dental pharmalogy)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11129','2','','')");	
					  
				 }						 
					 
	for($a = 1;$a <=1; $a++)///Lecturer(oral microbology)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','45','11147','2','','')");	
					  
				 }	

					 
	for($a = 1;$a <=1; $a++)///LecturerLecturer(Dental Anatomy)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11128','2','','')");	
					  
				 }	
   
   for($a = 1;$a <=3; $a++)///Lecturer(biochemestry
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','6','11119','2','','')");	
					  
				 }				 
		for($a = 1;$a <=1; $a++)///Lecturer(conservatiove dentrist)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','11125','2','','')");	
					  
				 }				 
	
	  for($a = 1;$a <=1; $a++)///Lecturer(medicine)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','44','11144','2','','')");	
					  
				 }	
				 
	  for($a = 1;$a <=1; $a++)//Lecturer(Surgery)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','87','11163','2','','')");	
					  
				 }	
				 
	 for($a = 1;$a <=1; $a++)//Secretary
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','11722','2','','')");	
					  
				 }			 
				 
			 for($a = 1;$a <=1; $a++)// Chief Technician (Dental)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','20','10659','2','','')");	
					  
				 }

			for($a = 1;$a <=3; $a++)// medical technologist(radiography)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','79','11305','2','','')");	
					  
				 }	
				 
			for($a = 1;$a <=3; $a++)// Medical Technologist(Lab)
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','64','11285','2','','')");	
					  
				 }					 
					 
			for($a = 1;$a <=3; $a++)// pharmachist
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','70','11395','2','','')");	
					  
				 }		
				 
		   for($a = 1;$a <=1; $a++)// Head Asstt.
			    {
					  
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','10951','2','','')");	
					  
				 }		
				 
	   for($a = 1;$a <=1; $a++)// Stenographer
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','39','','11834','2','','')");	
					  
				}	

	   for($a = 1;$a <=1; $a++)// Accountant
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','1','10005','2','','')");	
					  
				}

	  for($a = 1;$a <=1; $a++)// Librarian
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','1','42','11171','2','','')");	
					  
				}	
	   
	  for($a = 1;$a <=1; $a++)// steward
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','96','11840','2','','')");	
					  
				}	
			   
	  for($a = 1;$a <=1; $a++) // Store Keeper
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','33','85','11848','2','','')");	
					  
				}			
	

	  for($a = 1;$a <=1; $a++) // Upper Division Asstt.
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','11924','2','','')");	
					  
				}	
				
				
				
     for($a = 1;$a <=4; $a++) // Driver
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','10859','2','','')");	
					  
				}	
     for($a = 1;$a <=1; $a++) // Driver   - second level n/a => 98 , first level n/a= >48.
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','39','98','10859','2','','')");	
					  
				}	
				
    for($a = 1;$a <=1; $a++) // Asstt. Accountant
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','1','10200','3','','')");	
					  
				}			

    for($a = 1;$a <=1; $a++) // cashier
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','1','10623','2','','')");	
					  
				}	
				
	for($a = 1;$a <=1; $a++) // electrician (electro magnetic)
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','89','10881','2','','')");	
					  
				}		
     
   for($a = 1;$a <=1; $a++) // electrician Electrician(Instrument)
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','89','10882','2','','')");	
					  
				}	 

    for($a = 1;$a <=1; $a++) // Instrument Care Taker
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','89','10999','2','','')");	
					  
				}	
				
   for($a = 1;$a <=7; $a++) // Office Asstt. Cum Typist
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','11362','2','','')");	
					  
				}			
				
    for($a = 1;$a <=1; $a++) // photographer
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','11405','2','','')");	
					  
				}


    for($a = 1;$a <=1; $a++) // cash sarkar
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','1','10619','3','','')");	
					  
				}	


    for($a = 1;$a <=1; $a++) // Duplicating Machine Operator
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','10863','2','','')");	
				}	

    for($a = 1;$a <=1; $a++) // Sardar
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','17','11717','2','','')");	
					  
				}	


    for($a = 1;$a <=1; $a++) // Animal Care Taker
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','89','10031','3','','')");	
					  
				}		

    for($a = 1;$a <=1; $a++) // Aya
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','17','10575','2','','')");	
					  
				}	
   
   for($a = 1;$a <=4; $a++) //cook
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','29','10688','2','','')");	
					  
				}	

   for($a = 1;$a <=2; $a++) // Dome
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','17','10852','2','','')");	
					  
				}				
	for($a = 1;$a <=1; $a++) // Library Attendent
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','42','11178','3','','')");	
					  
				}				
   for($a = 1;$a <=2; $a++) // Mali
			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','11200','3','','')");	
					  
				}	

	   for($a = 1;$a <=4; $a++) // Mashalchi

			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','29','11210','2','','')");	
					  
				}

	   for($a = 1;$a <=17; $a++) // MLSS

			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','11321','2','','')");	
					  
				}				
	 for($a = 1;$a <=3; $a++) // MLSS

			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','39','48','10575','6','','')");	
					  
				}				
 

 for($a = 1;$a <=1; $a++) // Pump Operator	

			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','89','11575','6','','')");	
					  
				}	
	 for($a = 1;$a <=10; $a++) // security gaurd 

			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','83','11725','6','','')");	
					  
				}			
	  for($a = 1;$a <=15; $a++) // sweeper

			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','17','11878','2','','')");	
					  
				}	

	  for($a = 1;$a <=6; $a++) // table boy

			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','17','11881','2','','')");	
					  
				}	
				
	  for($a = 1;$a <=1; $a++) // Taxidormist

			    {
						  $org_id = $org[$key];
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','4','54','11889','3','','')");	
					  
				}	
				  }
				  else
				  {
					  echo "<h4>No Dataset Created Yet</h4>";
				  }
				  
			  //
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 8)//Divisional Health Office
		  {
			  for($a = 1;$a <= 1; $a++)//Director(Barisal Division)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','27','98','10795','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Deputy Director(Barisal Division)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','27','98','10738','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Director(Administration)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','98','10227','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Director(Disease Control)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','24','98','10238','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Director(Dental)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','26','98','10236','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Administrative Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10738','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Head Asstt.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10939','3','','')");      
					
			   }
		  
			  for($a = 1;$a <= 1; $a++)//Stenographer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','13','98','11834','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Data Entry Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','24','46','10714','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11924','3','','')");      
					
			   }
			   
			   
			   for($a = 1;$a <= 1; $a++)//ENTO Technician
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','24','45','10893','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//MLSS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','46','11321','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Security Guard
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','83','11723','2','','')");      
					
			   }
			   
			   
			   for($a = 1;$a <= 1; $a++)//Sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11878','2','','')");      
					
			   } 
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 15)//Port Office
		  {
			  for($a = 1;$a <= 1; $a++)//Airport Health Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','8','98','10022','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Airport Health Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','98','10202','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','98','11222','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Pharmacist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','70','11395','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sanitary Inspector
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11714','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','52','11812','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Head Asstt.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10939','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Accounts.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','10006','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Steno Typist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','38','11833','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Store Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','85','11848','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11924','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','85','10285','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','85','11362','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Aya
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','17','10575','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//MLSS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','17','11321','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','17','11878','2','','')");      
					
			   }
			  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 7)//Medical College Hospital
		  {
				for($a = 1;$a <= 1; $a++)//Director(Dhaka MCH)
	  
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','98','10805','1','','')");      
					
			   }
			  
			  for($a = 1;$a <= 1; $a++)//Deputy Director(Dhaka Medical Hospital)
	  
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','11','98','10743','1','','')");      
					
			   }
				 
			   for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','22','10891','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Anesthesiologist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','4','10026','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Director
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','7','98','10221','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Accounts Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','10015','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Administrative Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','2','10019','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Accountant.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','1','10004','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Nurse
			   {

					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','52,'10084','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Cardiac Surgery)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','12','10483','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Cardiology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','13','10480','1','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Cardiothorasic Surgery)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','15','10486','1','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Dermatology(Skin & VD))
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','84','10495','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(ENT)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','27','10498','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Hematology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','34','10505','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','44','10510','1','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','44','10510','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Nephrology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','47','10512','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Neuro Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','49','10513','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Neuro Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','49','10513','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Opthalmology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','59','10517','2','','')");      
					
			   }
			   
					   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Plastic Surgery)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','74','10532','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Surgery)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','87','10539','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Urology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','93','10543','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Registrar(Cardiology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','87','11598','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Registrar(Dermatology(Skin & VD))
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','84','11605','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Registrar(ENT)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','27','11607','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Registrar(Gyn & Obs)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','32','11613','1','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Registrar(Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','44','11620','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Registrar(Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','44','11620','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Registrar(Nephrology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','47','11622','1','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Registrar(Neuro Medicine)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','47','11622','1','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Registrar(Opthalmology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','47','11632','1','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)// Registrar(Plastic Surgery)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','74','11647','1','','')");   				   
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Registrar(Surgery)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','47','11654','1','','')");      
					
			   }
			  
				for($a = 1;$a <= 1; $a++)//Registrar(Urology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','93','11657','1','','')");      
					
			   }
					   
				for($a = 1;$a <= 1; $a++)//Registrar(Casualty)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','93','11600','1','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Nephrology Technician
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','47','11335','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Personal Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','54','11382','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Tailor
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','54','11884','2','','')");      
					
			   }
			   for($a = 1;$a <= 1; $a++)//Clinical Pathologist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','64','10672','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Bio-Chemist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','64','10583','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Audio Visual Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','33','10565','3','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Cashier
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','1','10621','2','','')");      
					
			   }
			   for($a = 1;$a <= 1; $a++)//Cardiographer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','87','10601','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Cash Sarkar
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','1','10167','2','','')");      
					
			   }
			   for($a = 1;$a <= 1; $a++)//Calenderer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','95','10594','2','','')");      
					
			   }
			   for($a = 1;$a <= 1; $a++)//Carpenter
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','89','10610,'2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Daftary
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','54','10700','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Cook/Mashalchi
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','29','10689','2','','')");      
					
			   }
			   
			   
			   for($a = 1;$a <= 1; $a++)//Deputy Nursing Superintendent
	  
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','52','10772','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Dietician 
	  
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','29','10786','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Head Asstt.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','54','10939','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Instrument Technician
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','86','11004','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Driver
	  
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','91','10860','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//House Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','95','10975','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Elect/Mec/Liftman
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','89','10869','2','','')");      
					
			   }
			   
			  for($a = 1;$a <= 1; $a++)//Radiologist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','78','11580','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Radiotherapist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','78','11585','1','','')");      
					
			   }
			   for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','64','11299','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Technologist(BT)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','64','11293','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiograpy)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','78','11305','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiotherapy)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','78','11307','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Linen Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','86','11188','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Medical Record Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','46','11278','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Kitchen Supervisor
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','29','11088','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Lab.Attendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','11094','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Jamadar 
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','17','11009','2','','')");      
					
			   }
						   
			   for($a = 1;$a <= 1; $a++)//Generator Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10374','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Instrument Care Taker
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','10998','2','','')");      
				
			   }
			   
				for($a = 1;$a <= 1; $a++)//Leaser Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','85','10494','2','','')");      
					
			   }
			   
			   
				for($a = 1;$a <= 1; $a++)//Nursing Superintendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','52','11343','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 3; $a++)//Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','44','11226','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 3; $a++)//Medical Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','44','11226','3','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//PA cum Computer Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','46','11382','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Data Entry Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11362','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Library Attendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11175','2','','')");      
					
			   }
				
			   for($a = 1;$a <= 1; $a++)//Mashalchi
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11210','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//MLSS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11321','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Professor(Anesthesiology)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','4','10682','2','','')");      
					
			   }
			   
					   
			   for($a = 1;$a <= 1; $a++)//Registrar
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','33','54','11594','1','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Pharmacist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','70','10650','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Radiographer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','48','78','10650','2','','')");      
					
			   }	 
			   for($a = 1;$a <= 1; $a++)//Record Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','46','10715','2','','')");      
					
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Resident Surgeon
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','5','87','11680','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Sr. Store Officer
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','6','64','11815','2','','')");      
					
			   }
					   
				for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','52','11812','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Rent Collector
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','1','10029','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Steward
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','96','11840','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Store Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','37','87','11848','2','','')");      
					
			   }
				   
				for($a = 1;$a <= 1; $a++)//Telephone Operator
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','54','11905','2','','')");      
					
			   }
					
			   
				for($a = 1;$a <= 1; $a++)//Ward Master
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','95','11951','2','','')");      
					
			   }
			   
				for($a = 1;$a <= 1; $a++)//Ward Boy/Aya
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						 VALUES('$org_id','4','96','10915','2','','')");      
					
			   }
		  }
		  //
		  //
		  //
		  //
		  
		  elseif($type == 24)//200-bed General Hospital
		  {
			    for($a = 1;$a <= 1; $a++)//Medical Superintendent
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','44','98','11279','2','','')");      
				 }
		 
				 for($a = 1;$a <= 1; $a++)//Sr. Consultant(Orthopaedics)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','63','11770','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Sr. Consultant(Pathology)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','64','11773','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant(Pathology)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','64','11773','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant(Radiology)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','78','11777','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant(Dermatology(Skin & VD))
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','84','11760','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant(Anesthesia)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','4','11754','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant(ENT)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','27','11762','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Sr. Consultant(Eye)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','59','11764','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant(Gyn & Obs)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','32','11765','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant(Medicine)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','44','11753','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant(Paediatrics)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','68','11772','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant(Surgery)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','87','11780','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Jr. Consultant(Anesthesia)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','4','11020','2','','')");      
				 }
				 
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Blood Bank)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','7','11024','2','','')");      
				 }
				 
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Gyn & Obs)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','32','11039','2','','')");      
				 }
				 
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Medicine)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','44','11042','2','','')");      
				 }
				 
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Pathology)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','64','11059','2','','')");      
				 }
				 
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant(Surgery)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','87','11066','2','','')");      
				 }
				 
				   for($a = 1;$a <= 1; $a++)//Anesthesiologist
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','4','11754','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Gyn & Obs)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','32','10503','1','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Medicine)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','44','10510','1','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Asstt. Registrar(ENT)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','27','10498','1','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Eye)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','59','10499','1','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Paediatrics)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','68','10528','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Asstt. Registrar(Surgery)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','87','10539','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Dental Surgeon
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','20','10719','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Emergency Medical Officer
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','22','10891','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Pathologist
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','36','64','11387','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Registrar(Gyn & Obs)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','32','11613','1','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Registrar(Medicine)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','44','11620','1','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Registrar(Paediatrics)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','68','11643','1','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Registrar(Surgery)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','44','11620','1','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Nursing Superintendent
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','52','11342','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Medical Technologist(Lab)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','33','64','11800','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Medical Technologist(BT)
				 {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','37','8','11293','2','','')");      
				 }
				 /////
				 for($a = 1;$a <= 1; $a++)//Medical Technologist(Dental)
				 {
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','37','20','11295','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','33','72','11299','2','','')");      
					 
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiograpy)
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','45','78','11307','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Pharmacist
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','33','64','11395','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','33','52','11812','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','45','52','11812','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','45','52','11812','3','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','45','52','11812','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Accountant
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','1','10005','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Instrument Technician
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11005','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Steno Typist
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11833','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Store Keeper
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','33','85','11848','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Driver
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','10859','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Electrician/Mechanic
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','10884','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Asstt. Nurse
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','33','52','10285','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Steward
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','45','11840','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Strealizer Cum Mechanic
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11862','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Cashier
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','1','10621','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Linen Keeper
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11188','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Medical Record Keeper
				 {
						$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						VALUES('$org_id','4','54','11278','2','','')");      
				   
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
				 {
				  
						   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						   VALUES('$org_id','4','54','11362','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Cash Sarkar
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','1','10617','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Kitchen Supervisor
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','29','11087','2','','')");      
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Jamadar
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11013','2','','')");      
					 
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Tailor
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11884','2','','')");      
					 
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Cook/Mashalchi
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','48','29','10689','2','','')");      
					 
				 }
		
				 for($a = 1;$a <= 1; $a++)//MLSS
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11321','2','','')");      
					 
				 }
				 
				 for($a = 1;$a <= 1; $a++)//Security Guard
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','83','11723','2','','')");      
					 
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sweeper
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','17','11878','2','','')");      
					 
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Ward Boy
				 {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','96','11947','2','','')");      
					 
				 }
	  
		  }
		  //
		  //
		  //
		  elseif($type == 33)//Cheast Clinic
		  {
			  for($a = 1;$a <= 1; $a++)//Jr. Consultant
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11018','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','11226','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Technologist(lab)
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','64','11299','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Technologist(Radiography)
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11305','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Pharmacist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','86','11395','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Asstt. Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','10285','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Home Visitor
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10970','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Driver
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11018','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10860','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Office Asstt. cum Typist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11362','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Aya
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10575','2','','')");      
				   }
				   for($a = 1;$a <= 4; $a++)//MLSS
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Swweeper
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11878','2','','')");      
				   }
			  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 36)//Urban Dispencery
		  {
			  for($a = 1;$a <= 2; $a++)//Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11226','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Pharmacist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','36','86','11018','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Driver
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10858','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Midwife
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11317','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Chowkider
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10663','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Chowkider
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','2','','')");      
				   }
			  
			  
		  }
		  //
		  //
		  //
		  elseif($type == 34)//Medical Sub Depo
		  {
			  for($a = 1;$a <= 1; $a++)//Manager
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11202','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','11226','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Office SUper.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','98','11365','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Store Super.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','44','86','11855','2','','')");      
				   }
				   for($a = 1;$a <= 3; $a++)//Upper Division Asstt.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11924','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Driver
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11859','2','','')");      
				   }
				   for($a = 1;$a <= 6; $a++)//Office Asstt. cum Typist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11359','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Carpenter
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10609','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Cutler
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10698','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Timer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11911','2','','')");      
				   }
				   for($a = 1;$a <= 11; $a++)//MLSS
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Sweeper
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11878','2','','')");      
				   }
			  
		  }
		  //
		  //
		  //
		  elseif($type == 16)// Laprosay Hospital
		  {
			  for($a = 1;$a <= 2; $a++)//Sr. Consultant
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11753','3','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11019','3','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','11226','3','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','11226','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Physiotherapist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','37','73','11408','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Laprosay COntrol Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11166','3','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Technologist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','64','11281','3','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Medical Technologist(Lab)
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11299','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Pharmacist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','86','11395','2','','')");      
				   }
				   for($a = 1;$a <= 4; $a++)//Sr. Staff Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11812','3','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11812','2','','')");      
				   }
				   for($a = 1;$a <= 6; $a++)//Staff Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11821','3','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Accountant cum Cashier
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10009','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Steward
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11840','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11924','2','','')");      
				   }
				   for($a = 1;$a <= 10; $a++)//Asstt. Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','10285','3','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Draftsman
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10854','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Driver
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10857','3','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Office Asstt. cum Typist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11362','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Store Keeper
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','43','85','10854','2','','')");      
				   }
				   for($a = 1;$a <= 11; $a++)//TB & Laprosay control asstt.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11890','3','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Lab Attend.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11095','2','','')");      
				   }
				   for($a = 1;$a <= 4; $a++)//Aya
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10575','2','','')");      
				   }
				   for($a = 1;$a <= 6; $a++)//Cook/Masalchi
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10688','2','','')");      
				   }
				   for($a = 1;$a <=8; $a++)//MLSS
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Shoe Maker
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11729','2','','')");      
				   }
				   for($a = 1;$a <= 6; $a++)//Sweeper
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11878','2','','')");      
				   }
			  
			  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 14)//IDH
		  {
			  for($a = 1;$a <= 1; $a++)//Sr. Consultant
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11753','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Consultant
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11018','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Clinical Pathologist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','10672','1','','')");      
				   }
				   for($a = 1;$a <= 3; $a++)//Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','11226','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Nursing Super.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11342','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','64','11299','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Pharmacist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','86','11395','2','','')");      
				   }
				   for($a = 1;$a <= 5; $a++)//Sr. Staff Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11812','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Steward
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11839','2','','')");      
				   }
				   for($a = 1;$a <= 4; $a++)//Asstt. Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','10285','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Driver
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10859','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Office Asstt. cum Typist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11362','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Ward Master
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11951','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Aya
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10575','2','','')");      
				   }
				   for($a = 1;$a <= 3; $a++)//Cook/Masalchi
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10688','2','','')");      
				   }
				   for($a = 1;$a <= 6; $a++)//MLSS
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','2','','')");      
				   }
				   for($a = 1;$a <= 4; $a++)//Sweeper
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11878','2','','')");      
				   }
			  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 9)//IHT
		  {
			  for($a = 1;$a <= 1; $a++)//Principal - IHT
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','1','98','11429','1','','')");      
				   }
				   for($a = 1;$a <= 4; $a++)//Associate Professor
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','1','98','10042','1','','')");      
				   }
				   for($a = 1;$a <= 4; $a++)//Asstt. Professor-IHT
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','1','98','10369','1','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Asstt. Professor (Physical Medicine)
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','1','71','10438','3','','')");      
				   }
				   for($a = 1;$a <= 5; $a++)//Lecturer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','1','98','11114','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','11226','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Administrative Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10020','2','','')");      
				   }
				   for($a = 1;$a <= 6; $a++)//Medical Technologist-Lab
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','64','11299','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Lab Instructor
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','64','11100','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Accountant
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','1','10006','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Head Asstt.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10939','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Librarian
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11171','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Artist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10037','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Cashier
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','1','10623','2','','')");      
				   }
				   for($a = 1;$a <= 6; $a++)//Driver
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10860','2','','')");      
				   }
				   for($a = 1;$a <= 3; $a++)//Office Asstt. cum Typist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11362','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Projectionist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11563','2','','')");      
				   }
				   for($a = 1;$a <= 6; $a++)//Lab Attend.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','64','11095','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Darwan
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10709','2','','')");      
				   }
				   for($a = 1;$a <= 7; $a++)//MLSS
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','2','','')");      
				   }
				   for($a = 1;$a <= 3; $a++)//Sweeper
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11878','2','','')");      
				   }
			  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 35)//School Health Clinic
		  {
			  for($a = 1;$a <= 1; $a++)//Medical Officer
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','44','11226','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Pharmacist
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','70','11395','2','','')");	
				  
			  }
	  
			  
			  for($a = 1;$a <= 1; $a++)//Driver
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10859','2','','')");	
				  
			  }
	  
			  
			  for($a = 1;$a <= 1; $a++)//Lady Health Visitor
	  
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','4','11107','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Aya
	  
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10575','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Cleaner
	  
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','17','10665','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//MLSS
	  
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11321','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Night Guard
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','83','11337','2','','')");	
				  
			  }	
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 10)//MATS
		  {
				  for($a = 1;$a <= 1; $a++)//Principal(MATS)
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','39','98','11432','1','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Sr. Lecturer(MATS)
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','1','98','11794','1','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Medical Officer
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','44','11226','1','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Administrative Officer
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','2','10020','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','64','11299','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Accountant
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','1','10007','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Artist
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','10036','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Librarian
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','1','42','11171','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Steno Typist
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','11833','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Store Keeper
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','85','11848','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','11924','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Audio Visual Operator
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','10567','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Cashier
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','1','10623','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Driver
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','10859','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Instrument Care Taker
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','10999','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','11362','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Lab. Attendent
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','64','11094','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Daftary
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','10700','2','','')");	
					  
				  }
				  
				  for($a = 1;$a <= 1; $a++)//Taxidormist
				  {
					  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','11888','2','','')");	
					  
				  }
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 38)//Union Sub Center
		  {
			  for($a = 1;$a <= 1; $a++)//Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11226','1','','')");      
				   }
				   /*for($a = 1;$a <= 1; $a++)//Sub Asstt. Community Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','11226','2','','')");      
				   }*/
				   for($a = 1;$a <= 1; $a++)//Pharmacist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11395','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//MLSS
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11321','2','','')");      
				   }
			  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 30)//Health Complex
		  {
			  for($a = 1;$a <= 1; $a++)//Specialist(Gyn & Obs
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','32','11741','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Specialist-Medicine
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','44','11742','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Specialist-Surgery
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','87','11743','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//TH&FPO
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11906','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Anesthetist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','4','10028','2','','')");      
				   }
				   for($a = 1;$a <= 17; $a++)//Asstt. Surgeon
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','10552','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Dental Surgeon
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','20','10719','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Medical Officer
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','37','44','11226','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//RMO
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','37','82','11706','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Nursing Supervisor
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11343','3','','')");      
				   }
				   /*for($a = 1;$a <= 2; $a++)//SACMO
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','11741','3','','')");      
				   }*/
				   for($a = 1;$a <= 2; $a++)//Medical Technologist-Lab
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','64','11299','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Technologist-Radiography
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11305','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Pharmacist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','86','11395','2','','')");      
				   }
				   for($a = 1;$a <= 5; $a++)//Sr. Staff Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11812','2','','')");      
				   }
				   for($a = 1;$a <= 5; $a++)//Sr. Staff Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','11812','3','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Head Asstt.
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','48','98','10938','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Health Inspector
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10959','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Sanitary Inspector
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11716','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Store Keeper
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','85','11848','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Asstt. Nurse
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','52','10285','3','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medical Technologist-BCG/EPI
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','98','11290','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Cashier
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10623','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Driver
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10860','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Gardener
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10965','5','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Jr. Mechanic
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11075','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Office Asstt. cum Typist
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','33','85','11848','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Statistician
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11830','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Aya
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10575','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Cook
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','10688','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Mali
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11200','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Masalchi
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11210','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Medicin Carier
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11309','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Peon
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11389','2','','')");      
				   }
				   for($a = 1;$a <= 1; $a++)//Peon cum Lab Specimen Carier
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11390','2','','')");      
				   }
				   for($a = 1;$a <= 2; $a++)//Security Guard
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11725','2','','')");      
				   }
				   for($a = 1;$a <= 5; $a++)//Sweeper
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11878','2','','')");      
				   }
				   for($a = 1;$a <= 3; $a++)//Ward Boy
				   {
						
							 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
							 VALUES('$org_id','4','54','11947','2','','')");      
				   }
			  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 22)//Bangladesh Secretariat Clnic
		  {
			  for($a = 1;$a <= 1; $a++)//Civil Surgeon
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','8','98','10664','1','','')");	
				  
			  }
			  
	  for($a = 1;$a <= 1; $a++)//Sr. Consultant(Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','44','11767','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Jr. Consultant(ENT)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','27','11034','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Jr. Consultant(Pathology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','64','11058','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Jr. Consultant(Paediatrics)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','98','11055','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Jr. Consultant(Gyn & Obs)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','32','11038','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Dental Surgeon
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','20','10719','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Medical Officer
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','44','11226','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','64','11299','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Medical Technologist(Dental)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','20','11295','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Pharmacist
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','70','11395','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Sr. Staff Nurse
			  {
	  
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','52','11812','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Store Keeper
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','33','86','11848','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Driver
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10859','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11362','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//MLSS
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11321','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//MLSS
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11321','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Sweeper
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','17','11878','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//sweeper
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','17','11878','3','','')");	
				  
			  }
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 5)//Medical College
		  {
			  for($a = 1;$a <= 1; $a++)//Principal(Dhaka Medical College)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','39','98','11426','1','','')");	
				  
			  }
	  
			  
	  for($a = 1;$a <= 1; $a++)//Professor(Anatomy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','3','11446','1','','')");	
				  
			  }
	  
			  
	  for($a = 1;$a <= 1; $a++)//Professor(Anesthesiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','4','11447','1','','')");	
				  
			  }
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Biochemistry)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','6','11448','1','','')");	
				  
			  }
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Blood Transfusion)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','8','11450','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Cardiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','13','11454','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Community Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','18','11461','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Dermatology(Skin & VD))
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','84','11469','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Endocrinology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','25','11471','3','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(ENT)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','27','11473','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Forensic Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','30','10664','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Gastroentrology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','31','11478','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 3; $a++)//Professor(Gyn & Obs)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','32','11485','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Hepatology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','35','11489','3','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','44','11494','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','44','11494','3','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Microbiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','45','11496','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Nephrology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','47','11498','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Neuro Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','50','11500','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Neurology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','58','98','11502','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Nuclear Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','51','11503','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Opthalmology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','59','11508','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Orthopaedics Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','58','98','11513','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Pathology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','64','11527','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Paediatrics)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','68','11523','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Paediatrics Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','66','11523','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Pharmacology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','69','11528','1','','')");	
				  
			  }
	  
			  
	  for($a = 1;$a <= 1; $a++)//Professor(Physical Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','71','11529','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Physiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','72','11530','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Plastic Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','67','11531','1','','')");	
				  
			  }
	  
	  for($a = 1;$a <= 2; $a++)//Professor(Radiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','78','11539','1','','')");	
				  
			  }
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Radiotherapy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','79','11540','1','','')");	
				  
			  }
	  
	  for($a = 1;$a <= 3; $a++)//Professor(Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','87','11544','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Urology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','93','11551','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Virology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','38','94','11553','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Hematology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','34','11488','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Neonatalogy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','47','11497','3','','')");	
				  
			  }
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Paediatrics Hematology & Oncology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','65','11518','3','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Professor(Paediatrics Nephrology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','66','11520','3','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Professor(Respiratory Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) VALUES('$org_id','9','81','11542','3','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Vice Principal(Dhaka Medical College)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','47','98','11933','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Associate Professor(Gasteroentology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','31','10095','3','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 1; $a++)//Associate Professor(Gasteroentology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','31','10095','1','','')");	
				  
			  }
	  
	  
	  for($a = 1;$a <= 2; $a++)//Associate Professor(Anatomy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule)
					  VALUES('$org_id','38','3','10044','1','','')");	
				  
			  }
	  
	  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Anesthesiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','4','10045','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Biochemistry)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','6','10049','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Blood Transfusion)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','8','10051','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Cardiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','13','10057','1','','')");	
				  
			  }
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Casulty Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','13','10055','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Community Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','18','10070','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Dermatology(Skin & VD))
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','84','10084','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Endocrinology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','25','10086','3','','')");	
				  
			  }
			  
						  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(ENT)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','27','10089','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Forensic Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','30','10092','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Gyn & Obs)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','32','10103','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Hematology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','34','10107','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','44','10119','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Microbiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','45','10120','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Neonatalogy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','47','10122','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Nephrology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','48','10123','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Neuro Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','50','10129','1','','')");	
				  
			  }
	  
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Nuclear Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','44','10135','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Opthalmology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','59','10139','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Orthopaedics Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','59','10139','1','','')");	
				  
			  }
	  
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics Nephrology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','66','10154','3','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','67','10148','3','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Pathology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','64','10163','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Pathology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','64','10163','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				  VALUES('$org_id','9','68','10161','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Paediatrics Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','67','10148','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Pharmacology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','69','10164','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Physical Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','71','10166','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Physiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','72','10168','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Radiotherapy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','79','10180','1','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Respiratory Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','81','10183','3','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','87','10186','1','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Thorasic Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','90','10189','3','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Associate Professor(Urology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','93','10195','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anatomy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','3','10295','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anesthesiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','4','10297','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Anatomy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','93','10195','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Biochemistry)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','6','10299','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Blood Transfusion)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','8','10302','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Cardiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','13','10308','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Community Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','18','10322','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Dermatology(Skin & VD))
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','84','10339','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt.Professor(ENT)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','27','10344','1','','')");	
				  
			  }
				  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Forensic Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','30','10347','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Gastroentrology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','31','10352','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Gyn & Obs)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','27','10359','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Hematology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','34','10363','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt.Professor(Hepatology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','35','10364','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','44','10379','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Microbiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','45','10381','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Microbiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','45','10381','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Neonatalogy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','47','10383','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Nephrology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','45','10384','1','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Neuro Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','50','10390','1','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Opthalmology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','59','10398','1','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics Nephrology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','66','10418','3','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','67','10412','3','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','67','10412','1','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Pathology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','64','10431','1','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics Hematology & Oncology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','65','10416','3','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Paediatrics)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','68','10413','1','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Pharmacology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','69','10434','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Physical Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','71','10438','3','','')");	
				  
			  }
	  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Physical Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','71','10438','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Physical Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','71','10438','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Physiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','72','10440','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Plastic Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','74','10444','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//AAsstt. Professor(Psychiatry)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','74','10444','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Radiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','78','10453','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Radiotherapy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','79','10454','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Respiratory Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','81','10457','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','87','10458','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Thorasic Surgery)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','90','10462','3','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Virology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','94','10472','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Asstt. Professor(Gastroentrology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','31','10352','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Curator(Anatomy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','3','10694','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Curator(Pathology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','64','10696','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Bio-Chemist
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','6','10582','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Librarian
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','42','11167','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Health Educator
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','71','10955','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Computer Operator
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','46','10682','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Head Asstt.
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10939','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Driver
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','91','10859','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Cashier
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','1','10172','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Imam
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10980','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Carpenter
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','89','10159','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Moazzin
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11330','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Daftary
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','10702','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Mali
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11200','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//MLSS
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11321','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Lecturer(Anatomy)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','3','11118','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Lecturer(Biochemistry)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','6','11119','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Lecturer(Community Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','9','18','11123','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Lecturer(Forensic Medicine)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','30','11133','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Lecturer(Microbiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','45','11146','1','','')");	
				  
			  }
			  
			  
			  for($a = 1;$a <= 1; $a++)//Lecturer(Pathology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','64','11151','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Lecturer(Pharmacology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','69','11119','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Lecturer(Physiology)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','72','11154','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Medical Officer
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','3','11226','1','','')");	
				  
			  }
			  
	  
			  for($a = 1;$a <= 1; $a++)//Pathologist
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','6','11387','1','','')");	
				  
			  }
			  
	  
			  for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','64','11299','1','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Pharmacist
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','70','11395','2','','')");	
				  
			  }
			  
	  
			  for($a = 1;$a <= 1; $a++)//Pharmacist(Graduate)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','70','11398','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11362','2','','')");	
				  
			  }
			  
	  
			  for($a = 1;$a <= 1; $a++)//Medical Officer
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','38','3','11226','1','','')");	
				  
			  }	
	  
			  for($a = 1;$a <= 1; $a++)//Secretary
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11722','2','','')");	
				  
			  }
			  
	  
		  for($a = 1;$a <= 1; $a++)//Sr. Medical Technologist(Lab)
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				  VALUES('$org_id','38','64','11800','2','','')");	
				  
			  }
			  
	  for($a = 1;$a <= 1; $a++)//Stenographer
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','23','98','11834','2','','')");	
				  
			  }
			  
	  for($a = 1;$a <= 1; $a++)//Steno Typist
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','46','11833','2','','')");	
				  
			  }
			  
	  for($a = 1;$a <= 1; $a++)//Store keeper
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','85','11849','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11923','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//Taxidormist
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','48','98','11887','2','','')");	
				  
			  }
			  
			  for($a = 1;$a <= 1; $a++)//sweeper
			  {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					  VALUES('$org_id','4','54','11878','2','','')");	
				  
			  }
				  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 26)//Other Hospitals
		  {
			  for($a = 1;$a <= 1; $a++)//Sr. Consultant-Medicine
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','48','98','11767','1','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant-Orthopedics
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','48','98','11770','3','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Sr. Consultant-Surgery
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','48','98','11780','1','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Jr. Consultant-Anesthesia
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','4','11020','1','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Jr. Consultant-Gyn&Obs
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','32','11038','1','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Jr. Consultant-Pathology
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','45','64','11058','3','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Jr. Consultant-Paediatrics
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','45,'68','11055','1','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//RMO
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','37','82','11703','1','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Dental Surgeon
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','37','20','10719','1','','')");	
				  }
				  for($a = 1;$a <= 3; $a++)//Emergency Medical Officer
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','37','22','10891','3','','')");	
				  }
				  for($a = 1;$a <= 2; $a++)//Medical Officer
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','37','55','11226','1','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Pathologist
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','45','64','11387','1','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Radiologist
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','48','98','11580','1','','')");	
				  }
				  for($a = 1;$a <= 2; $a++)//Nursing Super.
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','52','11343','2','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Nursing Super.
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','52','11343','3','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Medical Technologist-Dental
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','37','20','11295','2','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Medical Technologist-Lab
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','45','64','11299','2','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Medical Technologist-Radiography
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','48','98','11305','2','','')");	
				  }
				  for($a = 1;$a <= 3; $a++)//Pharmacist
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','86','11395','2','','')");	
				  }
				  for($a = 1;$a <= 7; $a++)//Sr. Staff Nurse
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','52','11812','2','','')");	
				  }
				  for($a = 1;$a <= 13; $a++)//Sr. Staff Nurse
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','52','11812','3','','')");	
				  }
				  for($a = 1;$a <= 10; $a++)//Staff Nurse
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','52','11821','2','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Head Asstt. cum Accountant
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','10941','2','','')");	
				  }
				  for($a = 1;$a <= 2; $a++)//Health Educator
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','26','10957','2','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Store Keeper
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','46','92','11848','2','','')");	
				  }
				  for($a = 1;$a <= 5; $a++)//Asstt. Nurse
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','33','52','10285','2','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Driver
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','31','54','10859','2','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Gardener
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','10965','5','','')");	
				  }
				  for($a = 1;$a <= 1; $a++)//Office Asstt. cum Typist
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','54','11359','2','','')");	
				  }
				  for($a = 1;$a <= 3; $a++)//Cook/Masalchi
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','29','10689','2','','')");	
				  }
				  for($a = 1;$a <= 10; $a++)//MLSS
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','92','11321','2','','')");	
				  }
				  for($a = 1;$a <= 4; $a++)//Sweeper
				  {
						  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
						  VALUES('$org_id','4','17','11878','2','','')");	
				  }
			  
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 6)//Other College
		  {
			  for($a = 1;$a <= 1; $a++)//Principal(Tibbiya College)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','39','98','11440','1','','')");      
				  
			   }
			   for($a = 1;$a <= 1; $a++)//Lecturer(Unani)
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','39','98','11164','2','','')");      
				  
			   }
			   for($a = 1;$a <= 1; $a++)//Hakim
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','39','98','10935','2','','')");      
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Accountant
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','1','10005','2','','')");      
				  
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Cashier
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','1','10621','2','','')");      
				  
			   }
			   
				 for($a = 1;$a <= 1; $a++)//Upper Division Asstt.
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11924','2','','')");      
				  
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Compounder
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','10679','2','','')");      
				  
			   }
			   
			   for($a = 1;$a <= 2; $a++)//Office Asstt. Cum Typist
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11362','2','','')");      
				  
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Store Keeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','33','85','11848','2','','')");      
				  
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Daftary
			   {
				  $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				  VALUES('$org_id','2','54','10701','2','','')");         
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Library Attendent
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','33','42','11176','2','','')");      
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Darwan
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','10856','2','','')");      
			   }
			   
			   for($a = 1;$a <= 1; $a++)//MLSS
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11321','2','','')");      
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Peon
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','54','11389','2','','')");      
			   }
			   
			   for($a = 1;$a <= 1; $a++)//Sweeper
			   {
					$sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					VALUES('$org_id','4','17','11878','2','','')");      
			   }
			  
		  }
		  //
		  //
		  //
		  // 
		  elseif($type == 27)//UH&FPO
		  {
			     for($a = 1;$a <= 1; $a++)//Upazila H&FP Officer(UH&FPO)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','46','98','11922','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Asstt. Surgeon
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','33','87','10198','1','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Medical Officer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','33','44','11229','1','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sub Asstt. Community Medical Officer
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','33','18','11864','3','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Medical Technologist(Lab)
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','33','64','11299','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Cashier
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','1','10621','2','','')");     			 
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Sweeper
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','17','11878','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Head Asstt. Cum Accountant
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','10941','2','','')");      
				 }
		
				 
				  for($a = 1;$a <= 1; $a++)//Health Inspector
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','33','33','10959','2','','')");      
				 }
		
				 
				  for($a = 1;$a <= 1; $a++)//Statistician
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11829','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Store Keeper
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','33','85','11848','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Asstt. Health Inspector
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','33','33','10724,'2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Health Asstt.
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','33','54','10951','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//Office Asstt. Cum Typist
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11362','2','','')");      
				 }
				 
				  for($a = 1;$a <= 1; $a++)//MLSS
				 {
					 $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
					 VALUES('$org_id','4','54','11321','2','','')");      
				 }
		  }
		  //
		  //
		  //
		  //
		  elseif($type == 37)//Trauma Center
		  {
			  for($a = 1;$a <= 2; $a++)//Jr. Consultant-Orthopeadics
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','33','98','11052','3','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//RMO
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','37','82','11703','3','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//Medical Technologist-Lab
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','33','64','11299','3','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//Pharmacist
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','33','52','11395','3','','')");      
			   }
			   for($a = 1;$a <= 3; $a++)//Sr. staff Nurse
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','11812','3','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//Driver
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','10859','3','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//Office Asstt. cum Typist
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','11362','3','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//Aya
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','10575','3','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//Cook/Masalchi
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','10688','6','','')");      
			   }for($a = 1;$a <= 1; $a++)//Darwan
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','10709','6','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//Lab Attendent
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','11096','3','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//MLSS
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','11321','6','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//Sweeper
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','11878','6','','')");      
			   }
			   for($a = 1;$a <= 1; $a++)//Ward Boy
			   {
				   $sql1 = mysql_query("INSERT INTO sanctioned_post(organization_id,first_level_id,second_level_id,designation_id,type_of_post,rank_of_post,recruitment_rule) 
				   VALUES('$org_id','4','54','11947','3','','')");      
			   }
			  
		  }
		  //
		  //
		  //
		  //
		  else
		  {
			  echo "<h4>No Dataset Created Yet</h4>";	
		  }
	}
}
		
}

/*echo "<pre>";
print_r($org);
echo "</pre>";*/
?>


<form name="form1" action="index.php" method="post">
  <table width="200" border="0" align="left">
    <tr>
      <td><a href="index.php">Home</a></td>
    </tr>
    <tr>
      <td><a href="search.php">Search</a></td>
    </tr>
  </table>
  
<table border="0" align="center">
<tr>
<td height="40"></td>
<td></td>
</tr>
  <tr>
    <td width="200">Select Organization Type:</td>
    <td><span id="spryselect1">
      <select name="type" onChange="showUser(this.value)">
        <option value=""><< Select >></option>
        <?php
	$sel = mysql_query("SELECT * FROM org_type ORDER BY org_type asc");
	while($rowtype = mysql_fetch_assoc($sel))
	{
	?>
        <option value="<?php echo $rowtype['id']; ?>"><?php echo $rowtype['org_type']; ?></option>
    <?php
	}
	?>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span></td>
  </tr>
  <tr>
    <td>Select Organization Names:</td>
    <td>
    <div id="txtHint">
    <select multiple="multiple" name="org[]" style="height:450px; width:320px">
    <?php
	$selorg = mysql_query("SELECT * FROM new_organization ORDER BY org_name asc");
	while($roworg = mysql_fetch_assoc($selorg))
	{
	?>
    <option value="<?php echo $roworg['org_id']; ?>"><?php echo $roworg['org_name']; ?></option>
    <?php
	}
	?>
    </select>
    </div>
    </td>
  </tr>
  <tr>
    <td><input type="submit" name="submit" value="Submit" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
</script>
</body>
</html>