<?php
            
            $Medicine_Id_sec=$_REQUEST['id'];
            $errMedicine_name=
            $errExpiryDate=
            $errPrice=
            $errTotalUnit=
             $Medicine_name_val=
             $ExpiryDate_val=
             $Price_val=
             $TotalUnit_val=       
                    
           
            $flag=NULL;
            
            
            

$data1=new mysqli("localhost","root","","clinic");
                        $query2=$data1->query("select * from medicine_stock_master  where Medicine_id=$Medicine_Id_sec");

                        if($query2==TRUE)
                        {                  
                            echo 'sucessfully';
                            $row=$query2->fetch_assoc();
                            
                            $Medicine_name_val=$row['Medicine_name'];
            $ExpiryDate_val=$row['Expiry_Date'];
            $Price_val=$row['Medicine_Price'];
            $TotalUnit_val=$row['Total_units'];
                        }
 else {
                            echo 'Deep ';
 }
           
            
            if(isset($_POST['Btnupdate']))
            {
              
                $flag=0;
                if($_POST['MedicineName']==NULL || $_POST['MedicineName']=="")
                {
                    $flag=1;
                    $errMedicine_name="Required Name";
                }
                else if((!preg_match("/^[a-zA-Z- ]{1,40}$/", $_POST['MedicineName'])))
                {
                    $flag=1;
                    $errMedicine_name="only alphabet allowed";
                }
                
             
                if($_POST['ExpiryDate']==NULL || $_POST['ExpiryDate']=="" )
                {
                    $flag=1;
                    $errExpiryDate="Required ExpiryDate";
                }
                
                
                  if($_POST['Price']==NULL || $_POST['Price']=="")
                {
                    $flag=1;
                    $errPrice="Required  Price";
                }
                else if((!preg_match("/^[0-9]*$/", $_POST['Price'])))
                {
                    $flag=1;
                    $errPrice="only number allowed";
                }
                
             
                if($_POST['TotalUnit']==NULL || $_POST['TotalUnit']=="" )
                {
                    $flag=1;
                    $errTotalUnit="Required TotalUnit";
                }
                else if((!preg_match("/^[0-9]*$/", $_POST['TotalUnit'])))
                {
                    $flag=1;
                    $errTotalUnit="only number allowed";
                }
             
                if($flag==0)
                {
                    $Medicine_name=$_POST['MedicineName'];
                    $ExpiryDate=$_POST['ExpiryDate'];
                    $Price=$_POST['Price'];
                    $TotalUnit=$_POST['TotalUnit'];

                        $data=new mysqli("localhost","root","","clinic");
                        $query=$data->query("Update medicine_stock_master set Medicine_name='".$Medicine_name."' ,Expiry_Date='".$ExpiryDate."', Medicine_Price=".$Price.", Total_units=".$TotalUnit." where Medicine_id=$Medicine_Id_sec");
                        header("Location:StaffSide_UpdateMedicineStock.php");
                                     
                }
                }
                         else {

                            //echo 'harsh';
                         }
                       // $data->close();
                        
          
          
            
            ?>


<!DOCTYPE html>

<html lang="en">
    <head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>Admin</title>
                <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>DOCTOR - Responsive HTML &amp; Bootstrap Template</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js">
        
         //When Page Load Browser Back Button is Disabled 
            (function (global) 
            { 
                if(typeof (global) === "undefined") 
                {
                    throw new Error("window is undefined");
                }
                var _hash = "!";
                var noBackPlease = function () 
                {
                    global.location.href += "#";
                    // making sure we have the fruit available for juice (^__^)
                    global.setTimeout(function () 
                    {
                        global.location.href += "!";
                    }, 50);
                };

                global.onhashchange = function () 
                {
                    if (global.location.hash !== _hash) 
                    {
                        global.location.hash = _hash;
                    }
                };

                global.onload = function () 
                {            
                    noBackPlease();

                    // disables backspace on page except on input fields and textarea..
                    document.body.onkeydown = function (e) 
                    {
                        var elm = e.target.nodeName.toLowerCase();
                        if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) 
                        {
                            e.preventDefault();
                        }
                        // stopping event bubbling up the DOM tree..
                        e.stopPropagation();
                    };          
                }
            })(window);
        </script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
	</head>
        <style>
            /*
/* Created by Filipe Pina
 * Specific styles of signin, register, component
 */
