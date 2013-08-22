<?php
$server="103.247.238.164";
$login="root";
$password="M1$DB@2012";
$db="bbs_code";
$filename = 'exportfinal.csv';
mysql_connect($server, $login, $password);
mysql_select_db($db);

$fp = fopen($filename, "w");

$res = mysql_query("SELECT * FROM bbscode");

// fetch a row and write the column names out to the file
$row = mysql_fetch_assoc($res);
$line = "";
$comma = "";
foreach($row as $name => $value) {
    $line .= $comma . '"' . str_replace('"', '""', $name) . '"';
    $comma = ",";
}
$line .= "\n";
fputs($fp, $line);

// remove the result pointer back to the start
mysql_data_seek($res, 0);

// and loop through the actual data
while($row = mysql_fetch_assoc($res)) {
   
    $line = "";
    $comma = "";
    foreach($row as $value) {
        $line .= $comma . '"' . str_replace('"', '""', $value) . '"';
        $comma = ",";
    }
    $line .= "\n";
    fputs($fp, $line);
   
}

fclose($fp);
?>