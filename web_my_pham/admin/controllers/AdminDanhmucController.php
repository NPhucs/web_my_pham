<?php

class AdminDanhMucController {

    public $modelDanhMuc;
    public function __construct() {
        $this->modelDanhMuc = new AdminDanhMuc();
    }
    public function danhSachDanhMuc(){

        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
        require_once './views/danhmuc/listDanhmuc.php';
    }

    public function formAddDanhMuc(){
        //Hiển thị form nhập
        require_once './views/danhmuc/addDanhMuc.php';
    }

    public function postAddDanhMuc(){
        // Thêm dữ liệu
        
        // Kiểm tra xem dữ liệu có được đẩy lên không
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $mo_ta = $_POST['mo_ta'];

            $errors = [];
            if (empty($ten_danh_muc)) {
                $errors['ten_danh_muc'] = 'Tên danh mục không được để trống';
            }

            //Nếu không có lỗi thì tiến hành thêm danh mục
            if (empty($errors)){
                //var_dump('Oke');

                $this->modelDanhMuc->insertDanhMuc($ten_danh_muc, $mo_ta);
                header("Location:" . BASE_URL_ADMIN . '?act=danh-muc');
                exit(); 
            } else{
                require_once './views/danhmuc/addDanhMuc.php';
            }
        }
    }

    public function formEditDanhMuc(){
        //Hiển thị form nhập
        $id = $_GET['id_danh_muc'];
        $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);
        if ($danhMuc) {
            require_once './views/danhmuc/editDanhMuc.php';
        } else{
            header("Location:" . BASE_URL_ADMIN . '?act=danh-muc');
            exit(); 
        }
        
        
    }   

    public function postEditDanhMuc(){
        // Thêm dữ liệu
        
        // Kiểm tra xem dữ liệu có được đẩy lên không
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['id'];
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $mo_ta = $_POST['mo_ta'];

            $errors = [];
            if (empty($ten_danh_muc)) {
                $errors['ten_danh_muc'] = 'Tên danh mục không được để trống';
            }

            //Nếu không có lỗi thì tiến hành sửa danh mục
            if (empty($errors)){

                $this->modelDanhMuc->updateDanhMuc($id, $ten_danh_muc, $mo_ta);
                header("Location:" . BASE_URL_ADMIN . '?act=danh-muc');
                exit(); 
            } else{
                // Trả về form bị lỗi
                $danhMuc = ['id' => $id, 'ten_danh_muc' => $ten_danh_muc, 'mo_ta' => $mo_ta];
                require_once './views/danhmuc/editDanhMuc.php';
            }
        }
    }

    public function deleteDanhMuc(){
        $id = $_GET['id_danh_muc'];
        $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);

        if ( $danhMuc) {
            $this->modelDanhMuc->destroyDanhMuc($id);
        } 
        header("Location:" . BASE_URL_ADMIN . '?act=danh-muc');
        exit(); 
        
    }
}