<html>
<head>
    <titel>Đăng nhập </titel>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        input [type=text],
        input [type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px #ccc;
            box-sizing: border-box;
        }

        button {
            background-color:mediumaquamarine;
            color: white;
            padding: 14px 15px;
            margin: 5px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button :hover {
            opacity: 0.8;
        }
        .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
    }
        img.avatar {
            width: 20%;
            border-radius: 30%;
        }
        .modal-content {
            background-color: white;
            margin: 5% auto 10% auto;
            border: 1px solid #888;
            width: 70%;
        }
        .modal {
    background-color: mediumaquamarine;
    overflow: auto;
    padding: 60px;
    width: 50%;
    height: 50%;
    top: 0%;
    left: 0%;
    z-index: 1;
    position: fixed;
    }
    .modal-content {
    background-color: white;
    margin: 5% auto 10% auto;
    border: 1px solid #888;
    width: 70%;
    }

.container {
    padding: 16px;
    }
        span.psw {
            float: right;
            padding-top: 16px;
        }
    </style>
</head>

<body>
    <div class="modal">
        <form class="modal-content animate">
            <div class="imgcontainer">
                <img id = "login" style="margin-left: 10px;" width="100px" height="50px"
                 src="image/login.png" class="avatar">
            </div>
            <div class="container">
                <label>
                    <p>Username</p>
                </label>
                <Input type="text"  placeholder="Username">
            </br>
                <label>
                    <p>Password</p>
                </label>
                <Input type="password"  placeholder="Password">
            </br>
                <input type="checkbox" />Remember me
                <button>Login</button>
                <label>
                    <p>Forget <a href="#"> Password </a></p>
                </label>
                <label>
                    <p> No account? <a href="login.html">Signup</a></p>
                </label>
            </div>
        </form>
    </div>
</body>
<script>
    document.getElementById("login").addEventListener('click', () => {
        window.location.href = window.location.pathname.replace('/login/login.html', '/login.html');
    })
</script>
</head>
</html>

          
    