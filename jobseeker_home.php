<?php session_start();
error_reporting(E_ERROR | E_PARSE);
    require 'connect.php'; 
    
    $query1 = "SELECT * FROM `jobs`";
    $row1 = [];
    $result1 = mysqli_query($connect,$query1);
    while ($row=mysqli_fetch_assoc($result1)) {
		$row1[] = $row;
	}
    // mysqli_close($connect);
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Trang chủ</title>
        <link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
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
        <style type="text/css">
            * {
            font-family: Arial, Helvetica, sans-serif;
            color: #333;
            line-height: normal;
            }
            h2 {
            margin-top: 1.2em;
            margin-bottom: 0;
            padding: 0;
            border-bottom: 1px dotted #dedede;
            }
            h3 {
            margin-top: 1.2em;
            margin-bottom: 0;
            padding: 0;
            }
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
            background: #fff;
            padding-top: 0px;
            padding-right: 125px;
            padding-bottom: 0px;
            padding-left: 30px;
            width:1000px; margin:0 auto;
            }
            #descriptions {
            position: relative;
            height: 50px;
            background: #EEE;
            margin-top: 10px;
            width: 640px;
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
        <div class="home_banner_main wb_main">
            <div class="wb">
                <div class="col_b">
                    <h1 class="text-center" style="color: #330066; font-weight: bold; font-size: 44px;">TÌM VIỆC KHÓ <br> CÓ JOBS FOR DUE<p></p>
                    </h1><h2 style="color: #330066; font-weight: 600; font-style: italic; font-size: 22px; text-align: center;border-bottom:none;">SỞ HỮU NGAY MỘT CÔNG VIỆC MƠ ƯỚC<p></p>
                    <p style="color: #212F3F; font-size: 16px; margin-top: 20px; font-weight: 600;">Chúng tôi giúp các doanh nghiệp tìm được những ứng viên tốt nhất và mang lại những vị trí tốt nhất cho những ứng viên.</p>
                </h2></div>
                <div class="col_b">
                    <video class="img-fluid" autoplay="true" loop>
                        <source src="https://cdn.dribbble.com/users/1233499/screenshots/15158600/media/d18a113dd20c5dd097deb76b70bcfc25.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <div class="clear_both">&nbsp;</div>
        <div class="home_banner_main">
            <div id="home_banner">
                <span class="quick_search_span">Nhập từ khóa  : chức danh công việc, tên công ty, địa chỉ, v.v...</span>
                <form action="process_search.php" name="search" method="post">
                    <input type="text" class="quick_search_input" id="keyword" name="keyword" />
                    <input name="search" type="hidden" value="Search"/>
                    <input type="submit" value="Tìm kiếm"  onmouseover="this.style.backgroundColor='#449ac9';return true;" onmouseout="this.style.backgroundColor='#68b5de';return true;"  class="home_search"/>
                </form>
            </div>
        </div>
        <div id="container">
            <div id="gallery" class="ad-gallery">
                <iframe  frameborder="0" width="1075" height="125" src="navigator/example/navigator.html"   scrolling="no" frameborder="0"   allowtransparency="no" >
                </iframe>
            </div>
        </div>
        <div class="clear_both">&nbsp;</div>
        <div id="home_content_main">
            <div id="home_content">
                <div class="home_latest_jobposting">
                    <h2>Tin tuyển dụng mới nhất</h2>
                    <div id="latest_job_div">
                        <ul id="jobposting_firstul">
                            <li style="margin-left:10px;">Ngày đăng</li>
                            <li>Chức vụ</li>
                            <li>Công ty</li>
                            <li>Số lượng tuyển dụng</li>
                            <li>Kinh nghiệm</li>
                        </ul>
                        <?php
                            foreach($row1 as $row1)
                            
                            {
                              
                            echo     '<a href="jobseeker_job_details.php?jid='.$row1['j_id'].'"><ul id="jobposting_secondul">
                                     <li>'.date('d/m/Y',strtotime($row1['date_d'])).'</li>
                                     <li>'.$row1['j_title'].'</li>
                                     <li>'.$row1['j_company'].'</li>
                                     <li>'.$row1['j_vacancy'].'</li>
                                     <li>'.$row1['j_experience'].' năm</li>
                                   </ul></a>';
                               }
                             
                            ?>
                        <div class="jobposting_more"><a href="#"><em>Xem thêm ...</em></a></div>
                    </div>
                </div>
                <div class="home_brows_jobads">
                    <h2>Danh mục việc làm</h2>
                    <ul>
                        <li><a href="#">IT Phần Mềm</a></li>
                        <li><a href="#">IT Phần Cứng/Mạng</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Designer/Graphics Designer</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="home_footer_main">
            <div id="home_footer">
                <div id="home_footer_slice_one"> <a href="#"><img src="images/large_logo.png" width="100"  border="none"/></a> </div>
                <div id="home_footer_slice_two">
                    <span class="home_foote_span">JFD Links</span><br />
                    <?php
                        include ('includes/footer.inc.php');
                    ?>     
                    <div id="home_footer_slice_three"> 
                        <span class="home_foote_span">Liên hệ hỗ trợ</span><br /><br />
                        <span class="speech_number">090 1168 525</br></br> jobfordue@gmail.com</span> 
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>