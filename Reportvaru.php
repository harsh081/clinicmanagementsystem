<?php

 if(!isset($_POST['btn']))
       {
           
       
       ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <style>
            
            </style>
    </head>
    <body>
        <form method="post">
            Name<input type="text" name="pid">
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
   // require('fpdf\fpdf.php');
    require ('./fpdf/html_table.php');
   /* $pdf = new FPDF();
    $pdf->AddPage();
   // $pdf->SetFont('Arial','B',16);
  //  $pdf->Cell(40,10,'Hello World!',1);
    $pdf->SetFont('Arial', 'B', 14);

$pdf->Cell(189, 5, 'Patient Report', 1, 1,'C');
//$pdf->Cell(25, 5, 'Taxable', 1, 0);


$pdf->Cell(59, 5, 'Patient Name', 1, 0);
//$pdf->Cell(25, 5, 'Taxable', 1, 0);
$pdf->Cell(130, 5, 'variable ', 1, 1,'R');

//$pdf->SetFont('Arial', '', 12);


$pdf->Cell(59, 5, 'Email ID', 1, 0);
//$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(130, 5, '3,250', 1, 1, 'R');

$pdf->Cell(59, 5, 'Address', 1, 0);
//$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(130, 5, '1,200', 1, 1, 'R');

$pdf->Cell(59, 5, 'Number of Appointment', 1, 0);
//$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(130, 5, '1,000', 1, 1, 'R');


$pdf->Cell(59, 5, 'Disease Treated', 1, 0);
//$pdf->Cell(25, 5, '-', 1, 0);
$pdf->Cell(130, 5, '1,000', 1, 1, 'R');

$pdf->Cell(59, 5, 'Medicine Given', 1, 0);
//$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(130, 5, '4,450', 1, 1, 'R');

$pdf->Cell(59, 5, 'Last Appointment taken', 1, 0);
//$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(130, 5, '4,450', 1, 1, 'R');

$pdf->Cell(59, 5, 'Gender', 1, 0);
//$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(130, 5, '4,450', 1, 1, 'R');

$pdf->Cell(59, 5, 'Age', 1, 0);
//$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(130, 5, '4,450', 1, 1, 'R');

$pdf->Cell(59, 5, 'Blood Group', 1, 0);
//$pdf->Cell(4, 5, '$', 1, 0);
$pdf->Cell(130, 5, '4,450', 1, 1, 'R');
//$pdf->Cell(4, 5, '$', 1, 0);

    $pdf->Output();
    ob_end_flush(); */
    
    
    
    
   $pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);


 $data = new mysqli("localhost", "root", "", "clinic");
 $query = $data->query("select a.Appointment_Date,count(a.Patient_id),b.Full_Name,b.Email,b.Address,b.Gender,b.User_Name,b.Age,b.Blood_Group,b.Height,b.Weight,b.Contact_Number,c.Description,c.Disease ,d.Medicine_name from Appointment_Master a,Patient_Master b,Prescription_Master c,Medicine_Stock_master d where a.Patient_id=b.Patient_id and a.Patient_id=c.Patient_id and a.Patient_id=2 and d.Medicine_id=c.Medicine_id order by a.Patient_id;");
