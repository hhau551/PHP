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

<!-- Start breadcumb Area -->
<section class="breadcrumb-ctn mt-3">
    <div class="container">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a asp-controller="Home" asp-action="Index">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End breadcumb Area -->
<!-- End Banner Area -->
<div class="container pb-5">
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
            <div class="sidebar-filter mt-50">
                <div class="top-filter-head">Danh mục</div>
                <div class="common-filter">
                    <div class="head">Thương thiệu</div>
                    <form>
                        <ul>
                            <li class="filter-list">
                                <input class="pixel-radio" type="radio"
                                       id="brands" name="brands" value="adidas">
                                <label>Adidas</label>
                            </li>
                            <li class="filter-list">
                                <input class="pixel-radio" type="radio"
                                       id="brands" name="brands" value="nike">
                                <label>Nike</label>
                            </li>
                            <li class="filter-list">
                                <input class="pixel-radio" type="radio"
                                       id="brands" name="brands" value="converse">
                                <label>Converse</label>
                            </li>
                            <li class="filter-list">
                                <input class="pixel-radio" type="radio"
                                       id="brands" name="brands" value="vans">
                                <label>Vans</label>
                            </li>
                            <li class="filter-list">
                                <input class="pixel-radio" type="radio"
                                       id="brands" name="brands" value="mlb">
                                <label>MLB</label>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" value="Search" class="search-btn-product primary-btn d-flex">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </div>
                    </form>

                </div>
                <div class="common-filter">
                    <div class="head">Chọn size</div>

                    <form action="/home/products" method="get">
                        <div class="d-flex justify-content-around">
                            <ul>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="sizes" name="sizes" value="2">
                                    <label>36</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="sizes" name="sizes" value="2">
                                    <label>37</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="sizes" name="sizes" value="3">
                                    <label>38</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="sizes" name="sizes" value="4">
                                    <label>39</label>
                                </li>

                            </ul>
                            <ul>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="sizes" name="sizes" value="5">
                                    <label>40</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="sizes" name="sizes" value="6">
                                    <label>41</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="sizes" name="sizes" value="7">
                                    <label>42</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="sizes" name="sizes" value="8">
                                    <label>43</label>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" value="Search" class="search-btn-product primary-btn d-flex">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="common-filter">
                    <div class="head">Màu sắc</div>
                    <form action="/home/products" method="get">
                        <div class="d-flex justify-content-around">
                            <ul>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="colors" name="colors" value="1">
                                    <label>Trắng</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="colors" name="colors" value="2">
                                    <label>Đen</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="colors" name="colors" value="4">
                                    <label>Vàng</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="colors" name="colors" value="5">
                                    <label>Đỏ</label>
                                </li>
                            </ul>
                            <ul>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="colors" name="colors" value="6">
                                    <label>Xanh</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="colors" name="colors" value="7">
                                    <label>Tím</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="colors" name="colors" value="8">
                                    <label>Nâu</label>
                                </li>
                                <li class="filter-list">
                                    <input class="pixel-radio" type="radio"
                                           id="colors" name="colors" value="9">
                                    <label>Xám</label>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-center mt-4">
                            <button type="submit" value="Search" class="search-btn-product primary-btn d-flex">
                                <i class='bx bx-search-alt'></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
            <!-- Start Filter Bar -->
            <div class="filter-bar d-flex flex-wrap align-items-center">
                <div class="sorting custom-sort-product">
                    <a>
                        <span>Giá từ: </span>
                        <i class='bx bx-sort text-white'></i>
                    </a>
                </div>
                <div class="sorting mr-auto">
                </div>
            </div>
            <!-- End Filter Bar -->
            <!-- Start Best Seller -->
            <section class="lattest-product-area category-list">
                <div class="row" data-aos="fade-up">
                    <!-- single product -->
                    <?php foreach ($danhSachProduct as $product) 
                    { ?>
                        <div class="col-lg-4 col-md-6"  data-aos="fade-up">
                            <div class="single-product">
                                <a  href="?route=detail&productid=<?= $product['ProductID']?>">
                                    <div class="img-prd-animation">
                                        <div class="img-fluid">
                                        <?php        
                                            $image=$product['Image'] ?? "image.png";   ?>                                         
                                            <img class="" src="../root/images/Product/<?= $image ?>" alt="" />                                           
                                            <?php
                                            if ($product['Sale'] > 0)
                                            { ?>
                                                <div class="bagde-sale">
                                                    <span class="badge-txt">Sale</span>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </a>
                                <div class="product-details mt-3">
                                    <h6 class="custom-title-product">
                                        <a class="text-decoration-none text-link-hover" href="?route=detail&productid=<?= $product['ProductID']?>">
                                           <?= $product["ProductName"] ?>
                                        </a>
                                        
                                    </h6>
                                    <div class="price d-flex">
                                        <?php if ($product['Sale'] > 0)
                                        {
                                            echo "<h6 class='d-flex'>".$product['Sale']." <span class='text-lowercase'></span> VNĐ</h6>";
                                            echo "<h6 class='d-flex l-through'>".$product['Price']."<span class='text-lowercase'></span></h6>";
                                        }
                                        else
                                        {
                                            echo "<h6 class='d-flex'>".$product['Price']." <span class='text-lowercase'></span> VNĐ</h6>";
                                        } ?>
                                    </div>
                                    <div class="prd-bottom">
                                            <a class='addProduct social-info' href="?route=add-cart&productid=<?= $product['ProductID'] ?>">
                                                <span class='bx bx-basket'></span>
                                                <p class="hover-text">Giỏ hàng</p>
                                            </a>                            
                                        <a href="?route=detail&productId=<?= $product['ProductID']?>" class="social-info">
                                            <span class='bx bx-move'></span>
                                            <p class="hover-text">Xem Thêm</p>
                                        </a>
                                        <a class="social-info">
                                            <span class='bx bx-share bx-rotate-180'></span>
                                            <p class="hover-text">Chia sẻ</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- single product -->
                </div>
            </section>
            <!-- End Best Seller -->
        </div>
    </div>
</div>

<script>
    function clearCart() {
        $("#imgCart").attr("src", '/images/bag.png');
    }
    function addCart(id) {
        $("#imgCart").attr("src", '/images/bagA.png');
        $("#imgBusy_" + id).show();
        setTimeout(function () {
            $.ajax({
                url: "?route=add-cart",
                type: "Post",
                data: {
                    id: id,
                    size: 0,
                    color: 0
                },
                success: function (result) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Thêm vào giỏ thành thành công!',
                        showConfirmButton: false,
                        timer: 1500
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
</script>