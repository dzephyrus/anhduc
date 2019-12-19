			<?php
									include 'connection.php';
									if(isset($_POST['xacnhan'])){
										$name = $_POST['user-name'];
										$email = $_POST['email'];
										$phone = $_POST['phone'];
										$pass = $_POST['user-password1'];
										$repass = $_POST['user-password2'];
										#Check 2 pass
										 if($pass==$repass){
											$sqlCheckUser = "select * from user where name_u= '$name';";
											$kqCheckUser = $conn->query($sqlCheckUser)->fetch();
											#Check tài khoản tồn tại
											if(isset($kqCheckUser['id_u'])){
												?><br> <script> alert('Tài khoản đã tồn tại');location.href='register.php' </script> <?php
											}else{
												$sqlSignin = "insert into user value('','$name','$phone','$email','$pass','kh')";
												$kqSignin = $conn ->exec($sqlSignin);
												if($kqSignin){
													?><br> <script> alert('Đăng ký tài khoản thành công');location.href='login.php' </script> <?php
												}else{
													?><br> <script> alert('Đăng ký tài khoản không thành công')</script> <?php
												}								
											}
										}else{
											?><br> <script> alert('Tài khoản đã tồn tại');location.href='register.php </script> <?php
										}
									}

								?>