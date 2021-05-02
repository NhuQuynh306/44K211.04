<?php session_start();
error_reporting(E_ERROR | E_PARSE);
$ee_id=$_SESSION['eeid'];

require 'connect.php';

if (!isset($ee_id) || $ee_id == '' || $ee_id == null) {
    header('location: jobseeker_login.php');
    $_SESSION['err_login'] = 'Hãy đăng nhập để tham gia công việc !';
    exit();
}
else {
    $jid=$_GET['jid'];

    $query1 = "select a_ee_id from applicants where a_j_id='$jid' and a_ee_id='$ee_id'";
    $value1 = mysqli_query($connect,$query1);
    $row1 = mysqli_fetch_array($value1,MYSQLI_ASSOC);
    $eeid=$row1['a_ee_id'];
    
    if($eeid==$ee_id)
    {
        $applied = 0;
        header("location:process_applied.php?applied=$applied");
    }
    else
    {
        $query2 = "select j_id,j_er_id from jobs where j_id='$jid'";
        $result = mysqli_query($connect,$query2);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $j_erid=$row['j_er_id'];
        
        $q="INSERT INTO applicants (a_ee_id, a_j_id, a_er_id) VALUES('$ee_id','$jid','$j_erid')";
        $result1=mysqli_query($connect,$q);
        if($result1)
        {
            $applied=1;
            header("location:process_applied.php?applied=$applied");
        }
        else
        { 
            $applied=2;
            header("location:process_applied.php?applied$applied");
        }
    }
}


?>