<h1 class="app-page-title">เพิ่มข้อมูลผู้ดูเเลระบบ</h1>
<hr class="mb-4">
<div class="row g-4 settings-section">
	<div class="col-12 col-md-12">
		<div class="app-card app-card-settings shadow-sm p-4">
			<div class="app-card-body">
				<?php
				print_r($_POST);
				if (isset($_POST) && !empty($_POST)) {
					// print_r($_POST)
					$m_user = $_POST["m_user"];
					$m_store = $_POST["m_store"];
					$m_pass = $_POST["m_pass"];
					$m_tel = $_POST["m_tel"];
					$m_email = $_POST["m_email"];
					$m_loca = $_POST["m_loca"];
					$m_edu = $_POST["m_edu"];
					$m_stu = $_POST["m_stu"];
					$m_fac = $_POST["m_fac"];
					$m_tri=$_POST["m_tri"];
					$m_level=$_POST["m_level"];
					

					//บันทึกข้อมูล
					$sql = "INSERT INTO `member`( `m_user`, `m_store`, `m_pass`, `m_tel`, `m_email`, `m_loca`, `m_edu`, `m_stu`, `m_uni`, `m_fac`, `m_tri`, `m_level`) 
				VALUES ('$m_user','$m_store','$m_pass','$m_tel','$m_email','$m_loca','$m_edu','$m_stu','$m_uni','$m_fac','$m_tri','user')";

					if (mysqli_query($conn, $sql)) {
						echo "เพิ่มข้อมูลสำเร็จ";
					} else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				}
				?>

				<form action="" method="post">
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">ชื่อผู้ใช้</label>
						<input type="text" class="form-control" name="m_user" placeholder="ชื่อผู้ใช้" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-2" class="form-label">รหัสผ่าน</label>
						<input type="password" class="form-control" name="m_pass" placeholder="รหัสผ่าน" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-2" class="form-label">Email</label>
						<input type="email" class="form-control" name="m_email" placeholder="อีเมลล์" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">m_store</label>
						<input type="text" class="form-control" name="m_store" placeholder="m_store" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">เบอร์</label>
						<input type="text" class="form-control" name="m_tel" placeholder="เบอร์" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">ที่อยู่</label>
						<input type="text" class="form-control" name="m_loca" placeholder="ที่อยู่" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">โรงเรียน</label>
						<input type="text" class="form-control" name="m_edu" placeholder="โรงเรียน" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">นักเรียน</label>
						<input type="text" class="form-control" name="m_stu" placeholder="นักเรียน" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">หน่วย</label>
						<input type="text" class="form-control" name="m_uni" placeholder="หน่วย" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">คณะ</label>
						<input type="text" class="form-control" name="m_fac" placeholder="คณะ" required>
					</div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">..</label>
						<input type="text" class="form-control" name="m_tri" placeholder=".." required>
					</div>

					<button type="submit" class="btn app-btn-primary">บันทึก</button>
				</form>
			</div>
			<!--//app-card-body-->

		</div>
		<!--//app-card-->
	</div>
</div>
<!--//row-->