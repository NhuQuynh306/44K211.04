<?php session_start();
error_reporting(E_ERROR | E_PARSE);
    unset($_SESSION['add']);
    //fetch employer status active or not
    $employer_id= $_SESSION['erid'];
    require 'connect.php';
      
    $emp="select er_active,er_company from employers where er_id = '$employer_id' ";
    $empresult = mysqli_query($connect,$emp);
    $row  = mysqli_fetch_array($empresult,MYSQLI_ASSOC);
    $active=$row['er_active'];
    $company1=$row['er_company'];
    
    if($active == 1) {
        
        $company=$_POST['company'];
        //echo $company;
        $category=$_POST['category'];
        //echo $category;
        $title=$_POST['title'];
        //echo $title;
        $salary=$_POST['salary'];
        //echo $salary;
        $hour=$_POST['hours'];
        //echo $hour;
        $type=$_POST['type'];
        //echo $type;
        $city=$_POST['city'];
        //echo $city;
        $sector=$_POST['sector'];
        //echo $sector;
        $experience=$_POST['experience'];
        //echo $experience;
        $vacancy=$_POST['vacancy'];
        //echo $vacancy;
        $description=$_POST['description'];
        //echo $description;
        $datej= date("Y-m-d", strtotime($_POST['datej']));
        //echo $datej;
        $todays_date = date("Y-m-d");
        //echo $todays_date;
        
        $q = "INSERT INTO jobs (j_er_id,j_category,j_owner_name,j_title,j_hours,j_salary,j_sector,j_date,j_type,j_vacancy,j_company,j_experience,j_description,j_city,j_active,date_d) 
        VALUES('$employer_id','$category','$company1','$title',$hour,'$salary','$sector','$datej','$type','$vacancy','$company','$experience','$description','$city','0','$todays_date')";
            
        //echo $q; die();   
        mysqli_query($connect, $q) or die("wrong query");
        $_SESSION['add'] = 1;
    
    } else {
        $_SESSION['add'] = 0;
    }


    header('Cache-Control: no cache'); //no cache
    //session_cache_limiter('private_no_expire'); // works
    //session_cache_limiter('public'); // works too
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="images/employer.png" type="image/x-icon">
        <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
        <title>Tiến trình thêm công việc</title>
        <link rel="stylesheet" type="text/css" href="css/style-employer.css" />
        <link rel="stylesheet" type="text/css" href="lib/jquery.ad-gallery.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="lib/jquery.ad-gallery.js"></script>
        <script type="text/javascript">
            $(function() {
              $('img.image1').data('ad-desc', 'Whoa! This description is set through elm.data("ad-desc") instead of using the longdesc attribute.<br>And it contains <strong>H</strong>ow <strong>T</strong>o <strong>M</strong>eet <strong>L</strong>adies... <em>What?</em> That aint what HTML stands for? Man...');
              $('img.image1').data('ad-title', 'Title through $.data');
              $('img.image4').data('ad-desc', 'This image is wider than the wrapper, so it has been scaled down');
              $('img.image5').data('ad-desc', 'This image is higher than the wrapper, so it has been scaled down');
              var galleries = $('.ad-gallery').adGallery();
              
              $('#switch-effect').change(
                function() {
                  galleries[0].settings.effect = $(this).val();
                  return false;
                }
              );
              $('#toggle-slideshow').click(
                function() {
                  galleries[0].slideshow.toggle();
                  return false;
                }
              );
              $('#toggle-description').click(
                function() {
                  if(!galleries[0].settings.description_wrapper) {
                    galleries[0].settings.description_wrapper = $('#descriptions');
                  } else {
                    galleries[0].settings.description_wrapper = false;
                  }
                  return false;
                }
              );
            });
        </script>
    </head>
    <style>
        input[type=text]{
        color:#f2eeee;
        }
        input[type=text]:focus{ color:#fff;}
        input.focus {
        border: 1px solid #F00;
        }
    </style>
    <style>
        .example {
        border: 1px solid #CCC;
        background: #f2f2f2;
        padding: 10px;
        }
        ul {
        list-style-image:url(list-style.gif);
        }
        pre {
        font-family: "Lucida Console", "Courier New", Verdana;
        border: 1px solid #CCC;
        background: #f2f2f2;
        padding: 10px;
        }
        code {
        font-family: "Lucida Console", "Courier New", Verdana;
        margin: 0;
        padding: 0;
        }
        #gallery {
        padding-top: 0px;
        padding-right: 30px;
        padding-bottom: 0px;
        padding-left: 30px;
        width:425px;
        margin-top: 0;
        margin-right: auto;
        margin-bottom: 0;
        margin-left: auto;
        }
        #descriptions {
        position: relative;
        height: 50px;
        background: #EEE;
        margin-top: 10px;
        width: 470px;
        padding: 10px;
        overflow: hidden;
        }
        #descriptions .ad-image-description {
        position: absolute;
        }
        #descriptions .ad-image-description .ad-description-title {
        display: block;
        }
    </style>
    <style>
        input[type=text]{ color:#ccc;}
        input[type=text]:focus{ color:#71716f;}
        input.focus {
        border: 1px solid #F00;
        }
    </style>
    <body>
        <div class="home_header_main">
            <div id="home_header">
                <div class="home_logo"><a href="employer_home.php"><img src="images/large_logo.png" width="180" /></a></div>
                <div class="home_header_right">
                    <div class="home_right_topmenubar">
                        <?php
                            include ('includes/ee_top.inc.php');
                            ?>
                    </div>
                    <div class="home_menubar">
                        <div class="home_socialmedia_icons">
                            <ul>
                                <li><a href="#"><img src="images/facebook.png" width="23" /></a></li>
                                <li><a href="#"><img src="images/twitter.png" width="23" /></a></li>
                                <li><a href="#"><img src="images/linkedin.png" width="23" /></a></li>
                            </ul>
                        </div>
                        <div class="home_menubar_manu">
                            <?php
                                include ('includes/ee_menu.inc.php');
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="em_reg_ban_main">
            <div id="employee_banner_reg">
                <div class="employee_login_div_reg">
                    <div class="employee_login">
                        <div class="employee_register" style="background:url(images/reg-bg.png) repeat;">
                            <br />
                            <table width="100%" height="233" border="0" cellpadding="10" cellspacing="5">
                                <tr>
                                    <td height="178" colspan="3" style="text-align:center; color:#5393b5; font-family:Tahoma, Geneva, sans-serif; font-size:15px;">
                                        <?php 
                                            if($_SESSION['add'] == 1) { 
                                                echo "Công việc mới đã được thêm thành công";
                                            }
                                            else if($_SESSION['add'] == 0) { 
                                                echo "Bạn chỉ có thể thêm công việc sau khi được sự chấp thuận của quản trị viên ...";
                                            }
                                        ?>              
                                    </td>
                                </tr>
                                <tr>
                                    <td style="text-align:center; color:#5393b5; font-family:Tahoma, Geneva, sans-serif; font-size:15px;"><a href="employer_home.php" style="color:#5393b5; text-decoration:underline;">Trở về Trang Chủ</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
        <div id="home_navigator"></div>
        <div id="home_footer_main">
        <div id="home_footer">
            <div id="home_footer_slice_one"> <a href="#"><img src="images/large_logo.png" width="100"  border="none"/></a> </div>
            <div id="home_footer_slice_two">
                <span class="home_foote_span">JFD Links</span><br />
                <?php
                    include ('includes/ee_footer.inc.php');
                    ?>  
                <div id="home_footer_slice_five"> <span class="home_foote_span">Liên hệ hỗ trợ</span><br />
                    <br />
                    <span class="speech_number">090 1168 525</br></br> jobfordue@gmail.com</span> 
                </div>
            </div>
        </div>
    </body>
</html>