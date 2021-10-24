
<h1 class="app-page-title">เพิ่มข้อมูลผู้ดูเเลระบบ</h1>
<hr class="mb-4">
    <div class="row g-4 settings-section">
	    <div class="col-12 col-md-12">
		    <div class="app-card app-card-settings shadow-sm p-4"> 
				<div class="app-card-body">
            <?php
             print_r($_POST);
                if(isset($_POST) && !empty($_POST)){
            // print_r($_POST)
                $username=$_POST["username"];
                $password=$_POST["password"];
                $email=$_POST["email"];

            //บันทึกข้อมูล
	            $sql = "INSERT INTO admin (username, password, email)
                VALUES ('$username','$password','$email')";

                if(mysqli_query($conn, $sql)) {
                    echo "เพิ่มข้อมูลสำเร็จ";
                }else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    mysqli_close($conn);
                                    
                    }
            ?>

	<form action="" method="post">
		<div class="mb-3">
			<label for="setting-input-1" class="form-label">ชื่อผู้ใช้</label>
			<input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้" required>
		</div>
		<div class="mb-3">
			<label for="setting-input-2" class="form-label">รหัสผ่าน</label>
			<input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required>
		</div>
        <div class="mb-3">
			<label for="setting-input-2" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" placeholder="อีเมลล์" required>
		</div>
					
		<button type="submit" class="btn app-btn-primary" >บันทึก</button>
	</form>
	    </div><!--//app-card-body-->
						    
		</div><!--//app-card-->
	</div>
</div><!--//row-->
               
			    


