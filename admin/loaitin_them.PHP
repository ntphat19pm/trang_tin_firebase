<?php
  include 'header.php';
?>
      <!-- Card-->
      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            Thêm loại tin
          </div>
          <div class="card-body">
            <form action="loaitin_them_xuly.php" method="POST">
                <div class="form-group">
                    <a>
                        <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Thêm</button>
                    </a>
                    <a href="loaitin.php" class="btn btn-sm btn-danger mb-3">
                        <i class="fas fa-sign-out-alt"> Quay về bảng loại tin</i>     
                    </a>
                </div>
                <div class="row">  
                  <div class="col-lg-4">
                    <div class="form-group invalid">
                        <label for="maloai" class="form-label">Mã loại</label>
                        <input type="text" class="form-control" name="maloai" id="maloai" required >
                    </div>                        
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group invalid">
                      <label for="tenloai" class="form-label">Tên loại</label>
                      <input type="text" class="form-control" name="tenloai" id="tenloai" required >
                    </div>
                  </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    <div>
<?php
  include 'footer.php';
  include 'js.php';
?>
