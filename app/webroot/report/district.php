<?php
include('lib/connect.php');
$div = $_GET['q'];

echo '<select id="dis"  onChange="showUpa(this.value)">
<option value="">--Select District--</option>';
$dis = mysql_query("SELECT * FROM districts WHERE division_id='$div' ORDER BY name");
while($rowdis = mysql_fetch_array($dis))
{
	echo '<option value="'.$rowdis['district_id'].'">'.$rowdis['name'].'</option>';
}
echo '</select>';
?>