<?php
  include 'header.php';
?>
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="card-body">
                          <h5 class="card-title text-primary text-center">Bảng loại tin</h5>
                          <a href="loaitin_them.php" class="btn btn-sm btn-outline-primary">Thêm loại tin</a>
                          <p class="mb-4">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th class="text-center" scope="col">STT</th>
                                <th scope="col">Tên loại</th>  
                                <th class="text-right" scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody id="hienthi">
                       
                            </tbody>
                          </table>
                          </p>

                          
                        </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
<?php
  include 'footer.php';
  include 'js.php';
?>

<script type="module">
	import { getFirestore, collection, getDocs } from "https://www.gstatic.com/firebasejs/9.6.8/firebase-firestore.js";
    const db = getFirestore();
    const querySnapshot = await getDocs(collection(db,"loaitin"));
    var output = "";
    var i=0;
    querySnapshot.forEach((doc) => {
      i++
      output += '<tr>';
          output += '<td>'+ i+'</td>';
          output += '<td>'+ doc.data().tenloai+'</td>';
          output += '<td><div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item" href="loaitin_sua.php?id='+ doc.id+'"><i class="bx bx-edit-alt me-1"></i> Edit</a><a class="dropdown-item" href="loaitin_xoa_xuly.php?id='+ doc.id+'" onclick="return confirm(\'Bạn có muốn xóa '+ doc.data().tenloai+' không ?\')"><i class="bx bx-trash me-1"></i> Delete</a></div></div></td>';
      output += '</tr>';
    });
    $('#hienthi').html(output);
</script>