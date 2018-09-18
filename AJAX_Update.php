<?php
$host="localhost";
$username="root";
$password="";
$databasename="clinic";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['edit_row']))
{
$Medicine_name=$_POST[''];
$ExpiryDate=$_POST[''];
$Medicine_Price=$_POST[''];
$TotalUnit=$_POST[''];
$Medicine_id=$_POST['row_id'];

 mysql_query("Update cine_Stock_Master set Medicine_name='".$Medicine_name."' ,Expiry_Date='".$ExpiryDate."', Medicine_Price=".$Medicine_Price.", Total_units=".$TotalUnit." where Medicine_id=$Medicine_Id");
 echo "success";
 exit();
}

if(isset($_POST['delete_row']))
{
 $row_no=$_POST['row_id'];
 mysql_query("delete from cine_Stock_Master where Medicine_id=$Medicine_Id");
 echo "success";
 exit();
}


?>


