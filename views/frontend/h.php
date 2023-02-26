<?php
require_once('../../config/database.php');
$db=new Database();

// Lấy id tuyến từ phía client 
// $id=$_GET['id_tuyen']??1;
// Truy vấn dữ liệu các ga của tuyến từ cơ sở dữ liệu
$sql = "SELECT * from ga ";
$result=$db->query($sql);
// Kiểm tra kết quả truy vấn
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

// Đóng kết nối cơ sở dữ liệu
// mysqli_close($conn);