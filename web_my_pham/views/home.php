<?php require_once 'layout/header.php';?>
<?php require_once 'layout/menu.php';?>



    <main>
        <!-- hero slider area start -->
        <section class="slider-area">
            <div class="hero-slider-active slick-arrow-style slick-arrow-style_hero slick-dot-style">
                <!-- single slider item start -->
                <div class="hero-single-slide hero-overlay">
                    <div class="hero-slider-item bg-img" data-bg="assets/img/slider/a1.png">
                        <div class="container">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single-slide hero-overlay">
                    <div class="hero-slider-item bg-img" data-bg="assets/img/slider/a2.png">
                        <div class="container">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-single-slide hero-overlay">
                    <div class="hero-slider-item bg-img" data-bg="assets/img/slider/a3.png">
                        <div class="container">
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- service policy area start -->
        <div class="service-policy section-padding">
            <div class="container">
                <div class="row mtn-30">
                    <div class="col-sm-6 col-lg-3">
                        <div class="policy-item">
                            <div class="policy-icon">
                                <i class="pe-7s-plane"></i>
                            </div>
                            <div class="policy-content">
                                <h6>Giao hàng</h6>
                                <p>Miễn phí</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="policy-item">
                            <div class="policy-icon">
                                <i class="pe-7s-help2"></i>
                            </div>
                            <div class="policy-content">
                                <h6>Hỗ trợ</h6>
                                <p>Hỗ trợ 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="policy-item">
                            <div class="policy-icon">
                                <i class="pe-7s-back"></i>
                            </div>
                            <div class="policy-content">
                                <h6>Hoàn tiền</h6>
                                <p>Hoàn tiền trong 30 ngày khi lỗi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="policy-item">
                            <div class="policy-icon">
                                <i class="pe-7s-credit"></i>
                            </div>
                            <div class="policy-content">
                                <h6>Thanh toán</h6>
                                <p>Bảo mất mật thanh toán</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service policy area end -->

        <!-- banner statistics area start -->
        <div class="banner-statistics-area">
            <div class="container">
                <div class="row row-20 mtn-20">
                    <div class="col-sm-6">
                        <figure class="banner-statistics mt-20">
                            <a href="#">
                                <img src="assets/img/slider/a5.png" alt="product banner">
                            </a>
                            <div class="banner-content text-right">
                                <h5 class="banner-text1">Mỹ Phẩm</h5>
                                <h2 class="banner-text2">Cao<span>Cấp</span></h2>
                                <a href="<?= BASE_URL?>" class="btn btn-text">Mua ngay</a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-sm-6">
                        <figure class="banner-statistics mt-20">
                            <a href="#">
                                <img src="assets/img/slider/a6.png" alt="product banner">
                            </a>
                            <div class="banner-content text-right">
                                <h5 class="banner-text1">Mỹ Phẩm</h5>
                                <h2 class="banner-text2">Cao<span>Cấp</span></h2>
                                <a href="<?= BASE_URL?>" class="btn btn-text">Mua ngay</a>
                            </div>
                        </figure>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- banner statistics area end -->

        <!-- product area start -->
        <section class="product-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- section title start -->
                        <div class="section-title text-center">
                            <h2 class="title">Sản Phẩm của chúng tôi</h2>
                            <p class="sub-title">Sản phẩm được cập nhật liên tục</p>
                        </div>
                        <!-- section title start -->
                    </div>
                </div> 
                <div class="row">
                    <div class="col-12">
                        <div class="product-container">
                           
                            <!-- product tab content start -->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">
                                    <div class="product-carousel-4 slick-row-10 slick-arrow-style">
                                        <?php foreach ($listSanPham as $key => $sanPham): ?>
                                        <!-- product item start -->
                                        <div class="product-item">
                                            <figure class="product-thumb">
                                                <a href="<?= BASE_URL . '?act=chi_tiet_san_pham&id_san_pham=' . $sanPham['id']; ?>">
                                                    <img class="pri-img" src="<?php echo BASE_URL . $sanPham['hinh_anh'];?>" alt="product">
                                                    <img class="sec-img" src="<?php echo BASE_URL . $sanPham['hinh_anh'];?>" alt="product">
                                                </a>
                                                <div class="product-badge">
                                                    <?php $ngayNhap = new DateTime($sanPham['ngay_nhap']);
                                                          $ngayHienTai = new DateTime();
                                                          $tinhNgay = $ngayHienTai->diff($ngayNhap);

                                                          if ($tinhNgay->days <=7) {
                                                            ?>

                                                            <div class="product-label new">
                                                                <span>Mới</span>
                                                            </div>
                                                        <?php
                                                          }
                                                    ?>
                                                    <?php if($sanPham['gia_khuyen_mai']){  ?>
                                                    <div class="product-label discount">
                                                        <span>Giảm giá</span>
                                                    </div>

                                                    <?php }?>
                                                </div>
                                                
                                                <div class="cart-hover ">
                                                    <button class="btn btn-cart "><a href="<?= BASE_URL . '?act=chi_tiet_san_pham&id_san_pham=' . $sanPham['id']; ?>">Xem chi tiết</a></button>
                                                </div>
                                            </figure>
                                            <div class="product-caption text-center">
                                                
                                                <h6 class="product-name">
                                                    <a href="<?= BASE_URL . '?act=chi_tiet_san_pham&id_san_pham=' . $sanPham['id'];?>"><?= $sanPham['ten_san_pham']?></a>
                                                </h6>
                                                <div class="price-box">
                                                    <?php if ($sanPham['gia_khuyen_mai']) {?>
                                                        <span class="price-regular"><?= formatPrice($sanPham['gia_khuyen_mai']). 'đ';?></span>
                                                        <span class="price-old"><del><?= formatPrice($sanPham['gia_san_pham']). 'đ';?></del></span>
                                                    <?php } else{ ?>
                                                        <span class="price-regular"><?= formatPrice($sanPham['gia_san_pham']). 'đ';?></span>
                                                        <?php }?>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product item end -->

                                        <?php endforeach?>
                                    </div>
                                </div>
                               
                            </div>
                            <!-- product tab content end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product area end -->

        <!-- product banner statistics area start -->
        <section class="product-banner-statistics">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="product-banner-carousel slick-row-10">
                            <!-- banner single slide start -->
                            <div class="banner-slide-item">
                                <figure class="banner-statistics">
                                    <a href="#">
                                        <img src="assets/img/banner/p1.png" alt="product banner">
                                    </a>
                                    <div class="banner-content banner-content_style2">
                                    </div>
                                </figure>
                            </div>
                            <!-- banner single slide start -->
                            <!-- banner single slide start -->
                            <div class="banner-slide-item">
                                <figure class="banner-statistics">
                                    <a href="#">
                                        <img src="assets/img/banner/p3.png" alt="product banner">
                                    </a>
                                    <div class="banner-content banner-content_style2">
                                    </div>
                                </figure>
                            </div>
                            <!-- banner single slide start -->
                            <!-- banner single slide start -->
                            <div class="banner-slide-item">
                                <figure class="banner-statistics">
                                    <a href="#">
                                        <img src="assets/img/banner/p5.png" alt="product banner">
                                    </a>
                                    <div class="banner-content banner-content_style2">
                                    </div>
                                </figure>
                            </div>
                            <!-- banner single slide start -->
                            <!-- banner single slide start -->
                            <div class="banner-slide-item">
                                <figure class="banner-statistics">
                                    <a href="#">
                                        <img src="assets/img/banner/p6.png" alt="product banner">
                                    </a>
                                    <div class="banner-content banner-content_style2">
                                    </div>
                                </figure>
                            </div>
                            <!-- banner single slide start -->
                            <!-- banner single slide start -->
                            <div class="banner-slide-item">
                                <figure class="banner-statistics">
                                    <a href="#">
                                        <img src="assets/img/banner/p7.png" alt="product banner">
                                    </a>
                                    <div class="banner-content banner-content_style2">
                                        <h5 class="banner-text3"><a href="#">PEARLS</a></h5>
                                    </div>
                                </figure>
                            </div>
                            <!-- banner single slide start -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- product banner statistics area end -->
        
        
        <!-- featured product area start -->

        <!-- featured product area end -->
        
        




     

        <!-- brand logo area start -->
        <div class="brand-logo section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-logo-carousel slick-row-10 slick-arrow-style">
                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/1.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/2.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/3.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/4.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/5.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->

                            <!-- single brand start -->
                            <div class="brand-item">
                                <a href="#">
                                    <img src="assets/img/brand/6.png" alt="">
                                </a>
                            </div>
                            <!-- single brand end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand logo area end -->
    </main>

   

    <?php require_once 'layout/miniCart.php';?>
    <?php require_once 'layout/footer.php';?>
  