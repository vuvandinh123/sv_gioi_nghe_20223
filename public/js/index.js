
var totalGas=0 //biến dùng để đếm có bao nhiêu ga để tính tiền
var priceMinimum=0;
var unitPrice=0;
var data2=[];
// bắt sự kiện thay đổi
$('#select-tuyen').change(function() {
    var idTuyen = $(this).val();
    // gọi ajack để lấy dữ diieuj từ file php
    $.ajax({
        url: 'views/frontend/process.php',
        method: 'GET',
        data: { id_tuyen: idTuyen },
        dataType: 'json',
        success: function(data) {
            data2=data;
            if (data.length > 0) {
                var html = '';
                for (var i = 0; i < data.length; i++) {
                    html += `<option value= ${data[i].id} > ${data[i].name }</option>`;
                    totalGas=i;
                }
                $('.danh-sach-ga').html(html);
                document.getElementById('ge').innerHTML=data[0].so_ge;
                priceMinimum=Number(data[0].gia_ve_toi_thieu);
                unitPrice=Number(data[0].don_gia) 
            }
        },
    });
});
// hàm tính tiền
function tinhtien(ga,totalGas,priceMinimum,unitPrice, gasOrder=1){
    var thanhTien=priceMinimum;
    var check=Math.ceil(totalGas/2)
    if(ga<=check){
        return thanhTien*gasOrder;
    }
    else{
        thanhTien+=Math.floor((ga-check)*unitPrice)
        return thanhTien*gasOrder;
    }
}

// hàm format giá tiền 
function formatCash(str) {
    return str.split('').reverse().reduce((prev, next, index) => {
        return ((index % 3) ? next : (next + ',')) + prev
    })
}
// bắt sự kiện khi ga xuống hoặc ga lên hoặc số lượng thay đổi thì thực hiện tính tiền
var idXuong=0;var idLen=0;var thanhtien=0;
$('#select-xuong, #select-len, #so_luong').change(function() {
    var idUp = Number($('#select-len').val());
    var idDown = Number($('#select-xuong').val());
    var check1=data2.findIndex(element=>element.id==idUp)
    var check2=data2.findIndex(element=>element.id==idDown)
    var gasOrder = Number($('#so_luong').val());
    var ga =  check2 > check1 ? check2 - check1 : check1-check2;
    // console.log(check1, check2)
    var thanhtien = tinhtien(ga, totalGas,priceMinimum,unitPrice, gasOrder);
    document.getElementById('price').innerHTML = formatCash(String(thanhtien)) + ' Đồng';
    document.getElementById('price2').value = thanhtien;
});


