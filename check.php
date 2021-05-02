<?php

// This is a sample code in case you wish to check the email from a mysql db table
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['email']))
{
    $email = $_POST['email'];


    //Database connection fileds
    require 'connect.php';


    $sql_check = mysqli_query($connect, "SELECT ee_email FROM employees WHERE ee_email='$email'");

    if(mysqli_num_rows($sql_check))
    {
        echo '<div style="color:red; "> <b> '.$email.'</b> đã được đăng ký.</style>';
    }
    else
    {
        echo '<div style="color:green; "> <b> '.$email.'</b> Hợp lệ.</style>';
    }

}

?>