<?php 
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=allbbscode.csv');
$output = fopen('php://output', 'w');
// output the column headings
fputcsv($output, array('Division','Division code', 'District','District code','Upazilla','Upazilla code','Union','Union Code'));
// fetch the data
set_time_limit(4000);
$connect = mysql_connect("103.247.238.164","root","M1$DB@2012");
//$connect = mysql_connect("localhost","root","");
mysql_select_db("bbs_code",$connect); //select the table

$rows = mysql_query('SELECT division,divcode,district,districtcode,upazilla,upazillacode,name,unioncode FROM bbscode');
// loop over the rows, outputting them
while ($row = mysql_fetch_assoc($rows)) fputcsv($output, $row);

?>