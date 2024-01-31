<?
function insert_sp($tensp,$giasp,$hinhsp,$motasp,$iddm)
{
    $sql = "INSERT INTO sanpham(name, price, img, mota, iddm) VALUES ('$tensp', '$giasp', '$hinhsp', '$motasp', '$iddm')";
    // $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp,$giasp,$hinh,$motasp,$iddm')";
    pdo_execute($sql);
}
function delete_sp($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
function loadall_sp(){
    $sql = "select * from sanpham order by id desc";
    $dssanpham = pdo_query($sql);
    return $dssanpham;
}
function loadOne_sp($id){
    $sql = "select * from sanpham where id =" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function updata_sp($id,$tenloai){
    $sql = "update sanpham set name='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}