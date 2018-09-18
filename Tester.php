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
            Name<input type="text" name="harsh">
            <input type="submit" name="btn">
        </form>
        <?php
       }
        
      
       else
           {
           $PatientId=$_POST['harsh'];
           
    ob_start();
  
    require ('./fpdf/html_table.php');
    
    
    
   $pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);


 $data = new mysqli("localhost", "root", "", "clinic");
 $query = $data->query("select a.Patient_id , a.Full_Name , a.Address , a.Email , a.Contact_Number , a.Age , a.Blood_Group  , b.Disease , b.Medicine_name , b.Description  from Patient_Master a, Prescription_master b where a.Patient_id=$PatientId and a.Patient_id=b.Patient_id");
if ($query == true) 
    {
    //echo "correct";
    while( $row=$query->fetch_assoc())
                                                               
   {

$html=  "<table border='1'>
<tr>
<td width='200' height='60'>Patient Name</td>
<td width='550' height='60'>".$row['Full_Name']."</td>    
</tr>

<tr>
<td width='200' height='60'>Patient Id</td>
<td width='550' height='60'>".$row['Patient_id']."</td>    
</tr>

<tr>
<td width='200' height='110'>Patient Address</td>
<td width='550' height='110'>".$row['Address']."</td>
</tr>

<tr>
<td width='200' height='60'>Patient Email</td>
<td width='550' height='60'>".$row['Email']."</td>    
</tr>

<tr>
<td width='200' height=''>Patient Age</td>
<td width='550' height=''>".$row['Age']."</td>    
</tr>
</table>";
       
        
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
