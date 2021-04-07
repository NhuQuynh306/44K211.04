<?php include 'header.php'; ?>
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
                        <input name="date" class="form-control" placeholder="Date of Birth yyyy/mm/dd" type="date">
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
                            <button class="btn">Log In</button>
                            <a href="./login/login.php">Login</a>
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
<?php include 'footer.php'; ?>