			<?php
									include 'connection.php';
									if(isset($_POST['xacnhan'])){
										$name = $_POST['user-name'];
										$email = $_POST['email'];
										$phone = $_POST['phone'];
										$pass = $_POST['user-password'];
										$repass = $_POST['user-password2'];
										#Check 2 pass
										if($_POST['user-name']=="" || $_POST['email']=="" ||
										   $_POST['user-password']=="" || 
										   $_POST['user-password2']=="" || $_POST['phone']==""){
											?> <script> alert('Dữ liệu không được để trống'); </script> <?php
										}else if($pass==$repass){
											$sqlCheckUser = "select * from user where name_u= '$name';";
											$kqCheckUser = $conn->query($sqlCheckUser)->fetch();
											#Check tài khoản tồn tại
											if(isset($kqCheckUser['id_u'])){
												?><br> <script> alert('Tên tài khoản đã tồn tại');location.href='register.php' </script> <?php
											}else{
												$sqlSignin = "insert into user value('','$name','$phone','$email','$pass','kh')";
												$kqSignin = $conn ->exec($sqlSignin);
												if($kqSignin){
													
													header("location:login.php");
													
												}else{
													?><br> <script> alert('Đăng ký tài khoản không thành công');location.href='login.php' </script> <?php
												}								
											}
										}else{
											?><br> <script> alert('Hai mật khẩu không trùng nhau');location.href='register.php' </script> <?php
										}
									}

								?>