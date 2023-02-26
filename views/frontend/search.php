<?php require_once('views/frontend/header.php');
?>
<style>
    table,td,th{
        border: 3px solid !important;
    }
    #search{
        width: 170px;
        /* height: 25px; */
        font-size: 13px;
        outline: none;
        border: 2px solid red;
        border-radius: unset;
    }
    .aa{
        /* align-items: center; */
    }
    #submit{
        /* padding: 6px 15px; */
        /* width: 30px; */
        border: 2px solid red;
        background-color: aquamarine;
    }
    
</style>
    <div class="container mt-5">
        <main>

        <div class='d-flex aa align-items-center'>
        <input id="search" class="my-3 ps-3 py-2" type="text" placeholder="số điện thoại">
        <button id="submit" class='px-4 py-2'>tìm</button>
        </div>
        
        
        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th>id</th>
                    <th>ngày</th>
                    <th>Tuyến</th>
                    <th>Ga Lên</th>
                    <th>Ga xuống</th>
                    <th>Giá</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
        <p class='text-center text-danger messeger'></p>
                    
        </main>
    </div>
    
<?php require_once('views/frontend/footer.php'); ?>
