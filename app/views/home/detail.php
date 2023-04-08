<?php
  include_once('../app/views/shares/header.php');
?>

<!-- slide -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        </div>
    </div>
</section>
<!-- End Banner Area -->
<!-- Start breadcumb Area -->
<section class="breadcrumb-login breadcrumb-details">
    <div class="container">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="?route=product">Sản phẩm</a></li>
                <?php foreach ($danhSachProduct as $product) ?>
                <li class="breadcrumb-item active" aria-current="page"><?=$product['ProductName']?></li>
            </ol>
        </nav>
    </div>
</section>
<!-- End breadcumb Area -->
<!--================Single Product Area =================-->
<div class="product_image_area">
    <div class="container">
        <div class="row s_product_inner">
        <?php foreach ($danhSachProduct as $product) ?>
            <?php foreach ($danhSachBrand as $brand) ?>
            <div class="col-lg-6">
                <div class="swiper mySwiper2 shadow-lg">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide p-5">
                            <?php $image=$product['Image'] ?? "image.png" ?>
                            <img src="../root/images/Product/<?=$image?>" />
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-1 details-prd">
                <div class="s_product_text">
                    <h3><?= $product['ProductName'] ?></h3>
                    <span class="product-custom-brand">
                        <h4>Thương hiệu: <h5><?= $brand['BrandName']?></h5></h4>
                    </span>
                    <?php if ($product['Sale'] > 0)
                    { ?>
                        <div class="d-flex align-items-baseline">
                            <h2><?= $product['Sale']?>VNĐ</h2>
                            <h4 class="text-muted ml-4" style="text-decoration: line-through"><?= $product['Price']?>VNĐ</h4>
                        </div>
                    <?php } 
                    else
                    { ?>
                        <h2><?= $product['Price'] ?>VNĐ</h2>
                    <?php } ?>
                    <p></p>
                    <div class="size-wrap">
                        <div class="block-26 slt-detail-product mb-5">
                            <h4>Size</h4>
                            <select class="nice-select" id="size">
                                <option value="0">Chọn size:</option>
                                <?php foreach ($danhSachSize as $size) 
                                { ?>
                                    <option value="<?= $product['SizeID']?>"><?=$size['Size']?></option>
                                <?php } ?>
                            </select>
                        </div>


                        <div class="block-26-color mb-4">
                            <h4>Màu sắc</h4>
                            <ul class="d-flex product-details-color" id="chooseCL">
                                <?php foreach ($danhSachColor as $color)?> 
                                    <li>
                                        <input class="color-checkbox" type="radio" name="color" style="background-color: <?=$color['Color']?>;" value="<?=$color['Color']?>">
                                    </li>
                            </ul>
                        </div>
                        <div class="block-26-color product_count">
                            <h4>Số lượng:</h4>
                            <input type="number" id="quantity" min="1" max="99" value="1"
                                   class="input-text qty">
                        </div>
                        <div class="card_area d-flex align-items-center">
                            <a class="primary-btn d-flex align-items-center justify-content-center" href="?route=add-cart&productid=<?= $product['ProductID'] ?>">
                                <i class='bx bx-shopping-bag bx-sm'></i>&nbsp;&nbsp;
                                Thêm vào giỏ hàng
                            </a>                            
                            <input type="text" class="d-none" id="myInput">
                            <button onclick="Share()" title="Copy link" data-toggle="tooltip" onmouseout="outFunc()" class="btn-share  d-flex align-items-center justify-content-center">
                                <i class='bx bx-share bx-rotate-180'></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Single Product Area =================-->
<!--================Product Description Area =================-->
<section class="product_description_area"  data-aos="fade-up">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mô tả</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p>
                    <?= $product['Description']?>
                </p>
            </div>
        </div>
    </div>
</section>
<!--================End Product Description Area =================-->
<!-- Start related-product Area -->

<!-- End related-product Area -->
<!-- slide -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: swiper,
        },
    });

    var x = location.href;
    document.getElementById("myInput").value = x;

    function addCart(id) {
        $("#imgCart").attr("src", '/images/bagA.png');
        $("#imgBusy_" + id).show();
        var size = $("#size").val();
        var color = $('input[name=color]:checked', '#chooseCL').val();
        var quantity = $("#quantity").val();
        setTimeout(function () {
            $.ajax({
                url: "?route=add-cart",
                type: "Post",
                data: {
                    id: id,
                    size: size,
                    color: color,
                    quantity: quantity
                },
                success: function (result) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Thêm vào giỏ thành thành công!',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    setTimeout(function () {
                        location.reload();
                    }, 1000)
                },
                error: function (e) {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'Thêm vào giỏ thành thất bại!',
                        showConfirmButton: true,
                        timer: 1000
                    })
                }
            })
            $("#imgBusy_" + id).hide();
        }, 500);
    }

    function Share() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);
    }
</script>