<!-- thanhToanThanhCong.php -->

<h1>Đơn hàng thành công!</h1>

<table border="1">
    <tr>
        <th>Mã đơn hàng</th>
        <th>Tên người nhận</th>
        <th>Email người nhận</th>
        <th>Số điện thoại người nhận</th>
        <th>Địa chỉ người nhận</th>
        <th>Ghi chú</th>
        <th>Tổng tiền</th>
        <th>Phương thức thanh toán</th>
    </tr>
    <tr>
        <td><?= $donHang['ma_don_hang'] ?></td>
        <td><?= $donHang['ten_nguoi_nhan'] ?></td>
        <td><?= $donHang['email_nguoi_nhan'] ?></td>
        <td><?= $donHang['sdt_nguoi_nhan'] ?></td>
        <td><?= $donHang['dia_chi_nguoi_nhan'] ?></td>
        <td><?= $donHang['ghi_chu'] ?></td>
        <td><?= $donHang['tong_tien'] ?></td>
        <td><?= $donHang['phuong_thuc_thanh_toan'] ?></td>
    </tr>
</table>

<h2>Danh sách sản phẩm</h2>

<table border="1">
    <tr>
        <th>STT</th>
        <th>Tên sản phẩm</th>
        <th>Số lượng</th>
        <th>Đơn giá</th>
        <th>Thành tiền</th>
    </tr>
    <?php $i = 1; foreach ($sanPhamDonHang as $sanPham): ?>
    <tr>
        <td><?= $i++ ?></td>
        <td><?= $sanPham['ten_san_pham'] ?></td>
        <td><?= $sanPham['so_luong'] ?></td>
        <td><?= $sanPham['don_gia'] ?></td>
        <td><?= $sanPham['thanh_tien'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>