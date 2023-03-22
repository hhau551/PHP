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
                <li class="breadcrumb-item active" aria-current="page">Liên hệ</li>
            </ol>
        </nav>
    </div>
</section>
<!-- End breadcumb Area -->
<!--================Contact Area =================-->
<section class="contact_area section_gap_bottom">
    <div class="container">
        <div class="mapBox">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4206639905988!2d106.78291401458975!3d10.855574792267845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175276e7ea103df%3A0xb6cf10bb7d719327!2sThu%20Duc%20Campus%20Hutech%20khu%20E!5e0!3m2!1svi!2s!4v1679489752734!5m2!1svi!2s"
                    height="420" style="border:0; width:100%; border-radius: 18px;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3">
                <div class="contact_info">
                    <div class="info_item">
                        <i class='bx bx-map'></i>
                        <h6>Hutech, Khu E</h6>
                        <p>Quận 9, TP.HCM</p>
                    </div>
                    <div class="info_item">
                        <i class='bx bx-phone'></i>
                        <h6><a href="#">0123 456 789</a></h6>
                        <p>Từ 8 AM đến 8 PM</p>
                    </div>
                    <div class="info_item">
                        <i class='bx bxl-gmail'></i>
                        <h6><a href="#">hhau050501@gmai.com</a></h6>
                        <p>Phản hồi trong vòng 24h</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <form class="row contact_form" method="post" id="contactForm"
                      novalidate="novalidate" action="mailto:hhau050501@gmail.com">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-input form-control" id="Name" name="Name" value=""
                                   placeholder="Nhập tên" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Nhập tên'">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-input form-control" id="EmailAddress" name="EmailAddress" value=""
                                   placeholder="Nhập email" onfocus="this.placeholder = ''"
                                   onblur="this.placeholder = 'Nhập email'">
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center align-items-center">
                        <button type="submit" value="submit" class="col-lg-4 primary-btn">Gửi tin nhắn</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--================Contact Area =================-->
<?php
    include('../app/views/shares/footer.php')
?>