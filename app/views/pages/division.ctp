﻿<!--Tree View-->
<link rel="stylesheet" href="<?php echo $this->base; ?>/jquery.treeview.css" />
<link rel="stylesheet" href="<?php echo $this->base; ?>/screen.css" />

<!--<script src="<?php echo $this->base; ?>/lib/jquery.js" type="text/javascript"></script>-->
<script src="<?php echo $this->base; ?>/lib/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo $this->base; ?>/jquery.treeview.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo $this->base; ?>/demo.js"></script>
<!--Tree View-->

   	 <!-- Heading for lightbox-->
    <link rel="stylesheet" href="<?php echo $this->base; ?>/css/lightbox.css" type="text/css" media="screen" />
	
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js" type="text/javascript"></script>-->
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
<div style="float:left;height:auto;width:200px;">
     <?php
   
    $tree = mysql_query("SELECT * from divisions");
    ?>
    <ul id="navigation">
        <li><a href="<?php echo $this->base; ?>/pages/bangladesh/">Bangladesh</a>
            <ul>
                <?php
                while($row = mysql_fetch_array($tree))
                {

                    ?>
                    <li><a href="<?php echo $this->base; ?>/pages/division/<?php echo $row['division_id']; ?>"><?php echo $row['name']; ?></a>
                        <ul>
                            <?php
                            $divid = $row['division_id'];
                            $dist = mysql_query("SELECT * FROM districts WHERE division_id='$divid'");
                            while($rowdist = mysql_fetch_array($dist))
                            {
                                ?>
                                <li><a href="<?php echo $this->base; ?>/pages/district/<?php echo $rowdist['district_id']; ?>/<?php echo $rowdist['division_id']; ?>"><?php echo $rowdist['name']; ?></a>
                                <ul>
                                	<?php
									$distid = $rowdist['district_id'];
									$upa = mysql_query("SELECT * FROM upazillas WHERE district_id='$distid'");
									while($rowupa = mysql_fetch_array($upa))
									{
										?>
										<li><a href="<?php echo $this->base; ?>/pages/upazilla/<?php echo $rowupa['upazilla_id']; ?>/<?php echo $rowdist['district_id']; ?>/<?php echo $rowdist['division_id']; ?>"><?php echo $rowupa['name']; ?></a>
											
												<!--<li><a href="?1.0.0">Item 1.0.0</a></li>-->
											
										</li>
										<?php
									}
									?>
                                    </ul>
                                    <!--<ul>
                                        <li><a href="?1.0.0">Item 1.0.0</a></li>
                                    </ul>-->
                                </li>
                                <?php
                            }
                            ?>
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
<a href="<?php echo $this->base;?>/divexport.php?div=<?php echo $divID;?>">Export Excel</a>
<?php
foreach($div as $divs):
//$div = mysql_query("SELECT * FROM divisions WHERE division_id='$id'");
//$rowdiv = mysql_fetch_assoc($div);
?>
<h3><a href="<?php echo $this->base; ?>/pages/bangladesh/">Bangladesh</a> <font color="#FF0000">>></font> <a href="<?php echo $this->base; ?>/pages/division/<?php echo $divs['divisions']['division_id']; ?>"><?php echo $divs['divisions']['name']; ?></a></h3>

<table class="tableHeader" id="drafts" cellpadding="0" cellspacing="0" border="1" bordercolor="#eaeaea" align="center" style="font-size:12px;">
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
<td colspan="8" class="header" style="background-color:#FFF">
<h2 class="title" align="center">All Organizations in <?php echo $divs['divisions']['name']; ?> Division</h2>
</td>
</tr> 
<?php
endforeach;
?>                        <tr>
            <th width="150" align="left" nowrap="nowrap">Organization Name</th>
            <th width="100">Image</th>
            <th width="100" nowrap="nowrap">Org. Code</th>
            <th width="150" align="left" nowrap="nowrap">Organization Type</th>
            <!--<th width="20" align="left">Email</th>-->
            <th id="fourth" class="header" align="left" nowrap="nowrap">Division</th>
            <th id="fifth" class="header" align="left" nowrap="nowrap">District</th>
            <th colspan="2" width="70" align="left">Action</th>

        </tr>
<?php


//print_r($AllCode);

//exit;
			$i = 0;
			foreach($DivOrg as $DivOrgs):
			$url ="http://app.dghs.gov.bd/dghshrm/uploads/";
				$class = null;
				if ($i++ % 2 == 0) {
					$class = 'style="background-color:#E0E0E0"';
				}
			
?>
                        <tr>
                           <td height="25" align="left" nowrap="nowrap"><?php echo $DivOrgs['Organization']['title']; ?></td>
                           <td align="center"><?php
						   $path =$url.$DivOrgs['Organization']['email'].'.jpg';
						   $imgurl_check = $path;
							  if (!is_array(@getimagesize($imgurl_check)))
							  {
							   
							   }else{
							?>
							
                           
                           <a href="<?php echo $url.$DivOrgs['Organization']['email'].'.jpg'; ?>" class="lightbox">Image</a>​<!--<img src ="<?php /*echo $url.$AllCodes['organizations']['email'].'.jpg';*/?>" width="30" height="30" />-->
                           <?php
						      }
                           ?></td>
						   <td align="center"><?php echo $DivOrgs['Organization']['organization_code']; ?></td>
						   <td nowrap="nowrap"><?php echo $DivOrgs['OrganizationType']['type_name']?></td>
						   <!--<td><?php echo $DivOrgs['Organization']['email']?></td>-->
						   <td><?php echo $DivOrgs['Division']['name']?></td>
						   <td><?php echo $DivOrgs['District']['name']?></td>
						   <td colspan="2"><a href="<?php echo $this->base; ?>/pages/org_details/<?php echo $DivOrgs['Organization']['organization_id']; ?>">Details</a></td>
                        </tr>
						
						<?php endforeach; ?>
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

