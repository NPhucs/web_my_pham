<?php require_once 'views/layout/header.php';?>
<?php require_once 'views/layout/menu.php';?>
<main>
<div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Đăng kí</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="login-register-wrapper section-padding">
<div class="container" style="max-width: 40vw">


<!-- Đăng ký Form -->
<div class="login-reg-form-wrap sign-up-form">
<?php if (isset($_SESSION['errors'])): ?>
    <div class="alert alert-danger">
        <?php foreach ($_SESSION['errors'] as $error): ?>
            <p><?php echo $error; ?></p>
        <?php endforeach; ?>
    </div>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>


    <h5 class="text-center">Đăng kí</h5>
    <form action="<?= BASE_URL . '?act=post-register'?>" method="post">
        <div class="single-input-item">
            <input type="text" name="ho_ten" placeholder="Nhập họ tên" required />
        </div>
        <div class="single-input-item">
            <input type="email" name="email" placeholder="Nhập email" required />
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="single-input-item">
                    <input type="password" name="mat_khau" placeholder="Nhập mật khẩu" required />
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-input-item">
                    <input type="password" name="nhap_lai_mat_khau" placeholder="Nhập lại mật khẩu" required />
                </div>
            </div>
        </div>

        <div class="single-input-item">
            <button type="submit" class="btn btn-sqr">Đăng kí</button>
        </div>
        <div class="single-input-item">
            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                <a href="<?= BASE_URL . '?act=login'?>" class="forget-pwd" >Đăng nhập</a>
            </div>
        </div>
    </form>
</div>

</div>
</div>
</main>
    <?php require_once 'views/layout/footer.php';?> 
  