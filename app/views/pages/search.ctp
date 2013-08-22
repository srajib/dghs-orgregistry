<!--map of bangladesh-->
<meta charset='utf-8'>
<script type="text/javascript">var NREUMQ=NREUMQ||[];NREUMQ.push(["mark","firstbyte",new Date().getTime()]);</script>
<link href='/favicon.ico' rel='shortcut icon' type='image/x-icon'>
<link href="http://ctas.saltsidecdn.net/assets/application-024a5e94eb2f4b0d52aadaecaeaeae50.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://ctas.saltsidecdn.net/assets/sites/bikroy/common-91d5a09b3924904be34c64ba34e55beb.css" media="screen" rel="stylesheet" type="text/css" />
<link href="http://ctas.saltsidecdn.net/assets/sites/bikroy/bn-00a58616e9cadab9c1ff615c017ee6cd.css" media="screen" rel="stylesheet" type="text/css" />
<script>
    document.documentElement.className += " js";
    document.createElement("time");
    var KvData = {};
</script>
<!--map of bangladesh-->

<!--Tree View-->
<link rel="stylesheet" href="<?php echo $this->base; ?>/jquery.treeview.css" />
<link rel="stylesheet" href="<?php echo $this->base; ?>/screen.css" />

<!--<script src="<?php echo $this->base; ?>/lib/jquery.js" type="text/javascript"></script>-->
<script src="<?php echo $this->base; ?>/lib/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo $this->base; ?>/jquery.treeview.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo $this->base; ?>/demo.js"></script>
<!--Tree View-->

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
    

  <div style="float:left;height:auto;width:200px;">
  

      <?php
   // mysql_connect("103.247.238.173","root","mistestdb");
   // mysql_select_db("org_registry");
   mysql_connect("localhost","root","");
   mysql_select_db("orgnew");
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
				
<div id="mainContentWrapper" style="float:left;width:400px;">
<div style="position:relative;float: none; left: 200px">
<a href="<?php echo $this->base;?>/orgexport.php">Export Excel</a>
<table cellpadding="0" cellspacing="0" border="0" align="center" width="500">

<tr>
<td class="header" style="background-color:#FFF" align="center">
    <img src="<?php echo $this->base; ?>/img/bd_map_new.jpg" width="550" height="720">
</td>
</tr>
    <tr>
        <td class="header" style="background-color:#FFF" align="center">

            <div id="map" class="col">
                 <!--  <img alt=" - " height="428" id="map-imagemap" src="http://ctas.saltsidecdn.net/assets/transparent_map-99eeeddc62cb4b433bc2c891909ca6f5.gif" usemap="#bikroy_map" width="360" />-->
                <div id='map-layer'>
                    <div class='city dhaka'></div>
                    <div class='city chittagong'></div>
                    <div class='city sylhet'></div>
                    <div class='khulna-division'></div>
                    <div class='chittagong-division'></div>
                    <div class='rangpur-division'></div>
                    <div class='barishal-division'></div>
                    <div class='rajshahi-division'></div>
                    <div class='dhaka-division'></div>
                    <div class='sylhet-division'></div>
                </div>
                <map id='bikroy_map' name='bikroy_map'>
                    <area class='sylhet' coords='260,110,322,129' href='#sylhet' shape='rectangle' title='সিলেট'>
                    <area class='chittagong' coords='259,273,355,292' href='#chittagong' shape='rectangle' title='চট্টগ্রাম'>
                    <area class='dhaka' coords='167,176,236,204' href='#dhaka' shape='rectangle' title='Dhaka Division - 30 District'>
                    <area class='khulna-division' coords='70,189,81,180,77,165,83,169,90,168,99,179,114,183,111,194,114,200,118,198,125,209,127,209,131,215,128,218,134,236,148,252,146,316,129,328,104,330,101,324,87,237,96,227,76,223,83,206,70,203,69,189' href='#khulna-division' shape='poly' title='খুলনা বিভাগ'>
                    <area class='chittagong-division' coords='192,235,221,304,256,280,281,374,300,395,322,346,297,189,271,192,256,242,227,202,234,160,221,159,211,184,205,184,188,217,193,235' href='#chittagong-division' shape='poly' title='চট্টগ্রামবিভাগ'>
                    <area class='rangpur-division' coords='44,54,49,28,61,2,103,17,143,31,149,71,144,86,133,91,132,107,110,103,44,51' href='#rangpur-division' shape='poly' title='রংপুর বিভাগ'>
                    <area class='barishal-division' coords='147,288,155,319,171,322,206,308,209,271,188,236,170,243,165,237,152,252,152,274,159,271,146,288' href='#barishal-division' shape='poly' title='বরিশাল বিভাগ'>
                    <area class='rajshahi-division' coords='39,128,43,138,66,151,78,151,81,166,93,162,100,177,117,179,127,187,134,182,134,172,138,154,134,127,129,106,94,92,94,99,63,94,57,119,47,109,38,130' href='#rajshahi-division' shape='poly' title='রাজশাহী বিভাগ'>
                  <!--  <area class='dhaka-division' coords='118,186,114,194,122,197,127,207,133,216,139,229,138,237,149,247,164,236,169,235,172,241,177,236,190,235,191,225,188,206,217,173,217,161,229,152,226,127,222,116,215,117,210,110,210,98,139,83,134,112,140,136,138,182,131,185,115,184' href='#dhaka-division' shape='poly' title='Dhaka Division - 30 District'>
                    --><area class='sylhet-division' coords='238,173,238,166,256,168,272,163,285,146,302,107,276,95,251,100,220,95,209,102,213,117,222,117,227,131,229,155,226,159,237,166' href='#sylhet-division' shape='poly' title='সিলেট বিভাগ'>
                </map>

            </div>

        </td>
    </tr>
</table>
</div>



 </div>