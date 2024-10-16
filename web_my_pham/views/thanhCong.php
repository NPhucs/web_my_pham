<?php require_once 'layout/header.php' ?>
<?php require_once 'layout/menu.php' ?>
<style>
.container {
    font-family: 'Roboto', sans-serif;
}
</style>
<main>
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-8">
                <div class="card shadow-lg">
                    <div class=" text-center">
                        <img src="assets/img/icon/1.png" alt="success" width="100px">
                        <h3>Thanh toán thành công!</h3>
                    </div>
                    <div class="card-body text-center">
                        <p class="fs-5">Cảm ơn bạn đã mua hàng tại cửa hàng của chúng tôi.</p>
                        <a href="<?= BASE_URL ?>" class="text-warning">Tiếp tục mua hàng</a>
                    </div>
                    <div class="card-footer text-center text-muted">
                        <p>Nếu bạn có bất kỳ câu hỏi nào, vui lòng liên hệ với chúng tôi.</p>
                        <p><i class="pe-7s-call"></i> Hotline: 0369312858</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require_once 'layout/footer.php' ?>