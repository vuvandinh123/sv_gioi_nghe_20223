<?php require_once('views/frontend/header.php') ?>

<script>

</script>
  <div class="container">
    <main>
    <form action="views/frontend/upload.php" method="post" class="row g-3 needs-validation mt-5">
      <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Tuyến</label>
        <select name='tuyen' class="form-select" id="select-tuyen" required>
          <option selected disabled value="">Chọn tuyến</option>
          <option value="1">Tuyến 1</option>
          <option value="2">Tuyến 2</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Số ghế trống</label>
        <div id='ge'>0</div>
      </div>

      <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Ga lên</label>
        <select name="ga_len" class="form-select danh-sach-ga" id="select-len" required>
          <option selected disabled >Chọn Ga</option>
          
        </select>

      </div>
      <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Ga xuống</label>
        <select name="ga_xuong" class="form-select danh-sach-ga " id="select-xuong" required>
          <option selected disabled >Chọn ga xuống</option>

        </select>
      </div>
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Số lượng đặt</label>
        <input name="so_luong_dat" type="number" value="1" class="form-control" min="1" id="so_luong" required>
      </div>
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Số điện thoại</label>
        <input name="phone" id=""  type="number" class="form-control rounded-0" id="validationCustom03" required>
      </div>
      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Thành tiền</label>
        <div id="price">0 Đồng</div>
          
      </div>
      <input name="price" id="price2" type="hidden">
      <div class="col-6">
        <button class="btn btn-primary" name="datve" type="submit">Đặt</button>
      </div>
      <div class="col-12">
        <?php session_start();
        if (isset($_SESSION['message'])) {
          echo  $_SESSION['message'];
          unset($_SESSION['message']);
        } ?>
      </div>
    </form>
    </main>
  </div>
  
<?php require_once('views/frontend/footer.php') ?>

