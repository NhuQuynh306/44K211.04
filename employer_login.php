<?php session_start();
error_reporting(E_ERROR | E_PARSE);
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="images/employer.png" type="image/x-icon">
        <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
        <title>Nhà tuyển dụng đăng nhập</title>
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
        color:#000000;
        }
        input[type=text]:focus{ color:#000;}
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
        <div id="employee_login_banner_main">
            <div class="employee_login_banner">
                <div class="login_div">
                    <form name="employer_login" action="process_employer_login.php" method="post" >
                        <table width="264" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="254" height="28" class="login_box">Đăng nhập nhà tuyển dụng</td>
                            </tr>
                            <tr>
                                <td height="auto" style="padding-top:10px;">Email</td>
                            </tr>
                            <tr>
                                <td height="auto" style="padding:0px;">
                                    <input type="text" placeholder="Email" class="login_select"
                                        name="email"  id="email"
                                        onblur="if(value=='') value = ''" 
                                        onfocus="if(value=='') value = ''"/>    
                                </td>
                            </tr>
                            <tr>
                                <td height="auto" style="padding-top:10px;" >Mật khẩu</td>
                            </tr>
                            <tr>
                                <td height="auto"><input type="password" placeholder="password"
                                    class="login_select"
                                    name="password" 
                                    onblur="if(value=='') value = ''" 
                                    onfocus="if(value=='') value = ''"/></td>
                            </tr>
                            <tr>
                                <td height="auto" style="padding-top:8px; font-size:11px;" ><input type="checkbox" />Giữ cho tôi đăng nhập cho đến khi tôi đăng xuất.</td>
                            </tr>
                            <tr><input type="hidden" value="Login" name="Login" />
                                <td height="37"    ><input type="submit" value="Đăng nhập" class="login_submit" /></td>
                            </tr>
                            <tr>
                                <td height="30"    ><a href="#">Đặt lại mật khẩu</a> / <a href="#">Đăng ký ngay</a></td>
                            </tr>
                            <tr>
                                <td height="auto">
                                    Bằng cách đăng nhập, bạn đồng ý với các<br><span style="color:#cc0000;">
                                    Điều khoản và điều kiện</span>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="em_banner_right_div wb_m_n">
                  <div class="wb_n">
                    <video class="img-fluid" autoplay="true" loop>
                        <source src="https://cdn.dribbble.com/users/1233499/screenshots/15158600/media/d18a113dd20c5dd097deb76b70bcfc25.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                  </div>
                </div>
            </div>
        </div>
        <div id="employee_content">
            <div class="employee_content_left">
                <div class="employee_content_left_divone"><strong>Khách hàng nổi bật</strong></div>
                <div class="employee_content_left_divtwo">
                    <div id="container">
                      <div id="gallery" class="ad-gallery">
                            <iframe  frameborder="0" width="1075" height="125" src="navigator/example/navigator.html"   scrolling="no" frameborder="0"   allowtransparency="no" >
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="employee_content_right">
                <div class="employee_content_right_divone"><strong>Chưa là thành viên ?</strong></div>
                <div class="employee_content_right_divtwo">
                  <h1>Quyền lợi dành cho thành viên</h1>
                  <div class="round_ticker">
                      <h3>Đăng việc và tìm đúng chuyên gia</h3>
                      <p>Đặt vị trí tuyển dụng của bạn cho các chuyên gia phù hợp ..</p>
                  </div>
                  <div class="round_ticker">
                      <h3>Tìm kiếm và lọc CV</h3>
                      <p>Tìm kiếm và lọc CV theo các tiêu chí khác nhau.</p>
                  </div>
                  <div class="round_ticker">
                      <h3>Tiếp tục tìm kiếm</h3>
                      <p>Nhận quyền truy cập vào cơ sở dữ liệu tiếp tục ngay lập tức.</p>
                  </div>
                  <div class="round_ticker">
                      <h3>Đánh giá CV</h3>
                      <p>Bạn có thể xem số lượng CV nhận được cho mỗi công việc mà bạn đã đăng.</p>
                  </div>
                </div>
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