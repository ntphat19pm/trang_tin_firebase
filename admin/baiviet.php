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
                          <h5 class="card-title text-primary text-center">Bảng bài viết</h5>
                          <a href="baiviet_them.php" class="btn btn-sm btn-outline-primary">Thêm bài viết</a>
                          <p class="mb-4">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th class="text-center" scope="col">STT</th>
                                <th scope="col">Tên Bài viết</th>  
                                <th scope="col">Người viết</th>  
                                <th scope="col">Loại tin</th>  
                                <th scope="col">Ảnh đại diện</th>  
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
    const querySnapshot = await getDocs(collection(db,"baiviet"));
    var output = "";
    var i=0;
    querySnapshot.forEach((doc) => {
      i++
      output += '<tr>';
          output += '<td>'+ i+'</td>';
          output += '<td>'+ doc.data().tenbai+'</td>';
          output += '<td>'+ doc.data().nguoiviet+'</td>';
          output += '<td>'+ doc.data().loaitin_id+'</td>';
          output += '<td class="text-center"><img width="50" src ="../images/'+doc.data().avatar+'"></td>';
          output += '<td><div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item" href="baiviet_sua.php?id='+ doc.id+'"><i class="bx bx-edit-alt me-1"></i> Edit</a><a class="dropdown-item" href="baiviet_xoa_xuly.php?id='+ doc.id+'" onclick="return confirm(\'Bạn có muốn xóa '+ doc.data().tenloai+' không ?\')"><i class="bx bx-trash me-1"></i> Delete</a></div></div></td>';
      output += '</tr>';
    });
    $('#hienthi').html(output);
</script>