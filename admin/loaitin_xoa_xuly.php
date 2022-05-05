<?php
  include 'header.php';
?>
      <!-- Card-->
      <div class="container">
        <div class="card mt-5">
          <div class="card-header">
            Xử lý xoá loại tin
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>
    <div>
<?php include 'footer.php'; ?>
<?php include 'js.php'; ?>
<script type="module">
    import { getFirestore, doc, deleteDoc } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js";
    const db = getFirestore();
    await deleteDoc(doc(db,"loaitin","<?php echo $_GET['id']; ?>"));
    location.href = 'loaitin.php';
</script>
