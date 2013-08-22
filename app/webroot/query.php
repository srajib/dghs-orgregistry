<?php
include('lib/connect.php');
echo '<table class="table table-striped table-bordered table-highlight" id="example">
		<thead>
			<tr>
				<th><b>Designation</b></th>
				<th><b>Type of Post</b></th>
				<th><b>Payscale</b></th>
				<th><b>Class</b></th>
				<th><b>Group Code</b></th>
				<th><b>1st Level</b></th>
				<th><b>2nd Level</b></th>
				<th><b>Sanctioned Post(s)</b></th>
			</tr>
		</thead>
		';

//$con = mysql_connect($server,$user,$password);
//$db = mysql_select_db($db,$con);

$org = $_GET['q'];
//$org;
$selo = mysql_query("SELECT * FROM sanctioned_post WHERE organization_id='$org' ORDER BY id asc");
$selorg = mysql_query("SELECT * FROM sanctioned_post WHERE organization_id='$org' group by designation_id, type_of_post ORDER BY id asc");
$row = mysql_num_rows($selo);
if($row >0)
{
	while($roworg = mysql_fetch_array($selorg))
	{
		$desid = $roworg['designation_id'];
		$des = mysql_query("SELECT * FROM designation WHERE id='$desid'");
		$rowdes = mysql_fetch_assoc($des);
		
		$type = $roworg['type_of_post'];
		$ty = mysql_query("SELECT * FROM type_of_post WHERE id='$type'");
		$rowty = mysql_fetch_assoc($ty);
		
		$first = $roworg['first_level_id'];
		$fst = mysql_query("SELECT * FROM first_level_division WHERE id='$first'");
		$rowfst = mysql_fetch_assoc($fst);
		
		$second = $roworg['second_level_id'];
		$sec = mysql_query("SELECT * FROM second_level_division WHERE id='$second'");
		$rowsec = mysql_fetch_assoc($sec);
		
		//$desid1 = $roworg['designation_id'];
		$des1 = mysql_query("SELECT * FROM designation WHERE id='$desid'");
		$rowdes1 = mysql_fetch_assoc($des1);
		$group = $rowdes1['group_code'];
		$grp = mysql_query("SELECT * FROM group WHERE id='$group'");
		//$rowgrp = mysql_fetch_assoc($grp);
		
		$tpost = mysql_query("SELECT SUM(no_of_post) FROM sanctioned_post WHERE organization_id='$org' AND designation_id='$desid' AND type_of_post='$type' group by designation_id, type_of_post ORDER BY id asc");
		$ctpost = mysql_fetch_array($tpost);
		
	
	echo '
	<tbody>
	<tr>
	<td>'.$rowdes['designation'].'</td>
	<td>'.$rowty['type_name'].'</td>
	<td>'.$rowdes['payscale'].'</td>
	<td>'.$rowdes['class'].'</td>
	<td>'.$rowdes['group_code'].'</td>
	<td>'.$rowfst['first_level_name'].'</td>
	<td>'.$rowsec['second_level_name'].'</td>
	<td>'.$ctpost[0].'</td>
	</tr>			
	</tbody>';

	}
	
	echo '
	<tr>
	<td colspan="7"><b>Total Sanctioned Post of this Organization: </b></td>
	<td><b>'.$row.'</b></td>
	</tr>';
}else
{

echo '
<tbody>
<tr>
<td colspan="8" style="border-color:#999; width:1185px">No Sanctioned Post Found</td>
</tr>
</tbody>';	

}
echo '</table>';
?>