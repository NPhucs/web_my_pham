  <!-- Header  -->
  <?php include './views/layout/header.php'; ?>
  <!-- Navbar -->
  <?php include './views/layout/navbar.php'; ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include './views/layout/sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Quản lý danh sách mỹ phẩm</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

<!-- Default box -->
<div class="card card-solid">
  <div class="card-body">
    <div class="row">
      <div class="col-12 col-sm-6">
        <div class="col-12">
          <img type="width: 50px; height:50px" src="<?= BASE_URL . $sanPham['hinh_anh']?>" class="product-image" alt="Product Image">
        </div>
        <div class="col-12 product-image-thumbs">
          <?php foreach($listAnhSanPham as $anhSP): ?>
          <div class="product-image-thumb <?= $anhSP == 0 ? 'active':''?>" ><img src="<?= BASE_URL . $anhSP['link_hinh_anh']; ?>" alt="Product"></div>
          <?php endforeach?>
        </div>
      </div>
      <div class="col-12 col-sm-6">
        <h3 class="my-3"><?= $sanPham['ten_san_pham']?></h3>
        <hr>
        <h4 class="mt-3">Giá tiền: <small><?= $sanPham['gia_san_pham']?></small></h4>
        <h4 class="mt-3">Giá khuyến mãi: <small><?= $sanPham['gia_khuyen_mai']?></small></h4>
        <h4 class="mt-3">Số lượng: <small><?= $sanPham['so_luong']?></small></h4>
        <h4 class="mt-3">Lượt xem: <small><?= $sanPham['luot_xem']?></small></h4>
        <h4 class="mt-3">Ngày nhập: <small><?= $sanPham['ngay_nhap']?></small></h4>
        <h4 class="mt-3">Trạng thái: <small><?= $sanPham['trang_thai'] == 1 ? 'Còn hàng' : 'Dừng bán' ?></small></h4>
        <h4 class="mt-3">Danh mục: <small><?= $sanPham['ten_danh_muc']?></small></h4>
        <h4 class="mt-3">Mô tả: <small><?= $sanPham['mo_ta']?></small></h4>
      </div>
    </div>
    <ul class="nav nav-tabs row mt-4" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Bình luận</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
  <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Tên người bình luận</th>
                <th>Nội dung</th>
                <th>Ngày đăng</th>
                <th>THao tác</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Nguyễn Thiện Phúc</td>
                <td>Sản phẩm tốt</td>
                <td>27/09/2024</td>
                <td>
                  <div class="btn-group">
                    <a href="#"><button class="btn btn-warning">Ẩn</button></a>
                    <a href="#"><button class="btn btn-danger">Xóa</button></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
  </div>

</div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
   <?php include './views/layout/footer.php'; ?>
   <!-- EndFooter -->
  
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
</html>
