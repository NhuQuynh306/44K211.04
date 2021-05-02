<?php error_reporting(E_ERROR | E_PARSE); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="images/employer.png" type="image/x-icon">
        <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
        <title>Câu hỏi thường gặp</title>
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
        <link rel="stylesheet" href="css/collapsible.css" />
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <script>
            $(function() {
              $( "#accordion" ).accordion();
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
        <div id="home_content_main">
            <div id="employee_banner_reg">
                <div class="employee_login_div_reg">
                    <div class="employee_login">
                        <div class="employee_register">
                            <img src="images/faq.png" style="margin-bottom:20px;"  align="left"/><br />
                            <span style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#2699d6; font-size:17px;">Câu hỏi thường gặp</span>
                            <table width="100%" cellspacing="5" cellpadding="5">
                                <tr>
                                    <td>
                                        <div id="accordion">
                                            <h3>Làm cách nào để chúng tôi đăng việc làm trên jobfordue.com?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Thời hạn của một tài khoản là gì?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Tính hợp lệ của một Công việc đã Đăng là gì?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Chúng ta có thể đăng một công việc cho một ngày trong tương lai không?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Tôi có thể chỉnh sửa một công việc đã đăng không?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Tôi có thể tìm kiếm một công việc mà tôi đã đăng không?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Làm cách nào tôi có thể xem phản hồi cho công việc đã đăng?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Tôi sẽ có một người tìm việc nộp đơn xin việc nhiều hơn một lần?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Làm cách nào để tìm kiếm ứng viên?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Tìm kiếm CV là gì? Tôi có thể xem hoặc tải xuống bao nhiêu hồ sơ?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Làm cách nào để liên hệ với các ứng viên được liệt kê trong kết quả tìm kiếm của tôi?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <h3>Làm cách nào để thay đổi mật khẩu của tôi?</h3>
                                            <div>
                                                Trả lời ...
                                            </div>
                                            <div class="search_main_div">
                                            <?php
                                                include ('includes/sidebar.inc.php');
                                                ?> 
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div></div>
        </div>
        </div>
        <div class="clear_both">&nbsp;</div>
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
        <div id="home_footer_main"></div>
    </body>
</html>