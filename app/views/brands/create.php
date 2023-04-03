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
<div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Thêm thương hiệu mới</h3>
            <a href="?route=danh-sach-brand">
                <i class="fas fa-times"></i>
            </a>
          </div>
          <div class="card-body">
            <form action="?route=create-brand" method="post">
              <div class="form-group">
                <label for="brandname">Thương hiệu</label>
                <input type="text" class="form-control" id="brandname" name="brandname" required>
              </div>
              <br/>
              <button type="submit" class="btn btn-primary w-100">Thêm thương hiệu</button>
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