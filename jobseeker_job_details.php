<?php
error_reporting(E_ERROR | E_PARSE);
    require 'connect.php';
    
    $apply = $_GET['jid'];
    $query = "select * from jobs where j_id=$apply";
    $result = mysqli_query($connect,$query);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    $query_1 = "select * from jobs  WHERE NOT ( j_id = {$apply} ) limit 5";
    $row1 = [];
    $result_1 = mysqli_query($connect,$query_1);
    while ($row_l = mysqli_fetch_assoc($result_1)) {
      $row1[] = $row_l;
    }
    ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Chi tiết công việc</title>
        <link rel="stylesheet" type="text/css" href="css/stylejobseeker.css" />
    </head>
    <body>
        <div id="detail_header"><img src="images/large_logo.png" width="150" align="left" />
            <a href="jobseeker_home.php" class="close_button">Đóng</a>
        </div>
        <div id="details_body">
            <table width="100%" height="auto" border="1" bordercolor="#5393b5" cellpadding="0" cellspacing="0">
                <tr>
                    <td height="35" colspan="2" bgcolor="#5393b5"><span class="job_details_text">CHI TIẾT CÔNG VIỆC</span></td>
                </tr>
                <tr>
                    <td width="60%" height="auto">
                        <div class="left_details">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <?php
                                    echo '<tr>
                                      <td width="27%" bgcolor="#e9e8e8" style="padding:7px;">Tên công ty</td>
                                      <td width="73%" style="padding:7px;">'.$row['j_company'].'
                                    </tr>
                                    
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Ngày đăng</td>
                                      <td style="padding:7px;">'.date('d/m/Y', strtotime($row['date_d'])).'</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Chức vụ / Vị trí</td>
                                      <td style="padding:7px; font-size:12px;">'.$row['j_title'].'</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Số lượng tuyển dụng</td>
                                      <td style="padding:7px;">'.$row['j_vacancy'].'</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Kinh nghiệm </td>
                                      <td style="padding:7px;">Tối thiểu : '.$row['j_experience'].' năm</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Vị trí / Địa điểm</td>
                                      <td style="padding:7px;">'.$row['j_city'].'</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Loại công việc</td>
                                      <td style="padding:7px;">'.$row['j_type'].'</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Khu vực công ty</td>
                                      <td style="padding:7px;">'.$row['j_sector'].'</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Giờ làm việc</td>
                                      <td style="padding:7px;">'.$row['j_hours'].' h/ Ngày</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Mức lương </td>
                                      <td style="padding:7px;">'.number_format($row['j_salary'], 0, '.', ',').' VND</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Ngày nộp đơn cuối cùng</td>
                                      <td style="padding:7px;">'.date('d/m/Y', strtotime($row['j_date'])).'</td>
                                    </tr>
                                    <tr>
                                      <td bgcolor="#e9e8e8" style="padding:7px;">Mô tả công việc</td>
                                      <td style="padding:7px;">'.$row['j_description'].'</td>
                                    </tr>';
                                    
                                    echo '<tr>  <td style="padding:7px;"> </td>
                                      
                                    <td ><a href="process_apply.php?jid='.$row['j_id'].'" style="text-decoration:none; color:#000; border:none;"><img src="images/apply.png" /></a></td>';
                                    ?>
                            </table>
                        </div>
                    </td>
                    <td width="19%">
                        <div class="rigt_details">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td bgcolor="#183884" style="padding:7px; color:#fff;">Công Việc Khác</td>
                                </tr>
                                <?php
                                    foreach ($row1 as $value) {
                                      echo '<tr>
                                            <td bgcolor="#FFFFFF" style="padding:7px;">
                                              <a href="jobseeker_job_details.php?jid='.$value['j_id'].'">'.$value['j_title'].'</a>
                                              <span>'.date('d/m/Y',strtotime($value['date_d'])).'</span>
                                            </td>
                                          </tr>';
                                    }
                                    ?>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>