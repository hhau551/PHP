<?php
    include_once('../app/views/shares/layout.php')
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
                <li class="breadcrumb-item"><a href="?route=/">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Đăng ký</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End breadcumb Area -->
<!--================Register Box Area =================-->
<section class="register_box_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pb-5">
                <div class="card flex-row mb-5 border-0 shadow-lg" style="border-radius: 18px;">
                    <div class="col-md-5 d-none d-md-flex  register_box_img">
                        <img src="../root/images/svg/sign-up-home.svg">
                    </div>
                    <!-- Registeration Form -->
                
                    <div class="col-md-7 col-lg-6 ml-auto register_box_form">
                        <h3 class="text-center">Đăng ký</h3>
                        <form action="?route=register" method="post">
                            <!-- <div asp-validation-summary="ModelOnly" class="text-danger"></div> -->
                            <div class="row">
                                <!-- Full Name -->
                                <div class="form-group col-lg-6 mb-4">
                                    <input type="text" class="form-control" id="UserName" name="UserName" placeholder="Tên đăng nhập" required>
                                    <!-- <span asp-validation-for="UserName" class="text-danger"></span> -->
                                </div>
                                <div class="form-group col-lg-6 mb-4">
                                    <input type="text" class="form-control" id="FullName" name="FullName" placeholder="Họ và tên"  required>
                                </div>
                                <div class="form-group custom-select-register col-lg-6 mb-4">
                                    <select class="form-select form-control" id="Gender" name="Gender">
                                        <option value="true">Nam</option>
                                        <option value="false">Nữ</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6 mb-4">
                                    <input id="DOB" type="date" name="DOB" placeholder="Ngày sinh"
                                           class="form-control" required>
                                </div>
                                <!-- Phone -->
                                <div class="form-group col-lg-12 mb-4">
                                    <input type="text" id="PhoneNumber" name="PhoneNumber" placeholder="Số điện thoại"
                                           class="form-control" required>
                                </div>
                                <!-- Email Address -->
                                <div class="form-group col-lg-12 mb-4">
                                    <input id="Email" name="Email" type="email" placeholder="Email"
                                           class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12 mb-4">
                                    <textarea id="Adress" name="Adress" placeholder="Nhập địa chỉ"
                                              class="form-control form-control-address" rows="5" required></textarea>
                                </div>
                                <!-- Password -->
                                <div class="form-group col-lg-6 mb-4">
                                    <input type="password" id="Pass" name="Pass" placeholder="Mật khẩu"
                                           class="form-control" required>
                                </div>
                                <!-- Password Confirmation -->
                                <div class="form-group col-lg-6 mb-4">
                                    <input type="password" id="ConfirmPassword" name="ConfirmPassword" placeholder="Xác nhận mật khẩu"
                                           class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12 mx-auto mb-0">
                                    <button type="submit" class="register_box_btn primary-btn">Đăng ký</button>
                                </div>
                                <!-- Divider Text -->
                                <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">
                                    <div class="border-bottom w-100 ml-5"></div>
                                    <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>
                                    <div class="border-bottom w-100 mr-5"></div>
                                </div>
                                <!-- Already Registered -->
                                <div class="text-center w-100 pb-4">
                                    <p class="text-muted font-weight-bold">
                                        Bạn đã có tài khoản? <a class="text-danger" href="?route=login"></button>Đăng nhập</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Register Box Area =================-->
