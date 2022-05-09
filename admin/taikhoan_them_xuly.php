<?php
  include 'header.php';
?>
      <!-- Card-->
      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            Xử lý thêm tài khoản
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>
    <div>
<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>
<script type="module">
    import { getFirestore, collection, addDoc } from 'https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js';
    const db= getFirestore();
    const docRef = await addDoc (collection (db, "taikhoan"),{
        user: '<?php echo $_POST ['user']; ?>',
        password: '<?php echo $_POST['password']; ?>',
        username: '<?php echo $_POST ['username']; ?>',
        sdt: '<?php echo $_POST['sdt']; ?>',
        email: '<?php echo $_POST ['email']; ?>',
        chucvu: '<?php echo $_POST['chucvu']; ?>',
    }) ;
    location.href = 'taikhoan.php';
</script>
