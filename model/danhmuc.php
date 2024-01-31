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
function loadall_dm(){
    $sql = "select * from danhmuc order by id desc";
    $dsdanhmuc = pdo_query($sql);
    return $dsdanhmuc;
}
function loadOne_dm($id){
    $sql = "select * from danhmuc where id =" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function updata_dm($id,$tenloai){
    $sql = "update danhmuc set name='" . $tenloai . "' where id=" . $id;
    pdo_execute($sql);
}