<?php 
require_once('../../config/database.php');
$db=new Database();
$q=$_GET['q'];

$sql="SELECT ga_len.name as ga_len,orderdetaill.phone,name_tuyen.name as name_tuyen,orderdetaill.time,orderdetaill.price,orderdetaill.id,ga_xuong.name as ga_xuong FROM orderdetaill
    JOIN ga as ga_len ON ga_len.id=orderdetaill.ga_len
    JOIN ga as ga_xuong ON ga_xuong.id=orderdetaill.ga_xuong
    join name_tuyen ON name_tuyen.id=orderdetaill.id_tuyen
    ORDER BY orderdetaill.id DESC
    ";
$result=$db->query($sql);
if ($result->num_rows > 0) {
    // Lấy dữ liệu từ kết quả truy vấn và đưa vào mảng
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // Trả về dữ liệu dạng JSON cho phía client
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    echo 'Không tìm thấy dữ liệu';
}

// -- Where orderdetaill.phone like '%$q%'
