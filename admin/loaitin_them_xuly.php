<?php
  include 'header.php';
?>
      <!-- Card-->
      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            Xử lý thêm loại tin
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
    const docRef = await addDoc (collection (db, "loaitin"),{
        maloai: <?php echo $_POST ['maloai']; ?>,
        tenloai: '<?php echo $_POST['tenloai']; ?>',
    }) ;
    location.href = 'loaitin.php';
</script>
