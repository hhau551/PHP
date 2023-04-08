<?php
  include_once('../app/views/shares/header.php');
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
                <li class="breadcrumb-item active" aria-current="page">Thông tin cá nhân</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End breadcumb Area -->
<!-- Infomation -->
<section class="infomation-user pb-5">
    <div class="">
        <div class="container">
            <div class="row col-lg-12">
                <div class="col-lg-4 infomation-user-left">
                    <div class="infomation-user-left-img">                      

                        <?php                         

                                if (isset($_SESSION['UserId'])) 
                                {
                                    $avatar=$_SESSION['ImgUser'] ?? "avatar.png";                       
                                    echo "<span > <img width='45px' src='../root/images/avatar/".$avatar."' /></span>";
                                }
                                else {?>
                                    <span class="img-info-user">
                                        <span class="bx bx-user"></span>
                                    </span>
                                <?php }
                                ?>
                    </div>

                    <ul class="nav flex-column infomation-user-left-nav">
                        <li class="nav-link">
                            <a controller="Home" action="InfoMenu">Tài khoản</a>
                            <!-- empty -->
                        </li>
                        <li class="nav-link">
                            <a controller="Home" action="Info" class="nav-info-active">Thông tin</a>
                        </li>
                        <li class="nav-link">
                            <a controller="Home" action="ChangePass">Đổi mật khẩu</a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-8 infomation-user-right">
                    <div class="infomation-user-info col-lg-12">
                        <form action="?route=edit-info" enctype="multipart/form-data" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <!-- User Name -->
                                <div class="form-group col-lg-6 mb-4">
                                    <label for="UserName" class="control-label">UserName:</label>
                                    <input id="UserName" for="UserName" type="text" name="UserName"
                                           readonly class="form-control">
                                </div>
                                <!-- Full Name -->
                                <div class="form-group col-lg-6 mb-4">
                                    <label for="FullName" class="control-label">FullName:</label>
                                    <input id="FullName" for="FullName" type="text" name="FullName"
                                           class="form-control">
                                </div>
                                <!-- DOB -->
                                <div class="form-group col-lg-6 mb-4">
                                    <label for="DOB" class="control-label">DOB:</label>
                                    <input id="DOB" for="DOB" type="date" name="DOB"
                                           class="form-control">
                                </div>
                                <!-- Email Address -->
                                <div class="form-group col-lg-6 mb-4">
                                    <label for="Email" class="control-label">Email:</label>
                                    <input id="Email" for="Email" type="email" name="Email"
                                           class="form-control">
                                </div>
                                <!-- Gender -->
                                <div class="form-group custom-select-register col-lg-6 mb-4">
                                    <label for="Gender" class="control-label col-lg-12">Gender:</label>
                                    <select for="Gender" class="form-select select-custom-home">
                                        <option value="true">Nam</option>
                                        <option value="false">Nữ</option>
                                    </select>
                                </div>
                                <!-- ImageUser -->
                                <div class="form-group col-lg-6 mb-4">
                                    <label class="control-label"></label>
                                    <input id="avatar" type="file" name="avatar" class="form-control">
                                </div>
                                <!-- PhoneNumber -->
                                <div class="form-group col-lg-6 mb-4">
                                    <label for="PhoneNumber" class="control-label">PhoneNumber:</label>
                                    <input id="PhoneNumber" for="PhoneNumber" type="tel" name="PhoneNumber"
                                           class="form-control">
                                </div>
                                <!-- Address -->
                                <div class="form-group col-lg-12 mb-4">
                                    <label for="Address" class="control-label">Address:</label>
                                    <textarea id="Address" for="Address" name="Address"
                                              class="form-control" rows="5"></textarea>
                                </div>
                                <!-- Submit Button -->
                                <div class="form-group col-lg-12 text-center mx-auto mb-0">
                                    <button type="submit" class="col-lg-3 infomation-user-info-btn primary-btn">
                                        Đổi thông tin
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>