

$(document).ready(function(){
    var data=[];
    var filteredData = [];

    // Lấy dữ liệu
    $.ajax({
        url: 'views/frontend/s.php',
        type: 'GET',
        data: {q: ''},
        success: function(response) {
            data = response;
            filteredData = data; // Lưu toàn bộ dữ liệu cho lần đầu tiên
            renderTable();
        }
    });
    // Xử lý khi nhập từ khóa tìm kiếm
    $('#search').keyup(function() {
        var value = $('#search').val();
        if (value === '') {
            filteredData = data; // Nếu từ khóa trống thì hiển thị toàn bộ dữ liệu
        } else {
            filteredData = data.filter(function(item) {
                return item.phone.includes(value);
            });
        }
        if(filteredData.length==0){
            $('.messeger').html('Không	tìm	thấy thông tin đặt	vé')
        }
        else{
            $('.messeger').html('')
        }
        renderTable(); // Render bảng với dữ liệu đã lọc
    });

    // Hàm render bảng
    function renderTable() {
        var html = '';
        for (var i = 0; i < filteredData.length; i++) {
            html += `<tr>
                <td>${filteredData[i].id}</td>
                <td>${filteredData[i].time}</td>
                <td>${filteredData[i].name_tuyen}</td>
                <td>${filteredData[i].ga_len}</td>
                <td>${filteredData[i].ga_xuong}</td>
                <td>${filteredData[i].price}đ</td>
            </tr>`;
        }
        $('tbody').html(html);
    }
});
