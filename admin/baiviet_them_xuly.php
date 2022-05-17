<?php
  include 'header.php';
?>
      <!-- Card-->
      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            Xử lý thêm bài viết
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
    const docRef = await addDoc (collection (db, "baiviet"),{
        tenbai: '<?php echo $_POST['tenbai']; ?>',
        avatar: '<?php echo $_POST['avatar']; ?>',
        loaitin_id: '<?php echo $_POST['loaitin_id']; ?>',
        nguoiviet: '<?php echo $_POST['nguoiviet']; ?>',
        mota: '<?php echo $_POST['mota']; ?>',
        noidung: '<?php echo $_POST['noidung']; ?>',
    }) ;
    location.href = 'baiviet.php';
</script>
