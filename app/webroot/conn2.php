<?php
$id=$_GET['id'];
require("html2fpdf/html2fpdf.php"); 
$htmlFile = "http://app.dghs.gov.bd/orgregistry/pages/officevehicleprint/".$id;
 $buffer = file_get_contents($htmlFile); 
 $pdf = new HTML2FPDF('P', 'mm', 'Letter'); 
 $pdf->AddPage(); 
 $pdf->WriteHTML($buffer); 
 $pdf->Output('test.pdf', 'F'); 
 
 
?>