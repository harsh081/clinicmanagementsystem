<?php
session_start();            
            ?>
 <?php
            $errPatientName=
            $errFeedback=
            $date=
            $flag=NULL;
           
            
            if(isset($_POST['BtnSubmit_feedback']))
            {
              
                $flag=0;
                if($_POST['PatientName']==NULL || $_POST['PatientName']=="")
                {
                    $flag=1;
                    $errPatientName="Required  PatientID";
                }
                else if(!(preg_match ("/^[a-zA-Z- ]{1,40}$/",$_POST['PatientName'])))
                {
                    $flag=1;
                    $errPatientName="only Alphabet allowed";
                    
                } 
                if($_POST['Feedback_msg']==NULL || $_POST['Feedback_msg']=="" )
                {
                    $flag=1;
                    $errFeedback="Required Feedback";
                }
                else if(!(preg_match ("/^[a-zA-Z- ]{1,40}$/",$_POST['Feedback_msg'])))
                {
                    $flag=1;
                    $errFeedback="only alphabet allowed";
                    
                }
                 if($flag==0)
                {
                     $date= date("y-m-d");
                    $Feedback_PatientName=$_POST['PatientName'];
                    $Feedback_Date=date("y-m-d");
                    $Feedback_message=$_POST['Feedback_msg'];
                    
                     $data1=new mysqli("localhost","root","","clinic");
                        $query1=$data1->query("Select  * from Patient_Master where Full_Name='$Feedback_PatientName'");

                        if($query1==TRUE)
                        {
                           // echo 'sucessfully';
                            $row=$query1->fetch_assoc();
                            $Feedback_PatientID=$row['Patient_id'];
                       
                    
     
                        $data=new mysqli("localhost","root","","clinic");
                        $query=$data->query("insert into feedback_Master(Patient_id,Feedback_date,Feedback)  values($Feedback_PatientID,'$Feedback_Date','$Feedback_message')");

                        if($query==TRUE)
                        {                  
                            echo '<script type="text/javascript">alert("Feedback added Succesfully")</script>';
                           
                        }
                         else {

                            echo 'fail';
                         }

                        $data->close();
                }
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
            })(window);</script>
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


        </style>
	<body>
           
            <header class="top-header ">
         <div class="row">
                                <div class="col-md-0 header-logo" >										
				</div>
            

                            <div class="col-md-12" >
                                 <h1> <?Php echo  'Welcome '.$_SESSION['Ses_patient_Name']; ?></h1>
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
                                    <h2 style="text-align: center" >FeedBack</h2>
                                    <form class="" method="post" >
						
						

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Patient Name:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="PatientName" id="patientid"   value="<?php echo $_SESSION['Ses_patient_Name'];?>"/>
								</div>
                                                             <span><?php  if($flag==1){echo $errPatientName;} ?></span>
							</div>
						</div>
                                               
                                                <div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Message/Suggestion:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                                        <textarea  class="form-control" name="Feedback_msg" id="msg" rows="5" cols="10"> </textarea>
								</div>
                                                             <span><?php  if($flag==1){echo $errFeedback;} ?></span>
							</div>
						</div>
                                                

						
						<div class="form-group ">
							
                                                       
                                                    <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" name="BtnSubmit_feedback" value="Submit">
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
