<?php
include('lib/connect.php');

$org = $_GET['q'];
//echo $org;

echo '<select name="org" onChange="showU(this.value)">
<option value=""><-- Select Organization --></option>';

$selorg = mysql_query("SELECT * FROM new_organization WHERE org_type_id='$org' ORDER BY org_name asc");
while($roworg = mysql_fetch_assoc($selorg))
{
	echo '<option value="'.$roworg['org_id'].'">'.$roworg['org_name'].'</option>';
}
echo '</select>';
?>