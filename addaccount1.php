<?php
	session_start();
	ob_start();
    include 'connection.php';
    if(isset($_SESSION['name_u'])){
        $username=$_SESSION['name_u'];
        $sqltk = "select * from user where name = '$username'";
        $stmt= $conn ->prepare($sqltk);
		$stmt -> execute();
		$row = $stmt -> fetch();

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Charts</title>

  <!-- Custom fonts for this template-->
  <link href="startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="danhmuc1.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item ">
        <a class="nav-link" href="danhmuc1.php">
          <i class="fas fa-fw fa-tasks"></i>
          <span>Danh mục</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      

      <!-- Nav Item - Pages Collapse Menu -->
       <li class="nav-item">
        <a class="nav-link" href="sanpham1.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Product</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <hr class="sidebar-divider">
		
		<li class="nav-item">
        <a class="nav-link" href="order1.php">
         <i class="fas fa-cash-register"></i>
          <span>Đơn hàng</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
     

      <!-- Nav Item - Pages Collapse Menu -->
      

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="comment1.php">
          <i class="fas fa-fw fa-comments"></i>
          <span>Comment</span></a>
      </li>
		
		<hr class="sidebar-divider">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="slide1.php">    
		  <i class="fas fa-fw fa-chart-area"></i>
          <span>Slide</span></a>
      </li>
		
		<hr class="sidebar-divider">
		
		<li class="nav-item">
        <a class="nav-link" href="voucher1.php">
          <i class="fas fa-money-check-alt"></i>
          <span>Voucher</span></a>
      </li>
		
		<hr class="sidebar-divider">
		
		<li class="nav-item">
        <a class="nav-link" href="account1.php">
          <i class="fas fa-fw fa-user"></i>
          <span>Tài khoản</span></a>
      </li>
		
		<hr class="sidebar-divider">
		
		<li class="nav-item">
        <a class="nav-link" href="setting1.php">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Cài đặt</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           

            <!-- Nav Item - Messages -->
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $username ?></span>
                
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="logout.php" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
				  <a class="dropdown-item" href="duanmau.php" >
                  <i class="fas fa-pager fa-sm fa-fw mr-2 text-gray-400"></i>
                  my web
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Đăng ký</h1>
          

          <!-- Content Row -->
          <div class="row">

            <form action="" method="post">
	<div class="form-group">
    <label for="inputAddress">tên</label>
    <input name="name" type="text" class="form-control" id="inputAddress" placeholder="name" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">pass</label>
      <input name="pass" type="password" class="form-control" id="inputEmail4" placeholder="password" required>
    </div>
	  <div class="form-group col-md-6">
      <label for="inputCity">Số điện thoại</label>
      <input name="phone" type="tel" class="form-control" id="inputCity" required placeholder="+8400000000" pattern="(\+84|0)\d{9,10}"    title="Nhập số điện thoại từ 10 đến 11 số"  min ="0"  >
    </div>
    
  </div>
					  
  <div class="form-row">
	  
  <div class="form-group col-md-8">
      <label for="inputCity">email</label>
      <input name="email" type="email" class="form-control" id="inputCity" required  pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*$">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">quyền</label>
      <select name="quyen" id="inputState" class="form-control">
        <option selected>admin</option>
        <option>user</option>
      </select>
    </div>
    
  </div>
  <div class="form-group">
    
  </div>
  <button type="submit" name="add_sp" class="btn btn-primary">thêm</button>
</form>
<?php
	include "connection.php";
		if(isset($_POST['add_sp'])){
			if($_POST['name']==""|| $_POST['pass']==""|| $_POST['phone']==""||$_POST['email']==""){
				echo"thêm thất bại, phải nhập đủ thông tin";
			}
			else{
				$name= $_POST['name'];
				$pass = $_POST['pass'];
				$phone = $_POST['phone'];
				$email =$_POST['email'];
				$quyen= $_POST['quyen'];	
				$sql= "insert into user values('','$name','$phone','$email','$pass','$quyen')";
				$kq = $conn->exec($sql);
				if($kq==1){
				header("location:account1.php");
			}
			else{
				echo "không thêm đc dữ liệu";
			}
			}
		}
	?>	  
            <!-- Donut Chart -->
            
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js"></script>
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="startbootstrap-sb-admin-2-gh-pages/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="startbootstrap-sb-admin-2-gh-pages/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="startbootstrap-sb-admin-2-gh-pages/js/demo/chart-area-demo.js"></script>
  <script src="startbootstrap-sb-admin-2-gh-pages/js/demo/chart-pie-demo.js"></script>
  <script src="startbootstrap-sb-admin-2-gh-pages/js/demo/chart-bar-demo.js"></script>

</body>

</html>
<?php
    }else{
        header("location:login.php");
    }
	ob_end_flush();
?>