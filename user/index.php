<?php include('../connection/connection.php') ?>

<!DOCTYPE html>
<html lang="en"> 
    <?php include('include/head.php') ?>
	<?php include('include/script.php') ?>
<body class="app">   	
<?php include('include/header.php') ?>

    <div class="app-wrapper">
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
				<?php if(!isset($_GET['page']) && empty($_GET['page'])){
					include('dashboard/index.php');
				}elseif(isset($_GET['page']) && $_GET['page'] == 'about'){
					include('about/index.php');
				}elseif(isset($_GET['page']) && $_GET['page'] == 'product'){
					include('product/index.php');
				}elseif(isset($_GET['page']) && $_GET['page'] == 'insertproduct'){
					include('product/insert.php');
				}elseif(isset($_GET['page']) && $_GET['page'] == 'editproduct'){
					include('product/edit.php');
				}elseif(isset($_GET['page']) && $_GET['page'] == 'member'){
					include('member/index.php');
				}elseif(isset($_GET['page']) && $_GET['page'] == 'insertmember'){
					include('member/insert.php');
				}elseif(isset($_GET['page']) && $_GET['page'] == 'insert'){
					include('admin/insert.php');
				}elseif(isset($_GET['page']) && $_GET['page'] == 'admin'){
					if(isset($_GET['function']) && $_GET['function'] == 'add'){
						include('admin/insert.php');
					}else{
						include('admin/index.php');
				}
			}
				?>
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	  <?php include('include/footer.php') ?><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					


	
</body>
</html> 

