<?php error_reporting(0);?>
<script>
  $(document).ready(function() {
    $("#tabs").tabs();
  });
  </script>
  <style>
 #mainContentWrapper ul li a{
    color: #999999;
    text-decoration: none;
	font-weight:bold;
 }
 
  #mainContentWrapper ul li a:hover{
  text-decoration:none;
	font-weight:bold;
  }
  

 
.org_details table tr td {
	 background-color: rgb(240, 243, 247);
	padding: 6px;
	text-align: left;
	vertical-align: top;
	wrap:no-wrap;
}
.org_details tr:nth-child(2n) td {
	background: #ffffff;
}
.org_details table .altrow td {
	background: #f5f5f5;
}
.org_details td.actions {
	white-space: nowrap;
}
.org_details table td.actions a {
	margin: 0px 0px;
	padding:2px 5px;
}

  </style>



	<div style="margin-top:15px;">
		<table class="tableHeader" id="drafts" cellpadding="0" cellspacing="0" width="95%">
			<tr>
				<th width="100%" align="left" colspan="2">Organization Details</th>  
				
			</tr>

	




<?php
			$i = 0;
			
			
			foreach($AllCode as $AllCodes):
				$class = null;
				if ($i++ % 2 == 0) {
					$class = ' class="altrow"';
				}
$url ="http://app.dghs.gov.bd/dghshrm/uploads/";			
?>
<tr valign="top">
					<td width="40%" align="left" valign="top">
					 
				        <?php
						   $path =$url.$AllCode['organizations']['email'].'.jpg';
						   $imgurl_check = $path;
							  if (!is_array(@getimagesize($imgurl_check)))
							  { ?>
					<img src="<?php echo $this->base; ?>/img/no_image.gif" width="500" height="300">

						<?php	   }else{
							?>
					
					<img src ="<?php echo $url.$AllCode['organizations']['email'].'.jpg';?>" width="500" height="300" />
					<?php  } ?>
					</td>
					
	
                    <td>
                    
