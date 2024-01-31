<?
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "header.php";
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao = "Thêm thành công";
            }
            $dsdanhmuc = loadall_dm();
            include "danhmuc/add.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $dsdanhmuc = loadall_dm();
            include "danhmuc/add.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $dm = loadOne_dm($_GET['id']);
               
            }
            
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloaisua'];
                $id = $_POST['id'];

                // $thongbao = "Thêm thành công";
            }
            updata_dm($id, $tenloai);
            $dsdanhmuc = loadall_dm();
            include "danhmuc/add.php";
            break;



            
            //san pham

        case 'addsp':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                // var_dump($_FILES['hinhsp']);
                $iddm = $_POST['iddm'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $motasp = $_POST['motasp'];
                $hinhsp = $_FILES['hinhsp']['name'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES['hinhsp']['name']);

                if (move_uploaded_file($_FILES['hinhsp']['tmp_name'], $target_file)) {
                    // File uploaded successfully
                } else {
                    // Error uploading file
                }
                insert_sp($tensp, $giasp, $hinhsp, $motasp, $iddm);
                // $thongbao = "Thêm thành công";
            }
            $dsdanhmuc = loadall_dm();
            $dssanpham = loadall_sp();
            include "sanpham/add.php";
            break;
        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sp($_GET['id']);
            }
            $dssanpham = loadall_sp();
            include "sanpham/add.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {

                $dm = loadOne_sp($_GET['id']);
            }
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloaisua'];
                $id = $_POST['id'];

                // $thongbao = "Thêm thành công";
            }
            updata_dm($id, $tenloai);
            include "sanpham/add.php";
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