$query2 = $data->query("select count(Patient_id) as a  from Appointment_Master where Patient_id=1 order by Patient_id;");
 if
    ($query == true) 
    {
     if($query2 == TRUE)
     {
         
     $row2=$query2->fetch_assoc();
    //echo "correct";
    $row=$query->fetch_assoc();
                                                               
   
        $dt=date("d/m/Y");
$html="<h1><b size='6'>Unique Clinic</b></h1><br>Address:dfBgfbnghn<br>Contact No:659+59+5<br>Date:<div align='right'>".$dt."</div><br>";
$html.=  "<table border='1'>
<tr>
<td width='200' height='60'>Patient Name</td>
<td width='550' height='60'>".$row['Full_Name']."</td>    
</tr>

<tr>
<td width='200' height='60'>Email</td>
<td width='550' height='60'>".$row['Email']."</td>    
</tr>

<tr>
<td width='200' height='110'>Patient Address</td>
<td width='550' height='110'>".$row['Address']."</td>
</tr>

<tr>
<td width='200' height='60'>Gender</td>
<td width='550' height='60'>".$row['Gender']."</td>    
</tr>

<tr>
<td width='200' height='60'>Age</td>
<td width='550' height='60'>".$row['Age']."</td>    
</tr>

<tr>
<td width='200' height='60'>Blood Group</td>
<td width='550' height='60'>".$row['Blood_Group']."</td>    
</tr>

<tr>
<td width='200' height='60'>Height</td>
<td width='550' height='60'>".$row['Height']."</td>    
</tr>



<tr>
<td width='200' height='60'>weight</td>
<td width='550' height='60'>".$row['Weight']."</td>
</tr>




<tr>
<td width='200' height='60'>Count Number</td>
<td width='550' height='60'>".$row['Contact_Number']."</td>    
</tr>

<tr>
<td width='200' height='60'>Medicine Name</td>
<td width='550' height='60'>".$row['Medicine_name']."</td>    
</tr>

<tr>
<td width='200' height='130'>Description</td>
<td width='550' height='130'>".$row['Description']."</td>
</tr>



<tr>
<td width='200' height='60'>Count</td>
<td width='550' height='60'>".$row2['a']."</td>
</tr>

<tr > 
<td width='195' height='60'>Disease Treated</td>
<td width='550' height='60'>,mz vlkjndfjn</td>   
</tr>


</table>
";

       
        /*$html='
            <tr>
<td width='200' height='60'>Disease Treated</td>
<td width='550' height='60'>".$row['Disease']."</td>    
</tr>

<table width="80%" border="1" cellpadding="1" cellspacing="0">
   
    <tr>
     <td colspan="2" align="center" style="font-size:18px"><b>Medical Report</b></td>
    </tr>
    
    <tr>
    <td style="width: 20px">Patient Name</td>
     <td>Patient Name</td>
    </tr>
    
     <tr>
    <td>Patient Id</td>
     <td>'.$row['Patient_id'].'</td>
    </tr>
    
<tr>
    <td>Patient Address</td>
    <td>'.$row['Address'].'</td>
    </tr>
    
<tr>
    <td>Email Id</td>
    <td>'.$row['Email'].'</td>
    </tr>
    
<tr>
    <td>Contact Number</td>
     <td>'.$row['Age'].'</td>
    </tr>
    <tr>
    
    <td>Disease Treated</td>
     <td>Patient Name</td>
    </tr>
    
     <tr>
    <td rowspan="2">Number of Appointment Taken</td>
     <td>Patient Name</td>
    </tr>
    
     <tr>
    <td>Previously Treated Disease</td>
     <td>Patient Name</td>
    </tr>
    
    <tr>
    <td>Medicines Given</td>
     <td>Patient Name</td>
    </tr>
      

     <tr>
    <td>Tests Performed</td>
     <td>Patient Name</td>
    </tr>
    

     <tr>
    <td>Symptomps Of Patient</td>
     <td>Patient Name</td>
    </tr>
    
 <tr>
    <td>Blood Group</td>
     <td>Patient Name</td>
    </tr>
    
 <tr>
    <td>Special care to be taken of(Special Advice)</td>
     <td>Patient Name</td>
    </tr>
    
 <tr>
    <td>Age</td>
     <td>Patient Name</td>
    </tr>
    
 <tr>
    <td>Description of Treatment</td>
     <td>Patient Name</td>
    </tr>
    <tr>
    <td>Last Visited Date</td>
     <td>Patient Name</td>
    </tr>
    
 
     
     
   
   </table>';*/
     }
$pdf->WriteHTML($html);
$pdf->Output();
}
 else {
    
 echo "error";
     
 }
       }
       ?>
    </body>
</html>
