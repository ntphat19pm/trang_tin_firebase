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
                <input type="text" id ="id" name="id" hidden>
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

<script type="module">
    import { getFirestore, doc, getDoc } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js";
    const db = getFirestore();
    const docRef = doc(db,"loaitin","<?php echo $_GET['id']; ?>");
    const docSanp = await getDoc(docRef);
    if(docSanp.exists())
    {
        $('#id').val(docSanp.id);
        $('#tenloai').val(docSanp.data().tenloai);
    }
    else
    {
        console.log('no such document');
    }
    
</script>