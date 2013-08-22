<div style="margin-top:15px;">
		<table class="tableHeader" id="drafts" cellpadding="0" cellspacing="0" width="80%">
		                        <tr>
                        <th id="first" class="header" nowrap="nowrap">Organization Name</th>
                        <th id="first" class="header" nowrap="nowrap">Org. Image</th>
						<th id="second" class="header" nowrap="nowrap">Org. Code</th>
						<th id="third" class="header" nowrap="nowrap">Organization Type</th>
						<!--<th id="third" class="header">Email</th>-->
						<th id="fourth" class="header" nowrap="nowrap">Division Name</th>
						<th id="fifth" class="header" nowrap="nowrap">District Name</th>
						<th colspan="2" class="header">Action</th>
                        
                        </tr>
<?php
echo"<pre>";
			$i = 0;
		
			foreach($AllCode as $AllCodes):
				$url ="http://app.dghs.gov.bd/dghshrm/uploads/";	
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			
?>

				    <tr>
                           <td height="25" align="left" nowrap="nowrap"><?php echo $AllCodes['organizations']['title']; ?></td>
                           <td align="center"><?php
						   $path =$url.$AllCodes['organizations']['email'].'.jpg';
						   $imgurl_check = $path;
							  if (!is_array(@getimagesize($imgurl_check)))
							  {
							   
							   }else{
							?>
							
                           
                           <a href="<?php echo $url.$AllCodes['organizations']['email'].'.jpg'; ?>" class="lightbox">Image</a><!--<img src ="<?php /*echo $url.$AllCodes['organizations']['email'].'.jpg';*/?>" width="30" height="30" />-->
                           <?php
						      }
                           ?></td>
						   <td align="center"><?php echo $AllCodes['organizations']['organization_code']; ?></td>
						   <td nowrap="nowrap"><?php echo $AllCodes['org_types']['type_name']?></td>
						  <!-- <td><?php echo $AllCodes['organizations']['email']?></td>-->
						   <td ><?php echo $AllCodes['divisions']['name']?></td>
						   <td ><?php echo $AllCodes['districts']['name']?></td>
						   <td colspan="2"><a href="<?php echo $this->base; ?>/pages/org_details/<?php echo $AllCodes['organizations']['organization_id']; ?>">Details</a></td>
                        </tr>
				
			<?php 

			endforeach; ?>
			
		</table>

</div>
<!--
<div class="paging">
		<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $paginator->numbers();?>
		<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
	</div>-->