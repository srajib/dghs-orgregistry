<!--<a href="<?php echo $this->base;?>/divexport.php?div=<?php echo $AllCode[0]['Organization']['division'];?>">Export CSV</a>-->

<div style="margin-top:15px;">
		<table class="tableHeader" id="drafts" cellpadding="0" cellspacing="0" width="80%">
            <tr>
                <td colspan="8" class="header" style="background-color:#FFF" align="center">
                    <?php
                    echo $this->Paginator->counter(array(
                        'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
                    ));

                    ?>
                </td>
            </tr>
			<tr>
				<th width="50" align="center">SL</th>  
				
				<th width="200" align="center"><?php echo 'Organization Name';?></th>
				<th width="200" align="center" nowrap><?php echo 'Org. Code';?></th>
				<th width="200" align="center"><?php echo 'Division';?></th>
				<th width="200" align="center" nowrap><?php echo 'District';?></th>

			</tr>
<?php
echo"<pre>";
			$i = 0;
			foreach($AllCode as $AllCodes):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
			
?>
<tr>
					<td width="20px;" align="center"><?php echo $i.'.'; ?></td>
					    <td width="20px;" align="center"><?php echo $AllCodes['Organization']['title']; ?></td>
						<td width="20px;" align="center"><?php echo $AllCodes['Organization']['organization_code']; ?></td>
						<td width="20px;" align="center"><?php echo $AllCodes['Division']['name']; ?></td>
						<td width="20px;" align="center"><?php echo $AllCodes['District']['name']; ?></td>

				</tr>
			<?php 

			endforeach; ?>

            <tr>
                <td colspan="8" class="header" style="background-color:#FFF" align="center">
                    <div class="paging">
                        <?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
                        | 	<?php echo $paginator->numbers();?>
                        <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
                    </div>
                </td>
            </tr>
			
		</table>

</div>
<!--
<div class="paging">
		<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $paginator->numbers();?>
		<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
	</div>-->