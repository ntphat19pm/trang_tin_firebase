<?php
  include 'header.php';
?>
      <!-- Card-->
      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            Sửa bài viết
          </div>
          <div class="card-body">
            <form action="baiviet_sua_xuly.php" method="POST">
                <div class="form-group">
                    <a>
                        <button type="submit" onclick="LayNoiDung()" class="btn btn-sm btn-primary float-right mb-3">Cập nhật</button>
                    </a>
                    <a href="baiviet.php" class="btn btn-sm btn-danger mb-3">
                        <i class="fas fa-sign-out-alt"> Quay về bảng bài viết</i>     
                    </a>
                </div>
                <div class="row">  
                  <input type="text" id ="id" name="id" hidden>
                  <div class="col-lg-4">
                    <div class="form-group invalid">
                      <label for="avatar" class="form-label">Hình đại diện</label>
                      <input type="text" class="form-control" name="avatar" id="avatar" required >
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group invalid">
                      <label for="tenbai" class="form-label">Tên bài viết</label>
                      <input type="text" class="form-control" name="tenbai" id="tenbai" required >
                    </div>
                  </div>
                  <div class="col-lg-6">
                        <div class="form-group">
                            <label for="loaitin_id">Loại tin<span class="text-danger font-weight-bold">*</span></label>
                            <select id="loaitin_id" class="form-control custom-select" name="loaitin_id" required autofocus>
                                
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nguoiviet">Người viết<span class="text-danger font-weight-bold">*</span></label>
                            <select id="nguoiviet" class="form-control custom-select" name="nguoiviet" required autofocus>
                                
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group invalid">
                            <label for="mota" class="form-label">Mô tả</label>
                            <input type="text" class="form-control" name="mota" id="mota" required >
                            </div>
                    </div>

                    <div class="col-lg-12">
                    <div class="form-group invalid">
                            <label for="noidung" class="form-label">Nội dung</label>
                            <input type="text" class="form-control" name="noidung" id="noidung" required >
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
    const docRef = doc(db,"baiviet","<?php echo $_GET['id']; ?>");
    const docSanp = await getDoc(docRef);
    if(docSanp.exists())
    {
        $('#id').val(docSanp.id);
        $('#tenbai').val(docSanp.data().tenbai);
        $('#avatar').val(docSanp.data().avatar);
        $('#noidung').val(docSanp.data().noidung);
        $('#mota').val(docSanp.data().mota);
        $('#nguoiviet').val(docSanp.data().nguoiviet);
        $('#loaitin_id').val(docSanp.data().loaitin_id);
    }
    else
    {
        console.log('no such document');
    }
    
</script>

<script type="module">
	import { getFirestore, collection, getDocs } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js";
    const db = getFirestore();
    const querySnapshot = await getDocs(collection(db,"loaitin"));
    var output = "";
    output += '<option value="">Chọn loại tin</option>';
    querySnapshot.forEach((doc) => {
        
        output += '<option value="'+ doc.data().id+'">'+ doc.data().tenloai+'</option>';
    });
    $('#loaitin_id').html(output);
</script>

<script type="module">
	import { getFirestore, collection, getDocs } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js";
    const db = getFirestore();
    const querySnapshot = await getDocs(collection(db,"taikhoan"));
    var output = "";
    output += '<option value="">Chọn loại tin</option>';
    querySnapshot.forEach((doc) => {
       
        output += '<option value="'+ doc.data().id+'">'+ doc.data().username+'</option>';
    });
    $('#nguoiviet').html(output);
</script>