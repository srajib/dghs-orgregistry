<?php 
//connect to the database
$connect = mysql_connect("localhost","root","");
mysql_select_db("bbs_code",$connect); //select the table

set_time_limit(4000);
$filename = 'allbbscode.csv';
//include 'connection.php';
$date = date("m/d/Y");
header("Content-type: appilication/x-msexcel");
header("Content-disposition: attachment; filename=".$filename);
header("Pragma: no-cache");
header("Expires: 2");
$csv_output1='Division'.",";
$csv_output1.='Division code'.",";
$csv_output1.='District'.",";
$csv_output1.='District code'.",";
$csv_output1.='Upazilla'.",";
$csv_output1.='Upazilla code'.",";
$csv_output1.='Union'.",";
$csv_output1.='Union Code'.",";
$csv_output1.=''."\n";
echo $csv_output1;
$view=mysql_query("SELECT * FROM bbscode");
while($result=mysql_fetch_array($view))
{
$a = $result['division'];
$b = $result['divcode'];
$c = $result['district'];
$d = $result['districtcode'];
$e = $result['upazilla'];
$f = $result['upazillacode'];
$g = $result['union'];
$h = $result['unioncode'];
$csv_output=$a.",";
$csv_output.=$b.",";
$csv_output.=$c.",";
$csv_output.=$d.",";
$csv_output.=$e.",";
$csv_output.=$f.",";
$csv_output.=$g.",";
$csv_output.=$h."";
$csv_output.=''."\n";
echo $csv_output;
}
exit;

?>