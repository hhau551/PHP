<title>Forgot Password</title>
<!-- Favicon-->
<link rel="shortcut icon" href="../root/images/fav.png">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="../root/css/forgotpw.css" rel="stylesheet" />

<div class="forgot">
    <div class="forgot-password">
        <div class="col-lg-5 col-md-12 col-sm-12 forgot-left">
            <img src="../root/images/svg/forgotpassword.svg" alt="" />
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 forgot-right">
            <form action="?route=forgot-password" class="row login_form" method="get" id="contactForm" novalidate="novalidate">
                <div class="row forgot-form">
                    <h2>Reset Password</h2>
                    <div class="col-lg-12 col-md-12 col-sm-12 mt-4">
                        <div class="form-group d-flex justify-content-center">
                            <input type="email" id="email" name="email" class="form-control col-lg-8" placeholder="Your Email *" value="" />
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-md-12 col-sm-12 mt-4 text-center">
                        <button type="submit" class="btn-forgot col-lg-4">Reset Password</button>
                    </div>
                    <div class="form-group col-lg-6 mx-auto d-flex align-items-center my-4">
                        <div class="border-bottom w-100 ml-5"></div>
                        <span class="px-2 small font-weight-bold text-muted">OR</span>
                        <div class="border-bottom w-100 mr-5"></div>
                    </div>
                    <div class="col-md-12 forgot-back text-center">
                        <a href="?" class="text-center">Quay lại trang chủ</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include_once('../app/views/shares/footer.php')
?>
