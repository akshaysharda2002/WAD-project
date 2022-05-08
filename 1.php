<?php 
    $server ="localhost";
    $username ="root";
    $password ="";
    
    $con =mysqli_connect($server,$username,$password,"customers");

    if(!$con){
        die("connection to thid database failed due to" .mysqli_connect_error());
    }
   // echo "Success connecting to database";
    $first_name=$_POST['fs'];
    $last_name=$_POST['ls'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $experience=$_POST['exp'];
    $field_of_interest=$_POST['foi'];
    $extra=$_POST['extra'];

   $sql="INSERT INTO `regestration` ( `first_name`, `last_name`, `email`, `contact`, `gender`, `experience`, `field_of_interest`, `extra`) 
   VALUES ( '$first_name', '$last_name', '$email', '$contact', '$gender', '$experience', '$field_of_interest', '$extra');";
    
    echo $sql;




    ?>