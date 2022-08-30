<?php

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $number=$_POST['number'];
    $email=$_POST['email'];
    $sub=$_POST['subject'];
    $message=$_POST['message'];
    $mailto="";

    $headers="From: ". $email;
    $txt="You have a mail from " . $name . ".\n\n" .$message;
    $result=mail($mailto,$sub,$txt,$headers);
    if($result) 
        echo "<script>alert('mail send successfully');</script>";
    else
        echo "<script>alert('mail could'nt be send');</script>";
}