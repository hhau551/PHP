<?php
    include('../app/views/shares/header.php')
?>
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
    <div class="container">
        <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
        </div>
    </div>
</section>
<!-- End Banner Area -->
<!-- Start breadcumb Area -->
<section class="breadcrumb-login">
    <div class="container">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="?">Trang chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Giỏ hàng</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End breadcumb Area -->
<!--================Cart Area =================-->
<div class="colorlib-product">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-md-10 offset-md-1">
                <div class="process-wrap">
                    <div class="process text-center active">
                        <p><span>01</span></p>
                        <h3>Giỏ hàng</h3>
                    </div>
                    <div class="process text-center">
                        <p><span>02</span></p>
                        <h3>Thanh toán</h3>
                    </div>
                    <div class="process text-center">
                        <p><span>03</span></p>
                        <h3>Hoàn thành</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-pb-lg">
            <div class="col-md-12">
                <div class="cart-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="pro-quantity">STT</th>
                                <th class="pro-thumbnail">Sản phẩm</th>
                                <th class="pro-title">Tên</th>
                                <th class="pro-quantity text-center">Size</th>
                                <th class="pro-quantity text-center">Màu sắc</th>
                                <th class="pro-quantity">Số lượng</th>
                                <th class="pro-price">Giá</th>
                                <th class="pro-subtotal">Tổng</th>
                                <th class="pro-remove"></th>
                            </tr>
                        </thead>
                        <tbody>                            
                            <?php
                                if(isset($_SESSION['cart'])):
                                    foreach($_SESSION['cart'] as $cart):
                                        foreach ($danhSachProduct as $product)
                                        {
                                            if ($product['Sale'] > 0)
                                            {
                                                $total = $product['Sale'] * $cart['soluong'];
                                            }
                                            else
                                            {
                                                $total = $product['Price'] * $cart['soluong'];
                                            }
                                        }
                            ?>                                        
                                    <tr class="text-center">
                                        <td class="pro-quantity"><?= $cart['productid']; ?></td>
                                        <td class="pro-thumbnail">
                                            <a href="#">
                                                <img class="img-fluid img-cart-inx" src="../root/images/Product/<?= $cart['image']; ?>"/>
                                            </a>
                                        </td>
                                        <td class="pro-title custom-title-cart">
                                            <?= $cart['productname']; ?>
                                        </td>
                                        <td class="pro-quantity text-center">
                                            <select class="cart-tbl-select-custom ml-3 border-0" id="size_@iD">                                                
                                                <option value="<?= $cart['size']; ?>"><?= $cart['size']; ?></option>                                                                        
                                            </select>
                                        </td>
                                        <td class="pro-quantity text-center">
                                            <select class="cart-tbl-select-custom ml-4 border-0" id="color_@iD">                                                
                                                <option value="<?= $cart['color']; ?>"><?= $cart['color']; ?></option>                                            
                                            </select>
                                        </td>
                                        <td class="pro-quantity">
                                            <span>
                                                <input type="number" value="<?= $cart['soluong']; ?>" name="soluong" min="1">
                                            </span>
                                        </td>
                                        <?php if ($cart['sale'] > 0)
                                        { ?>
                                            <td class="pro-subtotal"><?= $cart['sale']; ?></td>
                                        <?php }
                                        else
                                        { ?>
                                            <td class="pro-subtotal"><span><?= $cart['price']; ?></span></td>
                                        <?php } ?>
                                        <td class="pro-price"><span><?= $total ?></span></td>
                                        <td class="pro-remove"><a href="javascript:delCart(@iD);"><i class='bx bx-x bx-sm'></i></a></td>
                                    </tr>
                            <?php
                                endforeach;
                            endif;
                            ?>                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <input type="hidden" id="stt" value="@stt" />
        <div class="row row-pb-lg">
            <div class="col-md-12">
                <div class="total-wrap">
                    <div class="row d-flex justify-content-end">
                        <div class="col-sm-5 text-center">                            
                            <a class="primary-btn" href="?">Tiến hành thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>