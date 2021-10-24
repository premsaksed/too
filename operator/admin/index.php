 <?php 
    $sql = "SELECT * FROM admin";
    $query = mysqli_query($conn, $sql);
 ?>
<center>
 <h1 class="app-page-title">ตารางข้อมูลผู้ดูเเลระบบ</h1></center>
 <hr class="mb-4">
    <div class="row g-4 settings-section">
	     <div class="col-12 col-md-12">
		    <div class="app-card app-card-settings shadow-sm p-4"> 
				<div class="app-card-body">
					        <a class="btn btn-primary text-white mb-2 float-right  <?php echo isset($_GET['page']) && $_GET['page'] == 'insert' ? 'active' : '' ?>" href="?page=insert"> เพิ่มข้อมูลผู้ดูเเลระบบ</a>
                    <thead>
                  <table class="table" id="tableall">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Menu</th>
                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($query as $data):?>
                            <tr>
                                <td><?=$data['u_id']?></td>
                                <td><?=$data['username']?></td>
                                <td><?=$data['password']?></td>
                                <td><?=$data['email']?></td>
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
<script type="text/javascript">
  $(document).ready( function () {
    $('#tableall').DataTable();
} );
</script>
<?php
    mysqli_close($conn);
?>         