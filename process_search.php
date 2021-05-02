<?php session_start();
error_reporting(E_ERROR | E_PARSE);
    $_SESSION['status']=1; 
    $_SESSION['category']='jobseeker';
    header('Cache-Control: no cache'); //no cache
    session_cache_limiter('private_no_expire'); // works
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Tìm kiếm công việc</title>
        <link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
        <style>
            input[type=text]{ color:#E6E6E6;}
            input[type=text]:focus{ color:#fff;}
            input.focus {
            border: 1px solid #F00;
            }
        </style>
    </head>
    <body>
        <div class="home_header_main">
            <div id="home_header">
                <div class="home_logo"><a href="index.php"><img src="images/large_logo.png" width="180" /></a></div>
                <div class="home_header_right">
                    <div class="home_right_topmenubar">
                        <?php
                            include ('includes/top.inc.php');
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
                                include ('includes/menu.inc.php');
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear_both">&nbsp;</div>
        <div class="home_banner_main">
            <div id="home_banner_search">
                <div id="reg_maindiv">
                    <div class="reg_left">
                        <div style="width:750px; height:auto; margin:10px 0 0 35px; font-family:Arial; font-size:13px;">
                            <table width="100%" cellpadding="5" cellspacing="0">
                                <?php
                                    require 'connect.php';
                                    
                                    $keyword=$_POST['keyword'];
                                    if(empty($_POST))
                                    {
                                        exit;
                                    }
                                    
                                    $query = "select * from jobs where j_title LIKE '%".$keyword."%' or j_city LIKE '%".$keyword."%' or j_city LIKE '%".$keyword."%' or j_company LIKE '%".$keyword."%'";
                                    
                                    // echo $query; die();
                                    
                                    $result = mysqli_query($connect,$query);
                                    if($result){ 
                                        
                                        if(mysqli_affected_rows($connect)!=0){
                                            echo '<tr style="background:#F7F7F7;">
                                                <td width="13%"  style="border-right:none; border-bottom:none;">Mã Công Việc</td>
                                                <td width="74%" style="border-bottom:none; border-right:none;">Vị trí / Công Việc</td>
                                                <td width="13%" style="border-bottom:none;">Hết hạn vào </td>
                                            </tr>';
                                              while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                                        echo
                                    	'<tr class="mouse">
                                    <td style="color:#B30000">'.$row['j_id'].' </td>
                                    
                                    <td  ><span style="color:#CC0099; font-size:14px;"><strong>'.$row['j_title'].'</strong></span><br />
                                    
                                    <span style="color:#060;"> Company:'.$row['j_company'].'</span><br />
                                    <span style="color:#000;"> Location:'.$row['j_city'].'</span><br />
                                    <span style="color:#075;"> Vacancy:'.$row['j_vacancy'].'</span><br /></td>
                                    
                                    <td style="text-align:left top;">'.date('d/m/Y', strtotime($row['j_date'])).'<br /> 
                                    ';
                                    if(isset($_SESSION['status']) && $_SESSION['category']=="jobseeker")
                                    {
                                        echo ' <a href="jobseeker_job_details.php?jid='.$row['j_id'].'" style="text-decoration:none; color:#000; border:none;"><img src="images/apply.png" /></a>';
                                    }
                                    echo '
                                          </td>
                                          </tr>
                                         ';
                                    	
                                        }
                                    }
                                    	else 
                                        echo '<span class="miss_key">Không tìm thấy kết quả phù hợp</span><br>
                                        <span class="quay_lai">Quay lại để tìm kiếm công việc <a href="index.php" class="search">Quay lại</a></span>';
                                        }
                                      
                                    
                                    else {
                                        echo '<span class="miss_key">Thiếu giá trị tìm kiếm</span><br>
                                            <span class="quay_lai">Quay lại để tìm kiếm công việc <a href="index.php" class="search">Quay lại</a></span> 
                                        ';
                                    }
                                    
                                    ?>
                            </table>
                        </div>
                    </div>
                    <div class="search_main_div">
                        <?php
                            include ('includes/sidebar.inc.php');
                            ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="home_logos">
            <iframe  frameborder="0" width="1075" height="125" src="navigator/example/navigator.html"   scrolling="no" frameborder="0"   allowtransparency="no" >
            </iframe>
        </div>
        <div class="clear_both">&nbsp;</div>
        <div id="home_navigator"></div>
        <div id="home_footer_main">
        <div id="home_footer">
            <div id="home_footer_slice_one"> <a href="#"><img src="images/large_logo.png" width="100"  border="none"/></a> </div>
            <div id="home_footer_slice_two">
                <span class="home_foote_span">JFD Links</span><br />
                <?php
                    include ('includes/footer.inc.php');
                    ?>
                <div id="home_footer_slice_five"> <span class="home_foote_span">Liên hệ hỗ trợ</span><br />
                    <br />
                    <span class="speech_number">090 1168 525</br></br> jobfordue@gmail.com</span> 
                </div>
            </div>
        </div>
    </body>
</html>