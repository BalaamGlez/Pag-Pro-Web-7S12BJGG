<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('13.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte de Actividades',0,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(150);
    $this->Cell(40,10,'Fecha:   '.$_POST['Fecha']);
}

// Pie de página
function Footer()
{
 $this->Cell(150);
  $this->Ln(20);
      $this->Cell(40,10,'Reporte de Actividades',0,0,'C');
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');




  
}




}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
$pdf->Ln();
//$pdf->Cell(40,10,'Fecha:   '.$_POST['Fecha']);
$pdf->MultiCell(190,5,utf8_decode('El contrato laboral se regula de acuerdo con la Ley Federal del Trabajo. En cambio, la prestación de servicios profesionales de acuerdo con el Código Civil Federal, el Código Civil de cada Estado de la República y lo que acuerden las personas que lo celebrarán.  '));
$pdf->Ln();
$pdf->MultiCell(190,5,utf8_decode('En materia laboral, la relación de trabajo es subordinada. En el caso de una prestación de servicios no lo es pues es una relación entre iguales. '));
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Fue atendido por:   '.$_POST['trabajador']));
$pdf->Ln();
//DATOS DEL CLIENTE 
$pdf->Cell(40,10,utf8_decode('Nombre del cliente:   '.$_POST['cliente']));
$pdf->Ln();
$pdf->Cell(40,10,'Correo:   '.$_POST['correo']);
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Dirección:   '.$_POST['Direccion']));
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Municipio:   '.$_POST['Municipio']));
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Colonia:   '.$_POST['Colonia']));
$pdf->Ln();
$pdf->Cell(40,10,'Codigo Postal:   '.$_POST['cp']);
$pdf->Ln();
$pdf->Cell(40,10,utf8_decode('Servico:   '.$_POST['servico']));
$pdf->Ln();
$pdf->MultiCell(190,5,utf8_decode('Actividad:   '.$_POST['Actividad']));
$pdf->Ln();
$pdf->Cell(40,10,'Costo:   '.$_POST['Costo']);

$pdf->Output();
?>