<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopGiay</title>
    <link rel="shortcut icon" href="../root/images/fav.png">
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- slide -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="../root/css/loader.css">
    <link rel="stylesheet" href="../root/css/bootstrap.css">
    <link rel="stylesheet" href="../root/css/owl.carousel.css">
    <link rel="stylesheet" href="../root/css/nice-select.css">
    <link rel="stylesheet" href="../root/css/home-main.css">
    <link rel="stylesheet" href="../root/css/home-main-1.css">
    <link rel="stylesheet" href="../root/css/home-main-2.css">
    <link rel="stylesheet" href="../root/css/home-main-3.css">
    <link rel="stylesheet" href="../root/css/home-main-4.css">
    <link rel="stylesheet" href="../root/css/home-font.css">
    <link rel="stylesheet" href="../root/css/nouislider.min.css">
    <style>
    .banner-area {
        background-image: url("../root/images/banner/banner-bg.png") center no-repeat;
        background-size: cover;
        position: relative;
    }
    .organic-breadcrumb {
        background-image: url("../root/images/banner/common-banner-bg.png") center no-repeat;
        background-size: cover;
        padding-top: 130px;
    }
    </style>
</head>

<body class="preloading">
    <header class="header_area sticky-header">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light main_box" id="ftco-navbar">
                <div class="container">
                    <a class="navbar-brand logo_h"><img src="../root/images/avatar/Logoteam.png" alt=""></a>

                    <ul class="social-media order-lg-last nav navbar-right nav-center">
                        <li class="nav-item submenu dropdown">
                            <a>
                                
                            </a>
                        </li>
                        <li class="nav-item submenu dropdown d-flex">
                            <button class="search">
                                <span class="bx bx-search-alt-2 bx-sm" id="search">
                                </span>
                            </button>
                        </li>
                        <li class="nav-item submenu submenu-user dropdown">
                            <a href="#" class="user nav-link-right dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-haspopup="true" aria-expanded="false">
                               <span class="img-non-user">
                                        <span class="bx bx-user-circle bx-sm d-flex"></span>
                                </span>
                               
                               <!-- <span class="img-non-user">
                                        <span class="bx bx-user-circle bx-sm d-flex"></span>
                                </span> -->
                                <!-- @if (avatar == null || avatar == "") ?>
                                {
                                    <span class="img-non-user">
                                        <span class="bx bx-user-circle bx-sm d-flex"></span>
                                    </span>
                                }
                                else
                                {
                                    <span class="img-user"><img src="../root/images/avatar/@avatar" alt="" /></span>
                                } -->
                            </a>
                            <ul class="dropdown-menu">
                                @if (userName != null && userName != "")
                                {
                                    <li class="nav-item"><a class="nav-link btn-information" asp-controller="Home" asp-action="InfoMenu">Thông tin cá nhân</a></li>
                                    <li class="nav-item"><a class="nav-link" asp-action="History" asp-route-id="@id">Lịch sử đơn hàng</a></li>
                                    <partial name="_LogoutPartialHome" />
                                }
                                else
                                {
                                    <li class="nav-item"><a class="nav-link" href="?route=login">Đăng nhập</a></li>
                                    <li class="nav-item"><a class="nav-link" href="?route=register">Đăng ký</a></li>
                                    <li class="nav-item"><a asp-controller="Home" asp-action="ForgotPassword" class="nav-link">Quên mật khẩu</a></li>
                                }
                                
                            </ul>
                        </li>
                    </ul>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="bx bx-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse offset nav-menu-hover" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link nav-link-hover" asp-controller="Home" asp-action="Index">Trang chủ</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link nav-link-hover" asp-controller="Home" asp-action="Products">Sản phẩm</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link nav-link-hover" href="../app/views/home/blog.php">Tin tức</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link nav-link-hover" asp-controller="Home" asp-action="FlashSale">Flash Sale</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-hover" asp-controller="Home" asp-action="Contact">Liên hệ</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between search-text" asp-controller="Home" asp-action="Products" method="get">
                    <input type="text" id="searchString" name="SearchString" class="form-control" chass="searchstring_input" placeholder="Tìm kiếm">
                    <button type="submit" class="btn"></button>
                    <span class="bx bx-x btn-search" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div>
    </header>

    <!-- Modal Minicart -->
    <div class="modal fade-scale-right" id="miniCartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <!-- empty -->
        </div>
    </div>
    <!-- Modal Minicart -->

    <main role="main" class="pb-3">
        <?php
            include_once('../app/views/shares/footer.php');
        ?>
    </main>

    <!-- start footer Area -->
    <footer class="footer-area section_gap">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-footer-widget single-footer-me">
                        <h6>ShopGiay</h6>
                        <ul>
                            <li><i class='bx bxl-gmail bx-sm'></i>Email: hhau050501@gmai.com</li>
                            <li><i class='bx bx-phone bx-sm'></i>Điện thoại: 0123 456 789</li>
                            <li><i class='bx bx-map bx-sm'></i>Địa chỉ: Hutech, Khu E, TP.HCM</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Danh mục</h6>
                        <ul class="single-footer-links">
                            <li><a asp-action="Index" asp-controller="Home">Trang chủ</a></li>
                            <li><a asp-action="Products" asp-controller="Home">Sản phẩm</a></li>
                            <li><a asp-action="FlashSale" asp-controller="Home">Sale</a></li>
                            <li><a asp-action="Blog" asp-controller="Home">Tin tức</a></li>
                            <li><a asp-action="Contact" asp-controller="Home">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6 class="mb-20">Thông tin</h6>
                        <ul class="single-footer-links">
                            <li><a href="#">Chính sách đổi trả</a></li>
                            <li><a href="#">Chính sách vận chuyển</a></li>
                            <li><a href="#">Chính sách bảo hành</a></li>
                            <li><a href="#">Hình thức thanh toán</a></li>
                            <li><a href="#">Hướng dẫn mua hàng</a></li>
                            <li><a href="#">Thông tin bảo mật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Theo dõi</h6>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class='bx bxl-facebook-circle bx-sm'></i></a>
                            <a href="#"><i class='bx bxl-instagram bx-sm'></i></a>
                            <a href="#"><i class='bx bxl-tiktok bx-sm'></i></a>
                            <a href="#"><i class='bx bxl-twitter bx-sm'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe class="iframe-chatbox"
                src="livechat.fpt.ai/v36/src/index.html?botcode=318841655fb9c702c3ecd44fb0003c82&botname=D-ACH%20Chat&sendername=&scendpoint=livechat.fpt.ai%3A443&time=1634731199642&subchannel=&themes=&styles=%7B%22headerColorType%22%3A%22gradient%22%2C%22headerSolid%22%3A%22%23EDEDF2FF%22%2C%22headerGradient1%22%3A%22%23004AFFFF%22%2C%22headerGradient2%22%3A%22%23B731A2FF%22%2C%22headerTextColor%22%3A%22%23FFFFFFFF%22%2C%22headerLogoEnable%22%3Afalse%2C%22headerLogoLink%22%3A%22https%3A%2F%2Fmedia.discordapp.net%2Fattachments%2F892405070900105251%2F900351456178208768%2Fbot_1.png%22%2C%22headerText%22%3A%22D-ACH%20Chat%22%2C%22primaryColor%22%3A%22%23566CFFFF%22%2C%22secondaryColor%22%3A%22%23E0E0E0FF%22%2C%22primaryTextColor%22%3A%22%23FFFFFFFF%22%2C%22secondaryTextColor%22%3A%22%23000000DE%22%2C%22buttonColor%22%3A%22%238292FFFF%22%2C%22buttonTextColor%22%3A%22%23ffffffff%22%2C%22bodyBackgroundEnable%22%3Afalse%2C%22bodyBackgroundLink%22%3A%22%22%2C%22avatarBot%22%3A%22https%3A%2F%2Fmedia.discordapp.net%2Fattachments%2F892405070900105251%2F900351456178208768%2Fbot_1.png%22%2C%22sendMessagePlaceholder%22%3A%22Nh%E1%BA%ADp%20tin%20nh%E1%BA%AFn%22%2C%22floatButtonLogo%22%3A%22https%3A%2F%2Fmedia.discordapp.net%2Fattachments%2F892405070900105251%2F900349518434926592%2Fbot.png%22%2C%22floatButtonTooltip%22%3A%22T%C3%B4i%20c%C3%B3%20th%E1%BB%83%20gi%C3%BAp%20g%C3%AC%20cho%20b%E1%BA%A1n%3F%22%2C%22floatButtonTooltipEnable%22%3Atrue%2C%22customerLogo%22%3A%22https%3A%2F%2Fmedia.discordapp.net%2Fattachments%2F892405070900105251%2F900351456178208768%2Fbot_1.png%22%2C%22customerWelcomeText%22%3A%22Nh%E1%BA%ADp%20t%C3%AAn%20c%E1%BB%A7a%20b%E1%BA%A1n%22%2C%22customerButtonText%22%3A%22B%E1%BA%AFt%20%C4%91%E1%BA%A7u%22%2C%22prefixEnable%22%3Afalse%2C%22prefixType%22%3A%22radio%22%2C%22prefixOptions%22%3A%5B%22Anh%22%2C%22Ch%E1%BB%8B%22%5D%2C%22prefixPlaceholder%22%3A%22Danh%20x%C6%B0ng%22%2C%22headerBackground%22%3A%22linear-gradient(86.7deg%2C%20%23004AFFFF%200.85%25%2C%20%23B731A2FF%2098.94%25)%22%2C%22css%22%3A%22%22%7D">
        </iframe>

    </footer>

    <!-- @*Hiệu ứng load*@ -->
    <div class="load">
        <img src="../root/images/loader.gif">
    </div>

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class='bx bxs-chevron-up'></i>
    </div>
    <!-- Scroll to Top End -->
    <script type="text/javascript" src="../root/js/loader.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../root/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../root/js/vendor/bootstrap.min.js"></script>
    <script src="../root/js/jquery.ajaxchimp.min.js"></script>
    <script src="../root/js/jquery.sticky.js"></script>
    <script src="../root/js/nouislider.min.js"></script>
    <script src="../root/js/owl.carousel.min.js"></script>
    <script src="../root/js/main.js"></script>
    <script src="../root/js/loadHomeModal.js"></script>
    <script src="~/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../root/js/jquery.nice-select.min.js"></script>
    <script src="../root/js/jquery.magnific-popup.min.js"></script>

    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- slide -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



    <script>
        AOS.init();

        $(".sticky-header").sticky();

        $(window).on('load', function (event) {
            $('body').removeClass('preloading');
            $('.load').delay(100).fadeOut('fast'); //default 500
        });

        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });

        
    </script>
</body>
</html>

<!-- <body>
<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">TRANG CHỦ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?route=dang-ky">SẢN PHẨM</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?route=brand">TIN TỨC </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?route=brand">FLASH SALE </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?route=brand">LIÊN HỆ </a>
        </li>
      </ul>
    </div>
  </div>
</nav> -->