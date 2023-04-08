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

<link rel="stylesheet" href="../root/lib/multiple-select/multiple-select.min.css" />

<div class="container">
    <div class="col-lg-12 col-md-12 col-sm-12 custom-form mt-4 pb-5">
        <div class="card flex-row shadow-lg">
            <div class="card-body col-lg-12 col-md-12 col-sm-12">
                <a href="?route=danh-sach-product" class="dashbroad-icon-hover">
                    <i class="icon-back fas fa-chevron-left fa-2x d-flex"></i>
                </a>
                <h2 class="main-title text-center text-uppercase mt-n3">Chỉnh sửa sản phẩm</h2>
                <form class="form-edit" action="?route=edit-product&productid=<?php $product['ProductID'];?>" method="post" enctype="multipart/form-data">
                    <div validation-summary="ModelOnly" class="text-danger"></div>
                    <input type="hidden" for="ProductID" />
                    <div class="form-group">
                        <label for="ProductName" class="control-label">ProductName</label>
                        <input type="text" for="ProductName" class="form-control" id="ProductName" name="ProductName" value="<?php $product['ProductName'];?>"/>
                        <label for="hoten">Ho Ten</label>
                        <input type="text" class="form-control" id="hoten" value="<?php $product['ProductName'];?>" name="hoten" required>
                    </div>
                    <div class="form-group">
                        <label for="Price" class="control-label">Price</label>
                        <input for="Price" class="form-control" />
                        <span validation-for="Price" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="Sale" class="control-label">Sale</label>
                        <input for="Sale" class="form-control" />
                        <span validation-for="Sale" class="text-danger"></span>
                    </div>
                    <div class="form-group">                        
                        <?php 
                            echo "<img src='../root/images/Product/".$product['Image']."' style='width:100px; height:100px;' />";
                        ?>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" id="image" name="image"/>
                    </div>
                    <div class="form-group">
                        <label for="SizeID" class="control-label"></label>
                        <select name="SizeID" for="SizeID" class="form-control-select">
                            <option value="1">35</option>
                            <option value="2">36</option>
                            <option value="3">37</option>
                            <option value="4">38</option>
                            <option value="5">39</option>
                            <option value="6">40</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label class="control-label">Chọn size</label>
                            <select name="BrandID" for="BrandID" class="form-control-select">
                                <option value="1">Adidas</option>
                                <option value="2">Nike</option>
                                <option value="3">Converse</option>
                                <option value="4">Vans</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Chọn màu</label>
                        <select name="ColorID" for="ColorID" class="form-control-select" >
                            <option value="1">White</option>
                            <option value="2">Black</option>
                            <option value="3">Yellow</option>
                            <option value="4">Red</option>
                            <option value="5">Blue</option>
                            <option value="6">Brown</option>
                        </select>
                        
                    </div>
                    <div class="form-group mt-3">
                        <label for="Description" class="control-label">Description</label>
                        <textarea id="Description" for="Description" name="Description" class="form-control-description form-control"></textarea>
                        <span validation-for="Description" class="text-danger"></span>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" value="Save" class="mt-2 col-lg-6 btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
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