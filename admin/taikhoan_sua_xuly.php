<?php
  include 'header.php';
?>
      <!-- Card-->
      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            Xử lý sửa tài khoản
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>
    <div>
<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>
<script type="module">
    import { getFirestore, doc, updateDoc } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js";
    const db = getFirestore();
    const docRef = doc(db,"taikhoan","<?php echo $_POST['id']; ?>");
    await updateDoc(docRef,{
        user: '<?php echo $_POST['user']; ?>',
        password: '<?php echo $_POST['password']; ?>',
        username: '<?php echo $_POST ['username']; ?>',
        sdt: '<?php echo $_POST['sdt']; ?>',
        email: '<?php echo $_POST ['email']; ?>',
        chucvu: '<?php echo $_POST['chucvu']; ?>',
        gioitinh: '<?php echo $_POST['gioitinh']; ?>',
        diachi: '<?php echo $_POST['diachi']; ?>',
        cmnd: '<?php echo $_POST['cmnd']; ?>',
        ngaysinh: '<?php echo $_POST['ngaysinh']; ?>'
    });
    location.href = 'taikhoan.php';
</script>