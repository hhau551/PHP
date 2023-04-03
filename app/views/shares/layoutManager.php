<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- Bootstrap 4 / AngularJS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../root/images/fav.png" type="image/x-icon">
    <!-- Custom styles -->
    <link rel="stylesheet" href="../root/css/style-admin.css">
    <link rel="stylesheet" href="../root/css/style-modal-admin.css">
    <link rel="stylesheet" href="../root/css/style.css">
    <style>
        .modal-dialog {
            max-width: initial;
        }

        .modal-content {
            border: none;
            background-color: transparent;
        }

        .modal-body {
            border-radius: 18px;
            background-color: #fff;
        }

        .custom-btn-modal {
            border: none;
            font-size: 36px;
            color: #999;
        }

            .custom-btn-modal:hover {
                border: none;
                transform: scale(1.25);
                color: #576ee0;
            }

        .container-modal-small {
            max-width: 700px;
        }

        .custom-header-modal {
            display: flex;
            justify-content: space-between;
        }

        .custom-icon span {
            border: none;
            background-color: transparent;
        }

        .container-modal-medium .form-control,
        .container-modal-large .form-control {
            border: none !important;
            border-radius: 6px !important;
            background: rgb(245, 245, 245) !important;
        }

        .container-modal-large {
            max-width: 1100px;
        }

        .container-modal-medium {
            max-width: 800px;
        }

        /*.container-modal-large */ .form-checkbox-input {
            cursor: pointer;
            width: 20px;
            height: 20px;
            border-radius: 18px;
        }

        .modal-content .custom-detail {
            padding: 1rem;
        }
    </style>
</head>

<body>
    <div class="layer"></div>
    <!-- ! Body -->
    <a class="skip-link sr-only" href="#skip-target">Skip</a>
    <div class="page-flex">
        <!-- ! Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-start">
                <div class="sidebar-head d-flex justify-content-center">
                    <a asp-controller="Admin" asp-action="Index" class="logo-wrapper" title="Home">
                        <span class="sr-only">Home</span>
                        <img class="icon" src="../root/images/avatar/Logoteam.png" />
                        <div class="logo-text">
                            <span class="logo-title">H.A.H Team</span>
                            <span class="logo-subtitle">Trang Quản Lý</span>
                        </div>
                    </a>
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon bx bx-menu bx-sm text-light" aria-hidden="true"></span>
                    </button>
                </div>
                <div id="myDIV" class="sidebar-body">
                    <ul class="sidebar-body-menu">
                        <li>
                            <a class="dashboard-menu" asp-controller="Admin" asp-action="Index">
                                <span class="icon bx bx-home-alt bx-sm" aria-hidden="true"></span>Trang Chủ
                            </a>
                        </li>
                        <li>
                            <a class="dashboard-menu" asp-controller="Orders" asp-action="Index">
                                <span class="icon bx bx-shopping-bag bx-sm" aria-hidden="true"></span>Đơn Hàng
                            </a>
                        </li>
                        <li>
                            <a class="dashboard-menu" asp-controller="UserMem" asp-action="Index">
                                <span class="icon bx bx-user bx-sm" aria-hidden="true"></span>Khách Hàng
                            </a>
                        </li>
                        <li>
                            <a class="show-cat-btn" href="#">
                                <span class="icon bx bx-category-alt bx-sm" aria-hidden="true"></span>Sản Phẩm
                                <span class="category__btn transparent-btn" title="Open list">
                                    <span class="icon bx bxs-down-arrow" aria-hidden="true"></span>
                                </span>
                            </a>
                            <ul class="cat-sub-menu">
                                <li>
                                    <a asp-controller="Product" asp-action="Index">Danh Sách</a>
                                </li>
                                <li>
                                    <a asp-controller="Colors" asp-action="Index">Bảng Màu</a>
                                </li>
                                <li>
                                    <a asp-controller="Sizes" asp-action="Index">Bảng Size</a>
                                </li>
                                <li>
                                    <a href="?route=danh-sach-brand" >Thương Hiệu</a>
                                </li>
                            </ul>
                            </li>
                        <li>
                            <a asp-controller="Discount" asp-action="Index">
                                <span class="icon bx bxs-discount bx-sm" aria-hidden="true"></span>Mã giảm giá
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <div class="main-wrapper">
            <!-- ! Main nav -->
            <nav class="main-nav--bg">
                <div class="container main-nav">
                    <div class="main-nav-start">
                        <div class="music">
                            <audio id="player" src="../root/audio/cuoithoi.mp3"></audio>
                            <div class="player">
                                <div class="control">
                                    <i class="fas fa-play" id="playbtn"></i>
                                </div>
                                <div class="info">
                                    Cưới thôi!
                                    <div class="bar">
                                        <div id="progress"></div>
                                    </div>
                                </div>
                                <i id="current" class="fab fa-napster"></i>
                            </div>
                        </div>
                    </div>
                    <div class="main-nav-end">
                        <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                            <span class="sr-only">Toggle menu</span>
                            <span class="icon bx bx-menu bx-sm text-dark" aria-hidden="true"></span>
                        </button>
                        <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                            <span class="sr-only">Đổi giao diện</span>
                            <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                            <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </nav>
            <!-- ! Main -->
            @RenderBody()
        </div>
    </div>
    <!-- Chart library -->
    <script src="../root/plugins/chart.min.js"></script>
    <!-- Icons library -->
    <script src="../root/plugins/feather.min.js"></script>
    <!-- Custom scripts -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="../root/js/script.js"></script>
    <script src="../root/lib/jquery/dist/jquery.min.js"></script>
    <script src="../root/lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../root/js/loadAdminModal.js"></script>

    <script src="../root/lib/ckeditor/ckeditor.js"></script>
    <script src="../root/lib/ckeditor/adapters/jquery.js"></script>
    <script>
        $("#txtDescription").ckeditor();
        $("#txtDescriptionEdit").ckeditor();
    </script>
</body>

</html>