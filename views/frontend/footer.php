<?php
    require_once('config/database.php');
    $db=new Database();
    $sql="SELECT `name`,id FROM name_tuyen";
    $result=$db->query($sql);
?>
<footer class="">
        <div class=" footer-top">
            <div class="container">
            <div class="row">
                <div class="col-md">
                    <p class="logo_footer">Logo.</p> 
                    <p><b>Địa chỉ: </b>THANH PHO HO CHI MINH</p>
                    <p class="mt-4"><b>Liên hệ: </b> 0333583800</p>
                </div>
                <div class="col-md col-6 position-relative">
                    <h6 class="fs-4  text-white ">Tra cứu</h6>
                    <ul class='p-0 m-0'>
                        <li><a href="index.php">trang chủ</a> </li>
                        <li><a href="?option=booking"> đặt vé</a></li>
                        <li><a href="?option=search"> tra cứu vé</a></li>
                    </ul>
                </div>
                <div class="col-md col-6">
                <h6 class="fs-4 text-white">các tuyến</h6>
                    <ul class="footer_link m-0 p-0">
                        <?php while($row=$result->fetch_assoc()): ?>
                        <li><a <?php if(isset($_REQUEST['option'])) echo "href ='index.php'"; else echo "href ='#main'"  ?> data-id="<?=$row['id']?>" class="link_item" ><?=$row['name']?></a></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div class="col-md">
                <h6 class="fs-4 text-white ">theo dõi chúng tôi</h6>
                    <ul class='m-0 p-0'>
                        <li><a href="https://www.facebook.com/profile.php?id=100040615716486">Facebook</a> </li>
                        <li><a href="">Zalo</a> </li>
                        <li><a href="https://github.com/vuvandinh123">GitHub</a></li>
                    </ul>
                </div>
            </div>
            </div>
            
        </div>
        <div class="row footer-bottom w-100 pt-5 m-0">
                <div class="col  ">
                    <p class='text-center w-75 mx-auto fs-6'>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, consectetur commodi nihil suscipit consequuntur aut! Est nobis nisi autem illum eaque voluptate harum doloribus debitis soluta ratione sit, laboriosam recusandae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum nisi tenetur eaque vel aspernatur labore, ipsum nostrum minus cumque rem id voluptates ullam alias? Id placeat non laboriosam expedita consectetur.</p>
                    <p class='text-center'>Vu Van Dinh</p>
                </div>
            </div>
        
    </footer>
    
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'>
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="public/js/index.js" type="text/javascript"></script>
    <script src="public/js/search.js" type="text/javascript"></script>
    <script src="public/js/home.js" type="text/javascript"></script>
   
   
   
   
   <script>
    $(document).ready(function() {
  $('body').addClass('loading');
});
$(window).on('load', function() {
  $('body').removeClass('loading');
  $('.loader-container').fadeOut('slow');
});
$(document).ready(function() {
    $(document).ajaxStart(function() {
  $(".loader-container").fadeIn();
});

$(document).ajaxStop(function() {
  $(".loader-container").fadeOut();
});
})

</script>


</body>
</html>