<?php
    //require 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <style>
        .option-menu {
            display: flex;
        }

        body {
            background: #fff;
        }

        #navbar {
            background: #f6fbf9;
        }
    </style>
</head>

<body >
<div class="container-fluid" style="background: #f6fbf9;">
        <div class="row">
            <div class="col-12 d-flex justify-content-between p-2" id="navbar">
                <img style="margin-left: 10px;" width="100px" height="50px" src="https://i.ibb.co/yBR65jg/large.png" alt="">
                <div class="col-md-6 option-menu">
                    <a href="login.php" id="login" class="btn btn-outline-danger">Login</a>
                    <a href="register.php" id="register" class="btn btn-outline-danger">Register</a>
                    <a href="about.php" id="about" class="btn btn-outline-danger">About</a>
                    <form action="" method="post">
                        <input type="text" name="search" placeholder="Search ..." class="form-control">
                    </form>
                </div>
            </div>
        </div>
    </div>