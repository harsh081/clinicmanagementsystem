<?php

 if(!isset($_POST['btn']))
       {
           
       
       ?>
<!DOCTYPE html>
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    
        
    </head>
    <body>
        <form method="post">
            
            
            Name<input type="text">
            <input type="submit" name="btn">
        </form>
        <?php
       }
        
       //$val="<table border='1px solid black'><tr><td>hello</td></tr>";
       //$val.="<tr><td>dhaval</td></tr></table>";
      // echo $val;
      
       else
           {
          // echo'hello';
           //require ("fpdf/fpdf.php");
           
    ob_start();
    require('fpdf\fpdf.php');
    $pdf = new FPDF();
    $pdf->AddPage();
   // $pdf->SetFont('Arial','B',16);
  //  $pdf->Cell(40,10,'Hello World!',1);
    
    $Medicine_charge=
    $Clinic_charge=
    $Test_charge=
    $Registration_fee=
      $Total=
       $Quantity=
        $Price=    
       
            $flag=null;
            
    
     $data = new mysqli("localhost", "root", "", "clinic");

                                $query1 = $data->query("select a.Medicine_Price , b.Quantity from medicine_stock_master a,prescription_master b where a.Medicine_id=b.Medicine_id");
                                
                                
                                   $row=$query1->fetch_assoc();
                                $Quantity=$row['Quantity'];
                                $Price=$row['Medicine_Price'];
                                   $Medicine_charge=$Quantity*$Price;
                                   $Clinic_charge=300;
                                   $Registration_fee=500;
                                   $Total=$Medicine_charge+$Clinic_charge+$Registration_fee;
                                   $date=Date("d-m-Y");
                                
    $pdf->SetFont('Arial', 'B', 14);

$pdf->Cell(130, 5, 'UNIQUE CLINIC', 0, 0);

$pdf->Cell(59, 5, 'INVOICE', 0, 1);
$pdf->Cell(59, 5, '', 0, 1);
$pdf->SetFont('Arial', '', 12);

$pdf->Cell(130, 5, 'vesu ', 0, 0);
$pdf->Cell(59, 5, '', 0, 1);

$pdf->Cell(130, 5, 'Address :surat,india', 0, 0);
$pdf->Cell(25, 5, 'Date ', 0, 0);
$pdf->Cell(34, 5, $date, 0, 1);

$pdf->Cell(130, 5, 'Phone : 0261277455', 0, 0);
$pdf->Cell(25, 5, 'Invoice #', 0, 0);
$pdf->Cell(34, 5, '[1234567]', 0, 1);
$pdf->Cell(130, 5, '', 0, 0);
$pdf->Cell(25, 5, '', 0, 0);
$pdf->Cell(34, 5, '', 0, 1);
$pdf->Cell(189, 10, '', 0, 1);

$pdf->Cell(100, 5, 'Bill to', 0, 1);
$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Name]', 0, 1);





$pdf->Cell(10, 5, '', 0, 0);
$pdf->Cell(90, 5, '[Phone]', 0, 1);

$pdf->Cell(189, 10, '', 0, 1);
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(130, 5, 'Description', 1, 0);
//$pdf->Cell(25, 5, 'Taxable', 1, 0);
$pdf->Cell(59, 5, 'Amount', 1, 1);

$pdf->SetFont('Arial', '', 12);


$pdf->Cell(130, 5, 'Medicine Charge', 1, 0);
//$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(59, 5, $Medicine_charge, 1, 1, 'R');

$pdf->Cell(130, 5, 'Clinic Charge', 1, 0);
//$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(59, 5, $Clinic_charge, 1, 1, 'R');

$pdf->Cell(130, 5, 'Test Charges', 1, 0);
//$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(59, 5,'', 1, 1, 'R');


$pdf->Cell(130, 5, 'Registration Fees', 1, 0);
//$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(59, 5, $Registration_fee, 1, 1, 'R');

$pdf->Cell(130, 5, 'Subtotal', 1, 0);
//$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(59, 5,$Total , 1, 1, 'R');




    $pdf->Output();
    ob_end_flush(); 
                                }
       
       ?>
    </body>
</html>