<div id="tabs">
    <ul>
        <li><a href="#fragment-1" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Basic Information</font></span></a></li>
        <li><a href="#fragment-2" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Contact Information</font></span></a></li>
		<li><a href="#fragment-3" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Facility Information</font></span></a></li>
		<li><a href="#fragment-4" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Ownership</font></span></a></li>
		<li><a href="#fragment-5" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Land Info</font></span></a></li>
		<li><a href="#fragment-6" style="background-color:#D6ECFA"><span><font color="#000000"font size="1.5">Additional Info.</font></span></a></li>
  
	</ul>
	
	
	<div id="fragment-1" style="height:870px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
	  <table style="width:700px;">
	  <tr>
	  <td>
      <?php echo '<b>Organization name:</b> ';?>
	  </td>
	  <td>
	  <?php echo  $AllCodes['organizations']['title']; ?>
	  </td>
	  </tr>
	  <tr>
	  <td> <?php echo '<b>Organization Code: </b> ';?></td>
	  <td>
	  <?php echo $AllCodes['organizations']['organization_code']; ?>
	  </td>
	  </tr>		
 	  <tr>
	  <td> <?php echo '<b>Organization Type: </b> ';?></td>
	  <td>
	  <?php echo  $AllCodes['org_types']['type_name']; ?>
	  </td>
	  </tr>		
      <tr>
	  <td><?php echo '<b>Agency Code: </b>'; ?></td>
	  <td>
	 <?php echo $AllCodes['agency_code']['id']; ?>
	  </td>
	  </tr>	
	  <tr>
	  <td><?php echo '<b>Agency : </b>'; ?></td>
	  <td>
	  <?php echo $AllCodes['agency_code']['agency']; ?>
	  </td>
	  </tr>	
	  <tr>
	  <td><?php echo '<b>Functional Code : </b>'; ?></td>
	  <td>
	  <?php echo $AllCodes['organizational_function']['id']; ?>
	  </td>
	  </tr>
	   <tr>
	  <td><?php echo '<b>Functional Name : </b>'; ?></td>
	  <td>
	  <?php echo $AllCodes['organizational_function']['org_function']; ?>
	  </td>
	  </tr>
	  <tr>
	  <td><?php echo '<b>Organization level : </b>'; ?></td>
	  <td>
	   <?php echo $AllCodes['org_level']['level']; ?>
	  </td>
	  </tr>
	  <tr>
	  <td><?php echo '<b>Health care level : </b>'; ?></td>
	  <td>
	  <?php echo '--'; ?>
	  </td>
	  </tr>
	  <tr>
	  <td><?php echo '<b>Special service / status of the hospital / clinic : </b>'; ?></td>
	  <td>
	  <?php echo '--'; ?>
	  </td>
	  </tr>
	  <tr>
	  <td><?php echo '<b>Year Established : </b>'; ?></td>
	  <td>
	  <?php echo date('d M, Y',strtotime($AllCodes['organizations']['year_established'])); ?>
	  </td>
	  </tr>
	 
	  
	   <tr>
	  <td><?php echo '<b>Urban/rural location : </b>'; ?></td>
	  <td>
	  <?php echo '--'; ?>
	  </td>
	  </tr>
	  
	  <tr>
	  <td><?php echo '<b>Division : </b>'; ?></td>
	  <td>
	  <?php echo $AllCodes['divisions']['name']; ?>
	  </td>
	  </tr>
	  
	   <tr>
	  <td><?php echo '<b>Division Code : </b>'; ?></td>
	  <td>
	  <?php echo $AllCodes['divisions']['division_code']; ?>
	  </td>
	  </tr>
	 
	  <tr>
	  <td><?php echo '<b>District : </b>'; ?></td>
	  <td>
	  <?php echo $AllCodes['districts']['name']; ?>
	  </td>
	  </tr>
	  
	  <tr>
	  <td><?php echo '<b>District Code : </b>'; ?></td>
	  <td>
	  <?php echo $AllCodes['districts']['district_code']; ?>
	  </td>
	  </tr>
	  
	
	  
	  <tr>
	  <td><?php echo '<b>Upazilla:  </b>'; ?></td>
	  <td>
	  <?php echo $AllCodes['upazillas']['name']; ?>
	  </td>
	  </tr>
	  
	  <tr>
	  <td><?php echo '<b>Upazilla Code:  </b>'; ?></td>
	  <td>
	  <?php if((strlen($AllCodes['upazillas']['upazila_code']))<2) { 
	   echo '0'.$AllCodes['upazillas']['upazila_code'];
	  }else {
       echo $AllCodes['upazillas']['upazila_code'];
       }
	?>
	  </td>
	  </tr>
	  
	  <tr>
	  <td><?php echo '<b>Union Code:  </b>'; ?></td>
	  <td>
	  <?php //echo $AllCodes['Union']['union_code']; ?>
	  </td>
	  </tr>
	  
	  <tr>
	  <td><?php echo '<b>Ward:</b>'; ?></td>
	  <td>
	  <?php echo '--'; ?>
	  </td>
	  </tr>
	  
	  <tr>
	  <td><?php echo '<b>Village/ Street:</b>'; ?></td>
	  <td>
	  <?php echo '--'; ?>
	  </td>
	  </tr>
	  
	  <tr>
	  <td><?php echo '<b>House No.:</b>'; ?></td>
	  <td>
	  <?php echo '--'; ?>
	    
	  </td>
	  </tr>
	  
	   <tr>
	  <td>

	  <?php echo '<b>Longitude:</b>'; ?></td>
	  <td>
	 <?php echo $AllCodes['organizations']['log']; ?>
	  
	  </td>
	  </tr>

	  <tr>
	  <td><?php echo '<b>Latitude:</b>'; ?></td>
	  <td>
	   <?php echo $AllCodes['organizations']['lat']; ?>
	  </td>
	  </tr>
	  <?php endforeach; ?>
	 </table>
	     
	
      </div>
    </div>
	<?php  
	/*$db_host="10.10.10.5";
	$db_name="dghs_hrm";
    $db_user="dghshrmDB";
	$db_pswd="dghshrmDB@2012";*/
	
	$db_host="103.247.238.173";
	$db_name="orgnew";
	$db_user="root";
	$db_pswd="mistestdb";
	mysql_connect("103.247.238.173","root","mistestdb");
    mysql_select_db("orgnew");

	$dbh_connection=MYSQL_CONNECT($db_host, $db_user, $db_pswd) OR DIE("Can't connected to database server. Please Contact with WebAdmin.");
	@mysql_select_db($db_name) or die("Can't select database. Please Contact with WebAdmin.");
	
	$facility_info = mysql_query("SELECT lhb_ans_2013.a4,lhb_ans_2013.org_iid,lhb_ans_2013.a3,lhb_ans_2013.a5,lhb_ans_2013.a7,lhb_ans_2013.a8,lhb_ans_2013.a14,s_elec.source_electricity,a_elec.source,w_s.water_supply,t_t.toilet_type,t_a_ma.toilet_adequacy,t_a_fe.toilet_adequacy,autoc.autoclave,waste_dispo.waste_disposal,spec_service.special_services 
	    FROM lhb_ans_2013
		LEFT JOIN source_electricity AS s_elec ON s_elec.source_electricity_id=lhb_ans_2013.a820 
		LEFT JOIN alter_elect AS a_elec ON a_elec.id=lhb_ans_2013.a821 
		LEFT JOIN water_supply AS w_s ON w_s.water_supply_id=lhb_ans_2013.a822
		LEFT JOIN toilet_type AS t_t ON t_t.toilet_type_id=lhb_ans_2013.a823
		LEFT JOIN toilet_adequacy AS t_a_ma ON t_a_ma.toilet_adequacy_id=lhb_ans_2013.a824
		LEFT JOIN toilet_adequacy AS t_a_fe ON t_a_fe.toilet_adequacy_id=lhb_ans_2013.a825
		LEFT JOIN autoclave AS autoc ON autoc.autoclave_id=lhb_ans_2013.a826
		LEFT JOIN waste_disposal AS waste_dispo ON waste_dispo.waste_disposal_id=lhb_ans_2013.a827
		LEFT JOIN special_services AS spec_service ON spec_service.special_services_id=lhb_ans_2013.a819
		WHERE lhb_ans_2013.org_iid='$id'");
		
		//$id=$id;
		
		if(mysql_num_rows($facility_info)>0)
		{
		
		while($rowfac= mysql_fetch_array($facility_info))
        { 
	
	?>
	
	
	 
	 
	  
  
		
	<div id="fragment-2" style="height:670px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
	    <table style="width:700px;">
		  <tr>
		  <td>
		  <?php echo '<b>Mailing Address:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		   <tr>
		  <td>
		  <?php echo '<b>Land Phone1:</b> ';?>
		  </td>
		  <td>
		   <?php if(!empty($rowfac['a4'])){echo $rowfac['a4'];} else { }?>
		  </td>
		  </tr>
		  
		   <tr>
		  <td>
		  <?php echo '<b>Land Phone2:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Land Phone3:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		 
		  <tr>
		  <td>
		  <?php echo '<b>Mobile Phone1:</b> ';?>
		  </td>
		  <td>
		  <?php  if(!empty($rowfac['a3'])){ echo '0'.$rowfac['a3'];} ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Mobile Phone2:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Mobile Phone3:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		  
		   <tr>
		  <td>
		  <?php echo '<b>Email1:</b> ';?>
		  </td>
		  <td>
		  <?php echo strtolower($AllCode[0]['organizations']['email']); ?>
		  </td>
		  </tr>
		  
	      <tr>
		  <td>
		  <?php echo '<b>Email2:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>
		  
		   <tr>
		  <td>
		  <?php echo '<b>Email3:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Fax1:</b> ';?>
		  </td>
		  <td>
		  <?php  if(!empty($rowfac['a5'])){echo $rowfac['a5'];} ?>
		  </td>
		  </tr>
	      
		  <tr>
		  <td>
		  <?php echo '<b>Fax2:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Fax3:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>
          
          <tr>
		  <td>
		  <?php echo '<b>Website1:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	

          <tr>
		  <td>
		  <?php echo '<b>Website2:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>			  
			
		  <tr>
		  <td>
		  <?php echo '<b>Website3:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
			
	        <tr>
		  <td>
		  <?php echo '<b>Facebook:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
			
	      <tr>
		  <td>
		  <?php echo '<b>Google+:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
			
			 <tr>
		  <td>
		  <?php echo '<b>Twitter:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
			
		 <tr>
		  <td>
		  <?php echo '<b>Youtube:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
	
		</table>
       </div>
    </div>
	

	
	<div id="fragment-3" style="height:670px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
	   <table style="width:700px;">
             <tr>
			  <td>
			  <?php echo '<b>Main source of electricity:</b> ';?>
			  </td>
			  <td>
			  <?php    if(!empty($rowfac['source_electricity'])){echo $rowfac['source_electricity'];} ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Alternate source of electricity:</b> ';?>
			  </td>
			  <td>
			  <?php  if(!empty($rowfac['source'])){echo $rowfac['source'];} ?>
			  </td>
			 </tr>
			 
			 <tr>
			  <td>
			  <?php echo '<b>Main water supply:</b> ';?>
			  </td>
			  <td>
			  <?php  if(!empty($rowfac['water_supply'])){echo $rowfac['water_supply'];}?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Alternate water supply:</b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
		     
			   <tr>
			  <td>
			  <?php  echo '<b>Toilet type:</b> ';?>
			  </td>
			  <td>
			   <?php   if(!empty($rowfac['toilet_type'])){echo $rowfac['toilet_type'];}?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>Toilet adequacy:</b> ';?>
			  </td>
			  <td>
			  <?php if(!empty($rowfac['toilet_adequacy'])){echo $rowfac['toilet_adequacy'];} ?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>Fuel source:</b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>Laundry system:</b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>Autoclave system:</b> ';?>
			  </td>
			  <td>
			  <?php if(!empty($rowfac['autoclave'])){echo $rowfac['autoclave'];}else { echo '--';} ?>
			  </td>
			 </tr>
		    <tr>
			  <td>
			  <?php echo '<b>Waste disposal:</b> ';?>
			  </td>
			  <td>
			  <?php if(!empty($rowfac['waste_disposal'])){echo $rowfac['waste_disposal'];}else { echo '--';} ?>
			  </td>
			 </tr>
		        <tr>
			  <td>
			  <?php echo '<b>Sanctioned vehicles & office equipment</b> ';?>
			  </td>
			  <td>
			<a href="http://app.dghs.gov.bd/orgregistrynew/pages/officevehicle/<?php echo $rowfac['org_iid'];?>">Please Click Here</a>
			  </td>
			 </tr>
		     <tr>
			  <td>
			  <?php echo '<b>Sanctioned Bed No:</b> ';?>
			  </td>
			  <td>
			  <?php if(!empty($rowfac['a14'])){echo $rowfac['a14'];}else { echo '--';} ?>
			  </td>
			 </tr>
		     <tr>
			  <td>
			  <?php echo '<b>Other miscellaneous issues:</b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			
		</table>
       
       </div>
    </div>
	
	
		
	<div id="fragment-4" style="height:870px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
		  <table style="width:700px;">
             <tr>
			  <td>
			  <?php echo '<b>Special service / status of the hospital / clinic: </b> ';?>
			  </td>
			  <td>
			  <?php if(!empty($rowfac['special_services'])){echo $rowfac['special_services'];}else {}?>
			  </td>
			 </tr>
		      <tr>
			  <td>
			  <?php echo '<b>Permission/Approval/License information: </b>';?>
			  </td>
			  <td>
			  <?php //echo '--'; ?>
			  </td>
			 </tr>
		
            <tr>
			  <td>
			  <?php echo '<b> Date of Permission/Approval/License information: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			  <tr>
			  <td>
			  <?php echo '<b> Permission/Approval/License Type: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			   <tr>
			  <td>
			  <?php echo '<b>  Permission/
Approval/
License
Authority: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			
			 	 <tr>
			  <td>
			  <?php echo '<b> 	 
			 Permission/
Approval/
License No. </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 <tr>
			  <td>
			  <?php echo '<b> 	 
			Next renewal
Date </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
		 <tr>
			  <td>
			  <?php echo '<b> 	 
	Conditions
given for
permission/
approval/
license or
renewal
thereof </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			</table>
       </div>
    </div>
	
	
	

	<div id="fragment-5" style="height:870px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
	    <table style="width:700px;">
             <tr>
			  <td>
			  <?php echo '<b>Land Information: </b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 <tr>
			  <td>
			  <?php echo '<b>Land size (in acre): </b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			  <tr>
			  <td>
			  <?php echo '<b>Mouza name: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			   <tr>
			  <td>
			  <?php echo '<b>Geocode of Mouza: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			   <tr>
			  <td>
			  <?php echo '<b>JL No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>SS Dag No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>RS Dag No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
		      <tr>
			  <td>
			  <?php echo '<b>Khatian No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
		      <tr>
			  <td>
			  <?php echo '<b>Mutation No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			 
			   <tr>
			  <td>
			  <?php echo '<b>Other land information.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			 </tr>
			  </td>
			 </table>
			
			
       </div>
    </div>
	
	
	
		
	<div id="fragment-6" style="height:870px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
	   
	     <table style="width:700px;">
	   	   <tr>
			  <td>
			  <?php echo '<b>Name of CHCP.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Contact no of CHCP: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<strong><span style="color:#0000ff;">Community group information: </span></strong>';?>
			  </td>
			  <td>
			  <?php ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Name of Chairman(CG):</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Contact No:</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			  
			  <tr>
			  <td>
			  <?php echo '<b><span style="color:#0000ff;">Community Support group information :</span></b>';?>
			  </td>
			  <td>
			  <?php echo ' '; ?>
			  </td>
			 </tr>
			 
			 
			 <tr>
			  <td>
			  <?php echo '<b>Name of Chairman (CSG-1):</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			 <tr>
			  <td>
			  <?php echo '<b>Contact No:</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			 <tr>
			  <td>
			  <?php echo '<b>Name of Chairman (CSG-2):</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			 <tr>
			  <td>
			  <?php echo '<b>Contact No:</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 </table>
			 </div>
			 </div>
			 <?php }} else { ?>
			 
			  <div id="fragment-2" style="height:670px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
	    <table style="width:700px;">
		  <tr>
		  <td>
		  <?php echo '<b>Mailing Address:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		   <tr>
		  <td>
		  <?php echo '<b>Land Phone1:</b> ';?>
		  </td>
		  <td>
		   <?php //if(!empty($rowfac['a4'])){echo $rowfac['a4'];} else { }?>
		  </td>
		  </tr>
		  
		   <tr>
		  <td>
		  <?php echo '<b>Land Phone2:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Land Phone3:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		 
		  <tr>
		  <td>
		  <?php echo '<b>Mobile Phone1:</b> ';?>
		  </td>
		  <td>
		  <?php  //if(!empty($rowfac['a3'])){ echo '0'.$rowfac['a3'];} ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Mobile Phone2:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Mobile Phone3:</b> ';?>
		  </td>
		  <td>
		  <?php echo  '--'; ?>
		  </td>
		  </tr>
		  
		   <tr>
		  <td>
		  <?php echo '<b>Email1:</b> ';?>
		  </td>
		  <td>
		  <?php echo $AllCode[0]['organizations']['email']; ?>
		  </td>
		  </tr>
		  
	      <tr>
		  <td>
		  <?php echo '<b>Email2:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>
		  
		   <tr>
		  <td>
		  <?php echo '<b>Email3:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Fax1:</b> ';?>
		  </td>
		  <td>
		  <?php   echo '--';//if(!empty($rowfac['a5'])){echo $rowfac['a5'];} ?>
		  </td>
		  </tr>
	      
		  <tr>
		  <td>
		  <?php echo '<b>Fax2:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>
		  
		  <tr>
		  <td>
		  <?php echo '<b>Fax3:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>
          
          <tr>
		  <td>
		  <?php echo '<b>Website1:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	

          <tr>
		  <td>
		  <?php echo '<b>Website2:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>			  
			
		  <tr>
		  <td>
		  <?php echo '<b>Website3:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
			
	        <tr>
		  <td>
		  <?php echo '<b>Facebook:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
			
	      <tr>
		  <td>
		  <?php echo '<b>Google+:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
			
			 <tr>
		  <td>
		  <?php echo '<b>Twitter:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
			
		 <tr>
		  <td>
		  <?php echo '<b>Youtube:</b> ';?>
		  </td>
		  <td>
		  <?php echo '--'; ?>
		  </td>
		  </tr>	
		</table>
       </div>
    </div>
	
	<div id="fragment-3" style="height:670px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
	   <table style="width:700px;">
             <tr>
			  <td>
			  <?php echo '<b>Main source of electricity:</b> ';?>
			  </td>
			  <td>
			  <?php  //  if(!empty($rowfac['source_electricity'])){echo $rowfac['source_electricity'];} ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Alternate source of electricity:</b> ';?>
			  </td>
			  <td>
			  <?php  //if(!empty($rowfac['source'])){echo $rowfac['source'];} ?>
			  </td>
			 </tr>
			 
			 <tr>
			  <td>
			  <?php echo '<b>Main water supply:</b> ';?>
			  </td>
			  <td>
			  <?php // if(!empty($rowfac['water_supply'])){echo $rowfac['water_supply'];}?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Alternate water supply:</b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
		     
			   <tr>
			  <td>
			  <?php  echo '<b>Toilet type:</b> ';?>
			  </td>
			  <td>
			   <?php  // if(!empty($rowfac['toilet_type'])){echo $rowfac['toilet_type'];}?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>Toilet adequacy:</b> ';?>
			  </td>
			  <td>
			  <?php //if(!empty($rowfac['toilet_adequacy'])){echo $rowfac['toilet_adequacy'];} ?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>Fuel source:</b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>Laundry system:</b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>Autoclave system:</b> ';?>
			  </td>
			  <td>
			  <?php //if(!empty($rowfac['autoclave'])){echo $rowfac['autoclave'];}else { echo '--';} ?>
			  </td>
			 </tr>
		    <tr>
			  <td>
			  <?php echo '<b>Waste disposal:</b> ';?>
			  </td>
			  <td>
			  <?php // if(!empty($rowfac['waste_disposal'])){echo $rowfac['waste_disposal'];}else { echo '--';} ?>
			  </td>
			 </tr>
		        <tr>
			  <td>
			  <?php echo '<b>Sanctioned vehicles & office equipment</b> ';?>
			  </td>
			  <td>
			<a href="http://app.dghs.gov.bd/orgregistrynew/pages/officevehicle/<?php echo $id;?>">Please Click Here</a>
			  </td>
			 </tr>
		     <tr>
			  <td>
			  <?php echo '<b>Sanctioned Bed No:</b> ';?>
			  </td>
			  <td>
			  <?php //if(!empty($rowfac['a14'])){echo $rowfac['a14'];}else { echo '--';} ?>
			  </td>
			 </tr>
		     <tr>
			  <td>
			  <?php echo '<b>Other miscellaneous issues:</b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			
		</table>
       
       </div>
    </div>
	
		<div id="fragment-4" style="height:870px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
		  <table style="width:700px;">
             <tr>
			  <td>
			  <?php echo '<b>Special service / status of the hospital / clinic: </b> ';?>
			  </td>
			  <td>
			  <?php //if(!empty($rowfac['special_services'])){echo $rowfac['special_services'];}else {}?>
			  </td>
			 </tr>
		      <tr>
			  <td>
			  <?php echo '<b>Permission/Approval/License information: </b>';?>
			  </td>
			  <td>
			  <?php //echo '--'; ?>
			  </td>
			 </tr>
		
            <tr>
			  <td>
			  <?php echo '<b> Date of Permission/Approval/License information: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			  <tr>
			  <td>
			  <?php echo '<b> Permission/Approval/License Type: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			   <tr>
			  <td>
			  <?php echo '<b>  Permission/
Approval/
License
Authority: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			
			 	 <tr>
			  <td>
			  <?php echo '<b> 	 
			 Permission/
Approval/
License No. </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 <tr>
			  <td>
			  <?php echo '<b> 	 
			Next renewal
Date </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
		 <tr>
			  <td>
			  <?php echo '<b> 	 
	Conditions
given for
permission/
approval/
license or
renewal
thereof </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			</table>
       </div>
    </div>
	<div id="fragment-5" style="height:870px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
	    <table style="width:700px;">
             <tr>
			  <td>
			  <?php echo '<b>Land Information: </b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 <tr>
			  <td>
			  <?php echo '<b>Land size (in acre): </b> ';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			  <tr>
			  <td>
			  <?php echo '<b>Mouza name: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			   <tr>
			  <td>
			  <?php echo '<b>Geocode of Mouza: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			   <tr>
			  <td>
			  <?php echo '<b>JL No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			    <tr>
			  <td>
			  <?php echo '<b>CS Dag No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			   <tr>
			  <td>
			  <?php echo '<b>SS Dag No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			   <tr>
			  <td>
			  <?php echo '<b>RS Dag No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
		      <tr>
			  <td>
			  <?php echo '<b>Khatian No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
		      <tr>
			  <td>
			  <?php echo '<b>Mutation No.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			 
			   <tr>
			  <td>
			  <?php echo '<b>Other land information.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			 </tr>
			  </td>
			 </table>
			
			
       </div>
    </div>
	
	
	
	<div id="fragment-6" style="height:870px;" class="org_details">
	  <div style="margin-left:10px;float:left;width="100%" class="org_details">
	   
	   <?php if($AllCodes['organizations']['org_type_id']=='39'){?>
	   
	     <table style="width:700px;">
	   	   <tr>
			  <td>
			  <?php echo '<b>Name of CHCP.: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Contact no of CHCP: </b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<strong><span style="color:#0000ff;">Community group information: </span></strong>';?>
			  </td>
			  <td>
			  <?php ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Name of Chairman(CG):</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			  <tr>
			  <td>
			  <?php echo '<b>Contact No:</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			  
			  <tr>
			  <td>
			  <?php echo '<b><span style="color:#0000ff;">Community Support group information :</span></b>';?>
			  </td>
			  <td>
			  <?php echo ' '; ?>
			  </td>
			 </tr>
			 
			 
			 <tr>
			  <td>
			  <?php echo '<b>Name of Chairman (CSG-1):</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			 <tr>
			  <td>
			  <?php echo '<b>Contact No:</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			 <tr>
			  <td>
			  <?php echo '<b>Name of Chairman (CSG-2):</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
			 
			 <tr>
			  <td>
			  <?php echo '<b>Contact No:</b>';?>
			  </td>
			  <td>
			  <?php echo '--'; ?>
			  </td>
			 </tr>
	
	<?php } else { echo '';}
	
	}?>
	   </table>
       </div>
    </div>

	
</div>
</td>
</tr>
</table>

			
		</table>
</div>