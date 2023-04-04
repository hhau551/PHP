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
<div class="color-dashboard">
    <h2 class="main-title text-center pt-4">DANH SÁCH KHÁCH HÀNG</h2>
    <div class="col-lg-12 m-auto px-3 pb-4">
    <a type="button" class="btn btn-outline-dark" href="?route=index">Quay lại</a>
        <div class="card shadow-sm">
            <div class="card-body justify-content-around">
                <div class="row col-lg-12">
                    <div class="input-group col-lg-8 col-sm-6">
                        <div class="form-outline d-flex">
                                <p class="d-flex">
                                    <input class="pl-3" id="SearchString" name="SearchString" type="text" value="" placeholder="Nhập tên">
                                    <button type="submit" value="Search" class="search-btn btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </p>
                            <div class="ml-3">
                                    <div class="d-flex">
                                        <select id="status" name="status">
                                            <option value="">Chọn trạng thái</option>
                                            <option value=False>Đang hoạt động</option>
                                            <option value=True>Ngừng hoạt động</option>
                                        </select>
                                        <button type="submit" value="Search" class="search-btn btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 m-auto px-3">
        <div class="users-table table-wrapper">
            <table class="posts-table mt-3">
                <thead>
                    <tr class="users-table-info">
                        <th>
                            Họ Tên
                        </th>
                        <th class="text-center">
                            Email
                        </th>
                        <th class="text-center">
                            <a>
                                <span>Giới tính</span>
                                <i class="fas fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="text-center">
                            <a>
                                <span>SĐT</span>
                                <i class="fas fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="text-center">
                            <a>
                                <span>Ngày sinh</span>
                                <i class="fas fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th class="text-center">
                            Address
                        </th>
                        <th class="text-center">
                            <a>
                                <span>Trạng thái</span>
                                <i class="fas fa-sort ml-1"></i>
                            </a>
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($danhSachUser as $user)
                    { 
                        ?>
                            <tr>
                                <td class="col-lg-2">
                                    <?= $user['FullName'] ?>
                                </td>
                                <td class="col-lg-1">
                                    <?= $user['Email'] ?>
                                </td>
                                <td class="col-lg-1 text-center">
                                    <?php if ($user['Gender'] == 0)
                                    {?>
                                        <span>Nam</span>
                                    <?php }
                                    else
                                    {?>
                                        <span>Nữ</span>
                                    <?php }?>
                                </td>
                                <td class="col-lg-1 text-center">
                                    <?= $user['PhoneNumber'] ?>
                                </td>
                                <td class="col-lg-2 text-center">
                                    <?= $user['DOB'] ?>
                                </td>
                                <td class="col-lg-2">
                                    <?= $user['Address'] ?>
                                </td>
                                <td class="col-lg-1 text-center">
                                    <?= $user['Status'] ?>
                                </td>
                                <td class="col-lg-2">
                                    <a href="" class="btn-edit-usermem"><i class="far fa-edit dashbroad-icon-hover" style="font-size: 1.5rem;"></i></a>
                                    <a href="" class="btn-details-usermem"><i class="far fa-eye ml-3 dashbroad-icon-hover" style="font-size: 1.5rem;"></i></a>
                                    <input type="hidden" class="id" value="<?= $user['UserID'] ?>" />
                                </td>
                            </tr>
                <?php
                     } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Edit Discount -->
<div class="modal fade" id="editUserMemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- empty -->
    </div>
</div>

<!-- Modal Details Discount -->
<div class="modal fade" id="detailsUserMemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- empty -->
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