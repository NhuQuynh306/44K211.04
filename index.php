<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký thành viên</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

<body style="background-color: #ccffff;">
    <div class="container-fluid" style="background: #f6fbf9;">
        <div class="row">
            <div class="col-12 d-flex justify-content-between p-2">
                <img id="logo" style="margin-left: 10px;" width="100px" height="50px"
                    src="https://i.ibb.co/yBR65jg/large.png" alt="">
                <div>
                    <button id="" class="btn btn-primary">Login</button>
                    <button id="register" class="btn btn-secondary">Register</button>
                </div>
            </div>
        </div>
    </div>
 
    <div class="container" style="margin-top: 100px;">
        <div class="card">
            <article class="card-body mx-auto" style="max-width: 400px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>
                <form method="POST">
                <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="username" class="form-control" placeholder="Username" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="fullname" class="form-control" placeholder="Full name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-calendar"></i> </span>
                        </div>
                        <input name="date" class="form-control" placeholder="Date of Birth yyyy/mm/dd" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input name="email" class="form-control" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;">
                            <option selected="">+84</option>
                        </select>
                        <input name="phone" class="form-control" placeholder="Phone number" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="createPassword" class="form-control" placeholder="Create password" type="password">
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input name="repeatPassword" class="form-control" placeholder="Repeat password" type="password">
                        </div> <!-- form-group// -->
                        <div class="form-group text-center col-12 mt-3">
                            <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account </button>
                        </div> <!-- form-group// -->
                        <div class="form-group col-12 mt-3 text-center">
                            <button class="btn">Have an account? <a href="">Log In</a> </button>
                        </div>
                </form>
            </article>
        </div> <!-- card.// -->
    </div>
        <?php
            if (isset($_REQUEST['submit'])){
                $username = $_REQUEST['username'];
                $fullname = $_REQUEST['fullname'];
                $email = $_REQUEST['email'];
                $phone = $_REQUEST['phone'];
                $date = $_REQUEST['date'];
                $createPassword = $_REQUEST['createPassword'];
                $repeatPassword = $_REQUEST['repeatPassword'];
                $link = mysqli_connect("localhost","root","") or die("cannot connect mysql");
	            mysqli_select_db($link,"FINDJOB");
                $sql = "SELECT COUNT(Username) as total FROM user WHERE Username like '$username'";
			    $result = mysqli_query($link,$sql);
                $ans = mysqli_fetch_assoc($result);
                $check = 1;
			    $count = $ans['total'];
                $message = "";
                if ($count != 0) {
                    $check = 0;
                    $message = "Duplicate username";
                }
                else if ($username=="" || $fullname=="" || $date == "" || $email=="" || $phone==""|| $createPassword=="" || $repeatPassword=="") {
                    $message = "Empty field(s)";
                    $check = 0;
                } 
                else if ($createPassword != $repeatPassword) {
                    $check = 0;
                    $message = "Re-enter password";
                }
                if ($check == 1) {
                    $sql = "INSERT INTO user(Username, Password, HoTen, NgaySinh, Email, Phone)
				            VALUES ('$username','$createPassword','$fullname','$date','$email','$phone') ";
				    if ($link->query($sql) == TRUE) {
                        $message = "Successfully created account";
                    }
                }
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        ?>
</body>

<script>
    document.getElementById("logo").addEventListener('click', () => {
        window.location.href = window.location.pathname.replace('/register/index.html', "/index.html");
    })
</script>

</html>