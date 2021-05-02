<?php session_start();
error_reporting(E_ERROR | E_PARSE);
    if (isset($_SESSION['erid'])) {
        header('location: employer_home.php');
    }
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="images/employer.png" type="image/x-icon">
        <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
        <title>Đăng ký nhà tuyển dụng</title>
        <link rel="stylesheet" type="text/css" href="css/style-employer.css" />
        <link rel="stylesheet" type="text/css" href="lib/jquery.ad-gallery.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="lib/jquery.ad-gallery.js"></script>
        <script type="text/javascript" src="js/validation_employer.js"></script>
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
        <div id="home_content_main">
            <div id="employee_banner_reg">
                <div class="employee_login_div_reg">
                    <div class="employee_login">
                        <form onsubmit="return validateForm();" action="process_employer_registration.php" method="post" name="employer_registration" enctype="multipart/form-data">
                            <div class="employee_register">
                                <img src="images/1377172085_mail-new.png" style="margin-bottom:20px;"  align="left"/><br /><span style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#2699d6; font-size:17px;">Đăng ký nhà tuyển dụng mới</span>
                                <table width="100%" cellspacing="10" cellpadding="5">
                                    <tr>
                                        <td height="20" colspan="3"><span class="em_head_one">Tạo tài khoản của bạn</span></td>
                                    </tr>
                                    <tr>
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>
                                    <tr>
                                        <td width="38%"><span class="em_reg_star">*</span> Tên công ty</td>
                                        <td width="3%">:</td>
                                        <td width="59%"><input type="text" placeholder="Tên công ty" required
                                            name="company" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="em_reg_box" /></td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Loại</td>
                                        <td>:</td>
                                        <td>
                                            <input type="radio" name="companytype" value="Công ty"/>
                                            Công ty&nbsp;
                                            <input type="radio" name="companytype" value="Cơ quan tuyển dụng"/>
                                            Cơ quan tuyển dụng
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Lĩnh vực</td>
                                        <td>:</td>
                                        <td>
                                            <select id="category" class="em_reg_box_select" title="Chọn ngành" name="category" required>
                                                <option selected="" value="">- Chọn ngành-</option>
                                                <option value="Web Deleveloper">Web Deleveloper</option>
                                                <option value="Mobile Deleveloper">Mobile Deleveloper</option>
                                                <option value="IT Phần mềm">IT Phần mềm</option>
                                                <option value="IT Phần cứng / Mạng">IT Phần cứng / Mạng</option>
                                                <option value="Graphics / Designer">Graphics / Designer</option>
                                                <option value="UX / UI">UX / UI</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="38%"><span class="em_reg_star">*</span> Vị trí công ty</td>
                                        <td width="3%">:</td>
                                        <td width="59%"><input type="text" placeholder="Vị trí công ty" required
                                            name="sector" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="em_reg_box" /></td>
                                    </tr>
                                    <tr>
                                        <td width="38%"><span class="em_reg_star">*</span>&nbsp;Email</td>
                                        <td width="3%">:</td>
                                        <td width="59%"><input type="email" placeholder="Email" required
                                            name="companyemail" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="em_reg_box" /></td>
                                    </tr>
                                    <tr>
                                        <td width="38%"><span class="em_reg_star">*</span> Mật khẩu</td>
                                        <td width="3%">:</td>
                                        <td width="59%"><input type="password" placeholder="Mật khẩu" required
                                            name="password" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="em_reg_box" />      &nbsp;&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Xác nhận mật khẩu</td>
                                        <td>:</td>
                                        <td><input type="password" placeholder="Xác nhận mật khẩu" required
                                            name="confirmpassword" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="em_reg_box" /></td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Địa chỉ</td>
                                        <td>:</td>
                                        <td><textarea name="address" cols="" rows="" class="em_address" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Thành phố</td>
                                        <td>:</td>
                                        <td><input type="text" placeholder=" Thành phố" required
                                            name="city" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="em_reg_box" /></td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Country</td>
                                        <td>:</td>
                                        <td>
                                            <select id="country" name="country" class="em_reg_box_select" required>
                                                <option value="" selected="selected">--Select--</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran">Iran</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Ivory Coast">Ivory Coast</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Korea (North)">Korea (North)</option>
                                                <option value="Korea (South)">Korea (South)</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russia">Russia</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="USA">USA</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom (UK)">United Kingdom (UK)</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Bhutan">Bhutan</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> website URL</td>
                                        <td>:</td>
                                        <td><input type="text" placeholder="URL" required
                                            name="website" 
                                            onblur="if(value=='') value = 'URL'" 
                                            onfocus="if(value=='URL') value = ''" class="em_reg_box" /></td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Điện thoại</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" required
                                                name="TNumber" 
                                                class="land_number_box" onkeypress="return onlyNumbers(event);"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="47" colspan="3"><span class="em_head_one">Chi tiết liên hệ</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Họ</td>
                                        <td>:</td>
                                        <td><input type="text" placeholder="Họ" required
                                            name="fname" 
                                            onblur="if(value=='') value = 'Họ'" 
                                            onfocus="if(value=='Họ') value = ''" class="em_reg_box" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
                                    </tr>
                                    <tr>
                                        <td width="38%"><span class="em_reg_star">*</span> Tên</td>
                                        <td width="3%">:</td>
                                        <td width="59%"><input type="text" placeholder="Tên" required
                                            name="lname"  
                                            onblur="if(value=='') value = 'Tên'" 
                                            onfocus="if(value=='Tên') value = ''" class="em_reg_box" onkeypress="return onKeyPressBlockNumbers(event);"/></td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Chức Danh</td>
                                        <td>:</td>
                                        <td><input type="text" placeholder="Chức Danh" required
                                            name="designation" 
                                            onblur="if(value=='') value = ''" 
                                            onfocus="if(value=='') value = ''" class="em_reg_box" /></td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Email</td>
                                        <td>:</td>
                                        <td><br/>
                                            <input type="text" placeholder="Email" required
                                                name="contactemail" 
                                                onblur="if(value=='') value = ''" 
                                                onfocus="if(value=='') value = ''" class="em_reg_box" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><span class="em_reg_star">*</span> Số điện thoai</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" required
                                                name="MNumber" 
                                                class="mobile_number_box" onkeypress="return onlyNumbers(event);"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="text-align:center;">
                                            <input name="check" type="checkbox" value="" style="text-align:center;" required/>     
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
                                        <td colspan="3" style="text-align:center;">Các trường có dấu <span class="em_reg_star">*</span> là bắt buộc</td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
                <div></div>
            </div>
        </div>
        <div class="clear_both">&nbsp;</div>
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
        <div id="home_footer_main"></div>
    </body>
</html>