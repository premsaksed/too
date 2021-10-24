
<h1 class="app-page-title">เพิ่มงาน</h1>
<hr class="mb-4">
    <div class="row g-4 settings-section">
	    <div class="col-12 col-md-12">
		    <div class="app-card app-card-settings shadow-sm p-4"> 
				<div class="app-card-body">
            <?php
             print_r($_POST);
                if(isset($_POST) && !empty($_POST)){
            // print_r($_POST)
                $position=$_POST["position"];
                $age=$_POST["age"];
                $ed_qual=$_POST["ed_qual"];
                $estab=$_POST["estab"];
                $property=$_POST["property"];

            //บันทึกข้อมูล
	            $sql = "INSERT INTO work (position, age, ed_qual,estab,property)
                VALUES ('$position','$age','$email','$estab','$property')";

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
			<label for="setting-input-1" class="form-label">position</label>
			<input type="text" class="form-control" name="position" placeholder="position" required>
		</div>
		<div class="mb-3">
			<label for="setting-input-2" class="form-label">age</label>
			<input type="text" class="form-control" name="age" placeholder="age" required>
		</div>
        <div class="mb-3">
			<label for="setting-input-2" class="form-label">ed_qual</label>
			<input type="text" class="form-control" name="ed_qual" placeholder="ed_qual" required>
		</div>
        <div class="mb-3">
			<label for="setting-input-2" class="form-label">estab</label>
			<input type="text" class="form-control" name="estab" placeholder="estab" required>
		</div>
        <div class="mb-3">
			<label for="setting-input-2" class="form-label">property</label>
			<input type="text" class="form-control" name="property" placeholder="property" required>
		</div>
					
		<button type="submit" class="btn app-btn-primary" >บันทึก</button>
	</form>
	    </div><!--//app-card-body-->
						    
		</div><!--//app-card-->
	</div>
</div><!--//row-->
               
			    


