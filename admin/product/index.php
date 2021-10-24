<?php 
    $sql = "SELECT * FROM operator";
    $query = mysqli_query($conn, $sql);
 ?>
<center>
 <h1 class="app-page-title">ข้อมูลผู้ประกอบการ</h1></center>
 <hr class="mb-4">
    <div class="row g-4 settings-section">
	     <div class="col-12 col-md-12">
		    <div class="app-card app-card-settings shadow-sm p-4"> 
				<div class="app-card-body">
                <a class="btn btn-primary text-white mb-2 float-right  <?php echo isset($_GET['page']) && $_GET['page'] == 'insert' ? 'active' : '' ?>" href="?page=insertproduct"> เพิ่มข้อมูลผู้ประกอบการ</a>

              <table class="table">
                  <thead>
                  <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">m_store</th>
                        <th scope="col">m_tel</th>
                        <th scope="col">m_email</th>
                        <th scope="col">m_loca</th>
                        <th scope="col">Menu</th>
                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($query as $data):?>
                            <tr>
                                <td><?=$data['id']?></td>
                                <td><?=$data['m_user']?></td>
                                <td><?=$data['m_pass']?></td>
                                <td><?=$data['m_store']?></td>
                                <td><?=$data['m_tel']?></td>
                                <td><?=$data['m_email']?></td>
                                <td><?=$data['m_loca']?></td>
                                <td>
                                <a class="btn btn-warning text-white mb-2 float-right  <?php echo isset($_GET['page']) && $_GET['page'] == 'edit' ? 'active' : '' ?>" 
                                href="?id=<?php echo$data['id']; ?>?page=editproduct"> เพิ่มข้อมูลผู้ประกอบการ</a>

                                <a herf="" class="btn btn-warning text-white">Edit</a>
                                    <a herf="" class="btn btn-danger text-white">Delete</a>
                                </td>
                            </tr>
                        
                    <?php endforeach; ?>
                    </tbody>
                    </table>
                  </thead>
              </table>
	    </div><!--//app-card-body-->
						    
    </div><!--//app-card-->
    </div>
</div><!--//row-->
<?php
    mysqli_close($conn);
?>         