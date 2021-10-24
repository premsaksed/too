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
					$id = $_POST["id"];
					$m_user = $_POST["m_user"];
					$m_pass = $_POST["m_pass"];
					$m_store = $_POST["m_store"];
					$m_tel = $_POST["m_tel"];
					$m_email = $_POST["m_email"];
					$m_loca = $_POST["m_loca"];

					//บันทึกข้อมูล
					$sql = "UPDATE `operator` SET `m_user`='$m_user',`m_pass`='$m_pass',
				`m_store`='$m_store',`m_tel`='$m_tel',`m_email`='$m_email',`m_loca`='$m_loca' WHERE id= '$id'";

					if (mysqli_query($conn, $sql)) {
						echo "เพิ่มข้อมูลสำเร็จ";
					} else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					mysqli_close($conn);
				}
				?>
				<?php
				$sql = "SELECT * FROM operator";
				$query = mysqli_query($conn, $sql);
				?> <?php foreach ($query as $data) : ?>
					<form action="" method="post">
						<div class="mb-3">
							<label for="setting-input-1" class="form-label">ชื่อผู้ใช้</label>
							<input type="text" class="form-control" name="m_user" value="<?=$data['id']?>" placeholder="ชื่อผู้ใช้" required>
						</div>
						<div class="mb-3">
							<label for="setting-input-2" class="form-label">รหัสผ่าน</label>
							<input type="password" class="form-control" name="m_pass" placeholder="รหัสผ่าน" required>
						</div>
						<div class="mb-3">
							<label for="setting-input-2" class="form-label">ร้าน</label>
							<input type="text" class="form-control" name="m_store" placeholder="ร้าน" required>
						</div>
						<div class="mb-3">
							<label for="setting-input-2" class="form-label">เบอร์โทร</label>
							<input type="text" class="form-control" name="m_tel" placeholder="เบอร์โทร" required>
						</div>
						<div class="mb-3">
							<label for="setting-input-2" class="form-label">Email</label>
							<input type="email" class="form-control" name="m_email" placeholder="อีเมลล์" required>
						</div>
						<div class="mb-3">
							<label for="setting-input-2" class="form-label">ที่อยู่</label>
							<input type="text" class="form-control" name="m_loca" placeholder="ที่อยู่" required>
						</div>

						<button type="submit" class="btn app-btn-primary">บันทึก</button>
					</form> <?php endforeach; ?>
			</div>
			<!--//app-card-body-->

		</div>
		<!--//app-card-->
	</div>
</div>
<!--//row-->


<?php
mysqli_close($conn);
?>