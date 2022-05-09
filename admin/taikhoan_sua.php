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
            <form action="loaitin_sua_xuly.php" method="POST">
                <div class="form-group">
                    <a>
                        <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Cập nhật</button>
                    </a>
                    <a href="loaitin.php" class="btn btn-sm btn-danger mb-3">
                        <i class="fas fa-sign-out-alt"> Quay về bảng loại tin</i>     
                    </a>
                </div>
                               <div class="row">  
                  <div class="col-lg-4">
                    <div class="form-group invalid">
                        <label for="user" class="form-label">Tài khoản</label>
                        <input type="text" class="form-control" name="user" id="user" required >
                    </div>                        
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group invalid">
                      <label for="password" class="form-label">Mật khẩu</label>
                      <input type="text" class="form-control" name="password" id="password" required >
                    </div>
                  </div>
                   <div class="col-lg-4">
                    <div class="form-group invalid">
                      <label for="username" class="form-label">Tên người dùng</label>
                      <input type="text" class="form-control" name="username" id="username" required >
                    </div>
                  </div>
                   <div class="col-lg-4">
                    <div class="form-group invalid">
                      <label for="sdt" class="form-label">Sđt </label>
                      <input type="text" class="form-control" name="sdt" id="sdt" required >
                    </div>
                  </div>
                   <div class="col-lg-4">
                    <div class="form-group invalid">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" class="form-control" name="password" id="password" required >
                    </div>
                  </div>
                   <div class="col-lg-4">
                    <div class="form-group invalid">
                      <label for="chucvu" class="form-label">Chức vụ</label>
                      <select name="chucvu" id="chucvu" required class="form-control">
                            <option> - chọn - </option>
                            <option value="2">Nhân viên</option>
                            <option value="1">Quản lý</option>
                        </select>
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

<script type="module">
    import { getFirestore, doc, getDoc } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js";
    const db = getFirestore();
    const docRef = doc(db,"loaitin","<?php echo $_GET['id']; ?>");
    const docSanp = await getDoc(docRef);
    if(docSanp.exists())
    {
        $('#id').val(docSanp.id);
        $('#user').val(docSanp.data().user);
        $('#password').val(docSanp.data().password);
                $('#username').val(docSanp.data().username);
        $('#sdt').val(docSanp.data().sdt);
                $('#email').val(docSanp.data().email);
        $('#chucvu').val(docSanp.data().chucvu);
    }
    else
    {
        console.log('no such document');
    }
    
</script>