<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Đăng ký thành viên</title>
		<style>
			*{
				margin: 0px;
				padding: 0px;
			}
			form{
				width: 400px;
				margin: 40px auto;
				border: 1px solid #DDDDDD;
			}
			form h2{
				background: #009999;
				color: #fff;
				text-align: center;
				padding: 4px;
			}
			label{
				width: 100px;
				float: left;
				margin: 6px;
				margin-left: 15px;
				color: #009999;
			}
			form input{
				padding: 5px 10px;
				margin: 6px;
			}
		</style>
</head>
<body>
	<?php
	require_once("form_dang_ky/connection.php");
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["pass"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
			echo "chúc mừng bạn đã đăng ký thành công";
		}
	}
 
?>

	<form action="rigester.php" method="POST">
		<h2>Đăng ký thành viên</h2>
		<label><b>Username</b></label>
		<input type="text" name="username" placeholder="Username"><br>
		<label><b>Password</b></label>
		<input type="text" name="password" placeholder="Password"><br>
		<label><b>Email</b></label>
		<input type="text" name="email" placeholder="Email"><br>
		<label><b>Fullname</b></label>
		<input type="text" name="fullname" placeholder="Fullname"><br>
		<label>&nbsp</label>
		<input type="submit" name="btdanngky" value="Đăng ký">
		<input type="reset" value="Nhập lại">

	</form>
</body>
</html>