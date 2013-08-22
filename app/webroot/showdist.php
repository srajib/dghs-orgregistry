<?php
$div = $_GET['q'];
include('conn.php');

$sql = mysql_query("SELECT * FROM bbscode WHERE division='$div'");

echo "<select name='district' id='district' onChange='showDist(this.value)'>";
echo "<option value=''>All District</option>";
while($row = mysql_fetch_assoc($sql))
{
	if($check != $row['district'])
	{
		echo "<option value='".$row['district']."'>".$row['district']."</option>";
	}
	$check = $row['district'];
}
echo "</select>";
	
?>