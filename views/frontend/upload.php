<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');

require_once('../../config/database.php');
session_start();

$price=$_POST['price'];
$tuyen=$_POST['tuyen'];
$ga_len=$_POST['ga_len'];
$ga_xuong=$_POST['ga_xuong'];
$phone=$_POST['phone'];
$soluong=$_POST['so_luong_dat'];
$datve=$_POST['datve'];
$time=date('Y-m-d H:i:s');
$db=new Database();
$sql= "INSERT INTO orderdetaill (id_tuyen, ga_len, ga_xuong, phone,`time`,price) VALUES ($tuyen, $ga_len, $ga_xuong,'$phone','$time',$price)";

// 
// print_r($row);
if(isset($datve)){
   
    if($row=$db->query($sql)){
        $_SESSION['message']='Thêm dữ liệu thành công!';
        header("location:../../?option=booking");
    }
    else{
        $_SESSION['message']='Thêm dữ Thất bại!';
        header("location:../../?option=booking");
    }
}