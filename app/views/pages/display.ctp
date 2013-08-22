

<div style="text-align:left"><a href="<?php echo $this->base;?>/pages/addorg">Add New </a></div>


	<div style="margin-top:15px;">
		<table class="tableHeader" id="drafts" cellpadding="0" cellspacing="0" width="95%">
			<tr>
				<th width="50" align="left">SL</th>  
						<th width="200" align="left"><?php echo 'Organization Name';?></th>
                        <th width="200" align="center"><?php echo 'Photo';?></th>
						<th width="200" align="center" nowrap><?php echo 'Organization Code';?></th>
								<th width="200" align="left" nowrap><?php echo 'Organization Type';?></th>
				<th width="200" align="center"><?php echo 'Division';?></th>
				<th width="200" align="center"><?php echo 'District';?></th>
				<th width="200" align="center"><?php echo 'Upazilla';?></th>
					<th width="140" align="left"><?php echo 'Email';?></th>
					<th>Action</th>
			</tr>

	




<?php


//print_r($AllCode);

//exit;
			$i = 0;
			foreach($AllCode as $AllCodes):
			$url ="http://app.dghs.gov.bd/dghshrm/uploads/";
				$class = null;
				if ($i++ % 2 == 0) {
					$class = '';
				}
			
?>
<tr>
					<td width="20px;" align="center" <?php echo $class; ?>><?php echo $i.'.'; ?></td>
					   <td width="200px;" align="left" <?php echo $class; ?>><?php echo $AllCodes['organizations']['title']; ?></td>
                       <td align="center" <?php echo $class; ?><a href="">Org Photo</a></th>
					    <td width="200px;" align="center" <?php echo $class; ?>><?php echo $AllCodes['organizations']['organization_code']; ?></td>
							<td width="200px;" align="left" <?php echo $class; ?> nowrap><?php if($AllCodes['organizations']['org_type_id']){ echo $AllCodes['organization_type']['name']; } else { echo '-';} ?></td>
						
						<td width="200px;" align="center" <?php echo $class; ?>><?php echo $AllCodes['divisions']['name']; ?></td>
						<td width="200px;" align="center" <?php echo $class; ?>><?php echo $AllCodes['districts']['name']; ?></td>
						<td width="200px;" align="center" <?php echo $class; ?> nowrap><?php if($AllCodes['upazillas']['name']){ echo $AllCodes['upazillas']['name']; } else echo '-';?></td>
					<td width="140px;" align="left" <?php echo $class; ?>><?php if($AllCodes['organizations']['email']){ echo $AllCodes['organizations']['email']; } else echo '-';?></td>
					
						  	<td class="actions" <?php echo $class; ?>>
							
							<a href="<?php echo $this->base;?>/pages/org_details/<?php echo $AllCodes['organizations']['organization_id']; ?>">details</a>
						  &nbsp;
							
						</td>	

				</tr>
			<?php 

			endforeach; ?>
			
		</table>
</div>