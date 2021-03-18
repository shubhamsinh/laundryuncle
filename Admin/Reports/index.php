<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("SELECT user_name  , email , contact_no,birth_date,area_name FROM user u join area a where u.area_id = a.area_id");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='leather_vortal' 
AND `TABLE_NAME`='user'
and `COLUMN_NAME` in ('user_name','email','contact_no','birth_date','area_name')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage("L","A4");
$pdf->SetFont('Arial','B',10);

// Set header
 $pdf->Image('logo.jpg',7,1,50);
    // Move to the right
    $pdf->Cell(80);			
    // Title
    $pdf->Cell(80,10,'User List',1,0,'C');
    // Line break
    $pdf->Ln(20);

/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(70,12,$column_heading,1);
}
*/
		$pdf->Cell(50,20,"First Name",1);
		
		$pdf->Cell(50,20,"Email",1);
		$pdf->Cell(50,20,"Contact",1);
		$pdf->Cell(50,20,"Birth date",1);
		$pdf->Cell(50,20,"Area Name",1);
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(50,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>