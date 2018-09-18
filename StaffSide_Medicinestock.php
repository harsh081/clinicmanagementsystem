<?php
session_start();
?>


<!DOCTYPE html>
<?php
?>
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

            function disp()
            {
                alert("hiii");
            }
        </script>
        <script type="text/javascript" >
            function edit_row(id)
            {
                window.alert("hoii");
                edit_row:'edit_row',
                        var MedicineName = document.getElementById("MedicineName_val" + id).innerHTML;
                var ExpiryDate = document.getElementById("ExpiryDate_val" + id).innerHTML;
                var Price = document.getElementById("MedicinePrice_val" + id).innerHTML;
                var Total = document.getElementById("TotalUnits_val" + id).innerHTML;

                document.getElementById("MedicineName_val" + id).innerHTML = "<input type='text' id='MedicineName_text" + id + "' value='" + MedicineName + "'>";
                document.getElementById("ExpiryDate_val" + id).innerHTML = "<input type='text' id='ExpiryDate_text" + id + "' value='" + ExpiryDate + "'>";
                document.getElementById("MedicinePrice_val" + id).innerHTML = "<input type='text' id='MedicinePrice_text" + id + "' value='" + Price + "'>";
                document.getElementById("TotalUnits_val" + id).innerHTML = "<input type='text' id='TotalUnits_text" + id + "' value='" + Total + "'>";


                //document.getElementById("edit_button"+id).style.display="none";
                //document.getElementById("save_button"+id).style.display="block"; 
                document.getElementById("Action_val" + id).innerHTML = "<button class='rainbow-button'  id='save_button'".$row['Medicine_id']."' name='BtnSave' onclick='save_row('".$row['Medicine_id'].");' value='".$row['Medicine_id']."'>Save</button><button  class='rainbow-button' name='Btndelete'id='delete_button'".$row['Medicine_id']."'  onclick='delete_row('".$row['Medicine_id'].");' value='".$row['Medicine_id']."'>Cancel</button>";
                //document.getElementById("edit_button" + id).style.display = "none";
                //document.getElementById("save_button" + id).style.display = "block";
            }

            function save_row(id)
            {
                var MedicineName_val = document.getElementById("MedicineName_text" + id).value;
                var ExpiryDate_val = document.getElementById("ExpiryDate_text" + id).value;
                var Price_val = document.getElementById("MedicinePrice_text" + id).value;
                var Total_val = document.getElementById("TotalUnits_text" + id).value;

                $.ajax
                        ({
                            type: 'post',
                            url: 'AJAX_Update.php',
                            data: {
                                medi: MedicineName_val,
                                Expire: ExpiryDate_val,
                                Price: Price_val,
                                Total: Total_val
                            },
                            success: function (response) {
                                if (response == "success")
                                {
                                    //document.getElementById("name_val" + id).innerHTML = name;
                                    //document.getElementById("age_val" + id).innerHTML = age;
                                    //document.getElementById("edit_button" + id).style.display = "block";
                                    //document.getElementById("save_button" + id).style.display = "none";
                                }
                            }
                        });
            }

            function delete_row(id)
            {
                $.ajax
                        ({
                            type: 'post',
                            url: 'AJAX_Update.php',
                            data: {
                                delete_row: 'delete_row',
                                medi_id: id,
                            },
                            success: function (response) {
                                if (response == "success")
                                {
                                    var row = document.getElementById("row" + id);
                                    row.parentNode.removeChild(row);
                                }
                            }
                        });
            }



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

        /* Button Raibow*/
        .rainbow-button {
            width:calc(5vw + 6px);
            height:calc(2vw + 6px);
            background-image: linear-gradient(90deg, #00C0FF 0%, #FFCF00 49%, #FC4F4F 80%, #00C0FF 100%);
            border-radius:5px;
            display:flex;
            align-items:center;
            justify-content:center;
            text-transform:uppercase;
            font-size:1vw;
            font-weight:bold;
        }
        .rainbow-button:after {
            content:attr(alt);
            width:5vw;
            height:2vw;

            display:flex;
            align-items:center;
            justify-content:center;
        }
        .rainbow-button:hover {
            animation:slidebg 2s linear infinite;
        }

        @keyframes slidebg {
            to {
                background-position:20vw;
            }
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
        
        <!-- notification-->
        
        p {
            text-indent: 50px;
    text-align: justify;
  margin: 0;
  font-size: 3;
  background-color: lightskyblue;
}
h5{text-align: center;
    text-transform: uppercase;
    color: #4CAF50;}

.notice {
  position: relative;
  margin: 1em;
  background: #F9F9F9;
  padding: 1em 1em 1em 2em;
  border-left: 4px solid #DDD;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.125);
}

.notice:before {
  position: absolute;
  top: 50%;
  margin-top: -17px;
  left: -17px;
  background-color: #DDD;
  color: #FFF;
  width: 30px;
  height: 30px;
  border-radius: 100%;
  text-align: center;
  line-height: 30px;
  font-weight: bold;
  font-family: Georgia;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.5);
}

.info {
  border-color: #0074D9;
}

.info:before {
  content: "i";
  background-color: #0074D9;
}

.success {
  border-color: #2ECC40;
}

.success:before {
  content: "√";
  background-color: #2ECC40;
}

.warning {
  border-color: #FFDC00;
}

.warning:before {
  content: "!";
  background-color: #18b2f9;
}

.error {
  border-color: #FF4136;
}

.error:before {
  content: "X";
  background-color: #FF4136;
}
<!--over notification -->

	
	/* CSS used here will be applied after bootstrap.css */
.glyphicon-bell {
   
    font-size:1.5rem;
  }

.notifications {
   min-width:320px; 
  }
  
  .notifications-wrapper {
     overflow:auto;
      max-height:250px;
    }
.menu-title {
    color: #ffffff;
    font-size: 13px;
    display: inline-block;
    font-weight: bold;
}
 
.glyphicon-circle-arrow-right {
      margin-left:10px;     
   }
  
   
 .notification-heading, .notification-footer  {
  padding:2px 10px;
       }
      
        
.dropdown-menu.divider {
  margin:5px 0;          
  }

.item-title {
    font-size: 1.3rem;
    color: #000;
    font-weight: bold;
    margin: 5px 0px;
}

.notifications a.content {
    text-decoration: none;
    display: block;
    color:#000;
}
.notification-item {
    position: relative;
    padding: 10px;
    padding-left: 70px;
    padding-bottom: 0px;
}
.notification-item img {
    position: absolute;
    top: 7px;
    left: 10px;
    width: 50px;
    height: 50px;
    border-radius: 50px;
}
.dropdown-menu .divider {
    height: 1px;
    margin: 5px 0;
    overflow: hidden;
    background-color: #e5e5e5;
}
ul.dropdown-menu.notifications .notifications-wrapper a.content {
    padding: 0px !important;
    background: rgba(0, 0, 0, 0.04);
    border-bottom: 1px solid #d1d1d1;
}
ul.dropdown-menu.notifications .notifications-wrapper a.content:hover {
    color: #000;
    background: rgba(0, 0, 0, 0.1);
}
.login-nav ul.nav.navbar-nav.navbar-right li a {
    display: block;
}
.notification-heading {
    background: #000;.notifications a.content {
    text-decoration: none;
    display: block;
}
    padding: 3px 10px;
}
ul.dropdown-menu.notifications {
    padding: 0px;
}
.dropdown .glyphicon-bell {  
    vertical-align: middle;
}
.dropdown{
    list-style:none;
}
    </style>
    <body>
        <?php
        $errMedicine_name = $errExpiryDate = $errPrice = $errTotalUnit = $flag = NULL;


        if (isset($_POST['BtnSubmit'])) {

            $flag = 0;
            if ($_POST['MedicineName'] == NULL || $_POST['MedicineName'] == "") {
                $flag = 1;
                $errMedicine_name = "Required Name";
            } else if ((!preg_match("/^[a-zA-Z- ]{1,40}$/", $_POST['MedicineName']))) {
                $flag = 1;
                $errMedicine_name = "only alphabet allowed";
            }


            if ($_POST['ExpiryDate'] == NULL || $_POST['ExpiryDate'] == "") {
                $flag = 1;
                $errExpiryDate = "Required ExpiryDate";
            }


            if ($_POST['Price'] == NULL || $_POST['Price'] == "") {
                $flag = 1;
                $errPrice = "Required  Price";
            } else if ((!preg_match("/^[0-9]*$/", $_POST['Price']))) {
                $flag = 1;
                $errPrice = "only number allowed";
            }


            if ($_POST['TotalUnit'] == NULL || $_POST['TotalUnit'] == "") {
                $flag = 1;
                $errTotalUnit = "Required TotalUnit";
            } else if ((!preg_match("/^[0-9]*$/", $_POST['TotalUnit']))) {
                $flag = 1;
                $errTotalUnit = "only number allowed";
            }

            if ($flag == 0) {
                $Medicine_name = $_POST['MedicineName'];
                $ExpiryDate = $_POST['ExpiryDate'];
                $Price = $_POST['Price'];
                $TotalUnit = $_POST['TotalUnit'];

                $data = new mysqli("localhost", "root", "", "clinic");
                $query = $data->query("insert into Medicine_Stock_Master(Medicine_name,Expiry_Date,Medicine_Price,Total_units)  values('$Medicine_name','$ExpiryDate',$Price,$TotalUnit)");

                if ($query == TRUE) {
                    echo 'sucessfully';
                } else {

                    echo 'fail';
                }

                $data->close();
            }
        }
        ?>
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
                                    <li><a class="menu " href="StaffSide_Report.php" >REPORT</a></li>
                                    <li><a class="menu" href="StaffSide_Appointment.php">APPOINTMENT</a></li>
                                    <li><a class="menu" href="StaffSide_Appointment.php">PATIENT REGISTRATION</a></li>
                                    <li><a class="menu " href="StaffSide_Payement.php">PAYMENT</a></li>
                                    <li class="dropdown">
                                        <a class="menu active" class="dropbtn"    href="">MEDICINE STOCK</a>
                                        <div class="dropdown-content">

                                            <a href="StaffSide_UpdateMedicineStock.php"> UPADATE MEDICINE STOCK </a>
                                            <a href="StaffSide_Medicinestock.php">ADD MEDICINE STOCK</a>

                                        </div>
                                    </li>
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
                    <h2 style="text-align: center" >MEDICINE STOCK</h2>
                    <form class="" method="post" >




                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Medicine Name:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="MedicineName" id="medicinename"  placeholder="Enter Medicine Name"/>
                                </div>
                                <span><?php
                                    if ($flag == 1) {
                                        echo $errMedicine_name;
                                    }
                                    ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Expiry Date:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="date" class="form-control" name="ExpiryDate" id="expriydate" min="<?php echo date('Y-m-d'); ?>" placeholder="Select Expiry Date"/>
                                </div>
                                <span><?php
                                    if ($flag == 1) {
                                        echo $errExpiryDate;
                                    }
                                    ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Price:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="Price" id="price" placeholder="Enter Medicine Price"/>
                                </div>
                                <span><?php
                                    if ($flag == 1) {
                                        echo $errPrice;
                                    }
                                    ?></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username" class="cols-sm-2 control-label">Total Units:</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="TotalUnit" id="totalunit" placeholder="Enter Total Units" />
                                </div>
                                <span><?php
                                    if ($flag == 1) {
                                        echo $errTotalUnit;
                                    }
                                    ?></span>
                            </div>
                        </div>





                        <div class="form-group ">


                            <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" name="BtnSubmit" value="Submit">
                            <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" name="Btnview" value="view Medicine">

                        </div>

                        <div class="form-group ">
                            <?php
                            $errmname = $errexpirydate = $errprice = $errtotalnits = $flag = NULL;

                            if (isset($_POST['Btnview'])) {

                                $Medicine_name = $_POST['MedicineName'];
                                $ExpiryDate = $_POST['ExpiryDate'];
                                $Price = $_POST['Price'];
                                $TotalUnit = $_POST['TotalUnit'];

                                $data = new mysqli("localhost", "root", "", "clinic");

                                $query1 = $data->query("select * from medicine_stock_master");
                                if ($query1 == TRUE) {
                                    echo "<table class='data-table'  name =border='1px'>
                                          <thead>
                                          <tr>
                                          <th>medicinename</th>
                                          <th>expirydate</th>
                                          <th>price</th>
                                          <th>totalunit</th>
                                          <th>action</th>
                                          </tr>
                                          </thead>
                                          <tbody>";
                                    while ($row = $query1->fetch_assoc()) {
                                        //echo $row['count(*)'];
                                        echo "<tr>";
                                        echo "<td>" . $row['Medicine_name'] . "</td>";
                                        echo "<td>" . $row['Expiry_Date'] . "</td>";
                                        echo "<td>" . $row['Medicine_Price'] . "</td>";
                                        echo "<td>" . $row['Total_units'] . "</td>";
                                        echo "<td>" . "<form method='post'><a class='rainbow-button'  href='Updatemedicine.php?id=" . $row['Medicine_id'] . "'  >Update</a><button type='submit' class='rainbow-button' name='Btndelete'    value='" . $row['Medicine_id'] . "'>Delete</button>" . "</td>";

                                        echo "</tr>";
                                    }
                                    echo " </tbody></table>";
                                }
                                $data->close();
                            }
                            ?>
                        </div>
                        <div class="form-group ">
                            <?php
                            $errmname = $errexpirydate = $errprice = $errtotalnits = $flag = NULL;

                            if (isset($_POST['BtnUpdate'])) {

                                $_SESSION['Medicine_id'] = $_POST['BtnUpdate'];
                                echo 'Update';
                                header('Location:Updatemedicine.php');
                            }
                            if (isset($_POST['Btndelete'])) {

                                $id = $_POST['Btndelete'];
                                $data = new mysqli("localhost", "root", "", "clinic");

                                $query4 = $data->query("delete  from medicine_stock_master where Medicine_id=$id");
                                if ($query4 == TRUE) {
                                    echo 'sucessfully';
                                } else {
                                    echo 'fail';
                                }
                                $data->close();
                            }
                            ?>
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