/*
 * General styles
 */
#playground-container {
    height: 500px;
    overflow: hidden !important;
    -webkit-overflow-scrolling: touch;
}
body, html{
     height: 80%;
 	background-repeat: no-repeat;
 	background-color: #42b3e5;
 	font-family: 'Oxygen', sans-serif;
	    
}

.main{
 	margin:200px 15px;
}

h1.title { 
	font-size: 50px;
	font-family: 'Passion One', cursive; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    width: 1000px;

}
.form-control {
    height: auto!important;
padding: 8px 12px !important;
}
.input-group {
    -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
    box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
}
#button {
    border: 1px solid #ccc;
    margin-top: 28px;
    padding: 6px 12px;
    color: #666;
    text-shadow: 0 1px #fff;
    cursor: pointer;
    -moz-border-radius: 3px 3px;
    -webkit-border-radius: 3px 3px;
    border-radius: 3px 3px;
    -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
    box-shadow: 0 1px #fff inset, 0 1px #ddd;
    background: #f5f5f5;
    background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
    background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
}
.main-center{
 	margin-top: 20px;
 	margin: 0 auto;
 	max-width: 1000px;
    padding: 10px 40px;
	background:#15739c;
	    color: #FFF;
    text-shadow: none;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

}
span.input-group-addon i {
    color: #009edf;
    font-size: 17px;
}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}
.data-table {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 537px;
        }

        .data-table th, 
        .data-table td {
            border: 1px solid #000000;
            padding: 7px 10px;
        }
        .data-table caption {
            margin: 7px;
        }

        /* Table Header */
        .data-table thead th {
            background-color: #508abb;
            color: #FFFFFF;
            border-color: #000000 !important;
            text-transform: uppercase;
        }

        /* Table Body */
        .data-table tbody td {
            color: #353535;
        }
        .data-table tbody td:first-child,
        .data-table tbody td:nth-child(4),
        .data-table tbody td:last-child {
            text-align: right;
        }

        .data-table tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }
        .data-table tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #000000;
        }

        Table Footer 
        .data-table tfoot th {
            background-color: #e5f5ff;
            text-align: right;
        }
        .data-table tfoot th:first-child {
            text-align: left;
        }
        .data-table tbody td:empty
        {
            background-color: #ffcccc;
        }

        </style>
	<body>
            
            
        
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
                                    <h2 style="text-align: center" >UPDATE MEDICINE STOCK</h2>
                                    <form class="" method="post" >
						
						


                        
                        

						
                                                <div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Medicine Name:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="MedicineName" id="medicinename"  value= "<?php echo $Medicine_name_val; ?>" placeholder="Enter Medicine Name"/>
								</div>
                                                             <span><?php  if($flag==1){echo $errMedicine_name;} ?></span>
							</div>
						</div>
                                                <div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Expiry Date:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                                        <input type="date" class="form-control" name="ExpiryDate" id="expriydate" value= "<?php echo $ExpiryDate_val?>" placeholder="Select Expiry Date"/>
								</div>
                                                             <span><?php  if($flag==1){echo $errExpiryDate;} ?></span>
							</div>
						</div>
                                                <div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Price:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="Price" id="price" value= "<?php echo $Price_val ?>" placeholder="Enter Medicine Price"/>
								</div>
                                                             <span><?php  if($flag==1){echo $errPrice;} ?></span>
							</div>
						</div>
                                                <div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Total Units:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="TotalUnit" id="totalunit"  value= "<?php echo $TotalUnit_val ?>" placeholder="Enter Total Units" />
								</div>
                                                             <span><?php  if($flag==1){echo $errTotalUnit;} ?></span>
							</div>
						</div>
                                                
                                                <?php 
                
            ?>
                                                <?php echo $ExpiryDate_val?>

						
						<div class="form-group ">
							
                                                       
                                                    <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" name="Btnupdate" value="Update">
                                                   

                                                </div>
                                        
                                        
						
					</form>
                                    
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
