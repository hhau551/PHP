<?php
    include_once('../app/views/shares/header.php')
?>

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        </div>
    </div>
</section>
<!-- End Banner Area -->
<!-- Start breadcumb Area -->
<section class="breadcrumb-login">
    <div class="container">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Đăng nhập</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End breadcumb Area -->
<!--================Login Box Area =================-->
<section class="login_box_area">
    <div class="container shadow-lg">
        <div class="row">
            <div class="col-lg-7">
                <div class="login_box_img">
                    <img class="img-fluid" src="../root/images/Login.gif" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="login_form_inner">
                    <h3>Đăng nhập</h3>
                    <form action="?route=login" class="row login_form" method="post" id="contactForm">
                        <input type="hidden" for="ReturnUrl" />
                        <div class="col-md-12 form-group">
                            <input type="text" id="UserName" name="UserName" class="form-control"
                                   placeholder="Tên đăng nhập" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" id="Password" name="Password" class="form-control"
                                   placeholder="Mật khẩu" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn btnLogin">Đăng nhập</button>
                            <!-- Divider Text -->
                            <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                <div class="border-bottom w-100 ml-5"></div>
                                <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                                <div class="border-bottom w-100 mr-5"></div>
                            </div>
                            <a href="?route=forgot-password" class="text-center custom-text-login font-weight-bold">Quên mật khẩu ?</a>
                            <div class="login_form_register text-center font-weight-bold">
                                Bạn chưa có tài khoản ?
                                <a class="text-danger" href="?route=register">Đăng ký</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->