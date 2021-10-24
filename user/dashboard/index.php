<?php 
    $sql = "SELECT * FROM work";
    $query = mysqli_query($conn, $sql);
 ?>
<center>
 <h1 class="app-page-title">หน้าหลัก</h1></center>
 <hr class="mb-4">
    <div class="row g-4 settings-section">
	     <div class="col-12 col-md-12">
		    <div class="app-card app-card-settings shadow-sm p-4"> 
				<div class="app-card-body">
        
              <table class="table">
                  <thead>
                  <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">work_id</th>
                        <th scope="col">position</th>
                        <th scope="col">age</th>
                        <th scope="col">ed_qual</th>
                        <th scope="col">estab</th>
                        <th scope="col">property</th>
                        <th scope="col">Menu</th>
                      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($query as $data):?>
                            <tr>
                                <td><?=$data['work_id']?></td>
                                <td><?=$data['position']?></td>
                                <td><?=$data['age']?></td>
                                <td><?=$data['ed_qual']?></td>
                                <td><?=$data['estab']?></td>
                                <td><?=$data['property']?></td>
                                <td>
                                    <a herf="" class="btn btn-warning text-white">register</a>
                                  
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
              