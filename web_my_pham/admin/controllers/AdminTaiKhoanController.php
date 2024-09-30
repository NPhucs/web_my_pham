<?php
class AdminTaiKhoanController{
    public $modelTaiKhoan;

    public function __construct(){
        $this->modelTaiKhoan = new AdminTaiKhoan();
    }

    public function danhSachQuanTri(){
        $listQuanTri = $this->modelTaiKhoan->getAllTaiKhoan(1);
        
        require_once './views/taikhoan/quantri/listQuanTri.php';
    }

    public function formAddQuanTri(){
        require_once './views/taikhoan/quantri/addQuanTri.php';

        deleteSessionError();
    }

    public function postAddQuanTri(){
        // Thêm dữ liệu
        
        // Kiểm tra xem dữ liệu có được đẩy lên không
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ho_ten = $_POST['ho_ten'];
            $email = $_POST['email'];

            $errors = [];
            if (empty($ho_ten)) {
                $errors['ho_ten'] = 'Tên không được để trống';
            }

            if (empty($email)) {
                $errors['email'] = 'Email không được để trống';
            }

            $_SESSION['errors'] = $errors;

            //Nếu không có lỗi thì tiến hành thêm tài khoản
            if (empty($errors)){
                //var_dump('Oke');
                //Đặt password
                $password = password_hash('123456@', PASSWORD_BCRYPT);
                
                //khai báo chức vụ
                $chuc_vu_id = 1;
                $this->modelTaiKhoan->insertTaiKhoan($ho_ten, $email, $password, $chuc_vu_id);
                header("Location:" . BASE_URL_ADMIN . '?act=list-tai-khoan-quan-tri');
                exit(); 
            } else{
                //Trả về báo lỗi
               $_SESSION['flash'] = true;

               header("Location:" . BASE_URL_ADMIN . '?act=form-them-quan-tri');
               exit(); 
            }
        }
    }
    
    public function formEditQuanTri(){
        $id_quan_tri = $_GET['id_quan_tri'];
        $quanTri = $this->modelTaiKhoan->getDetailTaiKhoan($id_quan_tri);
        
        require_once './views/taikhoan/quantri/editQuanTri.php';
    }
}