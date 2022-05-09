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
                          <a href="taikhoan_them.php" class="btn btn-sm btn-outline-primary">Thêm tài khoản</a>
                          <p class="mb-4">
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                              <tr>
                                <th class="text-center" scope="col">User</th>
                                <th scope="col">Pass Word </th>  
                                <th scope="col">Tên người dùng  </th>  
                                <th scope="col">Sđt </th>  
                                <th scope="col">Email  </th>
                                <th scope="col">Chức vụ </th>                                  
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
    const querySnapshot = await getDocs(collection(db,"taikhoan"));
    var output = "";
    querySnapshot.forEach((doc) => {
        output += '<tr>';
            output += '<td>'+ doc.data().user+'</td>';
            output += '<td>'+ doc.data().password+'</td>';
            output += '<td>'+ doc.data().username+'</td>';
            output += '<td>'+ doc.data().sdt+'</td>';
            output += '<td>'+ doc.data().email+'</td>';
            if (doc.data().chucvu == 1)
            {
              output += '<td>'+ 'Quản Lý'+'</td>';
            }
            else 
            {
              output += '<td>'+ 'Nhân Viên'+'</td>';
            }
            output += '<td><div class="dropdown"><button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button><div class="dropdown-menu"><a class="dropdown-item" href="taikhoan_sua.php?id='+ doc.id+'"><i class="bx bx-edit-alt me-1"></i> Edit</a><a class="dropdown-item" href="taikhoan_xoa_xuly.php?id='+ doc.id+'" onclick="return confirm(\'Bạn có muốn xóa '+ doc.data().username+' không ?\')"><i class="bx bx-trash me-1"></i> Delete</a></div></div></td>';
        output += '</tr>';
    });
    $('#hienthi').html(output);
</script>