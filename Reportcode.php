<?php

require('fpdf/fpdf.php');

class PDF extends FPDF {

    function Header() {

        global $title;
        $w = $this->GetStringWidth($title) + 6;
        $this->SetX((210 - $w) / 2);
      //  $this->Image('logo.jpg', 5, 10, 50);
        $this->SetFont('Times', 'B', 20);
        $this->SetLineWidth(1);
        $this->Cell($w, 50, $title, 0, 2, 'C');
        $this->Ln(2);
    }

    function Chapter($num, $label) {
        $this->SetFont('Arial', '', 12);
        $this->SetFillColor(200, 225, 255);
        $this->Cell(0, 6, "Chapter $num  $label", 0, 1, 'L', true);
        $this->Ln(4);
    }

    function Mybody($txt, $type) {
        if ($text = 'file') {
            $txt = file_get_contents($file);
            $this->SetFont('Times', '', 12);
            $this->MultiCell(0, 5, $txt);
            $this->Ln();
        } else if ($type = 'csv') {
            
        } else {
            
        }
    }

    function Layout() {
        
    }

    function footer() {
        $this->SetY(-15);
        $this->SetFont('Times', '', 8);
        $this->Cell(0, 10, $this->PageNo(), 0, 0, 'R');
    }

}

$pdf = new PDF();
$title = 'Patient Report';
$pdf->SetTitle($title);
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 8);
$data = new mysqli("localhost", "root", "", "clinic");
$query = $data->query("SELECT * FROM Patient_Master ORDER BY Patient_id ASC");

$val = "<html><body><table border='1px solid black'>";
while ($row = $query->fetch_assoc()) {
    //$val.= "<html><body><table border='1px solid black'>";
    $val.="<tr><td>" . $row['Patient_id'] . "</td> </tr>";
    $val.="<tr><td>" . $row['Full_Name'] . "</td> </tr>";
    $val.="<tr><td>" . $row['Age'] . "</td> </tr>";
    $val.="<tr><td>" . $row['Email'] . "</td> </tr></table></body></html>";

    $pdf->Cell(192, 25, '', 0, 1);
    $pdf->SetFont('Times', 'B', 12);
    $pdf->Cell(30, 5, 'Id', 1, 0);
    $pdf->Cell(30, 5, 'Name', 1, 0);
    $pdf->Cell(30, 5, 'Age', 1, 0);
    $pdf->Cell(30, 5, 'Email', 1, 1);
    $pdf->Cell(30, 10, $row['Patient_id']);
    $pdf->Cell(30, 10, $row['Full_Name']);
    $pdf->Cell(30, 10, $row['Age']);
    $pdf->Cell(30, 10, $row['Email']);
    //$pdf->Cell(192, 25, '', 1, 1);
    
}
$pdf->Output();
?>