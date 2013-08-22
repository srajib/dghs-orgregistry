<?php   $id=$_GET['id'];
		$db_host="10.10.10.5";
		$db_name="dghs_hrm";
		$db_user="dghshrmDB";
		$db_pswd="dghshrmDB@2012";
	
		$dbh_connection=MYSQL_CONNECT($db_host, $db_user, $db_pswd) OR DIE("Can't connected to database server. Please Contact with WebAdmin.");
		@mysql_select_db($db_name) or die("Can't select database. Please Contact with WebAdmin.");	
?>
<div>                        <!--  <a href="" onClick="window.print()">Print</a>-->
<?php 
$facility_info = mysql_query("SELECT * FROM lhb_ans_2013 WHERE org_iid='$id'");
if(mysql_num_rows($facility_info)<1)
{
echo 'No Record found';
}

while($rowfac= mysql_fetch_array($facility_info))
        { 
		?>
<p class="f_legend">Sanctioned Vehicles & Office Equipment</p>	
                                        <table class="table table-striped table-bordered">
                                        <thead>
                                          <tr>
                                            <th rowspan="3">Equipment</th>
                                            <th colspan="3">&nbsp;</th>
                                            <th rowspan="3">Not installed (No.)</th>
                                          </tr>
                                          <tr>
                                            <th rowspan="2">Fanctional (No.)</th>
                                            <th colspan="2">Non-functional</th>
                                          </tr>
                                          <tr>
                                            <th>Repairable (No.)</th>
                                            <th>Non-Repairable (No.)</th>
                                          </tr>
                                                                                      
                                            <tr>
                                              <th colspan="5">Radiology equipment</th>
                                            </tr>
                                          </thead>
                                            <tbody><tr>
                                              <td>X-ray machine (100 mA)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a451'];?>" name="a451" class="span12 onlynumber ui-spinner-box" id="a295" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a452'];?>" name="a452" class="span12 onlynumber ui-spinner-box" id="a296" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a453'];?>" name="a453" class="span12 onlynumber ui-spinner-box" id="a297" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a454'];?>" name="a454" class="span12 onlynumber ui-spinner-box" id="a" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (300 mA)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a455'];?>" name="a455" class="span12 onlynumber ui-spinner-box" id="a299" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a456'];?>" name="a456" class="span12 onlynumber ui-spinner-box" id="a300" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a457'];?>" name="a457" class="span12 onlynumber ui-spinner-box" id="a301" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a458'];?>" name="a458" class="span12 onlynumber ui-spinner-box" id="a3" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (500 mA)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a459'];?>" name="a459" class="span12 onlynumber ui-spinner-box" id="a303" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a460'];?>" name="a460" class="span12 onlynumber ui-spinner-box" id="a304" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a461'];?>" name="a461" class="span12 onlynumber ui-spinner-box" id="a305" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a462'];?>" name="a462" class="span12 onlynumber ui-spinner-box" id="a270" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (digital)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a463'];?>" name="a463" class="span12 onlynumber ui-spinner-box" id="a307" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a464'];?>" name="a464" class="span12 onlynumber ui-spinner-box" id="a308" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a465'];?>" name="a465" class="span12 onlynumber ui-spinner-box" id="a309" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a466'];?>" name="a466" class="span12 onlynumber ui-spinner-box" id="a294" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>X-ray machine (portable)</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a467'];?>" name="a467" class="span12 onlynumber ui-spinner-box" id="a311" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a468'];?>" name="a468" class="span12 onlynumber ui-spinner-box" id="a312" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a469'];?>" name="a469" class="span12 onlynumber ui-spinner-box" id="a313" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a470'];?>" name="a470" class="span12 onlynumber ui-spinner-box" id="a298" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>Dental X-ray unit</td>
                                              <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a471'];?>" name="a471" class="span12 onlynumber ui-spinner-box" id="a306" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a472'];?>" name="a472" class="span12 onlynumber ui-spinner-box" id="a312" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a473'];?>" name="a473" class="span12 onlynumber ui-spinner-box" id="a313" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a474'];?>" name="a474" class="span12 onlynumber ui-spinner-box" id="a298" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>Spiral CT Scan</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a475'];?>" name="a475" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a476'];?>" name="a476" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a477'];?>" name="a477" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a478'];?>" name="a478" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>C-arm</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a479'];?>" name="a479" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a480'];?>" name="a480" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a481'];?>" name="a481" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a482'];?>" name="a482" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>Mamogram machine</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a483'];?>" name="a483" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a484'];?>" name="a484" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a485'];?>" name="a485" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a486'];?>" name="a486" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                            <tr>
                                              <td>Dehumidifier</td>
                                           	    <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a487'];?>" name="a487" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                               	  <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a488'];?>" name="a488" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a489'];?>" name="a489" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a490'];?>" name="a490" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                            </tr>
                                              <tr>
                                                <td>MRI machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a491'];?>" name="a491" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a492'];?>" name="a492" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a493'];?>" name="a493" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a494'];?>" name="a494" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Ultrasonogram machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a495'];?>" name="a495" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a496'];?>" name="a496" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a497'];?>" name="a497" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a498'];?>" name="a498" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Anesthesiology/surgical equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Anesthesia machine with ventilator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a499'];?>" name="a499" class="span12 onlynumber ui-spinner-box" id="a295" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a500'];?>" name="a500" class="span12 onlynumber ui-spinner-box" id="a296" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a501'];?>" name="a501" class="span12 onlynumber ui-spinner-box" id="a297" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a502'];?>" name="a502" class="span12 onlynumber ui-spinner-box" id="a" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Anesthesia machine without ventilator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a503'];?>" name="a503" class="span12 onlynumber ui-spinner-box" id="a299" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a504'];?>" name="a504" class="span12 onlynumber ui-spinner-box" id="a300" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a505'];?>" name="a505" class="span12 onlynumber ui-spinner-box" id="a301" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a506'];?>" name="a506" class="span12 onlynumber ui-spinner-box" id="a3" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Autoclave</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a507'];?>" name="a507" class="span12 onlynumber ui-spinner-box" id="a303" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a508'];?>" name="a508" class="span12 onlynumber ui-spinner-box" id="a304" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a509'];?>" name="a509" class="span12 onlynumber ui-spinner-box" id="a305" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a510'];?>" name="a510" class="span12 onlynumber ui-spinner-box" id="a270" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Electric cautery machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a511'];?>" name="a511" class="span12 onlynumber ui-spinner-box" id="a307" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a512'];?>" name="a512" class="span12 onlynumber ui-spinner-box" id="a308" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a513'];?>" name="a513" class="span12 onlynumber ui-spinner-box" id="a309" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a514'];?>" name="a514" class="span12 onlynumber ui-spinner-box" id="a294" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Diathermy machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a515'];?>" name="a515" class="span12 onlynumber ui-spinner-box" id="a311" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a516'];?>" name="a516" class="span12 onlynumber ui-spinner-box" id="a312" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a517'];?>" name="a517" class="span12 onlynumber ui-spinner-box" id="a313" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a518'];?>" name="a518" class="span12 onlynumber ui-spinner-box" id="a298" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Operating microscope</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a519'];?>" name="a519" class="span12 onlynumber ui-spinner-box" id="a306" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a520'];?>" name="a520" class="span12 onlynumber ui-spinner-box" id="a312" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a521'];?>" name="a521" class="span12 onlynumber ui-spinner-box" id="a313" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a522'];?>" name="a522" class="span12 onlynumber ui-spinner-box" id="a298" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Ceiling mounting OT Light</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a523'];?>" name="a523" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a524'];?>" name="a524" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a525'];?>" name="a525" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a526'];?>" name="a526" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Portable OT Light</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a527'];?>" name="a527" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a528'];?>" name="a528" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a529'];?>" name="a529" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a530'];?>" name="a530" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Fracture table</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a531'];?>" name="a531" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a532'];?>" name="a532" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a533'];?>" name="a533" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a534'];?>" name="a534" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Hydrolic OT Table</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a535'];?>" name="a535" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a536'];?>" name="a536" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a536'];?>" name="a537" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a538'];?>" name="a538" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Sterilizer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a539'];?>" name="a539" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a540'];?>" name="a540" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a541'];?>" name="a541" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a542'];?>" name="a542" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Sucker machine (electric)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a543'];?>" name="a543" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a544'];?>" name="a544" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a545'];?>" name="a545" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a546'];?>" name="a546" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Ventilator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a547'];?>" name="a547" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a548'];?>" name="a548" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a549'];?>" name="a549" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a550'];?>" name="a550" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Cardiology equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Coronary angiogram machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a551'];?>" name="a551" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a552'];?>" name="a552" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a553'];?>" name="a553" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a554'];?>" name="a554" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Debrililator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a555'];?>" name="a555" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a556'];?>" name="a556" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a557'];?>" name="a557" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a558'];?>" name="a558" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>ECG machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a559'];?>" name="a559" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a560'];?>" name="a560" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a561'];?>" name="a561" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a562'];?>" name="a562" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Echocardiogram machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a563'];?>" name="a563" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a564'];?>" name="a564" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a565'];?>" name="a565" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a566'];?>" name="a566" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Cardiac monitor</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a567'];?>" name="a567" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a568'];?>" name="a568" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a569'];?>" name="a569" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a570'];?>" name="a570" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Holter monitor</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a571'];?>" name="a571" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a572'];?>" name="a572" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a573'];?>" name="a573" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a574'];?>" name="a574" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Nebulizer machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a575'];?>" name="a575" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a576'];?>" name="a576" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a577'];?>" name="a577" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a578'];?>" name="a578" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Pulse oximeter</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a579'];?>" name="a579" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a580'];?>" name="a580" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a581'];?>" name="a581" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a582'];?>" name="a582" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Dental equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Dental unit</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a583'];?>" name="a583" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a584'];?>" name="a584" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a585'];?>" name="a585" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a586'];?>" name="a586" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Gastroeneterology equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Endoscopy machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a587'];?>" name="a587" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a588'];?>" name="a588" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a589'];?>" name="a589" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a590'];?>" name="a590" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Laparoscopic machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a591'];?>" name="a591" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a592'];?>" name="a592" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a593'];?>" name="a593" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a594'];?>" name="a594" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Lab equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Biochemical auto-analyzer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a595'];?>" name="a595" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a596'];?>" name="a596" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a597'];?>" name="a597" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a598'];?>" name="a598" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Centrifuge machine (electric)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a599'];?>" name="a599" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a600'];?>" name="a600" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a601'];?>" name="a601" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a602'];?>" name="a602" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Colorimeter</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a603'];?>" name="a603" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a604'];?>" name="a604" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a605'];?>" name="a605" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a606'];?>" name="a606" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Electrolyte analyzer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a607'];?>" name="a607" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a608'];?>" name="a608" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a609'];?>" name="a609" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a610'];?>" name="a610" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>ELISA machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a611'];?>" name="a611" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a612'];?>" name="a612" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a613'];?>" name="a613" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a614'];?>" name="a614" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Gas analyzer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a615'];?>" name="a615" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a616'];?>" name="a616" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a617'];?>" name="a617" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a618'];?>" name="a618" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Hormone analyzer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a619'];?>" name="a619" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a620'];?>" name="a620" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a621'];?>" name="a621" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a622'];?>" name="a622" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Blood cell counter</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a623'];?>" name="a623" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a624'];?>" name="a624" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a625'];?>" name="a625" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a626'];?>" name="a626" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Microscope (binocular)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a627'];?>" name="a627" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a628'];?>" name="a628" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a629'];?>" name="a629" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a630'];?>" name="a630" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Obstetric equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Fetal monitor</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a631'];?>" name="a631" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a632'];?>" name="a632" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a633'];?>" name="a633" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a634'];?>" name="a634" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Ophthalmic equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>FACO machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a635'];?>" name="a635" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a636'];?>" name="a636" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a637'];?>" name="a637" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a638'];?>" name="a638" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Retinoscope</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a639'];?>" name="a639" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a640'];?>" name="a640" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a641'];?>" name="a641" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a642'];?>" name="a642" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Pediatric equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Baby incubator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a643'];?>" name="a643" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a644'];?>" name="a644" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a645'];?>" name="a645" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a646'];?>" name="a646" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Phototherapy unit</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a647'];?>" name="a647" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a648'];?>" name="a648" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a649'];?>" name="a649" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a650'];?>" name="a650" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Blood bank equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Blood bag centrifuge</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a651'];?>" name="a651" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a652'];?>" name="a652" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a653'];?>" name="a653" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a654'];?>" name="a654" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Laminar flow hood</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a655'];?>" name="a655" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a656'];?>" name="a656" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a657'];?>" name="a657" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a658'];?>" name="a658" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>pH meter</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a659'];?>" name="a659" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a660'];?>" name="a660" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a661'];?>" name="a661" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a662'];?>" name="a662" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Hemoglobin photometer</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a663'];?>" name="a663" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a664'];?>" name="a664" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a665'];?>" name="a665" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a666'];?>" name="a666" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Blood bank refrigerator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a667'];?>" name="a667" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a668'];?>" name="a668" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a669'];?>" name="a669" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a670'];?>" name="a670" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Blood plasma separating machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a671'];?>" name="a671" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a672'];?>" name="a672" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a673'];?>" name="a673" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a674'];?>" name="a674" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Platelet separating machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a675'];?>" name="a675" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a676'];?>" name="a676" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a677'];?>" name="a677" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a678'];?>" name="a678" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Deep freeze (plasma)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a679'];?>" name="a679" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a680'];?>" name="a680" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a681'];?>" name="a681" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a682'];?>" name="a682" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Deep freeze (RBC)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a683'];?>" name="a683" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a684'];?>" name="a684" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a685'];?>" name="a685" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a686'];?>" name="a686" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Refrigerator</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a687'];?>" name="a687" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a688'];?>" name="a688" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a689'];?>" name="a689" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a690'];?>" name="a690" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Psychiatry equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>ECT machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a691'];?>" name="a691" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a692'];?>" name="a692" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a693'];?>" name="a693" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a694'];?>" name="a694" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>EEG machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a695'];?>" name="a695" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a696'];?>" name="a696" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a697'];?>" name="a697" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a698'];?>" name="a698" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Urology equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Cystoscopic machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a699'];?>" name="a699" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a700'];?>" name="a700" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a701'];?>" name="a701" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a702'];?>" name="a702" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Vehicles</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Ambulance</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a703'];?>" name="a703" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a704'];?>" name="a704" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a705'];?>" name="a705" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a706'];?>" name="a706" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Bus</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a707'];?>" name="a707" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a708'];?>" name="a708" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a709'];?>" name="a709" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a710'];?>" name="a710" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Jeep</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a711'];?>" name="a711" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a712'];?>" name="a712" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a713'];?>0" name="a713" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a714'];?>" name="a714" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Microbus</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a715'];?>" name="a715" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a716'];?>" name="a716" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a717'];?>" name="a717" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a718'];?>" name="a718" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Pickup</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a719'];?>" name="a719" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a720'];?>" name="a720" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a721'];?>" name="a721" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a722'];?>" name="a722" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Air conditioner</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Air conditioner (split type)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a723'];?>" name="a723" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a724'];?>" name="a724" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a725'];?>" name="a725" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a726'];?>" name="a726" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Air conditioner (window)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a727'];?>" name="a727" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a728'];?>" name="a728" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a729'];?>" name="a729" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a730'];?>" name="a730" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">Generator</th></tr></thead>
                                              <tbody><tr>
                                                <td>Generator (diesel/petrol)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a731'];?>" name="a731" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a732'];?>" name="a732" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a733'];?>" name="a733" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a734'];?>" name="a734" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Generator (Gas)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a735'];?>" name="a735" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a736'];?>" name="a736" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a737'];?>" name="a737" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a738'];?>" name="a738" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Solar panel</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a739'];?>" name="a739" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a740'];?>" name="a740" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a741'];?>" name="a741" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a742'];?>" name="a742" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>IPS</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a743'];?>" name="a743" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a744'];?>" name="a744" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a745'];?>" name="a745" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a746'];?>" name="a746" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">ICT equipment</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>Computer (desktop)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a747'];?>" name="a747" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a748'];?>" name="a748" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a749'];?>" name="a749" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a750'];?>" name="a750" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Laptop</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a751'];?>" name="a751" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a752'];?>" name="a752" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a753'];?>" name="a753" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a754'];?>" name="a754" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Printer (dot matrix)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a755'];?>" name="a755" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a756'];?>" name="a756" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a757'];?>" name="a757" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a758'];?>" name="a758" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Printer (inkjet)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a759'];?>" name="a759" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a760'];?>" name="a760" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a761'];?>" name="a761" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a762'];?>" name="a762" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Printer (laser)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a763'];?>" name="a763" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a764'];?>" name="a764" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a765'];?>" name="a765" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a766'];?>" name="a766" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Scanner</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a767'];?>" name="a767" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a768'];?>" name="a768" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a769'];?>" name="a769" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a770'];?>" name="a770" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>UPS</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a771'];?>" name="a771" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a772'];?>" name="a772" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a773'];?>" name="a773" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a774'];?>" name="a774" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Fax</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a775'];?>" name="a775" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a776'];?>" name="a776" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a777'];?>" name="a777" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a778'];?>" name="a778" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Intercom</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a779'];?>" name="a779" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a780'];?>" name="a780" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a781'];?>" name="a781" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a782'];?>" name="a782" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Internet fixed line</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a783'];?>" name="a783" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a784'];?>" name="a784" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a785'];?>" name="a785" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a786'];?>" name="a786" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Internet wireless line (Modem)</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a787'];?>" name="a787" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a788'];?>" name="a788" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a789'];?>" name="a789" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a790'];?>" name="a790" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Multimedia</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a791'];?>" name="a791" class="span12 onlynumber ui-spinner-box" id="a302" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a792'];?>" name="a792" class="span12 onlynumber ui-spinner-box" id="a316" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a793'];?>" name="a793" class="span12 onlynumber ui-spinner-box" id="a317" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a794'];?>" name="a794" class="span12 onlynumber ui-spinner-box" id="a310" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td colspan="5">&nbsp;</td>
                                              </tr>
                                              </tbody><thead><tr>
                                                <th colspan="5">OHP</th>
                                              </tr></thead>
                                              <tbody><tr>
                                                <td>PA system</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a795'];?>" name="a795" class="span12 onlynumber ui-spinner-box" id="a319" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a796'];?>" name="a796" class="span12 onlynumber ui-spinner-box" id="a320" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a797'];?>" name="a797" class="span12 onlynumber ui-spinner-box" id="a321" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a798'];?>" name="a798" class="span12 onlynumber ui-spinner-box" id="a314" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Land phone</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a799'];?>" name="a799" class="span12 onlynumber ui-spinner-box" id="a323" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a800'];?>" name="a800" class="span12 onlynumber ui-spinner-box" id="a324" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a801'];?>" name="a801" class="span12 onlynumber ui-spinner-box" id="a325" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a802'];?>" name="a802" class="span12 onlynumber ui-spinner-box" id="a315" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Mobile phone</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a803'];?>" name="a803" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a804'];?>" name="a804" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a805'];?>" name="a805" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a806'];?>" name="a806" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Photocopier machine</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a807'];?>" name="a807" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a808'];?>" name="a808" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a809'];?>" name="a809" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a810'];?>" name="a810" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Digital camera</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a811'];?>" name="a811" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a812'];?>" name="a812" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a813'];?>" name="a813" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a814'];?>" name="a814" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
                                                <td>Video camera</td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a815'];?>" name="a815" class="span12 onlynumber ui-spinner-box" id="a327" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a816'];?>" name="a816" class="span12 onlynumber ui-spinner-box" id="a328" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a817'];?>" name="a817" class="span12 onlynumber ui-spinner-box" id="a329" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                                <td><div class="ui-spinner"><input autocomplete="off" value="<?php echo $rowfac['a818'];?>" name="a818" class="span12 onlynumber ui-spinner-box" id="a318" type="text"><button class="ui-spinner-up" type="button"></button><button class="ui-spinner-down" type="button"></button></div></td>
                                              </tr>
                                              <tr>
											  
											  </table>
											  <?php } ?>
											  </div>