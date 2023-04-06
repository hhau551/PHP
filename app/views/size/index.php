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
    <h2 class="main-title text-center pt-4">DANH SÁCH SIZE</h2>
    
    <div class="col-lg-12 m-auto px-5">
    <a type="button" class="btn btn-outline-dark" href="?route=index">Quay lại</a>
        <div class="users-table table-wrapper">
            <table class="posts-table mt-3">
                <thead>
                    <tr class="users-table-info">
                        <th class="dashboard-txt">
                            <a>
                                <span style="font-weight:bold;">ID</span><i class="fas fa-sort ml-2"></i>
                            </a>

                        </th>
                        <th class="dashboard-txt">
                            <a>
                                <span style="font-weight:bold;">Size</span><i class="fas fa-sort ml-2"></i>
                            </a>

                        </th>
                        <th class="dashboard-icon pb-3">
                            <a href="?route=size" class="btn btn-primary">
                                <i class="fas fa-plus pr-2"></i>Thêm mới
                            </a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($danhSachSize as $size): ?>
                    <tr>
                        <td>
                        <?= $size['SizeID'] ?>
                        </td>
                        <td>
                        <?= $size['Size'] ?>
                    </td>
                            <td>
                                <a href="?route=edit-size&sizeid=<?= $size['SizeID']?>" class="btn-edit-color"><i class="far fa-edit dashbroad-icon-hover" style="font-size: 1.5rem;"></i></a>
                                <a href="?route=delete-size&sizeid=<?= $size['SizeID']?>"><i class="far fa-trash-alt ml-3 dashbroad-icon-hover" style="font-size: 1.5rem;"></i></a>
                                <input type="hidden" class="id" value="@item.ColorID" />
                            </td>
                        </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Create Color -->
<div class="modal fade" id="createColorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- empty -->
    </div>
</div>

<!-- Modal Edit Color -->
<div class="modal fade" id="editColorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- empty -->
    </div>
</div>

<!-- Modal Delete Color -->
<div class="modal fade" id="deleteColorModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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