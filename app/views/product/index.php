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
    <h2 class="main-title text-center pt-4">DANH SÁCH SẢN PHẨM</h2>    
    <div class="col-lg-12 m-auto px-3 pb-4">
    <a type="button" class="btn btn-outline-dark" href="?route=index">Quay lại</a>
        <div class="card shadow-sm">
            <div class="card-body justify-content-around">
                <div class="row col-lg-12">
                    <div class="input-group col-lg-8 col-sm-6">
                        <div class="form-outline d-flex">
                            <div class="d-flex">                                    
                                    <input class="pl-3" id="SearchString" name="SearchString" type="text" value="" placeholder="Nhập tên">
                                    <button type="submit" value="Search" class="search-btn btn btn-primary">
                                        <i class="fas fa-search"></i>
                                    </button>
                            </div>
                            <div class="ml-3">
                                    <div class="d-flex">                                       
                                        <select id="status" name="status">
                                            <option value="">Chọn trạng thái</option>
                                            <option value="1"> Ngừng kinh doanh</option>
                                            <option value="0"> Đang kinh doanh</option>
                                        </select>
                                        <button type="submit" value="Search" class="search-btn btn btn-primary">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>                
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href="?route=product" class="color-btn-create btn btn-primary float-right"><i class="fas fa-plus pr-2"></i>Thêm mới</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 m-auto px-3">
        <div class="users-table table-wrapper">
            <table class="posts-table mt-3 admin-product" enctype="multipart/form-data">
                <thead>
                    <tr class="users-table-info">
                        <th>
                            <a>
                                <span>ID</span><i class="fas fa-sort ml-2"></i>
                            </a>
                        </th>
                        <th class="text-center">
                            <a>
                                <span>Tên</span><i class="fas fa-sort ml-2"></i>
                            </a>
                        </th>
                        <th class="text-center">
                            <a>
                                <span>Giá</span><i class="fas fa-sort ml-2"></i>
                            </a>
                        </th>
                        <th class="text-center">
                            <a>
                                <span>Giảm giá</span><i class="fas fa-sort ml-2"></i>
                            </a>
                        </th>
                        <th class="text-center">
                            Hình
                        </th>
                        <th class="text-center">
                            Size
                        </th>
                        <th class="text-center">
                            Color
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>                   
                                
                    <?php foreach ($danhSachProduct as $product): ?>
                        
                        <tr>
                            <td>
                                <?= $product['ProductID'] ?>
                            </td>
                            <td>
                                <?= $product['ProductName'] ?>
                            </td>
                            <td class="text-center">
                                <?= $product['Price'] ?>
                            </td>
                            <td class="text-center">
                                <?php                         
                                if ($product['Sale'] == 0)
                                { ?>
                                    <span class="ml-5">0</span>
                                <?php }
                                else ?>                                
                                    <?= $product['Sale'] ?>
                            </td>
                            <td class="text-center">
                                <?php 
                                echo "<img src='../root/images/Product/".$product['Image']."' style='width:100px; height:100px;' />";
                                ?>
                            </td>
                            
                            <td class="text-center">
                                <select class="custom-select-product">                               
                                    <?php foreach ($danhSachSize as $size) : ?>
                                        <option value="<?= $product['SizeID'] ?>"><?= $size['Size'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td class="text-center">
                                <select class="custom-select-product">
                                <?php foreach ($danhSachColor as $color) : ?>
                                        <option value="<?= $product['ColorID'] ?>"><?= $color['Color'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                            <td>
                                <a href="?route=edit-product&productid=<?= $product['ProductID']?>"><i class="far fa-edit dashbroad-icon-hover" style="font-size: 1.5rem;"></i></a>
                                <a href="?route=delete-product&productid=<?= $product['ProductID']?>" class="btn-delete-product">
                                    <i class="far fa-trash-alt ml-3 dashbroad-icon-hover" style="font-size: 1.5rem;"></i>
                                </a>
                                <input type="hidden" class="id" value="@item.ProductID" />
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Delete Product -->
<div class="modal fade" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- empty -->
    </div>
</div>

<!-- Modal Details Product -->
<div class="modal fade" id="detailsProductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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