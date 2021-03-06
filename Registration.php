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
    width: 400px;
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
width: 500px;

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
            
         
            <?php
            $errFullName=
            $errEmail=
            $errUserName=
            $errPassword=
            $errGender=
            $errAge=
            $errBloodGroup=
            $errHeight=
            $errWeight=
            $erraddress=
            $errContactNumber=
            $flag=NULL;
           
            
            if(isset($_POST['BtnRegister']))
            {
              
                $flag=0;
                if($_POST['txtFullName']==NULL || $_POST['txtFullName']=="")
                {
                    $flag=1;
                    $errFullName="Required  FullName";
                }
                
                else if(!(preg_match ("/^[a-zA-Z- ]{1,40}$/",$_POST['txtFullName'])))
                {
                    $flag=1;
                    $errFullName="only Alphabets charater allowed";
                    
                }
                if($_POST['txtEmail']==NULL || $_POST['txtEmail']=="" )
                {
                    $flag=1;
                    $errEmail="Required Email";
                }
                else if((!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $_POST['txtEmail'])))
                {
                    $flag=1;
                    $errEmail="proper email allowed";
                }
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
                if($_POST['txtAddress']==NULL || $_POST['txtAddress']=="")
                {
                    $flag=1;
                    $erraddress="Required Address";
                }
                if(!isset($_POST['RbGender']) )
                {
                    $flag=1;
                    $errGender="Required Gender";
                }
                if($_POST['txtAge']==NULL || $_POST['txtAge']=="" )
                {
                    $flag=1;
                    $errAge="Required Age";
                }
                else if((!preg_match('/^[0-9]*$/',$_POST['txtAge'])))
                {
                    $flag=1;
                    $errAge="only number allow";
                    
                }
                if($_POST['BloodGroup']=="select")
                {
                    $flag=1;
                    $errBloodGroup="Required BloodGroup";
                }
                if($_POST['txtHeight']==NULL  || $_POST['txtHeight']=="")
                {
                    $flag=1;
                    $errHeight="Required Height";
                }
                else if((!preg_match('/\d+.\d{1,2}/',$_POST['txtHeight'])))
                {
                    $flag=1;
                    $errHeight="only number allowed";
                    
                }
                if($_POST['txtWeight']==NULL || $_POST['txtWeight']=="")
                {
                    $flag=1;
                    $errWeight="Required Weight";
                }
                else if((!preg_match('/^[0-9]*$/',$_POST['txtWeight'])))
                {
                    $flag=1;
                    $errWeight="only number allowed";
                    
                }
                
                if($_POST['txtContactNumber']==NULL || $_POST['txtContactNumber']==""  )
                {
                    $flag=1;
                    $errContactNumber="Required ContactNumber";
                }
                else if((!preg_match('/^[0-9]*$/',$_POST['txtContactNumber'])))
                {
                    $flag=1;
                    $errContactNumber="only number allowed";
                    
                }
            
               
             
                
                if($flag==0)
                {
                    $Fullname=$_POST['txtFullName'];
                    $email=$_POST['txtEmail'];
                    $userName=$_POST['txtUserName'];
                    $password=$_POST['txtPassword'];
                    $Address=$_POST['txtAddress'];
                    $Gender=$_POST['RbGender'];
                    $Height=$_POST['txtHeight'];
                    $Weight=$_POST['txtWeight'];
                    $Age=$_POST['txtAge'];
                    $BloodGroup=$_POST['BloodGroup'];
                    $ContactNumber=$_POST['txtContactNumber'];
                    
                    
                    
                    
                    

                        $data=new mysqli("localhost","root","","clinic");
                        $query=$data->query("insert into Patient_Master(Full_Name,Email,Address,Gender,User_Name,Password,Age,Blood_Group,Height,Weight,Contact_Number)  values('$Fullname','$email ','$Address','$Gender','$userName','$password',$Age,'$BloodGroup','$Height','$Weight','$ContactNumber')");

                        if($query==TRUE)
                        {                  
                            echo 'sucessfully';
                            header('location:LoginMain.php');
                        }
                         else {

                            echo 'fail';
                         }

                        $data->close();
                }
            }
            
          
          
            
            ?>
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
									<input type="text" class="form-control" name="txtFullName" id="name"  placeholder="Enter your Name" />
								</div>
                                                            <span id="Spanfullname"><?php  if($flag==1){echo $errFullName;} ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="txtEmail" id="email"  placeholder="Enter your Email" pattern="^\w+[\w-\.]*\@\w+((-\w+)|(\w*))\.[a-z]{2,3}$" />
								</div>
                                                            <span><?php  if($flag==1){echo $errEmail;}  ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Address</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-address-card-o" aria-hidden="true"></i></span>
                                                                       <input type="text" rows="10" cols="50"  class="form-control" name="txtAddress" id="Address"  placeholder="Enter your Address" />
                                                                      <!--  <textarea rows="5" cols="10" class="form-control" name="txtAddress" id="Address"  minlength="500" placeholder="Enter your Address" >
                                                                            
                                                                        </textarea>
                                                                        -->
                                                                        
								</div>
                                                            <span><?php  if($flag==1){echo $erraddress;} ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">UserName</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-info-circle" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="txtUserName" id="password" minlength="8"  maxlength="12" placeholder="Enter your UserName"
                                                                               />
								</div>
                                                            <span><?php  if($flag==1){echo $errUserName;} ?></span>
							</div>
						</div>
                                            
                                                <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
                                                                        <input type="password" class="form-control" name="txtPassword" id="name" minlength="8" maxlength="12" placeholder="Enter your Password" />
								</div>
                                                            <span><?php  if($flag==1){echo $errPassword;} ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Gender</label>
							<div class="cols-sm-10">
								<div class="input-group">
                                                                    <table>
                                                                        <tr>
									<td><span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
                                                                        </td>
                                                                        
                                                                            <td>
                                                                                <input type="radio" class="form-control"  value="Male" name="RbGender" id="confirm"  />
                                                                            </td>
                                                                            <td>Male</td>
                                                                            
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            
                                                                               
                                                                            <td><span class="input-group-addon"><i class="fa fa-female" aria-hidden="true"></i></span></td>
                                                                            <td><input type="radio" class="form-control" name="RbGender" value="Female" id="confirm" /> 
                                                                        </td>
                                                                        <td>Female</td>
                                                                       
                                                                      
                                                                        </tr>

                                                                        </table>
								</div>
                                                            <span><?php  if($flag==1){echo $errGender;} ?></span>
							</div>
						</div>
                                            
                                            
                                            <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Age</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="txtAge" id="name"  placeholder="Enter your Age" />
								</div>
                                                            <span><?php  if($flag==1){echo $errAge;} ?></span>
							</div>
						</div>
                                            
                                            <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">BloodGroup</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-tint" aria-hidden="true"></i></span>
                                                                        <select class="form-control" name="BloodGroup" >
                                                                            <option selected value="select" > Select option</option>
                                                                            <option value="A+">A+</option>
                                                                            <option value="A-">A-</option>
                                                                            <option value="B+">B+</option>
                                                                            <option value="B-">B-</option>
                                                                            <option value="AB+">AB+</option>
                                                                            <option value="AB-">AB-</option>
                                                                            <option value="O+">O+</option>
                                                                            <option value="O-">O-</option>
                                                                        </select>
								</div>
                                                            <span><?php  if($flag==1){echo $errBloodGroup;} ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Height</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-arrows-v" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="txtHeight" id="email"  placeholder="Enter your Height"/>
								</div>
                                                            <span><?php  if($flag==1){echo $errHeight;} ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Weight</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-arrows-h" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="txtWeight" id="Weight"  placeholder="Enter your Weight"/>
                                                                        
                                                                        
								</div>
                                                            <span><?php  if($flag==1){echo $errWeight;} ?></span>
							</div>
						</div>
                                            

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Contact Number</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                                        <input type="text" class="form-control" name="txtContactNumber" id="ContactNumber" maxlength="10"  placeholder="Enter your  mobile Number"/>
								</div>
                                                            <span><?php  if($flag==1){echo $errContactNumber;} ?></span>
							</div>
						</div>

						<div class="form-group ">
							
                                                    
                                                    <input type="submit" id="button" class="btn btn-primary btn-lg btn-block login-button" value="Register" name="BtnRegister">
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