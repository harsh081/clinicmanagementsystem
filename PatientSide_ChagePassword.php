<?php
session_start();            
            ?>

            <?php
            $errFullName=
            $errUserName=
            $errPassword=
            $UserName=
            $password=
             $PatientName=$_SESSION['Ses_patient_Name'];
            $flag=NULL;
           
            
            $data1=new mysqli("localhost","root","","clinic");
                        $query1=$data1->query("Select  * from Patient_Master where Full_Name='$PatientName'");

                        if($query1==TRUE)
                        {
                           // echo 'sucessfully';
                            $row=$query1->fetch_assoc();
                            $patientId=$row['Patient_id'];
                            $UserName=$row['User_Name'];
                            $password=$row['Password'];
                    
                        }
            
            if(isset($_POST['BtnRegister']))
            {
              
                $flag=0;
                
                if($_POST['txtUserName']==NULL || $_POST['txtUserName']=="" )
                {
                    $flag=1;
                    $errUserName="Required Username";
                }
                 else if(!(preg_match ("/^[a-zA-Z-0-9]{8,12}$/",$_POST['txtUserName'])))
                {
                    $flag=1;
                    $errFullName="only Alphabets and  number allowed";
                    
                }
                if($_POST['txtPassword']==NULL || $_POST['txtPassword']=="")
                {
                    $flag=1;
                    $errPassword ="Required password";
                }
                 else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/',$_POST['txtPassword']))
                {
                      $errPassword ="Required password
                    the password does not meet the requirements!";
                }
                
            
               
             
                
                if($flag==0)
                {
                    
                 
                    $userName=$_POST['txtUserName'];
                    $password=$_POST['txtPassword'];
                    
                    
                    
                    
                    
                    

                        $data=new mysqli("localhost","root","","clinic");
                        $query=$data->query("update Patient_Master set User_Name='$userName',Password='$password' where Patient_id=$patientId");

                        if($query==TRUE)
                        {                  
                            echo 'sucessfully';
                           
                        }
                         else {

                            echo 'fail';
                         }

                        $data->close();
                }
            }
            
          
          
            
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


<!--   drop down -->
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
<!--  drop down over-->
        </style>
	<body>
            
         
            
            <header class="top-header ">
         <div class="row">
                                <div class="col-md-0 header-logo" >										
				</div>

                            <div class="col-md-12" >
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>

					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      
					      <ul class="nav navbar-nav navbar-right">
                                             <ul class="nav navbar-nav navbar-right">

                                    <li><a class="menu active " href="PatientSide_Healthcare.php" >HealthCare Advice</a></li>
                                    <li><a class="menu" href="PatientSide_feedback.php">FeedBack</a></li>
                                    <li><a class="menu " href="PatientSide_appointment.php">Appointment </a></li>
                                    <li><a class="menu " href="PatientSide_ChagePassword.php">Change Password </a></li>
                                    <li><a class="menu" href="Logout.php">Logout</a></li>

                                </ul>
					    </div><!-- /navbar-collapse -->
					  </div><!-- / .container-fluid -->
					</nav>
				</div>
			</div>
     </header> 
		<div class="container">
			<div class="row main">
                            
				<div class="main-login main-center">
                                    <h2 style="text-align: center">Registration</h2>
					<form class="" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Full Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="txtFullName" id="name"  disabled value="<?php echo $_SESSION['Ses_patient_Name'];?>" />
								</div>
                                                            <span id="Spanfullname"><?php  if($flag==1){echo $errFullName;} ?></span>
							</div>
						</div>

						

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">UserName</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="txtUserName" id="password" minlength="8"  maxlength="12" value="<?php echo $UserName?>"/>
                                                                               
								</div>
                                                            <span><?php  if($flag==1){echo $errUserName;} ?></span>
							</div>
						</div>
                                            
                                                <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                                        <input type="password" class="form-control" name="txtPassword" id="name" minlength="8" maxlength="12" value="<?php echo $password?>" />
								</div>
                                                            <span><?php  if($flag==1){echo $errPassword;} ?></span>
							</div>
						</div>

						

						<div class="form-group ">
							
                                                    
                                                    <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Submit" name="BtnRegister">
                                                </div>
						
					</form>
              <script type="text/javascript">
            function validateEmail()
    {
     var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
     var em=document.getElementById("name").value;
     if (reg.test(em)){
      document.getElementById("Spanfullname").innerHTML="valid email";
        }
     else{
     document.getElementById("Spanfullname").innerHTML="proper email";
     }
    } 
    </script>
     

				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
   
	</body>
</html>