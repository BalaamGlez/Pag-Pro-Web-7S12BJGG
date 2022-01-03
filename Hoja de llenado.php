<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>


<?php
 include_once "fpdf.php";
 


$doc = new FPDF();

$doc->AddPage();
$doc->SetFont('Arial','','11');
$doc->Ln();
$doc->Cell(50, 9, 'Nombre:  ',0,2,'L');
$doc->Output();

?>


</body>
</html>