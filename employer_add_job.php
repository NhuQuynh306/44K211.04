<?php session_start(); 
error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="icon" href="images/employer.png" type="image/x-icon">
      <link rel="shortcut icon" href="images/employer.png" type="image/x-icon" />
      <title>Thêm công việc mới</title>
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
                  <?php include 'includes/ee_top.inc.php'; ?>
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
                     <?php include 'includes/ee_menu.inc.php'; ?>
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
                     <img src="images/add.png" style="margin-bottom:20px;"  align="left"/><br /><span style="font-family:'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color:#2699d6; font-size:17px;">Thêm công việc mới</span>
                      <form name="add_job" action="process_add_job.php" method="post" >
                        <table width="100%" cellspacing="10" cellpadding="5">
                           <tr>
                              <td colspan="3"><span class="em_head_one">Thêm công việc mới tại đây</span></td>
                           </tr>
                           <tr>
                              <td width="38%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>  Tên công ty</td>
                              <td width="3%">:</td>
                              <td width="59%"><input required type="text" placeholder="Tên công ty"
                                 name="company" id="company" 
                                 onblur="if(value=='') value = ''" 
                                 onfocus="if(value=='') value = ''" class="em_reg_box" /></td>
                           </tr>
                           <tr>
                              <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>  Thể loại </td>
                              <td>:</td>
                              <td width="59%">
                                 <select id="category" title="Search with Industry Segment" name="category" class="em_reg_box_select">
                                    <option selected="">- - Tùy chọn - -</option>
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
                              <td width="38%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>  Tiêu đề</td>
                              <td width="3%">:</td>
                              <td width="59%"><input required type="text" placeholder=""
                                 name="title" id="title"
                                 onblur="if(value=='') value = ''" 
                                 onfocus="if(value=='') value = ''" class="em_reg_box" /></td>
                           </tr>
                           <tr>
                              <td width="38%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> &nbsp;Lương </td>
                              <td width="3%">:</td>
                              <td width="59%"><input required type="text" value=""
                                 name="salary" id="salary"
                                 class="em_reg_box" /></td>
                           </tr>
                           <tr>
                              <td width="38%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> &nbsp;Số giờ </td>
                              <td width="3%">:</td>
                              <td width="59%"><input required type="text" value=""
                                 name="hours" id="hours"
                                 class="em_reg_box" /></td>
                           </tr>
                           <tr>
                              <td width="38%"><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Loại hình</td>
                              <td width="3%">:</td>
                              <td width="59%">
                                 <select name="type" id="type" class="em_reg_box_select" required>
                                    <option selected="">- - Tùy chọn - -</option>
                                    <option value="Bán thời gian">Bán thời gian</option>
                                    <option value="Toàn thời gian">Toàn thời gian</option>
                                    <option value="Dài hạn">Dài hạn</option>
                                 </select>
                              </td>
                           </tr>
                           <tr>
                              <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>  Thành phố</td>
                              <td>:</td>
                              <td> <input required type="text" placeholder="Thành phố"
                                 name="city" id="city"
                                 onblur="if(value=='') value = ''" 
                                 onfocus="if(value=='') value = ''" class="em_reg_box" />  </td>
                           </tr>
                           <tr>
                              <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span> Khu vực công ty làm việc</td>
                              <td>:</td>
                              <td> <input required type="text" placeholder="Khu vực công ty làm việc"
                                 name="sector" id="sector"
                                 onblur="if(value=='') value = ''" 
                                 onfocus="if(value=='') value = ''" class="em_reg_box" />  </td>
                           </tr>
                           <tr>
                              <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>  Kinh nghiệm</td>
                              <td>:</td>
                              <td><input type="text" value="" required
                                 name="experience" id="experience" 
                                 class="em_reg_box" /></td>
                           </tr>
                           <tr>
                              <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>  Số lượng tuyển dụng</td>
                              <td>:</td>
                              <td><input type="text" value="" required
                                 name="vacancy" id="vacancy"
                                 onblur="if(value=='') value = ''" 
                                 onfocus="if(value=='') value = ''" class="em_reg_box" /></td>
                           </tr>
                           <tr>
                              <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>  Mô tả công việc</td>
                              <td>:</td>
                              <td><textarea name="description" id="description" cols="" rows="" class="em_address" required></textarea></td>
                           </tr>
                           <tr>
                              <td><span class="advanced_star">&nbsp;&nbsp;&nbsp;*</span>  Ngày hết hạn</td>
                              <td>:</td>
                              <td>
                                 <input type="date" value="" required
                                 name="datej" id="datej" 
                                 class="em_reg_box" />
                              </td>
                           </tr>
                           <tr>
                              <td colspan="3" style="text-align:center;">
                                 <input type="hidden" value="Submit" name="submit" />
                                 <input type="submit" value="Tạo công việc" style="background:url(images/button.png) no-repeat; width:100px; height:25px; border:none; color:#fff;" />
                              </td>
                           </tr>
                           <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                              <td>Các trường có dấu <span class="advanced_star">*</span> là bắt buộc</td>
                           </tr>
                        </table>
                      </form>
                  </div>
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
            <?php include 'includes/ee_footer.inc.php'; ?>  
            <div id="home_footer_slice_five"> <span class="home_foote_span">Liên hệ hỗ trợ</span><br />
               <br />
               <span class="speech_number">090 1168 525</br></br> jobfordue@gmail.com</span> 
            </div>
         </div>
      </div>
      <div id="home_footer_main"></div>
   </body>
</html>