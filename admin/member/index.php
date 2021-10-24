<?php 
    $sql = "SELECT * FROM member";
    $query = mysqli_query($conn, $sql);
 ?>
<center>
 <h1 class="app-page-title">ข้อมูลผู้หางาน</h1></center>
 <hr class="mb-4">
    <div class="row g-4 settings-section">
	     <div class="col-12 col-md-12">
		    <div class="app-card app-card-settings shadow-sm p-4"> 
				<div class="app-card-body">
                <a class="btn btn-primary text-white mb-2 float-right  <?php echo isset($_GET['page']) && $_GET['page'] == 'insert' ? 'active' : '' ?>" href="?page=insertmember"> เพิ่มข้อมูลผู้หางาน</a>

              <table class="table">
                  <thead>
                  <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">m_store</th>
                        <th scope="col">Password</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Email</th>
                        <th scope="col">Loca</th>
                        <th scope="col">Edu</th>
                        <th scope="col">Std</th>
                        <th scope="col">Uni</th>
                        <th scope="col">fac</th>
                        <th scope="col">Tri</th>
                        <th scope="col">Menu</th>
                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($query as $data):?>
                            <tr>
                                <td><?=$data['m_id']?></td>
                                <td><?=$data['m_user']?></td>
                                <td><?=$data['m_store']?></td>
                                <td><?=$data['m_pass']?></td>
                                <td><?=$data['m_tel']?></td>
                                <td><?=$data['m_email']?></td>
                                <td><?=$data['m_loca']?></td>
                                <td><?=$data['m_edu']?></td>
                                <td><?=$data['m_stu']?></td>
                                <td><?=$data['m_uni']?></td>
                                <td><?=$data['m_fac']?></td>
                                <td><?=$data['m_tri']?></td>
                                <td>
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