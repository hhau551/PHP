<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
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
        background-image: url('../root/images/banner/banner-bg.png') ;
        background-size: cover;
        position: relative;
    }
    .organic-breadcrumb {
        background-image: url('../root/images/banner/common-banner-bg.png') ;
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
                            <!-- <a>
                                @await Html.PartialAsync("_CartPartial")
                            </a> -->
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
                               <?php
                                session_start();                          

                                if (isset($_SESSION['UserId'])) 
                                {
                                    $avatar=$_SESSION['ImgUser'] ?? "avatar.png";                       
                                    echo "<span class=\"img-user\"> <img width='45px' src='../root/images/avatar/".$avatar."' /></span>";
                                }
                                else {?>
                                    <span class="img-non-user">
                                        <span class="bx bx-user-circle bx-sm d-flex"></span>
                                    </span>
                                <?php }
                                ?>
                            </a>
                            <ul class="dropdown-menu">
                            <?php                       
                                if(isset($_SESSION['UserId']))
                                {?>
                                    
                                    <li class="nav-item"><a class="nav-link btn-information" href="?route=info-menu">Thông tin cá nhân</a></li>
                                    <li class="nav-item"><a class="nav-link" href="?route=register" >Lịch sử đơn hàng</a></li>
                                    <?php
                                      include_once('../app/views/home/logout.php');                   
                                } 
                                else
                                { ?> 
                                    <li class="nav-item"><a href="?route=login" class="nav-link">Đăng nhập</a></li>
                                    <li class="nav-item"><a href="?route=register" class="nav-link">Đăng ký</a></li>
                                    <li class="nav-item"><a href="?route=forgot-password" class="nav-link">Quên mật khẩu</a></li>
                                <?php } ?>
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
                                <a class="nav-link nav-link-hover" href="?" >Trang chủ</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link nav-link-hover" asp-controller="Home" asp-action="Products">Sản phẩm</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link nav-link-hover" href="?route=blog">Tin tức</a>
                            </li>
                            <li class="nav-item submenu">
                                <a class="nav-link nav-link-hover" href="?route=flash-sale">Flash Sale</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-hover" href="?route=contact">Liên hệ</a>
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
    <script src="../root/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

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