<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="imagetoolbar" content="no" />
<title> Organization Registry</title>
<link media="screen" rel="stylesheet" type="text/css" href="css/style.css"  />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<script>
  $(document).ready(function() {
    $("#tabs").tabs();
  });
  </script>
<?php
include 'conn.php';
$id=$_GET['id'];
echo $_SERVER['HTTPS'];
?><?php 

if (isset($_POST['submit'])){
$agencie_code=$_POST['agencie_code']; 
$Title=$_POST['Title'];
$division_code=$_POST['division_code'];
$district_code=$_POST['district_code'];
$upazilla_code =$_POST['upazilla_code'];
$union_code =$_POST['union_code'];
$email = $_POST['email'];
$contact_no= $_POST['contact_no'];
$org_type_id=$_POST['org_type_id'];
$org_func_id=$_POST['org_func_id'];
$org_level_id=$_POST['org_level_id'];
$ownership_id=$_POST['ownership_id'];

$q=mysql_query("update organizations set title='$Title',agencie_code='$agencie_code',
division_code='$division_code',district_code='$district_code',upazila_code='$upazilla_code',
union_code='$union_code',email='$email',contact_no='$contact_no',org_type_id='$org_type_id',
org_func_id='$org_func_id',org_level_id='$org_level_id',ownership_id='$ownership_id' where organization_id='$id'");
}

?>


<title>Organization update</title>
</head>
<body>
<div id="siteWrapper">
			<div id="siteHeader">
				<div id="headerFirst">
				</div>
				<div id="headerLogo">
					
				</div>
				<div style="width:100%">
					<h2 style="color: #060;padding: 15px 10px 3px 10px;font-size: 36px;">Organization Registry</h2>
					<p style="width:500px;font-size:11px;font-weight;bold;text-transform:none; position:relative;margin-top:-30px;">Government of People's Republic of Bangladesh</p>
					<p style="width:700px;font-size:15px;text-transform:uppercase;padding-top:4px; position:relative;margin-top:-10px;">directorate general of health services</p>
				</div><div class="lclear"></div>
			</div><!-- end of siteHeader -->
			
		<div id="siteMenuWrapper">
				
					<ul>
					<li><a href="http://app.dghs.gov.bd/orgregistry/">Home</a></li> 
					</li>
					
				</ul><div class="lclear"></div>
			</div><!-- end of siteMenuWrapper --><!-- end of siteMenuWrapper -->
			<div id="logoutInfo">
				
			</div><!--end of logoutInfo -->
			<div class="lclear"></div>
			<div id="contentWrapper">
			    <!--
				<div id="leftMenuWrapper">
					<?php // echo $this->element('left_menu');?>
				</div><!-- end of leftMenuWrapper 
				-->
<div id="mainContentWrapper">


<table width="50%">
<?php $books_query=mysql_query("select * from organizations where organization_id='$id'");
$books_rows=mysql_fetch_array($books_query);

if($q)
{
//echo $msg = "<b>Your data updated successfully.</b>";
echo "<meta http-equiv='refresh' content='2; url=".$_SERVER['HTTPS']."'>";

}
else {

}

$url ="http://app.dghs.gov.bd/dghshrm/uploads/";		
?>
<form method="post">



<div id="fragment-1">  <div style="margin-left:10px;float:left;width:400px;">
<tr><td>Organization:</td><td><input type="text" size="70" name="Title" value="<?php echo $books_rows['title'];  ?>"></td>
	</tr>				
					
<tr>
<td>Agency:</td>
<td>
<?php $sql_1= mysql_query("SELECT * FROM agency_code");
echo '<select name="agencie_code">';
while($row_1 = mysql_fetch_array($sql_1)){
$sel_1 = "";
if($books_rows['agencie_code'] == $row_1['id'])
{
$sel_1= "selected";
}
echo '<option value='.$row_1['id'].' '.$sel_1.'>'.$row_1['agency'].'</option>';
}
echo '</select>';?></td>
</tr>
<tr><td>Division :</td>
<td>
<?php $sql2 = mysql_query("SELECT * FROM divisions");
echo '<select name="division_code">';
while($row2 = mysql_fetch_array($sql2)){
$sel = "";
if($books_rows['division_code'] == $row2['division_id'])
{
$sel = "selected";
}
echo '<option value='.$row2['division_id'].' '.$sel.'>'.$row2['name'].'</option>';
}
echo '</select>';?>

<tr><td>District:</td><td>
<?php $sql3 = mysql_query("SELECT * FROM districts");
echo '<select name="district_code">';
while($row3 = mysql_fetch_array($sql3)){
$sel2 = "";
if($books_rows['district_code'] == $row3['district_id'])
{
$sel2 = "selected";
}
echo '<option value='.$row3['district_id'].' '.$sel2.'>'.$row3['name'].'</option>';
}
echo '</select>';?>
</td></tr>
<tr><td>Upazilla:</td><td>
<?php $sql4 = mysql_query("SELECT * FROM upazillas");
echo '<select name="upazilla_code">';
while($row4 = mysql_fetch_array($sql4)){
$sel3 = "";
if($books_rows['upazila_code'] == $row4['upazilla_id'])
{
$sel3 = "selected";
}
echo '<option value='.$row4['upazila_code'].' '.$sel3.'>'.$row4['name'].'</option>';
}
echo '</select>';?></td></tr>
<tr><td>Union code:</td><td><input type="text" size="70" name="union_code" value="<?php echo $books_rows['union_code']; ?>" ></td></tr>
<tr><td>email:</td><td><input type="text" size="70" name="email" value="<?php echo $books_rows['email']; ?>" ></td></tr>
<tr><td>contact no:</td><td><input type="text" size="70" name="contact_no" value="<?php echo $books_rows['contact_no']; ?>" ></td></tr>

<tr><td>Org Type:</td>
<td>
<?php $sql5 = mysql_query("SELECT * FROM org_types");
echo '<select name="org_type_id">';
while($row5 = mysql_fetch_array($sql5)){
$sel4 = "";
if($books_rows['org_type_id'] == $row5['type_id'])
{
$sel4= "selected";
}
echo '<option value='.$row5['type_id'].' '.$sel4.'>'.$row5['type_name'].'</option>';
}
echo '</select>';?></td></tr>

<tr><td>Org Function:</td>
<td>
<?php $sql6 = mysql_query("SELECT * FROM organizational_function");
echo '<select name="org_func_id">';
while($row6 = mysql_fetch_array($sql6)){
$sel5 = "";
if($books_rows['org_func_id'] == $row6['id'])
{
$sel5= "selected";
}
echo '<option value='.$row6['id'].' '.$sel5.'>'.$row6['org_function'].'</option>';
}
echo '</select>';?></td></tr>

<tr><td>Org Level:</td>
<td>
<?php $sql6 = mysql_query("SELECT * FROM org_level");
echo '<select name="org_level_id">';
while($row6 = mysql_fetch_array($sql6)){
$sel5 = "";
if($books_rows['org_level_id'] == $row6['id'])
{
$sel5= "selected";
}
echo '<option value='.$row6['id'].' '.$sel5.'>'.$row6['org_level'].'</option>';
}
echo '</select>';?></td></tr>

<tr><td>Ownership id:</td>
<td>
<?php $sql6 = mysql_query("SELECT * FROM ownership_type");
echo '<select name="ownership_id">';
while($row6 = mysql_fetch_array($sql6)){
$sel5 = "";
if($books_rows['ownership_id'] == $row6['id'])
{
$sel5= "selected";
}
echo '<option value='.$row6['id'].' '.$sel5.'>'.$row6['ownership'].'</option>';
}
echo '</select>';?>
</td>
</tr>
<tr>
<td>
&nbsp;
</td>
<!--
<td>

					</td>-->
</tr>
 

</div> 
 
<tr><td></td><td><input type="submit" name="submit" value="Save & Close"></td></tr>
</div>
</table>

</form>			
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
