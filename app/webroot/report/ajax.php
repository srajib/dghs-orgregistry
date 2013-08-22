<?php
ini_set('memory_limit', '-1');
include('lib/connect.php');
$div = $_GET['p'];
$dis = $_GET['q'];
$upa = $_GET['r'];

echo '<table class="table table-striped table-bordered table-highlight" id="example" width="90%" style="padding-left:10px">
		<thead>
			<tr>
				<th align="center"><b>Organization Type(s)</b></th>
				<th align="center"><b>Total Organization(s)</b></th>
				
													
			</tr>
		</thead>
		<tbody>';
							

if($div != "" && $dis == "" && $upa == "")
{
	if($div == 0)
	{
		$sumtotsan = 0;
		$org = mysql_query("SELECT * FROM organizations GROUP BY org_type_id");
		while($rorg = mysql_fetch_assoc($org))
		{
			$stotsan = 0;
			$corg = mysql_num_rows($org);
			$tid = $rorg['org_type_id'];
			$type = mysql_query("SELECT * FROM org_types WHERE type_id='$tid'");
			
			while($rtype = mysql_fetch_assoc($type))
			{
				$typeid = $rtype['type_id'];
				echo '<tr>
						<td>'.$rtype['type_name'].'</td>';
						$totsan = 0;
						$forg = mysql_query("SELECT * FROM organizations WHERE org_type_id='$typeid'");
						while($rforg = mysql_fetch_assoc($forg))
						{
							$orgid = $rforg['organization_id'];
							$san = mysql_query("SELECT * FROM sanctioned_post, new_organization WHERE sanctioned_post.organization_id=new_organization.org_id and new_organization.old_org_id='$orgid'");
							$csan = mysql_num_rows($san);
							$totsan += $csan;
							
						}
						$ctorg = mysql_num_rows($forg);
						$totorg += $ctorg;
						$stotsan += $totsan;
				echo '<td>'.$ctorg.'</td>';
				//echo '<td>'.$totsan.'</td>
				  echo '</tr>';
			}
			$sumtotsan += $stotsan;
		}
		
		echo '<tr>
			  <td></td>
			  <td><b>Total Organization: '.$totorg.'</td>';
			  /*<td><b>Total Sanctioned Post: '.$sumtotsan.'</td>*/
			echo '</tr>';
		
	}
	else
	{
		$sumtotsan = 0;
		$org = mysql_query("SELECT * FROM organizations WHERE division_code='$div' GROUP BY org_type_id");
		while($rorg = mysql_fetch_assoc($org))
		{
			$stotsan = 0;
			$corg = mysql_num_rows($org);
			$tid = $rorg['org_type_id'];
			$type = mysql_query("SELECT * FROM org_types WHERE type_id='$tid'");
			
			while($rtype = mysql_fetch_assoc($type))
			{
				$typeid = $rtype['type_id'];
				echo '<tr>
						<td>'.$rtype['type_name'].'</td>';
						$totsan = 0;
						$forg = mysql_query("SELECT * FROM organizations WHERE division_code='$div' AND org_type_id='$typeid'");
						while($rforg = mysql_fetch_assoc($forg))
						{
							$orgid = $rforg['organization_id'];
							$san = mysql_query("SELECT * FROM sanctioned_post, new_organization WHERE sanctioned_post.organization_id=new_organization.org_id and new_organization.old_org_id='$orgid'");
							$csan = mysql_num_rows($san);
							$totsan += $csan;
							
						}
						$ctorg = mysql_num_rows($forg);
						$totorg += $ctorg;
						$stotsan += $totsan;
				echo '<td>'.$ctorg.'</td>';
				//echo '<td>'.$totsan.'</td>
				  echo '</tr>';
			}
			$sumtotsan += $stotsan;
		}
		
		echo '<tr>
			  <td></td>
			  <td><b>Total Organization: '.$totorg.'</td>';
			  /*<td><b>Total Sanctioned Post: '.$sumtotsan.'</td>*/
			echo '</tr>';
	}
}
elseif($div != "" && $dis != "" && $upa == "")
{
	$sumtotsan = 0;
	$org = mysql_query("SELECT * FROM organizations WHERE division_code='$div' AND district_code='$dis' GROUP BY org_type_id");
	while($rorg = mysql_fetch_assoc($org))
	{
		$stotsan = 0;
		$corg = mysql_num_rows($org);
		$tid = $rorg['org_type_id'];
		$type = mysql_query("SELECT * FROM org_types WHERE type_id='$tid'");
		
		while($rtype = mysql_fetch_assoc($type))
		{
			$typeid = $rtype['type_id'];
			echo '<tr>
					<td>'.$rtype['type_name'].'</td>';
					$totsan = 0;
					$forg = mysql_query("SELECT * FROM organizations WHERE division_code='$div' AND district_code='$dis' AND org_type_id='$typeid'");
					while($rforg = mysql_fetch_assoc($forg))
					{
						$orgid = $rforg['organization_id'];
						$san = mysql_query("SELECT * FROM sanctioned_post WHERE organization_id='$orgid'");
						$csan = mysql_num_rows($san);
						$totsan += $csan;
						
					}
					$stotsan += $totsan;
					$ctorg = mysql_num_rows($forg);
					$totorg += $ctorg;
			echo '<td>'.$ctorg.'</td>';
			//echo '<td>'.$totsan.'</td>
                 echo '</tr>';
		}
		$sumtotsan += $stotsan;
	}
	echo '<tr>
		  <td></td>
		  <td><b>Total Organization: '.$totorg.'</td>';
		  /*<td><b>Total Sanctioned Post: '.$sumtotsan.'</td>*/
		echo '</tr>';
}
elseif($div != "" && $dis != "" && $upa != "")
{
	$sumtotsan = 0;
	$org = mysql_query("SELECT * FROM organizations WHERE division_code='$div' AND district_code='$dis' AND upazila_code='$upa' GROUP BY org_type_id");
	while($rorg = mysql_fetch_assoc($org))
	{
		$stotsan = 0;
		$corg = mysql_num_rows($org);
		$tid = $rorg['org_type_id'];
		$type = mysql_query("SELECT * FROM org_types WHERE type_id='$tid'");
		
		while($rtype = mysql_fetch_assoc($type))
		{
			$typeid = $rtype['type_id'];
			echo '<tr>
					<td>'.$rtype['type_name'].'</td>';
					$totsan = 0;
					$forg = mysql_query("SELECT * FROM organizations WHERE division_code='$div' AND district_code='$dis' AND upazila_code='$upa' AND org_type_id='$typeid'");
					while($rforg = mysql_fetch_assoc($forg))
					{
						$orgid = $rforg['organization_id'];
						$san = mysql_query("SELECT * FROM sanctioned_post WHERE organization_id='$orgid'");
						$csan = mysql_num_rows($san);
						$totsan += $csan;
						
					}
					$stotsan += $totsan;
					$ctorg = mysql_num_rows($forg);
					$totorg += $ctorg;
			echo '<td>'.$ctorg.'</td>';
			//echo '<td>'.$totsan.'</td>
                 echo '</tr>';
		}
		$sumtotsan += $stotsan;
	}
	echo '<tr>
		  <td></td>
		  <td><b>Total Organization: '.$totorg.'</td>';
		  /*<td><b>Total Sanctioned Post: '.$sumtotsan.'</td>*/
		echo '</tr>';
}
else
{
	echo '<tr>
		  <td colspan="2">Wrong Information Submitted</td>
		 </tr>';
}


echo '</tbody>
	</table>';
//echo 'Division ID: '.$div.' District ID: '.$dis.' Upazila ID: '.$upa;
?>