
<?php
session_start();            
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
        
        <script src="js/jquery-2.1.1.js"></script>
        <script>
            $(document).ready(function () {
                $("#counts").click(function () {
                    $("#spancounts").hide();
                });
            });
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
/* Achivements Section */
#achievements {
	padding: 80px 0;
	
}
.achievement-box {
	text-align: center;
	margin: 20px 0;
}
.achievement-box h4 {
	font-size: 16px;
	color: rgba(255,255,255,0.8);
	text-transform: uppercase;
}
.achievement-box span.count {
	color: #fff;
	font-size: 50px;
	font-weight: 500;
	display: block;
}

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
					       <a class="navbar-brand" href="#">
                                                   
                                                </a>
                                               
					      <ul class="nav navbar-nav navbar-right">
                                                 <li><a class="menu active" href="DoctorDashboard.php" >Dashboard</a></li>
                                                 <li><a class="menu " href="DoctotrSide_FeedBack.php" > View FeedBack </a></li>
                                                  <li class="dropdown"> <a class="menu " class="dropbtn"    href="">Reports</a>
                                                  <div class="dropdown-content">
                                                      <a href="MonthWiseChart.php"> Appointment Report</a>
                                                      <a href="Appointment_Report.php">Total Appointment in Month </a>
                                                      <a href="MoreThanOneAppointment.php">Comman Appointment</a>
                                                      <a href="TotalPatientMonth.php">Total Patient In Month</a>
                                                       <a href="MedicineMonthWise.php"> Medicine Report</a>
                                                       <a href="MonthWisePayment.php">Income Report</a>
                                                       <a href="DoctorSide_Report.php">Patient Report</a>
                                                  <li><a class="menu " href="DoctorSide_viewappointment.php">Appointment</a></li>
                                                  <li><a class="menu" href="DoctorSide_provideprescrption.php">Prescription </a></li>
                                                  <li><a class="menu " href="DoctorSide_healthcareadvice.php">Health Care Advice</a></li>
                                                 <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="glyphicon glyphicon-bell" id="counts"><span id="spancounts"><?php
                                                    $i = 0;
                                                    $mysqli = new mysqli("localhost", "root", "", "clinic");
                                                        if ($i == 0) {
                                                            $query = $mysqli->query("select count(*) as a from Medicine_Stock_Master where Total_units <= 10 and Status='1'");
                                                            if ($query == true) {
                                                                while ($row = $query->fetch_assoc()) {
                                                                    echo '<font color="red">'.$row['a'].'</font>';
                                                                    $i++;
                                                                }
                                                            }
                                                        }                                     
                                                    ?></span></i>
                                        </a>
                                        <div class="dropdown-menu text-center" style="padding: 15px 10px 15px 0px;" aria-labelledby="navbarDropdown">                                         
                                            <div  >
                                                <?php
                                                $mysqli = new mysqli("localhost", "root", "", "clinic");
                                                $query2 = $mysqli->query("select Medicine_name,Total_units from Medicine_Stock_Master where Total_units <= 10 and  Status='1'");
                                                if ($query2 == true) {
                                                    while ($row2 = $query2->fetch_assoc()) {
                                                        echo '<div class="notice info"><h5> Medicine Stock is less</h5>
';
                                                        echo '<p > '.$row2['Medicine_name'].'</p>';
                                                        echo '<p> '.$row2['Total_units'].'</p>'
                                                                . '</div>';
                                                    }
                                                }
                                                $query2 = $mysqli->query("update Medicine_Stock_Master set Status='0' where Total_units <= 10");
                                                ?>
                                            </div>
                                    </li>
                                                  <li><a class="menu" href="LoginMain.php">logout</a></li>
					     
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
                                    <h2 style="text-align: center" >Doctor DashBoard</h2>
                                    <form class="" method="post" >
						
						
<?php
   
                                                                                

                                                                  ?>
						
                                                    <div id="achievements" class="section dark-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-2">
          <div class="achievement-box"> 
              <h4>No of Patient</h4>
              <span class="count">
                  <?php $data=new mysqli("localhost","root","","clinic");
                                                                                $query=$data->query("select count(patient_id) from patient_master");

                                                                                if($query==TRUE)
                                                                                {     
                                                                                    $row=$query->fetch_assoc();
                                                                                        
                                                                                    echo  $row['count(patient_id)'];
                                                                                         
                                                                                }
                                                                                else {

                                                                                    echo 'fail';
                                                                                 }?></span>
          
        </div>
      </div>
      <div class="col-md-2 col-sm-2">
          <div class="achievement-box"> 
              <h4>Today's Appointment</h4>
           <span class="count"><?php $query2=$data->query("select count(Appointment_Id) from appointment_master where Appointment_Date='".date("y-m-d")."'");
                                                                                 if($query2==TRUE)
                                                                                {     
                                                                                    $row=$query->fetch_assoc();
                                                                                        
                                                                                    echo $row['count(patient_id)'];
                                                                                }
                                                                                else {

                                                                                    echo 'fail';
                                                                                 }

                                                                                ?></span>
          
        </div>
      </div>
      <div class="col-md-2 col-sm-2">
        <div class="achievement-box">
            <h4>Upcoming Appointment</h4>
            <span class="count"><?php 
        $query4=$data->query("select count(Appointment_Id) from appointment_master where Appointment_Date>".date("y-m-d")."");
                                                                                 if($query4==TRUE)
                                                                                {     
                                                                                    $row=$query4->fetch_assoc();
                                                                                        
                                                                                    echo $row['count(Appointment_Id)'];
                                                                                }
                                                                                else {

                                                                                    echo 'fail';
                                                                                 }?></span>
          
        </div>
      </div>
      <div class="col-md-2 col-sm-2">
        <div class="achievement-box">
            <h4>Total Appointment</h4><span class="count"><?php 
        $query3=$data->query("select count(Appointment_Id) from appointment_master");
                                                                                 if($query3==TRUE)
                                                                                {     
                                                                                    $row=$query3->fetch_assoc();
                                                                                        
                                                                                    echo $row['count(Appointment_Id)'];
                                                                                }
                                                                                else {

                                                                                    echo 'fail';
                                                                                 }?></span>
          
        </div>
      </div>
         <div class="col-md-2 col-sm-2">
        <div class="achievement-box"> <span class="count"><?php ?></span>
          <h4>Awards won</h4>
        </div>
      </div>
    </div>
  </div>

                                             
                                                

						
						<div class="form-group ">
							
                                                       
                                                    
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
