<?php
include('lib/connect.php');
$dis = $_GET['q'];

echo '<select id="upa">
<option value="">--Select Upazila--</option>';
$upa = mysql_query("SELECT * FROM upazillas WHERE district_id='$dis' ORDER BY name");
while($rowupa = mysql_fetch_array($upa))
{
	echo '<option value="'.$rowupa['upazilla_id'].'">'.$rowupa['name'].'</option>';
}
echo '</select>';
?>