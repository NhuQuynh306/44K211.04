<?php session_start();
error_reporting(E_ERROR | E_PARSE);
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Đăng ký người tìm việc</title>
        <link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
        <link rel="stylesheet" type="text/css" href="js/style.js" />
        <!-- added for email check -->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/settings.js" type="text/javascript"></script>
        <SCRIPT type="text/javascript">
            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
            pic1 = new Image(16, 16); 
            pic1.src = "images/loader.gif";

            $(document).ready(function(){
            $("#email").on('change', function() { 
                var usr = $("#email").val();

                if(isEmail(usr)){
                    $("#status").html('<img src="images/loader.gif" align="absmiddle">&nbsp;Checking availability...');
                    setTimeout(() => {
                    }, 3000);
                        $.ajax({  
                        type: "POST",  
                        url: "check.php",  
                        data: "email="+ usr,  
                        success: function(msg){  
                        $("#status").ajaxComplete(function(event, request, settings){ 
                        
                            if(msg == 'OK')
                            { 
                                $("#email").removeClass('object_error'); // if necessary
                                $("#email").addClass("object_ok");
                                $(this).html('&nbsp;<img src="images/accepted.png" align="absmiddle"> <font color="Green"> Email Đã tồn tại </font>  ');
                            }  
                            else  
                            {  
                                $("#email").removeClass('object_ok'); // if necessary
                                $("#email").addClass("object_error");
                                $(this).html(msg);
                            }  
                        
                        });
                        
                        } 
                    
                    }); 
                
                } else{
                    $("#status").html('<font color="red">Nhập đầy đủ email</font>');
                    $("#email").removeClass('object_ok'); // if necessary
                    $("#email").addClass("object_error");
                    }
                
                });
            });
            
            //-->
        </SCRIPT>
        <style type="text/css">
            body{
            font-family:"Trebuchet MS";
            font-size:12px;
            }
            .inn{
            float:left;
            font-size:14px;
            border:solid 1px #000000;
            width:143px;
            font-family:Arial, Helvetica, sans-serif;
            color:#0066CC;
            font-weight:bold;	
            }
        </style>
        <script type="text/javascript">
            $( function () {
              
            twitter.screenNameKeyUp();
            $('#user_screen_name').focus();
            
            });
            
            
        </script>
        <!-- -----------------------------------------  -->
        <link rel="stylesheet" type="text/css" href="lib/jquery.ad-gallery.css">
        <script type="text/javascript" src="js/1.7.2.jquery.min.js"></script>
        <script type="text/javascript" src="lib/jquery.ad-gallery.js"></script>
        <script src="js/validation_jobseeker.js" type="text/javascript"></script>
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
            <!-------------------------------------- The end     -------------->
        <style type="text/css">
            * {
            font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Verdana, Arial, sans-serif;
            color: #333;
            line-height: 140%;
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
        <style>
            input[type=text]{ color:#333;}
            input[type=text]:focus{ color:#71716f;}
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
        <div class="home_banner_main_search">
            <div id="home_banner_search">
                <div id="reg_maindiv">
                    <div class="reg_left">
                        <form  onsubmit="return validateForm();" action="signup_ac.php" method="post" name="jobseeker_registration" enctype="multipart/form-data">
                            <div class="advanced_search_div">
                                <img src="images/write.png" width="40" align="left" class="advanced_image" />
                                <p><strong><span style="color:#2590c9;">Tạo hồ sơ của bạn ngay bây giờ</span></strong></p>
                                <table width="100%" cellspacing="10" cellpadding="5">
                                    <tr>
                                        <td colspan="3"><span class="create_profile_span">Tạo chi tiết đăng nhập</span></td>
                                    </tr>
                                    <tr>
                                        <td width="50%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Nhập Email của bạn</td>
                                        <td width="4%">:</td>
                                        <td width="46%">
                                            <input type="text" placeholder="Nhập Email của bạn"
                                                name="email" 
                                                onblur="if(value=='') value = ''" 
                                                onfocus="if(value=='') value = ''" class="advanced_box" id="email" name="email" onkeyup="twitter.updateUrl(this.value)"/>
                                            <div style="margin-top:10px;" id="status" >
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Tạo mật khẩu</td>
                                        <td>:</td>
                                        <td><input type="password" placeholder="Password"
                                            name="password" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="advanced_box" id="password" name="password"/></td>
                                    </tr>
                                    <tr>
                                        <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Xác nhận mật khẩu</td>
                                        <td>:</td>
                                        <td><input type="password" placeholder="Password"
                                            name="confirmpassword" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="advanced_box" id="confirmpassword" name="confirmpassword"/></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><span class="create_profile_span">Thông tin cá nhân của bạn</span></td>
                                    </tr>
                                    <tr>
                                        <td width="50%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Họ </td>
                                        <td width="4%">:</td>
                                        <td width="46%"><input type="text" placeholder="Họ"
                                            name="fname" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="advanced_box" id="fname" name="fname" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
                                    </tr>
                                    <tr>
                                        <td width="50%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Tên </td>
                                        <td width="4%">:</td>
                                        <td width="46%"><input type="text" placeholder="Tên"
                                            name="lname" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="advanced_box" id="lname" name="lname" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
                                    </tr>
                                    <tr>
                                        <td width="50%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Ngày Sinh</td>
                                        <td width="4%">:</td>
                                        <td width="46%"><input type="text" placeholder="dd"
                                            name="day" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''"  class="date_of_birth_box" id="day" name="day" onkeypress="return onlyNumbers(event);" maxlength="2"/>
                                            &nbsp;
                                            <input type="text" placeholder="mm"
                                                name="month" 
                                                onblur="if(value=='') value = ''" 
                                                onfocus="if(value=='') value = ''"  class="date_of_birth_box" id="month" name="month" onkeypress="return onlyNumbers(event);" maxlength="2"/>
                                            &nbsp;
                                            <input type="text" placeholder="yyyy"
                                                name="year" 
                                                onblur="if(value=='') value = ''" 
                                                onfocus="if(value=='') value = ''"  class="date_of_birth_box" id="year" name="year" onkeypress="return onlyNumbers(event);" minlength="4" maxlength="4"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Giới tính</td>
                                        <td>:</td>
                                        <td>
                                            <input type="radio" name="gender" value="Nam"> 
                                            Nam &nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="gender" value="Nữ"> Nữ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Thành phố hiện tại / Vị trí làm việc</td>
                                        <td>:</td>
                                        <td><input type="text" placeholder="Thành phố"
                                            name="city" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="advanced_box" id="city" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
                                    </tr>
                                    <tr>
                                        <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>Trình độ học vấn</td>
                                        <td>:</td>
                                        <td>
                                            <select id="education" title="-Education-" name="education" class="advanced_box_select">
                                                <option value="-1" label="Lựa chọn">Lựa chọn</option>
                                                <option value="Chưa Tốt Nghiệp" label="Chưa Tốt Nghiệp">Chưa Tốt Nghiệp</option>
                                                <option value="Tốt nghiệp Trung Học" label="Tốt nghiệp Trung Học">Tốt nghiệp Trung Học</option>
                                                <option value="Tốt nghiệp Phổ Thông" label="Tốt nghiệp Phổ Thông">Tốt nghiệp Phổ Thông</option>
                                                <option value="Tốt nghiệp Cao Đẳng" label="Tốt nghiệp Cao Đẳng">Tốt nghiệp Cao Đẳng</option>
                                                <option value="Tốt nghiệp Đại Học" label="Tốt nghiệp Đại Học">Tốt nghiệp Đại Học</option>
                                                <option value="Đã đi làm" label="Đã đi làm">Đã đi làm</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Số điện thoại</td>
                                        <td>&nbsp;</td>
                                        <td><input type="text"
                                                name="mnumber" 
                                                class="mobile_number_box" name="mnumber" id="mnumber" onkeypress="return onlyNumbers(event);" maxlength="10" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3"><span class="create_profile_span">Chi tiết việc làm hiện tại của bạn</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>&nbsp;Kinh Nghệp</td>
                                        <td>:</td>
                                        <td>
                                            <select id="experience" title="-Experience-" name="experience" class="advanced_box_select">
                                                <option value="-1" label="Lựa chọn">Lựa chọn</option>
                                                <option value="0">Thực tập</option>
                                                <option value="1" label="1 Năm">1 Năm</option>
                                                <option value="2" label="2 Năm">2 Năm</option>
                                                <option value="3" label="3 Năm">3 Năm</option>
                                                <option value="4" label="4 Năm">4 Năm</option>
                                                <option value="5" label="5 Năm">5 Năm</option>
                                                <option value="6" label="6 Năm">6 Năm</option>
                                                <option value="7" label="7 Năm">7 Năm</option>
                                                <option value="8" label="8 Năm">8 Năm</option>
                                                <option value="9" label="9 Năm">9 Năm</option>
                                                <option value="10" label="10 Năm">10 Năm</option>
                                                <option value="10+" label="Hơn 10 Năm">Hơn 10 Năm</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kỹ năng của bạn</td>
                                        <td width="4%">:</td>
                                        <td width="46%">
                                            <textarea name="skills" rows="2" class="skills_box" id="skills"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Công ty của bạn thuộc về ngành nào</td>
                                        <td>:</td>
                                        <td><input type="text" placeholder="Ngành"
                                            name="industry" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='city') value = ''" class="advanced_box" name="industry" id="industry"/></td>
                                    </tr>
                                    <tr>
                                        <td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Các chứng chỉ/khóa học đạt được</td>
                                        <td width="4%">:</td>
                                        <td width="46%">
                                            <textarea name="certification" cols="1" rows="2" class="skills_box"  id="certification"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tải lên hồ sơ của bạn tại đây</td>
                                        <td>:</td>
                                        <td><input type="file" name="file" id="file" class="advanced_box" value="30000" /><br/>
                                            <span class="upload_text">Định dạng tệp được hỗ trợ: doc,docx,pdf. Max.File size:300kb</span>
                                        </td>
                                    </tr>
                                    <tr style="margin:0; padding:0;">
                                        <td width="50%"></td>
                                        <td width="4%"></td>
                                        <td width="46%"><img src="captcha.php"/></td>
                                    </tr>
                                    <tr  style="margin:0; padding:0;">
                                        <td width="50%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nhập mã bảo mật</td>
                                        <td width="4%">:</td>
                                        <td width="46%">
                                            <input type="text" name="code" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align:center;"><input name="check" type="checkbox" style="text-align:center;" />     
                                            <span class="upload_text"> Tôi đã đọc và hiểu <a href="#">Điều khoản sử dụng và Chính sách bảo mật.</a></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align:center;">
                                            <input type="hidden" name="register" value="register">
                                            <input type="submit" value="Đăng ký"  style="background:url(images/button.png) no-repeat; width:100px; height:25px; border:none; color:#fff;" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align:center;">Các trường có dấu <span class="advanced_star">*</span> là bắt buộc</td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="search_main_div">
                    <?php
                        include ('includes/sidebar.inc.php');
                        ?> 
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <div id="container">
            <div id="gallery" class="ad-gallery">
                <iframe  frameborder="0" width="1075" height="125" src="navigator/example/navigator.html"   scrolling="no" frameborder="0"   allowtransparency="no" >
                </iframe>
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
                <div id="home_footer_slice_five"> <span class="home_foote_span">Liên hệ hỗ trợ</span><br />
                    <br />
                    <span class="speech_number">090 1168 525</br></br> jobfordue@gmail.com</span> 
                </div>
            </div>
        </div>
    </body>
</html>