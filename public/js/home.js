
$(document).ready(function() {
    var data2=[];
    var filterData=[];
    console.log('aaaa');

    $.ajax({
        url: 'views/frontend/h.php',
        method: 'GET',
        data: { id_tuyen: '' },
        dataType: 'json',
        success: function(data) {
            filterData=data;
            data2 = filterData.filter(a=>a.id_tuyen==1)
            rander(data2)
        },
    });
    function rander(filterData){
        var html='';
        for(var i=0;i<filterData.length;i++){
            var t=i==0?'checked':'';
            html +=`<input type="radio" name='check' id="${filterData[i].id}" ${t}>
                    <label for='${filterData[i].id}'>
                        <div class="cricle"></div>
                        <span>${filterData[i].name}</span> 
                        <div class="toltip"><b>Tuyến </b><span>1</span><span>2</span></div>
                    </label>`
        }
       var name='TUYẾN ';
        name+= filterData[0].id_tuyen;
        $('.wrapper').html(html);
        $('.title span').html(name);
        
    }
    function handleclick(){
        var dataid=$(this).attr('data-id');
        data2 = filterData.filter(a=>a.id_tuyen==dataid)
        rander(data2)
    }
    $('.link_item').click(handleclick);
   
})
