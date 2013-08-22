   	<!-- Heading for lightbox-->
    <link rel="stylesheet" href="<?php echo $this->base; ?>/css/lightbox.css" type="text/css" media="screen" />
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo $this->base; ?>/js/jquery.lightbox.js" type="text/javascript"></script>
	<script>
		$(document).ready(function(){
		    base_url = document.location.href.substring(0, document.location.href.indexOf('index.html'), 0);
		    
			$(".lightbox").lightbox({
			    fitToScreen: true,
			    imageClickClose: false
		    });
		    
		});

	</script>

	<style type="text/css">
		body{ color: #333; font: 13px 'Lucida Grande', Verdana, sans-serif;	}
	</style>
<!-- Heading for lightbox-->


     <link rel="stylesheet" href="<?php echo $this->base;?>/css/jquery.treeview.css" />
	
	<!--<script src="<?php echo $this->base;?>/js/jquery.js" type="text/javascript"></script>-->
	<script src="<?php echo $this->base;?>/js/jquery.cookie.js" type="text/javascript"></script>
	<script src="<?php echo $this->base;?>/js/jquery.treeview.js" type="text/javascript"></script>
	
	<script type="text/javascript">
		$(function() {
			$("#tree").treeview({
				collapsed: true,
				animated: "fast",
				control:"#sidetreecontrol",
				prerendered: true,
				persist: "location"
			});
		})
		
	</script>
    
	<?php 
	mysql_connect("103.247.238.173","root","mistestdb");
    mysql_select_db("org_registry");
    $tree = mysql_query("SELECT * from divisions");
     ?>
  <div style="float:left;height:auto;width:200px;">
	<ul class="treeview" id="tree">
                	
                    <li class="expandable"><div class="hitarea expandable-hitarea"></div><span><a href="<?php echo $this->base; ?>/pages/search/">Bangladesh</span>
                        <ul style="display: none;">
                        <?php
						while($row = mysql_fetch_array($tree))
						{
							
							?>
                            <li class="expandable"><div class="hitarea expandable-hitarea"></div><a href="<?php echo $this->base; ?>/pages/division/<?php echo $row['division_id']; ?>"><?php echo $row['name']; ?></a>
                                <ul style="display: none;">
                                <?php
								$divid = $row['division_id'];
								$dist = mysql_query("SELECT * FROM districts WHERE division_id='$divid'");
								while($rowdist = mysql_fetch_array($dist))
								{
									?>
							
                                    <li class="expandable"><div class="hitarea expandable-hitarea"></div><a href="<?php echo $this->base; ?>/pages/district/<?php echo $rowdist['district_id']; ?>/<?php echo $rowdist['division_id']; ?>"><?php echo $rowdist['name']; ?></a>
                                    <?php
								}
								?>
                                   
                                    </li>
                                </ul>
                            </li>
                            <?php
						}
						?>
                        </ul>
                    </li>
               	</ul>
				</div>
				
				<div id="mainContentWrapper" style="float:left;width:500px;">
<br>
<p><h3><a href="<?php echo $this->base; ?>/pages/search/">Bangladesh</a></h3></p>
<br>
<table class="tableHeader" id="drafts" cellpadding="0" cellspacing="0" border="0" bordercolor="#eaeaea" align="center" width="100%">
<tr>
<td colspan="8" class="header" style="background-color:#FFF">
<h2 class="title" align="center">All Organizations in Bangladesh</h2>
</td>
</tr>
                    
					<tr>
                       <td colspan="8" class="header"><?php echo $this->Session->flash(); ?></td>
                    </tr>
                        <tr>
                        <th style="background-color:#D6ECFA" width="300" align="left">Organization Name</th>
                        <th style="background-color:#D6ECFA" width="200">Image</th>
						<th style="background-color:#D6ECFA" width="100" nowrap="nowrap">Org. Code</th>
						<th style="background-color:#D6ECFA" width="200" align="left">Organization Type</th>
						<th style="background-color:#D6ECFA" width="180" align="left">Email</th>
						<th style="background-color:#D6ECFA" width="100" nowrap="nowrap" align="left">Division Name</th>
						<th style="background-color:#D6ECFA" width="100" nowrap="nowrap" align="left">District Name</th>
						<th colspan="2" style="background-color:#D6ECFA" width="200" align="left">Action</th>
                        
                        </tr>
<?php


//print_r($AllCode);

//exit;
			$i = 0;
			foreach($AllCode as $AllCodes):
			$url ="http://app.dghs.gov.bd/dghshrm/uploads/";	
				$class = null;
				if ($i++ % 2 == 0) {
					$class = 'style="background-color:#E0E0E0"';
				}
			
?>
                        <tr>
                           <td height="35" align="left" nowrap="nowrap"><?php echo $AllCodes['organizations']['title']; ?></td>
                           <td align="center"><a href="<?php echo $url.$AllCodes['organizations']['email'].'.jpg'; ?>" class="lightbox">Image1</a>​<!--<img src ="<?php /*echo $url.$AllCodes['organizations']['email'].'.jpg';*/?>" width="30" height="30" />--></td>
						   <td nowrap="nowrap" align="center"><?php echo $AllCodes['organizations']['organization_code']; ?></td>
						   <td nowrap="nowrap" align="left"><?php echo $AllCodes['organization_type']['name']?></td>
						   <td align="left"><?php echo $AllCodes['organizations']['email']?></td>
						   <td align="left"><?php echo $AllCodes['divisions']['name']?></td>
						   <td align="left"><?php echo $AllCodes['districts']['name']?></td>
						   <td colspan="2" align="left"><a href="<?php echo $this->base; ?>/pages/org_details/<?php echo $AllCodes['organizations']['organization_id']; ?>">Details</a></td> 
                        </tr>
						
						<?php endforeach; ?>
                        <tr>
                            <td colspan="7" class="data" style="text-align: center">&nbsp;&nbsp;[<?php echo $this->Html->link(__('Add User', true), array('action' => 'add')); ?>]&nbsp;&nbsp;<!--<input type="submit" id="btnExcel" class="actions" value="Excel" /><input type="submit" id="btnReset" class="actions" value="Reset" />--></td>
                        </tr>
                    </table>
 
 </div>