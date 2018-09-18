<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$eemail = "Receiver Address";
    $ufnm=$_SESSION['ses_fname'];
    $ulnm=$_SESSION['ses_lname'];
    //$rndno = rand(1000, 9999); //Generate random number using rand function.
    //$_SESSION['otp'] = $rndno;
    
    $to = $eemail;
    $subject = "Verification : AdWale";
    $txt = "<h3>Hello $ufnm $ulnm ($eemail), <br/><br/><br/> Your <font color='#5190F7'>A</font>d<font color='#5190F7'>W</font>ale verification Code is : <font color='#3c763d'>" . $rndno . "</font></h3>";
    $txt .= "<br/><br/><h3>Thank You!</h3>";

    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: adwale.supprt18@gmail.com";

    if (mail($to, $subject, $txt, $headers)) {
        echo "<font color='#31708f'>sending OTP, please check your email.</font>";
    } else {
        echo "<font color='red'>Mail not send, please try again!</font>";
    }
    ?>