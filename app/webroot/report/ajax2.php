<?php
ini_set('memory_limit', '-1');
include('lib/connect.php');
$type = $_GET['p'];

echo '<table class="table table-striped table-bordered table-highlight" id="example" width="90%" style="padding-left:10px">
		<thead>
			<tr>
				<th><b>Organization Name(s)</b></th>
				<th><b>Total Sanctioned Post(s)</b></th>
				<th><b>Total Filled Sanctioned Post(s)</b></th>
													
			</tr>
		</thead>
		<tbody>';
							

if($type != "")
{
	$totsan = 0;
	$totf = 0;
	$org = mysql_query("SELECT * FROM organizations WHERE org_type_id='$type'");
	$totorg = mysql_num_rows($org);
	while($rorg = mysql_fetch_assoc($org))
	{
		
			echo '<tr>
			<td>'.$rorg['title'].'</td>';
			//calculating total sanctioned post organization wise
			$orgid = $rorg['organization_id'];
			$san = mysql_query("SELECT * FROM sanctioned_post WHERE organization_id='$orgid'");
			$csan = mysql_num_rows($san);
			
			echo '<td>'.$csan.'</td>';
			$totsan += $csan;
			
			//calculating filled sanctioned post organization wise
			$fsan = mysql_query("SELECT * FROM tbl_staff_organization WHERE organization_id='$orgid'");
			$cfsan = mysql_num_rows($fsan);
			 
			echo '<td>'.$cfsan.'</td>';
			$totf += $cfsan;
			echo '</tr>';
	}
echo '<tr>
	<td><b>Total Organizations: <font color="#FF0000" size="2">'.$totorg.'</font></b></td>
	<td><b>Total Sanctioned Posts: <font color="#FF0000" size="2">'.$totsan.'</font></b></td>
	<td><b>Total Filled Sanctioned Posts: <font color="#FF0000" size="2">'.$totf.'</font></b></td>
										
</tr>';		
}
else
{
	echo '<tr>
		  <td colspan="3">Wrong Information Submitted</td>
		 </tr>';
}


echo '</tbody>
	</table>';
//echo 'Division ID: '.$div.' District ID: '.$dis.' Upazila ID: '.$upa;
?>