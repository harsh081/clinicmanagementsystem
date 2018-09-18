<?php
session_start();

$takeDate=$Appointment_Date = $a = NULL;


?>
<!DOCTYPE html>
<html>
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
                if (typeof (global) === "undefined")
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
                        if (e.which === 8 && (elm !== 'input' && elm !== 'textarea'))
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



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-2.1.1.js"></script>
        <script>
            $(document).ready(function () {
                $("#counts").click(function () {
                    $("#spancounts").hide();
                });
            });
        </script>
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
        table td {
            transition: all .5s;

        }
        /* Select option*/

        select {

            background-repeat:no-repeat;
            background-position:300px;
            width:150px;
            padding:12px;
            margin-top:8px;
            font-family:Cursive;
            line-height:1;
            border-radius:5px;
            background: linear-gradient(to right, #0b6be8,#034663);
            color:#ff0;
            font-size:11px;
            -webkit-appearance:none;
            box-shadow:inset 0 0 10px 0 rgba(0,0,0,0.6);
            outline:none
        }
        select:hover {
            color:#00ff7f
        }

        /* table nu */
        h1{
            font-size: 30px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 300;
            text-align: center;
            margin-bottom: 15px;
        }
        table{
            width:100%;
            table-layout: fixed;
            background: -webkit-linear-gradient(left, #4b5cdd, #2569c4);
            background: linear-gradient(to right, #0b6be8,#034663);
            font-family: 'Roboto', sans-serif;
        }
        .tbl-header{
            background-color: rgba(255,255,255,0.3);
        }
        .tbl-content{
            height:300px;
            overflow-x:auto;
            margin-top: 0px;
            border: 1px solid rgba(255,255,255,0.3);
        }
        th{
            padding: 20px 15px;
            text-align: left;
            font-weight: 500;
            font-size: 12px;
            color: #fff;
            text-transform: uppercase;
        }
        td{
            padding: 15px;
            text-align: left;
            vertical-align:middle;
            font-weight: 300;
            font-size: 12px;
            color: #fff;
            border-bottom: solid 1px rgba(255,255,255,0.1);
        }


        /* demo styles */

        /*@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
        */
        body{

        }
        section{
            margin: 50px;
        }


        /* follow me template */
        .made-with-love {
            margin-top: 40px;
            padding: 10px;
            clear: left;
            text-align: center;
            font-size: 10px;
            font-family: arial;
            color: #fff;
        }
        .made-with-love i {
            font-style: normal;
            color: #F50057;
            font-size: 14px;
            position: relative;
            top: 2px;
        }
        .made-with-love a {
            color: #fff;
            text-decoration: none;
        }
        .made-with-love a:hover {
            text-decoration: underline;
        }


        /* for custom scrollbar for webkit browser*/

        ::-webkit-scrollbar {
            width: 6px;
        } 
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        } 
        ::-webkit-scrollbar-thumb {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
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
                                <div class="navbar-header">
                                    <a class="navbar-header" class="bs" ><h2>Unique Care</h2></a>

                                </div>

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a class="menu " href="StaffSide_Report.php" >REPORT</a></li>
                                    <li><a class="menu active" href="StaffSide_Appointment.php">APPOINTMENT</a></li>
                                    <li><a class="menu" href="StaffSide_Registration.php">PATIENT REGISTRATION</a></li>
                                    <li><a class="menu " href="StaffSide_Payement.php">PAYMENT</a></li>
                                    <li class="dropdown">
                                        <a class="menu " class="dropbtn"    href="">MEDICINE STOCK</a>
                                        <div class="dropdown-content">
                                            <a href="StaffSide_UpdateMedicineStock.php"> UPADATE MEDICINE STOCK </a>
                                            <a href="StaffSide_Medicinestock.php">ADD MEDICINE STOCK</a>

                                        </div>
                                    </li>
                                    <li><a class="menu" href="LoginMain.php">LOGOUT</a></li>


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
                    <h2 style="text-align: center" >APPOINTMENT</h2>
                    
                    
                    <form class="" method="post" >
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Date:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="date" class="form-control" name="staffdate" id="stadate" />
                                </div>

                            </div>
                        </div>
                        <div class="form-group ">
                            <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" name="BtnSubmit" value="Submit">
                        </div>

                        <?php
                        
                        $Dateis=$Appointment_Time = $errpid = $errpname = $PatientId = $emailSend = $errAppointment_Date = $patientname = $time = "";
                        $selectDate = $flag = NULL;


                        if (isset($_POST['BtnSubmit'])) {
                            $flag = 0;
                            if ($_POST['staffdate'] == NULL) {
                                $flag = 1;
                                $errpid = "Select date";
                            }


                            if ($flag == 0) {
                                $Appointment_Date = $_POST['staffdate'];
                                $Dateis=$_POST['staffdate'];
                                $selectDate=$_POST['staffdate'];
                                $_SESSION['da']=$_POST['staffdate'];
                                
                                $data = new mysqli("localhost", "root", "", "clinic");
                                $query = $data->query("select a.Full_Name,b.Appointment_Id,b.Appointment_Date from patient_master a,Appointment_Master b where b.Appointment_Date='$Appointment_Date' AND a.Patient_id=b.Patient_id and Status='pending';");
                                $query2 = $data->query("select Time from Appointment_Time");
                                $i = 1;

                                if ($query == TRUE) {
                                    echo "<table class='data-table' border='1px'>
                                          <thead>
                                          <tr>
                                          <th>Patient Id</th>
                                           <th>Date</th>
                                          
                                          
                                          <th>Action</th>
                                         
                                          <th>Time</th>
                                          </tr>
                                          </thead>
                                          <tbody>";

                                    while ($row = $query->fetch_assoc()) {
                                        //echo $row['count(*)'];
                                        echo "<tr>";
                                        echo "<td>" . $row['Full_Name'] . "</td>";
                                        echo "<td>" . $row['Appointment_Date'] . "</td>";


                                        echo "<td>" . "<form method='post'><button  class='btn btn-default glyphicon glyphicon-ok' name='btnSendMail' value='" . $row['Appointment_Id'] . "' style='border:none; background-color:transparent;'/><button class='btn btn-default glyphicon glyphicon-remove'  name='btnCancelSendMail' value='" . $row['Appointment_Id'] . "'style='border:none; background-color:transparent;'/>" . "</td>";



                                        echo "<td>" . "<select name='GetTime_" . $row['Appointment_Id'] . "'>";
                                        $query2 = $data->query("select Time from Appointment_Time where Status = 'Pending'");
                                        while ($row2 = $query2->fetch_assoc()) {
                                            echo " <option value='" . $row2['Time'] . "'/>" . $row2['Time'];
                                        }
                                        echo "</select></td>";

                                        $i++;
                                    }
                                    echo "</tr></form>";


                                    echo " </tbody></table> ";
                                    //$Appointment_Time=$_POST['GetTime'];
                                    $data->close();
                                }
                            }
                        }
                        ?>


                    </form>
                   
                    <?php
                    if (isset($_POST["btnSendMail"])) {

                       
                        $PatientId = $_POST['btnSendMail'];
                        $Appointment_Time = $_POST["GetTime_" . $_POST["btnSendMail"] . ""];
                        //echo "$Appointment_Time";

                        $data = new mysqli("localhost", "root", "", "clinic");
                        $q="select a.Full_Name,a.Email  from patient_master a,Appointment_Master b where a.Patient_id=b.Patient_id and Appointment_Id=$PatientId";
                        
                        $query3 = $data->query("update Appointment_Master set Status='Accept', Appointment_Date='".$_SESSION['da']."' , Appointment_Time='$Appointment_Time' where Appointment_Id='".$PatientId."' ");
                        $query2 = $data->query("update  Appointment_Time set Status='Accept' where Time='$Appointment_Time'");
                        //       echo $q;
                        $PatientData = $data->query($q);
                        //echo $login;
                        if ($PatientData == TRUE) {
                            if ($row = $PatientData->fetch_assoc()) {
                                $patientname = $row['Full_Name'];
                                $emailSend = $row['Email'];
                            }
                        }
                        if ($query2 == TRUE) {
                            echo 'run';
                            echo $selectDate;
                        }

                        $data->close();

                        // echo $_POST["btnSendMail"];
                        //include('connect.php');
                        require 'class.phpmailer.php';
                        require 'class.smtp.php';
                        // $email ="harshmakawana5621@gmail.com";
                        if (isset($_POST) & !empty($_POST)) {
                            $mail = new PHPMailer();
                            $mail->PluginDir = './'; // relative path to the folder where PHPMailer's files are located
                            $mail->IsSMTP();
                            $mail->Port = 465;
                            $mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
                            $mail->IsHTML(true); // if you are going to send HTML formatted emails
                            $mail->Mailer = 'smtp';
                            $mail->SMTPSecure = 'ssl';

                            $mail->SMTPAuth = true;
                            $mail->Username = "uniqueclinic748182@gmail.com";
                            $mail->Password = "uniqueclinicid748182";

                            $mail->SingleTo = true; // if you want to send mail to the users individually so that no recipients can see that who has got the same email.

                            $mail->From = "uniqueclinic748182@gmail.com";
                            $mail->FromName = "Unique clinic";
                            $email = $emailSend;
                            //$nameemail = $r['userid'];
                            //$mail->addAddress("user.1@yahoo.com","User 1");
                            $mail->addAddress($email, "project");
                            $mail->Subject = "Your Appointment Status";
                            $mail->Body = "Dear $patientname  , <br>

                     Your appointment time is $Appointment_Time<br>
                     Appointment Date : ".$_SESSION['da']."<br>
                   Please be on  time for your appointment at  unique clinic otherwise your appointment will be canceled.<br>

                   For further details, please contact 533215  </br>

                   Thanks and Regards<br>
                   Team Unique Clinics<br>



Please do not reply.";
                            if (!$mail->Send()) {
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            } else {
                                echo 'Update ';
                            }
                        }
                    }

                    if (isset($_POST["btnCancelSendMail"])) {

                        $PatientId = $_POST['btnCancelSendMail'];

                        $data = new mysqli("localhost", "root", "", "clinic");
                        $q = "select Full_Name from Patient_Master where Patient_id='$PatientId'";
                        //       echo $q;
                        $PatientData = $data->query($q);
                        //echo $login;
                        if ($PatientData == TRUE) {
                            if ($row = $PatientData->fetch_assoc()) {
                                $patientname = $row['Full_Name'];
                            }
                        }
                        $data->close();


                        echo $_POST["btnCancelSendMail"];
                        require 'class.phpmailer.php';
                        require 'class.smtp.php';
                        // $email ="harshmakawana5621@gmail.com";
                        if (isset($_POST) & !empty($_POST)) {
                            $mail = new PHPMailer();
                            $mail->PluginDir = './'; // relative path to the folder where PHPMailer's files are located
                            $mail->IsSMTP();
                            $mail->Port = 465;
                            $mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
                            $mail->IsHTML(true); // if you are going to send HTML formatted emails
                            $mail->Mailer = 'smtp';
                            $mail->SMTPSecure = 'ssl';

                            $mail->SMTPAuth = true;
                            $mail->Username = "uniqueclinic748182@gmail.com";
                            $mail->Password = "uniqueclinicid748182";

                            $mail->SingleTo = true; // if you want to send mail to the users individually so that no recipients can see that who has got the same email.

                            $mail->From = "uniqueclinic748182@gmail.com";
                            $mail->FromName = "Unique clinic";
                            $email = $emailSend;
                            //$nameemail = $r['userid'];
                            //$mail->addAddress("user.1@yahoo.com","User 1");
                            $mail->addAddress($email, "project");
                            $mail->Subject = "Your Appointment";
                            $mail->Body = "Dear $patientname  , <br>


                            Your appointment request is be cancelled.<br>
                            please apply another time on our website<br>
                            For further details, please contact 533215.</br>

                          Thanks and Regards<br>
                          Team Unique Clinics<br>


       Please do not reply.";
                            if (!$mail->Send()) {
                                echo "Mailer Error: " . $mail->ErrorInfo;
                            } else {
                                echo 'Update ';
                            }
                        }
                    }
                    ?>

                </div>

            </div>
        </div>

    </body>
</html>