<?php
session_start();          

 
            ?>
<!DOCTYPE html>
  <?php
           $erruser=NULL;
            $errpass=NULL;
            $flag=null;
             if(isset($_POST['BtnSubmit']))
        {
                // echo $_POST["UserPassword"];
             $flag=0;
            if($_POST['UserName']==NULL || $_POST['UserName']=="" )
            {
                $flag=1;
                $erruser="invalid Username *";
            }
            if($_POST['UserPassword']==NULL )
            {
                $flag=1;
                $errpass="invalid password *";
            }
            if($flag==0)
            {
                $user=$_POST['UserName'];
                $pass=$_POST['UserPassword'];
                
                if(isset($_POST['RememberMe']))
            {
         
               
              
                 setcookie("Username",$user,time()+(3600));
                 setcookie("Password",$pass,time()+(3600));
 
          
            }
                //echo $pass;     
                    $data=new mysqli("localhost","root","","clinic");
                    $q="select * from Patient_Master where User_Name='$user' and Password='$pass'";
             //       echo $q;
                    $login=$data->query($q);
                    //echo $login;
                    if($login==TRUE)
                    {          
                        $row=$login->fetch_assoc();
                        if($user==$row['User_Name'] && $pass==$row['Password'])
                        {
                            echo 'sucessfully';
                           // $_SESSION['full']=$row['fullName'];
                            header('location:PatientSide_Healthcare.php');
                           // header('location: Registration.php');
                            echo $row['password'];      
                            $_SESSION['Ses_patient_id']=$row['Patient_id'];
                            $_SESSION['Ses_patient_Name']=$row['Full_Name'];
                            
                        }
                        
                    }
                    else   
                            {
                                echo 'fail';
                            }
                    $data->close();
                    if($user=="Staff123" && $pass=="Staff123")
                    {
                        header('location:StaffSide_Appointment.php');
                    }
                    if($user=="Doctor123" && $pass=="Doctor123")
                    {
                        
                         header('location:DoctorSide_Report.php');
                    }
        }
        }
       
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
                
                <script src="/path/to/bootstrap.min.js"></script>
                <script>
                    
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
     height: 100%;
 	background-repeat: no-repeat;
 	background-color: #42b3e5;
       
 	font-family: 'Oxygen', sans-serif;
	    
}

.main{
 	margin:50px 15px;
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
    width: 500px;

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
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 600px;
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
          
            
		<div class="container">
                    
                    
			<div class="row main">
				<div class="main-login main-center">
                                    <h1 style="text-align: center">Unique Care</h1>
                                    <h2 style="text-align: center" >Login</h2>
                                    <form  method="post"  id="reg_form" class="form-horizontal">
                                        <fieldset>
                                        
						
						

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
                                                                    	<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="UserName" id="UserName1"  placeholder="Enter your Username" value="<?php if(isset($_COOKIE['Username']))  {echo $_COOKIE['Username'];}?>" />
								</div>
                                                            <span  ><?php if($flag==1){echo $erruser;} ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="UserPassword" id="Password1"  placeholder="Enter your Password" value="<?php if(isset($_COOKIE['Password']))  {echo $_COOKIE['Password'];}?>" />
								</div>
                                                            <span ><?php  if($flag==1){echo $errpass;} ?></span>
							</div>
						</div>
                                            <div class="form-group">
							
							<div class="cols-sm-10">
                                                            <table>
									
                                                                <tr>
                                                                
                                                                <td><input type="checkbox" class="form-control" name="RememberMe" id="RememberMe" />     
                                                                </td>
                                                                <td>Remember Me</td>
                                                                
                                                            </tr>
                                                            </table>
								
							</div>
						</div>
                                            
           

						

						<div class="form-group ">
							
                                                       
                                                    <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" name="BtnSubmit" value="Login">
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

 
