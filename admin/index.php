<?
include "../model/pdo.php";
include "../model/danhmuc.php";
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
            $dsdanhmuc = loadall();
            include "danhmuc/add.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_danhmuc($_GET['id']);
            }
            $dsdanhmuc = loadall();
            include "danhmuc/add.php";
            break;
        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sql = "select * from danhmuc where id =" . $_GET['id'];
                $dm = pdo_query_one($sql);
            }
            include "danhmuc/update.php";
            break;
        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloaisua'];
                $id = $_POST['id'];
                $sql = "update danhmuc set name='" . $tenloai . "' where id=" . $id;
                pdo_execute($sql);
                // $thongbao = "Thêm thành công";
            }
            $sql = "select * from danhmuc order by id desc";
            $dsdanhmuc = pdo_query($sql);
            include "danhmuc/add.php";
            break;
        case 'addsp':
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
