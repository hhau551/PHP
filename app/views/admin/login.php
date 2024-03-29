<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Sign In</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../root/images/fav.png" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="../root/css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <!-- <div class="layer"></div> -->
    <main class="page-center signin-ad">
        <img class="wave" src="../root/images/avatar/wave.png">
        <div class="container">
            <div class="img">
                <img src="../root/images/svg/bg.svg">
            </div>
            <div class="login-content" ng-app="">
                <form action="?" method="post" name="personForm">
                    <h2 class="title">ĐĂNG NHẬP</h2>
                    <input type="hidden" for="ReturnUrl" />
                    <div class="text-danger" validation-summary="All"></div>
                    <div class="input-div one">
                        <div class="i">
                            <i class='bx bxs-user bx-sm'></i>
                        </div>
                        <div class="div">
                            <input name="UserName" required type="text" for="UserName" class="input" placeholder="Username" />
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class='bx bxs-lock-alt bx-sm'></i>
                        </div>
                        <div class="div">
                            <input name="Password" required type="password" for="Password" class="input" placeholder="Password">
                        </div>
                    </div>
                    <a action="ForgotPassword">Quên mật khẩu?</a>
                    <input type="submit" class="btn" value="Đăng nhập">
                </form>
            </div>
        </div>
    </main>
    <script src="../root/plugins/feather.min.js"></script>
</body>
</html>