<?php
require_once('../../config/database.php');
$db=new Database();

// Lấy id tuyến từ phía client 
$idTuyen = $_GET['id_tuyen'];

// Truy vấn dữ liệu các ga của tuyến từ cơ sở dữ liệu
$sql = "SELECT ga.name,name_tuyen.so_ge,name_tuyen.gia_ve_toi_thieu,name_tuyen.don_gia,ga.id FROM ga,name_tuyen WHERE ga.id_tuyen=name_tuyen.id and name_tuyen.id = $idTuyen";
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