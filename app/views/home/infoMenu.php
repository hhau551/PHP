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
                            <a asp-controller="Home" asp-action="InfoMenu" class="nav-info-active">Tài khoản</a>
                            <!-- empty -->
                        </li>
                        <li class="nav-link">
                            <a asp-controller="Home" asp-action="Info">Thông tin</a>
                        </li>
                        <li class="nav-link">
                            <a href="">Đơn hàng</a>
                        </li>
                        <li class="nav-link">
                            <a href="">Địa chỉ</a>
                        </li>
                        <li class="nav-link">
                            <a asp-controller="Home" asp-action="ChangePass">Đổi mật khẩu</a>
                        </li>

                    </ul>
                </div>

                <div class="col-lg-8 infomation-user-right">
                    <div class="infomation-user-right-txt">
                        <p>
                            Xin chào <strong><?php echo "<a>".$_SESSION['FullName']."</a>";?></strong> (không phải tài khoản
                            <strong><?php echo "<a>".$_SESSION['FullName']."</a>";?></strong>? Hãy <a href="?route=logout">
                                thoát
                                ra
                            </a> và đăng nhập vào tài khoản của bạn)
                        </p>
                        <p>
                            Từ trang quản lý tài khoản bạn có thể xem 
                            <a>
                                thông tin tài khoản
                            </a> và
                            <a>
                                đổi mật khẩu
                            </a>.
                        </p>
                    </div>
                    <ul class="nav infomation-user-right-nav">
                        <li class="nav-link">
                            <a>Tài khoản</a>
                        </li>
                        <li class="nav-link">
                            <a href="?route=edit-info">Thông tin</a>
                        </li>
                        <li class="nav-link">
                            <a>Đổi mật khẩu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

  include_once('../app/views/shares/footer.php');

?>