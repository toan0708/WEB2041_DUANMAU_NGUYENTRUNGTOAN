<?
function insert_danhmuc($tenloai)
{
    $sql = "insert into danhmuc(name) values('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id=" . $id;
    pdo_execute($sql);
}
function loadall(){
    $sql = "select * from danhmuc order by id desc";
    $dsdanhmuc = pdo_query($sql);
    return $dsdanhmuc;
}
