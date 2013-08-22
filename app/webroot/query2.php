<?php
include('lib/connect.php');

$org = $_GET['q'];
//echo $org;

echo '<select multiple="multiple" name="org[]" style="height:400px; width:450px">';

$selorg = mysql_query("SELECT * FROM organizations WHERE org_type_id='$org' ORDER BY title asc");
while($roworg = mysql_fetch_assoc($selorg))
{
	echo '<option value="'.$roworg['organization_id'].'">'.$roworg['title'].'</option>';
}
echo '</select>';
?>